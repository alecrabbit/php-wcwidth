<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth;

// @codeCoverageIgnoreStart
const ZERO_WIDTH = [
    '4.1.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0486    ; Mn #   [4] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC PSILI PNEUMATA
        [0x00483, 0x00486,],
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00488, 0x00489,],
        // 0591..05B9    ; Mn #  [41] HEBREW ACCENT ETNAHTA..HEBREW POINT HOLAM
        [0x00591, 0x005b9,],
        // 05BB..05BD    ; Mn #   [3] HEBREW POINT QUBUTS..HEBREW POINT METEG
        [0x005bb, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..0615    ; Mn #   [6] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL HIGH TAH
        [0x00610, 0x00615,],
        // 064B..065E    ; Mn #  [20] ARABIC FATHATAN..ARABIC FATHA WITH TWO DOTS
        [0x0064b, 0x0065e,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DE          ; Me #       ARABIC START OF RUB EL HIZB
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006de, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 0901..0902    ; Mn #   [2] DEVANAGARI SIGN CANDRABINDU..DEVANAGARI SIGN ANUSVARA
        [0x00901, 0x00902,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0954    ; Mn #   [4] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI ACUTE ACCENT
        [0x00951, 0x00954,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B43    ; Mn #   [3] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC R
        [0x00b41, 0x00b43,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0D41..0D43    ; Mn #   [3] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC R
        [0x00d41, 0x00d43,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F90..0F97    ; Mn #   [8] TIBETAN SUBJOINED LETTER KA..TIBETAN SUBJOINED LETTER JA
        [0x00f90, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032          ; Mn #       MYANMAR VOWEL SIGN AI
        [0x01032, 0x01032,],
        // 1036..1037    ; Mn #   [2] MYANMAR SIGN ANUSVARA..MYANMAR SIGN DOT BELOW
        [0x01036, 0x01037,],
        // 1039          ; Mn #       MYANMAR SIGN VIRAMA
        [0x01039, 0x01039,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 135F          ; Mn #       ETHIOPIC COMBINING GEMINATION MARK
        [0x0135f, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1DC0..1DC3    ; Mn #   [4] COMBINING DOTTED GRAVE ACCENT..COMBINING SUSPENSION MARK
        [0x01dc0, 0x01dc3,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20EB    ; Mn #   [7] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING LONG DOUBLE SOLIDUS OVERLAY
        [0x020d0, 0x020eb,],
        // 302A..302F    ; Mn #   [6] IDEOGRAPHIC LEVEL TONE MARK..HANGUL DOUBLE DOT TONE MARK
        [0x0302a, 0x0302f,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE23    ; Mn #   [4] COMBINING LIGATURE LEFT HALF..COMBINING DOUBLE TILDE RIGHT HALF
        [0x0fe20, 0x0fe23,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '5.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0486    ; Mn #   [4] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC PSILI PNEUMATA
        [0x00483, 0x00486,],
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00488, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..0615    ; Mn #   [6] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL HIGH TAH
        [0x00610, 0x00615,],
        // 064B..065E    ; Mn #  [20] ARABIC FATHATAN..ARABIC FATHA WITH TWO DOTS
        [0x0064b, 0x0065e,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DE          ; Me #       ARABIC START OF RUB EL HIZB
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006de, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0901..0902    ; Mn #   [2] DEVANAGARI SIGN CANDRABINDU..DEVANAGARI SIGN ANUSVARA
        [0x00901, 0x00902,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0954    ; Mn #   [4] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI ACUTE ACCENT
        [0x00951, 0x00954,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B43    ; Mn #   [3] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC R
        [0x00b41, 0x00b43,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D41..0D43    ; Mn #   [3] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC R
        [0x00d41, 0x00d43,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F90..0F97    ; Mn #   [8] TIBETAN SUBJOINED LETTER KA..TIBETAN SUBJOINED LETTER JA
        [0x00f90, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032          ; Mn #       MYANMAR VOWEL SIGN AI
        [0x01032, 0x01032,],
        // 1036..1037    ; Mn #   [2] MYANMAR SIGN ANUSVARA..MYANMAR SIGN DOT BELOW
        [0x01036, 0x01037,],
        // 1039          ; Mn #       MYANMAR SIGN VIRAMA
        [0x01039, 0x01039,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 135F          ; Mn #       ETHIOPIC COMBINING GEMINATION MARK
        [0x0135f, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1DC0..1DCA    ; Mn #  [11] COMBINING DOTTED GRAVE ACCENT..COMBINING LATIN SMALL LETTER R BELOW
        [0x01dc0, 0x01dca,],
        // 1DFE..1DFF    ; Mn #   [2] COMBINING LEFT ARROWHEAD ABOVE..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfe, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20EF    ; Mn #  [11] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING RIGHT ARROW BELOW
        [0x020d0, 0x020ef,],
        // 302A..302F    ; Mn #   [6] IDEOGRAPHIC LEVEL TONE MARK..HANGUL DOUBLE DOT TONE MARK
        [0x0302a, 0x0302f,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE23    ; Mn #   [4] COMBINING LIGATURE LEFT HALF..COMBINING DOUBLE TILDE RIGHT HALF
        [0x0fe20, 0x0fe23,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '5.1.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065E    ; Mn #  [20] ARABIC FATHATAN..ARABIC FATHA WITH TWO DOTS
        [0x0064b, 0x0065e,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DE          ; Me #       ARABIC START OF RUB EL HIZB
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006de, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0901..0902    ; Mn #   [2] DEVANAGARI SIGN CANDRABINDU..DEVANAGARI SIGN ANUSVARA
        [0x00901, 0x00902,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0954    ; Mn #   [4] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI ACUTE ACCENT
        [0x00951, 0x00954,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F90..0F97    ; Mn #   [8] TIBETAN SUBJOINED LETTER KA..TIBETAN SUBJOINED LETTER JA
        [0x00f90, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 135F          ; Mn #       ETHIOPIC COMBINING GEMINATION MARK
        [0x0135f, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1DC0..1DE6    ; Mn #  [39] COMBINING DOTTED GRAVE ACCENT..COMBINING LATIN SMALL LETTER Z
        [0x01dc0, 0x01de6,],
        // 1DFE..1DFF    ; Mn #   [2] COMBINING LEFT ARROWHEAD ABOVE..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfe, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302F    ; Mn #   [6] IDEOGRAPHIC LEVEL TONE MARK..HANGUL DOUBLE DOT TONE MARK
        [0x0302a, 0x0302f,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A67C..A67D    ; Mn #   [2] COMBINING CYRILLIC KAVYKA..COMBINING CYRILLIC PAYEROK
        [0x0a67c, 0x0a67d,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4          ; Mn #       SAURASHTRA SIGN VIRAMA
        [0x0a8c4, 0x0a8c4,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE26    ; Mn #   [7] COMBINING LIGATURE LEFT HALF..COMBINING CONJOINING MACRON
        [0x0fe20, 0x0fe26,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '5.2.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065E    ; Mn #  [20] ARABIC FATHATAN..ARABIC FATHA WITH TWO DOTS
        [0x0064b, 0x0065e,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DE          ; Me #       ARABIC START OF RUB EL HIZB
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006de, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0900..0902    ; Mn #   [3] DEVANAGARI SIGN INVERTED CANDRABINDU..DEVANAGARI SIGN ANUSVARA
        [0x00900, 0x00902,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0955    ; Mn #   [5] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN CANDRA LONG E
        [0x00951, 0x00955,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F90..0F97    ; Mn #   [8] TIBETAN SUBJOINED LETTER KA..TIBETAN SUBJOINED LETTER JA
        [0x00f90, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135F          ; Mn #       ETHIOPIC COMBINING GEMINATION MARK
        [0x0135f, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1DC0..1DE6    ; Mn #  [39] COMBINING DOTTED GRAVE ACCENT..COMBINING LATIN SMALL LETTER Z
        [0x01dc0, 0x01de6,],
        // 1DFD..1DFF    ; Mn #   [3] COMBINING ALMOST EQUAL TO BELOW..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfd, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302F    ; Mn #   [6] IDEOGRAPHIC LEVEL TONE MARK..HANGUL DOUBLE DOT TONE MARK
        [0x0302a, 0x0302f,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A67C..A67D    ; Mn #   [2] COMBINING CYRILLIC KAVYKA..COMBINING CYRILLIC PAYEROK
        [0x0a67c, 0x0a67d,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4          ; Mn #       SAURASHTRA SIGN VIRAMA
        [0x0a8c4, 0x0a8c4,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC          ; Mn #       JAVANESE VOWEL SIGN PEPET
        [0x0a9bc, 0x0a9bc,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE26    ; Mn #   [7] COMBINING LIGATURE LEFT HALF..COMBINING CONJOINING MACRON
        [0x0fe20, 0x0fe26,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 11080..11081  ; Mn #   [2] KAITHI SIGN CANDRABINDU..KAITHI SIGN ANUSVARA
        [0x11080, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '6.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 0900..0902    ; Mn #   [3] DEVANAGARI SIGN INVERTED CANDRABINDU..DEVANAGARI SIGN ANUSVARA
        [0x00900, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1DC0..1DE6    ; Mn #  [39] COMBINING DOTTED GRAVE ACCENT..COMBINING LATIN SMALL LETTER Z
        [0x01dc0, 0x01de6,],
        // 1DFC..1DFF    ; Mn #   [4] COMBINING DOUBLE INVERTED BREVE BELOW..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfc, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302F    ; Mn #   [6] IDEOGRAPHIC LEVEL TONE MARK..HANGUL DOUBLE DOT TONE MARK
        [0x0302a, 0x0302f,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A67C..A67D    ; Mn #   [2] COMBINING CYRILLIC KAVYKA..COMBINING CYRILLIC PAYEROK
        [0x0a67c, 0x0a67d,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4          ; Mn #       SAURASHTRA SIGN VIRAMA
        [0x0a8c4, 0x0a8c4,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC          ; Mn #       JAVANESE VOWEL SIGN PEPET
        [0x0a9bc, 0x0a9bc,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE26    ; Mn #   [7] COMBINING LIGATURE LEFT HALF..COMBINING CONJOINING MACRON
        [0x0fe20, 0x0fe26,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 11080..11081  ; Mn #   [2] KAITHI SIGN CANDRABINDU..KAITHI SIGN ANUSVARA
        [0x11080, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '6.1.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08E4..08FE    ; Mn #  [27] ARABIC CURLY FATHA..ARABIC DAMMA WITH DOT
        [0x008e4, 0x008fe,],
        // 0900..0902    ; Mn #   [3] DEVANAGARI SIGN INVERTED CANDRABINDU..DEVANAGARI SIGN ANUSVARA
        [0x00900, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB          ; Mn #       SUNDANESE SIGN VIRAMA
        [0x01bab, 0x01bab,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1DC0..1DE6    ; Mn #  [39] COMBINING DOTTED GRAVE ACCENT..COMBINING LATIN SMALL LETTER Z
        [0x01dc0, 0x01de6,],
        // 1DFC..1DFF    ; Mn #   [4] COMBINING DOUBLE INVERTED BREVE BELOW..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfc, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69F          ; Mn #       COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69f, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4          ; Mn #       SAURASHTRA SIGN VIRAMA
        [0x0a8c4, 0x0a8c4,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC          ; Mn #       JAVANESE VOWEL SIGN PEPET
        [0x0a9bc, 0x0a9bc,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE26    ; Mn #   [7] COMBINING LIGATURE LEFT HALF..COMBINING CONJOINING MACRON
        [0x0fe20, 0x0fe26,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 11080..11081  ; Mn #   [2] KAITHI SIGN CANDRABINDU..KAITHI SIGN ANUSVARA
        [0x11080, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '6.2.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08E4..08FE    ; Mn #  [27] ARABIC CURLY FATHA..ARABIC DAMMA WITH DOT
        [0x008e4, 0x008fe,],
        // 0900..0902    ; Mn #   [3] DEVANAGARI SIGN INVERTED CANDRABINDU..DEVANAGARI SIGN ANUSVARA
        [0x00900, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB          ; Mn #       SUNDANESE SIGN VIRAMA
        [0x01bab, 0x01bab,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1DC0..1DE6    ; Mn #  [39] COMBINING DOTTED GRAVE ACCENT..COMBINING LATIN SMALL LETTER Z
        [0x01dc0, 0x01de6,],
        // 1DFC..1DFF    ; Mn #   [4] COMBINING DOUBLE INVERTED BREVE BELOW..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfc, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69F          ; Mn #       COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69f, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4          ; Mn #       SAURASHTRA SIGN VIRAMA
        [0x0a8c4, 0x0a8c4,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC          ; Mn #       JAVANESE VOWEL SIGN PEPET
        [0x0a9bc, 0x0a9bc,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE26    ; Mn #   [7] COMBINING LIGATURE LEFT HALF..COMBINING CONJOINING MACRON
        [0x0fe20, 0x0fe26,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 11080..11081  ; Mn #   [2] KAITHI SIGN CANDRABINDU..KAITHI SIGN ANUSVARA
        [0x11080, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '6.3.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08E4..08FE    ; Mn #  [27] ARABIC CURLY FATHA..ARABIC DAMMA WITH DOT
        [0x008e4, 0x008fe,],
        // 0900..0902    ; Mn #   [3] DEVANAGARI SIGN INVERTED CANDRABINDU..DEVANAGARI SIGN ANUSVARA
        [0x00900, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB          ; Mn #       SUNDANESE SIGN VIRAMA
        [0x01bab, 0x01bab,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1DC0..1DE6    ; Mn #  [39] COMBINING DOTTED GRAVE ACCENT..COMBINING LATIN SMALL LETTER Z
        [0x01dc0, 0x01de6,],
        // 1DFC..1DFF    ; Mn #   [4] COMBINING DOUBLE INVERTED BREVE BELOW..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfc, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69F          ; Mn #       COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69f, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4          ; Mn #       SAURASHTRA SIGN VIRAMA
        [0x0a8c4, 0x0a8c4,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC          ; Mn #       JAVANESE VOWEL SIGN PEPET
        [0x0a9bc, 0x0a9bc,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE26    ; Mn #   [7] COMBINING LIGATURE LEFT HALF..COMBINING CONJOINING MACRON
        [0x0fe20, 0x0fe26,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 11080..11081  ; Mn #   [2] KAITHI SIGN CANDRABINDU..KAITHI SIGN ANUSVARA
        [0x11080, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '7.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08E4..0902    ; Mn #  [31] ARABIC CURLY FATHA..DEVANAGARI SIGN ANUSVARA
        [0x008e4, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C00          ; Mn #       TELUGU SIGN COMBINING CANDRABINDU ABOVE
        [0x00c00, 0x00c00,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0C81          ; Mn #       KANNADA SIGN CANDRABINDU
        [0x00c81, 0x00c81,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D01          ; Mn #       MALAYALAM SIGN CANDRABINDU
        [0x00d01, 0x00d01,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1AB0..1ABD    ; Mn #  [14] COMBINING DOUBLED CIRCUMFLEX ACCENT..COMBINING PARENTHESES BELOW
        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
        [0x01ab0, 0x01abe,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB..1BAD    ; Mn #   [3] SUNDANESE SIGN VIRAMA..SUNDANESE CONSONANT SIGN PASANGAN WA
        [0x01bab, 0x01bad,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1CF8..1CF9    ; Mn #   [2] VEDIC TONE RING ABOVE..VEDIC TONE DOUBLE RING ABOVE
        [0x01cf8, 0x01cf9,],
        // 1DC0..1DF5    ; Mn #  [54] COMBINING DOTTED GRAVE ACCENT..COMBINING UP TACK ABOVE
        [0x01dc0, 0x01df5,],
        // 1DFC..1DFF    ; Mn #   [4] COMBINING DOUBLE INVERTED BREVE BELOW..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfc, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69F          ; Mn #       COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69f, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4          ; Mn #       SAURASHTRA SIGN VIRAMA
        [0x0a8c4, 0x0a8c4,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC          ; Mn #       JAVANESE VOWEL SIGN PEPET
        [0x0a9bc, 0x0a9bc,],
        // A9E5          ; Mn #       MYANMAR SIGN SHAN SAW
        [0x0a9e5, 0x0a9e5,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AA7C          ; Mn #       MYANMAR SIGN TAI LAING TONE-2
        [0x0aa7c, 0x0aa7c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE2D    ; Mn #  [14] COMBINING LIGATURE LEFT HALF..COMBINING CONJOINING MACRON BELOW
        [0x0fe20, 0x0fe2d,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 102E0         ; Mn #       COPTIC EPACT THOUSANDS MARK
        [0x102e0, 0x102e0,],
        // 10376..1037A  ; Mn #   [5] COMBINING OLD PERMIC LETTER AN..COMBINING OLD PERMIC LETTER SII
        [0x10376, 0x1037a,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 10AE5..10AE6  ; Mn #   [2] MANICHAEAN ABBREVIATION MARK ABOVE..MANICHAEAN ABBREVIATION MARK BELOW
        [0x10ae5, 0x10ae6,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 1107F..11081  ; Mn #   [3] BRAHMI NUMBER JOINER..KAITHI SIGN ANUSVARA
        [0x1107f, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11173         ; Mn #       MAHAJANI SIGN NUKTA
        [0x11173, 0x11173,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 1122F..11231  ; Mn #   [3] KHOJKI VOWEL SIGN U..KHOJKI VOWEL SIGN AI
        [0x1122f, 0x11231,],
        // 11234         ; Mn #       KHOJKI SIGN ANUSVARA
        [0x11234, 0x11234,],
        // 11236..11237  ; Mn #   [2] KHOJKI SIGN NUKTA..KHOJKI SIGN SHADDA
        [0x11236, 0x11237,],
        // 112DF         ; Mn #       KHUDAWADI SIGN ANUSVARA
        [0x112df, 0x112df,],
        // 112E3..112EA  ; Mn #   [8] KHUDAWADI VOWEL SIGN U..KHUDAWADI SIGN VIRAMA
        [0x112e3, 0x112ea,],
        // 11301         ; Mn #       GRANTHA SIGN CANDRABINDU
        [0x11301, 0x11301,],
        // 1133C         ; Mn #       GRANTHA SIGN NUKTA
        [0x1133c, 0x1133c,],
        // 11340         ; Mn #       GRANTHA VOWEL SIGN II
        [0x11340, 0x11340,],
        // 11366..1136C  ; Mn #   [7] COMBINING GRANTHA DIGIT ZERO..COMBINING GRANTHA DIGIT SIX
        [0x11366, 0x1136c,],
        // 11370..11374  ; Mn #   [5] COMBINING GRANTHA LETTER A..COMBINING GRANTHA LETTER PA
        [0x11370, 0x11374,],
        // 114B3..114B8  ; Mn #   [6] TIRHUTA VOWEL SIGN U..TIRHUTA VOWEL SIGN VOCALIC LL
        [0x114b3, 0x114b8,],
        // 114BA         ; Mn #       TIRHUTA VOWEL SIGN SHORT E
        [0x114ba, 0x114ba,],
        // 114BF..114C0  ; Mn #   [2] TIRHUTA SIGN CANDRABINDU..TIRHUTA SIGN ANUSVARA
        [0x114bf, 0x114c0,],
        // 114C2..114C3  ; Mn #   [2] TIRHUTA SIGN VIRAMA..TIRHUTA SIGN NUKTA
        [0x114c2, 0x114c3,],
        // 115B2..115B5  ; Mn #   [4] SIDDHAM VOWEL SIGN U..SIDDHAM VOWEL SIGN VOCALIC RR
        [0x115b2, 0x115b5,],
        // 115BC..115BD  ; Mn #   [2] SIDDHAM SIGN CANDRABINDU..SIDDHAM SIGN ANUSVARA
        [0x115bc, 0x115bd,],
        // 115BF..115C0  ; Mn #   [2] SIDDHAM SIGN VIRAMA..SIDDHAM SIGN NUKTA
        [0x115bf, 0x115c0,],
        // 11633..1163A  ; Mn #   [8] MODI VOWEL SIGN U..MODI VOWEL SIGN AI
        [0x11633, 0x1163a,],
        // 1163D         ; Mn #       MODI SIGN ANUSVARA
        [0x1163d, 0x1163d,],
        // 1163F..11640  ; Mn #   [2] MODI SIGN VIRAMA..MODI SIGN ARDHACANDRA
        [0x1163f, 0x11640,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 16AF0..16AF4  ; Mn #   [5] BASSA VAH COMBINING HIGH TONE..BASSA VAH COMBINING HIGH-LOW TONE
        [0x16af0, 0x16af4,],
        // 16B30..16B36  ; Mn #   [7] PAHAWH HMONG MARK CIM TUB..PAHAWH HMONG MARK CIM TAUM
        [0x16b30, 0x16b36,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 1BC9D..1BC9E  ; Mn #   [2] DUPLOYAN THICK LETTER SELECTOR..DUPLOYAN DOUBLE MARK
        [0x1bc9d, 0x1bc9e,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // 1E8D0..1E8D6  ; Mn #   [7] MENDE KIKAKUI COMBINING NUMBER TEENS..MENDE KIKAKUI COMBINING NUMBER MILLIONS
        [0x1e8d0, 0x1e8d6,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '8.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08E3..0902    ; Mn #  [32] ARABIC TURNED DAMMA BELOW..DEVANAGARI SIGN ANUSVARA
        [0x008e3, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C00          ; Mn #       TELUGU SIGN COMBINING CANDRABINDU ABOVE
        [0x00c00, 0x00c00,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0C81          ; Mn #       KANNADA SIGN CANDRABINDU
        [0x00c81, 0x00c81,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D01          ; Mn #       MALAYALAM SIGN CANDRABINDU
        [0x00d01, 0x00d01,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1AB0..1ABD    ; Mn #  [14] COMBINING DOUBLED CIRCUMFLEX ACCENT..COMBINING PARENTHESES BELOW
        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
        [0x01ab0, 0x01abe,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB..1BAD    ; Mn #   [3] SUNDANESE SIGN VIRAMA..SUNDANESE CONSONANT SIGN PASANGAN WA
        [0x01bab, 0x01bad,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1CF8..1CF9    ; Mn #   [2] VEDIC TONE RING ABOVE..VEDIC TONE DOUBLE RING ABOVE
        [0x01cf8, 0x01cf9,],
        // 1DC0..1DF5    ; Mn #  [54] COMBINING DOTTED GRAVE ACCENT..COMBINING UP TACK ABOVE
        [0x01dc0, 0x01df5,],
        // 1DFC..1DFF    ; Mn #   [4] COMBINING DOUBLE INVERTED BREVE BELOW..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfc, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69E..A69F    ; Mn #   [2] COMBINING CYRILLIC LETTER EF..COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69e, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4          ; Mn #       SAURASHTRA SIGN VIRAMA
        [0x0a8c4, 0x0a8c4,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC          ; Mn #       JAVANESE VOWEL SIGN PEPET
        [0x0a9bc, 0x0a9bc,],
        // A9E5          ; Mn #       MYANMAR SIGN SHAN SAW
        [0x0a9e5, 0x0a9e5,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AA7C          ; Mn #       MYANMAR SIGN TAI LAING TONE-2
        [0x0aa7c, 0x0aa7c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE2F    ; Mn #  [16] COMBINING LIGATURE LEFT HALF..COMBINING CYRILLIC TITLO RIGHT HALF
        [0x0fe20, 0x0fe2f,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 102E0         ; Mn #       COPTIC EPACT THOUSANDS MARK
        [0x102e0, 0x102e0,],
        // 10376..1037A  ; Mn #   [5] COMBINING OLD PERMIC LETTER AN..COMBINING OLD PERMIC LETTER SII
        [0x10376, 0x1037a,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 10AE5..10AE6  ; Mn #   [2] MANICHAEAN ABBREVIATION MARK ABOVE..MANICHAEAN ABBREVIATION MARK BELOW
        [0x10ae5, 0x10ae6,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 1107F..11081  ; Mn #   [3] BRAHMI NUMBER JOINER..KAITHI SIGN ANUSVARA
        [0x1107f, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11173         ; Mn #       MAHAJANI SIGN NUKTA
        [0x11173, 0x11173,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 111CA..111CC  ; Mn #   [3] SHARADA SIGN NUKTA..SHARADA EXTRA SHORT VOWEL MARK
        [0x111ca, 0x111cc,],
        // 1122F..11231  ; Mn #   [3] KHOJKI VOWEL SIGN U..KHOJKI VOWEL SIGN AI
        [0x1122f, 0x11231,],
        // 11234         ; Mn #       KHOJKI SIGN ANUSVARA
        [0x11234, 0x11234,],
        // 11236..11237  ; Mn #   [2] KHOJKI SIGN NUKTA..KHOJKI SIGN SHADDA
        [0x11236, 0x11237,],
        // 112DF         ; Mn #       KHUDAWADI SIGN ANUSVARA
        [0x112df, 0x112df,],
        // 112E3..112EA  ; Mn #   [8] KHUDAWADI VOWEL SIGN U..KHUDAWADI SIGN VIRAMA
        [0x112e3, 0x112ea,],
        // 11300..11301  ; Mn #   [2] GRANTHA SIGN COMBINING ANUSVARA ABOVE..GRANTHA SIGN CANDRABINDU
        [0x11300, 0x11301,],
        // 1133C         ; Mn #       GRANTHA SIGN NUKTA
        [0x1133c, 0x1133c,],
        // 11340         ; Mn #       GRANTHA VOWEL SIGN II
        [0x11340, 0x11340,],
        // 11366..1136C  ; Mn #   [7] COMBINING GRANTHA DIGIT ZERO..COMBINING GRANTHA DIGIT SIX
        [0x11366, 0x1136c,],
        // 11370..11374  ; Mn #   [5] COMBINING GRANTHA LETTER A..COMBINING GRANTHA LETTER PA
        [0x11370, 0x11374,],
        // 114B3..114B8  ; Mn #   [6] TIRHUTA VOWEL SIGN U..TIRHUTA VOWEL SIGN VOCALIC LL
        [0x114b3, 0x114b8,],
        // 114BA         ; Mn #       TIRHUTA VOWEL SIGN SHORT E
        [0x114ba, 0x114ba,],
        // 114BF..114C0  ; Mn #   [2] TIRHUTA SIGN CANDRABINDU..TIRHUTA SIGN ANUSVARA
        [0x114bf, 0x114c0,],
        // 114C2..114C3  ; Mn #   [2] TIRHUTA SIGN VIRAMA..TIRHUTA SIGN NUKTA
        [0x114c2, 0x114c3,],
        // 115B2..115B5  ; Mn #   [4] SIDDHAM VOWEL SIGN U..SIDDHAM VOWEL SIGN VOCALIC RR
        [0x115b2, 0x115b5,],
        // 115BC..115BD  ; Mn #   [2] SIDDHAM SIGN CANDRABINDU..SIDDHAM SIGN ANUSVARA
        [0x115bc, 0x115bd,],
        // 115BF..115C0  ; Mn #   [2] SIDDHAM SIGN VIRAMA..SIDDHAM SIGN NUKTA
        [0x115bf, 0x115c0,],
        // 115DC..115DD  ; Mn #   [2] SIDDHAM VOWEL SIGN ALTERNATE U..SIDDHAM VOWEL SIGN ALTERNATE UU
        [0x115dc, 0x115dd,],
        // 11633..1163A  ; Mn #   [8] MODI VOWEL SIGN U..MODI VOWEL SIGN AI
        [0x11633, 0x1163a,],
        // 1163D         ; Mn #       MODI SIGN ANUSVARA
        [0x1163d, 0x1163d,],
        // 1163F..11640  ; Mn #   [2] MODI SIGN VIRAMA..MODI SIGN ARDHACANDRA
        [0x1163f, 0x11640,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 1171D..1171F  ; Mn #   [3] AHOM CONSONANT SIGN MEDIAL LA..AHOM CONSONANT SIGN MEDIAL LIGATING RA
        [0x1171d, 0x1171f,],
        // 11722..11725  ; Mn #   [4] AHOM VOWEL SIGN I..AHOM VOWEL SIGN UU
        [0x11722, 0x11725,],
        // 11727..1172B  ; Mn #   [5] AHOM VOWEL SIGN AW..AHOM SIGN KILLER
        [0x11727, 0x1172b,],
        // 16AF0..16AF4  ; Mn #   [5] BASSA VAH COMBINING HIGH TONE..BASSA VAH COMBINING HIGH-LOW TONE
        [0x16af0, 0x16af4,],
        // 16B30..16B36  ; Mn #   [7] PAHAWH HMONG MARK CIM TUB..PAHAWH HMONG MARK CIM TAUM
        [0x16b30, 0x16b36,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 1BC9D..1BC9E  ; Mn #   [2] DUPLOYAN THICK LETTER SELECTOR..DUPLOYAN DOUBLE MARK
        [0x1bc9d, 0x1bc9e,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // 1DA00..1DA36  ; Mn #  [55] SIGNWRITING HEAD RIM..SIGNWRITING AIR SUCKING IN
        [0x1da00, 0x1da36,],
        // 1DA3B..1DA6C  ; Mn #  [50] SIGNWRITING MOUTH CLOSED NEUTRAL..SIGNWRITING EXCITEMENT
        [0x1da3b, 0x1da6c,],
        // 1DA75         ; Mn #       SIGNWRITING UPPER BODY TILTING FROM HIP JOINTS
        [0x1da75, 0x1da75,],
        // 1DA84         ; Mn #       SIGNWRITING LOCATION HEAD NECK
        [0x1da84, 0x1da84,],
        // 1DA9B..1DA9F  ; Mn #   [5] SIGNWRITING FILL MODIFIER-2..SIGNWRITING FILL MODIFIER-6
        [0x1da9b, 0x1da9f,],
        // 1DAA1..1DAAF  ; Mn #  [15] SIGNWRITING ROTATION MODIFIER-2..SIGNWRITING ROTATION MODIFIER-16
        [0x1daa1, 0x1daaf,],
        // 1E8D0..1E8D6  ; Mn #   [7] MENDE KIKAKUI COMBINING NUMBER TEENS..MENDE KIKAKUI COMBINING NUMBER MILLIONS
        [0x1e8d0, 0x1e8d6,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '9.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08D4..08E1    ; Mn #  [14] ARABIC SMALL HIGH WORD AR-RUB..ARABIC SMALL HIGH SIGN SAFHA
        [0x008d4, 0x008e1,],
        // 08E3..0902    ; Mn #  [32] ARABIC TURNED DAMMA BELOW..DEVANAGARI SIGN ANUSVARA
        [0x008e3, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C00          ; Mn #       TELUGU SIGN COMBINING CANDRABINDU ABOVE
        [0x00c00, 0x00c00,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0C81          ; Mn #       KANNADA SIGN CANDRABINDU
        [0x00c81, 0x00c81,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D01          ; Mn #       MALAYALAM SIGN CANDRABINDU
        [0x00d01, 0x00d01,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 1885..1886    ; Mn #   [2] MONGOLIAN LETTER ALI GALI BALUDA..MONGOLIAN LETTER ALI GALI THREE BALUDA
        [0x01885, 0x01886,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1AB0..1ABD    ; Mn #  [14] COMBINING DOUBLED CIRCUMFLEX ACCENT..COMBINING PARENTHESES BELOW
        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
        [0x01ab0, 0x01abe,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB..1BAD    ; Mn #   [3] SUNDANESE SIGN VIRAMA..SUNDANESE CONSONANT SIGN PASANGAN WA
        [0x01bab, 0x01bad,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1CF8..1CF9    ; Mn #   [2] VEDIC TONE RING ABOVE..VEDIC TONE DOUBLE RING ABOVE
        [0x01cf8, 0x01cf9,],
        // 1DC0..1DF5    ; Mn #  [54] COMBINING DOTTED GRAVE ACCENT..COMBINING UP TACK ABOVE
        [0x01dc0, 0x01df5,],
        // 1DFB..1DFF    ; Mn #   [5] COMBINING DELETION MARK..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfb, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69E..A69F    ; Mn #   [2] COMBINING CYRILLIC LETTER EF..COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69e, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4..A8C5    ; Mn #   [2] SAURASHTRA SIGN VIRAMA..SAURASHTRA SIGN CANDRABINDU
        [0x0a8c4, 0x0a8c5,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC          ; Mn #       JAVANESE VOWEL SIGN PEPET
        [0x0a9bc, 0x0a9bc,],
        // A9E5          ; Mn #       MYANMAR SIGN SHAN SAW
        [0x0a9e5, 0x0a9e5,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AA7C          ; Mn #       MYANMAR SIGN TAI LAING TONE-2
        [0x0aa7c, 0x0aa7c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE2F    ; Mn #  [16] COMBINING LIGATURE LEFT HALF..COMBINING CYRILLIC TITLO RIGHT HALF
        [0x0fe20, 0x0fe2f,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 102E0         ; Mn #       COPTIC EPACT THOUSANDS MARK
        [0x102e0, 0x102e0,],
        // 10376..1037A  ; Mn #   [5] COMBINING OLD PERMIC LETTER AN..COMBINING OLD PERMIC LETTER SII
        [0x10376, 0x1037a,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 10AE5..10AE6  ; Mn #   [2] MANICHAEAN ABBREVIATION MARK ABOVE..MANICHAEAN ABBREVIATION MARK BELOW
        [0x10ae5, 0x10ae6,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 1107F..11081  ; Mn #   [3] BRAHMI NUMBER JOINER..KAITHI SIGN ANUSVARA
        [0x1107f, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11173         ; Mn #       MAHAJANI SIGN NUKTA
        [0x11173, 0x11173,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 111CA..111CC  ; Mn #   [3] SHARADA SIGN NUKTA..SHARADA EXTRA SHORT VOWEL MARK
        [0x111ca, 0x111cc,],
        // 1122F..11231  ; Mn #   [3] KHOJKI VOWEL SIGN U..KHOJKI VOWEL SIGN AI
        [0x1122f, 0x11231,],
        // 11234         ; Mn #       KHOJKI SIGN ANUSVARA
        [0x11234, 0x11234,],
        // 11236..11237  ; Mn #   [2] KHOJKI SIGN NUKTA..KHOJKI SIGN SHADDA
        [0x11236, 0x11237,],
        // 1123E         ; Mn #       KHOJKI SIGN SUKUN
        [0x1123e, 0x1123e,],
        // 112DF         ; Mn #       KHUDAWADI SIGN ANUSVARA
        [0x112df, 0x112df,],
        // 112E3..112EA  ; Mn #   [8] KHUDAWADI VOWEL SIGN U..KHUDAWADI SIGN VIRAMA
        [0x112e3, 0x112ea,],
        // 11300..11301  ; Mn #   [2] GRANTHA SIGN COMBINING ANUSVARA ABOVE..GRANTHA SIGN CANDRABINDU
        [0x11300, 0x11301,],
        // 1133C         ; Mn #       GRANTHA SIGN NUKTA
        [0x1133c, 0x1133c,],
        // 11340         ; Mn #       GRANTHA VOWEL SIGN II
        [0x11340, 0x11340,],
        // 11366..1136C  ; Mn #   [7] COMBINING GRANTHA DIGIT ZERO..COMBINING GRANTHA DIGIT SIX
        [0x11366, 0x1136c,],
        // 11370..11374  ; Mn #   [5] COMBINING GRANTHA LETTER A..COMBINING GRANTHA LETTER PA
        [0x11370, 0x11374,],
        // 11438..1143F  ; Mn #   [8] NEWA VOWEL SIGN U..NEWA VOWEL SIGN AI
        [0x11438, 0x1143f,],
        // 11442..11444  ; Mn #   [3] NEWA SIGN VIRAMA..NEWA SIGN ANUSVARA
        [0x11442, 0x11444,],
        // 11446         ; Mn #       NEWA SIGN NUKTA
        [0x11446, 0x11446,],
        // 114B3..114B8  ; Mn #   [6] TIRHUTA VOWEL SIGN U..TIRHUTA VOWEL SIGN VOCALIC LL
        [0x114b3, 0x114b8,],
        // 114BA         ; Mn #       TIRHUTA VOWEL SIGN SHORT E
        [0x114ba, 0x114ba,],
        // 114BF..114C0  ; Mn #   [2] TIRHUTA SIGN CANDRABINDU..TIRHUTA SIGN ANUSVARA
        [0x114bf, 0x114c0,],
        // 114C2..114C3  ; Mn #   [2] TIRHUTA SIGN VIRAMA..TIRHUTA SIGN NUKTA
        [0x114c2, 0x114c3,],
        // 115B2..115B5  ; Mn #   [4] SIDDHAM VOWEL SIGN U..SIDDHAM VOWEL SIGN VOCALIC RR
        [0x115b2, 0x115b5,],
        // 115BC..115BD  ; Mn #   [2] SIDDHAM SIGN CANDRABINDU..SIDDHAM SIGN ANUSVARA
        [0x115bc, 0x115bd,],
        // 115BF..115C0  ; Mn #   [2] SIDDHAM SIGN VIRAMA..SIDDHAM SIGN NUKTA
        [0x115bf, 0x115c0,],
        // 115DC..115DD  ; Mn #   [2] SIDDHAM VOWEL SIGN ALTERNATE U..SIDDHAM VOWEL SIGN ALTERNATE UU
        [0x115dc, 0x115dd,],
        // 11633..1163A  ; Mn #   [8] MODI VOWEL SIGN U..MODI VOWEL SIGN AI
        [0x11633, 0x1163a,],
        // 1163D         ; Mn #       MODI SIGN ANUSVARA
        [0x1163d, 0x1163d,],
        // 1163F..11640  ; Mn #   [2] MODI SIGN VIRAMA..MODI SIGN ARDHACANDRA
        [0x1163f, 0x11640,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 1171D..1171F  ; Mn #   [3] AHOM CONSONANT SIGN MEDIAL LA..AHOM CONSONANT SIGN MEDIAL LIGATING RA
        [0x1171d, 0x1171f,],
        // 11722..11725  ; Mn #   [4] AHOM VOWEL SIGN I..AHOM VOWEL SIGN UU
        [0x11722, 0x11725,],
        // 11727..1172B  ; Mn #   [5] AHOM VOWEL SIGN AW..AHOM SIGN KILLER
        [0x11727, 0x1172b,],
        // 11C30..11C36  ; Mn #   [7] BHAIKSUKI VOWEL SIGN I..BHAIKSUKI VOWEL SIGN VOCALIC L
        [0x11c30, 0x11c36,],
        // 11C38..11C3D  ; Mn #   [6] BHAIKSUKI VOWEL SIGN E..BHAIKSUKI SIGN ANUSVARA
        [0x11c38, 0x11c3d,],
        // 11C3F         ; Mn #       BHAIKSUKI SIGN VIRAMA
        [0x11c3f, 0x11c3f,],
        // 11C92..11CA7  ; Mn #  [22] MARCHEN SUBJOINED LETTER KA..MARCHEN SUBJOINED LETTER ZA
        [0x11c92, 0x11ca7,],
        // 11CAA..11CB0  ; Mn #   [7] MARCHEN SUBJOINED LETTER RA..MARCHEN VOWEL SIGN AA
        [0x11caa, 0x11cb0,],
        // 11CB2..11CB3  ; Mn #   [2] MARCHEN VOWEL SIGN U..MARCHEN VOWEL SIGN E
        [0x11cb2, 0x11cb3,],
        // 11CB5..11CB6  ; Mn #   [2] MARCHEN SIGN ANUSVARA..MARCHEN SIGN CANDRABINDU
        [0x11cb5, 0x11cb6,],
        // 16AF0..16AF4  ; Mn #   [5] BASSA VAH COMBINING HIGH TONE..BASSA VAH COMBINING HIGH-LOW TONE
        [0x16af0, 0x16af4,],
        // 16B30..16B36  ; Mn #   [7] PAHAWH HMONG MARK CIM TUB..PAHAWH HMONG MARK CIM TAUM
        [0x16b30, 0x16b36,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 1BC9D..1BC9E  ; Mn #   [2] DUPLOYAN THICK LETTER SELECTOR..DUPLOYAN DOUBLE MARK
        [0x1bc9d, 0x1bc9e,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // 1DA00..1DA36  ; Mn #  [55] SIGNWRITING HEAD RIM..SIGNWRITING AIR SUCKING IN
        [0x1da00, 0x1da36,],
        // 1DA3B..1DA6C  ; Mn #  [50] SIGNWRITING MOUTH CLOSED NEUTRAL..SIGNWRITING EXCITEMENT
        [0x1da3b, 0x1da6c,],
        // 1DA75         ; Mn #       SIGNWRITING UPPER BODY TILTING FROM HIP JOINTS
        [0x1da75, 0x1da75,],
        // 1DA84         ; Mn #       SIGNWRITING LOCATION HEAD NECK
        [0x1da84, 0x1da84,],
        // 1DA9B..1DA9F  ; Mn #   [5] SIGNWRITING FILL MODIFIER-2..SIGNWRITING FILL MODIFIER-6
        [0x1da9b, 0x1da9f,],
        // 1DAA1..1DAAF  ; Mn #  [15] SIGNWRITING ROTATION MODIFIER-2..SIGNWRITING ROTATION MODIFIER-16
        [0x1daa1, 0x1daaf,],
        // 1E000..1E006  ; Mn #   [7] COMBINING GLAGOLITIC LETTER AZU..COMBINING GLAGOLITIC LETTER ZHIVETE
        [0x1e000, 0x1e006,],
        // 1E008..1E018  ; Mn #  [17] COMBINING GLAGOLITIC LETTER ZEMLJA..COMBINING GLAGOLITIC LETTER HERU
        [0x1e008, 0x1e018,],
        // 1E01B..1E021  ; Mn #   [7] COMBINING GLAGOLITIC LETTER SHTA..COMBINING GLAGOLITIC LETTER YATI
        [0x1e01b, 0x1e021,],
        // 1E023..1E024  ; Mn #   [2] COMBINING GLAGOLITIC LETTER YU..COMBINING GLAGOLITIC LETTER SMALL YUS
        [0x1e023, 0x1e024,],
        // 1E026..1E02A  ; Mn #   [5] COMBINING GLAGOLITIC LETTER YO..COMBINING GLAGOLITIC LETTER FITA
        [0x1e026, 0x1e02a,],
        // 1E8D0..1E8D6  ; Mn #   [7] MENDE KIKAKUI COMBINING NUMBER TEENS..MENDE KIKAKUI COMBINING NUMBER MILLIONS
        [0x1e8d0, 0x1e8d6,],
        // 1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA
        [0x1e944, 0x1e94a,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '10.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08D4..08E1    ; Mn #  [14] ARABIC SMALL HIGH WORD AR-RUB..ARABIC SMALL HIGH SIGN SAFHA
        [0x008d4, 0x008e1,],
        // 08E3..0902    ; Mn #  [32] ARABIC TURNED DAMMA BELOW..DEVANAGARI SIGN ANUSVARA
        [0x008e3, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0AFA..0AFF    ; Mn #   [6] GUJARATI SIGN SUKUN..GUJARATI SIGN TWO-CIRCLE NUKTA ABOVE
        [0x00afa, 0x00aff,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C00          ; Mn #       TELUGU SIGN COMBINING CANDRABINDU ABOVE
        [0x00c00, 0x00c00,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0C81          ; Mn #       KANNADA SIGN CANDRABINDU
        [0x00c81, 0x00c81,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D00..0D01    ; Mn #   [2] MALAYALAM SIGN COMBINING ANUSVARA ABOVE..MALAYALAM SIGN CANDRABINDU
        [0x00d00, 0x00d01,],
        // 0D3B..0D3C    ; Mn #   [2] MALAYALAM SIGN VERTICAL BAR VIRAMA..MALAYALAM SIGN CIRCULAR VIRAMA
        [0x00d3b, 0x00d3c,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 1885..1886    ; Mn #   [2] MONGOLIAN LETTER ALI GALI BALUDA..MONGOLIAN LETTER ALI GALI THREE BALUDA
        [0x01885, 0x01886,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1AB0..1ABD    ; Mn #  [14] COMBINING DOUBLED CIRCUMFLEX ACCENT..COMBINING PARENTHESES BELOW
        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
        [0x01ab0, 0x01abe,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB..1BAD    ; Mn #   [3] SUNDANESE SIGN VIRAMA..SUNDANESE CONSONANT SIGN PASANGAN WA
        [0x01bab, 0x01bad,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1CF8..1CF9    ; Mn #   [2] VEDIC TONE RING ABOVE..VEDIC TONE DOUBLE RING ABOVE
        [0x01cf8, 0x01cf9,],
        // 1DC0..1DF9    ; Mn #  [58] COMBINING DOTTED GRAVE ACCENT..COMBINING WIDE INVERTED BRIDGE BELOW
        [0x01dc0, 0x01df9,],
        // 1DFB..1DFF    ; Mn #   [5] COMBINING DELETION MARK..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfb, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69E..A69F    ; Mn #   [2] COMBINING CYRILLIC LETTER EF..COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69e, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4..A8C5    ; Mn #   [2] SAURASHTRA SIGN VIRAMA..SAURASHTRA SIGN CANDRABINDU
        [0x0a8c4, 0x0a8c5,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC          ; Mn #       JAVANESE VOWEL SIGN PEPET
        [0x0a9bc, 0x0a9bc,],
        // A9E5          ; Mn #       MYANMAR SIGN SHAN SAW
        [0x0a9e5, 0x0a9e5,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AA7C          ; Mn #       MYANMAR SIGN TAI LAING TONE-2
        [0x0aa7c, 0x0aa7c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE2F    ; Mn #  [16] COMBINING LIGATURE LEFT HALF..COMBINING CYRILLIC TITLO RIGHT HALF
        [0x0fe20, 0x0fe2f,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 102E0         ; Mn #       COPTIC EPACT THOUSANDS MARK
        [0x102e0, 0x102e0,],
        // 10376..1037A  ; Mn #   [5] COMBINING OLD PERMIC LETTER AN..COMBINING OLD PERMIC LETTER SII
        [0x10376, 0x1037a,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 10AE5..10AE6  ; Mn #   [2] MANICHAEAN ABBREVIATION MARK ABOVE..MANICHAEAN ABBREVIATION MARK BELOW
        [0x10ae5, 0x10ae6,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 1107F..11081  ; Mn #   [3] BRAHMI NUMBER JOINER..KAITHI SIGN ANUSVARA
        [0x1107f, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11173         ; Mn #       MAHAJANI SIGN NUKTA
        [0x11173, 0x11173,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 111CA..111CC  ; Mn #   [3] SHARADA SIGN NUKTA..SHARADA EXTRA SHORT VOWEL MARK
        [0x111ca, 0x111cc,],
        // 1122F..11231  ; Mn #   [3] KHOJKI VOWEL SIGN U..KHOJKI VOWEL SIGN AI
        [0x1122f, 0x11231,],
        // 11234         ; Mn #       KHOJKI SIGN ANUSVARA
        [0x11234, 0x11234,],
        // 11236..11237  ; Mn #   [2] KHOJKI SIGN NUKTA..KHOJKI SIGN SHADDA
        [0x11236, 0x11237,],
        // 1123E         ; Mn #       KHOJKI SIGN SUKUN
        [0x1123e, 0x1123e,],
        // 112DF         ; Mn #       KHUDAWADI SIGN ANUSVARA
        [0x112df, 0x112df,],
        // 112E3..112EA  ; Mn #   [8] KHUDAWADI VOWEL SIGN U..KHUDAWADI SIGN VIRAMA
        [0x112e3, 0x112ea,],
        // 11300..11301  ; Mn #   [2] GRANTHA SIGN COMBINING ANUSVARA ABOVE..GRANTHA SIGN CANDRABINDU
        [0x11300, 0x11301,],
        // 1133C         ; Mn #       GRANTHA SIGN NUKTA
        [0x1133c, 0x1133c,],
        // 11340         ; Mn #       GRANTHA VOWEL SIGN II
        [0x11340, 0x11340,],
        // 11366..1136C  ; Mn #   [7] COMBINING GRANTHA DIGIT ZERO..COMBINING GRANTHA DIGIT SIX
        [0x11366, 0x1136c,],
        // 11370..11374  ; Mn #   [5] COMBINING GRANTHA LETTER A..COMBINING GRANTHA LETTER PA
        [0x11370, 0x11374,],
        // 11438..1143F  ; Mn #   [8] NEWA VOWEL SIGN U..NEWA VOWEL SIGN AI
        [0x11438, 0x1143f,],
        // 11442..11444  ; Mn #   [3] NEWA SIGN VIRAMA..NEWA SIGN ANUSVARA
        [0x11442, 0x11444,],
        // 11446         ; Mn #       NEWA SIGN NUKTA
        [0x11446, 0x11446,],
        // 114B3..114B8  ; Mn #   [6] TIRHUTA VOWEL SIGN U..TIRHUTA VOWEL SIGN VOCALIC LL
        [0x114b3, 0x114b8,],
        // 114BA         ; Mn #       TIRHUTA VOWEL SIGN SHORT E
        [0x114ba, 0x114ba,],
        // 114BF..114C0  ; Mn #   [2] TIRHUTA SIGN CANDRABINDU..TIRHUTA SIGN ANUSVARA
        [0x114bf, 0x114c0,],
        // 114C2..114C3  ; Mn #   [2] TIRHUTA SIGN VIRAMA..TIRHUTA SIGN NUKTA
        [0x114c2, 0x114c3,],
        // 115B2..115B5  ; Mn #   [4] SIDDHAM VOWEL SIGN U..SIDDHAM VOWEL SIGN VOCALIC RR
        [0x115b2, 0x115b5,],
        // 115BC..115BD  ; Mn #   [2] SIDDHAM SIGN CANDRABINDU..SIDDHAM SIGN ANUSVARA
        [0x115bc, 0x115bd,],
        // 115BF..115C0  ; Mn #   [2] SIDDHAM SIGN VIRAMA..SIDDHAM SIGN NUKTA
        [0x115bf, 0x115c0,],
        // 115DC..115DD  ; Mn #   [2] SIDDHAM VOWEL SIGN ALTERNATE U..SIDDHAM VOWEL SIGN ALTERNATE UU
        [0x115dc, 0x115dd,],
        // 11633..1163A  ; Mn #   [8] MODI VOWEL SIGN U..MODI VOWEL SIGN AI
        [0x11633, 0x1163a,],
        // 1163D         ; Mn #       MODI SIGN ANUSVARA
        [0x1163d, 0x1163d,],
        // 1163F..11640  ; Mn #   [2] MODI SIGN VIRAMA..MODI SIGN ARDHACANDRA
        [0x1163f, 0x11640,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 1171D..1171F  ; Mn #   [3] AHOM CONSONANT SIGN MEDIAL LA..AHOM CONSONANT SIGN MEDIAL LIGATING RA
        [0x1171d, 0x1171f,],
        // 11722..11725  ; Mn #   [4] AHOM VOWEL SIGN I..AHOM VOWEL SIGN UU
        [0x11722, 0x11725,],
        // 11727..1172B  ; Mn #   [5] AHOM VOWEL SIGN AW..AHOM SIGN KILLER
        [0x11727, 0x1172b,],
        // 11A01..11A06  ; Mn #   [6] ZANABAZAR SQUARE VOWEL SIGN I..ZANABAZAR SQUARE VOWEL SIGN O
        [0x11a01, 0x11a06,],
        // 11A09..11A0A  ; Mn #   [2] ZANABAZAR SQUARE VOWEL SIGN REVERSED I..ZANABAZAR SQUARE VOWEL LENGTH MARK
        [0x11a09, 0x11a0a,],
        // 11A33..11A38  ; Mn #   [6] ZANABAZAR SQUARE FINAL CONSONANT MARK..ZANABAZAR SQUARE SIGN ANUSVARA
        [0x11a33, 0x11a38,],
        // 11A3B..11A3E  ; Mn #   [4] ZANABAZAR SQUARE CLUSTER-FINAL LETTER YA..ZANABAZAR SQUARE CLUSTER-FINAL LETTER VA
        [0x11a3b, 0x11a3e,],
        // 11A47         ; Mn #       ZANABAZAR SQUARE SUBJOINER
        [0x11a47, 0x11a47,],
        // 11A51..11A56  ; Mn #   [6] SOYOMBO VOWEL SIGN I..SOYOMBO VOWEL SIGN OE
        [0x11a51, 0x11a56,],
        // 11A59..11A5B  ; Mn #   [3] SOYOMBO VOWEL SIGN VOCALIC R..SOYOMBO VOWEL LENGTH MARK
        [0x11a59, 0x11a5b,],
        // 11A8A..11A96  ; Mn #  [13] SOYOMBO FINAL CONSONANT SIGN G..SOYOMBO SIGN ANUSVARA
        [0x11a8a, 0x11a96,],
        // 11A98..11A99  ; Mn #   [2] SOYOMBO GEMINATION MARK..SOYOMBO SUBJOINER
        [0x11a98, 0x11a99,],
        // 11C30..11C36  ; Mn #   [7] BHAIKSUKI VOWEL SIGN I..BHAIKSUKI VOWEL SIGN VOCALIC L
        [0x11c30, 0x11c36,],
        // 11C38..11C3D  ; Mn #   [6] BHAIKSUKI VOWEL SIGN E..BHAIKSUKI SIGN ANUSVARA
        [0x11c38, 0x11c3d,],
        // 11C3F         ; Mn #       BHAIKSUKI SIGN VIRAMA
        [0x11c3f, 0x11c3f,],
        // 11C92..11CA7  ; Mn #  [22] MARCHEN SUBJOINED LETTER KA..MARCHEN SUBJOINED LETTER ZA
        [0x11c92, 0x11ca7,],
        // 11CAA..11CB0  ; Mn #   [7] MARCHEN SUBJOINED LETTER RA..MARCHEN VOWEL SIGN AA
        [0x11caa, 0x11cb0,],
        // 11CB2..11CB3  ; Mn #   [2] MARCHEN VOWEL SIGN U..MARCHEN VOWEL SIGN E
        [0x11cb2, 0x11cb3,],
        // 11CB5..11CB6  ; Mn #   [2] MARCHEN SIGN ANUSVARA..MARCHEN SIGN CANDRABINDU
        [0x11cb5, 0x11cb6,],
        // 11D31..11D36  ; Mn #   [6] MASARAM GONDI VOWEL SIGN AA..MASARAM GONDI VOWEL SIGN VOCALIC R
        [0x11d31, 0x11d36,],
        // 11D3A         ; Mn #       MASARAM GONDI VOWEL SIGN E
        [0x11d3a, 0x11d3a,],
        // 11D3C..11D3D  ; Mn #   [2] MASARAM GONDI VOWEL SIGN AI..MASARAM GONDI VOWEL SIGN O
        [0x11d3c, 0x11d3d,],
        // 11D3F..11D45  ; Mn #   [7] MASARAM GONDI VOWEL SIGN AU..MASARAM GONDI VIRAMA
        [0x11d3f, 0x11d45,],
        // 11D47         ; Mn #       MASARAM GONDI RA-KARA
        [0x11d47, 0x11d47,],
        // 16AF0..16AF4  ; Mn #   [5] BASSA VAH COMBINING HIGH TONE..BASSA VAH COMBINING HIGH-LOW TONE
        [0x16af0, 0x16af4,],
        // 16B30..16B36  ; Mn #   [7] PAHAWH HMONG MARK CIM TUB..PAHAWH HMONG MARK CIM TAUM
        [0x16b30, 0x16b36,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 1BC9D..1BC9E  ; Mn #   [2] DUPLOYAN THICK LETTER SELECTOR..DUPLOYAN DOUBLE MARK
        [0x1bc9d, 0x1bc9e,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // 1DA00..1DA36  ; Mn #  [55] SIGNWRITING HEAD RIM..SIGNWRITING AIR SUCKING IN
        [0x1da00, 0x1da36,],
        // 1DA3B..1DA6C  ; Mn #  [50] SIGNWRITING MOUTH CLOSED NEUTRAL..SIGNWRITING EXCITEMENT
        [0x1da3b, 0x1da6c,],
        // 1DA75         ; Mn #       SIGNWRITING UPPER BODY TILTING FROM HIP JOINTS
        [0x1da75, 0x1da75,],
        // 1DA84         ; Mn #       SIGNWRITING LOCATION HEAD NECK
        [0x1da84, 0x1da84,],
        // 1DA9B..1DA9F  ; Mn #   [5] SIGNWRITING FILL MODIFIER-2..SIGNWRITING FILL MODIFIER-6
        [0x1da9b, 0x1da9f,],
        // 1DAA1..1DAAF  ; Mn #  [15] SIGNWRITING ROTATION MODIFIER-2..SIGNWRITING ROTATION MODIFIER-16
        [0x1daa1, 0x1daaf,],
        // 1E000..1E006  ; Mn #   [7] COMBINING GLAGOLITIC LETTER AZU..COMBINING GLAGOLITIC LETTER ZHIVETE
        [0x1e000, 0x1e006,],
        // 1E008..1E018  ; Mn #  [17] COMBINING GLAGOLITIC LETTER ZEMLJA..COMBINING GLAGOLITIC LETTER HERU
        [0x1e008, 0x1e018,],
        // 1E01B..1E021  ; Mn #   [7] COMBINING GLAGOLITIC LETTER SHTA..COMBINING GLAGOLITIC LETTER YATI
        [0x1e01b, 0x1e021,],
        // 1E023..1E024  ; Mn #   [2] COMBINING GLAGOLITIC LETTER YU..COMBINING GLAGOLITIC LETTER SMALL YUS
        [0x1e023, 0x1e024,],
        // 1E026..1E02A  ; Mn #   [5] COMBINING GLAGOLITIC LETTER YO..COMBINING GLAGOLITIC LETTER FITA
        [0x1e026, 0x1e02a,],
        // 1E8D0..1E8D6  ; Mn #   [7] MENDE KIKAKUI COMBINING NUMBER TEENS..MENDE KIKAKUI COMBINING NUMBER MILLIONS
        [0x1e8d0, 0x1e8d6,],
        // 1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA
        [0x1e944, 0x1e94a,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '11.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 07FD          ; Mn #       NKO DANTAYALAN
        [0x007fd, 0x007fd,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08D3..08E1    ; Mn #  [15] ARABIC SMALL LOW WAW..ARABIC SMALL HIGH SIGN SAFHA
        [0x008d3, 0x008e1,],
        // 08E3..0902    ; Mn #  [32] ARABIC TURNED DAMMA BELOW..DEVANAGARI SIGN ANUSVARA
        [0x008e3, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 09FE          ; Mn #       BENGALI SANDHI MARK
        [0x009fe, 0x009fe,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0AFA..0AFF    ; Mn #   [6] GUJARATI SIGN SUKUN..GUJARATI SIGN TWO-CIRCLE NUKTA ABOVE
        [0x00afa, 0x00aff,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C00          ; Mn #       TELUGU SIGN COMBINING CANDRABINDU ABOVE
        [0x00c00, 0x00c00,],
        // 0C04          ; Mn #       TELUGU SIGN COMBINING ANUSVARA ABOVE
        [0x00c04, 0x00c04,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0C81          ; Mn #       KANNADA SIGN CANDRABINDU
        [0x00c81, 0x00c81,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D00..0D01    ; Mn #   [2] MALAYALAM SIGN COMBINING ANUSVARA ABOVE..MALAYALAM SIGN CANDRABINDU
        [0x00d00, 0x00d01,],
        // 0D3B..0D3C    ; Mn #   [2] MALAYALAM SIGN VERTICAL BAR VIRAMA..MALAYALAM SIGN CIRCULAR VIRAMA
        [0x00d3b, 0x00d3c,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EB9    ; Mn #   [6] LAO VOWEL SIGN I..LAO VOWEL SIGN UU
        [0x00eb4, 0x00eb9,],
        // 0EBB..0EBC    ; Mn #   [2] LAO VOWEL SIGN MAI KON..LAO SEMIVOWEL SIGN LO
        [0x00ebb, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 1885..1886    ; Mn #   [2] MONGOLIAN LETTER ALI GALI BALUDA..MONGOLIAN LETTER ALI GALI THREE BALUDA
        [0x01885, 0x01886,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1AB0..1ABD    ; Mn #  [14] COMBINING DOUBLED CIRCUMFLEX ACCENT..COMBINING PARENTHESES BELOW
        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
        [0x01ab0, 0x01abe,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB..1BAD    ; Mn #   [3] SUNDANESE SIGN VIRAMA..SUNDANESE CONSONANT SIGN PASANGAN WA
        [0x01bab, 0x01bad,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1CF8..1CF9    ; Mn #   [2] VEDIC TONE RING ABOVE..VEDIC TONE DOUBLE RING ABOVE
        [0x01cf8, 0x01cf9,],
        // 1DC0..1DF9    ; Mn #  [58] COMBINING DOTTED GRAVE ACCENT..COMBINING WIDE INVERTED BRIDGE BELOW
        [0x01dc0, 0x01df9,],
        // 1DFB..1DFF    ; Mn #   [5] COMBINING DELETION MARK..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfb, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69E..A69F    ; Mn #   [2] COMBINING CYRILLIC LETTER EF..COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69e, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4..A8C5    ; Mn #   [2] SAURASHTRA SIGN VIRAMA..SAURASHTRA SIGN CANDRABINDU
        [0x0a8c4, 0x0a8c5,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A8FF          ; Mn #       DEVANAGARI VOWEL SIGN AY
        [0x0a8ff, 0x0a8ff,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC          ; Mn #       JAVANESE VOWEL SIGN PEPET
        [0x0a9bc, 0x0a9bc,],
        // A9E5          ; Mn #       MYANMAR SIGN SHAN SAW
        [0x0a9e5, 0x0a9e5,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AA7C          ; Mn #       MYANMAR SIGN TAI LAING TONE-2
        [0x0aa7c, 0x0aa7c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE2F    ; Mn #  [16] COMBINING LIGATURE LEFT HALF..COMBINING CYRILLIC TITLO RIGHT HALF
        [0x0fe20, 0x0fe2f,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 102E0         ; Mn #       COPTIC EPACT THOUSANDS MARK
        [0x102e0, 0x102e0,],
        // 10376..1037A  ; Mn #   [5] COMBINING OLD PERMIC LETTER AN..COMBINING OLD PERMIC LETTER SII
        [0x10376, 0x1037a,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 10AE5..10AE6  ; Mn #   [2] MANICHAEAN ABBREVIATION MARK ABOVE..MANICHAEAN ABBREVIATION MARK BELOW
        [0x10ae5, 0x10ae6,],
        // 10D24..10D27  ; Mn #   [4] HANIFI ROHINGYA SIGN HARBAHAY..HANIFI ROHINGYA SIGN TASSI
        [0x10d24, 0x10d27,],
        // 10F46..10F50  ; Mn #  [11] SOGDIAN COMBINING DOT BELOW..SOGDIAN COMBINING STROKE BELOW
        [0x10f46, 0x10f50,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 1107F..11081  ; Mn #   [3] BRAHMI NUMBER JOINER..KAITHI SIGN ANUSVARA
        [0x1107f, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11173         ; Mn #       MAHAJANI SIGN NUKTA
        [0x11173, 0x11173,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 111C9..111CC  ; Mn #   [4] SHARADA SANDHI MARK..SHARADA EXTRA SHORT VOWEL MARK
        [0x111c9, 0x111cc,],
        // 1122F..11231  ; Mn #   [3] KHOJKI VOWEL SIGN U..KHOJKI VOWEL SIGN AI
        [0x1122f, 0x11231,],
        // 11234         ; Mn #       KHOJKI SIGN ANUSVARA
        [0x11234, 0x11234,],
        // 11236..11237  ; Mn #   [2] KHOJKI SIGN NUKTA..KHOJKI SIGN SHADDA
        [0x11236, 0x11237,],
        // 1123E         ; Mn #       KHOJKI SIGN SUKUN
        [0x1123e, 0x1123e,],
        // 112DF         ; Mn #       KHUDAWADI SIGN ANUSVARA
        [0x112df, 0x112df,],
        // 112E3..112EA  ; Mn #   [8] KHUDAWADI VOWEL SIGN U..KHUDAWADI SIGN VIRAMA
        [0x112e3, 0x112ea,],
        // 11300..11301  ; Mn #   [2] GRANTHA SIGN COMBINING ANUSVARA ABOVE..GRANTHA SIGN CANDRABINDU
        [0x11300, 0x11301,],
        // 1133B..1133C  ; Mn #   [2] COMBINING BINDU BELOW..GRANTHA SIGN NUKTA
        [0x1133b, 0x1133c,],
        // 11340         ; Mn #       GRANTHA VOWEL SIGN II
        [0x11340, 0x11340,],
        // 11366..1136C  ; Mn #   [7] COMBINING GRANTHA DIGIT ZERO..COMBINING GRANTHA DIGIT SIX
        [0x11366, 0x1136c,],
        // 11370..11374  ; Mn #   [5] COMBINING GRANTHA LETTER A..COMBINING GRANTHA LETTER PA
        [0x11370, 0x11374,],
        // 11438..1143F  ; Mn #   [8] NEWA VOWEL SIGN U..NEWA VOWEL SIGN AI
        [0x11438, 0x1143f,],
        // 11442..11444  ; Mn #   [3] NEWA SIGN VIRAMA..NEWA SIGN ANUSVARA
        [0x11442, 0x11444,],
        // 11446         ; Mn #       NEWA SIGN NUKTA
        [0x11446, 0x11446,],
        // 1145E         ; Mn #       NEWA SANDHI MARK
        [0x1145e, 0x1145e,],
        // 114B3..114B8  ; Mn #   [6] TIRHUTA VOWEL SIGN U..TIRHUTA VOWEL SIGN VOCALIC LL
        [0x114b3, 0x114b8,],
        // 114BA         ; Mn #       TIRHUTA VOWEL SIGN SHORT E
        [0x114ba, 0x114ba,],
        // 114BF..114C0  ; Mn #   [2] TIRHUTA SIGN CANDRABINDU..TIRHUTA SIGN ANUSVARA
        [0x114bf, 0x114c0,],
        // 114C2..114C3  ; Mn #   [2] TIRHUTA SIGN VIRAMA..TIRHUTA SIGN NUKTA
        [0x114c2, 0x114c3,],
        // 115B2..115B5  ; Mn #   [4] SIDDHAM VOWEL SIGN U..SIDDHAM VOWEL SIGN VOCALIC RR
        [0x115b2, 0x115b5,],
        // 115BC..115BD  ; Mn #   [2] SIDDHAM SIGN CANDRABINDU..SIDDHAM SIGN ANUSVARA
        [0x115bc, 0x115bd,],
        // 115BF..115C0  ; Mn #   [2] SIDDHAM SIGN VIRAMA..SIDDHAM SIGN NUKTA
        [0x115bf, 0x115c0,],
        // 115DC..115DD  ; Mn #   [2] SIDDHAM VOWEL SIGN ALTERNATE U..SIDDHAM VOWEL SIGN ALTERNATE UU
        [0x115dc, 0x115dd,],
        // 11633..1163A  ; Mn #   [8] MODI VOWEL SIGN U..MODI VOWEL SIGN AI
        [0x11633, 0x1163a,],
        // 1163D         ; Mn #       MODI SIGN ANUSVARA
        [0x1163d, 0x1163d,],
        // 1163F..11640  ; Mn #   [2] MODI SIGN VIRAMA..MODI SIGN ARDHACANDRA
        [0x1163f, 0x11640,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 1171D..1171F  ; Mn #   [3] AHOM CONSONANT SIGN MEDIAL LA..AHOM CONSONANT SIGN MEDIAL LIGATING RA
        [0x1171d, 0x1171f,],
        // 11722..11725  ; Mn #   [4] AHOM VOWEL SIGN I..AHOM VOWEL SIGN UU
        [0x11722, 0x11725,],
        // 11727..1172B  ; Mn #   [5] AHOM VOWEL SIGN AW..AHOM SIGN KILLER
        [0x11727, 0x1172b,],
        // 1182F..11837  ; Mn #   [9] DOGRA VOWEL SIGN U..DOGRA SIGN ANUSVARA
        [0x1182f, 0x11837,],
        // 11839..1183A  ; Mn #   [2] DOGRA SIGN VIRAMA..DOGRA SIGN NUKTA
        [0x11839, 0x1183a,],
        // 11A01..11A0A  ; Mn #  [10] ZANABAZAR SQUARE VOWEL SIGN I..ZANABAZAR SQUARE VOWEL LENGTH MARK
        [0x11a01, 0x11a0a,],
        // 11A33..11A38  ; Mn #   [6] ZANABAZAR SQUARE FINAL CONSONANT MARK..ZANABAZAR SQUARE SIGN ANUSVARA
        [0x11a33, 0x11a38,],
        // 11A3B..11A3E  ; Mn #   [4] ZANABAZAR SQUARE CLUSTER-FINAL LETTER YA..ZANABAZAR SQUARE CLUSTER-FINAL LETTER VA
        [0x11a3b, 0x11a3e,],
        // 11A47         ; Mn #       ZANABAZAR SQUARE SUBJOINER
        [0x11a47, 0x11a47,],
        // 11A51..11A56  ; Mn #   [6] SOYOMBO VOWEL SIGN I..SOYOMBO VOWEL SIGN OE
        [0x11a51, 0x11a56,],
        // 11A59..11A5B  ; Mn #   [3] SOYOMBO VOWEL SIGN VOCALIC R..SOYOMBO VOWEL LENGTH MARK
        [0x11a59, 0x11a5b,],
        // 11A8A..11A96  ; Mn #  [13] SOYOMBO FINAL CONSONANT SIGN G..SOYOMBO SIGN ANUSVARA
        [0x11a8a, 0x11a96,],
        // 11A98..11A99  ; Mn #   [2] SOYOMBO GEMINATION MARK..SOYOMBO SUBJOINER
        [0x11a98, 0x11a99,],
        // 11C30..11C36  ; Mn #   [7] BHAIKSUKI VOWEL SIGN I..BHAIKSUKI VOWEL SIGN VOCALIC L
        [0x11c30, 0x11c36,],
        // 11C38..11C3D  ; Mn #   [6] BHAIKSUKI VOWEL SIGN E..BHAIKSUKI SIGN ANUSVARA
        [0x11c38, 0x11c3d,],
        // 11C3F         ; Mn #       BHAIKSUKI SIGN VIRAMA
        [0x11c3f, 0x11c3f,],
        // 11C92..11CA7  ; Mn #  [22] MARCHEN SUBJOINED LETTER KA..MARCHEN SUBJOINED LETTER ZA
        [0x11c92, 0x11ca7,],
        // 11CAA..11CB0  ; Mn #   [7] MARCHEN SUBJOINED LETTER RA..MARCHEN VOWEL SIGN AA
        [0x11caa, 0x11cb0,],
        // 11CB2..11CB3  ; Mn #   [2] MARCHEN VOWEL SIGN U..MARCHEN VOWEL SIGN E
        [0x11cb2, 0x11cb3,],
        // 11CB5..11CB6  ; Mn #   [2] MARCHEN SIGN ANUSVARA..MARCHEN SIGN CANDRABINDU
        [0x11cb5, 0x11cb6,],
        // 11D31..11D36  ; Mn #   [6] MASARAM GONDI VOWEL SIGN AA..MASARAM GONDI VOWEL SIGN VOCALIC R
        [0x11d31, 0x11d36,],
        // 11D3A         ; Mn #       MASARAM GONDI VOWEL SIGN E
        [0x11d3a, 0x11d3a,],
        // 11D3C..11D3D  ; Mn #   [2] MASARAM GONDI VOWEL SIGN AI..MASARAM GONDI VOWEL SIGN O
        [0x11d3c, 0x11d3d,],
        // 11D3F..11D45  ; Mn #   [7] MASARAM GONDI VOWEL SIGN AU..MASARAM GONDI VIRAMA
        [0x11d3f, 0x11d45,],
        // 11D47         ; Mn #       MASARAM GONDI RA-KARA
        [0x11d47, 0x11d47,],
        // 11D90..11D91  ; Mn #   [2] GUNJALA GONDI VOWEL SIGN EE..GUNJALA GONDI VOWEL SIGN AI
        [0x11d90, 0x11d91,],
        // 11D95         ; Mn #       GUNJALA GONDI SIGN ANUSVARA
        [0x11d95, 0x11d95,],
        // 11D97         ; Mn #       GUNJALA GONDI VIRAMA
        [0x11d97, 0x11d97,],
        // 11EF3..11EF4  ; Mn #   [2] MAKASAR VOWEL SIGN I..MAKASAR VOWEL SIGN U
        [0x11ef3, 0x11ef4,],
        // 16AF0..16AF4  ; Mn #   [5] BASSA VAH COMBINING HIGH TONE..BASSA VAH COMBINING HIGH-LOW TONE
        [0x16af0, 0x16af4,],
        // 16B30..16B36  ; Mn #   [7] PAHAWH HMONG MARK CIM TUB..PAHAWH HMONG MARK CIM TAUM
        [0x16b30, 0x16b36,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 1BC9D..1BC9E  ; Mn #   [2] DUPLOYAN THICK LETTER SELECTOR..DUPLOYAN DOUBLE MARK
        [0x1bc9d, 0x1bc9e,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // 1DA00..1DA36  ; Mn #  [55] SIGNWRITING HEAD RIM..SIGNWRITING AIR SUCKING IN
        [0x1da00, 0x1da36,],
        // 1DA3B..1DA6C  ; Mn #  [50] SIGNWRITING MOUTH CLOSED NEUTRAL..SIGNWRITING EXCITEMENT
        [0x1da3b, 0x1da6c,],
        // 1DA75         ; Mn #       SIGNWRITING UPPER BODY TILTING FROM HIP JOINTS
        [0x1da75, 0x1da75,],
        // 1DA84         ; Mn #       SIGNWRITING LOCATION HEAD NECK
        [0x1da84, 0x1da84,],
        // 1DA9B..1DA9F  ; Mn #   [5] SIGNWRITING FILL MODIFIER-2..SIGNWRITING FILL MODIFIER-6
        [0x1da9b, 0x1da9f,],
        // 1DAA1..1DAAF  ; Mn #  [15] SIGNWRITING ROTATION MODIFIER-2..SIGNWRITING ROTATION MODIFIER-16
        [0x1daa1, 0x1daaf,],
        // 1E000..1E006  ; Mn #   [7] COMBINING GLAGOLITIC LETTER AZU..COMBINING GLAGOLITIC LETTER ZHIVETE
        [0x1e000, 0x1e006,],
        // 1E008..1E018  ; Mn #  [17] COMBINING GLAGOLITIC LETTER ZEMLJA..COMBINING GLAGOLITIC LETTER HERU
        [0x1e008, 0x1e018,],
        // 1E01B..1E021  ; Mn #   [7] COMBINING GLAGOLITIC LETTER SHTA..COMBINING GLAGOLITIC LETTER YATI
        [0x1e01b, 0x1e021,],
        // 1E023..1E024  ; Mn #   [2] COMBINING GLAGOLITIC LETTER YU..COMBINING GLAGOLITIC LETTER SMALL YUS
        [0x1e023, 0x1e024,],
        // 1E026..1E02A  ; Mn #   [5] COMBINING GLAGOLITIC LETTER YO..COMBINING GLAGOLITIC LETTER FITA
        [0x1e026, 0x1e02a,],
        // 1E8D0..1E8D6  ; Mn #   [7] MENDE KIKAKUI COMBINING NUMBER TEENS..MENDE KIKAKUI COMBINING NUMBER MILLIONS
        [0x1e8d0, 0x1e8d6,],
        // 1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA
        [0x1e944, 0x1e94a,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '12.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 07FD          ; Mn #       NKO DANTAYALAN
        [0x007fd, 0x007fd,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08D3..08E1    ; Mn #  [15] ARABIC SMALL LOW WAW..ARABIC SMALL HIGH SIGN SAFHA
        [0x008d3, 0x008e1,],
        // 08E3..0902    ; Mn #  [32] ARABIC TURNED DAMMA BELOW..DEVANAGARI SIGN ANUSVARA
        [0x008e3, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 09FE          ; Mn #       BENGALI SANDHI MARK
        [0x009fe, 0x009fe,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0AFA..0AFF    ; Mn #   [6] GUJARATI SIGN SUKUN..GUJARATI SIGN TWO-CIRCLE NUKTA ABOVE
        [0x00afa, 0x00aff,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C00          ; Mn #       TELUGU SIGN COMBINING CANDRABINDU ABOVE
        [0x00c00, 0x00c00,],
        // 0C04          ; Mn #       TELUGU SIGN COMBINING ANUSVARA ABOVE
        [0x00c04, 0x00c04,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0C81          ; Mn #       KANNADA SIGN CANDRABINDU
        [0x00c81, 0x00c81,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D00..0D01    ; Mn #   [2] MALAYALAM SIGN COMBINING ANUSVARA ABOVE..MALAYALAM SIGN CANDRABINDU
        [0x00d00, 0x00d01,],
        // 0D3B..0D3C    ; Mn #   [2] MALAYALAM SIGN VERTICAL BAR VIRAMA..MALAYALAM SIGN CIRCULAR VIRAMA
        [0x00d3b, 0x00d3c,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EBC    ; Mn #   [9] LAO VOWEL SIGN I..LAO SEMIVOWEL SIGN LO
        [0x00eb4, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 1885..1886    ; Mn #   [2] MONGOLIAN LETTER ALI GALI BALUDA..MONGOLIAN LETTER ALI GALI THREE BALUDA
        [0x01885, 0x01886,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1AB0..1ABD    ; Mn #  [14] COMBINING DOUBLED CIRCUMFLEX ACCENT..COMBINING PARENTHESES BELOW
        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
        [0x01ab0, 0x01abe,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB..1BAD    ; Mn #   [3] SUNDANESE SIGN VIRAMA..SUNDANESE CONSONANT SIGN PASANGAN WA
        [0x01bab, 0x01bad,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1CF8..1CF9    ; Mn #   [2] VEDIC TONE RING ABOVE..VEDIC TONE DOUBLE RING ABOVE
        [0x01cf8, 0x01cf9,],
        // 1DC0..1DF9    ; Mn #  [58] COMBINING DOTTED GRAVE ACCENT..COMBINING WIDE INVERTED BRIDGE BELOW
        [0x01dc0, 0x01df9,],
        // 1DFB..1DFF    ; Mn #   [5] COMBINING DELETION MARK..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfb, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69E..A69F    ; Mn #   [2] COMBINING CYRILLIC LETTER EF..COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69e, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4..A8C5    ; Mn #   [2] SAURASHTRA SIGN VIRAMA..SAURASHTRA SIGN CANDRABINDU
        [0x0a8c4, 0x0a8c5,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A8FF          ; Mn #       DEVANAGARI VOWEL SIGN AY
        [0x0a8ff, 0x0a8ff,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC..A9BD    ; Mn #   [2] JAVANESE VOWEL SIGN PEPET..JAVANESE CONSONANT SIGN KERET
        [0x0a9bc, 0x0a9bd,],
        // A9E5          ; Mn #       MYANMAR SIGN SHAN SAW
        [0x0a9e5, 0x0a9e5,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AA7C          ; Mn #       MYANMAR SIGN TAI LAING TONE-2
        [0x0aa7c, 0x0aa7c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE2F    ; Mn #  [16] COMBINING LIGATURE LEFT HALF..COMBINING CYRILLIC TITLO RIGHT HALF
        [0x0fe20, 0x0fe2f,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 102E0         ; Mn #       COPTIC EPACT THOUSANDS MARK
        [0x102e0, 0x102e0,],
        // 10376..1037A  ; Mn #   [5] COMBINING OLD PERMIC LETTER AN..COMBINING OLD PERMIC LETTER SII
        [0x10376, 0x1037a,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 10AE5..10AE6  ; Mn #   [2] MANICHAEAN ABBREVIATION MARK ABOVE..MANICHAEAN ABBREVIATION MARK BELOW
        [0x10ae5, 0x10ae6,],
        // 10D24..10D27  ; Mn #   [4] HANIFI ROHINGYA SIGN HARBAHAY..HANIFI ROHINGYA SIGN TASSI
        [0x10d24, 0x10d27,],
        // 10F46..10F50  ; Mn #  [11] SOGDIAN COMBINING DOT BELOW..SOGDIAN COMBINING STROKE BELOW
        [0x10f46, 0x10f50,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 1107F..11081  ; Mn #   [3] BRAHMI NUMBER JOINER..KAITHI SIGN ANUSVARA
        [0x1107f, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11173         ; Mn #       MAHAJANI SIGN NUKTA
        [0x11173, 0x11173,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 111C9..111CC  ; Mn #   [4] SHARADA SANDHI MARK..SHARADA EXTRA SHORT VOWEL MARK
        [0x111c9, 0x111cc,],
        // 1122F..11231  ; Mn #   [3] KHOJKI VOWEL SIGN U..KHOJKI VOWEL SIGN AI
        [0x1122f, 0x11231,],
        // 11234         ; Mn #       KHOJKI SIGN ANUSVARA
        [0x11234, 0x11234,],
        // 11236..11237  ; Mn #   [2] KHOJKI SIGN NUKTA..KHOJKI SIGN SHADDA
        [0x11236, 0x11237,],
        // 1123E         ; Mn #       KHOJKI SIGN SUKUN
        [0x1123e, 0x1123e,],
        // 112DF         ; Mn #       KHUDAWADI SIGN ANUSVARA
        [0x112df, 0x112df,],
        // 112E3..112EA  ; Mn #   [8] KHUDAWADI VOWEL SIGN U..KHUDAWADI SIGN VIRAMA
        [0x112e3, 0x112ea,],
        // 11300..11301  ; Mn #   [2] GRANTHA SIGN COMBINING ANUSVARA ABOVE..GRANTHA SIGN CANDRABINDU
        [0x11300, 0x11301,],
        // 1133B..1133C  ; Mn #   [2] COMBINING BINDU BELOW..GRANTHA SIGN NUKTA
        [0x1133b, 0x1133c,],
        // 11340         ; Mn #       GRANTHA VOWEL SIGN II
        [0x11340, 0x11340,],
        // 11366..1136C  ; Mn #   [7] COMBINING GRANTHA DIGIT ZERO..COMBINING GRANTHA DIGIT SIX
        [0x11366, 0x1136c,],
        // 11370..11374  ; Mn #   [5] COMBINING GRANTHA LETTER A..COMBINING GRANTHA LETTER PA
        [0x11370, 0x11374,],
        // 11438..1143F  ; Mn #   [8] NEWA VOWEL SIGN U..NEWA VOWEL SIGN AI
        [0x11438, 0x1143f,],
        // 11442..11444  ; Mn #   [3] NEWA SIGN VIRAMA..NEWA SIGN ANUSVARA
        [0x11442, 0x11444,],
        // 11446         ; Mn #       NEWA SIGN NUKTA
        [0x11446, 0x11446,],
        // 1145E         ; Mn #       NEWA SANDHI MARK
        [0x1145e, 0x1145e,],
        // 114B3..114B8  ; Mn #   [6] TIRHUTA VOWEL SIGN U..TIRHUTA VOWEL SIGN VOCALIC LL
        [0x114b3, 0x114b8,],
        // 114BA         ; Mn #       TIRHUTA VOWEL SIGN SHORT E
        [0x114ba, 0x114ba,],
        // 114BF..114C0  ; Mn #   [2] TIRHUTA SIGN CANDRABINDU..TIRHUTA SIGN ANUSVARA
        [0x114bf, 0x114c0,],
        // 114C2..114C3  ; Mn #   [2] TIRHUTA SIGN VIRAMA..TIRHUTA SIGN NUKTA
        [0x114c2, 0x114c3,],
        // 115B2..115B5  ; Mn #   [4] SIDDHAM VOWEL SIGN U..SIDDHAM VOWEL SIGN VOCALIC RR
        [0x115b2, 0x115b5,],
        // 115BC..115BD  ; Mn #   [2] SIDDHAM SIGN CANDRABINDU..SIDDHAM SIGN ANUSVARA
        [0x115bc, 0x115bd,],
        // 115BF..115C0  ; Mn #   [2] SIDDHAM SIGN VIRAMA..SIDDHAM SIGN NUKTA
        [0x115bf, 0x115c0,],
        // 115DC..115DD  ; Mn #   [2] SIDDHAM VOWEL SIGN ALTERNATE U..SIDDHAM VOWEL SIGN ALTERNATE UU
        [0x115dc, 0x115dd,],
        // 11633..1163A  ; Mn #   [8] MODI VOWEL SIGN U..MODI VOWEL SIGN AI
        [0x11633, 0x1163a,],
        // 1163D         ; Mn #       MODI SIGN ANUSVARA
        [0x1163d, 0x1163d,],
        // 1163F..11640  ; Mn #   [2] MODI SIGN VIRAMA..MODI SIGN ARDHACANDRA
        [0x1163f, 0x11640,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 1171D..1171F  ; Mn #   [3] AHOM CONSONANT SIGN MEDIAL LA..AHOM CONSONANT SIGN MEDIAL LIGATING RA
        [0x1171d, 0x1171f,],
        // 11722..11725  ; Mn #   [4] AHOM VOWEL SIGN I..AHOM VOWEL SIGN UU
        [0x11722, 0x11725,],
        // 11727..1172B  ; Mn #   [5] AHOM VOWEL SIGN AW..AHOM SIGN KILLER
        [0x11727, 0x1172b,],
        // 1182F..11837  ; Mn #   [9] DOGRA VOWEL SIGN U..DOGRA SIGN ANUSVARA
        [0x1182f, 0x11837,],
        // 11839..1183A  ; Mn #   [2] DOGRA SIGN VIRAMA..DOGRA SIGN NUKTA
        [0x11839, 0x1183a,],
        // 119D4..119D7  ; Mn #   [4] NANDINAGARI VOWEL SIGN U..NANDINAGARI VOWEL SIGN VOCALIC RR
        [0x119d4, 0x119d7,],
        // 119DA..119DB  ; Mn #   [2] NANDINAGARI VOWEL SIGN E..NANDINAGARI VOWEL SIGN AI
        [0x119da, 0x119db,],
        // 119E0         ; Mn #       NANDINAGARI SIGN VIRAMA
        [0x119e0, 0x119e0,],
        // 11A01..11A0A  ; Mn #  [10] ZANABAZAR SQUARE VOWEL SIGN I..ZANABAZAR SQUARE VOWEL LENGTH MARK
        [0x11a01, 0x11a0a,],
        // 11A33..11A38  ; Mn #   [6] ZANABAZAR SQUARE FINAL CONSONANT MARK..ZANABAZAR SQUARE SIGN ANUSVARA
        [0x11a33, 0x11a38,],
        // 11A3B..11A3E  ; Mn #   [4] ZANABAZAR SQUARE CLUSTER-FINAL LETTER YA..ZANABAZAR SQUARE CLUSTER-FINAL LETTER VA
        [0x11a3b, 0x11a3e,],
        // 11A47         ; Mn #       ZANABAZAR SQUARE SUBJOINER
        [0x11a47, 0x11a47,],
        // 11A51..11A56  ; Mn #   [6] SOYOMBO VOWEL SIGN I..SOYOMBO VOWEL SIGN OE
        [0x11a51, 0x11a56,],
        // 11A59..11A5B  ; Mn #   [3] SOYOMBO VOWEL SIGN VOCALIC R..SOYOMBO VOWEL LENGTH MARK
        [0x11a59, 0x11a5b,],
        // 11A8A..11A96  ; Mn #  [13] SOYOMBO FINAL CONSONANT SIGN G..SOYOMBO SIGN ANUSVARA
        [0x11a8a, 0x11a96,],
        // 11A98..11A99  ; Mn #   [2] SOYOMBO GEMINATION MARK..SOYOMBO SUBJOINER
        [0x11a98, 0x11a99,],
        // 11C30..11C36  ; Mn #   [7] BHAIKSUKI VOWEL SIGN I..BHAIKSUKI VOWEL SIGN VOCALIC L
        [0x11c30, 0x11c36,],
        // 11C38..11C3D  ; Mn #   [6] BHAIKSUKI VOWEL SIGN E..BHAIKSUKI SIGN ANUSVARA
        [0x11c38, 0x11c3d,],
        // 11C3F         ; Mn #       BHAIKSUKI SIGN VIRAMA
        [0x11c3f, 0x11c3f,],
        // 11C92..11CA7  ; Mn #  [22] MARCHEN SUBJOINED LETTER KA..MARCHEN SUBJOINED LETTER ZA
        [0x11c92, 0x11ca7,],
        // 11CAA..11CB0  ; Mn #   [7] MARCHEN SUBJOINED LETTER RA..MARCHEN VOWEL SIGN AA
        [0x11caa, 0x11cb0,],
        // 11CB2..11CB3  ; Mn #   [2] MARCHEN VOWEL SIGN U..MARCHEN VOWEL SIGN E
        [0x11cb2, 0x11cb3,],
        // 11CB5..11CB6  ; Mn #   [2] MARCHEN SIGN ANUSVARA..MARCHEN SIGN CANDRABINDU
        [0x11cb5, 0x11cb6,],
        // 11D31..11D36  ; Mn #   [6] MASARAM GONDI VOWEL SIGN AA..MASARAM GONDI VOWEL SIGN VOCALIC R
        [0x11d31, 0x11d36,],
        // 11D3A         ; Mn #       MASARAM GONDI VOWEL SIGN E
        [0x11d3a, 0x11d3a,],
        // 11D3C..11D3D  ; Mn #   [2] MASARAM GONDI VOWEL SIGN AI..MASARAM GONDI VOWEL SIGN O
        [0x11d3c, 0x11d3d,],
        // 11D3F..11D45  ; Mn #   [7] MASARAM GONDI VOWEL SIGN AU..MASARAM GONDI VIRAMA
        [0x11d3f, 0x11d45,],
        // 11D47         ; Mn #       MASARAM GONDI RA-KARA
        [0x11d47, 0x11d47,],
        // 11D90..11D91  ; Mn #   [2] GUNJALA GONDI VOWEL SIGN EE..GUNJALA GONDI VOWEL SIGN AI
        [0x11d90, 0x11d91,],
        // 11D95         ; Mn #       GUNJALA GONDI SIGN ANUSVARA
        [0x11d95, 0x11d95,],
        // 11D97         ; Mn #       GUNJALA GONDI VIRAMA
        [0x11d97, 0x11d97,],
        // 11EF3..11EF4  ; Mn #   [2] MAKASAR VOWEL SIGN I..MAKASAR VOWEL SIGN U
        [0x11ef3, 0x11ef4,],
        // 16AF0..16AF4  ; Mn #   [5] BASSA VAH COMBINING HIGH TONE..BASSA VAH COMBINING HIGH-LOW TONE
        [0x16af0, 0x16af4,],
        // 16B30..16B36  ; Mn #   [7] PAHAWH HMONG MARK CIM TUB..PAHAWH HMONG MARK CIM TAUM
        [0x16b30, 0x16b36,],
        // 16F4F         ; Mn #       MIAO SIGN CONSONANT MODIFIER BAR
        [0x16f4f, 0x16f4f,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 1BC9D..1BC9E  ; Mn #   [2] DUPLOYAN THICK LETTER SELECTOR..DUPLOYAN DOUBLE MARK
        [0x1bc9d, 0x1bc9e,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // 1DA00..1DA36  ; Mn #  [55] SIGNWRITING HEAD RIM..SIGNWRITING AIR SUCKING IN
        [0x1da00, 0x1da36,],
        // 1DA3B..1DA6C  ; Mn #  [50] SIGNWRITING MOUTH CLOSED NEUTRAL..SIGNWRITING EXCITEMENT
        [0x1da3b, 0x1da6c,],
        // 1DA75         ; Mn #       SIGNWRITING UPPER BODY TILTING FROM HIP JOINTS
        [0x1da75, 0x1da75,],
        // 1DA84         ; Mn #       SIGNWRITING LOCATION HEAD NECK
        [0x1da84, 0x1da84,],
        // 1DA9B..1DA9F  ; Mn #   [5] SIGNWRITING FILL MODIFIER-2..SIGNWRITING FILL MODIFIER-6
        [0x1da9b, 0x1da9f,],
        // 1DAA1..1DAAF  ; Mn #  [15] SIGNWRITING ROTATION MODIFIER-2..SIGNWRITING ROTATION MODIFIER-16
        [0x1daa1, 0x1daaf,],
        // 1E000..1E006  ; Mn #   [7] COMBINING GLAGOLITIC LETTER AZU..COMBINING GLAGOLITIC LETTER ZHIVETE
        [0x1e000, 0x1e006,],
        // 1E008..1E018  ; Mn #  [17] COMBINING GLAGOLITIC LETTER ZEMLJA..COMBINING GLAGOLITIC LETTER HERU
        [0x1e008, 0x1e018,],
        // 1E01B..1E021  ; Mn #   [7] COMBINING GLAGOLITIC LETTER SHTA..COMBINING GLAGOLITIC LETTER YATI
        [0x1e01b, 0x1e021,],
        // 1E023..1E024  ; Mn #   [2] COMBINING GLAGOLITIC LETTER YU..COMBINING GLAGOLITIC LETTER SMALL YUS
        [0x1e023, 0x1e024,],
        // 1E026..1E02A  ; Mn #   [5] COMBINING GLAGOLITIC LETTER YO..COMBINING GLAGOLITIC LETTER FITA
        [0x1e026, 0x1e02a,],
        // 1E130..1E136  ; Mn #   [7] NYIAKENG PUACHUE HMONG TONE-B..NYIAKENG PUACHUE HMONG TONE-D
        [0x1e130, 0x1e136,],
        // 1E2EC..1E2EF  ; Mn #   [4] WANCHO TONE TUP..WANCHO TONE KOINI
        [0x1e2ec, 0x1e2ef,],
        // 1E8D0..1E8D6  ; Mn #   [7] MENDE KIKAKUI COMBINING NUMBER TEENS..MENDE KIKAKUI COMBINING NUMBER MILLIONS
        [0x1e8d0, 0x1e8d6,],
        // 1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA
        [0x1e944, 0x1e94a,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '12.1.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 07FD          ; Mn #       NKO DANTAYALAN
        [0x007fd, 0x007fd,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08D3..08E1    ; Mn #  [15] ARABIC SMALL LOW WAW..ARABIC SMALL HIGH SIGN SAFHA
        [0x008d3, 0x008e1,],
        // 08E3..0902    ; Mn #  [32] ARABIC TURNED DAMMA BELOW..DEVANAGARI SIGN ANUSVARA
        [0x008e3, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 09FE          ; Mn #       BENGALI SANDHI MARK
        [0x009fe, 0x009fe,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0AFA..0AFF    ; Mn #   [6] GUJARATI SIGN SUKUN..GUJARATI SIGN TWO-CIRCLE NUKTA ABOVE
        [0x00afa, 0x00aff,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B56          ; Mn #       ORIYA AI LENGTH MARK
        [0x00b56, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C00          ; Mn #       TELUGU SIGN COMBINING CANDRABINDU ABOVE
        [0x00c00, 0x00c00,],
        // 0C04          ; Mn #       TELUGU SIGN COMBINING ANUSVARA ABOVE
        [0x00c04, 0x00c04,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0C81          ; Mn #       KANNADA SIGN CANDRABINDU
        [0x00c81, 0x00c81,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D00..0D01    ; Mn #   [2] MALAYALAM SIGN COMBINING ANUSVARA ABOVE..MALAYALAM SIGN CANDRABINDU
        [0x00d00, 0x00d01,],
        // 0D3B..0D3C    ; Mn #   [2] MALAYALAM SIGN VERTICAL BAR VIRAMA..MALAYALAM SIGN CIRCULAR VIRAMA
        [0x00d3b, 0x00d3c,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EBC    ; Mn #   [9] LAO VOWEL SIGN I..LAO SEMIVOWEL SIGN LO
        [0x00eb4, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 1885..1886    ; Mn #   [2] MONGOLIAN LETTER ALI GALI BALUDA..MONGOLIAN LETTER ALI GALI THREE BALUDA
        [0x01885, 0x01886,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1AB0..1ABD    ; Mn #  [14] COMBINING DOUBLED CIRCUMFLEX ACCENT..COMBINING PARENTHESES BELOW
        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
        [0x01ab0, 0x01abe,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB..1BAD    ; Mn #   [3] SUNDANESE SIGN VIRAMA..SUNDANESE CONSONANT SIGN PASANGAN WA
        [0x01bab, 0x01bad,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1CF8..1CF9    ; Mn #   [2] VEDIC TONE RING ABOVE..VEDIC TONE DOUBLE RING ABOVE
        [0x01cf8, 0x01cf9,],
        // 1DC0..1DF9    ; Mn #  [58] COMBINING DOTTED GRAVE ACCENT..COMBINING WIDE INVERTED BRIDGE BELOW
        [0x01dc0, 0x01df9,],
        // 1DFB..1DFF    ; Mn #   [5] COMBINING DELETION MARK..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfb, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69E..A69F    ; Mn #   [2] COMBINING CYRILLIC LETTER EF..COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69e, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A8C4..A8C5    ; Mn #   [2] SAURASHTRA SIGN VIRAMA..SAURASHTRA SIGN CANDRABINDU
        [0x0a8c4, 0x0a8c5,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A8FF          ; Mn #       DEVANAGARI VOWEL SIGN AY
        [0x0a8ff, 0x0a8ff,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC..A9BD    ; Mn #   [2] JAVANESE VOWEL SIGN PEPET..JAVANESE CONSONANT SIGN KERET
        [0x0a9bc, 0x0a9bd,],
        // A9E5          ; Mn #       MYANMAR SIGN SHAN SAW
        [0x0a9e5, 0x0a9e5,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AA7C          ; Mn #       MYANMAR SIGN TAI LAING TONE-2
        [0x0aa7c, 0x0aa7c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE2F    ; Mn #  [16] COMBINING LIGATURE LEFT HALF..COMBINING CYRILLIC TITLO RIGHT HALF
        [0x0fe20, 0x0fe2f,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 102E0         ; Mn #       COPTIC EPACT THOUSANDS MARK
        [0x102e0, 0x102e0,],
        // 10376..1037A  ; Mn #   [5] COMBINING OLD PERMIC LETTER AN..COMBINING OLD PERMIC LETTER SII
        [0x10376, 0x1037a,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 10AE5..10AE6  ; Mn #   [2] MANICHAEAN ABBREVIATION MARK ABOVE..MANICHAEAN ABBREVIATION MARK BELOW
        [0x10ae5, 0x10ae6,],
        // 10D24..10D27  ; Mn #   [4] HANIFI ROHINGYA SIGN HARBAHAY..HANIFI ROHINGYA SIGN TASSI
        [0x10d24, 0x10d27,],
        // 10F46..10F50  ; Mn #  [11] SOGDIAN COMBINING DOT BELOW..SOGDIAN COMBINING STROKE BELOW
        [0x10f46, 0x10f50,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 1107F..11081  ; Mn #   [3] BRAHMI NUMBER JOINER..KAITHI SIGN ANUSVARA
        [0x1107f, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11173         ; Mn #       MAHAJANI SIGN NUKTA
        [0x11173, 0x11173,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 111C9..111CC  ; Mn #   [4] SHARADA SANDHI MARK..SHARADA EXTRA SHORT VOWEL MARK
        [0x111c9, 0x111cc,],
        // 1122F..11231  ; Mn #   [3] KHOJKI VOWEL SIGN U..KHOJKI VOWEL SIGN AI
        [0x1122f, 0x11231,],
        // 11234         ; Mn #       KHOJKI SIGN ANUSVARA
        [0x11234, 0x11234,],
        // 11236..11237  ; Mn #   [2] KHOJKI SIGN NUKTA..KHOJKI SIGN SHADDA
        [0x11236, 0x11237,],
        // 1123E         ; Mn #       KHOJKI SIGN SUKUN
        [0x1123e, 0x1123e,],
        // 112DF         ; Mn #       KHUDAWADI SIGN ANUSVARA
        [0x112df, 0x112df,],
        // 112E3..112EA  ; Mn #   [8] KHUDAWADI VOWEL SIGN U..KHUDAWADI SIGN VIRAMA
        [0x112e3, 0x112ea,],
        // 11300..11301  ; Mn #   [2] GRANTHA SIGN COMBINING ANUSVARA ABOVE..GRANTHA SIGN CANDRABINDU
        [0x11300, 0x11301,],
        // 1133B..1133C  ; Mn #   [2] COMBINING BINDU BELOW..GRANTHA SIGN NUKTA
        [0x1133b, 0x1133c,],
        // 11340         ; Mn #       GRANTHA VOWEL SIGN II
        [0x11340, 0x11340,],
        // 11366..1136C  ; Mn #   [7] COMBINING GRANTHA DIGIT ZERO..COMBINING GRANTHA DIGIT SIX
        [0x11366, 0x1136c,],
        // 11370..11374  ; Mn #   [5] COMBINING GRANTHA LETTER A..COMBINING GRANTHA LETTER PA
        [0x11370, 0x11374,],
        // 11438..1143F  ; Mn #   [8] NEWA VOWEL SIGN U..NEWA VOWEL SIGN AI
        [0x11438, 0x1143f,],
        // 11442..11444  ; Mn #   [3] NEWA SIGN VIRAMA..NEWA SIGN ANUSVARA
        [0x11442, 0x11444,],
        // 11446         ; Mn #       NEWA SIGN NUKTA
        [0x11446, 0x11446,],
        // 1145E         ; Mn #       NEWA SANDHI MARK
        [0x1145e, 0x1145e,],
        // 114B3..114B8  ; Mn #   [6] TIRHUTA VOWEL SIGN U..TIRHUTA VOWEL SIGN VOCALIC LL
        [0x114b3, 0x114b8,],
        // 114BA         ; Mn #       TIRHUTA VOWEL SIGN SHORT E
        [0x114ba, 0x114ba,],
        // 114BF..114C0  ; Mn #   [2] TIRHUTA SIGN CANDRABINDU..TIRHUTA SIGN ANUSVARA
        [0x114bf, 0x114c0,],
        // 114C2..114C3  ; Mn #   [2] TIRHUTA SIGN VIRAMA..TIRHUTA SIGN NUKTA
        [0x114c2, 0x114c3,],
        // 115B2..115B5  ; Mn #   [4] SIDDHAM VOWEL SIGN U..SIDDHAM VOWEL SIGN VOCALIC RR
        [0x115b2, 0x115b5,],
        // 115BC..115BD  ; Mn #   [2] SIDDHAM SIGN CANDRABINDU..SIDDHAM SIGN ANUSVARA
        [0x115bc, 0x115bd,],
        // 115BF..115C0  ; Mn #   [2] SIDDHAM SIGN VIRAMA..SIDDHAM SIGN NUKTA
        [0x115bf, 0x115c0,],
        // 115DC..115DD  ; Mn #   [2] SIDDHAM VOWEL SIGN ALTERNATE U..SIDDHAM VOWEL SIGN ALTERNATE UU
        [0x115dc, 0x115dd,],
        // 11633..1163A  ; Mn #   [8] MODI VOWEL SIGN U..MODI VOWEL SIGN AI
        [0x11633, 0x1163a,],
        // 1163D         ; Mn #       MODI SIGN ANUSVARA
        [0x1163d, 0x1163d,],
        // 1163F..11640  ; Mn #   [2] MODI SIGN VIRAMA..MODI SIGN ARDHACANDRA
        [0x1163f, 0x11640,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 1171D..1171F  ; Mn #   [3] AHOM CONSONANT SIGN MEDIAL LA..AHOM CONSONANT SIGN MEDIAL LIGATING RA
        [0x1171d, 0x1171f,],
        // 11722..11725  ; Mn #   [4] AHOM VOWEL SIGN I..AHOM VOWEL SIGN UU
        [0x11722, 0x11725,],
        // 11727..1172B  ; Mn #   [5] AHOM VOWEL SIGN AW..AHOM SIGN KILLER
        [0x11727, 0x1172b,],
        // 1182F..11837  ; Mn #   [9] DOGRA VOWEL SIGN U..DOGRA SIGN ANUSVARA
        [0x1182f, 0x11837,],
        // 11839..1183A  ; Mn #   [2] DOGRA SIGN VIRAMA..DOGRA SIGN NUKTA
        [0x11839, 0x1183a,],
        // 119D4..119D7  ; Mn #   [4] NANDINAGARI VOWEL SIGN U..NANDINAGARI VOWEL SIGN VOCALIC RR
        [0x119d4, 0x119d7,],
        // 119DA..119DB  ; Mn #   [2] NANDINAGARI VOWEL SIGN E..NANDINAGARI VOWEL SIGN AI
        [0x119da, 0x119db,],
        // 119E0         ; Mn #       NANDINAGARI SIGN VIRAMA
        [0x119e0, 0x119e0,],
        // 11A01..11A0A  ; Mn #  [10] ZANABAZAR SQUARE VOWEL SIGN I..ZANABAZAR SQUARE VOWEL LENGTH MARK
        [0x11a01, 0x11a0a,],
        // 11A33..11A38  ; Mn #   [6] ZANABAZAR SQUARE FINAL CONSONANT MARK..ZANABAZAR SQUARE SIGN ANUSVARA
        [0x11a33, 0x11a38,],
        // 11A3B..11A3E  ; Mn #   [4] ZANABAZAR SQUARE CLUSTER-FINAL LETTER YA..ZANABAZAR SQUARE CLUSTER-FINAL LETTER VA
        [0x11a3b, 0x11a3e,],
        // 11A47         ; Mn #       ZANABAZAR SQUARE SUBJOINER
        [0x11a47, 0x11a47,],
        // 11A51..11A56  ; Mn #   [6] SOYOMBO VOWEL SIGN I..SOYOMBO VOWEL SIGN OE
        [0x11a51, 0x11a56,],
        // 11A59..11A5B  ; Mn #   [3] SOYOMBO VOWEL SIGN VOCALIC R..SOYOMBO VOWEL LENGTH MARK
        [0x11a59, 0x11a5b,],
        // 11A8A..11A96  ; Mn #  [13] SOYOMBO FINAL CONSONANT SIGN G..SOYOMBO SIGN ANUSVARA
        [0x11a8a, 0x11a96,],
        // 11A98..11A99  ; Mn #   [2] SOYOMBO GEMINATION MARK..SOYOMBO SUBJOINER
        [0x11a98, 0x11a99,],
        // 11C30..11C36  ; Mn #   [7] BHAIKSUKI VOWEL SIGN I..BHAIKSUKI VOWEL SIGN VOCALIC L
        [0x11c30, 0x11c36,],
        // 11C38..11C3D  ; Mn #   [6] BHAIKSUKI VOWEL SIGN E..BHAIKSUKI SIGN ANUSVARA
        [0x11c38, 0x11c3d,],
        // 11C3F         ; Mn #       BHAIKSUKI SIGN VIRAMA
        [0x11c3f, 0x11c3f,],
        // 11C92..11CA7  ; Mn #  [22] MARCHEN SUBJOINED LETTER KA..MARCHEN SUBJOINED LETTER ZA
        [0x11c92, 0x11ca7,],
        // 11CAA..11CB0  ; Mn #   [7] MARCHEN SUBJOINED LETTER RA..MARCHEN VOWEL SIGN AA
        [0x11caa, 0x11cb0,],
        // 11CB2..11CB3  ; Mn #   [2] MARCHEN VOWEL SIGN U..MARCHEN VOWEL SIGN E
        [0x11cb2, 0x11cb3,],
        // 11CB5..11CB6  ; Mn #   [2] MARCHEN SIGN ANUSVARA..MARCHEN SIGN CANDRABINDU
        [0x11cb5, 0x11cb6,],
        // 11D31..11D36  ; Mn #   [6] MASARAM GONDI VOWEL SIGN AA..MASARAM GONDI VOWEL SIGN VOCALIC R
        [0x11d31, 0x11d36,],
        // 11D3A         ; Mn #       MASARAM GONDI VOWEL SIGN E
        [0x11d3a, 0x11d3a,],
        // 11D3C..11D3D  ; Mn #   [2] MASARAM GONDI VOWEL SIGN AI..MASARAM GONDI VOWEL SIGN O
        [0x11d3c, 0x11d3d,],
        // 11D3F..11D45  ; Mn #   [7] MASARAM GONDI VOWEL SIGN AU..MASARAM GONDI VIRAMA
        [0x11d3f, 0x11d45,],
        // 11D47         ; Mn #       MASARAM GONDI RA-KARA
        [0x11d47, 0x11d47,],
        // 11D90..11D91  ; Mn #   [2] GUNJALA GONDI VOWEL SIGN EE..GUNJALA GONDI VOWEL SIGN AI
        [0x11d90, 0x11d91,],
        // 11D95         ; Mn #       GUNJALA GONDI SIGN ANUSVARA
        [0x11d95, 0x11d95,],
        // 11D97         ; Mn #       GUNJALA GONDI VIRAMA
        [0x11d97, 0x11d97,],
        // 11EF3..11EF4  ; Mn #   [2] MAKASAR VOWEL SIGN I..MAKASAR VOWEL SIGN U
        [0x11ef3, 0x11ef4,],
        // 16AF0..16AF4  ; Mn #   [5] BASSA VAH COMBINING HIGH TONE..BASSA VAH COMBINING HIGH-LOW TONE
        [0x16af0, 0x16af4,],
        // 16B30..16B36  ; Mn #   [7] PAHAWH HMONG MARK CIM TUB..PAHAWH HMONG MARK CIM TAUM
        [0x16b30, 0x16b36,],
        // 16F4F         ; Mn #       MIAO SIGN CONSONANT MODIFIER BAR
        [0x16f4f, 0x16f4f,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 1BC9D..1BC9E  ; Mn #   [2] DUPLOYAN THICK LETTER SELECTOR..DUPLOYAN DOUBLE MARK
        [0x1bc9d, 0x1bc9e,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // 1DA00..1DA36  ; Mn #  [55] SIGNWRITING HEAD RIM..SIGNWRITING AIR SUCKING IN
        [0x1da00, 0x1da36,],
        // 1DA3B..1DA6C  ; Mn #  [50] SIGNWRITING MOUTH CLOSED NEUTRAL..SIGNWRITING EXCITEMENT
        [0x1da3b, 0x1da6c,],
        // 1DA75         ; Mn #       SIGNWRITING UPPER BODY TILTING FROM HIP JOINTS
        [0x1da75, 0x1da75,],
        // 1DA84         ; Mn #       SIGNWRITING LOCATION HEAD NECK
        [0x1da84, 0x1da84,],
        // 1DA9B..1DA9F  ; Mn #   [5] SIGNWRITING FILL MODIFIER-2..SIGNWRITING FILL MODIFIER-6
        [0x1da9b, 0x1da9f,],
        // 1DAA1..1DAAF  ; Mn #  [15] SIGNWRITING ROTATION MODIFIER-2..SIGNWRITING ROTATION MODIFIER-16
        [0x1daa1, 0x1daaf,],
        // 1E000..1E006  ; Mn #   [7] COMBINING GLAGOLITIC LETTER AZU..COMBINING GLAGOLITIC LETTER ZHIVETE
        [0x1e000, 0x1e006,],
        // 1E008..1E018  ; Mn #  [17] COMBINING GLAGOLITIC LETTER ZEMLJA..COMBINING GLAGOLITIC LETTER HERU
        [0x1e008, 0x1e018,],
        // 1E01B..1E021  ; Mn #   [7] COMBINING GLAGOLITIC LETTER SHTA..COMBINING GLAGOLITIC LETTER YATI
        [0x1e01b, 0x1e021,],
        // 1E023..1E024  ; Mn #   [2] COMBINING GLAGOLITIC LETTER YU..COMBINING GLAGOLITIC LETTER SMALL YUS
        [0x1e023, 0x1e024,],
        // 1E026..1E02A  ; Mn #   [5] COMBINING GLAGOLITIC LETTER YO..COMBINING GLAGOLITIC LETTER FITA
        [0x1e026, 0x1e02a,],
        // 1E130..1E136  ; Mn #   [7] NYIAKENG PUACHUE HMONG TONE-B..NYIAKENG PUACHUE HMONG TONE-D
        [0x1e130, 0x1e136,],
        // 1E2EC..1E2EF  ; Mn #   [4] WANCHO TONE TUP..WANCHO TONE KOINI
        [0x1e2ec, 0x1e2ef,],
        // 1E8D0..1E8D6  ; Mn #   [7] MENDE KIKAKUI COMBINING NUMBER TEENS..MENDE KIKAKUI COMBINING NUMBER MILLIONS
        [0x1e8d0, 0x1e8d6,],
        // 1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA
        [0x1e944, 0x1e94a,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '13.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 07FD          ; Mn #       NKO DANTAYALAN
        [0x007fd, 0x007fd,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 08D3..08E1    ; Mn #  [15] ARABIC SMALL LOW WAW..ARABIC SMALL HIGH SIGN SAFHA
        [0x008d3, 0x008e1,],
        // 08E3..0902    ; Mn #  [32] ARABIC TURNED DAMMA BELOW..DEVANAGARI SIGN ANUSVARA
        [0x008e3, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 09FE          ; Mn #       BENGALI SANDHI MARK
        [0x009fe, 0x009fe,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0AFA..0AFF    ; Mn #   [6] GUJARATI SIGN SUKUN..GUJARATI SIGN TWO-CIRCLE NUKTA ABOVE
        [0x00afa, 0x00aff,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B55..0B56    ; Mn #   [2] ORIYA SIGN OVERLINE..ORIYA AI LENGTH MARK
        [0x00b55, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C00          ; Mn #       TELUGU SIGN COMBINING CANDRABINDU ABOVE
        [0x00c00, 0x00c00,],
        // 0C04          ; Mn #       TELUGU SIGN COMBINING ANUSVARA ABOVE
        [0x00c04, 0x00c04,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0C81          ; Mn #       KANNADA SIGN CANDRABINDU
        [0x00c81, 0x00c81,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D00..0D01    ; Mn #   [2] MALAYALAM SIGN COMBINING ANUSVARA ABOVE..MALAYALAM SIGN CANDRABINDU
        [0x00d00, 0x00d01,],
        // 0D3B..0D3C    ; Mn #   [2] MALAYALAM SIGN VERTICAL BAR VIRAMA..MALAYALAM SIGN CIRCULAR VIRAMA
        [0x00d3b, 0x00d3c,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0D81          ; Mn #       SINHALA SIGN CANDRABINDU
        [0x00d81, 0x00d81,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EBC    ; Mn #   [9] LAO VOWEL SIGN I..LAO SEMIVOWEL SIGN LO
        [0x00eb4, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1734    ; Mn #   [3] HANUNOO VOWEL SIGN I..HANUNOO SIGN PAMUDPOD
        [0x01732, 0x01734,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 1885..1886    ; Mn #   [2] MONGOLIAN LETTER ALI GALI BALUDA..MONGOLIAN LETTER ALI GALI THREE BALUDA
        [0x01885, 0x01886,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1AB0..1ABD    ; Mn #  [14] COMBINING DOUBLED CIRCUMFLEX ACCENT..COMBINING PARENTHESES BELOW
        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
        // 1ABF..1AC0    ; Mn #   [2] COMBINING LATIN SMALL LETTER W BELOW..COMBINING LATIN SMALL LETTER TURNED W BELOW
        [0x01ab0, 0x01ac0,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB..1BAD    ; Mn #   [3] SUNDANESE SIGN VIRAMA..SUNDANESE CONSONANT SIGN PASANGAN WA
        [0x01bab, 0x01bad,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1CF8..1CF9    ; Mn #   [2] VEDIC TONE RING ABOVE..VEDIC TONE DOUBLE RING ABOVE
        [0x01cf8, 0x01cf9,],
        // 1DC0..1DF9    ; Mn #  [58] COMBINING DOTTED GRAVE ACCENT..COMBINING WIDE INVERTED BRIDGE BELOW
        [0x01dc0, 0x01df9,],
        // 1DFB..1DFF    ; Mn #   [5] COMBINING DELETION MARK..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dfb, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69E..A69F    ; Mn #   [2] COMBINING CYRILLIC LETTER EF..COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69e, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A82C          ; Mn #       SYLOTI NAGRI SIGN ALTERNATE HASANTA
        [0x0a82c, 0x0a82c,],
        // A8C4..A8C5    ; Mn #   [2] SAURASHTRA SIGN VIRAMA..SAURASHTRA SIGN CANDRABINDU
        [0x0a8c4, 0x0a8c5,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A8FF          ; Mn #       DEVANAGARI VOWEL SIGN AY
        [0x0a8ff, 0x0a8ff,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC..A9BD    ; Mn #   [2] JAVANESE VOWEL SIGN PEPET..JAVANESE CONSONANT SIGN KERET
        [0x0a9bc, 0x0a9bd,],
        // A9E5          ; Mn #       MYANMAR SIGN SHAN SAW
        [0x0a9e5, 0x0a9e5,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AA7C          ; Mn #       MYANMAR SIGN TAI LAING TONE-2
        [0x0aa7c, 0x0aa7c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE2F    ; Mn #  [16] COMBINING LIGATURE LEFT HALF..COMBINING CYRILLIC TITLO RIGHT HALF
        [0x0fe20, 0x0fe2f,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 102E0         ; Mn #       COPTIC EPACT THOUSANDS MARK
        [0x102e0, 0x102e0,],
        // 10376..1037A  ; Mn #   [5] COMBINING OLD PERMIC LETTER AN..COMBINING OLD PERMIC LETTER SII
        [0x10376, 0x1037a,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 10AE5..10AE6  ; Mn #   [2] MANICHAEAN ABBREVIATION MARK ABOVE..MANICHAEAN ABBREVIATION MARK BELOW
        [0x10ae5, 0x10ae6,],
        // 10D24..10D27  ; Mn #   [4] HANIFI ROHINGYA SIGN HARBAHAY..HANIFI ROHINGYA SIGN TASSI
        [0x10d24, 0x10d27,],
        // 10EAB..10EAC  ; Mn #   [2] YEZIDI COMBINING HAMZA MARK..YEZIDI COMBINING MADDA MARK
        [0x10eab, 0x10eac,],
        // 10F46..10F50  ; Mn #  [11] SOGDIAN COMBINING DOT BELOW..SOGDIAN COMBINING STROKE BELOW
        [0x10f46, 0x10f50,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 1107F..11081  ; Mn #   [3] BRAHMI NUMBER JOINER..KAITHI SIGN ANUSVARA
        [0x1107f, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11173         ; Mn #       MAHAJANI SIGN NUKTA
        [0x11173, 0x11173,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 111C9..111CC  ; Mn #   [4] SHARADA SANDHI MARK..SHARADA EXTRA SHORT VOWEL MARK
        [0x111c9, 0x111cc,],
        // 111CF         ; Mn #       SHARADA SIGN INVERTED CANDRABINDU
        [0x111cf, 0x111cf,],
        // 1122F..11231  ; Mn #   [3] KHOJKI VOWEL SIGN U..KHOJKI VOWEL SIGN AI
        [0x1122f, 0x11231,],
        // 11234         ; Mn #       KHOJKI SIGN ANUSVARA
        [0x11234, 0x11234,],
        // 11236..11237  ; Mn #   [2] KHOJKI SIGN NUKTA..KHOJKI SIGN SHADDA
        [0x11236, 0x11237,],
        // 1123E         ; Mn #       KHOJKI SIGN SUKUN
        [0x1123e, 0x1123e,],
        // 112DF         ; Mn #       KHUDAWADI SIGN ANUSVARA
        [0x112df, 0x112df,],
        // 112E3..112EA  ; Mn #   [8] KHUDAWADI VOWEL SIGN U..KHUDAWADI SIGN VIRAMA
        [0x112e3, 0x112ea,],
        // 11300..11301  ; Mn #   [2] GRANTHA SIGN COMBINING ANUSVARA ABOVE..GRANTHA SIGN CANDRABINDU
        [0x11300, 0x11301,],
        // 1133B..1133C  ; Mn #   [2] COMBINING BINDU BELOW..GRANTHA SIGN NUKTA
        [0x1133b, 0x1133c,],
        // 11340         ; Mn #       GRANTHA VOWEL SIGN II
        [0x11340, 0x11340,],
        // 11366..1136C  ; Mn #   [7] COMBINING GRANTHA DIGIT ZERO..COMBINING GRANTHA DIGIT SIX
        [0x11366, 0x1136c,],
        // 11370..11374  ; Mn #   [5] COMBINING GRANTHA LETTER A..COMBINING GRANTHA LETTER PA
        [0x11370, 0x11374,],
        // 11438..1143F  ; Mn #   [8] NEWA VOWEL SIGN U..NEWA VOWEL SIGN AI
        [0x11438, 0x1143f,],
        // 11442..11444  ; Mn #   [3] NEWA SIGN VIRAMA..NEWA SIGN ANUSVARA
        [0x11442, 0x11444,],
        // 11446         ; Mn #       NEWA SIGN NUKTA
        [0x11446, 0x11446,],
        // 1145E         ; Mn #       NEWA SANDHI MARK
        [0x1145e, 0x1145e,],
        // 114B3..114B8  ; Mn #   [6] TIRHUTA VOWEL SIGN U..TIRHUTA VOWEL SIGN VOCALIC LL
        [0x114b3, 0x114b8,],
        // 114BA         ; Mn #       TIRHUTA VOWEL SIGN SHORT E
        [0x114ba, 0x114ba,],
        // 114BF..114C0  ; Mn #   [2] TIRHUTA SIGN CANDRABINDU..TIRHUTA SIGN ANUSVARA
        [0x114bf, 0x114c0,],
        // 114C2..114C3  ; Mn #   [2] TIRHUTA SIGN VIRAMA..TIRHUTA SIGN NUKTA
        [0x114c2, 0x114c3,],
        // 115B2..115B5  ; Mn #   [4] SIDDHAM VOWEL SIGN U..SIDDHAM VOWEL SIGN VOCALIC RR
        [0x115b2, 0x115b5,],
        // 115BC..115BD  ; Mn #   [2] SIDDHAM SIGN CANDRABINDU..SIDDHAM SIGN ANUSVARA
        [0x115bc, 0x115bd,],
        // 115BF..115C0  ; Mn #   [2] SIDDHAM SIGN VIRAMA..SIDDHAM SIGN NUKTA
        [0x115bf, 0x115c0,],
        // 115DC..115DD  ; Mn #   [2] SIDDHAM VOWEL SIGN ALTERNATE U..SIDDHAM VOWEL SIGN ALTERNATE UU
        [0x115dc, 0x115dd,],
        // 11633..1163A  ; Mn #   [8] MODI VOWEL SIGN U..MODI VOWEL SIGN AI
        [0x11633, 0x1163a,],
        // 1163D         ; Mn #       MODI SIGN ANUSVARA
        [0x1163d, 0x1163d,],
        // 1163F..11640  ; Mn #   [2] MODI SIGN VIRAMA..MODI SIGN ARDHACANDRA
        [0x1163f, 0x11640,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 1171D..1171F  ; Mn #   [3] AHOM CONSONANT SIGN MEDIAL LA..AHOM CONSONANT SIGN MEDIAL LIGATING RA
        [0x1171d, 0x1171f,],
        // 11722..11725  ; Mn #   [4] AHOM VOWEL SIGN I..AHOM VOWEL SIGN UU
        [0x11722, 0x11725,],
        // 11727..1172B  ; Mn #   [5] AHOM VOWEL SIGN AW..AHOM SIGN KILLER
        [0x11727, 0x1172b,],
        // 1182F..11837  ; Mn #   [9] DOGRA VOWEL SIGN U..DOGRA SIGN ANUSVARA
        [0x1182f, 0x11837,],
        // 11839..1183A  ; Mn #   [2] DOGRA SIGN VIRAMA..DOGRA SIGN NUKTA
        [0x11839, 0x1183a,],
        // 1193B..1193C  ; Mn #   [2] DIVES AKURU SIGN ANUSVARA..DIVES AKURU SIGN CANDRABINDU
        [0x1193b, 0x1193c,],
        // 1193E         ; Mn #       DIVES AKURU VIRAMA
        [0x1193e, 0x1193e,],
        // 11943         ; Mn #       DIVES AKURU SIGN NUKTA
        [0x11943, 0x11943,],
        // 119D4..119D7  ; Mn #   [4] NANDINAGARI VOWEL SIGN U..NANDINAGARI VOWEL SIGN VOCALIC RR
        [0x119d4, 0x119d7,],
        // 119DA..119DB  ; Mn #   [2] NANDINAGARI VOWEL SIGN E..NANDINAGARI VOWEL SIGN AI
        [0x119da, 0x119db,],
        // 119E0         ; Mn #       NANDINAGARI SIGN VIRAMA
        [0x119e0, 0x119e0,],
        // 11A01..11A0A  ; Mn #  [10] ZANABAZAR SQUARE VOWEL SIGN I..ZANABAZAR SQUARE VOWEL LENGTH MARK
        [0x11a01, 0x11a0a,],
        // 11A33..11A38  ; Mn #   [6] ZANABAZAR SQUARE FINAL CONSONANT MARK..ZANABAZAR SQUARE SIGN ANUSVARA
        [0x11a33, 0x11a38,],
        // 11A3B..11A3E  ; Mn #   [4] ZANABAZAR SQUARE CLUSTER-FINAL LETTER YA..ZANABAZAR SQUARE CLUSTER-FINAL LETTER VA
        [0x11a3b, 0x11a3e,],
        // 11A47         ; Mn #       ZANABAZAR SQUARE SUBJOINER
        [0x11a47, 0x11a47,],
        // 11A51..11A56  ; Mn #   [6] SOYOMBO VOWEL SIGN I..SOYOMBO VOWEL SIGN OE
        [0x11a51, 0x11a56,],
        // 11A59..11A5B  ; Mn #   [3] SOYOMBO VOWEL SIGN VOCALIC R..SOYOMBO VOWEL LENGTH MARK
        [0x11a59, 0x11a5b,],
        // 11A8A..11A96  ; Mn #  [13] SOYOMBO FINAL CONSONANT SIGN G..SOYOMBO SIGN ANUSVARA
        [0x11a8a, 0x11a96,],
        // 11A98..11A99  ; Mn #   [2] SOYOMBO GEMINATION MARK..SOYOMBO SUBJOINER
        [0x11a98, 0x11a99,],
        // 11C30..11C36  ; Mn #   [7] BHAIKSUKI VOWEL SIGN I..BHAIKSUKI VOWEL SIGN VOCALIC L
        [0x11c30, 0x11c36,],
        // 11C38..11C3D  ; Mn #   [6] BHAIKSUKI VOWEL SIGN E..BHAIKSUKI SIGN ANUSVARA
        [0x11c38, 0x11c3d,],
        // 11C3F         ; Mn #       BHAIKSUKI SIGN VIRAMA
        [0x11c3f, 0x11c3f,],
        // 11C92..11CA7  ; Mn #  [22] MARCHEN SUBJOINED LETTER KA..MARCHEN SUBJOINED LETTER ZA
        [0x11c92, 0x11ca7,],
        // 11CAA..11CB0  ; Mn #   [7] MARCHEN SUBJOINED LETTER RA..MARCHEN VOWEL SIGN AA
        [0x11caa, 0x11cb0,],
        // 11CB2..11CB3  ; Mn #   [2] MARCHEN VOWEL SIGN U..MARCHEN VOWEL SIGN E
        [0x11cb2, 0x11cb3,],
        // 11CB5..11CB6  ; Mn #   [2] MARCHEN SIGN ANUSVARA..MARCHEN SIGN CANDRABINDU
        [0x11cb5, 0x11cb6,],
        // 11D31..11D36  ; Mn #   [6] MASARAM GONDI VOWEL SIGN AA..MASARAM GONDI VOWEL SIGN VOCALIC R
        [0x11d31, 0x11d36,],
        // 11D3A         ; Mn #       MASARAM GONDI VOWEL SIGN E
        [0x11d3a, 0x11d3a,],
        // 11D3C..11D3D  ; Mn #   [2] MASARAM GONDI VOWEL SIGN AI..MASARAM GONDI VOWEL SIGN O
        [0x11d3c, 0x11d3d,],
        // 11D3F..11D45  ; Mn #   [7] MASARAM GONDI VOWEL SIGN AU..MASARAM GONDI VIRAMA
        [0x11d3f, 0x11d45,],
        // 11D47         ; Mn #       MASARAM GONDI RA-KARA
        [0x11d47, 0x11d47,],
        // 11D90..11D91  ; Mn #   [2] GUNJALA GONDI VOWEL SIGN EE..GUNJALA GONDI VOWEL SIGN AI
        [0x11d90, 0x11d91,],
        // 11D95         ; Mn #       GUNJALA GONDI SIGN ANUSVARA
        [0x11d95, 0x11d95,],
        // 11D97         ; Mn #       GUNJALA GONDI VIRAMA
        [0x11d97, 0x11d97,],
        // 11EF3..11EF4  ; Mn #   [2] MAKASAR VOWEL SIGN I..MAKASAR VOWEL SIGN U
        [0x11ef3, 0x11ef4,],
        // 16AF0..16AF4  ; Mn #   [5] BASSA VAH COMBINING HIGH TONE..BASSA VAH COMBINING HIGH-LOW TONE
        [0x16af0, 0x16af4,],
        // 16B30..16B36  ; Mn #   [7] PAHAWH HMONG MARK CIM TUB..PAHAWH HMONG MARK CIM TAUM
        [0x16b30, 0x16b36,],
        // 16F4F         ; Mn #       MIAO SIGN CONSONANT MODIFIER BAR
        [0x16f4f, 0x16f4f,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 16FE4         ; Mn #       KHITAN SMALL SCRIPT FILLER
        [0x16fe4, 0x16fe4,],
        // 1BC9D..1BC9E  ; Mn #   [2] DUPLOYAN THICK LETTER SELECTOR..DUPLOYAN DOUBLE MARK
        [0x1bc9d, 0x1bc9e,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // 1DA00..1DA36  ; Mn #  [55] SIGNWRITING HEAD RIM..SIGNWRITING AIR SUCKING IN
        [0x1da00, 0x1da36,],
        // 1DA3B..1DA6C  ; Mn #  [50] SIGNWRITING MOUTH CLOSED NEUTRAL..SIGNWRITING EXCITEMENT
        [0x1da3b, 0x1da6c,],
        // 1DA75         ; Mn #       SIGNWRITING UPPER BODY TILTING FROM HIP JOINTS
        [0x1da75, 0x1da75,],
        // 1DA84         ; Mn #       SIGNWRITING LOCATION HEAD NECK
        [0x1da84, 0x1da84,],
        // 1DA9B..1DA9F  ; Mn #   [5] SIGNWRITING FILL MODIFIER-2..SIGNWRITING FILL MODIFIER-6
        [0x1da9b, 0x1da9f,],
        // 1DAA1..1DAAF  ; Mn #  [15] SIGNWRITING ROTATION MODIFIER-2..SIGNWRITING ROTATION MODIFIER-16
        [0x1daa1, 0x1daaf,],
        // 1E000..1E006  ; Mn #   [7] COMBINING GLAGOLITIC LETTER AZU..COMBINING GLAGOLITIC LETTER ZHIVETE
        [0x1e000, 0x1e006,],
        // 1E008..1E018  ; Mn #  [17] COMBINING GLAGOLITIC LETTER ZEMLJA..COMBINING GLAGOLITIC LETTER HERU
        [0x1e008, 0x1e018,],
        // 1E01B..1E021  ; Mn #   [7] COMBINING GLAGOLITIC LETTER SHTA..COMBINING GLAGOLITIC LETTER YATI
        [0x1e01b, 0x1e021,],
        // 1E023..1E024  ; Mn #   [2] COMBINING GLAGOLITIC LETTER YU..COMBINING GLAGOLITIC LETTER SMALL YUS
        [0x1e023, 0x1e024,],
        // 1E026..1E02A  ; Mn #   [5] COMBINING GLAGOLITIC LETTER YO..COMBINING GLAGOLITIC LETTER FITA
        [0x1e026, 0x1e02a,],
        // 1E130..1E136  ; Mn #   [7] NYIAKENG PUACHUE HMONG TONE-B..NYIAKENG PUACHUE HMONG TONE-D
        [0x1e130, 0x1e136,],
        // 1E2EC..1E2EF  ; Mn #   [4] WANCHO TONE TUP..WANCHO TONE KOINI
        [0x1e2ec, 0x1e2ef,],
        // 1E8D0..1E8D6  ; Mn #   [7] MENDE KIKAKUI COMBINING NUMBER TEENS..MENDE KIKAKUI COMBINING NUMBER MILLIONS
        [0x1e8d0, 0x1e8d6,],
        // 1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA
        [0x1e944, 0x1e94a,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '14.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 07FD          ; Mn #       NKO DANTAYALAN
        [0x007fd, 0x007fd,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 0898..089F    ; Mn #   [8] ARABIC SMALL HIGH WORD AL-JUZ..ARABIC HALF MADDA OVER MADDA
        [0x00898, 0x0089f,],
        // 08CA..08E1    ; Mn #  [24] ARABIC SMALL HIGH FARSI YEH..ARABIC SMALL HIGH SIGN SAFHA
        [0x008ca, 0x008e1,],
        // 08E3..0902    ; Mn #  [32] ARABIC TURNED DAMMA BELOW..DEVANAGARI SIGN ANUSVARA
        [0x008e3, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 09FE          ; Mn #       BENGALI SANDHI MARK
        [0x009fe, 0x009fe,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0AFA..0AFF    ; Mn #   [6] GUJARATI SIGN SUKUN..GUJARATI SIGN TWO-CIRCLE NUKTA ABOVE
        [0x00afa, 0x00aff,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B55..0B56    ; Mn #   [2] ORIYA SIGN OVERLINE..ORIYA AI LENGTH MARK
        [0x00b55, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C00          ; Mn #       TELUGU SIGN COMBINING CANDRABINDU ABOVE
        [0x00c00, 0x00c00,],
        // 0C04          ; Mn #       TELUGU SIGN COMBINING ANUSVARA ABOVE
        [0x00c04, 0x00c04,],
        // 0C3C          ; Mn #       TELUGU SIGN NUKTA
        [0x00c3c, 0x00c3c,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0C81          ; Mn #       KANNADA SIGN CANDRABINDU
        [0x00c81, 0x00c81,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D00..0D01    ; Mn #   [2] MALAYALAM SIGN COMBINING ANUSVARA ABOVE..MALAYALAM SIGN CANDRABINDU
        [0x00d00, 0x00d01,],
        // 0D3B..0D3C    ; Mn #   [2] MALAYALAM SIGN VERTICAL BAR VIRAMA..MALAYALAM SIGN CIRCULAR VIRAMA
        [0x00d3b, 0x00d3c,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0D81          ; Mn #       SINHALA SIGN CANDRABINDU
        [0x00d81, 0x00d81,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EBC    ; Mn #   [9] LAO VOWEL SIGN I..LAO SEMIVOWEL SIGN LO
        [0x00eb4, 0x00ebc,],
        // 0EC8..0ECD    ; Mn #   [6] LAO TONE MAI EK..LAO NIGGAHITA
        [0x00ec8, 0x00ecd,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1733    ; Mn #   [2] HANUNOO VOWEL SIGN I..HANUNOO VOWEL SIGN U
        [0x01732, 0x01733,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 180F          ; Mn #       MONGOLIAN FREE VARIATION SELECTOR FOUR
        [0x0180f, 0x0180f,],
        // 1885..1886    ; Mn #   [2] MONGOLIAN LETTER ALI GALI BALUDA..MONGOLIAN LETTER ALI GALI THREE BALUDA
        [0x01885, 0x01886,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1AB0..1ABD    ; Mn #  [14] COMBINING DOUBLED CIRCUMFLEX ACCENT..COMBINING PARENTHESES BELOW
        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
        // 1ABF..1ACE    ; Mn #  [16] COMBINING LATIN SMALL LETTER W BELOW..COMBINING LATIN SMALL LETTER INSULAR T
        [0x01ab0, 0x01ace,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB..1BAD    ; Mn #   [3] SUNDANESE SIGN VIRAMA..SUNDANESE CONSONANT SIGN PASANGAN WA
        [0x01bab, 0x01bad,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1CF8..1CF9    ; Mn #   [2] VEDIC TONE RING ABOVE..VEDIC TONE DOUBLE RING ABOVE
        [0x01cf8, 0x01cf9,],
        // 1DC0..1DFF    ; Mn #  [64] COMBINING DOTTED GRAVE ACCENT..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dc0, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69E..A69F    ; Mn #   [2] COMBINING CYRILLIC LETTER EF..COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69e, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A82C          ; Mn #       SYLOTI NAGRI SIGN ALTERNATE HASANTA
        [0x0a82c, 0x0a82c,],
        // A8C4..A8C5    ; Mn #   [2] SAURASHTRA SIGN VIRAMA..SAURASHTRA SIGN CANDRABINDU
        [0x0a8c4, 0x0a8c5,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A8FF          ; Mn #       DEVANAGARI VOWEL SIGN AY
        [0x0a8ff, 0x0a8ff,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC..A9BD    ; Mn #   [2] JAVANESE VOWEL SIGN PEPET..JAVANESE CONSONANT SIGN KERET
        [0x0a9bc, 0x0a9bd,],
        // A9E5          ; Mn #       MYANMAR SIGN SHAN SAW
        [0x0a9e5, 0x0a9e5,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AA7C          ; Mn #       MYANMAR SIGN TAI LAING TONE-2
        [0x0aa7c, 0x0aa7c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE2F    ; Mn #  [16] COMBINING LIGATURE LEFT HALF..COMBINING CYRILLIC TITLO RIGHT HALF
        [0x0fe20, 0x0fe2f,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 102E0         ; Mn #       COPTIC EPACT THOUSANDS MARK
        [0x102e0, 0x102e0,],
        // 10376..1037A  ; Mn #   [5] COMBINING OLD PERMIC LETTER AN..COMBINING OLD PERMIC LETTER SII
        [0x10376, 0x1037a,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 10AE5..10AE6  ; Mn #   [2] MANICHAEAN ABBREVIATION MARK ABOVE..MANICHAEAN ABBREVIATION MARK BELOW
        [0x10ae5, 0x10ae6,],
        // 10D24..10D27  ; Mn #   [4] HANIFI ROHINGYA SIGN HARBAHAY..HANIFI ROHINGYA SIGN TASSI
        [0x10d24, 0x10d27,],
        // 10EAB..10EAC  ; Mn #   [2] YEZIDI COMBINING HAMZA MARK..YEZIDI COMBINING MADDA MARK
        [0x10eab, 0x10eac,],
        // 10F46..10F50  ; Mn #  [11] SOGDIAN COMBINING DOT BELOW..SOGDIAN COMBINING STROKE BELOW
        [0x10f46, 0x10f50,],
        // 10F82..10F85  ; Mn #   [4] OLD UYGHUR COMBINING DOT ABOVE..OLD UYGHUR COMBINING TWO DOTS BELOW
        [0x10f82, 0x10f85,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 11070         ; Mn #       BRAHMI SIGN OLD TAMIL VIRAMA
        [0x11070, 0x11070,],
        // 11073..11074  ; Mn #   [2] BRAHMI VOWEL SIGN OLD TAMIL SHORT E..BRAHMI VOWEL SIGN OLD TAMIL SHORT O
        [0x11073, 0x11074,],
        // 1107F..11081  ; Mn #   [3] BRAHMI NUMBER JOINER..KAITHI SIGN ANUSVARA
        [0x1107f, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 110C2         ; Mn #       KAITHI VOWEL SIGN VOCALIC R
        [0x110c2, 0x110c2,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11173         ; Mn #       MAHAJANI SIGN NUKTA
        [0x11173, 0x11173,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 111C9..111CC  ; Mn #   [4] SHARADA SANDHI MARK..SHARADA EXTRA SHORT VOWEL MARK
        [0x111c9, 0x111cc,],
        // 111CF         ; Mn #       SHARADA SIGN INVERTED CANDRABINDU
        [0x111cf, 0x111cf,],
        // 1122F..11231  ; Mn #   [3] KHOJKI VOWEL SIGN U..KHOJKI VOWEL SIGN AI
        [0x1122f, 0x11231,],
        // 11234         ; Mn #       KHOJKI SIGN ANUSVARA
        [0x11234, 0x11234,],
        // 11236..11237  ; Mn #   [2] KHOJKI SIGN NUKTA..KHOJKI SIGN SHADDA
        [0x11236, 0x11237,],
        // 1123E         ; Mn #       KHOJKI SIGN SUKUN
        [0x1123e, 0x1123e,],
        // 112DF         ; Mn #       KHUDAWADI SIGN ANUSVARA
        [0x112df, 0x112df,],
        // 112E3..112EA  ; Mn #   [8] KHUDAWADI VOWEL SIGN U..KHUDAWADI SIGN VIRAMA
        [0x112e3, 0x112ea,],
        // 11300..11301  ; Mn #   [2] GRANTHA SIGN COMBINING ANUSVARA ABOVE..GRANTHA SIGN CANDRABINDU
        [0x11300, 0x11301,],
        // 1133B..1133C  ; Mn #   [2] COMBINING BINDU BELOW..GRANTHA SIGN NUKTA
        [0x1133b, 0x1133c,],
        // 11340         ; Mn #       GRANTHA VOWEL SIGN II
        [0x11340, 0x11340,],
        // 11366..1136C  ; Mn #   [7] COMBINING GRANTHA DIGIT ZERO..COMBINING GRANTHA DIGIT SIX
        [0x11366, 0x1136c,],
        // 11370..11374  ; Mn #   [5] COMBINING GRANTHA LETTER A..COMBINING GRANTHA LETTER PA
        [0x11370, 0x11374,],
        // 11438..1143F  ; Mn #   [8] NEWA VOWEL SIGN U..NEWA VOWEL SIGN AI
        [0x11438, 0x1143f,],
        // 11442..11444  ; Mn #   [3] NEWA SIGN VIRAMA..NEWA SIGN ANUSVARA
        [0x11442, 0x11444,],
        // 11446         ; Mn #       NEWA SIGN NUKTA
        [0x11446, 0x11446,],
        // 1145E         ; Mn #       NEWA SANDHI MARK
        [0x1145e, 0x1145e,],
        // 114B3..114B8  ; Mn #   [6] TIRHUTA VOWEL SIGN U..TIRHUTA VOWEL SIGN VOCALIC LL
        [0x114b3, 0x114b8,],
        // 114BA         ; Mn #       TIRHUTA VOWEL SIGN SHORT E
        [0x114ba, 0x114ba,],
        // 114BF..114C0  ; Mn #   [2] TIRHUTA SIGN CANDRABINDU..TIRHUTA SIGN ANUSVARA
        [0x114bf, 0x114c0,],
        // 114C2..114C3  ; Mn #   [2] TIRHUTA SIGN VIRAMA..TIRHUTA SIGN NUKTA
        [0x114c2, 0x114c3,],
        // 115B2..115B5  ; Mn #   [4] SIDDHAM VOWEL SIGN U..SIDDHAM VOWEL SIGN VOCALIC RR
        [0x115b2, 0x115b5,],
        // 115BC..115BD  ; Mn #   [2] SIDDHAM SIGN CANDRABINDU..SIDDHAM SIGN ANUSVARA
        [0x115bc, 0x115bd,],
        // 115BF..115C0  ; Mn #   [2] SIDDHAM SIGN VIRAMA..SIDDHAM SIGN NUKTA
        [0x115bf, 0x115c0,],
        // 115DC..115DD  ; Mn #   [2] SIDDHAM VOWEL SIGN ALTERNATE U..SIDDHAM VOWEL SIGN ALTERNATE UU
        [0x115dc, 0x115dd,],
        // 11633..1163A  ; Mn #   [8] MODI VOWEL SIGN U..MODI VOWEL SIGN AI
        [0x11633, 0x1163a,],
        // 1163D         ; Mn #       MODI SIGN ANUSVARA
        [0x1163d, 0x1163d,],
        // 1163F..11640  ; Mn #   [2] MODI SIGN VIRAMA..MODI SIGN ARDHACANDRA
        [0x1163f, 0x11640,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 1171D..1171F  ; Mn #   [3] AHOM CONSONANT SIGN MEDIAL LA..AHOM CONSONANT SIGN MEDIAL LIGATING RA
        [0x1171d, 0x1171f,],
        // 11722..11725  ; Mn #   [4] AHOM VOWEL SIGN I..AHOM VOWEL SIGN UU
        [0x11722, 0x11725,],
        // 11727..1172B  ; Mn #   [5] AHOM VOWEL SIGN AW..AHOM SIGN KILLER
        [0x11727, 0x1172b,],
        // 1182F..11837  ; Mn #   [9] DOGRA VOWEL SIGN U..DOGRA SIGN ANUSVARA
        [0x1182f, 0x11837,],
        // 11839..1183A  ; Mn #   [2] DOGRA SIGN VIRAMA..DOGRA SIGN NUKTA
        [0x11839, 0x1183a,],
        // 1193B..1193C  ; Mn #   [2] DIVES AKURU SIGN ANUSVARA..DIVES AKURU SIGN CANDRABINDU
        [0x1193b, 0x1193c,],
        // 1193E         ; Mn #       DIVES AKURU VIRAMA
        [0x1193e, 0x1193e,],
        // 11943         ; Mn #       DIVES AKURU SIGN NUKTA
        [0x11943, 0x11943,],
        // 119D4..119D7  ; Mn #   [4] NANDINAGARI VOWEL SIGN U..NANDINAGARI VOWEL SIGN VOCALIC RR
        [0x119d4, 0x119d7,],
        // 119DA..119DB  ; Mn #   [2] NANDINAGARI VOWEL SIGN E..NANDINAGARI VOWEL SIGN AI
        [0x119da, 0x119db,],
        // 119E0         ; Mn #       NANDINAGARI SIGN VIRAMA
        [0x119e0, 0x119e0,],
        // 11A01..11A0A  ; Mn #  [10] ZANABAZAR SQUARE VOWEL SIGN I..ZANABAZAR SQUARE VOWEL LENGTH MARK
        [0x11a01, 0x11a0a,],
        // 11A33..11A38  ; Mn #   [6] ZANABAZAR SQUARE FINAL CONSONANT MARK..ZANABAZAR SQUARE SIGN ANUSVARA
        [0x11a33, 0x11a38,],
        // 11A3B..11A3E  ; Mn #   [4] ZANABAZAR SQUARE CLUSTER-FINAL LETTER YA..ZANABAZAR SQUARE CLUSTER-FINAL LETTER VA
        [0x11a3b, 0x11a3e,],
        // 11A47         ; Mn #       ZANABAZAR SQUARE SUBJOINER
        [0x11a47, 0x11a47,],
        // 11A51..11A56  ; Mn #   [6] SOYOMBO VOWEL SIGN I..SOYOMBO VOWEL SIGN OE
        [0x11a51, 0x11a56,],
        // 11A59..11A5B  ; Mn #   [3] SOYOMBO VOWEL SIGN VOCALIC R..SOYOMBO VOWEL LENGTH MARK
        [0x11a59, 0x11a5b,],
        // 11A8A..11A96  ; Mn #  [13] SOYOMBO FINAL CONSONANT SIGN G..SOYOMBO SIGN ANUSVARA
        [0x11a8a, 0x11a96,],
        // 11A98..11A99  ; Mn #   [2] SOYOMBO GEMINATION MARK..SOYOMBO SUBJOINER
        [0x11a98, 0x11a99,],
        // 11C30..11C36  ; Mn #   [7] BHAIKSUKI VOWEL SIGN I..BHAIKSUKI VOWEL SIGN VOCALIC L
        [0x11c30, 0x11c36,],
        // 11C38..11C3D  ; Mn #   [6] BHAIKSUKI VOWEL SIGN E..BHAIKSUKI SIGN ANUSVARA
        [0x11c38, 0x11c3d,],
        // 11C3F         ; Mn #       BHAIKSUKI SIGN VIRAMA
        [0x11c3f, 0x11c3f,],
        // 11C92..11CA7  ; Mn #  [22] MARCHEN SUBJOINED LETTER KA..MARCHEN SUBJOINED LETTER ZA
        [0x11c92, 0x11ca7,],
        // 11CAA..11CB0  ; Mn #   [7] MARCHEN SUBJOINED LETTER RA..MARCHEN VOWEL SIGN AA
        [0x11caa, 0x11cb0,],
        // 11CB2..11CB3  ; Mn #   [2] MARCHEN VOWEL SIGN U..MARCHEN VOWEL SIGN E
        [0x11cb2, 0x11cb3,],
        // 11CB5..11CB6  ; Mn #   [2] MARCHEN SIGN ANUSVARA..MARCHEN SIGN CANDRABINDU
        [0x11cb5, 0x11cb6,],
        // 11D31..11D36  ; Mn #   [6] MASARAM GONDI VOWEL SIGN AA..MASARAM GONDI VOWEL SIGN VOCALIC R
        [0x11d31, 0x11d36,],
        // 11D3A         ; Mn #       MASARAM GONDI VOWEL SIGN E
        [0x11d3a, 0x11d3a,],
        // 11D3C..11D3D  ; Mn #   [2] MASARAM GONDI VOWEL SIGN AI..MASARAM GONDI VOWEL SIGN O
        [0x11d3c, 0x11d3d,],
        // 11D3F..11D45  ; Mn #   [7] MASARAM GONDI VOWEL SIGN AU..MASARAM GONDI VIRAMA
        [0x11d3f, 0x11d45,],
        // 11D47         ; Mn #       MASARAM GONDI RA-KARA
        [0x11d47, 0x11d47,],
        // 11D90..11D91  ; Mn #   [2] GUNJALA GONDI VOWEL SIGN EE..GUNJALA GONDI VOWEL SIGN AI
        [0x11d90, 0x11d91,],
        // 11D95         ; Mn #       GUNJALA GONDI SIGN ANUSVARA
        [0x11d95, 0x11d95,],
        // 11D97         ; Mn #       GUNJALA GONDI VIRAMA
        [0x11d97, 0x11d97,],
        // 11EF3..11EF4  ; Mn #   [2] MAKASAR VOWEL SIGN I..MAKASAR VOWEL SIGN U
        [0x11ef3, 0x11ef4,],
        // 16AF0..16AF4  ; Mn #   [5] BASSA VAH COMBINING HIGH TONE..BASSA VAH COMBINING HIGH-LOW TONE
        [0x16af0, 0x16af4,],
        // 16B30..16B36  ; Mn #   [7] PAHAWH HMONG MARK CIM TUB..PAHAWH HMONG MARK CIM TAUM
        [0x16b30, 0x16b36,],
        // 16F4F         ; Mn #       MIAO SIGN CONSONANT MODIFIER BAR
        [0x16f4f, 0x16f4f,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 16FE4         ; Mn #       KHITAN SMALL SCRIPT FILLER
        [0x16fe4, 0x16fe4,],
        // 1BC9D..1BC9E  ; Mn #   [2] DUPLOYAN THICK LETTER SELECTOR..DUPLOYAN DOUBLE MARK
        [0x1bc9d, 0x1bc9e,],
        // 1CF00..1CF2D  ; Mn #  [46] ZNAMENNY COMBINING MARK GORAZDO NIZKO S KRYZHEM ON LEFT..ZNAMENNY COMBINING MARK KRYZH ON LEFT
        [0x1cf00, 0x1cf2d,],
        // 1CF30..1CF46  ; Mn #  [23] ZNAMENNY COMBINING TONAL RANGE MARK MRACHNO..ZNAMENNY PRIZNAK MODIFIER ROG
        [0x1cf30, 0x1cf46,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // 1DA00..1DA36  ; Mn #  [55] SIGNWRITING HEAD RIM..SIGNWRITING AIR SUCKING IN
        [0x1da00, 0x1da36,],
        // 1DA3B..1DA6C  ; Mn #  [50] SIGNWRITING MOUTH CLOSED NEUTRAL..SIGNWRITING EXCITEMENT
        [0x1da3b, 0x1da6c,],
        // 1DA75         ; Mn #       SIGNWRITING UPPER BODY TILTING FROM HIP JOINTS
        [0x1da75, 0x1da75,],
        // 1DA84         ; Mn #       SIGNWRITING LOCATION HEAD NECK
        [0x1da84, 0x1da84,],
        // 1DA9B..1DA9F  ; Mn #   [5] SIGNWRITING FILL MODIFIER-2..SIGNWRITING FILL MODIFIER-6
        [0x1da9b, 0x1da9f,],
        // 1DAA1..1DAAF  ; Mn #  [15] SIGNWRITING ROTATION MODIFIER-2..SIGNWRITING ROTATION MODIFIER-16
        [0x1daa1, 0x1daaf,],
        // 1E000..1E006  ; Mn #   [7] COMBINING GLAGOLITIC LETTER AZU..COMBINING GLAGOLITIC LETTER ZHIVETE
        [0x1e000, 0x1e006,],
        // 1E008..1E018  ; Mn #  [17] COMBINING GLAGOLITIC LETTER ZEMLJA..COMBINING GLAGOLITIC LETTER HERU
        [0x1e008, 0x1e018,],
        // 1E01B..1E021  ; Mn #   [7] COMBINING GLAGOLITIC LETTER SHTA..COMBINING GLAGOLITIC LETTER YATI
        [0x1e01b, 0x1e021,],
        // 1E023..1E024  ; Mn #   [2] COMBINING GLAGOLITIC LETTER YU..COMBINING GLAGOLITIC LETTER SMALL YUS
        [0x1e023, 0x1e024,],
        // 1E026..1E02A  ; Mn #   [5] COMBINING GLAGOLITIC LETTER YO..COMBINING GLAGOLITIC LETTER FITA
        [0x1e026, 0x1e02a,],
        // 1E130..1E136  ; Mn #   [7] NYIAKENG PUACHUE HMONG TONE-B..NYIAKENG PUACHUE HMONG TONE-D
        [0x1e130, 0x1e136,],
        // 1E2AE         ; Mn #       TOTO SIGN RISING TONE
        [0x1e2ae, 0x1e2ae,],
        // 1E2EC..1E2EF  ; Mn #   [4] WANCHO TONE TUP..WANCHO TONE KOINI
        [0x1e2ec, 0x1e2ef,],
        // 1E8D0..1E8D6  ; Mn #   [7] MENDE KIKAKUI COMBINING NUMBER TEENS..MENDE KIKAKUI COMBINING NUMBER MILLIONS
        [0x1e8d0, 0x1e8d6,],
        // 1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA
        [0x1e944, 0x1e94a,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
    '15.0.0' => [
        // 0300..036F    ; Mn # [112] COMBINING GRAVE ACCENT..COMBINING LATIN SMALL LETTER X
        [0x00300, 0x0036f,],
        // 0483..0487    ; Mn #   [5] COMBINING CYRILLIC TITLO..COMBINING CYRILLIC POKRYTIE
        // 0488..0489    ; Me #   [2] COMBINING CYRILLIC HUNDRED THOUSANDS SIGN..COMBINING CYRILLIC MILLIONS SIGN
        [0x00483, 0x00489,],
        // 0591..05BD    ; Mn #  [45] HEBREW ACCENT ETNAHTA..HEBREW POINT METEG
        [0x00591, 0x005bd,],
        // 05BF          ; Mn #       HEBREW POINT RAFE
        [0x005bf, 0x005bf,],
        // 05C1..05C2    ; Mn #   [2] HEBREW POINT SHIN DOT..HEBREW POINT SIN DOT
        [0x005c1, 0x005c2,],
        // 05C4..05C5    ; Mn #   [2] HEBREW MARK UPPER DOT..HEBREW MARK LOWER DOT
        [0x005c4, 0x005c5,],
        // 05C7          ; Mn #       HEBREW POINT QAMATS QATAN
        [0x005c7, 0x005c7,],
        // 0610..061A    ; Mn #  [11] ARABIC SIGN SALLALLAHOU ALAYHE WASSALLAM..ARABIC SMALL KASRA
        [0x00610, 0x0061a,],
        // 064B..065F    ; Mn #  [21] ARABIC FATHATAN..ARABIC WAVY HAMZA BELOW
        [0x0064b, 0x0065f,],
        // 0670          ; Mn #       ARABIC LETTER SUPERSCRIPT ALEF
        [0x00670, 0x00670,],
        // 06D6..06DC    ; Mn #   [7] ARABIC SMALL HIGH LIGATURE SAD WITH LAM WITH ALEF MAKSURA..ARABIC SMALL HIGH SEEN
        [0x006d6, 0x006dc,],
        // 06DF..06E4    ; Mn #   [6] ARABIC SMALL HIGH ROUNDED ZERO..ARABIC SMALL HIGH MADDA
        [0x006df, 0x006e4,],
        // 06E7..06E8    ; Mn #   [2] ARABIC SMALL HIGH YEH..ARABIC SMALL HIGH NOON
        [0x006e7, 0x006e8,],
        // 06EA..06ED    ; Mn #   [4] ARABIC EMPTY CENTRE LOW STOP..ARABIC SMALL LOW MEEM
        [0x006ea, 0x006ed,],
        // 0711          ; Mn #       SYRIAC LETTER SUPERSCRIPT ALAPH
        [0x00711, 0x00711,],
        // 0730..074A    ; Mn #  [27] SYRIAC PTHAHA ABOVE..SYRIAC BARREKH
        [0x00730, 0x0074a,],
        // 07A6..07B0    ; Mn #  [11] THAANA ABAFILI..THAANA SUKUN
        [0x007a6, 0x007b0,],
        // 07EB..07F3    ; Mn #   [9] NKO COMBINING SHORT HIGH TONE..NKO COMBINING DOUBLE DOT ABOVE
        [0x007eb, 0x007f3,],
        // 07FD          ; Mn #       NKO DANTAYALAN
        [0x007fd, 0x007fd,],
        // 0816..0819    ; Mn #   [4] SAMARITAN MARK IN..SAMARITAN MARK DAGESH
        [0x00816, 0x00819,],
        // 081B..0823    ; Mn #   [9] SAMARITAN MARK EPENTHETIC YUT..SAMARITAN VOWEL SIGN A
        [0x0081b, 0x00823,],
        // 0825..0827    ; Mn #   [3] SAMARITAN VOWEL SIGN SHORT A..SAMARITAN VOWEL SIGN U
        [0x00825, 0x00827,],
        // 0829..082D    ; Mn #   [5] SAMARITAN VOWEL SIGN LONG I..SAMARITAN MARK NEQUDAA
        [0x00829, 0x0082d,],
        // 0859..085B    ; Mn #   [3] MANDAIC AFFRICATION MARK..MANDAIC GEMINATION MARK
        [0x00859, 0x0085b,],
        // 0898..089F    ; Mn #   [8] ARABIC SMALL HIGH WORD AL-JUZ..ARABIC HALF MADDA OVER MADDA
        [0x00898, 0x0089f,],
        // 08CA..08E1    ; Mn #  [24] ARABIC SMALL HIGH FARSI YEH..ARABIC SMALL HIGH SIGN SAFHA
        [0x008ca, 0x008e1,],
        // 08E3..0902    ; Mn #  [32] ARABIC TURNED DAMMA BELOW..DEVANAGARI SIGN ANUSVARA
        [0x008e3, 0x00902,],
        // 093A          ; Mn #       DEVANAGARI VOWEL SIGN OE
        [0x0093a, 0x0093a,],
        // 093C          ; Mn #       DEVANAGARI SIGN NUKTA
        [0x0093c, 0x0093c,],
        // 0941..0948    ; Mn #   [8] DEVANAGARI VOWEL SIGN U..DEVANAGARI VOWEL SIGN AI
        [0x00941, 0x00948,],
        // 094D          ; Mn #       DEVANAGARI SIGN VIRAMA
        [0x0094d, 0x0094d,],
        // 0951..0957    ; Mn #   [7] DEVANAGARI STRESS SIGN UDATTA..DEVANAGARI VOWEL SIGN UUE
        [0x00951, 0x00957,],
        // 0962..0963    ; Mn #   [2] DEVANAGARI VOWEL SIGN VOCALIC L..DEVANAGARI VOWEL SIGN VOCALIC LL
        [0x00962, 0x00963,],
        // 0981          ; Mn #       BENGALI SIGN CANDRABINDU
        [0x00981, 0x00981,],
        // 09BC          ; Mn #       BENGALI SIGN NUKTA
        [0x009bc, 0x009bc,],
        // 09C1..09C4    ; Mn #   [4] BENGALI VOWEL SIGN U..BENGALI VOWEL SIGN VOCALIC RR
        [0x009c1, 0x009c4,],
        // 09CD          ; Mn #       BENGALI SIGN VIRAMA
        [0x009cd, 0x009cd,],
        // 09E2..09E3    ; Mn #   [2] BENGALI VOWEL SIGN VOCALIC L..BENGALI VOWEL SIGN VOCALIC LL
        [0x009e2, 0x009e3,],
        // 09FE          ; Mn #       BENGALI SANDHI MARK
        [0x009fe, 0x009fe,],
        // 0A01..0A02    ; Mn #   [2] GURMUKHI SIGN ADAK BINDI..GURMUKHI SIGN BINDI
        [0x00a01, 0x00a02,],
        // 0A3C          ; Mn #       GURMUKHI SIGN NUKTA
        [0x00a3c, 0x00a3c,],
        // 0A41..0A42    ; Mn #   [2] GURMUKHI VOWEL SIGN U..GURMUKHI VOWEL SIGN UU
        [0x00a41, 0x00a42,],
        // 0A47..0A48    ; Mn #   [2] GURMUKHI VOWEL SIGN EE..GURMUKHI VOWEL SIGN AI
        [0x00a47, 0x00a48,],
        // 0A4B..0A4D    ; Mn #   [3] GURMUKHI VOWEL SIGN OO..GURMUKHI SIGN VIRAMA
        [0x00a4b, 0x00a4d,],
        // 0A51          ; Mn #       GURMUKHI SIGN UDAAT
        [0x00a51, 0x00a51,],
        // 0A70..0A71    ; Mn #   [2] GURMUKHI TIPPI..GURMUKHI ADDAK
        [0x00a70, 0x00a71,],
        // 0A75          ; Mn #       GURMUKHI SIGN YAKASH
        [0x00a75, 0x00a75,],
        // 0A81..0A82    ; Mn #   [2] GUJARATI SIGN CANDRABINDU..GUJARATI SIGN ANUSVARA
        [0x00a81, 0x00a82,],
        // 0ABC          ; Mn #       GUJARATI SIGN NUKTA
        [0x00abc, 0x00abc,],
        // 0AC1..0AC5    ; Mn #   [5] GUJARATI VOWEL SIGN U..GUJARATI VOWEL SIGN CANDRA E
        [0x00ac1, 0x00ac5,],
        // 0AC7..0AC8    ; Mn #   [2] GUJARATI VOWEL SIGN E..GUJARATI VOWEL SIGN AI
        [0x00ac7, 0x00ac8,],
        // 0ACD          ; Mn #       GUJARATI SIGN VIRAMA
        [0x00acd, 0x00acd,],
        // 0AE2..0AE3    ; Mn #   [2] GUJARATI VOWEL SIGN VOCALIC L..GUJARATI VOWEL SIGN VOCALIC LL
        [0x00ae2, 0x00ae3,],
        // 0AFA..0AFF    ; Mn #   [6] GUJARATI SIGN SUKUN..GUJARATI SIGN TWO-CIRCLE NUKTA ABOVE
        [0x00afa, 0x00aff,],
        // 0B01          ; Mn #       ORIYA SIGN CANDRABINDU
        [0x00b01, 0x00b01,],
        // 0B3C          ; Mn #       ORIYA SIGN NUKTA
        [0x00b3c, 0x00b3c,],
        // 0B3F          ; Mn #       ORIYA VOWEL SIGN I
        [0x00b3f, 0x00b3f,],
        // 0B41..0B44    ; Mn #   [4] ORIYA VOWEL SIGN U..ORIYA VOWEL SIGN VOCALIC RR
        [0x00b41, 0x00b44,],
        // 0B4D          ; Mn #       ORIYA SIGN VIRAMA
        [0x00b4d, 0x00b4d,],
        // 0B55..0B56    ; Mn #   [2] ORIYA SIGN OVERLINE..ORIYA AI LENGTH MARK
        [0x00b55, 0x00b56,],
        // 0B62..0B63    ; Mn #   [2] ORIYA VOWEL SIGN VOCALIC L..ORIYA VOWEL SIGN VOCALIC LL
        [0x00b62, 0x00b63,],
        // 0B82          ; Mn #       TAMIL SIGN ANUSVARA
        [0x00b82, 0x00b82,],
        // 0BC0          ; Mn #       TAMIL VOWEL SIGN II
        [0x00bc0, 0x00bc0,],
        // 0BCD          ; Mn #       TAMIL SIGN VIRAMA
        [0x00bcd, 0x00bcd,],
        // 0C00          ; Mn #       TELUGU SIGN COMBINING CANDRABINDU ABOVE
        [0x00c00, 0x00c00,],
        // 0C04          ; Mn #       TELUGU SIGN COMBINING ANUSVARA ABOVE
        [0x00c04, 0x00c04,],
        // 0C3C          ; Mn #       TELUGU SIGN NUKTA
        [0x00c3c, 0x00c3c,],
        // 0C3E..0C40    ; Mn #   [3] TELUGU VOWEL SIGN AA..TELUGU VOWEL SIGN II
        [0x00c3e, 0x00c40,],
        // 0C46..0C48    ; Mn #   [3] TELUGU VOWEL SIGN E..TELUGU VOWEL SIGN AI
        [0x00c46, 0x00c48,],
        // 0C4A..0C4D    ; Mn #   [4] TELUGU VOWEL SIGN O..TELUGU SIGN VIRAMA
        [0x00c4a, 0x00c4d,],
        // 0C55..0C56    ; Mn #   [2] TELUGU LENGTH MARK..TELUGU AI LENGTH MARK
        [0x00c55, 0x00c56,],
        // 0C62..0C63    ; Mn #   [2] TELUGU VOWEL SIGN VOCALIC L..TELUGU VOWEL SIGN VOCALIC LL
        [0x00c62, 0x00c63,],
        // 0C81          ; Mn #       KANNADA SIGN CANDRABINDU
        [0x00c81, 0x00c81,],
        // 0CBC          ; Mn #       KANNADA SIGN NUKTA
        [0x00cbc, 0x00cbc,],
        // 0CBF          ; Mn #       KANNADA VOWEL SIGN I
        [0x00cbf, 0x00cbf,],
        // 0CC6          ; Mn #       KANNADA VOWEL SIGN E
        [0x00cc6, 0x00cc6,],
        // 0CCC..0CCD    ; Mn #   [2] KANNADA VOWEL SIGN AU..KANNADA SIGN VIRAMA
        [0x00ccc, 0x00ccd,],
        // 0CE2..0CE3    ; Mn #   [2] KANNADA VOWEL SIGN VOCALIC L..KANNADA VOWEL SIGN VOCALIC LL
        [0x00ce2, 0x00ce3,],
        // 0D00..0D01    ; Mn #   [2] MALAYALAM SIGN COMBINING ANUSVARA ABOVE..MALAYALAM SIGN CANDRABINDU
        [0x00d00, 0x00d01,],
        // 0D3B..0D3C    ; Mn #   [2] MALAYALAM SIGN VERTICAL BAR VIRAMA..MALAYALAM SIGN CIRCULAR VIRAMA
        [0x00d3b, 0x00d3c,],
        // 0D41..0D44    ; Mn #   [4] MALAYALAM VOWEL SIGN U..MALAYALAM VOWEL SIGN VOCALIC RR
        [0x00d41, 0x00d44,],
        // 0D4D          ; Mn #       MALAYALAM SIGN VIRAMA
        [0x00d4d, 0x00d4d,],
        // 0D62..0D63    ; Mn #   [2] MALAYALAM VOWEL SIGN VOCALIC L..MALAYALAM VOWEL SIGN VOCALIC LL
        [0x00d62, 0x00d63,],
        // 0D81          ; Mn #       SINHALA SIGN CANDRABINDU
        [0x00d81, 0x00d81,],
        // 0DCA          ; Mn #       SINHALA SIGN AL-LAKUNA
        [0x00dca, 0x00dca,],
        // 0DD2..0DD4    ; Mn #   [3] SINHALA VOWEL SIGN KETTI IS-PILLA..SINHALA VOWEL SIGN KETTI PAA-PILLA
        [0x00dd2, 0x00dd4,],
        // 0DD6          ; Mn #       SINHALA VOWEL SIGN DIGA PAA-PILLA
        [0x00dd6, 0x00dd6,],
        // 0E31          ; Mn #       THAI CHARACTER MAI HAN-AKAT
        [0x00e31, 0x00e31,],
        // 0E34..0E3A    ; Mn #   [7] THAI CHARACTER SARA I..THAI CHARACTER PHINTHU
        [0x00e34, 0x00e3a,],
        // 0E47..0E4E    ; Mn #   [8] THAI CHARACTER MAITAIKHU..THAI CHARACTER YAMAKKAN
        [0x00e47, 0x00e4e,],
        // 0EB1          ; Mn #       LAO VOWEL SIGN MAI KAN
        [0x00eb1, 0x00eb1,],
        // 0EB4..0EBC    ; Mn #   [9] LAO VOWEL SIGN I..LAO SEMIVOWEL SIGN LO
        [0x00eb4, 0x00ebc,],
        // 0EC8..0ECE    ; Mn #   [7] LAO TONE MAI EK..LAO YAMAKKAN
        [0x00ec8, 0x00ece,],
        // 0F18..0F19    ; Mn #   [2] TIBETAN ASTROLOGICAL SIGN -KHYUD PA..TIBETAN ASTROLOGICAL SIGN SDONG TSHUGS
        [0x00f18, 0x00f19,],
        // 0F35          ; Mn #       TIBETAN MARK NGAS BZUNG NYI ZLA
        [0x00f35, 0x00f35,],
        // 0F37          ; Mn #       TIBETAN MARK NGAS BZUNG SGOR RTAGS
        [0x00f37, 0x00f37,],
        // 0F39          ; Mn #       TIBETAN MARK TSA -PHRU
        [0x00f39, 0x00f39,],
        // 0F71..0F7E    ; Mn #  [14] TIBETAN VOWEL SIGN AA..TIBETAN SIGN RJES SU NGA RO
        [0x00f71, 0x00f7e,],
        // 0F80..0F84    ; Mn #   [5] TIBETAN VOWEL SIGN REVERSED I..TIBETAN MARK HALANTA
        [0x00f80, 0x00f84,],
        // 0F86..0F87    ; Mn #   [2] TIBETAN SIGN LCI RTAGS..TIBETAN SIGN YANG RTAGS
        [0x00f86, 0x00f87,],
        // 0F8D..0F97    ; Mn #  [11] TIBETAN SUBJOINED SIGN LCE TSA CAN..TIBETAN SUBJOINED LETTER JA
        [0x00f8d, 0x00f97,],
        // 0F99..0FBC    ; Mn #  [36] TIBETAN SUBJOINED LETTER NYA..TIBETAN SUBJOINED LETTER FIXED-FORM RA
        [0x00f99, 0x00fbc,],
        // 0FC6          ; Mn #       TIBETAN SYMBOL PADMA GDAN
        [0x00fc6, 0x00fc6,],
        // 102D..1030    ; Mn #   [4] MYANMAR VOWEL SIGN I..MYANMAR VOWEL SIGN UU
        [0x0102d, 0x01030,],
        // 1032..1037    ; Mn #   [6] MYANMAR VOWEL SIGN AI..MYANMAR SIGN DOT BELOW
        [0x01032, 0x01037,],
        // 1039..103A    ; Mn #   [2] MYANMAR SIGN VIRAMA..MYANMAR SIGN ASAT
        [0x01039, 0x0103a,],
        // 103D..103E    ; Mn #   [2] MYANMAR CONSONANT SIGN MEDIAL WA..MYANMAR CONSONANT SIGN MEDIAL HA
        [0x0103d, 0x0103e,],
        // 1058..1059    ; Mn #   [2] MYANMAR VOWEL SIGN VOCALIC L..MYANMAR VOWEL SIGN VOCALIC LL
        [0x01058, 0x01059,],
        // 105E..1060    ; Mn #   [3] MYANMAR CONSONANT SIGN MON MEDIAL NA..MYANMAR CONSONANT SIGN MON MEDIAL LA
        [0x0105e, 0x01060,],
        // 1071..1074    ; Mn #   [4] MYANMAR VOWEL SIGN GEBA KAREN I..MYANMAR VOWEL SIGN KAYAH EE
        [0x01071, 0x01074,],
        // 1082          ; Mn #       MYANMAR CONSONANT SIGN SHAN MEDIAL WA
        [0x01082, 0x01082,],
        // 1085..1086    ; Mn #   [2] MYANMAR VOWEL SIGN SHAN E ABOVE..MYANMAR VOWEL SIGN SHAN FINAL Y
        [0x01085, 0x01086,],
        // 108D          ; Mn #       MYANMAR SIGN SHAN COUNCIL EMPHATIC TONE
        [0x0108d, 0x0108d,],
        // 109D          ; Mn #       MYANMAR VOWEL SIGN AITON AI
        [0x0109d, 0x0109d,],
        // 135D..135F    ; Mn #   [3] ETHIOPIC COMBINING GEMINATION AND VOWEL LENGTH MARK..ETHIOPIC COMBINING GEMINATION MARK
        [0x0135d, 0x0135f,],
        // 1712..1714    ; Mn #   [3] TAGALOG VOWEL SIGN I..TAGALOG SIGN VIRAMA
        [0x01712, 0x01714,],
        // 1732..1733    ; Mn #   [2] HANUNOO VOWEL SIGN I..HANUNOO VOWEL SIGN U
        [0x01732, 0x01733,],
        // 1752..1753    ; Mn #   [2] BUHID VOWEL SIGN I..BUHID VOWEL SIGN U
        [0x01752, 0x01753,],
        // 1772..1773    ; Mn #   [2] TAGBANWA VOWEL SIGN I..TAGBANWA VOWEL SIGN U
        [0x01772, 0x01773,],
        // 17B4..17B5    ; Mn #   [2] KHMER VOWEL INHERENT AQ..KHMER VOWEL INHERENT AA
        [0x017b4, 0x017b5,],
        // 17B7..17BD    ; Mn #   [7] KHMER VOWEL SIGN I..KHMER VOWEL SIGN UA
        [0x017b7, 0x017bd,],
        // 17C6          ; Mn #       KHMER SIGN NIKAHIT
        [0x017c6, 0x017c6,],
        // 17C9..17D3    ; Mn #  [11] KHMER SIGN MUUSIKATOAN..KHMER SIGN BATHAMASAT
        [0x017c9, 0x017d3,],
        // 17DD          ; Mn #       KHMER SIGN ATTHACAN
        [0x017dd, 0x017dd,],
        // 180B..180D    ; Mn #   [3] MONGOLIAN FREE VARIATION SELECTOR ONE..MONGOLIAN FREE VARIATION SELECTOR THREE
        [0x0180b, 0x0180d,],
        // 180F          ; Mn #       MONGOLIAN FREE VARIATION SELECTOR FOUR
        [0x0180f, 0x0180f,],
        // 1885..1886    ; Mn #   [2] MONGOLIAN LETTER ALI GALI BALUDA..MONGOLIAN LETTER ALI GALI THREE BALUDA
        [0x01885, 0x01886,],
        // 18A9          ; Mn #       MONGOLIAN LETTER ALI GALI DAGALGA
        [0x018a9, 0x018a9,],
        // 1920..1922    ; Mn #   [3] LIMBU VOWEL SIGN A..LIMBU VOWEL SIGN U
        [0x01920, 0x01922,],
        // 1927..1928    ; Mn #   [2] LIMBU VOWEL SIGN E..LIMBU VOWEL SIGN O
        [0x01927, 0x01928,],
        // 1932          ; Mn #       LIMBU SMALL LETTER ANUSVARA
        [0x01932, 0x01932,],
        // 1939..193B    ; Mn #   [3] LIMBU SIGN MUKPHRENG..LIMBU SIGN SA-I
        [0x01939, 0x0193b,],
        // 1A17..1A18    ; Mn #   [2] BUGINESE VOWEL SIGN I..BUGINESE VOWEL SIGN U
        [0x01a17, 0x01a18,],
        // 1A1B          ; Mn #       BUGINESE VOWEL SIGN AE
        [0x01a1b, 0x01a1b,],
        // 1A56          ; Mn #       TAI THAM CONSONANT SIGN MEDIAL LA
        [0x01a56, 0x01a56,],
        // 1A58..1A5E    ; Mn #   [7] TAI THAM SIGN MAI KANG LAI..TAI THAM CONSONANT SIGN SA
        [0x01a58, 0x01a5e,],
        // 1A60          ; Mn #       TAI THAM SIGN SAKOT
        [0x01a60, 0x01a60,],
        // 1A62          ; Mn #       TAI THAM VOWEL SIGN MAI SAT
        [0x01a62, 0x01a62,],
        // 1A65..1A6C    ; Mn #   [8] TAI THAM VOWEL SIGN I..TAI THAM VOWEL SIGN OA BELOW
        [0x01a65, 0x01a6c,],
        // 1A73..1A7C    ; Mn #  [10] TAI THAM VOWEL SIGN OA ABOVE..TAI THAM SIGN KHUEN-LUE KARAN
        [0x01a73, 0x01a7c,],
        // 1A7F          ; Mn #       TAI THAM COMBINING CRYPTOGRAMMIC DOT
        [0x01a7f, 0x01a7f,],
        // 1AB0..1ABD    ; Mn #  [14] COMBINING DOUBLED CIRCUMFLEX ACCENT..COMBINING PARENTHESES BELOW
        // 1ABE          ; Me #       COMBINING PARENTHESES OVERLAY
        // 1ABF..1ACE    ; Mn #  [16] COMBINING LATIN SMALL LETTER W BELOW..COMBINING LATIN SMALL LETTER INSULAR T
        [0x01ab0, 0x01ace,],
        // 1B00..1B03    ; Mn #   [4] BALINESE SIGN ULU RICEM..BALINESE SIGN SURANG
        [0x01b00, 0x01b03,],
        // 1B34          ; Mn #       BALINESE SIGN REREKAN
        [0x01b34, 0x01b34,],
        // 1B36..1B3A    ; Mn #   [5] BALINESE VOWEL SIGN ULU..BALINESE VOWEL SIGN RA REPA
        [0x01b36, 0x01b3a,],
        // 1B3C          ; Mn #       BALINESE VOWEL SIGN LA LENGA
        [0x01b3c, 0x01b3c,],
        // 1B42          ; Mn #       BALINESE VOWEL SIGN PEPET
        [0x01b42, 0x01b42,],
        // 1B6B..1B73    ; Mn #   [9] BALINESE MUSICAL SYMBOL COMBINING TEGEH..BALINESE MUSICAL SYMBOL COMBINING GONG
        [0x01b6b, 0x01b73,],
        // 1B80..1B81    ; Mn #   [2] SUNDANESE SIGN PANYECEK..SUNDANESE SIGN PANGLAYAR
        [0x01b80, 0x01b81,],
        // 1BA2..1BA5    ; Mn #   [4] SUNDANESE CONSONANT SIGN PANYAKRA..SUNDANESE VOWEL SIGN PANYUKU
        [0x01ba2, 0x01ba5,],
        // 1BA8..1BA9    ; Mn #   [2] SUNDANESE VOWEL SIGN PAMEPET..SUNDANESE VOWEL SIGN PANEULEUNG
        [0x01ba8, 0x01ba9,],
        // 1BAB..1BAD    ; Mn #   [3] SUNDANESE SIGN VIRAMA..SUNDANESE CONSONANT SIGN PASANGAN WA
        [0x01bab, 0x01bad,],
        // 1BE6          ; Mn #       BATAK SIGN TOMPI
        [0x01be6, 0x01be6,],
        // 1BE8..1BE9    ; Mn #   [2] BATAK VOWEL SIGN PAKPAK E..BATAK VOWEL SIGN EE
        [0x01be8, 0x01be9,],
        // 1BED          ; Mn #       BATAK VOWEL SIGN KARO O
        [0x01bed, 0x01bed,],
        // 1BEF..1BF1    ; Mn #   [3] BATAK VOWEL SIGN U FOR SIMALUNGUN SA..BATAK CONSONANT SIGN H
        [0x01bef, 0x01bf1,],
        // 1C2C..1C33    ; Mn #   [8] LEPCHA VOWEL SIGN E..LEPCHA CONSONANT SIGN T
        [0x01c2c, 0x01c33,],
        // 1C36..1C37    ; Mn #   [2] LEPCHA SIGN RAN..LEPCHA SIGN NUKTA
        [0x01c36, 0x01c37,],
        // 1CD0..1CD2    ; Mn #   [3] VEDIC TONE KARSHANA..VEDIC TONE PRENKHA
        [0x01cd0, 0x01cd2,],
        // 1CD4..1CE0    ; Mn #  [13] VEDIC SIGN YAJURVEDIC MIDLINE SVARITA..VEDIC TONE RIGVEDIC KASHMIRI INDEPENDENT SVARITA
        [0x01cd4, 0x01ce0,],
        // 1CE2..1CE8    ; Mn #   [7] VEDIC SIGN VISARGA SVARITA..VEDIC SIGN VISARGA ANUDATTA WITH TAIL
        [0x01ce2, 0x01ce8,],
        // 1CED          ; Mn #       VEDIC SIGN TIRYAK
        [0x01ced, 0x01ced,],
        // 1CF4          ; Mn #       VEDIC TONE CANDRA ABOVE
        [0x01cf4, 0x01cf4,],
        // 1CF8..1CF9    ; Mn #   [2] VEDIC TONE RING ABOVE..VEDIC TONE DOUBLE RING ABOVE
        [0x01cf8, 0x01cf9,],
        // 1DC0..1DFF    ; Mn #  [64] COMBINING DOTTED GRAVE ACCENT..COMBINING RIGHT ARROWHEAD AND DOWN ARROWHEAD BELOW
        [0x01dc0, 0x01dff,],
        // 20D0..20DC    ; Mn #  [13] COMBINING LEFT HARPOON ABOVE..COMBINING FOUR DOTS ABOVE
        // 20DD..20E0    ; Me #   [4] COMBINING ENCLOSING CIRCLE..COMBINING ENCLOSING CIRCLE BACKSLASH
        // 20E1          ; Mn #       COMBINING LEFT RIGHT ARROW ABOVE
        // 20E2..20E4    ; Me #   [3] COMBINING ENCLOSING SCREEN..COMBINING ENCLOSING UPWARD POINTING TRIANGLE
        // 20E5..20F0    ; Mn #  [12] COMBINING REVERSE SOLIDUS OVERLAY..COMBINING ASTERISK ABOVE
        [0x020d0, 0x020f0,],
        // 2CEF..2CF1    ; Mn #   [3] COPTIC COMBINING NI ABOVE..COPTIC COMBINING SPIRITUS LENIS
        [0x02cef, 0x02cf1,],
        // 2D7F          ; Mn #       TIFINAGH CONSONANT JOINER
        [0x02d7f, 0x02d7f,],
        // 2DE0..2DFF    ; Mn #  [32] COMBINING CYRILLIC LETTER BE..COMBINING CYRILLIC LETTER IOTIFIED BIG YUS
        [0x02de0, 0x02dff,],
        // 302A..302D    ; Mn #   [4] IDEOGRAPHIC LEVEL TONE MARK..IDEOGRAPHIC ENTERING TONE MARK
        [0x0302a, 0x0302d,],
        // 3099..309A    ; Mn #   [2] COMBINING KATAKANA-HIRAGANA VOICED SOUND MARK..COMBINING KATAKANA-HIRAGANA SEMI-VOICED SOUND MARK
        [0x03099, 0x0309a,],
        // A66F          ; Mn #       COMBINING CYRILLIC VZMET
        // A670..A672    ; Me #   [3] COMBINING CYRILLIC TEN MILLIONS SIGN..COMBINING CYRILLIC THOUSAND MILLIONS SIGN
        [0x0a66f, 0x0a672,],
        // A674..A67D    ; Mn #  [10] COMBINING CYRILLIC LETTER UKRAINIAN IE..COMBINING CYRILLIC PAYEROK
        [0x0a674, 0x0a67d,],
        // A69E..A69F    ; Mn #   [2] COMBINING CYRILLIC LETTER EF..COMBINING CYRILLIC LETTER IOTIFIED E
        [0x0a69e, 0x0a69f,],
        // A6F0..A6F1    ; Mn #   [2] BAMUM COMBINING MARK KOQNDON..BAMUM COMBINING MARK TUKWENTIS
        [0x0a6f0, 0x0a6f1,],
        // A802          ; Mn #       SYLOTI NAGRI SIGN DVISVARA
        [0x0a802, 0x0a802,],
        // A806          ; Mn #       SYLOTI NAGRI SIGN HASANTA
        [0x0a806, 0x0a806,],
        // A80B          ; Mn #       SYLOTI NAGRI SIGN ANUSVARA
        [0x0a80b, 0x0a80b,],
        // A825..A826    ; Mn #   [2] SYLOTI NAGRI VOWEL SIGN U..SYLOTI NAGRI VOWEL SIGN E
        [0x0a825, 0x0a826,],
        // A82C          ; Mn #       SYLOTI NAGRI SIGN ALTERNATE HASANTA
        [0x0a82c, 0x0a82c,],
        // A8C4..A8C5    ; Mn #   [2] SAURASHTRA SIGN VIRAMA..SAURASHTRA SIGN CANDRABINDU
        [0x0a8c4, 0x0a8c5,],
        // A8E0..A8F1    ; Mn #  [18] COMBINING DEVANAGARI DIGIT ZERO..COMBINING DEVANAGARI SIGN AVAGRAHA
        [0x0a8e0, 0x0a8f1,],
        // A8FF          ; Mn #       DEVANAGARI VOWEL SIGN AY
        [0x0a8ff, 0x0a8ff,],
        // A926..A92D    ; Mn #   [8] KAYAH LI VOWEL UE..KAYAH LI TONE CALYA PLOPHU
        [0x0a926, 0x0a92d,],
        // A947..A951    ; Mn #  [11] REJANG VOWEL SIGN I..REJANG CONSONANT SIGN R
        [0x0a947, 0x0a951,],
        // A980..A982    ; Mn #   [3] JAVANESE SIGN PANYANGGA..JAVANESE SIGN LAYAR
        [0x0a980, 0x0a982,],
        // A9B3          ; Mn #       JAVANESE SIGN CECAK TELU
        [0x0a9b3, 0x0a9b3,],
        // A9B6..A9B9    ; Mn #   [4] JAVANESE VOWEL SIGN WULU..JAVANESE VOWEL SIGN SUKU MENDUT
        [0x0a9b6, 0x0a9b9,],
        // A9BC..A9BD    ; Mn #   [2] JAVANESE VOWEL SIGN PEPET..JAVANESE CONSONANT SIGN KERET
        [0x0a9bc, 0x0a9bd,],
        // A9E5          ; Mn #       MYANMAR SIGN SHAN SAW
        [0x0a9e5, 0x0a9e5,],
        // AA29..AA2E    ; Mn #   [6] CHAM VOWEL SIGN AA..CHAM VOWEL SIGN OE
        [0x0aa29, 0x0aa2e,],
        // AA31..AA32    ; Mn #   [2] CHAM VOWEL SIGN AU..CHAM VOWEL SIGN UE
        [0x0aa31, 0x0aa32,],
        // AA35..AA36    ; Mn #   [2] CHAM CONSONANT SIGN LA..CHAM CONSONANT SIGN WA
        [0x0aa35, 0x0aa36,],
        // AA43          ; Mn #       CHAM CONSONANT SIGN FINAL NG
        [0x0aa43, 0x0aa43,],
        // AA4C          ; Mn #       CHAM CONSONANT SIGN FINAL M
        [0x0aa4c, 0x0aa4c,],
        // AA7C          ; Mn #       MYANMAR SIGN TAI LAING TONE-2
        [0x0aa7c, 0x0aa7c,],
        // AAB0          ; Mn #       TAI VIET MAI KANG
        [0x0aab0, 0x0aab0,],
        // AAB2..AAB4    ; Mn #   [3] TAI VIET VOWEL I..TAI VIET VOWEL U
        [0x0aab2, 0x0aab4,],
        // AAB7..AAB8    ; Mn #   [2] TAI VIET MAI KHIT..TAI VIET VOWEL IA
        [0x0aab7, 0x0aab8,],
        // AABE..AABF    ; Mn #   [2] TAI VIET VOWEL AM..TAI VIET TONE MAI EK
        [0x0aabe, 0x0aabf,],
        // AAC1          ; Mn #       TAI VIET TONE MAI THO
        [0x0aac1, 0x0aac1,],
        // AAEC..AAED    ; Mn #   [2] MEETEI MAYEK VOWEL SIGN UU..MEETEI MAYEK VOWEL SIGN AAI
        [0x0aaec, 0x0aaed,],
        // AAF6          ; Mn #       MEETEI MAYEK VIRAMA
        [0x0aaf6, 0x0aaf6,],
        // ABE5          ; Mn #       MEETEI MAYEK VOWEL SIGN ANAP
        [0x0abe5, 0x0abe5,],
        // ABE8          ; Mn #       MEETEI MAYEK VOWEL SIGN UNAP
        [0x0abe8, 0x0abe8,],
        // ABED          ; Mn #       MEETEI MAYEK APUN IYEK
        [0x0abed, 0x0abed,],
        // FB1E          ; Mn #       HEBREW POINT JUDEO-SPANISH VARIKA
        [0x0fb1e, 0x0fb1e,],
        // FE00..FE0F    ; Mn #  [16] VARIATION SELECTOR-1..VARIATION SELECTOR-16
        [0x0fe00, 0x0fe0f,],
        // FE20..FE2F    ; Mn #  [16] COMBINING LIGATURE LEFT HALF..COMBINING CYRILLIC TITLO RIGHT HALF
        [0x0fe20, 0x0fe2f,],
        // 101FD         ; Mn #       PHAISTOS DISC SIGN COMBINING OBLIQUE STROKE
        [0x101fd, 0x101fd,],
        // 102E0         ; Mn #       COPTIC EPACT THOUSANDS MARK
        [0x102e0, 0x102e0,],
        // 10376..1037A  ; Mn #   [5] COMBINING OLD PERMIC LETTER AN..COMBINING OLD PERMIC LETTER SII
        [0x10376, 0x1037a,],
        // 10A01..10A03  ; Mn #   [3] KHAROSHTHI VOWEL SIGN I..KHAROSHTHI VOWEL SIGN VOCALIC R
        [0x10a01, 0x10a03,],
        // 10A05..10A06  ; Mn #   [2] KHAROSHTHI VOWEL SIGN E..KHAROSHTHI VOWEL SIGN O
        [0x10a05, 0x10a06,],
        // 10A0C..10A0F  ; Mn #   [4] KHAROSHTHI VOWEL LENGTH MARK..KHAROSHTHI SIGN VISARGA
        [0x10a0c, 0x10a0f,],
        // 10A38..10A3A  ; Mn #   [3] KHAROSHTHI SIGN BAR ABOVE..KHAROSHTHI SIGN DOT BELOW
        [0x10a38, 0x10a3a,],
        // 10A3F         ; Mn #       KHAROSHTHI VIRAMA
        [0x10a3f, 0x10a3f,],
        // 10AE5..10AE6  ; Mn #   [2] MANICHAEAN ABBREVIATION MARK ABOVE..MANICHAEAN ABBREVIATION MARK BELOW
        [0x10ae5, 0x10ae6,],
        // 10D24..10D27  ; Mn #   [4] HANIFI ROHINGYA SIGN HARBAHAY..HANIFI ROHINGYA SIGN TASSI
        [0x10d24, 0x10d27,],
        // 10EAB..10EAC  ; Mn #   [2] YEZIDI COMBINING HAMZA MARK..YEZIDI COMBINING MADDA MARK
        [0x10eab, 0x10eac,],
        // 10EFD..10EFF  ; Mn #   [3] ARABIC SMALL LOW WORD SAKTA..ARABIC SMALL LOW WORD MADDA
        [0x10efd, 0x10eff,],
        // 10F46..10F50  ; Mn #  [11] SOGDIAN COMBINING DOT BELOW..SOGDIAN COMBINING STROKE BELOW
        [0x10f46, 0x10f50,],
        // 10F82..10F85  ; Mn #   [4] OLD UYGHUR COMBINING DOT ABOVE..OLD UYGHUR COMBINING TWO DOTS BELOW
        [0x10f82, 0x10f85,],
        // 11001         ; Mn #       BRAHMI SIGN ANUSVARA
        [0x11001, 0x11001,],
        // 11038..11046  ; Mn #  [15] BRAHMI VOWEL SIGN AA..BRAHMI VIRAMA
        [0x11038, 0x11046,],
        // 11070         ; Mn #       BRAHMI SIGN OLD TAMIL VIRAMA
        [0x11070, 0x11070,],
        // 11073..11074  ; Mn #   [2] BRAHMI VOWEL SIGN OLD TAMIL SHORT E..BRAHMI VOWEL SIGN OLD TAMIL SHORT O
        [0x11073, 0x11074,],
        // 1107F..11081  ; Mn #   [3] BRAHMI NUMBER JOINER..KAITHI SIGN ANUSVARA
        [0x1107f, 0x11081,],
        // 110B3..110B6  ; Mn #   [4] KAITHI VOWEL SIGN U..KAITHI VOWEL SIGN AI
        [0x110b3, 0x110b6,],
        // 110B9..110BA  ; Mn #   [2] KAITHI SIGN VIRAMA..KAITHI SIGN NUKTA
        [0x110b9, 0x110ba,],
        // 110C2         ; Mn #       KAITHI VOWEL SIGN VOCALIC R
        [0x110c2, 0x110c2,],
        // 11100..11102  ; Mn #   [3] CHAKMA SIGN CANDRABINDU..CHAKMA SIGN VISARGA
        [0x11100, 0x11102,],
        // 11127..1112B  ; Mn #   [5] CHAKMA VOWEL SIGN A..CHAKMA VOWEL SIGN UU
        [0x11127, 0x1112b,],
        // 1112D..11134  ; Mn #   [8] CHAKMA VOWEL SIGN AI..CHAKMA MAAYYAA
        [0x1112d, 0x11134,],
        // 11173         ; Mn #       MAHAJANI SIGN NUKTA
        [0x11173, 0x11173,],
        // 11180..11181  ; Mn #   [2] SHARADA SIGN CANDRABINDU..SHARADA SIGN ANUSVARA
        [0x11180, 0x11181,],
        // 111B6..111BE  ; Mn #   [9] SHARADA VOWEL SIGN U..SHARADA VOWEL SIGN O
        [0x111b6, 0x111be,],
        // 111C9..111CC  ; Mn #   [4] SHARADA SANDHI MARK..SHARADA EXTRA SHORT VOWEL MARK
        [0x111c9, 0x111cc,],
        // 111CF         ; Mn #       SHARADA SIGN INVERTED CANDRABINDU
        [0x111cf, 0x111cf,],
        // 1122F..11231  ; Mn #   [3] KHOJKI VOWEL SIGN U..KHOJKI VOWEL SIGN AI
        [0x1122f, 0x11231,],
        // 11234         ; Mn #       KHOJKI SIGN ANUSVARA
        [0x11234, 0x11234,],
        // 11236..11237  ; Mn #   [2] KHOJKI SIGN NUKTA..KHOJKI SIGN SHADDA
        [0x11236, 0x11237,],
        // 1123E         ; Mn #       KHOJKI SIGN SUKUN
        [0x1123e, 0x1123e,],
        // 11241         ; Mn #       KHOJKI VOWEL SIGN VOCALIC R
        [0x11241, 0x11241,],
        // 112DF         ; Mn #       KHUDAWADI SIGN ANUSVARA
        [0x112df, 0x112df,],
        // 112E3..112EA  ; Mn #   [8] KHUDAWADI VOWEL SIGN U..KHUDAWADI SIGN VIRAMA
        [0x112e3, 0x112ea,],
        // 11300..11301  ; Mn #   [2] GRANTHA SIGN COMBINING ANUSVARA ABOVE..GRANTHA SIGN CANDRABINDU
        [0x11300, 0x11301,],
        // 1133B..1133C  ; Mn #   [2] COMBINING BINDU BELOW..GRANTHA SIGN NUKTA
        [0x1133b, 0x1133c,],
        // 11340         ; Mn #       GRANTHA VOWEL SIGN II
        [0x11340, 0x11340,],
        // 11366..1136C  ; Mn #   [7] COMBINING GRANTHA DIGIT ZERO..COMBINING GRANTHA DIGIT SIX
        [0x11366, 0x1136c,],
        // 11370..11374  ; Mn #   [5] COMBINING GRANTHA LETTER A..COMBINING GRANTHA LETTER PA
        [0x11370, 0x11374,],
        // 11438..1143F  ; Mn #   [8] NEWA VOWEL SIGN U..NEWA VOWEL SIGN AI
        [0x11438, 0x1143f,],
        // 11442..11444  ; Mn #   [3] NEWA SIGN VIRAMA..NEWA SIGN ANUSVARA
        [0x11442, 0x11444,],
        // 11446         ; Mn #       NEWA SIGN NUKTA
        [0x11446, 0x11446,],
        // 1145E         ; Mn #       NEWA SANDHI MARK
        [0x1145e, 0x1145e,],
        // 114B3..114B8  ; Mn #   [6] TIRHUTA VOWEL SIGN U..TIRHUTA VOWEL SIGN VOCALIC LL
        [0x114b3, 0x114b8,],
        // 114BA         ; Mn #       TIRHUTA VOWEL SIGN SHORT E
        [0x114ba, 0x114ba,],
        // 114BF..114C0  ; Mn #   [2] TIRHUTA SIGN CANDRABINDU..TIRHUTA SIGN ANUSVARA
        [0x114bf, 0x114c0,],
        // 114C2..114C3  ; Mn #   [2] TIRHUTA SIGN VIRAMA..TIRHUTA SIGN NUKTA
        [0x114c2, 0x114c3,],
        // 115B2..115B5  ; Mn #   [4] SIDDHAM VOWEL SIGN U..SIDDHAM VOWEL SIGN VOCALIC RR
        [0x115b2, 0x115b5,],
        // 115BC..115BD  ; Mn #   [2] SIDDHAM SIGN CANDRABINDU..SIDDHAM SIGN ANUSVARA
        [0x115bc, 0x115bd,],
        // 115BF..115C0  ; Mn #   [2] SIDDHAM SIGN VIRAMA..SIDDHAM SIGN NUKTA
        [0x115bf, 0x115c0,],
        // 115DC..115DD  ; Mn #   [2] SIDDHAM VOWEL SIGN ALTERNATE U..SIDDHAM VOWEL SIGN ALTERNATE UU
        [0x115dc, 0x115dd,],
        // 11633..1163A  ; Mn #   [8] MODI VOWEL SIGN U..MODI VOWEL SIGN AI
        [0x11633, 0x1163a,],
        // 1163D         ; Mn #       MODI SIGN ANUSVARA
        [0x1163d, 0x1163d,],
        // 1163F..11640  ; Mn #   [2] MODI SIGN VIRAMA..MODI SIGN ARDHACANDRA
        [0x1163f, 0x11640,],
        // 116AB         ; Mn #       TAKRI SIGN ANUSVARA
        [0x116ab, 0x116ab,],
        // 116AD         ; Mn #       TAKRI VOWEL SIGN AA
        [0x116ad, 0x116ad,],
        // 116B0..116B5  ; Mn #   [6] TAKRI VOWEL SIGN U..TAKRI VOWEL SIGN AU
        [0x116b0, 0x116b5,],
        // 116B7         ; Mn #       TAKRI SIGN NUKTA
        [0x116b7, 0x116b7,],
        // 1171D..1171F  ; Mn #   [3] AHOM CONSONANT SIGN MEDIAL LA..AHOM CONSONANT SIGN MEDIAL LIGATING RA
        [0x1171d, 0x1171f,],
        // 11722..11725  ; Mn #   [4] AHOM VOWEL SIGN I..AHOM VOWEL SIGN UU
        [0x11722, 0x11725,],
        // 11727..1172B  ; Mn #   [5] AHOM VOWEL SIGN AW..AHOM SIGN KILLER
        [0x11727, 0x1172b,],
        // 1182F..11837  ; Mn #   [9] DOGRA VOWEL SIGN U..DOGRA SIGN ANUSVARA
        [0x1182f, 0x11837,],
        // 11839..1183A  ; Mn #   [2] DOGRA SIGN VIRAMA..DOGRA SIGN NUKTA
        [0x11839, 0x1183a,],
        // 1193B..1193C  ; Mn #   [2] DIVES AKURU SIGN ANUSVARA..DIVES AKURU SIGN CANDRABINDU
        [0x1193b, 0x1193c,],
        // 1193E         ; Mn #       DIVES AKURU VIRAMA
        [0x1193e, 0x1193e,],
        // 11943         ; Mn #       DIVES AKURU SIGN NUKTA
        [0x11943, 0x11943,],
        // 119D4..119D7  ; Mn #   [4] NANDINAGARI VOWEL SIGN U..NANDINAGARI VOWEL SIGN VOCALIC RR
        [0x119d4, 0x119d7,],
        // 119DA..119DB  ; Mn #   [2] NANDINAGARI VOWEL SIGN E..NANDINAGARI VOWEL SIGN AI
        [0x119da, 0x119db,],
        // 119E0         ; Mn #       NANDINAGARI SIGN VIRAMA
        [0x119e0, 0x119e0,],
        // 11A01..11A0A  ; Mn #  [10] ZANABAZAR SQUARE VOWEL SIGN I..ZANABAZAR SQUARE VOWEL LENGTH MARK
        [0x11a01, 0x11a0a,],
        // 11A33..11A38  ; Mn #   [6] ZANABAZAR SQUARE FINAL CONSONANT MARK..ZANABAZAR SQUARE SIGN ANUSVARA
        [0x11a33, 0x11a38,],
        // 11A3B..11A3E  ; Mn #   [4] ZANABAZAR SQUARE CLUSTER-FINAL LETTER YA..ZANABAZAR SQUARE CLUSTER-FINAL LETTER VA
        [0x11a3b, 0x11a3e,],
        // 11A47         ; Mn #       ZANABAZAR SQUARE SUBJOINER
        [0x11a47, 0x11a47,],
        // 11A51..11A56  ; Mn #   [6] SOYOMBO VOWEL SIGN I..SOYOMBO VOWEL SIGN OE
        [0x11a51, 0x11a56,],
        // 11A59..11A5B  ; Mn #   [3] SOYOMBO VOWEL SIGN VOCALIC R..SOYOMBO VOWEL LENGTH MARK
        [0x11a59, 0x11a5b,],
        // 11A8A..11A96  ; Mn #  [13] SOYOMBO FINAL CONSONANT SIGN G..SOYOMBO SIGN ANUSVARA
        [0x11a8a, 0x11a96,],
        // 11A98..11A99  ; Mn #   [2] SOYOMBO GEMINATION MARK..SOYOMBO SUBJOINER
        [0x11a98, 0x11a99,],
        // 11C30..11C36  ; Mn #   [7] BHAIKSUKI VOWEL SIGN I..BHAIKSUKI VOWEL SIGN VOCALIC L
        [0x11c30, 0x11c36,],
        // 11C38..11C3D  ; Mn #   [6] BHAIKSUKI VOWEL SIGN E..BHAIKSUKI SIGN ANUSVARA
        [0x11c38, 0x11c3d,],
        // 11C3F         ; Mn #       BHAIKSUKI SIGN VIRAMA
        [0x11c3f, 0x11c3f,],
        // 11C92..11CA7  ; Mn #  [22] MARCHEN SUBJOINED LETTER KA..MARCHEN SUBJOINED LETTER ZA
        [0x11c92, 0x11ca7,],
        // 11CAA..11CB0  ; Mn #   [7] MARCHEN SUBJOINED LETTER RA..MARCHEN VOWEL SIGN AA
        [0x11caa, 0x11cb0,],
        // 11CB2..11CB3  ; Mn #   [2] MARCHEN VOWEL SIGN U..MARCHEN VOWEL SIGN E
        [0x11cb2, 0x11cb3,],
        // 11CB5..11CB6  ; Mn #   [2] MARCHEN SIGN ANUSVARA..MARCHEN SIGN CANDRABINDU
        [0x11cb5, 0x11cb6,],
        // 11D31..11D36  ; Mn #   [6] MASARAM GONDI VOWEL SIGN AA..MASARAM GONDI VOWEL SIGN VOCALIC R
        [0x11d31, 0x11d36,],
        // 11D3A         ; Mn #       MASARAM GONDI VOWEL SIGN E
        [0x11d3a, 0x11d3a,],
        // 11D3C..11D3D  ; Mn #   [2] MASARAM GONDI VOWEL SIGN AI..MASARAM GONDI VOWEL SIGN O
        [0x11d3c, 0x11d3d,],
        // 11D3F..11D45  ; Mn #   [7] MASARAM GONDI VOWEL SIGN AU..MASARAM GONDI VIRAMA
        [0x11d3f, 0x11d45,],
        // 11D47         ; Mn #       MASARAM GONDI RA-KARA
        [0x11d47, 0x11d47,],
        // 11D90..11D91  ; Mn #   [2] GUNJALA GONDI VOWEL SIGN EE..GUNJALA GONDI VOWEL SIGN AI
        [0x11d90, 0x11d91,],
        // 11D95         ; Mn #       GUNJALA GONDI SIGN ANUSVARA
        [0x11d95, 0x11d95,],
        // 11D97         ; Mn #       GUNJALA GONDI VIRAMA
        [0x11d97, 0x11d97,],
        // 11EF3..11EF4  ; Mn #   [2] MAKASAR VOWEL SIGN I..MAKASAR VOWEL SIGN U
        [0x11ef3, 0x11ef4,],
        // 11F00..11F01  ; Mn #   [2] KAWI SIGN CANDRABINDU..KAWI SIGN ANUSVARA
        [0x11f00, 0x11f01,],
        // 11F36..11F3A  ; Mn #   [5] KAWI VOWEL SIGN I..KAWI VOWEL SIGN VOCALIC R
        [0x11f36, 0x11f3a,],
        // 11F40         ; Mn #       KAWI VOWEL SIGN EU
        [0x11f40, 0x11f40,],
        // 11F42         ; Mn #       KAWI CONJOINER
        [0x11f42, 0x11f42,],
        // 13440         ; Mn #       EGYPTIAN HIEROGLYPH MIRROR HORIZONTALLY
        [0x13440, 0x13440,],
        // 13447..13455  ; Mn #  [15] EGYPTIAN HIEROGLYPH MODIFIER DAMAGED AT TOP START..EGYPTIAN HIEROGLYPH MODIFIER DAMAGED
        [0x13447, 0x13455,],
        // 16AF0..16AF4  ; Mn #   [5] BASSA VAH COMBINING HIGH TONE..BASSA VAH COMBINING HIGH-LOW TONE
        [0x16af0, 0x16af4,],
        // 16B30..16B36  ; Mn #   [7] PAHAWH HMONG MARK CIM TUB..PAHAWH HMONG MARK CIM TAUM
        [0x16b30, 0x16b36,],
        // 16F4F         ; Mn #       MIAO SIGN CONSONANT MODIFIER BAR
        [0x16f4f, 0x16f4f,],
        // 16F8F..16F92  ; Mn #   [4] MIAO TONE RIGHT..MIAO TONE BELOW
        [0x16f8f, 0x16f92,],
        // 16FE4         ; Mn #       KHITAN SMALL SCRIPT FILLER
        [0x16fe4, 0x16fe4,],
        // 1BC9D..1BC9E  ; Mn #   [2] DUPLOYAN THICK LETTER SELECTOR..DUPLOYAN DOUBLE MARK
        [0x1bc9d, 0x1bc9e,],
        // 1CF00..1CF2D  ; Mn #  [46] ZNAMENNY COMBINING MARK GORAZDO NIZKO S KRYZHEM ON LEFT..ZNAMENNY COMBINING MARK KRYZH ON LEFT
        [0x1cf00, 0x1cf2d,],
        // 1CF30..1CF46  ; Mn #  [23] ZNAMENNY COMBINING TONAL RANGE MARK MRACHNO..ZNAMENNY PRIZNAK MODIFIER ROG
        [0x1cf30, 0x1cf46,],
        // 1D167..1D169  ; Mn #   [3] MUSICAL SYMBOL COMBINING TREMOLO-1..MUSICAL SYMBOL COMBINING TREMOLO-3
        [0x1d167, 0x1d169,],
        // 1D17B..1D182  ; Mn #   [8] MUSICAL SYMBOL COMBINING ACCENT..MUSICAL SYMBOL COMBINING LOURE
        [0x1d17b, 0x1d182,],
        // 1D185..1D18B  ; Mn #   [7] MUSICAL SYMBOL COMBINING DOIT..MUSICAL SYMBOL COMBINING TRIPLE TONGUE
        [0x1d185, 0x1d18b,],
        // 1D1AA..1D1AD  ; Mn #   [4] MUSICAL SYMBOL COMBINING DOWN BOW..MUSICAL SYMBOL COMBINING SNAP PIZZICATO
        [0x1d1aa, 0x1d1ad,],
        // 1D242..1D244  ; Mn #   [3] COMBINING GREEK MUSICAL TRISEME..COMBINING GREEK MUSICAL PENTASEME
        [0x1d242, 0x1d244,],
        // 1DA00..1DA36  ; Mn #  [55] SIGNWRITING HEAD RIM..SIGNWRITING AIR SUCKING IN
        [0x1da00, 0x1da36,],
        // 1DA3B..1DA6C  ; Mn #  [50] SIGNWRITING MOUTH CLOSED NEUTRAL..SIGNWRITING EXCITEMENT
        [0x1da3b, 0x1da6c,],
        // 1DA75         ; Mn #       SIGNWRITING UPPER BODY TILTING FROM HIP JOINTS
        [0x1da75, 0x1da75,],
        // 1DA84         ; Mn #       SIGNWRITING LOCATION HEAD NECK
        [0x1da84, 0x1da84,],
        // 1DA9B..1DA9F  ; Mn #   [5] SIGNWRITING FILL MODIFIER-2..SIGNWRITING FILL MODIFIER-6
        [0x1da9b, 0x1da9f,],
        // 1DAA1..1DAAF  ; Mn #  [15] SIGNWRITING ROTATION MODIFIER-2..SIGNWRITING ROTATION MODIFIER-16
        [0x1daa1, 0x1daaf,],
        // 1E000..1E006  ; Mn #   [7] COMBINING GLAGOLITIC LETTER AZU..COMBINING GLAGOLITIC LETTER ZHIVETE
        [0x1e000, 0x1e006,],
        // 1E008..1E018  ; Mn #  [17] COMBINING GLAGOLITIC LETTER ZEMLJA..COMBINING GLAGOLITIC LETTER HERU
        [0x1e008, 0x1e018,],
        // 1E01B..1E021  ; Mn #   [7] COMBINING GLAGOLITIC LETTER SHTA..COMBINING GLAGOLITIC LETTER YATI
        [0x1e01b, 0x1e021,],
        // 1E023..1E024  ; Mn #   [2] COMBINING GLAGOLITIC LETTER YU..COMBINING GLAGOLITIC LETTER SMALL YUS
        [0x1e023, 0x1e024,],
        // 1E026..1E02A  ; Mn #   [5] COMBINING GLAGOLITIC LETTER YO..COMBINING GLAGOLITIC LETTER FITA
        [0x1e026, 0x1e02a,],
        // 1E08F         ; Mn #       COMBINING CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I
        [0x1e08f, 0x1e08f,],
        // 1E130..1E136  ; Mn #   [7] NYIAKENG PUACHUE HMONG TONE-B..NYIAKENG PUACHUE HMONG TONE-D
        [0x1e130, 0x1e136,],
        // 1E2AE         ; Mn #       TOTO SIGN RISING TONE
        [0x1e2ae, 0x1e2ae,],
        // 1E2EC..1E2EF  ; Mn #   [4] WANCHO TONE TUP..WANCHO TONE KOINI
        [0x1e2ec, 0x1e2ef,],
        // 1E4EC..1E4EF  ; Mn #   [4] NAG MUNDARI SIGN MUHOR..NAG MUNDARI SIGN SUTUH
        [0x1e4ec, 0x1e4ef,],
        // 1E8D0..1E8D6  ; Mn #   [7] MENDE KIKAKUI COMBINING NUMBER TEENS..MENDE KIKAKUI COMBINING NUMBER MILLIONS
        [0x1e8d0, 0x1e8d6,],
        // 1E944..1E94A  ; Mn #   [7] ADLAM ALIF LENGTHENER..ADLAM NUKTA
        [0x1e944, 0x1e94a,],
        // E0100..E01EF  ; Mn # [240] VARIATION SELECTOR-17..VARIATION SELECTOR-256
        [0xe0100, 0xe01ef,],
    ],
];
// @codeCoverageIgnoreEnd
