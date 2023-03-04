[⬅️ to README.md](../README.md)

## Usage

### Description

```php
function wcwidth(string $wc, ?string $version = null): int;
```
 - `$wc` - single character, if a string is passed, only first character will be used.
 - `$version` - Unicode version, see details below.

```php
function wcswidth(string $wcs, ?string $version = null): int;
```
- `$wcs` - string of characters
- `$version` - Unicode version, see details below.

### Unicode version

> Note: When using ffi extension version is ignored completely.

Unicode version can be set globally for all functions using `UnicodeVersion::set()` method or through `UNICODE_VERSION` environment variable automatically.  
```php
use AlecRabbit\WcWidth\UnicodeVersion;

UnicodeVersion::set('12.1.0');
```
```dotenv
UNICODE_VERSION=latest # or 15.0.0
```
Or you can pass `$version` argument to `wcwidth()` and `wcswidth()` functions.

> Note: `$version` is ignored if version is already set globally.

```php
use function AlecRabbit\WcWidth\wcwidth;

echo wcwidth('a', '14.0.0'); // 1
```

To get current version use `UnicodeVersion::get()` method.

```php
use AlecRabbit\WcWidth\UnicodeVersion;

echo UnicodeVersion::get(); // 14.0.0
```

If, for some reason, you need to reset current version to `null`, use `UnicodeVersion::reset()` method.

```php
use AlecRabbit\WcWidth\UnicodeVersion;

UnicodeVersion::reset();
```
