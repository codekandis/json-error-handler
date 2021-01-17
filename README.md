# codekandis/json-error-handler

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]
![Code Coverage][xtlink-code-coverage-badge]

With the JSON error handler you will be able to catch exceptions representing the last occurred JSON error containing the native error codes and error messages of PHP's `JSON` package.

## Index

* [Installation](#installation)
* [How to use](#how-to-use)

## Installation

Install the latest version with

```bash
$ composer require codekandis/json-error-handler
```

## How to use

The following example throws a [`JsonException`][xtlink-php-net-json-exception] with the error code of [`JsonErrorCodes::SYNTAX`][srclink-json-error-codes] with the message of [`JsonErrorMessage::SYNTAX`][srclink-json-error-messages].

```php
json_decode( '{"foobar":}' );
( new JsonErrorHandler() )->handle();
```

The error codes in [`JsonErrorCodes`][srclink-json-error-codes] are equal to [PHP's native `JSON_ERROR`][xtlink-php-net-json-error-constant] constants. The error messages in [`JsonErrorMessages`][srclink-json-error-messages] are equal to [PHP's error messages of `json_last_error_msg()`][xtlink-php-net-json-last-error-msg].



[xtlink-version-badge]: https://img.shields.io/badge/version-2.0.0-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg
[xtlink-code-coverage-badge]: https://img.shields.io/badge/coverage-100%25-green.svg
[xtlink-php-net]: https://php.net
[xtlink-php-net-json-exception]: https://www.php.net/manual/de/class.jsonexception.php
[xtlink-php-net-json-error-constant]: https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
[xtlink-php-net-json-last-error-msg]: https://www.php.net/manual/en/function.json-last-error-msg.php

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE
[srclink-json-error-codes]: ./src/JsonErrorCodes.php
[srclink-json-error-messages]: ./src/JsonErrorMessages.php
[srclink-json-error-handler]: ./src/JsonErrorHandler.php
