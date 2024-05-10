<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Contract;

interface ILogger
{
    public static function debug(string $message): void;

    public static function info(string $message): void;

    public static function comment(string $message): void;

    public static function error(string $message): void;
}
