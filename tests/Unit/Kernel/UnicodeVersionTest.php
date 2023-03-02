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
        UniCodeVersion::setVersion($version);
        self::assertEquals($version, UniCodeVersion::getVersion());
    }

    #[Test]
    public function canRefine(): void
    {
        $version = '13.0.0';
        UniCodeVersion::setVersion($version);
        self::assertEquals($version, UniCodeVersion::refine('latest'));
        $version = UniCodeVersion::latest();
        UniCodeVersion::setVersion($version);
        self::assertEquals($version, UniCodeVersion::refine('latest'));
    }

    #[Test]
    public function latest(): void
    {
        self::assertEquals(UniCodeVersion::latest(), UniCodeVersion::refine('latest'));
        self::assertEquals(UniCodeVersion::latest(), UniCodeVersion::refine(null));
    }

    protected function setUp(): void
    {
        UniCodeVersion::reset();
    }

}
