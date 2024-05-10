<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Contract;

interface ITableHeaderExtractor
{
    public function extractHeader(string $url): TableHeader;
}
