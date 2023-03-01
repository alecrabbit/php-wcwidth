<?php

declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Core\Contract;

interface IFileDefinition
{
    public function getFilename(): string;

    public function getTemplate(): string;

    public function getData(): mixed;

}