<?php

namespace AlecRabbit\Tests\Unit\Wcwidth;

use PHPUnit\Framework\TestCase;
use function AlecRabbit\Helpers\wcswidth;

class WcWidthTest extends TestCase
{
    /** @test */
    public function helloJp(): void
    {
        // Width of Japanese phrase: コンニチハ, セカイ!
        // Given a phrase of 5 and 3 Katakana ideographs, joined with
        // 3 English-ASCII punctuation characters, totaling 11, this
        // phrase consumes 19 cells of a terminal emulator.

        $phrase = 'コンニチハ, セカイ!';
        $expect_length_each = [2, 2, 2, 2, 2, 1, 1, 2, 2, 2, 1];
        $expect_length_phrase = array_sum($expect_length_each);

        $this->validate($expect_length_each, $expect_length_phrase, $phrase);
    }

    protected function validate(array $expect_length_each, int $expect_length_phrase, string $phrase): void
    {
        $chrArray = preg_split('//u', $phrase, -1, PREG_SPLIT_NO_EMPTY);
        $length_each = array_map('AlecRabbit\Helpers\wcwidth', $chrArray);
        $length_phrase = wcswidth($phrase, mb_strlen($phrase));

        self::assertSame($length_each, $expect_length_each);
        self::assertSame($length_phrase, $expect_length_phrase);
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
    public function nullString(): void
    {
        self::assertSame(0, wcswidth(null));
    }

    /** @test */
    public function mbMessage(): void
    {
        $phrase = 'mᚹä漢d字';
        $expect_length_each = [1, 1, 1, 2, 1, 2,];
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
    public function clockStringWidth(): void
    {
        // String containing clock symbols
        $phrase = '🕐🕑';
        $expect_length_each = [2, 2];
        $expect_length_phrase = 4;

        $this->validate($expect_length_each, $expect_length_phrase, $phrase);
    }

    /** @test */
    public function combiningEnclosing(): void
    {
        // CYRILLIC CAPITAL LETTER A + COMBINING CYRILLIC HUNDRED THOUSANDS SIGN is А҈ of length 1.
        $phrase = "\u{0410}\u{0488}";
        $expect_length_each = [1, 0];
        $expect_length_phrase = 1;

        $this->validate($expect_length_each, $expect_length_phrase, $phrase);
    }

    /** @test */
    public function combiningSpacing(): void
    {
        // Balinese kapal (ship) is ᬓᬨᬮ᭄ of length 4.
        $phrase = 'ᬓᬨᬮ᭄';
        $expect_length_each = [1, 1, 1, 1];
        $expect_length_phrase = 4;

        $this->validate($expect_length_each, $expect_length_phrase, $phrase);
    }

    /** @test */
    public function wcswidthSubstr(): void
    {
        //  Test wcswidth() optional 2nd parameter, `n`.
        //  `n` determines at which position of the string
        //  to stop counting length.

        $phrase = 'コンニチハ, セカイ!';
        $expect_length_each = [2, 2, 2, 2, 2, 1, 1,];
        $expect_length_phrase = array_sum($expect_length_each);

        $length_phrase = wcswidth($phrase, 7);
        self::assertSame($length_phrase, $expect_length_phrase);
    }
}
