<?php
declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Builder\Contract;

interface IFileSaver
{
    public function save(string $filename, string $content): void;
}