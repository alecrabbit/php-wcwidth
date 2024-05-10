<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Contract;

interface IFileSaver
{
    public function save(string $filename, string $content): void;
}