<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth;

use AlecRabbit\WCWidth\Kernel\UCode;
use AlecRabbit\WCWidth\Kernel\UnicodeVersion;

use Throwable;

use function function_exists;

if ($version = getenv('UNICODE_VERSION')) {
    try {
        UnicodeVersion::set($version);
    } catch (Throwable $_) {
        // silently ignore
    }
}

if (!function_exists(__NAMESPACE__ . '\ffiEnabled')) {
    function ffiEnabled(): bool
    {
        $value = getenv('USE_FFI');
        match ($value) {
            '1', 'true', 'yes', 'on', true => $value = true,
            default => $value = false,
        };
        return $value;
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
