<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$builder = new AlecRabbit\WCWidth\Builder\TablesBuilder();

//dump($builder);

$builder->build();
