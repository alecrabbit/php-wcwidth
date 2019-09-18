<?php declare(strict_types=1);

namespace AlecRabbit\Wcwidth;

class WcWidth
{
    public static function wcswidth($subject, ?int $n = null): int
    {
        $end = $n ?? mb_strlen($subject);
        $chrArray =array_slice(
            preg_split('//u', $subject, -1, PREG_SPLIT_NO_EMPTY),
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

    public static function wcwidth($wc): int
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
        if (bisearch($ucs, ZERO_WIDTH)) {
            return 0;
        }

        return 1 + bisearch($ucs, WIDE_EASTASIAN);
    }


}
