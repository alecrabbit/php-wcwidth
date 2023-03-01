<?php

declare(strict_types=1);
// 01.03.23
namespace AlecRabbit\WCWidth\Core;

use AlecRabbit\WCWidth\Core\Contract\IFileSaver;

final class FileSaver implements IFileSaver
{

    public function save(string $filename, string $content): void
    {
        $file = $this->getDir() . $filename;
        Logger::debug(sprintf('Saving file: %s', $file));
        file_put_contents(
            $file,
            $content
        );
    }

    private function getDir(): string
    {
        return __DIR__ . '/../.rendered/';
    }
}