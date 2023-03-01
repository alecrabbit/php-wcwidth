<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth;

use AlecRabbit\WCWidth\Helpers\UCode;

use function function_exists;

if (!function_exists(__NAMESPACE__ . '\wcwidth')) {
    function wcwidth(string $wc, ?string $version = null): int
    {
        return UCode::wcwidth($wc, $version);
    }
}

if (!function_exists(__NAMESPACE__ . '\wcswidth')) {
    function wcswidth(?string $subject, ?int $n = null, ?string $version = null): int
    {
        if (null === $subject) {
            return 0;
        }
        return UCode::wcswidth($subject, $n, $version);
    }
}
