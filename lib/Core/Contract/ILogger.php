<?php

declare(strict_types=1);
// 01.03.23
namespace AlecRabbit\WCWidth\Core\Contract;

interface ILogger
{
    public static function debug(string $message): void;

    public static function info(string $message): void;

    public static function comment(string $message): void;

    public static function error(string $message): void;
}
