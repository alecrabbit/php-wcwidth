<?php
declare(strict_types=1);

namespace AlecRabbit\WCWidth\Helpers;

use const AlecRabbit\WCWidth\UNICODE_VERSIONS;
use const AlecRabbit\WCWidth\WIDE_EASTASIAN;
use const AlecRabbit\WCWidth\ZERO_WIDTH;

class UCode
{
    private const DEFAULT_UNICODE_VERSION = '15.0.0';

    // NOTE(jquast/wcwidth): created by hand, there isn't anything identifiable other than
    // general Cf category code to identify these, and some characters in Cf
    // category code are of non-zero width.
    // Also includes some Cc, Mn, Zl, and Zp characters
    private const ZERO_WIDTH_CF = [
        0 => true,       // Null (Cc)
        0x034F => true,  // Combining grapheme joiner (Mn)
        0x200B => true,  // Zero width space
        0x200C => true,  // Zero width non-joiner
        0x200D => true,  // Zero width joiner
        0x200E => true,  // Left-to-right mark
        0x200F => true,  // Right-to-left mark
        0x2028 => true,  // Line separator (Zl)
        0x2029 => true,  // Paragraph separator (Zp)
        0x202A => true,  // Left-to-right embedding
        0x202B => true,  // Right-to-left embedding
        0x202C => true,  // Pop directional formatting
        0x202D => true,  // Left-to-right override
        0x202E => true,  // Right-to-left override
        0x2060 => true,  // Word joiner
        0x2061 => true,  // Function application
        0x2062 => true,  // Invisible times
        0x2063 => true,  // Invisible separator
    ];

    public static function wcswidth(string $subject, ?int $n = null, ?string $version = null): int
    {
        $end = $n ?? mb_strlen($subject);
        $chrArray = array_slice(
            static::split($subject),
            0,
            $end
        );
        $width = 0;
        foreach ($chrArray as $char) {
            $wcw = static::wcwidth($char, $version);
            if ($wcw < 0) {
                return -1;
            }
            $width += $wcw;
        }
        return $width;
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

    public static function wcwidth(string $wc, ?string $version = null): int
    {
        $ucs = mb_ord($wc);

        if (self::ZERO_WIDTH_CF[$ucs] ?? false) { // 0 width
            return 0;
        }

        # C0/C1 control characters
        if ($ucs < 32 || (0x07F <= $ucs && $ucs < 0x0A0)) {
            return -1;
        }

        # combining characters with zero width
        if (static::bisearch($ucs, ZERO_WIDTH[self::version($version)])) {
            return 0;
        }

        return 1 + static::bisearch($ucs, WIDE_EASTASIAN[self::version($version)]);
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

    private static function version(?string $version): string
    {
        $version ??= self::DEFAULT_UNICODE_VERSION;
        self::assertVersion($version);
        return $version;
    }

    private static function assertVersion(string $version): void
    {
        if (!\in_array($version, UNICODE_VERSIONS, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Unknown Unicode version: %s',
                    $version
                )
            );
        }
    }
}
