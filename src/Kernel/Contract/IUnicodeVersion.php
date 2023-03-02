<?php

declare(strict_types=1);
// 02.03.23
namespace AlecRabbit\WCWidth\Kernel\Contract;

/** @internal */
interface IUnicodeVersion
{
    public static function setVersion(string $version): void;

    public static function getVersion(): ?string;

    public static function reset(): void;

    public static function refine(?string $version): string;

    public static function latest(): string;
}