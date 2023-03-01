<?php

declare(strict_types=1);
// 01.03.23

namespace AlecRabbit\WCWidth\Core;

final class TableProcessor implements Contract\ITableProcessor
{
//    public function process(iterable $data): iterable
//    {
//        $previous = null;
//        $first = null;
//        $derivedFrom = [];
//        foreach ($data as $entry) {
//            if ($first instanceof TableEntry) {
//                if (!($previous->end === $entry->start - 1)) {
//                    yield dump(
//                        new TableRow(
//                            $derivedFrom,
//                            sprintf(
//                                '[%s, %s,]',
//                                $first->normalizedStart(),
//                                $previous->normalizedEnd()
//                            )
//                        )
//                    );
//                    $derivedFrom = [];
//                } else { // if ($previous->end === $entry->start - 1)
//                    $derivedFrom[] = $previous;
//                    dump($previous, $entry);
//                }
//            }
//            $previous = $entry;
//            $first = $entry;
//        }
//    }

// function processEntries should take iterable $data as argument
// $data = [
//     new TableEntry(
//         line: '1100..115F;W     # Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER',
//         codepoints: '1100..115F',
//         comment: 'Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER',
//         start: 4352,
//         end: 4447,
//         properties: 'W',
//     ),
//     new TableEntry(
//         line: '231A..231B;W     # So     [2] WATCH..HOURGLASS',
//         codepoints: '231A..231B',
//         comment: 'So     [2] WATCH..HOURGLASS',
//         start: 8986,
//         end: 8987,
//         properties: 'W',
//     ),
//     new TableEntry(
//         line: '2329;W           # Ps         LEFT-POINTING ANGLE BRACKET',
//         codepoints: '2329',
//         comment: 'Ps         LEFT-POINTING ANGLE BRACKET',
//         start: 9001,
//         end: 9001,
//         properties: 'W',
//     ),
//     new TableEntry(
//         line: '232A;W           # Pe         RIGHT-POINTING ANGLE BRACKET',
//         codepoints: '232A',
//         comment: 'Pe         RIGHT-POINTING ANGLE BRACKET',
//         start: 9002,
//         end: 9002,
//         properties: 'W',
//     ),
//     new TableEntry(
//         line: '3000;F           # Zs         IDEOGRAPHIC SPACE',
//         codepoints: '3000',
//         comment: 'Zs         IDEOGRAPHIC SPACE',
//         start: hexdec('3000'),
//         end: hexdec('3000'),
//         properties: 'F',
//     ),
//     new TableEntry(
//         line: '3001..3003;W     # Po     [3] IDEOGRAPHIC COMMA..DITTO MARK',
//         codepoints: '3001..3003',
//         comment: 'Po     [3] IDEOGRAPHIC COMMA..DITTO MARK',
//         start: hexdec('3001'),
//         end: hexdec('3003'),
//         properties: 'W',
//     ),
//     new TableEntry(
//         line: '3004;W           # So         JAPANESE INDUSTRIAL STANDARD SYMBOL',
//         codepoints: '3004',
//         comment: 'So         JAPANESE INDUSTRIAL STANDARD SYMBOL',
//         start: hexdec('3004'),
//         end: hexdec('3004'),
//         properties: 'W',
//     ),
//     new TableEntry(
//         line: '3005;W           # Lm         IDEOGRAPHIC ITERATION MARK',
//         codepoints: '3005',
//         comment: 'Lm         IDEOGRAPHIC ITERATION MARK',
//         start: hexdec('3005'),
//         end: hexdec('3005'),
//         properties: 'W',
//     ),
//     new TableEntry(
//         line: '3006;W           # Lo         IDEOGRAPHIC CLOSING MARK',
//         codepoints: '3006',
//         comment: 'Lo         IDEOGRAPHIC CLOSING MARK',
//         start: hexdec('3006'),
//         end: hexdec('3006'),
//         properties: 'W',
//     ),
// ];
// and return iterable $result
// $result =[
//     new TableRow(
//         derivedFrom: [
//             new TableEntry(
//                 line: '1100..115F;W     # Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER',
//                 codepoints: '1100..115F',
//                 comment: 'Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER',
//                 start: 4352,
//                 end: 4447,
//                 properties: 'W',
//             )
//         ],
//         codepoints: '[0x01100, 0x0115f,]',
//     ),
//     new TableRow(
//         derivedFrom: [
//             new TableEntry(
//                 line: '231A..231B;W     # So     [2] WATCH..HOURGLASS',
//                 codepoints: '231A..231B',
//                 comment: 'So     [2] WATCH..HOURGLASS',
//                 start: 8986,
//                 end: 8987,
//                 properties: 'W',
//             )
//         ],
//         codepoints: '[0x0231a, 0x0231b,]',
//     ),
//     new TableRow(
//         derivedFrom: [
//             new TableEntry(
//                 line: '2329;W           # Ps         LEFT-POINTING ANGLE BRACKET',
//                 codepoints: '2329',
//                 comment: 'Ps         LEFT-POINTING ANGLE BRACKET',
//                 start: 9001,
//                 end: 9001,
//                 properties: 'W',
//             ),
//             new TableEntry(
//                 line: '232A;W           # Pe         RIGHT-POINTING ANGLE BRACKET',
//                 codepoints: '232A',
//                 comment: 'Pe         RIGHT-POINTING ANGLE BRACKET',
//                 start: 9002,
//                 end: 9002,
//                 properties: 'W',
//             )
//         ],
//         codepoints: '[0x02329, 0x0232a,]',
//     ),
//     new TableRow(
//         derivedFrom: [
//             new TableEntry(
//                 line: '3000;F           # Zs         IDEOGRAPHIC SPACE',
//                 codepoints: '3000',
//                 comment: 'Zs         IDEOGRAPHIC SPACE',
//                 start: hexdec('3000'),
//                 end: hexdec('3000'),
//                 properties: 'F',
//             ),
//             new TableEntry(
//                 line: '3001..3003;W     # Po     [3] IDEOGRAPHIC COMMA..DITTO MARK',
//                 codepoints: '3001..3003',
//                 comment: 'Po     [3] IDEOGRAPHIC COMMA..DITTO MARK',
//                 start: hexdec('3001'),
//                 end: hexdec('3003'),
//                 properties: 'W',
//             ),
//             new TableEntry(
//                 line: '3004;W           # So         JAPANESE INDUSTRIAL STANDARD SYMBOL',
//                 codepoints: '3004',
//                 comment: 'So         JAPANESE INDUSTRIAL STANDARD SYMBOL',
//                 start: hexdec('3004'),
//                 end: hexdec('3004'),
//                 properties: 'W',
//             ),
//             new TableEntry(
//                 line: '3005;W           # Lm         IDEOGRAPHIC ITERATION MARK',
//                 codepoints: '3005',
//                 comment: 'Lm         IDEOGRAPHIC ITERATION MARK',
//                 start: hexdec('3005'),
//                 end: hexdec('3005'),
//                 properties: 'W',
//             ),
//             new TableEntry(
//                 line: '3006;W           # Lo         IDEOGRAPHIC CLOSING MARK',
//                 codepoints: '3006',
//                 comment: 'Lo         IDEOGRAPHIC CLOSING MARK',
//                 start: hexdec('3006'),
//                 end: hexdec('3006'),
//                 properties: 'W',
//             ),
//         ],
//         codepoints: '[0x03000, 0x03006,]',
//     ),
// ];
    public function process(iterable $data): iterable
    {
        $result = [];
        $previous = null;
        $derivedFrom = [];
        foreach ($data as $entry) {
            if ($previous === null) {
                $previous = $entry;
                continue;
            }
            if ($previous->end + 1 === $entry->start) {
                $derivedFrom[] = $previous;
                $previous = $entry;
                continue;
            }
            if (!($previous->end + 1 === $entry->start)) {
                $derivedFrom[] = $previous;
                $result[] = new TableRow(
                    derivedFrom: $derivedFrom,
                    codepoints: sprintf('[0x%05x, 0x%05x,]', $derivedFrom[0]->start, $previous->end),
                );
                $previous = $entry;
                $derivedFrom = [];
                continue;
            }

            dump($previous, $entry);
//
//            $result[] = new TableRow(
//                derivedFrom: $derivedFrom,
//                codepoints: sprintf('[0x%05x, 0x%05x,]', $previous->start, $previous->end),
//            );
//            $derivedFrom = [];
//            $previous = $entry;
        }
        return $result;
    }
}
