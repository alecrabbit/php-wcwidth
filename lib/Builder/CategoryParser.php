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

    public function parseCategory(string $data, array $categories): array
    {
        $result = [];
        foreach (explode(PHP_EOL, $data) as $line) {
            $l = [];
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
                    $l[0] = [hexdec($start), hexdec($end)];
                    $l[1] = $properties;
                }
            }
            if ($l[0] ?? false) {
                $l[2] = $comment;
                $result[] = $l;
            }
        }
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
}