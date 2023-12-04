<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Contract;

interface ICachingClient
{
    public function get(string $url): string;
}
