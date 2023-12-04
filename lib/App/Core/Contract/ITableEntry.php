<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Contract;

interface ITableEntry
{
    public function normalizedStart(): string;

    public function normalizedEnd(): string;
}
