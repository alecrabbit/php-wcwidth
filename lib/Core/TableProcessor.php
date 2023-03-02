<?php

declare(strict_types=1);
// 01.03.23

namespace AlecRabbit\WCWidth\Core;

final class TableProcessor implements Contract\ITableProcessor
{
    public function process(iterable $data): iterable
    {
        Logger::debug('Processing data...');
        $previous = null;
        $derivedFrom = [];
        foreach ($data as $entry) {
            if ($previous === null) {
                $previous = $entry;
                continue;
            }
            $derivedFrom[] = $previous;
            if ($previous->end + 1 === $entry->start) {
                $previous = $entry;
                continue;
            }

            {
                yield $this->createRow($derivedFrom, $previous);
                $previous = $entry;
                $derivedFrom = [];
            }
        }
        if ($previous !== null) {
            $derivedFrom[] = $previous;
            yield $this->createRow($derivedFrom, $previous);
        }
    }

    private function createRow(array $derivedFrom, TableEntry $previous): TableRow
    {
        return new TableRow(
            derivedFrom: $derivedFrom,
            codepoints: sprintf('[%s, %s,]', $derivedFrom[0]->normalizedStart(), $previous->normalizedEnd()),
//            codepoints: sprintf('[0x%05x, 0x%05x,]', $derivedFrom[0]->start, $previous->end),
        );
    }
}
