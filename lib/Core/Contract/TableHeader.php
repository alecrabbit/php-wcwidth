<?php
declare(strict_types=1);
// 02.03.23
namespace AlecRabbit\WCWidth\Core\Contract;

final readonly class TableHeader
{
    public function __construct(
        public string $url,
        public string $name,
        public string $date,
    )
    {
    }
}