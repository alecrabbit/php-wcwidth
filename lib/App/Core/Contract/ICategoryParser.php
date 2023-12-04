<?php

declare(strict_types=1);
// 27.02.23
namespace AlecRabbit\WCWidth\App\Core\Contract;

interface ICategoryParser
{
    public function parse(string $data, array $categories);
}
