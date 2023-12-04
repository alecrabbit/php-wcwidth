<?php

declare(strict_types=1);
// 01.03.23
namespace AlecRabbit\WCWidth\App\Core\Output;

use AlecRabbit\WCWidth\App\Core\Contract\IOutput;

final class NullOutput implements IOutput
{
    public function write(iterable|string $messages, bool $newline = false, int $options = 0): void
    {
        // do nothing
    }

    public function writeln(iterable|string $messages, int $options = 0): void
    {
        // do nothing
    }
}
