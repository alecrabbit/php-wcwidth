<?php

declare(strict_types=1);
// 02.03.23
namespace AlecRabbit\WCWidth\Kernel;

use const AlecRabbit\WCWidth\UNICODE_VERSIONS;

/** @internal */
final class UnicodeVersion
{
    private static ?string $useVersion = null;

    public static function setVersion(string $version): void
    {
        if ('latest' === $version) {
            $version = self::latestVersion();
        }
        self::assertVersion($version);

        self::$useVersion = $version;
    }

    private static function latestVersion()
    {
        return
            UNICODE_VERSIONS[array_key_last(UNICODE_VERSIONS)];
    }

    private static function assertVersion(?string $version): void
    {
        if (null === $version) {
            return;
        }
        if (!\in_array($version, UNICODE_VERSIONS, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Unknown Unicode version: %s',
                    $version
                )
            );
        }
    }

    public static function refine(?string $version): string
    {
        if (self::$useVersion) {
            return self::$useVersion;
        }
        self::assertVersion($version);

        return
            $version ?? self::latestVersion();
    }

}