<?php

declare(strict_types=1);
// 01.03.23
namespace AlecRabbit\WCWidth\App\Core\Contract;

interface IOutput
{
    public const VERBOSITY_QUIET = 16;
    public const VERBOSITY_NORMAL = 32;
    public const VERBOSITY_VERBOSE = 64;
    public const VERBOSITY_VERY_VERBOSE = 128;
    public const VERBOSITY_DEBUG = 256;

    public function write(string|iterable $messages, bool $newline = false, int $options = 0): void;

    public function writeln(string|iterable $messages, int $options = 0): void;
}
