<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Contract;

interface ICategoryParser
{
    public function parse(string $data, array $categories);
}
