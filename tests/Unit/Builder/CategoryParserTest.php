<?php

namespace AlecRabbit\Tests\Unit\Builder;

use AlecRabbit\Tests\TestCase\TestCase;
use AlecRabbit\WCWidth\Builder\CategoryParser;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class CategoryParserTest extends TestCase
{
    private const WIDE_CATEGORIES = ['W', 'F'];
    private CategoryParser $parser;

    public static function parseCategoryData(): iterable
    {
        yield [
            [
                self::RESULT => [
                    [
                        // 1100..115F;W     # Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER
                        [0x01100, 0x0115f,],
                        'W',
                        'Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER',
                    ],
                ],
            ],
            [
                self::ARGUMENTS => [
                    self::DATA =>
                        <<<'DATA'
                        # EastAsianWidth-14.0.0.txt
                        # Date: 2021-07-06, 09:58:53 GMT [KW, LI]
                        # © 2021 Unicode®, Inc.
                        # Unicode and the Unicode Logo are registered trademarks of Unicode, Inc. in the U.S. and other countries.
                        # For terms of use, see https://www.unicode.org/terms_of_use.html
                        #
                        # Unicode Character Database
                        # For documentation, see https://www.unicode.org/reports/tr44/
                        #
                        # East_Asian_Width Property
                        #
                        # This file is a normative contributory data file in the
                        # Unicode Character Database.
                        #
                        # The format is two fields separated by a semicolon.
                        # Field 0: Unicode code point value or range of code point values
                        # Field 1: East_Asian_Width property, consisting of one of the following values:
                        #         "A", "F", "H", "N", "Na", "W"
                        #  - All code points, assigned or unassigned, that are not listed
                        #      explicitly are given the value "N".
                        #  - The unassigned code points in the following blocks default to "W":
                        #         CJK Unified Ideographs Extension A: U+3400..U+4DBF
                        #         CJK Unified Ideographs:             U+4E00..U+9FFF
                        #         CJK Compatibility Ideographs:       U+F900..U+FAFF
                        #  - All undesignated code points in Planes 2 and 3, whether inside or
                        #      outside of allocated blocks, default to "W":
                        #         Plane 2:                            U+20000..U+2FFFD
                        #         Plane 3:                            U+30000..U+3FFFD
                        #
                        # Character ranges are specified as for other property files in the
                        # Unicode Character Database.
                        #
                        # For legacy reasons, there are no spaces before or after the semicolon
                        # which separates the two fields. The comments following the number sign
                        # "#" list the General_Category property value or the L& alias of the
                        # derived value LC, the Unicode character name or names, and, in lines
                        # with ranges of code points, the code point count in square brackets.
                        #
                        # For more information, see UAX #11: East Asian Width,
                        # at https://www.unicode.org/reports/tr11/
                        #
                        # @missing: 0000..10FFFF; N
                        0000..001F;N     # Cc    [32] <control-0000>..<control-001F>
                        0020;Na          # Zs         SPACE
                        0021..0023;Na    # Po     [3] EXCLAMATION MARK..NUMBER SIGN
                        0024;Na          # Sc         DOLLAR SIGN
                        0025..0027;Na    # Po     [3] PERCENT SIGN..APOSTROPHE
                        0028;Na          # Ps         LEFT PARENTHESIS
                        10A0..10C5;N     # Lu    [38] GEORGIAN CAPITAL LETTER AN..GEORGIAN CAPITAL LETTER HOE
                        10C7;N           # Lu         GEORGIAN CAPITAL LETTER YN
                        10CD;N           # Lu         GEORGIAN CAPITAL LETTER AEN
                        10D0..10FA;N     # Ll    [43] GEORGIAN LETTER AN..GEORGIAN LETTER AIN
                        10FB;N           # Po         GEORGIAN PARAGRAPH SEPARATOR
                        10FC;N           # Lm         MODIFIER LETTER GEORGIAN NAR
                        10FD..10FF;N     # Ll     [3] GEORGIAN LETTER AEN..GEORGIAN LETTER LABIAL SIGN
                        1100..115F;W     # Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER
                        231A..231B;W     # So     [2] WATCH..HOURGLASS
                        231C..231F;N     # So     [4] TOP LEFT CORNER..BOTTOM RIGHT CORNER
                        2320..2321;N     # Sm     [2] TOP HALF INTEGRAL..BOTTOM HALF INTEGRAL
                        2322..2328;N     # So     [7] FROWN..KEYBOARD
                        2329;W           # Ps         LEFT-POINTING ANGLE BRACKET
                        232A;W           # Pe         RIGHT-POINTING ANGLE BRACKET
                        232B..237B;N     # So    [81] ERASE TO THE LEFT..NOT CHECK MARK
                        DATA,
                    self::CATEGORIES => self::WIDE_CATEGORIES,
                ],
            ],
        ];
        //        yield [
        //            [
        //                self::EXCEPTION => [
        //                    self::CLASS_ => \InvalidArgumentException::class,
        //                    self::MESSAGE => 'Invalid category name: a',
        //                ],
        //            ],
        //            [
        //                self::ARGUMENTS => [
        //                    'a',
        //                    [],
        //                ],
        //            ],
        //        ];
    }

    #[Test]
    #[DataProvider('parseCategoryData')]
    public function parseCategory(array $expected, array $incoming): void
    {
        $this->setExpectException($expected);
        $args = $incoming[self::ARGUMENTS];
        self::assertEquals(
            $expected[self::RESULT],
            $this->parser->parseCategory($args[self::DATA], $args[self::CATEGORIES])
        );
    }

    protected function setUp(): void
    {
        $this->parser = new CategoryParser();
    }
}
