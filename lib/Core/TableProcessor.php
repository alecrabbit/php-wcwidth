<?php

declare(strict_types=1);
// 01.03.23
namespace AlecRabbit\WCWidth\Core;

final class TableProcessor implements Contract\ITableProcessor
{
    public function process(iterable $data): iterable
    {
        $previous = null;
        $first = null;
        $derivedFrom = [];
        foreach ($data as $entry) {
            if ($first instanceof TableEntry) {
                if (!($previous->end === $entry->start - 1)) {
                    yield dump(
                        new TableRow(
                            $derivedFrom,
                            sprintf(
                                '[%s, %s,]',
                                $first->normalizedStart(),
                                $previous->normalizedEnd()
                            )
                        )
                    );
                    $derivedFrom = [];
                } else { // if ($previous->end === $entry->start - 1)
                    $derivedFrom[] = $previous;
                    dump($previous, $entry);
                }
            }
            $previous = $entry;
            $first = $entry;
        }
    }
}