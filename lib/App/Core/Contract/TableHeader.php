<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Contract;

final readonly class TableHeader
{
    public function __construct(
        public string $url,
        public string $name,
        public string $date,
    ) {
    }
}
