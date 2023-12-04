<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core;

use AlecRabbit\WCWidth\App\Core\Contract\ICachingClient;
use AlecRabbit\WCWidth\App\Core\Contract\TableHeader;
use RuntimeException;

final class TableHeaderExtractor implements Contract\ITableHeaderExtractor
{
    private const REGEX = '/(DerivedGeneralCategory|EastAsianWidth)-(.+)\.txt/';

    public function __construct(
        protected ICachingClient $client,
    ) {
    }


    public function extractHeader(string $url): TableHeader
    {
        Logger::debug(sprintf('Extracting header from %s', $url));
        $data = $this->client->get($url);
        $exploded = explode(PHP_EOL, $data);
        foreach ($exploded as $line) {
            if (preg_match(self::REGEX, $line, $matches)) {
                next($exploded);
                return new TableHeader(
                    url: $url,
                    name: $matches[0],
                    date: str_replace('# ', '', current($exploded)),
                );
            }
        }
        throw new RuntimeException(sprintf('Header not found in %s', $url));
    }
}
