<?php

declare(strict_types=1);
// 27.02.23
namespace AlecRabbit\WCWidth\Builder;

use AlecRabbit\WCWidth\Builder\Contract\FileSaver;
use AlecRabbit\WCWidth\Builder\Contract\ICachingClient;
use AlecRabbit\WCWidth\Builder\Contract\ICategoryParser;
use AlecRabbit\WCWidth\Builder\Contract\IFileSaver;
use AlecRabbit\WCWidth\Builder\Contract\ITemplateRenderer;

final class TablesBuilder
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
        ];

    public function __construct(
        protected ICachingClient $client = new CachingClient(),
        protected ICategoryParser $categoryParser = new CategoryParser(),
        protected ITemplateRenderer $renderer = new TemplateRenderer(),
        protected IFileSaver $saver = new FileSaver(),
    ) {
    }

    public function build(): void
    {
        $versions = [];
        $zero = [];
        $wide = [];
        foreach ($this->getVersions() as $version) {
            $versions[] = $version;
            $wide[$version] =
                $this->categoryParser->parseCategory(
                    $this->client->get(
                        $this->versionedUrl(self::URL_EASTASIAN_WIDTH, $version)
                    ),
                    $this->getWideCategories(),
                );
            $zero[$version] = $this->categoryParser->parseCategory(
                $this->client->get(
                    $this->versionedUrl(self::URL_DERIVED_CATEGORY, $version)
                ),
                $this->getZeroCategories(),

            );
//            dump(sprintf('Version:%s EA:%s DGC:%s', $version, $len1, $len2));
        }
        $this->saver->save('versions.php', $this->renderer->render('versions', $versions));
        $this->saver->save('zero.php', $this->renderer->render('zero', $zero));
        $this->saver->save('wide.php', $this->renderer->render('wide', $wide));
    }

    private function getVersions(): iterable
    {
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
}