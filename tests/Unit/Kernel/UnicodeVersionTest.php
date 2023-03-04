<?php

namespace AlecRabbit\Tests\Unit\Kernel;

use AlecRabbit\Tests\TestCase\TestCase;
use AlecRabbit\WCWidth\Kernel\UnicodeVersion;
use PHPUnit\Framework\Attributes\Test;

class UnicodeVersionTest extends TestCase
{
    #[Test]
    public function canSetAndGetVersion(): void
    {
        $version = '13.0.0';
        UnicodeVersion::set($version);
        self::assertEquals($version, UnicodeVersion::get());
    }

    #[Test]
    public function canRefine(): void
    {
        $version = '13.0.0';
        UnicodeVersion::set($version);
        self::assertEquals($version, UnicodeVersion::refine('latest'));
        $version = UnicodeVersion::latest();
        UnicodeVersion::set($version);
        self::assertEquals($version, UnicodeVersion::refine('latest'));
    }

    #[Test]
    public function latest(): void
    {
        self::assertEquals(UnicodeVersion::latest(), UnicodeVersion::refine('latest'));
        self::assertEquals(UnicodeVersion::latest(), UnicodeVersion::refine(null));
    }

    #[Test]
    public function throwsOnInvalidVersion(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Unknown Unicode version: "invalid".');
        UnicodeVersion::refine('invalid');
    }

    protected function setUp(): void
    {
        UnicodeVersion::reset();
    }

}
