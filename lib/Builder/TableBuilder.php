<?php

declare(strict_types=1);
// 27.02.23
namespace AlecRabbit\WCWidth\Builder;

use AlecRabbit\WCWidth\Core\CachingClient;
use AlecRabbit\WCWidth\Core\CategoryParser;
use AlecRabbit\WCWidth\Core\Contract\ICachingClient;
use AlecRabbit\WCWidth\Core\Contract\ICategoryParser;
use AlecRabbit\WCWidth\Core\Contract\IFileSaver;
use AlecRabbit\WCWidth\Core\Contract\IOutput;
use AlecRabbit\WCWidth\Core\Contract\ITableHeaderExtractor;
use AlecRabbit\WCWidth\Core\Contract\ITableProcessor;
use AlecRabbit\WCWidth\Core\Contract\ITemplateRenderer;
use AlecRabbit\WCWidth\Core\FileSaver;
use AlecRabbit\WCWidth\Core\Logger;
use AlecRabbit\WCWidth\Core\Output\NullOutput;
use AlecRabbit\WCWidth\Core\TableHeaderExtractor;
use AlecRabbit\WCWidth\Core\TableProcessor;
use AlecRabbit\WCWidth\Core\TemplateRenderer;

final class TableBuilder
{
    private const VERSION_PLACEHOLDER = '{%version%}';
    private const URL_UNICODE_DERIVED_AGE = 'https://www.unicode.org/Public/UCD/latest/ucd/DerivedAge.txt';
    private const URL_EASTASIAN_WIDTH = 'https://www.unicode.org/Public/{%version%}/ucd/EastAsianWidth.txt';
    private const URL_DERIVED_CATEGORY = 'https://www.unicode.org/Public/{%version%}/ucd/extracted/DerivedGeneralCategory.txt';
    private const EXCLUDE_VERSIONS =
        [
            '2.0.0',
            '2.1.2',
            '3.0.0',
            '3.1.0',
            '3.2.0',
            '4.0.0',
            //
            '4.1.0',
            '5.0.0',
            '5.1.0',
            '5.2.0',
            '6.0.0',
            '6.1.0',
            '6.2.0',
            '6.3.0',
            '7.0.0',
            '8.0.0',
            '9.0.0',
            '10.0.0',
            '11.0.0',
            '12.0.0',
            '12.1.0',
            '13.0.0',
            '14.0.0',
        ];
    protected ITableHeaderExtractor $tableHeaderExtractor;

    public function __construct(
        ?ITableHeaderExtractor $tableHeaderExtractor = null,
        protected ICachingClient $client = new CachingClient(),
        protected ICategoryParser $categoryParser = new CategoryParser(),
        protected ITableProcessor $tableProcessor = new TableProcessor(),
        protected ITemplateRenderer $templateRenderer = new TemplateRenderer(),
        protected IFileSaver $saver = new FileSaver(),
        protected IOutput $output = new NullOutput(),
    ) {
        Logger::setOutput($this->output);
        $this->tableHeaderExtractor = $tableHeaderExtractor ?? new TableHeaderExtractor($this->client);
    }

    public function build(): void
    {
        $versions = [];
        $zero = [];
        $wide = [];
        $headers = [];
        foreach ($this->getVersions() as $version) {
            Logger::comment("Processing version: {$version}");
            $versions[] = $version;
            $wide[$version] =
                $this->getTableData(
                    self::URL_EASTASIAN_WIDTH,
                    $version,
                    $this->getWideCategories(),
                );
            $zero[$version] =
                $this->getTableData(
                    self::URL_DERIVED_CATEGORY,
                    $version,
                    $this->getZeroCategories()
                );
            $headers[$version] = $this->getHeaders($version);
        }
        Logger::comment('Saving files...');
        dump($headers);
        $this->saver->save('versions.php', $this->templateRenderer->render('versions', $versions));
        $this->saver->save('zero.php', $this->templateRenderer->render('zero', $zero));
        $this->saver->save('wide.php', $this->templateRenderer->render('wide', $wide));
    }

    private function getVersions(): iterable
    {
        Logger::comment('Getting versions...');
        yield from $this->parseVersions(
            $this->client->get(
                self::URL_UNICODE_DERIVED_AGE
            )
        );
    }

    private function parseVersions(string $content): iterable
    {
        foreach (explode(PHP_EOL, $content) as $line) {
            if (preg_match('/^#.*assigned in Unicode ([0-9.]+)/', $line, $matches)) {
                $version = $matches[1];
                if (!in_array($version, self::EXCLUDE_VERSIONS, true)) {
                    yield $version;
                }
            }
        }
    }

    private function getTableData(string $url, string $version, array $categories): iterable
    {
        return
            $this->tableProcessor->process(
                $this->categoryParser->parse(
                    $this->getData($url, $version),
                    $categories,
                )
            );
    }

    private function getData(string $url, string $version): string
    {
        return
            $this->client->get(
                $this->versionedUrl($url, $version)
            );
    }

    private function versionedUrl(string $url, string $version): string
    {
        return str_replace(self::VERSION_PLACEHOLDER, $version, $url);
    }

    private function getWideCategories(): array
    {
        return ['W', 'F'];
    }

    private function getZeroCategories(): array
    {
        return ['Me', 'Mn',];
    }

    private function getHeaders(string $version): array
    {
        return [
            'east_asian_width' =>
                $this->tableHeaderExtractor->extractHeader(
                    $this->versionedUrl(self::URL_EASTASIAN_WIDTH, $version),
                ),
            'derived_category' =>
                $this->tableHeaderExtractor->extractHeader(
                    $this->versionedUrl(self::URL_DERIVED_CATEGORY, $version),
                ),
        ];
    }


}