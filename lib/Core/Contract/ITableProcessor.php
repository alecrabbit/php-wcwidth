<?php

declare(strict_types=1);
// 27.02.23
namespace AlecRabbit\WCWidth\Core\Contract;

interface ITableProcessor
{
    public function process(iterable $data): iterable;
}