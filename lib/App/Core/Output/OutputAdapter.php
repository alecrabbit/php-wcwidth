<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Output;

use AlecRabbit\WCWidth\App\Core\Contract\IOutput;
use Symfony\Component\Console\Output\OutputInterface;

final class OutputAdapter implements IOutput
{
    public function __construct(
        protected OutputInterface $output,
    ) {
    }

    public function write(iterable|string $messages, bool $newline = false, ?int $options = null): void
    {
        $this->output->write($messages, $newline, self::refineOptions($options));
    }

    private static function refineOptions(?int $options): int
    {
        return $options ?? IOutput::VERBOSITY_DEBUG;
    }

    public function writeln(iterable|string $messages, ?int $options = null): void
    {
        $this->output->writeln($messages, self::refineOptions($options));
    }
}
