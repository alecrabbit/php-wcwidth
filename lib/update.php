<?php

declare(strict_types=1);

require_once __DIR__ . '/../tests/bootstrap.php';

(new AlecRabbit\WCWidth\Builder\TablesBuilder())
    ->build();
