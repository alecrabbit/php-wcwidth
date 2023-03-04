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
    private const LATEST = 'latest';
    private const VERSIONS = UNICODE_VERSIONS;

    private static ?string $currentVersion = null;

    /**
     * @codeCoverageIgnore
     */
    private function __construct()
    {
        // no instances
    }

    public static function set(string $version): void
    {
        self::$currentVersion = self::doRefine($version);
    }

    private static function doRefine(?string $version): string
    {
        if (self::LATEST === $version || null === $version) {
            $version = self::latest();
        }

        self::assertVersion($version);

        return
            $version;
    }

    public static function latest(): string
    {
        return
            self::VERSIONS[array_key_last(self::VERSIONS)];
    }

    private static function assertVersion(string $version): void
    {
        if (!in_array($version, self::VERSIONS, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    'Unknown Unicode version: "%s".',
                    $version
                )
            );
        }
    }

    public static function get(): ?string
    {
        return self::$currentVersion;
    }

    public static function reset(): void
    {
        self::$currentVersion = null;
    }

    public static function refine(?string $version): string
    {
        if (self::$currentVersion) {
            return self::$currentVersion;
        }

        return self::doRefine($version);
    }

}