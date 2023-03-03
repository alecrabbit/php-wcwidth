<?php

declare(strict_types=1);
// 02.03.23
namespace AlecRabbit\WCWidth\Kernel;

use AlecRabbit\WCWidth\Kernel\Contract\IUnicodeVersion;

use InvalidArgumentException;

use function in_array;

use const AlecRabbit\WCWidth\UNICODE_VERSIONS;

/** @internal */
final class UnicodeVersion implements IUnicodeVersion
{
    private static ?string $useVersion = null;

    // @codeCoverageIgnoreStart
    private function __construct()
    {
        // no instances
    }

    // @codeCoverageIgnoreEnd

    public static function setVersion(string $version): void
    {
        self::$useVersion = self::doRefine($version);
    }

    private static function doRefine(?string $version): string
    {
        if ('latest' === $version || null === $version) {
            $version = self::latest();
        }

        self::assertVersion($version);

        return
            $version;
    }

    public static function latest(): string
    {
        return
            UNICODE_VERSIONS[array_key_last(UNICODE_VERSIONS)];
    }

    private static function assertVersion(string $version): void
    {
        if (!in_array($version, UNICODE_VERSIONS, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    'Unknown Unicode version: "%s".',
                    $version
                )
            );
        }
    }

    public static function getVersion(): ?string
    {
        return self::$useVersion;
    }

    public static function reset(): void
    {
        self::$useVersion = null;
    }

    public static function refine(?string $version): string
    {
        if (self::$useVersion) {
            return self::$useVersion;
        }

        return self::doRefine($version);
    }

}