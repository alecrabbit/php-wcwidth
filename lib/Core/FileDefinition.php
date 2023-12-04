<?php

declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Core;

use AlecRabbit\WCWidth\Core\Contract\IFileDefinition;

final class FileDefinition implements IFileDefinition
{
    public function __construct(
        protected string $filename,
        protected string $template,
        protected mixed $data,
    ) {
        self::assertData($this->data);
    }

    protected static function assertData(mixed $data): void
    {
        // TODO: Implement assertData() method.
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function getData(): mixed
    {
        return $this->data;
    }
}
