# 🇼 PHP Wide Character Width

[![PHP Version](https://img.shields.io/packagist/php-v/alecrabbit/php-wcwidth.svg)](https://php.net)
[![Build Status](https://github.com/alecrabbit/php-wcwidth/workflows/build/badge.svg)](https://github.com/alecrabbit/php-wcwidth/actions)

[![Latest Stable Version](https://poser.pugx.org/alecrabbit/php-wcwidth/v/stable)](https://packagist.org/packages/alecrabbit/php-wcwidth)
[![Latest Stable Version](https://img.shields.io/packagist/v/alecrabbit/php-wcwidth.svg)](https://packagist.org/packages/alecrabbit/php-wcwidth)
[![Latest Unstable Version](https://poser.pugx.org/alecrabbit/php-wcwidth/v/unstable)](https://packagist.org/packages/alecrabbit/php-wcwidth)

[![License](https://poser.pugx.org/alecrabbit/php-wcwidth/license)](https://packagist.org/packages/alecrabbit/php-wcwidth)
[![Total Downloads](https://poser.pugx.org/alecrabbit/php-wcwidth/downloads)](https://packagist.org/packages/alecrabbit/php-wcwidth)

> This is kinda port of python's [jquast/wcwidth](https://github.com/jquast/wcwidth)

[Unicode release files](src/File/versions.md)

### Installation

```bash
$ composer require alecrabbit/php-wcwidth
```

### Usage

```php
use function AlecRabbit\WcWidth\wcwidth;
use function AlecRabbit\WcWidth\wcswidth;

echo wcwidth('a'); // 1
echo wcwidth('é'); // 1
echo wcwidth('🐘'); // 2
echo wcswidth('🐘🐘🐘'); // 6
```

### FFI extension
> ‼️ Experimental feature. 

If `FFI` extension is available, it will be used for better performance. To enable it, set `USE_FFI` environment variable to `true`. See [docker-compose.yml](docker-compose.yml) for example.

