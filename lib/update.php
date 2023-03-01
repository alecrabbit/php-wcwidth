<?php

declare(strict_types=1);

require_once __DIR__ . '/../tests/bootstrap.php';

(new AlecRabbit\WCWidth\Builder\TableBuilder())
    ->build();

echo memoryReport() . PHP_EOL;

function memoryReport(): string
{
    return sprintf(
        'Memory Real: %sK Peak: %sK',
        number_format(memory_get_usage(true) / 1024),
        number_format(memory_get_peak_usage(true) / 1024),
    );
}
