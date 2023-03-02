<?php

namespace AlecRabbit\Tests\Unit\Kernel;

use AlecRabbit\WCWidth\Kernel\UnicodeVersion;
use PHPUnit\Framework\Attributes\Test;
use AlecRabbit\Tests\TestCase\TestCase;

class UnicodeVersionTest extends TestCase
{
    #[Test]
    public function latest(): void
    {
        self::assertEquals(UniCodeVersion::latest(), UniCodeVersion::refine('latest'));
    }
}
