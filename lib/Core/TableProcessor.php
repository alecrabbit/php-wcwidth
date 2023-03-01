<?php

declare(strict_types=1);
// 01.03.23

namespace AlecRabbit\WCWidth\Core;

final class TableProcessor implements Contract\ITableProcessor
{
    public function process(iterable $data): iterable
    {
        $result = [];
        $previous = null;
        $derivedFrom = [];
        foreach ($data as $entry) {
            dump($previous, $entry);
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
                $result[] = new TableRow(
                    derivedFrom: $derivedFrom,
                    codepoints: sprintf('[0x%05x, 0x%05x,]', $derivedFrom[0]->start, $previous->end),
                );
                $previous = $entry;
                $derivedFrom = [];
            }
        }
        if ($previous !== null) {
            $derivedFrom[] = $previous;
            $result[] = new TableRow(
                derivedFrom: $derivedFrom,
                codepoints: sprintf('[0x%05x, 0x%05x,]', $derivedFrom[0]->start, $previous->end),
            );
        }
        return $result;
    }
}
