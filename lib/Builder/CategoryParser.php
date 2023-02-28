<?php
declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Builder;

use AlecRabbit\WCWidth\Builder\Contract\ICategoryParser;
use AlecRabbit\WCWidth\Builder\Contract\ITableDefinition;

final class CategoryParser implements ICategoryParser
{

    public function __construct()
    {
    }

    public function parseCategory(string $data, array $array): array
    {
        foreach (explode(PHP_EOL, $data) as $line) {
            [$data, $_, $comment] = $this->partition($line, '#');
//            dump(sprintf('Data:%s Comment:%s', $data, $comment));
            $data_fields = explode(';', $data);
            dump($data_fields);
//            $codepoints_str = \trim($data_fields[0] ?? '');
//            $properties = \trim($data_fields[1] ?? '');

//            [$start, $end] = explode('..', $codepoints_str);
//            dump($properties, $comment);
//            dump($start, $end, $properties, $comment);
//            foreach ($categories as $category) {
//                if (str_contains($line, $category . ' ')) {
//                    dump($line);
//                }
//            }
        }
        return [];
    }

    private function partition(string $line, string $separator): array
    {
        $pos = strpos($line, $separator);
        if (false === $pos) {
            return [$line, '', ''];
        }
        return [
            trim(substr($line, 0, $pos)),
            $separator,
            trim(substr($line, $pos + strlen($separator))),
        ];
    }
}