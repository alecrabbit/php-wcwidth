<?php

declare(strict_types=1);

namespace AlecRabbit\WCWidth;

// @codeCoverageIgnoreStart
const ZERO_WIDTH = [
    '15.0.0' => [
        [0x00300, 0x0036f,],
        [0x00483, 0x00489,],
        [0x00591, 0x005bd,],
        [0x005bf, 0x005bf,],
        [0x005c1, 0x005c2,],
        [0x005c4, 0x005c5,],
        [0x005c7, 0x005c7,],
        [0x00610, 0x0061a,],
        [0x0064b, 0x0065f,],
        [0x00670, 0x00670,],
        [0x006d6, 0x006dc,],
        [0x006df, 0x006e4,],
        [0x006e7, 0x006e8,],
        [0x006ea, 0x006ed,],
        [0x00711, 0x00711,],
        [0x00730, 0x0074a,],
        [0x007a6, 0x007b0,],
        [0x007eb, 0x007f3,],
        [0x007fd, 0x007fd,],
        [0x00816, 0x00819,],
        [0x0081b, 0x00823,],
        [0x00825, 0x00827,],
        [0x00829, 0x0082d,],
        [0x00859, 0x0085b,],
        [0x00898, 0x0089f,],
        [0x008ca, 0x008e1,],
        [0x008e3, 0x00902,],
        [0x0093a, 0x0093a,],
        [0x0093c, 0x0093c,],
        [0x00941, 0x00948,],
        [0x0094d, 0x0094d,],
        [0x00951, 0x00957,],
        [0x00962, 0x00963,],
        [0x00981, 0x00981,],
        [0x009bc, 0x009bc,],
        [0x009c1, 0x009c4,],
        [0x009cd, 0x009cd,],
        [0x009e2, 0x009e3,],
        [0x009fe, 0x009fe,],
        [0x00a01, 0x00a02,],
        [0x00a3c, 0x00a3c,],
        [0x00a41, 0x00a42,],
        [0x00a47, 0x00a48,],
        [0x00a4b, 0x00a4d,],
        [0x00a51, 0x00a51,],
        [0x00a70, 0x00a71,],
        [0x00a75, 0x00a75,],
        [0x00a81, 0x00a82,],
        [0x00abc, 0x00abc,],
        [0x00ac1, 0x00ac5,],
        [0x00ac7, 0x00ac8,],
        [0x00acd, 0x00acd,],
        [0x00ae2, 0x00ae3,],
        [0x00afa, 0x00aff,],
        [0x00b01, 0x00b01,],
        [0x00b3c, 0x00b3c,],
        [0x00b3f, 0x00b3f,],
        [0x00b41, 0x00b44,],
        [0x00b4d, 0x00b4d,],
        [0x00b55, 0x00b56,],
        [0x00b62, 0x00b63,],
        [0x00b82, 0x00b82,],
        [0x00bc0, 0x00bc0,],
        [0x00bcd, 0x00bcd,],
        [0x00c00, 0x00c00,],
        [0x00c04, 0x00c04,],
        [0x00c3c, 0x00c3c,],
        [0x00c3e, 0x00c40,],
        [0x00c46, 0x00c48,],
        [0x00c4a, 0x00c4d,],
        [0x00c55, 0x00c56,],
        [0x00c62, 0x00c63,],
        [0x00c81, 0x00c81,],
        [0x00cbc, 0x00cbc,],
        [0x00cbf, 0x00cbf,],
        [0x00cc6, 0x00cc6,],
        [0x00ccc, 0x00ccd,],
        [0x00ce2, 0x00ce3,],
        [0x00d00, 0x00d01,],
        [0x00d3b, 0x00d3c,],
        [0x00d41, 0x00d44,],
        [0x00d4d, 0x00d4d,],
        [0x00d62, 0x00d63,],
        [0x00d81, 0x00d81,],
        [0x00dca, 0x00dca,],
        [0x00dd2, 0x00dd4,],
        [0x00dd6, 0x00dd6,],
        [0x00e31, 0x00e31,],
        [0x00e34, 0x00e3a,],
        [0x00e47, 0x00e4e,],
        [0x00eb1, 0x00eb1,],
        [0x00eb4, 0x00ebc,],
        [0x00ec8, 0x00ece,],
        [0x00f18, 0x00f19,],
        [0x00f35, 0x00f35,],
        [0x00f37, 0x00f37,],
        [0x00f39, 0x00f39,],
        [0x00f71, 0x00f7e,],
        [0x00f80, 0x00f84,],
        [0x00f86, 0x00f87,],
        [0x00f8d, 0x00f97,],
        [0x00f99, 0x00fbc,],
        [0x00fc6, 0x00fc6,],
        [0x0102d, 0x01030,],
        [0x01032, 0x01037,],
        [0x01039, 0x0103a,],
        [0x0103d, 0x0103e,],
        [0x01058, 0x01059,],
        [0x0105e, 0x01060,],
        [0x01071, 0x01074,],
        [0x01082, 0x01082,],
        [0x01085, 0x01086,],
        [0x0108d, 0x0108d,],
        [0x0109d, 0x0109d,],
        [0x0135d, 0x0135f,],
        [0x01712, 0x01714,],
        [0x01732, 0x01733,],
        [0x01752, 0x01753,],
        [0x01772, 0x01773,],
        [0x017b4, 0x017b5,],
        [0x017b7, 0x017bd,],
        [0x017c6, 0x017c6,],
        [0x017c9, 0x017d3,],
        [0x017dd, 0x017dd,],
        [0x0180b, 0x0180d,],
        [0x0180f, 0x0180f,],
        [0x01885, 0x01886,],
        [0x018a9, 0x018a9,],
        [0x01920, 0x01922,],
        [0x01927, 0x01928,],
        [0x01932, 0x01932,],
        [0x01939, 0x0193b,],
        [0x01a17, 0x01a18,],
        [0x01a1b, 0x01a1b,],
        [0x01a56, 0x01a56,],
        [0x01a58, 0x01a5e,],
        [0x01a60, 0x01a60,],
        [0x01a62, 0x01a62,],
        [0x01a65, 0x01a6c,],
        [0x01a73, 0x01a7c,],
        [0x01a7f, 0x01a7f,],
        [0x01ab0, 0x01ace,],
        [0x01b00, 0x01b03,],
        [0x01b34, 0x01b34,],
        [0x01b36, 0x01b3a,],
        [0x01b3c, 0x01b3c,],
        [0x01b42, 0x01b42,],
        [0x01b6b, 0x01b73,],
        [0x01b80, 0x01b81,],
        [0x01ba2, 0x01ba5,],
        [0x01ba8, 0x01ba9,],
        [0x01bab, 0x01bad,],
        [0x01be6, 0x01be6,],
        [0x01be8, 0x01be9,],
        [0x01bed, 0x01bed,],
        [0x01bef, 0x01bf1,],
        [0x01c2c, 0x01c33,],
        [0x01c36, 0x01c37,],
        [0x01cd0, 0x01cd2,],
        [0x01cd4, 0x01ce0,],
        [0x01ce2, 0x01ce8,],
        [0x01ced, 0x01ced,],
        [0x01cf4, 0x01cf4,],
        [0x01cf8, 0x01cf9,],
        [0x01dc0, 0x01dff,],
        [0x020d0, 0x020f0,],
        [0x02cef, 0x02cf1,],
        [0x02d7f, 0x02d7f,],
        [0x02de0, 0x02dff,],
        [0x0302a, 0x0302d,],
        [0x03099, 0x0309a,],
        [0x0a66f, 0x0a672,],
        [0x0a674, 0x0a67d,],
        [0x0a69e, 0x0a69f,],
        [0x0a6f0, 0x0a6f1,],
        [0x0a802, 0x0a802,],
        [0x0a806, 0x0a806,],
        [0x0a80b, 0x0a80b,],
        [0x0a825, 0x0a826,],
        [0x0a82c, 0x0a82c,],
        [0x0a8c4, 0x0a8c5,],
        [0x0a8e0, 0x0a8f1,],
        [0x0a8ff, 0x0a8ff,],
        [0x0a926, 0x0a92d,],
        [0x0a947, 0x0a951,],
        [0x0a980, 0x0a982,],
        [0x0a9b3, 0x0a9b3,],
        [0x0a9b6, 0x0a9b9,],
        [0x0a9bc, 0x0a9bd,],
        [0x0a9e5, 0x0a9e5,],
        [0x0aa29, 0x0aa2e,],
        [0x0aa31, 0x0aa32,],
        [0x0aa35, 0x0aa36,],
        [0x0aa43, 0x0aa43,],
        [0x0aa4c, 0x0aa4c,],
        [0x0aa7c, 0x0aa7c,],
        [0x0aab0, 0x0aab0,],
        [0x0aab2, 0x0aab4,],
        [0x0aab7, 0x0aab8,],
        [0x0aabe, 0x0aabf,],
        [0x0aac1, 0x0aac1,],
        [0x0aaec, 0x0aaed,],
        [0x0aaf6, 0x0aaf6,],
        [0x0abe5, 0x0abe5,],
        [0x0abe8, 0x0abe8,],
        [0x0abed, 0x0abed,],
        [0x0fb1e, 0x0fb1e,],
        [0x0fe00, 0x0fe0f,],
        [0x0fe20, 0x0fe2f,],
        [0x101fd, 0x101fd,],
        [0x102e0, 0x102e0,],
        [0x10376, 0x1037a,],
        [0x10a01, 0x10a03,],
        [0x10a05, 0x10a06,],
        [0x10a0c, 0x10a0f,],
        [0x10a38, 0x10a3a,],
        [0x10a3f, 0x10a3f,],
        [0x10ae5, 0x10ae6,],
        [0x10d24, 0x10d27,],
        [0x10eab, 0x10eac,],
        [0x10efd, 0x10eff,],
        [0x10f46, 0x10f50,],
        [0x10f82, 0x10f85,],
        [0x11001, 0x11001,],
        [0x11038, 0x11046,],
        [0x11070, 0x11070,],
        [0x11073, 0x11074,],
        [0x1107f, 0x11081,],
        [0x110b3, 0x110b6,],
        [0x110b9, 0x110ba,],
        [0x110c2, 0x110c2,],
        [0x11100, 0x11102,],
        [0x11127, 0x1112b,],
        [0x1112d, 0x11134,],
        [0x11173, 0x11173,],
        [0x11180, 0x11181,],
        [0x111b6, 0x111be,],
        [0x111c9, 0x111cc,],
        [0x111cf, 0x111cf,],
        [0x1122f, 0x11231,],
        [0x11234, 0x11234,],
        [0x11236, 0x11237,],
        [0x1123e, 0x1123e,],
        [0x11241, 0x11241,],
        [0x112df, 0x112df,],
        [0x112e3, 0x112ea,],
        [0x11300, 0x11301,],
        [0x1133b, 0x1133c,],
        [0x11340, 0x11340,],
        [0x11366, 0x1136c,],
        [0x11370, 0x11374,],
        [0x11438, 0x1143f,],
        [0x11442, 0x11444,],
        [0x11446, 0x11446,],
        [0x1145e, 0x1145e,],
        [0x114b3, 0x114b8,],
        [0x114ba, 0x114ba,],
        [0x114bf, 0x114c0,],
        [0x114c2, 0x114c3,],
        [0x115b2, 0x115b5,],
        [0x115bc, 0x115bd,],
        [0x115bf, 0x115c0,],
        [0x115dc, 0x115dd,],
        [0x11633, 0x1163a,],
        [0x1163d, 0x1163d,],
        [0x1163f, 0x11640,],
        [0x116ab, 0x116ab,],
        [0x116ad, 0x116ad,],
        [0x116b0, 0x116b5,],
        [0x116b7, 0x116b7,],
        [0x1171d, 0x1171f,],
        [0x11722, 0x11725,],
        [0x11727, 0x1172b,],
        [0x1182f, 0x11837,],
        [0x11839, 0x1183a,],
        [0x1193b, 0x1193c,],
        [0x1193e, 0x1193e,],
        [0x11943, 0x11943,],
        [0x119d4, 0x119d7,],
        [0x119da, 0x119db,],
        [0x119e0, 0x119e0,],
        [0x11a01, 0x11a0a,],
        [0x11a33, 0x11a38,],
        [0x11a3b, 0x11a3e,],
        [0x11a47, 0x11a47,],
        [0x11a51, 0x11a56,],
        [0x11a59, 0x11a5b,],
        [0x11a8a, 0x11a96,],
        [0x11a98, 0x11a99,],
        [0x11c30, 0x11c36,],
        [0x11c38, 0x11c3d,],
        [0x11c3f, 0x11c3f,],
        [0x11c92, 0x11ca7,],
        [0x11caa, 0x11cb0,],
        [0x11cb2, 0x11cb3,],
        [0x11cb5, 0x11cb6,],
        [0x11d31, 0x11d36,],
        [0x11d3a, 0x11d3a,],
        [0x11d3c, 0x11d3d,],
        [0x11d3f, 0x11d45,],
        [0x11d47, 0x11d47,],
        [0x11d90, 0x11d91,],
        [0x11d95, 0x11d95,],
        [0x11d97, 0x11d97,],
        [0x11ef3, 0x11ef4,],
        [0x11f00, 0x11f01,],
        [0x11f36, 0x11f3a,],
        [0x11f40, 0x11f40,],
        [0x11f42, 0x11f42,],
        [0x13440, 0x13440,],
        [0x13447, 0x13455,],
        [0x16af0, 0x16af4,],
        [0x16b30, 0x16b36,],
        [0x16f4f, 0x16f4f,],
        [0x16f8f, 0x16f92,],
        [0x16fe4, 0x16fe4,],
        [0x1bc9d, 0x1bc9e,],
        [0x1cf00, 0x1cf2d,],
        [0x1cf30, 0x1cf46,],
        [0x1d167, 0x1d169,],
        [0x1d17b, 0x1d182,],
        [0x1d185, 0x1d18b,],
        [0x1d1aa, 0x1d1ad,],
        [0x1d242, 0x1d244,],
        [0x1da00, 0x1da36,],
        [0x1da3b, 0x1da6c,],
        [0x1da75, 0x1da75,],
        [0x1da84, 0x1da84,],
        [0x1da9b, 0x1da9f,],
        [0x1daa1, 0x1daaf,],
        [0x1e000, 0x1e006,],
        [0x1e008, 0x1e018,],
        [0x1e01b, 0x1e021,],
        [0x1e023, 0x1e024,],
        [0x1e026, 0x1e02a,],
        [0x1e08f, 0x1e08f,],
        [0x1e130, 0x1e136,],
        [0x1e2ae, 0x1e2ae,],
        [0x1e2ec, 0x1e2ef,],
        [0x1e4ec, 0x1e4ef,],
        [0x1e8d0, 0x1e8d6,],
        [0x1e944, 0x1e94a,],
        [0xe0100, 0xe01ef,],
    ],
];
// @codeCoverageIgnoreEnd
