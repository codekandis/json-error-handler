# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog 1.1.0][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [3.0.0] - 2024-07-14

### Fixed

* method naming
* PHPDoc

### Changed

* composer package
  * changed
    * description
    * require
      * `php` [>=8.3]
    * require-dev
      * `codekandis/phpunit` [^5.0.0]
  * added
    * version
    * require
      * `codekandis/types` [^1.0.0]
    * require-dev
      * `ext-json` [*]
    * require-dev
      * `rector/rector` [^1.0.5]
    * autoload-dev
      * psr-4
        * `CodeKandis\JsonErrorHandler\Build\`
          * `build/`
* PHPUnit tests
  * configuration
  * externalized data providers
* exception handling
* `CODE_OF_CONDUCT.md`
* `README.md`
  * PHP version `8.3`

### Added

* type hints
* `Override` attributes
* rector
  * configuration script
  * shell script
* code 
* `.gitattributes` to ignore dev-assets

[3.0.0]: https://github.com/codekandis/json-error-handler/compare/2.1.0...3.0.0

---
## [2.1.0] - 2021-01-17

### Changed

* composer package dependencies.
  * changed
    * `minimum-stability` [stable]
    * `codekandis/phlags` [^3]

[2.1.0]: https://github.com/codekandis/json-error-handler/compare/2.0.1...2.1.0

---
## [2.0.1] - 2021-01-17

### Changed

* composer package dependencies
    * changed
        * `codekandis/phpunit` [^3]

[2.0.1]: https://github.com/codekandis/json-error-handler/compare/2.0.0...2.0.1

---
## [2.0.0] - 2021-01-16

### Changed

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

[2.0.0]: https://github.com/codekandis/json-error-handler/compare/1.0.0...2.0.0

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



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.1.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
