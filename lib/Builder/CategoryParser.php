<?php

declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Builder;

use AlecRabbit\WCWidth\Builder\Contract\ICategoryParser;

final class CategoryParser implements ICategoryParser
{

    public function __construct()
    {
    }

    public function parse(string $data, array $categories): iterable
    {
        foreach (explode(PHP_EOL, $data) as $line) {
            $row = [];
            [$data, $comment] = $this->split($line);
            $data_fields = explode(';', $data);
            if ($data_fields[1] ?? false) {
                $codepoints_str = \trim($data_fields[0] ?? '');
                $properties = \trim($data_fields[1] ?? '');
                if (in_array($properties, $categories, true)) {
                    if (str_contains($codepoints_str, '..')) {
                        [$start, $end] = explode('..', $codepoints_str);
                    } else {
                        $start = $end = $codepoints_str;
                    }
                    $row[0] = [$this->normalizeValue($start), $this->normalizeValue($end)];
                    $row[1] = $properties;
                }
            }
            if ($row[0] ?? false) {
                $row[2] = $comment;
                yield $row;
            }
        }
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
}