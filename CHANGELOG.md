# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [2.0.0] - 2021-01-16

### Updated

* composer package dependencies
    * removed
        * `sensiolabs/security-checker`
        * `phpunit/phpunit`
        * `codekandis/code-message-interpreter`
    * updated
        * `php` [^7.4]
    * added
        * `codekandis/phpunit` [^2]
        * `codekandis/constants-classes-translator` [^1]
* refactored `JsonErrorCodesInterpreter` to `JsonErrorCodesTranslator`

### Added

* `PHPUnit` tests for the `Base64DecoderErrorCodesTranslator`

[2.0.0]: https://github.com/codekandis/json-error-handler/compare/1.0.0..2.0.0

---
## [1.0.0] - 2019-08-11

### Added

* `JsonErrorCodes` representing PHP's native JSON error codes
* `JsonErrorMessages` representing PHP's native JSON error messages
* `JsonErrorCodesInterpreter` to get PHP's native JSON error messages from error codes
* `PHPUnit` tests
* `README.md`
* `CHANGELOG.md`

[1.0.0]: https://github.com/codekandis/json-error-handler/tree/1.0.0



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.0.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
