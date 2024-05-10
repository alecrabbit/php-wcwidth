<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core;

final class TableRow
{
    public function __construct(
        public iterable $derivedFrom = [],
        public string $codepoints = '',
    ) {
    }
}
