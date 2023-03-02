<?php

declare(strict_types=1);
// 01.03.23

namespace AlecRabbit\WCWidth\Core;

use AlecRabbit\WCWidth\Core\Contract\ICachingClient;
use AlecRabbit\WCWidth\Core\Contract\TableHeader;

final class TableHeaderExtractor implements Contract\ITableHeaderExtractor
{
    private const REGEX = '/(DerivedGeneralCategory|EastAsianWidth)-(.+)\.txt/';

    public function __construct(
        protected ICachingClient $client,
    )
    {
    }


    public function extractHeader(string $url): TableHeader
    {
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
        throw new \RuntimeException(sprintf('Header not found in %s', $url));
    }
}
