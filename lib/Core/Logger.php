<?php

declare(strict_types=1);
// 01.03.23
namespace AlecRabbit\WCWidth\Core;

use AlecRabbit\WCWidth\Core\Contract\ILogger;
use AlecRabbit\WCWidth\Core\Contract\IOutput;

final class Logger implements ILogger
{
    protected static ?IOutput $output = null;

    public static function setOutput(IOutput $output): void
    {
        if (self::$output instanceof IOutput) {
            throw new \LogicException('Output already set.');
        }
        self::$output = $output;
    }

    public static function debug(string $message): void
    {
        self::message($message, 'fg=gray', IOutput::VERBOSITY_DEBUG);
    }

    public static function info(string $message): void
    {
        self::message($message, 'info', IOutput::VERBOSITY_NORMAL);
    }

    public static function comment(string $message): void
    {
        self::message($message, 'comment', IOutput::VERBOSITY_VERBOSE);
    }

    private static function message(string $message, string $color, int $verbosity): void
    {
        if (self::$output instanceof IOutput) {
            self::$output->writeln(
                sprintf(
                    '<%s>%s</>',
                    $color,
                    $message
                ),
                $verbosity
            );
        }
    }

    public static function error(string $message): void
    {
        self::message($message, 'error', IOutput::VERBOSITY_QUIET);
    }
}