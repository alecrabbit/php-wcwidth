<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth;

use AlecRabbit\WCWidth\Kernel\UnicodeVersion;
use Throwable;

use function getenv;
use function is_string;

$version = getenv('UNICODE_VERSION');

if (is_string($version)) {
    try {
        UnicodeVersion::set($version);
    } catch (Throwable $_) {
        // silently ignore
    }
}
