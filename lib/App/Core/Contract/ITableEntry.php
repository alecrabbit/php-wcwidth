<?php

declare(strict_types=1);
// 01.03.23
namespace AlecRabbit\WCWidth\App\Core\Contract;

interface ITableEntry
{
    public function normalizedStart(): string;

    public function normalizedEnd(): string;
}
