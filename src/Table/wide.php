<?php

declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth;

// @codeCoverageIgnoreStart
const WIDE_EASTASIAN = [
    '15.0.0' => [
        [0x01100, 0x0115f,],  // Hangul Choseong Kiyeok  ..Hangul Choseong Filler
        [0x0231a, 0x0231b,],  // Watch                   ..Hourglass
        [0x02329, 0x02329,],  // Left-pointing Angle Brac
        [0x0232a, 0x0232a,],  // Right-pointing Angle Bra
        [0x023e9, 0x023ec,],  // Black Right-pointing Dou..Black Down-pointing Doub
        [0x023f0, 0x023f0,],  // Alarm Clock
        [0x023f3, 0x023f3,],  // Hourglass With Flowing Sand
        [0x025fd, 0x025fe,],  // White Medium Small Squar..Black Medium Small Squar
        [0x02614, 0x02615,],  // Umbrella With Rain Drops..Hot Beverage
        [0x02648, 0x02653,],  // Aries                   ..Pisces
        [0x0267f, 0x0267f,],  // Wheelchair Symbol
        [0x02693, 0x02693,],  // Anchor
        [0x026a1, 0x026a1,],  // High Voltage Sign
        [0x026aa, 0x026ab,],  // Medium White Circle     ..Medium Black Circle
        [0x026bd, 0x026be,],  // Soccer Ball             ..Baseball
        [0x026c4, 0x026c5,],  // Snowman Without Snow    ..Sun Behind Cloud
        [0x026ce, 0x026ce,],  // Ophiuchus
        [0x026d4, 0x026d4,],  // No Entry
        [0x026ea, 0x026ea,],  // Church
        [0x026f2, 0x026f3,],  // Fountain                ..Flag In Hole
        [0x026f5, 0x026f5,],  // Sailboat
        [0x026fa, 0x026fa,],  // Tent
        [0x026fd, 0x026fd,],  // Fuel Pump
        [0x02705, 0x02705,],  // White Heavy Check Mark
        [0x0270a, 0x0270b,],  // Raised Fist             ..Raised Hand
        [0x02728, 0x02728,],  // Sparkles
        [0x0274c, 0x0274c,],  // Cross Mark
        [0x0274e, 0x0274e,],  // Negative Squared Cross Mark
        [0x02753, 0x02755,],  // Black Question Mark Orna..White Exclamation Mark O
        [0x02757, 0x02757,],  // Heavy Exclamation Mark Symbol
        [0x02795, 0x02797,],  // Heavy Plus Sign         ..Heavy Division Sign
        [0x027b0, 0x027b0,],  // Curly Loop
        [0x027bf, 0x027bf,],  // Double Curly Loop
        [0x02b1b, 0x02b1c,],  // Black Large Square      ..White Large Square
        [0x02b50, 0x02b50,],  // White Medium Star
        [0x02b55, 0x02b55,],  // Heavy Large Circle
        [0x02e80, 0x02e99,],  // Cjk Radical Repeat      ..Cjk Radical Rap
        [0x02e9b, 0x02ef3,],  // Cjk Radical Choke       ..Cjk Radical C-simplified
        [0x02f00, 0x02fd5,],  // Kangxi Radical One      ..Kangxi Radical Flute
        [0x02ff0, 0x02ffb,],  // Ideographic Description ..Ideographic Description
        [0x03000, 0x0303e,],  // Ideographic Space       ..Ideographic Variation In
        [0x03041, 0x03096,],  // Hiragana Letter Small A ..Hiragana Letter Small Ke
        [0x03099, 0x030ff,],  // Combining Katakana-hirag..Katakana Digraph Koto
        [0x03105, 0x0312f,],  // Bopomofo Letter B       ..Bopomofo Letter Nn
        [0x03131, 0x0318e,],  // Hangul Letter Kiyeok    ..Hangul Letter Araeae
        [0x03190, 0x031e3,],  // Ideographic Annotation L..Cjk Stroke Q
        [0x031f0, 0x0321e,],  // Katakana Letter Small Ku..Parenthesized Korean Cha
        [0x03220, 0x03247,],  // Parenthesized Ideograph ..Circled Ideograph Koto
        [0x03250, 0x04dbf,],  // Partnership Sign        ..Cjk Unified Ideograph-4d
        [0x04e00, 0x0a48c,],  // Cjk Unified Ideograph-4e..Yi Syllable Yyr
        [0x0a490, 0x0a4c6,],  // Yi Radical Qot          ..Yi Radical Ke
        [0x0a960, 0x0a97c,],  // Hangul Choseong Tikeut-m..Hangul Choseong Ssangyeo
        [0x0ac00, 0x0d7a3,],  // Hangul Syllable Ga      ..Hangul Syllable Hih
        [0x0f900, 0x0faff,],  // Cjk Compatibility Ideogr..(nil)
        [0x0fe10, 0x0fe19,],  // Presentation Form For Ve..Presentation Form For Ve
        [0x0fe30, 0x0fe52,],  // Presentation Form For Ve..Small Full Stop
        [0x0fe54, 0x0fe66,],  // Small Semicolon         ..Small Equals Sign
        [0x0fe68, 0x0fe6b,],  // Small Reverse Solidus   ..Small Commercial At
        [0x0ff01, 0x0ff60,],  // Fullwidth Exclamation Ma..Fullwidth Right White Pa
        [0x0ffe0, 0x0ffe6,],  // Fullwidth Cent Sign     ..Fullwidth Won Sign
        [0x16fe0, 0x16fe4,],  // Tangut Iteration Mark   ..Khitan Small Script Fill
        [0x16ff0, 0x16ff1,],  // Vietnamese Alternate Rea..Vietnamese Alternate Rea
        [0x17000, 0x187f7,],  // (nil)
        [0x18800, 0x18cd5,],  // Tangut Component-001    ..Khitan Small Script Char
        [0x18d00, 0x18d08,],  // (nil)
        [0x1aff0, 0x1aff3,],  // Katakana Letter Minnan T..Katakana Letter Minnan T
        [0x1aff5, 0x1affb,],  // Katakana Letter Minnan T..Katakana Letter Minnan N
        [0x1affd, 0x1affe,],  // Katakana Letter Minnan N..Katakana Letter Minnan N
        [0x1b000, 0x1b122,],  // Katakana Letter Archaic ..Katakana Letter Archaic
        [0x1b132, 0x1b132,],  // (nil)
        [0x1b150, 0x1b152,],  // Hiragana Letter Small Wi..Hiragana Letter Small Wo
        [0x1b155, 0x1b155,],  // (nil)
        [0x1b164, 0x1b167,],  // Katakana Letter Small Wi..Katakana Letter Small N
        [0x1b170, 0x1b2fb,],  // Nushu Character-1b170   ..Nushu Character-1b2fb
        [0x1f004, 0x1f004,],  // Mahjong Tile Red Dragon
        [0x1f0cf, 0x1f0cf,],  // Playing Card Black Joker
        [0x1f18e, 0x1f18e,],  // Negative Squared Ab
        [0x1f191, 0x1f19a,],  // Squared Cl              ..Squared Vs
        [0x1f200, 0x1f202,],  // Square Hiragana Hoka    ..Squared Katakana Sa
        [0x1f210, 0x1f23b,],  // Squared Cjk Unified Ideo..Squared Cjk Unified Ideo
        [0x1f240, 0x1f248,],  // Tortoise Shell Bracketed..Tortoise Shell Bracketed
        [0x1f250, 0x1f251,],  // Circled Ideograph Advant..Circled Ideograph Accept
        [0x1f260, 0x1f265,],  // Rounded Symbol For Fu   ..Rounded Symbol For Cai
        [0x1f300, 0x1f320,],  // Cyclone                 ..Shooting Star
        [0x1f32d, 0x1f335,],  // Hot Dog                 ..Cactus
        [0x1f337, 0x1f37c,],  // Tulip                   ..Baby Bottle
        [0x1f37e, 0x1f393,],  // Bottle With Popping Cork..Graduation Cap
        [0x1f3a0, 0x1f3ca,],  // Carousel Horse          ..Swimmer
        [0x1f3cf, 0x1f3d3,],  // Cricket Bat And Ball    ..Table Tennis Paddle And
        [0x1f3e0, 0x1f3f0,],  // House Building          ..European Castle
        [0x1f3f4, 0x1f3f4,],  // Waving Black Flag
        [0x1f3f8, 0x1f43e,],  // Badminton Racquet And Sh..Paw Prints
        [0x1f440, 0x1f440,],  // Eyes
        [0x1f442, 0x1f4fc,],  // Ear                     ..Videocassette
        [0x1f4ff, 0x1f53d,],  // Prayer Beads            ..Down-pointing Small Red
        [0x1f54b, 0x1f54e,],  // Kaaba                   ..Menorah With Nine Branch
        [0x1f550, 0x1f567,],  // Clock Face One Oclock   ..Clock Face Twelve-thirty
        [0x1f57a, 0x1f57a,],  // Man Dancing
        [0x1f595, 0x1f596,],  // Reversed Hand With Middl..Raised Hand With Part Be
        [0x1f5a4, 0x1f5a4,],  // Black Heart
        [0x1f5fb, 0x1f64f,],  // Mount Fuji              ..Person With Folded Hands
        [0x1f680, 0x1f6c5,],  // Rocket                  ..Left Luggage
        [0x1f6cc, 0x1f6cc,],  // Sleeping Accommodation
        [0x1f6d0, 0x1f6d2,],  // Place Of Worship        ..Shopping Trolley
        [0x1f6d5, 0x1f6d7,],  // Hindu Temple            ..Elevator
        [0x1f6dc, 0x1f6df,],  // (nil)                   ..Ring Buoy
        [0x1f6eb, 0x1f6ec,],  // Airplane Departure      ..Airplane Arriving
        [0x1f6f4, 0x1f6fc,],  // Scooter                 ..Roller Skate
        [0x1f7e0, 0x1f7eb,],  // Large Orange Circle     ..Large Brown Square
        [0x1f7f0, 0x1f7f0,],  // Heavy Equals Sign
        [0x1f90c, 0x1f93a,],  // Pinched Fingers         ..Fencer
        [0x1f93c, 0x1f945,],  // Wrestlers               ..Goal Net
        [0x1f947, 0x1f9ff,],  // First Place Medal       ..Nazar Amulet
        [0x1fa70, 0x1fa7c,],  // Ballet Shoes            ..Crutch
        [0x1fa80, 0x1fa88,],  // Yo-yo                   ..(nil)
        [0x1fa90, 0x1fabd,],  // Ringed Planet           ..(nil)
        [0x1fabf, 0x1fac5,],  // (nil)                   ..Person With Crown
        [0x1face, 0x1fadb,],  // (nil)
        [0x1fae0, 0x1fae8,],  // Melting Face            ..(nil)
        [0x1faf0, 0x1faf8,],  // Hand With Index Finger A..(nil)
        [0x20000, 0x2fffd,],  // Cjk Unified Ideograph-20..(nil)
        [0x30000, 0x3fffd,],  // Cjk Unified Ideograph-30..(nil)
    ]
];
// @codeCoverageIgnoreEnd