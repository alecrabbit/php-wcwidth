<?php

namespace AlecRabbit\Tests\Unit\Core;

use AlecRabbit\Tests\TestCase\TestCase;
use AlecRabbit\WCWidth\Core\CategoryParser;
use AlecRabbit\WCWidth\Core\TableEntry;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class CategoryParserTest extends TestCase
{
    private const WIDE_CATEGORIES = ['W', 'F'];
    private const ZERO_CATEGORIES = ['Me', 'Mn'];
    private CategoryParser $categoryParser;

    public static function parseCategoryData(): iterable
    {
        yield [
            [
                self::RESULT => [
                    new TableEntry(
                        line: "1100..115F;W     # Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER",
                        codepoints: "1100..115F",
                        comment: "Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER",
                        start: 4352,
                        end: 4447,
                    ),
                    new TableEntry(
                        line: "231A..231B;W     # So     [2] WATCH..HOURGLASS",
                        codepoints: "231A..231B",
                        comment: "So     [2] WATCH..HOURGLASS",
                        start: 8986,
                        end: 8987,
                    ),
                    new TableEntry(
                        line: "2329;W           # Ps         LEFT-POINTING ANGLE BRACKET",
                        codepoints: "2329",
                        comment: "Ps         LEFT-POINTING ANGLE BRACKET",
                        start: 9001,
                        end: 9001,
                    ),
                    new TableEntry(
                        line: "232A;W           # Pe         RIGHT-POINTING ANGLE BRACKET",
                        codepoints: "232A",
                        comment: "Pe         RIGHT-POINTING ANGLE BRACKET",
                        start: 9002,
                        end: 9002,
                    ),
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
        yield [
            [
                self::RESULT => [
                    new TableEntry(
                        line: "0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X",
                        codepoints: "0300..036F",
                        comment: "[112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X",
                        start: 768,
                        end: 879,
                    ),
                    new TableEntry(
                        line: "0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE",
                        codepoints: "0483..0487",
                        comment: "[5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE",
                        start: 1155,
                        end: 1159,
                    ),
                    new TableEntry(
                        line: "0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG",
                        codepoints: "0591..05BD",
                        comment: "[45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG",
                        start: 1425,
                        end: 1469,
                    ),
                    new TableEntry(
                        line: "1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA",
                        codepoints: "1E944..1E94A",
                        comment: "[7] ADLAM ALIF LENGTHENER..ADLAM NUKTA",
                        start: 125252,
                        end: 125258,
                    ),
                    new TableEntry(
                        line: "E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256",
                        codepoints: "E0100..E01EF",
                        comment: "[240] VARIATION SELECTOR-17..VARIATION SELECTOR-256",
                        start: 917760,
                        end: 917999,
                    ),
                    new TableEntry(
                        line: "0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN",
                        codepoints: "0488..0489",
                        comment: "[2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN",
                        start: 1160,
                        end: 1161,
                    ),
                    new TableEntry(
                        line: "1ABE          ; Me #       COMBINING PARENTHESES OVERLAY",
                        codepoints: "1ABE",
                        comment: "COMBINING PARENTHESES OVERLAY",
                        start: 6846,
                        end: 6846,
                    ),
                    new TableEntry(
                        line: "20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH",
                        codepoints: "20DD..20E0",
                        comment: "[4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH",
                        start: 8413,
                        end: 8416,
                    ),
                    new TableEntry(
                        line: "20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE",
                        codepoints: "20E2..20E4",
                        comment: "[3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE",
                        start: 8418,
                        end: 8420,
                    ),
                    new TableEntry(
                        line: "A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN",
                        codepoints: "A670..A672",
                        comment: "[3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN",
                        start: 42608,
                        end: 42610,
                    ),

//                    [
//                        //  0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
//                        ['0x00300', '0x0036f',],
//                        'Mn',
//                        '[112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X',
//                    ],
//                    [
//                        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
//                        ['0x00483', '0x00487',],
//                        'Mn',
//                        '[5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE',
//                    ],
//                    [
//                        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
//                        ['0x00591', '0x005bd',],
//                        'Mn',
//                        '[45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG',
//                    ],
//                    [
//                        // 1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA
//                        ['0x1e944', '0x1e94a',],
//                        'Mn',
//                        '[7] ADLAM ALIF LENGTHENER..ADLAM NUKTA',
//                    ],
//                    [
//                        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
//                        ['0xe0100', '0xe01ef',],
//                        'Mn',
//                        '[240] VARIATION SELECTOR-17..VARIATION SELECTOR-256',
//                    ],
//                    [
//                        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
//                        ['0x00488', '0x00489',],
//                        'Me',
//                        '[2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN',
//                    ],
//                    [
//                        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
//                        ['0x01abe', '0x01abe',],
//                        'Me',
//                        'COMBINING PARENTHESES OVERLAY',
//                    ],
//                    [
//                        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
//                        ['0x020dd', '0x020e0',],
//                        'Me',
//                        '[4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH',
//                    ],
//                    [
//                        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
//                        ['0x020e2', '0x020e4',],
//                        'Me',
//                        '[3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE',
//                    ],
//                    [
//                        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
//                        ['0x0a670', '0x0a672',],
//                        'Me',
//                        '[3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN',
//                    ],
                ],
            ],
            [
                self::ARGUMENTS => [
                    self::DATA =>
                        <<<'DATA'
                        # DerivedGeneralCategory-14.0.0.txt
                        # Date: 2021-07-10, 00:35:08 GMT
                        # © 2021 Unicode®, Inc.
                        # Unicode and the Unicode Logo are registered trademarks of Unicode, Inc. in the U.S. and other countries.
                        # For terms of use, see http://www.unicode.org/terms_of_use.html
                        #
                        # Unicode Character Database
                        #   For documentation, see http://www.unicode.org/reports/tr44/

                        # ================================================

                        # Property:	General_Category

                        # ================================================

                        # General_Category=Unassigned

                        0378..0379    ; Cn #   [2] <reserved-0378>..<reserved-0379>
                        0380..0383    ; Cn #   [4] <reserved-0380>..<reserved-0383>
                        038B          ; Cn #       <reserved-038B>
                        038D          ; Cn #       <reserved-038D>
                        E01F0..EFFFF  ; Cn # [65040] <reserved-E01F0>..<noncharacter-EFFFF>
                        FFFFE..FFFFF  ; Cn #   [2] <noncharacter-FFFFE>..<noncharacter-FFFFF>
                        10FFFE..10FFFF; Cn #   [2] <noncharacter-10FFFE>..<noncharacter-10FFFF>

                        # Total code points: 829834

                        # ================================================

                        # General_Category=Uppercase_Letter

                        0041..005A    ; Lu #  [26] LATIN CAPITAL LETTER A..LATIN CAPITAL LETTER Z
                        00C0..00D6    ; Lu #  [23] LATIN CAPITAL LETTER A WITH GRAVE..LATIN CAPITAL LETTER O WITH DIAERESIS
                        00D8..00DE    ; Lu #   [7] LATIN CAPITAL LETTER O WITH STROKE..LATIN CAPITAL LETTER THORN
                        0100          ; Lu #       LATIN CAPITAL LETTER A WITH MACRON
                        0102          ; Lu #       LATIN CAPITAL LETTER A WITH BREVE
                        0104          ; Lu #       LATIN CAPITAL LETTER A WITH OGONEK
                        2F800..2FA1D  ; Lo # [542] CJK COMPATIBILITY IDEOGRAPH-2F800..CJK COMPATIBILITY IDEOGRAPH-2FA1D
                        30000..3134A  ; Lo # [4939] CJK UNIFIED IDEOGRAPH-30000..CJK UNIFIED IDEOGRAPH-3134A

                        # Total code points: 127333

                        # ================================================

                        # General_Category=Nonspacing_Mark

                        0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
                        0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
                        0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
                        1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA
                        E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256

                        # Total code points: 1950

                        # ================================================

                        # General_Category=Enclosing_Mark

                        0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
                        1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
                        20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
                        20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
                        A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN

                        # Total code points: 13

                        # ================================================

                        # General_Category=Spacing_Mark

                        0903          ; Mc #       DEVANAGARI SIGN VISARGA
                        093B          ; Mc #       DEVANAGARI VOWEL SIGN OOE
                        093E..0940    ; Mc #   [3] DEVANAGARI VOWEL SIGN AA..DEVANAGARI VOWEL SIGN II
                        0949..094C    ; Mc #   [4] DEVANAGARI VOWEL SIGN CANDRA O..DEVANAGARI
                        DATA,
                    self::CATEGORIES => self::ZERO_CATEGORIES,
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
            dump(
                iterator_to_array(
                    $this->categoryParser->parse($args[self::DATA], $args[self::CATEGORIES])
                )
            ),
        );
    }

    protected function setUp(): void
    {
        $this->categoryParser = new CategoryParser();
    }
}
