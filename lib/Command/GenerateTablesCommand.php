<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\Command;

use AlecRabbit\WCWidth\Builder\TableBuilder;
use AlecRabbit\WCWidth\Core\Logger;
use AlecRabbit\WCWidth\Core\Output\OutputAdapter;
use AlecRabbit\WCWidth\Core\TemplateRenderer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class GenerateTablesCommand extends Command
{
    protected static $defaultName = 'generate:tables';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // return this to indicate incorrect command usage; e.g. invalid options
        // or missing arguments (it's equivalent to returning int(2))
        // return Command::INVALID

        $tableBuilder =
            new TableBuilder(
                templateRenderer: new TemplateRenderer([]),
                output: new OutputAdapter($output),
            );

        $tableBuilder->build();

        Logger::comment($this->memoryReport());
        Logger::info('Done!');

        return Command::SUCCESS;
    }

    protected function memoryReport(): string
    {
        return sprintf(
            '%sMemory Usage [%sK/%sK]',
            PHP_EOL,
            number_format(memory_get_usage(true) / 1024),
            number_format(memory_get_peak_usage(true) / 1024),
        );
    }
}