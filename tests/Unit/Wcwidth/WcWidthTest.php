<?php

namespace AlecRabbit\Tests\Unit\Wcwidth;

use AlecRabbit\Tests\Helper\PickLock;
use AlecRabbit\WCWidth\Kernel\UnicodeVersion;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

use function AlecRabbit\WCWidth\ffiEnabled;
use function AlecRabbit\WCWidth\wcswidth;
use function AlecRabbit\WCWidth\wcwidth;

class WcWidthTest extends TestCase
{
    #[Test]
    public function helloJp(): void
    {
        // Width of Japanese phrase: コンニチハ, セカイ!
        // Given a phrase of 5 and 3 Katakana ideographs, joined with
        // 3 English-ASCII punctuation characters, totaling 11, this
        // phrase consumes 19 cells of a terminal emulator.

        $phrase = '〈コンニチハ, セカイ!〉';
        $expect_length_each = [2, 2, 2, 2, 2, 2, 1, 1, 2, 2, 2, 1, 2];

        self::doAsserts($expect_length_each, $phrase);
    }

    protected static function doAsserts(array $expect_length_each, string $phrase, ?int $expect_length_phrase = null): void
    {
        $chrArray = preg_split('//u', $phrase, -1, PREG_SPLIT_NO_EMPTY);
        $length_each = array_map(wcwidth(...), $chrArray);
        $length_phrase = wcswidth($phrase, mb_strlen($phrase));
        $expect_length_phrase ??= array_sum($expect_length_each);

        self::assertSame($expect_length_each, $length_each);
        self::assertSame($expect_length_phrase, $length_phrase);
    }

    #[Test]
    public function nullWidthZero(): void
    {
        // NULL (0) reports width 0.
        $phrase = "abc\x00def〉";
        $expect_length_each = [1, 1, 1, 0, 1, 1, 1, 2];

        self::doAsserts($expect_length_each, $phrase);
    }

    #[Test]
    public function nullString(): void
    {
        self::assertSame(0, wcswidth(null));
    }

    #[Test]
    public function mbMessage(): void
    {
        $phrase = 'mᚹä漢d字';
        $expect_length_each = [1, 1, 1, 2, 1, 2,];

        self::doAsserts($expect_length_each, $phrase);
    }

    #[Test]
    public function csiWithNegative(): void
    {
        // CSI (Control sequence initiate) reports width -1.
        $phrase = "\x1b[0m";
        $expect_length_each = [-1, 1, 1, 1];
        $expect_length_phrase = -1;

        self::doAsserts($expect_length_each, $phrase, $expect_length_phrase);
    }

    #[Test]
    public function combiningWidthNegative(): void
    {
        // Simple test combining reports total width of 4.
        $phrase = "- -\u{05bf}--";
        $expect_length_each = [1, 1, 1, 0, 1, 1];

        self::doAsserts($expect_length_each, $phrase);
    }

    #[Test]
    public function combiningWidthAcute(): void
    {
        // Phrase cafe + COMBINING ACUTE ACCENT is café of length 4.
        $phrase = "cafe\u{0301}";
        $expect_length_each = [1, 1, 1, 1, 0];

        self::doAsserts($expect_length_each, $phrase);
    }

    #[Test]
    public function clockStringWidth(): void
    {
        // String containing clock symbols
        $phrase = '🕐🕑';
        $expect_length_each = [2, 2];

        self::doAsserts($expect_length_each, $phrase);
    }

    #[Test]
    public function combiningEnclosing(): void
    {
        // CYRILLIC CAPITAL LETTER A + COMBINING CYRILLIC HUNDRED THOUSANDS SIGN is А҈ of length 1.
        $phrase = "\u{0410}\u{0488}";
        $expect_length_each = [1, 0];

        self::doAsserts($expect_length_each, $phrase);
    }

    #[Test]
    public function combiningSpacing(): void
    {
        // Balinese kapal (ship) is ᬓᬨᬮ᭄ of length 4.
        $phrase = 'ᬓᬨᬮ᭄';
        $expect_length_each = [1, 1, 1, 1];
        $expect_length_phrase = 4;

        self::doAsserts($expect_length_each, $phrase);
    }

    #[Test]
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

    #[Test]
    public function wcwidthUnknownVersion(): void
    {
        $propertyName = 'currentVersion';
        $version =  PickLock::getValue(UnicodeVersion::class, $propertyName);
        PickLock::setValue(UnicodeVersion::class, $propertyName, null);
        if (ffiEnabled()) {
            self::assertSame(1, wcwidth('a')); // version is ignored
        } else {
            $this->expectException(\InvalidArgumentException::class);
            $this->expectExceptionMessage('Unknown Unicode version: "0".');
            wcwidth('a', '0');
        }
        PickLock::setValue(UnicodeVersion::class, $propertyName, $version);
    }
}
