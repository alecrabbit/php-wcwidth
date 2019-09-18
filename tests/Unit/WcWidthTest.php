<?php

namespace AlecRabbit\Tests\Wcwidth;

use AlecRabbit\Wcwidth\WcWidth;
use PHPUnit\Framework\TestCase;

class WcWidthTest extends TestCase
{
    /** @test */
    public function helloJp(): void
    {
        $phrase = 'コンニチハ, セカイ!';
        $expect_length_each = [2, 2, 2, 2, 2, 1, 1, 2, 2, 2, 1];
        $expect_length_phrase = array_sum($expect_length_each);

        $this->validate($expect_length_each, $expect_length_phrase, $phrase);
    }

    protected function validate(array $expect_length_each, int $expect_length_phrase, string $phrase): void
    {
        $chrArray = preg_split('//u', $phrase, -1, PREG_SPLIT_NO_EMPTY);
        $length_each = array_map([WcWidth::class, 'wcwidth'], $chrArray);
        $length_phrase = WcWidth::wcswidth($phrase, mb_strlen($phrase));

        $this->assertSame($length_each, $expect_length_each);
        $this->assertSame($length_phrase, $expect_length_phrase);
    }

    /** @test */
    public function nullWidthZero(): void
    {
        // NULL (0) reports width 0.
        $phrase = "abc\x00def";
        $expect_length_each = [1, 1, 1, 0, 1, 1, 1];
        $expect_length_phrase = array_sum($expect_length_each);

        $this->validate($expect_length_each, $expect_length_phrase, $phrase);
    }
    
    /** @test */
    public function csiWithNegative(): void
    {
        // CSI (Control sequence initiate) reports width -1.
        $phrase = "\x1b[0m";
        $expect_length_each = [-1, 1, 1, 1];
        $expect_length_phrase = -1;

        $this->validate($expect_length_each, $expect_length_phrase, $phrase);
    }

    /** @test */
    public function combiningWidthNegative(): void
    {
        // Simple test combining reports total width of 4.
        $phrase = "--\u{05bf}--";
        $expect_length_each = [1, 1, 0, 1, 1];
        $expect_length_phrase = 4;

        $this->validate($expect_length_each, $expect_length_phrase, $phrase);
    }

    /** @test */
    public function combiningWidthAcute(): void
    {
        // Phrase cafe + COMBINING ACUTE ACCENT is café of length 4.
        $phrase = "cafe\u{0301}";
        $expect_length_each = [1, 1, 1, 1, 0];
        $expect_length_phrase = 4;

        $this->validate($expect_length_each, $expect_length_phrase, $phrase);
    }

    /** @test */
    public function wcswidthSubstr(): void
    {
        $phrase = 'コンニチハ, セカイ!';
        $expect_length_each = [2, 2, 2, 2, 2, 1, 1,];
        $expect_length_phrase = array_sum($expect_length_each);

        $length_phrase = WcWidth::wcswidth($phrase, 7);
        $this->assertSame($length_phrase, $expect_length_phrase);

    }
}
