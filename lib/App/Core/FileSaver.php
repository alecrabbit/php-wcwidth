<?php

declare(strict_types=1);
// 01.03.23
namespace AlecRabbit\WCWidth\App\Core;

use AlecRabbit\WCWidth\App\Core\Contract\IFileSaver;

final class FileSaver implements IFileSaver
{
    public function __construct(
        protected string $directory = __DIR__ . '/../../.rendered/',
    ) {
    }


    public function save(string $filename, string $content): void
    {
        $file = $this->directory . $filename;
        Logger::debug(sprintf('Saving file: %s', $file));
        file_put_contents(
            $file,
            $content
        );
    }
}
