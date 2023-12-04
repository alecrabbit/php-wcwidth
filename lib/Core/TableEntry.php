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
        public string $properties,
    ) {
    }

    public function normalizedStart(): string
    {
        return self::normalizeValue($this->start);
    }

    private static function normalizeValue(int $value): string
    {
        return
            '0x' .
            str_pad(
                dechex($value),
                5,
                '0',
                STR_PAD_LEFT
            );
    }

    public function normalizedEnd(): string
    {
        return self::normalizeValue($this->end);
    }
}
