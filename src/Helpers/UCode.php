<?php declare(strict_types=1);

namespace AlecRabbit\Helpers;

class UCode
{
    // NOTE(jquast/wcwidth): created by hand, there isn't anything identifiable other than
    // general Cf category code to identify these, and some characters in Cf
    // category code are of non-zero width.
    // Also includes some Cc, Mn, Zl, and Zp characters
    private const ZERO_WIDTH_CF = [
        0,       // Null (Cc)
        0x034F,  // Combining grapheme joiner (Mn)
        0x200B,  // Zero width space
        0x200C,  // Zero width non-joiner
        0x200D,  // Zero width joiner
        0x200E,  // Left-to-right mark
        0x200F,  // Right-to-left mark
        0x2028,  // Line separator (Zl)
        0x2029,  // Paragraph separator (Zp)
        0x202A,  // Left-to-right embedding
        0x202B,  // Right-to-left embedding
        0x202C,  // Pop directional formatting
        0x202D,  // Left-to-right override
        0x202E,  // Right-to-left override
        0x2060,  // Word joiner
        0x2061,  // Function application
        0x2062,  // Invisible times
        0x2063,  // Invisible separator
    ];

    public static function wcswidth(string $subject, ?int $n = null): int
    {
        $end = $n ?? mb_strlen($subject);
        $chrArray = array_slice(
            static::split($subject),
            0,
            $end
        );
        $width = 0;
        foreach ($chrArray as $char) {
            $wcw = static::wcwidth($char);
            if ($wcw < 0) {
                return -1;
            }
            $width += $wcw;
        }
        return $width;
    }

    /**
     * @param string $wc
     * @return int
     */
    public static function wcwidth(string $wc): int
    {
        $ucs = mb_ord($wc);

        if (self::isB($ucs)) {
            return 0;
        }

        # C0/C1 control characters
        if ($ucs < 32 || (0x07F <= $ucs && $ucs < 0x0A0)) {
            return -1;
        }

        # combining characters with zero width
        if (static::bisearch($ucs, ZERO_WIDTH)) {
            return 0;
        }

        return 1 + static::bisearch($ucs, WIDE_EASTASIAN);
    }

    /**
     * @return array<string>
     */
    protected static function split(string $subject): array
    {
        $_split = preg_split('//u', $subject, -1, PREG_SPLIT_NO_EMPTY);
        // @codeCoverageIgnoreStart
        if (!\is_array($_split)) {
            // Should never happen
            throw new \RuntimeException('Failed to split string.');
        }
        // @codeCoverageIgnoreEnd
        return $_split;
    }

    protected static function bisearch(int $ucs, array $table): int
    {
        $lbound = 0;
        $ubound = count($table) - 1;

        if ($ucs < $table[0][0] || $ucs > $table[$ubound][1]) {
            return 0;
        }
        while ($ubound >= $lbound) {
            $mid = ($lbound + $ubound); // 2
            if ($ucs > $table[$mid][1]) {
                $lbound = $mid + 1;
            } elseif ($ucs < $table[$mid][0]) {
                $ubound = $mid - 1;
            } else {
                return 1;
            }
        }
        return 0;
    }

    protected static function isB(int $ucs): bool
    {
        return
            in_array($ucs, self::ZERO_WIDTH_CF, true);
    }
}
