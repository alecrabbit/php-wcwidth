<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth;

use AlecRabbit\WCWidth\Kernel\UCode;

use function function_exists;
use function getenv;

if (!function_exists(__NAMESPACE__ . '\ffiEnabled')) {
    function ffiEnabled(): bool
    {
        $var = getenv('USE_FFI');

        return
            match ($var) {
                '1', 'true', 'yes', 'on' => true,
                default => false,
            };
    }
}

if (!function_exists(__NAMESPACE__ . '\wcwidth')) {
    if (extension_loaded('ffi') && ffiEnabled()) {
        function wcwidth(string $wc, ?string $version = null): int
        {
            return UCode::ffi_wcwidth($wc, $version);
        }
    } else {
        function wcwidth(string $wc, ?string $version = null): int
        {
            return UCode::wcwidth($wc, $version);
        }
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
