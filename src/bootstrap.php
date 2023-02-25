<?php

declare(strict_types=1);

namespace AlecRabbit\Helpers;

require_once 'tables.php';

use function function_exists;

if (!function_exists(__NAMESPACE__ . '\wcwidth')) {
    /**
     * @param string $wc
     * @return int
     */
    function wcwidth(string $wc): int
    {
        return UCode::wcwidth($wc);
    }
}

if (!function_exists(__NAMESPACE__ . '\wcswidth')) {
    /**
     * @param null|string $subject
     * @param null|int $n
     * @return int
     */
    function wcswidth(?string $subject, ?int $n = null): int
    {
        if (null === $subject) {
            return 0;
        }
        return UCode::wcswidth($subject, $n);
    }
}
