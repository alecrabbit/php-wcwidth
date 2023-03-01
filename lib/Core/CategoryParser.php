<?php

declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Core;

use AlecRabbit\WCWidth\Core\Contract\ICategoryParser;

final class CategoryParser implements ICategoryParser
{

    public function __construct()
    {
    }

    public function parse(string $data, array $categories): iterable
    {
        $result = [];
        foreach (explode(PHP_EOL, $data) as $line) {
            [$data, $comment] = $this->split($line);
            $data_fields = explode(';', $data);
            if ($data_fields[1] ?? false) {
                $codepoints = \trim($data_fields[0] ?? '');
                $properties = \trim($data_fields[1] ?? '');
                if (in_array($properties, $categories, true)) {
                    if (str_contains($codepoints, '..')) {
                        [$start, $end] = explode('..', $codepoints);
                    } else {
                        $start = $end = $codepoints;
                    }
                    $result[] = new TableEntry(
                        line: $line,
                        codepoints: $codepoints,
                        comment: $comment,
                        start: hexdec($start),
                        end: hexdec($end),
                        properties: $properties,
                    );
                }
            }
        }
        usort($result, $this->getSorter());
        return $result;
    }

    private function split(string $line): array
    {
        $pos = strpos($line, '#');
        if (false === $pos) {
            return [$line, ''];
        }
        return [
            trim(substr($line, 0, $pos)),
            trim(substr($line, $pos + 1)),
        ];
    }

    private function normalizeValue(string $value): string
    {
        return
            '0x' .
            str_pad(
                dechex(hexdec($value)),
                5,
                '0',
                STR_PAD_LEFT
            );
    }

    private function getSorter(): callable
    {
        return
            static function (TableEntry $a, TableEntry $b): int {
                return $a->start <=> $b->start;
            };
    }
}