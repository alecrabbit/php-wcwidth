<?php

declare(strict_types=1);
// 27.02.23
namespace AlecRabbit\WCWidth\Builder;

use AlecRabbit\WCWidth\Builder\Contract\ICachingClient;

final class TablesBuilder
{
    private const VERSION_PLACEHOLDER = '{%version%}';
    private const URL_UNICODE_DERIVED_AGE = 'https://www.unicode.org/Public/UCD/latest/ucd/DerivedAge.txt';
    private const URL_EASTASIAN_WIDTH = 'https://www.unicode.org/Public/{%version%}/ucd/EastAsianWidth.txt';
    private const URL_DERIVED_CATEGORY = 'https://www.unicode.org/Public/{%version%}/ucd/extracted/DerivedGeneralCategory.txt';
    private const EXCLUDE_VERSIONS = ['2.0.0', '2.1.2', '3.0.0', '3.1.0', '3.2.0', '4.0.0'];

    public function __construct(
        protected ICachingClient $client = new CachingClient(),
    ) {
    }

    public function build(): void
    {
        $versions = $this->getVersions();
        foreach ($versions as $version) {
            dump(
                mb_strlen(
                    $this->client->get($this->versionedUrl(self::URL_EASTASIAN_WIDTH, $version))
                )
            );
            dump(
                mb_strlen(
                    $this->client->get($this->versionedUrl(self::URL_DERIVED_CATEGORY, $version))
                )
            );
        }
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
        return [
            '14.0.0',
            '15.0.0'
        ];
    }

    private function versionedUrl(string $url, string $version): string|array
    {
        return str_replace(self::VERSION_PLACEHOLDER, $version, $url);
    }
}