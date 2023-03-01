<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth;

// @codeCoverageIgnoreStart
const WIDE_EASTASIAN = [
    '15.0.0' => [
    // 1100..115F;W     # Lo    [96] HANGUL CHOSEONG KIYEOK..HANGUL CHOSEONG FILLER
    [0x01100, 0x0115f,],
    // 231A..231B;W     # So     [2] WATCH..HOURGLASS
    [0x0231a, 0x0231b,],
    // 2329;W           # Ps         LEFT-POINTING ANGLE BRACKET
    // 232A;W           # Pe         RIGHT-POINTING ANGLE BRACKET
    [0x02329, 0x0232a,],
    // 23E9..23EC;W     # So     [4] BLACK RIGHT-POINTING DOUBLE TRIANGLE..BLACK DOWN-POINTING DOUBLE TRIANGLE
    [0x023e9, 0x023ec,],
    // 23F0;W           # So         ALARM CLOCK
    [0x023f0, 0x023f0,],
    // 23F3;W           # So         HOURGLASS WITH FLOWING SAND
    [0x023f3, 0x023f3,],
    // 25FD..25FE;W     # Sm     [2] WHITE MEDIUM SMALL SQUARE..BLACK MEDIUM SMALL SQUARE
    [0x025fd, 0x025fe,],
    // 2614..2615;W     # So     [2] UMBRELLA WITH RAIN DROPS..HOT BEVERAGE
    [0x02614, 0x02615,],
    // 2648..2653;W     # So    [12] ARIES..PISCES
    [0x02648, 0x02653,],
    // 267F;W           # So         WHEELCHAIR SYMBOL
    [0x0267f, 0x0267f,],
    // 2693;W           # So         ANCHOR
    [0x02693, 0x02693,],
    // 26A1;W           # So         HIGH VOLTAGE SIGN
    [0x026a1, 0x026a1,],
    // 26AA..26AB;W     # So     [2] MEDIUM WHITE CIRCLE..MEDIUM BLACK CIRCLE
    [0x026aa, 0x026ab,],
    // 26BD..26BE;W     # So     [2] SOCCER BALL..BASEBALL
    [0x026bd, 0x026be,],
    // 26C4..26C5;W     # So     [2] SNOWMAN WITHOUT SNOW..SUN BEHIND CLOUD
    [0x026c4, 0x026c5,],
    // 26CE;W           # So         OPHIUCHUS
    [0x026ce, 0x026ce,],
    // 26D4;W           # So         NO ENTRY
    [0x026d4, 0x026d4,],
    // 26EA;W           # So         CHURCH
    [0x026ea, 0x026ea,],
    // 26F2..26F3;W     # So     [2] FOUNTAIN..FLAG IN HOLE
    [0x026f2, 0x026f3,],
    // 26F5;W           # So         SAILBOAT
    [0x026f5, 0x026f5,],
    // 26FA;W           # So         TENT
    [0x026fa, 0x026fa,],
    // 26FD;W           # So         FUEL PUMP
    [0x026fd, 0x026fd,],
    // 2705;W           # So         WHITE HEAVY CHECK MARK
    [0x02705, 0x02705,],
    // 270A..270B;W     # So     [2] RAISED FIST..RAISED HAND
    [0x0270a, 0x0270b,],
    // 2728;W           # So         SPARKLES
    [0x02728, 0x02728,],
    // 274C;W           # So         CROSS MARK
    [0x0274c, 0x0274c,],
    // 274E;W           # So         NEGATIVE SQUARED CROSS MARK
    [0x0274e, 0x0274e,],
    // 2753..2755;W     # So     [3] BLACK QUESTION MARK ORNAMENT..WHITE EXCLAMATION MARK ORNAMENT
    [0x02753, 0x02755,],
    // 2757;W           # So         HEAVY EXCLAMATION MARK SYMBOL
    [0x02757, 0x02757,],
    // 2795..2797;W     # So     [3] HEAVY PLUS SIGN..HEAVY DIVISION SIGN
    [0x02795, 0x02797,],
    // 27B0;W           # So         CURLY LOOP
    [0x027b0, 0x027b0,],
    // 27BF;W           # So         DOUBLE CURLY LOOP
    [0x027bf, 0x027bf,],
    // 2B1B..2B1C;W     # So     [2] BLACK LARGE SQUARE..WHITE LARGE SQUARE
    [0x02b1b, 0x02b1c,],
    // 2B50;W           # So         WHITE MEDIUM STAR
    [0x02b50, 0x02b50,],
    // 2B55;W           # So         HEAVY LARGE CIRCLE
    [0x02b55, 0x02b55,],
    // 2E80..2E99;W     # So    [26] CJK RADICAL REPEAT..CJK RADICAL RAP
    [0x02e80, 0x02e99,],
    // 2E9B..2EF3;W     # So    [89] CJK RADICAL CHOKE..CJK RADICAL C-SIMPLIFIED TURTLE
    [0x02e9b, 0x02ef3,],
    // 2F00..2FD5;W     # So   [214] KANGXI RADICAL ONE..KANGXI RADICAL FLUTE
    [0x02f00, 0x02fd5,],
    // 2FF0..2FFB;W     # So    [12] IDEOGRAPHIC DESCRIPTION CHARACTER LEFT TO RIGHT..IDEOGRAPHIC DESCRIPTION CHARACTER OVERLAID
    [0x02ff0, 0x02ffb,],
    // 3000;F           # Zs         IDEOGRAPHIC SPACE
    // 3001..3003;W     # Po     [3] IDEOGRAPHIC COMMA..DITTO MARK
    // 3004;W           # So         JAPANESE INDUSTRIAL STANDARD SYMBOL
    // 3005;W           # Lm         IDEOGRAPHIC ITERATION MARK
    // 3006;W           # Lo         IDEOGRAPHIC CLOSING MARK
    // 3007;W           # Nl         IDEOGRAPHIC NUMBER ZERO
    // 3008;W           # Ps         LEFT ANGLE BRACKET
    // 3009;W           # Pe         RIGHT ANGLE BRACKET
    // 300A;W           # Ps         LEFT DOUBLE ANGLE BRACKET
    // 300B;W           # Pe         RIGHT DOUBLE ANGLE BRACKET
    // 300C;W           # Ps         LEFT CORNER BRACKET
    // 300D;W           # Pe         RIGHT CORNER BRACKET
    // 300E;W           # Ps         LEFT WHITE CORNER BRACKET
    // 300F;W           # Pe         RIGHT WHITE CORNER BRACKET
    // 3010;W           # Ps         LEFT BLACK LENTICULAR BRACKET
    // 3011;W           # Pe         RIGHT BLACK LENTICULAR BRACKET
    // 3012..3013;W     # So     [2] POSTAL MARK..GETA MARK
    // 3014;W           # Ps         LEFT TORTOISE SHELL BRACKET
    // 3015;W           # Pe         RIGHT TORTOISE SHELL BRACKET
    // 3016;W           # Ps         LEFT WHITE LENTICULAR BRACKET
    // 3017;W           # Pe         RIGHT WHITE LENTICULAR BRACKET
    // 3018;W           # Ps         LEFT WHITE TORTOISE SHELL BRACKET
    // 3019;W           # Pe         RIGHT WHITE TORTOISE SHELL BRACKET
    // 301A;W           # Ps         LEFT WHITE SQUARE BRACKET
    // 301B;W           # Pe         RIGHT WHITE SQUARE BRACKET
    // 301C;W           # Pd         WAVE DASH
    // 301D;W           # Ps         REVERSED DOUBLE PRIME QUOTATION MARK
    // 301E..301F;W     # Pe     [2] DOUBLE PRIME QUOTATION MARK..LOW DOUBLE PRIME QUOTATION MARK
    // 3020;W           # So         POSTAL MARK FACE
    // 3021..3029;W     # Nl     [9] HANGZHOU NUMERAL ONE..HANGZHOU NUMERAL NINE
    // 302A..302D;W     # Mn     [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
    // 302E..302F;W     # Mc     [2] HANGUL SINGLE DOT TONE MARK..HANGUL DOUBLE DOT TONE MARK
    // 3030;W           # Pd         WAVY DASH
    // 3031..3035;W     # Lm     [5] VERTICAL KANA REPEAT MARK..VERTICAL KANA REPEAT MARK LOWER HALF
    // 3036..3037;W     # So     [2] CIRCLED POSTAL MARK..IDEOGRAPHIC TELEGRAPH LINE FEED SEPARATOR SYMBOL
    // 3038..303A;W     # Nl     [3] HANGZHOU NUMERAL TEN..HANGZHOU NUMERAL THIRTY
    // 303B;W           # Lm         VERTICAL IDEOGRAPHIC ITERATION MARK
    // 303C;W           # Lo         MASU MARK
    // 303D;W           # Po         PART ALTERNATION MARK
    // 303E;W           # So         IDEOGRAPHIC VARIATION INDICATOR
    [0x03000, 0x0303e,],
    // 3041..3096;W     # Lo    [86] HIRAGANA LETTER SMALL A..HIRAGANA LETTER SMALL KE
    [0x03041, 0x03096,],
    // 3099..309A;W     # Mn     [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
    // 309B..309C;W     # Sk     [2] KATAKANA-HIRAGANA VOICED SOUND MARK..KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
    // 309D..309E;W     # Lm     [2] HIRAGANA ITERATION MARK..HIRAGANA VOICED ITERATION MARK
    // 309F;W           # Lo         HIRAGANA DIGRAPH YORI
    // 30A0;W           # Pd         KATAKANA-HIRAGANA DOUBLE HYPHEN
    // 30A1..30FA;W     # Lo    [90] KATAKANA LETTER SMALL A..KATAKANA LETTER VO
    // 30FB;W           # Po         KATAKANA MIDDLE DOT
    // 30FC..30FE;W     # Lm     [3] KATAKANA-HIRAGANA PROLONGED SOUND MARK..KATAKANA VOICED ITERATION MARK
    // 30FF;W           # Lo         KATAKANA DIGRAPH KOTO
    [0x03099, 0x030ff,],
    // 3105..312F;W     # Lo    [43] BOPOMOFO LETTER B..BOPOMOFO LETTER NN
    [0x03105, 0x0312f,],
    // 3131..318E;W     # Lo    [94] HANGUL LETTER KIYEOK..HANGUL LETTER ARAEAE
    [0x03131, 0x0318e,],
    // 3190..3191;W     # So     [2] IDEOGRAPHIC ANNOTATION LINKING MARK..IDEOGRAPHIC ANNOTATION REVERSE MARK
    // 3192..3195;W     # No     [4] IDEOGRAPHIC ANNOTATION ONE MARK..IDEOGRAPHIC ANNOTATION FOUR MARK
    // 3196..319F;W     # So    [10] IDEOGRAPHIC ANNOTATION TOP MARK..IDEOGRAPHIC ANNOTATION MAN MARK
    // 31A0..31BF;W     # Lo    [32] BOPOMOFO LETTER BU..BOPOMOFO LETTER AH
    // 31C0..31E3;W     # So    [36] CJK STROKE T..CJK STROKE Q
    [0x03190, 0x031e3,],
    // 31F0..31FF;W     # Lo    [16] KATAKANA LETTER SMALL KU..KATAKANA LETTER SMALL RO
    // 3200..321E;W     # So    [31] PARENTHESIZED HANGUL KIYEOK..PARENTHESIZED KOREAN CHARACTER O HU
    [0x031f0, 0x0321e,],
    // 3220..3229;W     # No    [10] PARENTHESIZED IDEOGRAPH ONE..PARENTHESIZED IDEOGRAPH TEN
    // 322A..3247;W     # So    [30] PARENTHESIZED IDEOGRAPH MOON..CIRCLED IDEOGRAPH KOTO
    [0x03220, 0x03247,],
    // 3250;W           # So         PARTNERSHIP SIGN
    // 3251..325F;W     # No    [15] CIRCLED NUMBER TWENTY ONE..CIRCLED NUMBER THIRTY FIVE
    // 3260..327F;W     # So    [32] CIRCLED HANGUL KIYEOK..KOREAN STANDARD SYMBOL
    // 3280..3289;W     # No    [10] CIRCLED IDEOGRAPH ONE..CIRCLED IDEOGRAPH TEN
    // 328A..32B0;W     # So    [39] CIRCLED IDEOGRAPH MOON..CIRCLED IDEOGRAPH NIGHT
    // 32B1..32BF;W     # No    [15] CIRCLED NUMBER THIRTY SIX..CIRCLED NUMBER FIFTY
    // 32C0..32FF;W     # So    [64] IDEOGRAPHIC TELEGRAPH SYMBOL FOR JANUARY..SQUARE ERA NAME REIWA
    // 3300..33FF;W     # So   [256] SQUARE APAATO..SQUARE GAL
    // 3400..4DBF;W     # Lo  [6592] CJK UNIFIED IDEOGRAPH-3400..CJK UNIFIED IDEOGRAPH-4DBF
    [0x03250, 0x04dbf,],
    // 4E00..9FFF;W     # Lo [20992] CJK UNIFIED IDEOGRAPH-4E00..CJK UNIFIED IDEOGRAPH-9FFF
    // A000..A014;W     # Lo    [21] YI SYLLABLE IT..YI SYLLABLE E
    // A015;W           # Lm         YI SYLLABLE WU
    // A016..A48C;W     # Lo  [1143] YI SYLLABLE BIT..YI SYLLABLE YYR
    [0x04e00, 0x0a48c,],
    // A490..A4C6;W     # So    [55] YI RADICAL QOT..YI RADICAL KE
    [0x0a490, 0x0a4c6,],
    // A960..A97C;W     # Lo    [29] HANGUL CHOSEONG TIKEUT-MIEUM..HANGUL CHOSEONG SSANGYEORINHIEUH
    [0x0a960, 0x0a97c,],
    // AC00..D7A3;W     # Lo [11172] HANGUL SYLLABLE GA..HANGUL SYLLABLE HIH
    [0x0ac00, 0x0d7a3,],
    // F900..FA6D;W     # Lo   [366] CJK COMPATIBILITY IDEOGRAPH-F900..CJK COMPATIBILITY IDEOGRAPH-FA6D
    // FA6E..FA6F;W     # Cn     [2] &lt;reserved-FA6E&gt;..&lt;reserved-FA6F&gt;
    // FA70..FAD9;W     # Lo   [106] CJK COMPATIBILITY IDEOGRAPH-FA70..CJK COMPATIBILITY IDEOGRAPH-FAD9
    // FADA..FAFF;W     # Cn    [38] &lt;reserved-FADA&gt;..&lt;reserved-FAFF&gt;
    [0x0f900, 0x0faff,],
    // FE10..FE16;W     # Po     [7] PRESENTATION FORM FOR VERTICAL COMMA..PRESENTATION FORM FOR VERTICAL QUESTION MARK
    // FE17;W           # Ps         PRESENTATION FORM FOR VERTICAL LEFT WHITE LENTICULAR BRACKET
    // FE18;W           # Pe         PRESENTATION FORM FOR VERTICAL RIGHT WHITE LENTICULAR BRAKCET
    // FE19;W           # Po         PRESENTATION FORM FOR VERTICAL HORIZONTAL ELLIPSIS
    [0x0fe10, 0x0fe19,],
    // FE30;W           # Po         PRESENTATION FORM FOR VERTICAL TWO DOT LEADER
    // FE31..FE32;W     # Pd     [2] PRESENTATION FORM FOR VERTICAL EM DASH..PRESENTATION FORM FOR VERTICAL EN DASH
    // FE33..FE34;W     # Pc     [2] PRESENTATION FORM FOR VERTICAL LOW LINE..PRESENTATION FORM FOR VERTICAL WAVY LOW LINE
    // FE35;W           # Ps         PRESENTATION FORM FOR VERTICAL LEFT PARENTHESIS
    // FE36;W           # Pe         PRESENTATION FORM FOR VERTICAL RIGHT PARENTHESIS
    // FE37;W           # Ps         PRESENTATION FORM FOR VERTICAL LEFT CURLY BRACKET
    // FE38;W           # Pe         PRESENTATION FORM FOR VERTICAL RIGHT CURLY BRACKET
    // FE39;W           # Ps         PRESENTATION FORM FOR VERTICAL LEFT TORTOISE SHELL BRACKET
    // FE3A;W           # Pe         PRESENTATION FORM FOR VERTICAL RIGHT TORTOISE SHELL BRACKET
    // FE3B;W           # Ps         PRESENTATION FORM FOR VERTICAL LEFT BLACK LENTICULAR BRACKET
    // FE3C;W           # Pe         PRESENTATION FORM FOR VERTICAL RIGHT BLACK LENTICULAR BRACKET
    // FE3D;W           # Ps         PRESENTATION FORM FOR VERTICAL LEFT DOUBLE ANGLE BRACKET
    // FE3E;W           # Pe         PRESENTATION FORM FOR VERTICAL RIGHT DOUBLE ANGLE BRACKET
    // FE3F;W           # Ps         PRESENTATION FORM FOR VERTICAL LEFT ANGLE BRACKET
    // FE40;W           # Pe         PRESENTATION FORM FOR VERTICAL RIGHT ANGLE BRACKET
    // FE41;W           # Ps         PRESENTATION FORM FOR VERTICAL LEFT CORNER BRACKET
    // FE42;W           # Pe         PRESENTATION FORM FOR VERTICAL RIGHT CORNER BRACKET
    // FE43;W           # Ps         PRESENTATION FORM FOR VERTICAL LEFT WHITE CORNER BRACKET
    // FE44;W           # Pe         PRESENTATION FORM FOR VERTICAL RIGHT WHITE CORNER BRACKET
    // FE45..FE46;W     # Po     [2] SESAME DOT..WHITE SESAME DOT
    // FE47;W           # Ps         PRESENTATION FORM FOR VERTICAL LEFT SQUARE BRACKET
    // FE48;W           # Pe         PRESENTATION FORM FOR VERTICAL RIGHT SQUARE BRACKET
    // FE49..FE4C;W     # Po     [4] DASHED OVERLINE..DOUBLE WAVY OVERLINE
    // FE4D..FE4F;W     # Pc     [3] DASHED LOW LINE..WAVY LOW LINE
    // FE50..FE52;W     # Po     [3] SMALL COMMA..SMALL FULL STOP
    [0x0fe30, 0x0fe52,],
    // FE54..FE57;W     # Po     [4] SMALL SEMICOLON..SMALL EXCLAMATION MARK
    // FE58;W           # Pd         SMALL EM DASH
    // FE59;W           # Ps         SMALL LEFT PARENTHESIS
    // FE5A;W           # Pe         SMALL RIGHT PARENTHESIS
    // FE5B;W           # Ps         SMALL LEFT CURLY BRACKET
    // FE5C;W           # Pe         SMALL RIGHT CURLY BRACKET
    // FE5D;W           # Ps         SMALL LEFT TORTOISE SHELL BRACKET
    // FE5E;W           # Pe         SMALL RIGHT TORTOISE SHELL BRACKET
    // FE5F..FE61;W     # Po     [3] SMALL NUMBER SIGN..SMALL ASTERISK
    // FE62;W           # Sm         SMALL PLUS SIGN
    // FE63;W           # Pd         SMALL HYPHEN-MINUS
    // FE64..FE66;W     # Sm     [3] SMALL LESS-THAN SIGN..SMALL EQUALS SIGN
    [0x0fe54, 0x0fe66,],
    // FE68;W           # Po         SMALL REVERSE SOLIDUS
    // FE69;W           # Sc         SMALL DOLLAR SIGN
    // FE6A..FE6B;W     # Po     [2] SMALL PERCENT SIGN..SMALL COMMERCIAL AT
    [0x0fe68, 0x0fe6b,],
    // FF01..FF03;F     # Po     [3] FULLWIDTH EXCLAMATION MARK..FULLWIDTH NUMBER SIGN
    // FF04;F           # Sc         FULLWIDTH DOLLAR SIGN
    // FF05..FF07;F     # Po     [3] FULLWIDTH PERCENT SIGN..FULLWIDTH APOSTROPHE
    // FF08;F           # Ps         FULLWIDTH LEFT PARENTHESIS
    // FF09;F           # Pe         FULLWIDTH RIGHT PARENTHESIS
    // FF0A;F           # Po         FULLWIDTH ASTERISK
    // FF0B;F           # Sm         FULLWIDTH PLUS SIGN
    // FF0C;F           # Po         FULLWIDTH COMMA
    // FF0D;F           # Pd         FULLWIDTH HYPHEN-MINUS
    // FF0E..FF0F;F     # Po     [2] FULLWIDTH FULL STOP..FULLWIDTH SOLIDUS
    // FF10..FF19;F     # Nd    [10] FULLWIDTH DIGIT ZERO..FULLWIDTH DIGIT NINE
    // FF1A..FF1B;F     # Po     [2] FULLWIDTH COLON..FULLWIDTH SEMICOLON
    // FF1C..FF1E;F     # Sm     [3] FULLWIDTH LESS-THAN SIGN..FULLWIDTH GREATER-THAN SIGN
    // FF1F..FF20;F     # Po     [2] FULLWIDTH QUESTION MARK..FULLWIDTH COMMERCIAL AT
    // FF21..FF3A;F     # Lu    [26] FULLWIDTH LATIN CAPITAL LETTER A..FULLWIDTH LATIN CAPITAL LETTER Z
    // FF3B;F           # Ps         FULLWIDTH LEFT SQUARE BRACKET
    // FF3C;F           # Po         FULLWIDTH REVERSE SOLIDUS
    // FF3D;F           # Pe         FULLWIDTH RIGHT SQUARE BRACKET
    // FF3E;F           # Sk         FULLWIDTH CIRCUMFLEX ACCENT
    // FF3F;F           # Pc         FULLWIDTH LOW LINE
    // FF40;F           # Sk         FULLWIDTH GRAVE ACCENT
    // FF41..FF5A;F     # Ll    [26] FULLWIDTH LATIN SMALL LETTER A..FULLWIDTH LATIN SMALL LETTER Z
    // FF5B;F           # Ps         FULLWIDTH LEFT CURLY BRACKET
    // FF5C;F           # Sm         FULLWIDTH VERTICAL LINE
    // FF5D;F           # Pe         FULLWIDTH RIGHT CURLY BRACKET
    // FF5E;F           # Sm         FULLWIDTH TILDE
    // FF5F;F           # Ps         FULLWIDTH LEFT WHITE PARENTHESIS
    // FF60;F           # Pe         FULLWIDTH RIGHT WHITE PARENTHESIS
    [0x0ff01, 0x0ff60,],
    // FFE0..FFE1;F     # Sc     [2] FULLWIDTH CENT SIGN..FULLWIDTH POUND SIGN
    // FFE2;F           # Sm         FULLWIDTH NOT SIGN
    // FFE3;F           # Sk         FULLWIDTH MACRON
    // FFE4;F           # So         FULLWIDTH BROKEN BAR
    // FFE5..FFE6;F     # Sc     [2] FULLWIDTH YEN SIGN..FULLWIDTH WON SIGN
    [0x0ffe0, 0x0ffe6,],
    // 16FE0..16FE1;W   # Lm     [2] TANGUT ITERATION MARK..NUSHU ITERATION MARK
    // 16FE2;W          # Po         OLD CHINESE HOOK MARK
    // 16FE3;W          # Lm         OLD CHINESE ITERATION MARK
    // 16FE4;W          # Mn         KHITAN SMALL SCRIPT FILLER
    [0x16fe0, 0x16fe4,],
    // 16FF0..16FF1;W   # Mc     [2] VIETNAMESE ALTERNATE READING MARK CA..VIETNAMESE ALTERNATE READING MARK NHAY
    [0x16ff0, 0x16ff1,],
    // 17000..187F7;W   # Lo  [6136] TANGUT IDEOGRAPH-17000..TANGUT IDEOGRAPH-187F7
    [0x17000, 0x187f7,],
    // 18800..18AFF;W   # Lo   [768] TANGUT COMPONENT-001..TANGUT COMPONENT-768
    // 18B00..18CD5;W   # Lo   [470] KHITAN SMALL SCRIPT CHARACTER-18B00..KHITAN SMALL SCRIPT CHARACTER-18CD5
    [0x18800, 0x18cd5,],
    // 18D00..18D08;W   # Lo     [9] TANGUT IDEOGRAPH-18D00..TANGUT IDEOGRAPH-18D08
    [0x18d00, 0x18d08,],
    // 1AFF0..1AFF3;W   # Lm     [4] KATAKANA LETTER MINNAN TONE-2..KATAKANA LETTER MINNAN TONE-5
    [0x1aff0, 0x1aff3,],
    // 1AFF5..1AFFB;W   # Lm     [7] KATAKANA LETTER MINNAN TONE-7..KATAKANA LETTER MINNAN NASALIZED TONE-5
    [0x1aff5, 0x1affb,],
    // 1AFFD..1AFFE;W   # Lm     [2] KATAKANA LETTER MINNAN NASALIZED TONE-7..KATAKANA LETTER MINNAN NASALIZED TONE-8
    [0x1affd, 0x1affe,],
    // 1B000..1B0FF;W   # Lo   [256] KATAKANA LETTER ARCHAIC E..HENTAIGANA LETTER RE-2
    // 1B100..1B122;W   # Lo    [35] HENTAIGANA LETTER RE-3..KATAKANA LETTER ARCHAIC WU
    [0x1b000, 0x1b122,],
    // 1B132;W          # Lo         HIRAGANA LETTER SMALL KO
    [0x1b132, 0x1b132,],
    // 1B150..1B152;W   # Lo     [3] HIRAGANA LETTER SMALL WI..HIRAGANA LETTER SMALL WO
    [0x1b150, 0x1b152,],
    // 1B155;W          # Lo         KATAKANA LETTER SMALL KO
    [0x1b155, 0x1b155,],
    // 1B164..1B167;W   # Lo     [4] KATAKANA LETTER SMALL WI..KATAKANA LETTER SMALL N
    [0x1b164, 0x1b167,],
    // 1B170..1B2FB;W   # Lo   [396] NUSHU CHARACTER-1B170..NUSHU CHARACTER-1B2FB
    [0x1b170, 0x1b2fb,],
    // 1F004;W          # So         MAHJONG TILE RED DRAGON
    [0x1f004, 0x1f004,],
    // 1F0CF;W          # So         PLAYING CARD BLACK JOKER
    [0x1f0cf, 0x1f0cf,],
    // 1F18E;W          # So         NEGATIVE SQUARED AB
    [0x1f18e, 0x1f18e,],
    // 1F191..1F19A;W   # So    [10] SQUARED CL..SQUARED VS
    [0x1f191, 0x1f19a,],
    // 1F200..1F202;W   # So     [3] SQUARE HIRAGANA HOKA..SQUARED KATAKANA SA
    [0x1f200, 0x1f202,],
    // 1F210..1F23B;W   # So    [44] SQUARED CJK UNIFIED IDEOGRAPH-624B..SQUARED CJK UNIFIED IDEOGRAPH-914D
    [0x1f210, 0x1f23b,],
    // 1F240..1F248;W   # So     [9] TORTOISE SHELL BRACKETED CJK UNIFIED IDEOGRAPH-672C..TORTOISE SHELL BRACKETED CJK UNIFIED IDEOGRAPH-6557
    [0x1f240, 0x1f248,],
    // 1F250..1F251;W   # So     [2] CIRCLED IDEOGRAPH ADVANTAGE..CIRCLED IDEOGRAPH ACCEPT
    [0x1f250, 0x1f251,],
    // 1F260..1F265;W   # So     [6] ROUNDED SYMBOL FOR FU..ROUNDED SYMBOL FOR CAI
    [0x1f260, 0x1f265,],
    // 1F300..1F320;W   # So    [33] CYCLONE..SHOOTING STAR
    [0x1f300, 0x1f320,],
    // 1F32D..1F335;W   # So     [9] HOT DOG..CACTUS
    [0x1f32d, 0x1f335,],
    // 1F337..1F37C;W   # So    [70] TULIP..BABY BOTTLE
    [0x1f337, 0x1f37c,],
    // 1F37E..1F393;W   # So    [22] BOTTLE WITH POPPING CORK..GRADUATION CAP
    [0x1f37e, 0x1f393,],
    // 1F3A0..1F3CA;W   # So    [43] CAROUSEL HORSE..SWIMMER
    [0x1f3a0, 0x1f3ca,],
    // 1F3CF..1F3D3;W   # So     [5] CRICKET BAT AND BALL..TABLE TENNIS PADDLE AND BALL
    [0x1f3cf, 0x1f3d3,],
    // 1F3E0..1F3F0;W   # So    [17] HOUSE BUILDING..EUROPEAN CASTLE
    [0x1f3e0, 0x1f3f0,],
    // 1F3F4;W          # So         WAVING BLACK FLAG
    [0x1f3f4, 0x1f3f4,],
    // 1F3F8..1F3FA;W   # So     [3] BADMINTON RACQUET AND SHUTTLECOCK..AMPHORA
    // 1F3FB..1F3FF;W   # Sk     [5] EMOJI MODIFIER FITZPATRICK TYPE-1-2..EMOJI MODIFIER FITZPATRICK TYPE-6
    // 1F400..1F43E;W   # So    [63] RAT..PAW PRINTS
    [0x1f3f8, 0x1f43e,],
    // 1F440;W          # So         EYES
    [0x1f440, 0x1f440,],
    // 1F442..1F4FC;W   # So   [187] EAR..VIDEOCASSETTE
    [0x1f442, 0x1f4fc,],
    // 1F4FF..1F53D;W   # So    [63] PRAYER BEADS..DOWN-POINTING SMALL RED TRIANGLE
    [0x1f4ff, 0x1f53d,],
    // 1F54B..1F54E;W   # So     [4] KAABA..MENORAH WITH NINE BRANCHES
    [0x1f54b, 0x1f54e,],
    // 1F550..1F567;W   # So    [24] CLOCK FACE ONE OCLOCK..CLOCK FACE TWELVE-THIRTY
    [0x1f550, 0x1f567,],
    // 1F57A;W          # So         MAN DANCING
    [0x1f57a, 0x1f57a,],
    // 1F595..1F596;W   # So     [2] REVERSED HAND WITH MIDDLE FINGER EXTENDED..RAISED HAND WITH PART BETWEEN MIDDLE AND RING FINGERS
    [0x1f595, 0x1f596,],
    // 1F5A4;W          # So         BLACK HEART
    [0x1f5a4, 0x1f5a4,],
    // 1F5FB..1F5FF;W   # So     [5] MOUNT FUJI..MOYAI
    // 1F600..1F64F;W   # So    [80] GRINNING FACE..PERSON WITH FOLDED HANDS
    [0x1f5fb, 0x1f64f,],
    // 1F680..1F6C5;W   # So    [70] ROCKET..LEFT LUGGAGE
    [0x1f680, 0x1f6c5,],
    // 1F6CC;W          # So         SLEEPING ACCOMMODATION
    [0x1f6cc, 0x1f6cc,],
    // 1F6D0..1F6D2;W   # So     [3] PLACE OF WORSHIP..SHOPPING TROLLEY
    [0x1f6d0, 0x1f6d2,],
    // 1F6D5..1F6D7;W   # So     [3] HINDU TEMPLE..ELEVATOR
    [0x1f6d5, 0x1f6d7,],
    // 1F6DC..1F6DF;W   # So     [4] WIRELESS..RING BUOY
    [0x1f6dc, 0x1f6df,],
    // 1F6EB..1F6EC;W   # So     [2] AIRPLANE DEPARTURE..AIRPLANE ARRIVING
    [0x1f6eb, 0x1f6ec,],
    // 1F6F4..1F6FC;W   # So     [9] SCOOTER..ROLLER SKATE
    [0x1f6f4, 0x1f6fc,],
    // 1F7E0..1F7EB;W   # So    [12] LARGE ORANGE CIRCLE..LARGE BROWN SQUARE
    [0x1f7e0, 0x1f7eb,],
    // 1F7F0;W          # So         HEAVY EQUALS SIGN
    [0x1f7f0, 0x1f7f0,],
    // 1F90C..1F93A;W   # So    [47] PINCHED FINGERS..FENCER
    [0x1f90c, 0x1f93a,],
    // 1F93C..1F945;W   # So    [10] WRESTLERS..GOAL NET
    [0x1f93c, 0x1f945,],
    // 1F947..1F9FF;W   # So   [185] FIRST PLACE MEDAL..NAZAR AMULET
    [0x1f947, 0x1f9ff,],
    // 1FA70..1FA7C;W   # So    [13] BALLET SHOES..CRUTCH
    [0x1fa70, 0x1fa7c,],
    // 1FA80..1FA88;W   # So     [9] YO-YO..FLUTE
    [0x1fa80, 0x1fa88,],
    // 1FA90..1FABD;W   # So    [46] RINGED PLANET..WING
    [0x1fa90, 0x1fabd,],
    // 1FABF..1FAC5;W   # So     [7] GOOSE..PERSON WITH CROWN
    [0x1fabf, 0x1fac5,],
    // 1FACE..1FADB;W   # So    [14] MOOSE..PEA POD
    [0x1face, 0x1fadb,],
    // 1FAE0..1FAE8;W   # So     [9] MELTING FACE..SHAKING FACE
    [0x1fae0, 0x1fae8,],
    // 1FAF0..1FAF8;W   # So     [9] HAND WITH INDEX FINGER AND THUMB CROSSED..RIGHTWARDS PUSHING HAND
    [0x1faf0, 0x1faf8,],
    // 20000..2A6DF;W   # Lo [42720] CJK UNIFIED IDEOGRAPH-20000..CJK UNIFIED IDEOGRAPH-2A6DF
    // 2A6E0..2A6FF;W   # Cn    [32] &lt;reserved-2A6E0&gt;..&lt;reserved-2A6FF&gt;
    // 2A700..2B739;W   # Lo  [4154] CJK UNIFIED IDEOGRAPH-2A700..CJK UNIFIED IDEOGRAPH-2B739
    // 2B73A..2B73F;W   # Cn     [6] &lt;reserved-2B73A&gt;..&lt;reserved-2B73F&gt;
    // 2B740..2B81D;W   # Lo   [222] CJK UNIFIED IDEOGRAPH-2B740..CJK UNIFIED IDEOGRAPH-2B81D
    // 2B81E..2B81F;W   # Cn     [2] &lt;reserved-2B81E&gt;..&lt;reserved-2B81F&gt;
    // 2B820..2CEA1;W   # Lo  [5762] CJK UNIFIED IDEOGRAPH-2B820..CJK UNIFIED IDEOGRAPH-2CEA1
    // 2CEA2..2CEAF;W   # Cn    [14] &lt;reserved-2CEA2&gt;..&lt;reserved-2CEAF&gt;
    // 2CEB0..2EBE0;W   # Lo  [7473] CJK UNIFIED IDEOGRAPH-2CEB0..CJK UNIFIED IDEOGRAPH-2EBE0
    // 2EBE1..2F7FF;W   # Cn  [3103] &lt;reserved-2EBE1&gt;..&lt;reserved-2F7FF&gt;
    // 2F800..2FA1D;W   # Lo   [542] CJK COMPATIBILITY IDEOGRAPH-2F800..CJK COMPATIBILITY IDEOGRAPH-2FA1D
    // 2FA1E..2FA1F;W   # Cn     [2] &lt;reserved-2FA1E&gt;..&lt;reserved-2FA1F&gt;
    // 2FA20..2FFFD;W   # Cn  [1502] &lt;reserved-2FA20&gt;..&lt;reserved-2FFFD&gt;
    [0x20000, 0x2fffd,],
    // 30000..3134A;W   # Lo  [4939] CJK UNIFIED IDEOGRAPH-30000..CJK UNIFIED IDEOGRAPH-3134A
    // 3134B..3134F;W   # Cn     [5] &lt;reserved-3134B&gt;..&lt;reserved-3134F&gt;
    // 31350..323AF;W   # Lo  [4192] CJK UNIFIED IDEOGRAPH-31350..CJK UNIFIED IDEOGRAPH-323AF
    // 323B0..3FFFD;W   # Cn [56398] &lt;reserved-323B0&gt;..&lt;reserved-3FFFD&gt;
    [0x30000, 0x3fffd,],
    ],
];
// @codeCoverageIgnoreEnd
