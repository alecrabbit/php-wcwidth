<?php

declare(strict_types=1);
// 01.03.23
namespace AlecRabbit\WCWidth\Builder;

use AlecRabbit\WCWidth\Builder\Contract\IFileSaver;

final class FileSaver implements IFileSaver
{

    public function save(string $filename, string $content): void
    {
        // write to file
        file_put_contents(
            $this->getDir() . $filename,
            $content
        );
    }

    private function getDir(): string
    {
        return __DIR__ . '/../.rendered/';
    }
}