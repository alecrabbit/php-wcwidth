<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Contract;

interface ITableProcessor
{
    public function process(iterable $data): iterable;
}
