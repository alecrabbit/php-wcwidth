<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth\App\Core\Contract;

interface IFileDefinition
{
    public function getFilename(): string;

    public function getTemplate(): string;

    public function getData(): mixed;

}
