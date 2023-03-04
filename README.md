# 🇺🇦 🇼 PHP Wide Character Width
[![PHP Version](https://img.shields.io/packagist/php-v/alecrabbit/php-wcwidth/dev-master.svg)](https://php.net)
[![Build Status](https://github.com/alecrabbit/php-wcwidth/workflows/build/badge.svg)](https://github.com/alecrabbit/php-wcwidth/actions)

[![Build Status](https://scrutinizer-ci.com/g/alecrabbit/php-wcwidth/badges/build.png?b=master)](https://scrutinizer-ci.com/g/alecrabbit/php-wcwidth/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/alecrabbit/php-wcwidth/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/alecrabbit/php-wcwidth/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/alecrabbit/php-wcwidth/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/alecrabbit/php-wcwidth/?branch=master)

[![Latest Stable Version](https://poser.pugx.org/alecrabbit/php-wcwidth/v/stable)](https://packagist.org/packages/alecrabbit/php-wcwidth)
[![Latest Stable Version](https://img.shields.io/packagist/v/alecrabbit/php-wcwidth.svg)](https://packagist.org/packages/alecrabbit/php-wcwidth)
[![Latest Unstable Version](https://poser.pugx.org/alecrabbit/php-wcwidth/v/unstable)](https://packagist.org/packages/alecrabbit/php-wcwidth)

[![License](https://poser.pugx.org/alecrabbit/php-wcwidth/license)](https://packagist.org/packages/alecrabbit/php-wcwidth)
[![Total Downloads](https://poser.pugx.org/alecrabbit/php-wcwidth/downloads)](https://packagist.org/packages/alecrabbit/php-wcwidth)

> This is kinda port of python's [jquast/wcwidth](https://github.com/jquast/wcwidth)

### New version 1.0.0

> - WIP
> - ‼️ API is subject to change until `1.0.0-BETA.0`

[🌐 Unicode release files](src/File/versions.md)

+ [Installation](#installation)
+ [Quick start](#quickstart)
+ [Usage](doc/usage.md)

### <a name="installation"></a> Installation

```bash
$ composer require alecrabbit/php-wcwidth
```

### <a name="quickstart"></a> Quick start

```php
use function AlecRabbit\WcWidth\wcwidth;
use function AlecRabbit\WcWidth\wcswidth;

echo wcwidth('a'); // 1
echo wcwidth('é'); // 1
echo wcwidth('🐘'); // 2
echo wcswidth('🐘🐘🐘'); // 6
```
> see [doc/usage.md](doc/usage.md) for more details. 

### FFI extension
> ‼️ Experimental feature. 

If `FFI` extension is available, it will be used for better performance. To enable it, set `USE_FFI` environment variable to `true`.

```dotenv
USE_FFI=true
```

> Note: When using ffi extension version is ignored completely.
