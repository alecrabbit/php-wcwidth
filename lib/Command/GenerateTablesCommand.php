<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\Command;

use AlecRabbit\WCWidth\Builder\TableBuilder;
use AlecRabbit\WCWidth\Core\Logger;
use AlecRabbit\WCWidth\Core\Output\OutputAdapter;
use AlecRabbit\WCWidth\Core\TemplateRenderer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

final class GenerateTablesCommand extends Command
{
    protected static $defaultName = 'generate:tables';

    protected function configure(): void
    {
        $this
            ->setDescription('Generates tables for wcwidth() function.')
            ->setHelp('This command allows you to generate tables for wcwidth() function.')
            ->addOption(
                'comments',
                'c',
                InputOption::VALUE_NONE,
                'Enable comments in generated tables.'
            )->addOption(
                'debug',
                'd',
                InputOption::VALUE_NONE,
                'Enable debug mode for Twig template engine.'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        Logger::setOutput(new OutputAdapter($output));

        {
            $options = $this->getOptions($input);

            $tableBuilder =
                new TableBuilder(
                    templateRenderer: new TemplateRenderer($options),
                );

            $tableBuilder->build();
        }

        Logger::comment($this->memoryReport());

        Logger::info('Done!');
        return Command::SUCCESS;
    }

    private function getOptions(InputInterface $input): array
    {
        Logger::debug('Processing options...');

        $options = [];

        if ($input->getOption('comments')) {
            $options['comments'] = true;
            Logger::debug('✅ Comments in generated tables enabled.');
        }
        if ($input->getOption('debug')) {
            $options['debug'] = true;
            Logger::debug('✅ Debug mode for Twig template engine enabled.');
        }
        return $options;
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
