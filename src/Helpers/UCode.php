<?php declare(strict_types=1);

namespace AlecRabbit\Helpers;

class UCode
{
    /**
     * @param string $subject
     * @param null|int $n
     * @return int
     */
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

        if ($ucs === 0 ||
            $ucs === 0x034F ||
            (0x200B <= $ucs && $ucs <= 0x200F) ||
            $ucs === 0x2028 ||
            $ucs === 0x2029 ||
            (0x202A <= $ucs && $ucs <= 0x202E) ||
            (0x2060 <= $ucs && $ucs <= 0x2063)) {
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
     * @param string $subject
     * @return array
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
}
