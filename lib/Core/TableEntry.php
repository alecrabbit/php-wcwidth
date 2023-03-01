<?php

declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Core;

use AlecRabbit\WCWidth\Core\Contract\ITableEntry;

final readonly class TableEntry implements ITableEntry
{
    public function __construct(
        public string $line,
        public string $codepoints,
        public string $comment,
        public int $start,
        public int $end,
    ) {
    }
}
