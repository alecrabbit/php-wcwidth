<?php

declare(strict_types=1);

require_once __DIR__ . '/../tests/bootstrap.php';

$builder = new AlecRabbit\WCWidth\Builder\TablesBuilder();

//dump($builder);

$builder->build();
