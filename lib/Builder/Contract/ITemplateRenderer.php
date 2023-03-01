<?php
declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Builder\Contract;

interface ITemplateRenderer
{
    public function render(string $type, array $data): string;
}