<?php

namespace AlecRabbit\Tests\App\Unit;

use AlecRabbit\Tests\TestCase\TestCase;
use AlecRabbit\WCWidth\App\Core\TableEntry;
use AlecRabbit\WCWidth\App\Core\TableProcessor;
use AlecRabbit\WCWidth\App\Core\TableRow;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class TableProcessorTest extends TestCase
{
    private TableProcessor $tableProcessor;

    public static function processTableData(): iterable
    {
        yield [
            [
                self::RESULT => [
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '1100..115F;W     # Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER',
                                codepoints: '1100..115F',
                                comment: 'Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER',
                                start: 4352,
                                end: 4447,
                                properties: 'W',
                            )
                        ],
                        codepoints: '[0x01100, 0x0115f,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '231A..231B;W     # So     [2] WATCH..HOURGLASS',
                                codepoints: '231A..231B',
                                comment: 'So     [2] WATCH..HOURGLASS',
                                start: 8986,
                                end: 8987,
                                properties: 'W',
                            )
                        ],
                        codepoints: '[0x0231a, 0x0231b,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '2329;W           # Ps         LEFT-POINTING ANGLE BRACKET',
                                codepoints: '2329',
                                comment: 'Ps         LEFT-POINTING ANGLE BRACKET',
                                start: 9001,
                                end: 9001,
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '232A;W           # Pe         RIGHT-POINTING ANGLE BRACKET',
                                codepoints: '232A',
                                comment: 'Pe         RIGHT-POINTING ANGLE BRACKET',
                                start: 9002,
                                end: 9002,
                                properties: 'W',
                            )
                        ],
                        codepoints: '[0x02329, 0x0232a,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '3000;F           # Zs         IDEOGRAPHIC SPACE',
                                codepoints: '3000',
                                comment: 'Zs         IDEOGRAPHIC SPACE',
                                start: hexdec('3000'),
                                end: hexdec('3000'),
                                properties: 'F',
                            ),
                            new TableEntry(
                                line: '3001..3003;W     # Po     [3] IDEOGRAPHIC COMMA..DITTO MARK',
                                codepoints: '3001..3003',
                                comment: 'Po     [3] IDEOGRAPHIC COMMA..DITTO MARK',
                                start: hexdec('3001'),
                                end: hexdec('3003'),
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '3004;W           # So         JAPANESE INDUSTRIAL STANDARD SYMBOL',
                                codepoints: '3004',
                                comment: 'So         JAPANESE INDUSTRIAL STANDARD SYMBOL',
                                start: hexdec('3004'),
                                end: hexdec('3004'),
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '3005;W           # Lm         IDEOGRAPHIC ITERATION MARK',
                                codepoints: '3005',
                                comment: 'Lm         IDEOGRAPHIC ITERATION MARK',
                                start: hexdec('3005'),
                                end: hexdec('3005'),
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '3006;W           # Lo         IDEOGRAPHIC CLOSING MARK',
                                codepoints: '3006',
                                comment: 'Lo         IDEOGRAPHIC CLOSING MARK',
                                start: hexdec('3006'),
                                end: hexdec('3006'),
                                properties: 'W',
                            ),
                        ],
                        codepoints: '[0x03000, 0x03006,]',
                    ),
                ],
            ],
            [
                self::ARGUMENTS => [
                    self::DATA =>
                        [
                            new TableEntry(
                                line: '1100..115F;W     # Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER',
                                codepoints: '1100..115F',
                                comment: 'Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER',
                                start: 4352,
                                end: 4447,
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '231A..231B;W     # So     [2] WATCH..HOURGLASS',
                                codepoints: '231A..231B',
                                comment: 'So     [2] WATCH..HOURGLASS',
                                start: 8986,
                                end: 8987,
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '2329;W           # Ps         LEFT-POINTING ANGLE BRACKET',
                                codepoints: '2329',
                                comment: 'Ps         LEFT-POINTING ANGLE BRACKET',
                                start: 9001,
                                end: 9001,
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '232A;W           # Pe         RIGHT-POINTING ANGLE BRACKET',
                                codepoints: '232A',
                                comment: 'Pe         RIGHT-POINTING ANGLE BRACKET',
                                start: 9002,
                                end: 9002,
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '3000;F           # Zs         IDEOGRAPHIC SPACE',
                                codepoints: '3000',
                                comment: 'Zs         IDEOGRAPHIC SPACE',
                                start: hexdec('3000'),
                                end: hexdec('3000'),
                                properties: 'F',
                            ),
                            new TableEntry(
                                line: '3001..3003;W     # Po     [3] IDEOGRAPHIC COMMA..DITTO MARK',
                                codepoints: '3001..3003',
                                comment: 'Po     [3] IDEOGRAPHIC COMMA..DITTO MARK',
                                start: hexdec('3001'),
                                end: hexdec('3003'),
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '3004;W           # So         JAPANESE INDUSTRIAL STANDARD SYMBOL',
                                codepoints: '3004',
                                comment: 'So         JAPANESE INDUSTRIAL STANDARD SYMBOL',
                                start: hexdec('3004'),
                                end: hexdec('3004'),
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '3005;W           # Lm         IDEOGRAPHIC ITERATION MARK',
                                codepoints: '3005',
                                comment: 'Lm         IDEOGRAPHIC ITERATION MARK',
                                start: hexdec('3005'),
                                end: hexdec('3005'),
                                properties: 'W',
                            ),
                            new TableEntry(
                                line: '3006;W           # Lo         IDEOGRAPHIC CLOSING MARK',
                                codepoints: '3006',
                                comment: 'Lo         IDEOGRAPHIC CLOSING MARK',
                                start: hexdec('3006'),
                                end: hexdec('3006'),
                                properties: 'W',
                            ),
                        ],
                ],
            ]
        ];
        yield [
            [
                self::RESULT => [
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X',
                                codepoints: '0300..036F',
                                comment: '[112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X',
                                start: 768,
                                end: 879,
                                properties: 'Mn',
                            ),
                        ],
                        codepoints: '[0x00300, 0x0036f,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE',
                                codepoints: '0483..0487',
                                comment: '[5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE',
                                start: 1155,
                                end: 1159,
                                properties: 'Mn',
                            ),
                            new TableEntry(
                                line: '0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN',
                                codepoints: '0488..0489',
                                comment: '[2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN',
                                start: 1160,
                                end: 1161,
                                properties: 'Me',
                            ),
                        ],
                        codepoints: '[0x00483, 0x00489,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG',
                                codepoints: '0591..05BD',
                                comment: '[45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG',
                                start: 1425,
                                end: 1469,
                                properties: 'Mn',
                            ),
                        ],
                        codepoints: '[0x00591, 0x005bd,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA',
                                codepoints: '1E944..1E94A',
                                comment: '[7] ADLAM ALIF LENGTHENER..ADLAM NUKTA',
                                start: 125252,
                                end: 125258,
                                properties: 'Mn',
                            ),
                        ],
                        codepoints: '[0x1e944, 0x1e94a,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: 'E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256',
                                codepoints: 'E0100..E01EF',
                                comment: '[240] VARIATION SELECTOR-17..VARIATION SELECTOR-256',
                                start: 917760,
                                end: 917999,
                                properties: 'Mn',
                            ),
                        ],
                        codepoints: '[0xe0100, 0xe01ef,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '1ABE          ; Me #       COMBINING PARENTHESES OVERLAY',
                                codepoints: '1ABE',
                                comment: 'COMBINING PARENTHESES OVERLAY',
                                start: 6846,
                                end: 6846,
                                properties: 'Me',
                            ),
                        ],
                        codepoints: '[0x01abe, 0x01abe,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH',
                                codepoints: '20DD..20E0',
                                comment: '[4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH',
                                start: 8413,
                                end: 8416,
                                properties: 'Me',
                            ),
                        ],
                        codepoints: '[0x020dd, 0x020e0,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: '20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE',
                                codepoints: '20E2..20E4',
                                comment: '[3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE',
                                start: 8418,
                                end: 8420,
                                properties: 'Me',
                            ),
                        ],
                        codepoints: '[0x020e2, 0x020e4,]',
                    ),
                    new TableRow(
                        derivedFrom: [
                            new TableEntry(
                                line: 'A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN',
                                codepoints: 'A670..A672',
                                comment: '[3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN',
                                start: 42608,
                                end: 42610,
                                properties: 'Me',
                            ),
                        ],
                        codepoints: '[0x0a670, 0x0a672,]',
                    ),
                ],
            ],
            [
                self::ARGUMENTS => [
                    self::DATA => [
                        new TableEntry(
                            line: '0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X',
                            codepoints: '0300..036F',
                            comment: '[112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X',
                            start: 768,
                            end: 879,
                            properties: 'Mn',
                        ),
                        new TableEntry(
                            line: '0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE',
                            codepoints: '0483..0487',
                            comment: '[5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE',
                            start: 1155,
                            end: 1159,
                            properties: 'Mn',
                        ),
                        new TableEntry(
                            line: '0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN',
                            codepoints: '0488..0489',
                            comment: '[2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN',
                            start: 1160,
                            end: 1161,
                            properties: 'Me',
                        ),
                        new TableEntry(
                            line: '0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG',
                            codepoints: '0591..05BD',
                            comment: '[45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG',
                            start: 1425,
                            end: 1469,
                            properties: 'Mn',
                        ),
                        new TableEntry(
                            line: '1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA',
                            codepoints: '1E944..1E94A',
                            comment: '[7] ADLAM ALIF LENGTHENER..ADLAM NUKTA',
                            start: 125252,
                            end: 125258,
                            properties: 'Mn',
                        ),
                        new TableEntry(
                            line: 'E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256',
                            codepoints: 'E0100..E01EF',
                            comment: '[240] VARIATION SELECTOR-17..VARIATION SELECTOR-256',
                            start: 917760,
                            end: 917999,
                            properties: 'Mn',
                        ),

                        new TableEntry(
                            line: '1ABE          ; Me #       COMBINING PARENTHESES OVERLAY',
                            codepoints: '1ABE',
                            comment: 'COMBINING PARENTHESES OVERLAY',
                            start: 6846,
                            end: 6846,
                            properties: 'Me',
                        ),
                        new TableEntry(
                            line: '20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH',
                            codepoints: '20DD..20E0',
                            comment: '[4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH',
                            start: 8413,
                            end: 8416,
                            properties: 'Me',
                        ),
                        new TableEntry(
                            line: '20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE',
                            codepoints: '20E2..20E4',
                            comment: '[3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE',
                            start: 8418,
                            end: 8420,
                            properties: 'Me',
                        ),
                        new TableEntry(
                            line: 'A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN',
                            codepoints: 'A670..A672',
                            comment: '[3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN',
                            start: 42608,
                            end: 42610,
                            properties: 'Me',
                        ),
                    ],
                ],
            ]
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
    #[DataProvider('processTableData')]
    public function processTable(array $expected, array $incoming): void
    {
        $this->setExpectException($expected);
        $args = $incoming[self::ARGUMENTS];
        $iterator_to_array = iterator_to_array(
            $this->tableProcessor->process($args[self::DATA])
        );
//        var_dump($iterator_to_array);

        self::assertEquals(
            $expected[self::RESULT],
            $iterator_to_array
        );
    }

    protected function setUp(): void
    {
        $this->tableProcessor = new TableProcessor();
    }
}
