<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\Kernel;

use FFI;
use RuntimeException;

use function is_array;
use function mb_ord;
use function mb_strlen;

use const AlecRabbit\WCWidth\WIDE_EASTASIAN;
use const AlecRabbit\WCWidth\ZERO_WIDTH;

class UCode
{
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

    private static ?FFI $ffi = null;


    public static function wcswidth(string $subject, ?int $n = null, ?string $version = null): int
    {
        $end = $n ?? mb_strlen($subject);

        $characters = array_slice(
            static::split($subject),
            0,
            $end
        );

        $sWidth = 0;

        foreach ($characters as $char) {
            $w = static::wcwidth($char, $version);
            if ($w < 0) {
                return -1;
            }
            $sWidth += $w;
        }

        return $sWidth;
    }

    /**
     * @return array<string>
     */
    protected static function split(string $subject): array
    {
        $_split = preg_split('//u', $subject, -1, PREG_SPLIT_NO_EMPTY);

        // @codeCoverageIgnoreStart
        if (!is_array($_split)) {
            // Should never happen
            throw new RuntimeException('Failed to split string.');
        }
        // @codeCoverageIgnoreEnd

        return $_split;
    }

    public static function wcwidth(string $wc, ?string $version = null): int
    {
        $version = UnicodeVersion::refine($version);

        $ucs = mb_ord($wc);

        if (self::ZERO_WIDTH_CF[$ucs] ?? false) { // 0 width
            return 0;
        }

        # C0/C1 control characters
        if ($ucs < 32 || (0x07F <= $ucs && $ucs < 0x0A0)) {
            return -1;
        }

        # combining characters with zero width
        if (static::binarySearch($ucs, ZERO_WIDTH[$version]) === 1) {
            return 0;
        }

        return 1 + static::binarySearch($ucs, WIDE_EASTASIAN[$version]);
    }


    protected static function binarySearch(int $ucs, array $table): int
    {
        $lBound = 0;
        $uBound = count($table) - 1;

        if ($ucs < $table[0][0] || $ucs > $table[$uBound][1]) {
            return 0;
        }

        while ($uBound >= $lBound) {
            $mid = ($lBound + $uBound);
            if ($ucs > $table[$mid][1]) {
                $lBound = $mid + 1;
            } elseif ($ucs < $table[$mid][0]) {
                $uBound = $mid - 1;
            } else {
                return 1;
            }
        }

        return 0;
    }

    /**
     * // TODO (2024-01-23 17:34) [Alec Rabbit]: extract to class `UCodeFFI` [9a1baaf1-51f1-408a-9882-d555e35535cf]
     * @codeCoverageIgnore
     */
    public static function ffi_wcwidth(string $wc, ?string $version = null): int
    {
        // Note: $version is ignored
        if (null === self::$ffi) {
            self::$ffi =
                FFI::cdef(
                    "
                    typedef uint32_t wchar_t;
                    int wcwidth(wchar_t wc);
                    ",
                );
        }
        /** @psalm-suppress PossiblyUndefinedMethod */
        return self::$ffi->wcwidth(mb_ord($wc));
    }
    // @codeCoverageIgnoreEnd
}
