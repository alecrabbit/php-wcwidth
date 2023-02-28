<?php
declare(strict_types=1);
// 27.02.23
namespace AlecRabbit\WCWidth\Builder\Contract;

interface ICategoryParser
{
    public function parseCategory(string $data, array $array);
}