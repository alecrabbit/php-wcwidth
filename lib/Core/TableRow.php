<?php

declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Core;

use AlecRabbit\WCWidth\Core\Contract\ITableEntry;

final readonly class TableRow
{
    public function __construct(
        public iterable $derivedFrom,
        public string $codepoints,
    ) {
    }
}
