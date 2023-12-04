<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Contract;

interface ITemplateRenderer
{
    public function render(string $type, array $data, ?array $options = null): string;
}
