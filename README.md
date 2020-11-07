# Better Number Formatter

<p align="center"><img src="./banner.png" /></p>

[![Latest Version](https://badgen.net/packagist/v/konceiver/better-number-formatter)](https://packagist.org/packages/konceiver/better-number-formatter)
[![Software License](https://badgen.net/packagist/license/konceiver/better-number-formatter)](https://packagist.org/packages/konceiver/better-number-formatter)
[![Build Status](https://img.shields.io/github/workflow/status/konceiver/better-number-formatter/run-tests?label=tests)](https://github.com/konceiver/better-number-formatter/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/konceiver/better-number-formatter)](https://codeclimate.com/github/konceiver/better-number-formatter)
[![Quality Score](https://badgen.net/codeclimate/maintainability/konceiver/better-number-formatter)](https://codeclimate.com/github/konceiver/better-number-formatter)
[![Total Downloads](https://badgen.net/packagist/dt/konceiver/better-number-formatter)](https://packagist.org/packages/konceiver/better-number-formatter)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides a DX Focused API for the NumberFormatter of PHP.

## Installation

```bash
composer require konceiver/better-number-formatter
```

## Usage

### With default options

```php
BetterNumberFormatter::new();
```

### With locale

```php
BetterNumberFormatter::new('fi_FI');
```

### With locale and style

```php
BetterNumberFormatter::new('fi_FI', NumberFormatter::DECIMAL);
```

### With locale and setting changed after instantiation

```php
BetterNumberFormatter::new()
    ->withLocale('fi_FI')
    ->withStyle(NumberFormatter::DECIMAL)
    ->formatWithCurrency(10);
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to security@konceiver.dev. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Better Number Formatter is an open-sourced software licensed under the [MIT](LICENSE.md).
