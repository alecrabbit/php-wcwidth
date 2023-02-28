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
    private const EXCLUDE_VERSIONS =
        [
            '2.0.0',
            '2.1.2',
            '3.0.0',
            '3.1.0',
            '3.2.0',
            '4.0.0',
            "4.1.0", // exclude
            "5.0.0", // exclude
            "5.1.0", // exclude
            "5.2.0", // exclude
            "6.0.0", // exclude
            "6.1.0", // exclude
            "6.2.0", // exclude
            "6.3.0", // exclude
            "7.0.0", // exclude
            "8.0.0", // exclude
            "9.0.0", // exclude
            "10.0.0", // exclude
            "11.0.0", // exclude
            "12.0.0", // exclude
            "12.1.0", // exclude
            "13.0.0", // exclude
            "14.0.0", // exclude
        ];

    public function __construct(
        protected ICachingClient $client = new CachingClient(),
    ) {
    }

    public function build(): void
    {
        $versions = [];
        foreach ($this->getVersions() as $version) {
            $versions[] = $version;
            $len1 = mb_strlen(
//                dump(
                $this->client->get(
                    dump(
                        $this->versionedUrl(self::URL_EASTASIAN_WIDTH, $version)
                    )
//                    )
                )
            );
            $len2 = mb_strlen(
//                dump(
                $this->client->get(
                    dump(
                        $this->versionedUrl(self::URL_DERIVED_CATEGORY, $version)
                    )
//                    )
                )
            );
//            dump(sprintf('Version:%s EA:%s DGC:%s', $version, $len1, $len2));
        }
        dump($versions);
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
}