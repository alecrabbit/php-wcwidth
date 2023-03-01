<?php
declare(strict_types=1);
// 01.03.23
namespace AlecRabbit\WCWidth\Builder\Contract;

final class FileSaver implements IFileSaver
{

    public function save(string $filename, string $content): void
    {
        // write to file
        file_put_contents(
            __DIR__ . '/../' . $filename,
            $content
        );
    }
}