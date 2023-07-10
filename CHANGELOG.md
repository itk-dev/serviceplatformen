# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.5.0] - 2023-07-10

### Changed

- Forced HTTP 1.1
- Handled "Fjernprint" in
  <https://digitaliseringskataloget.dk/integration/sf1601>.
- Changed handling of `SoapClient` options in `AbstractService`.
- Upgraded to php-http/guzzle7-adapter

## [1.4.0] - 2023-05-02

### Added

- Added search for users

## [1.3.0] - 2023-02-03

### Added

- Added support for
  [SF1500](https://digitaliseringskataloget.dk/integration/sf1500)
- Added support for
  [SF1514](https://digitaliseringskataloget.dk/integration/sf1514)

## [1.2.1] - 2023-02-01

### Changed

- Removed vault secret from JSON serialization.
- Fixed issue on case-insensitive file systems

## [1.2.0] - 2023-01-18

### Added

- Added support for
  [SF1601](https://digitaliseringskataloget.dk/integration/sf1601)

## [1.1.0] - 2021-06-18

### Added

- Functionality to make call to the getLegalUnit operation on the Online service.

## [1.0.0] - 2021-03-17

### Changed

- Required ^1.0 version of Azure Key Vault library.
- Updated [README](README.md) with usage example that uses the latest version of
  Azure Key Vault library.

## [0.0.4] - 2020-10-20

### Changed

- Casting specific exceptions on service call errors.

## [0.0.3] - 2020-09-22

### Changed

- Upgraded required version of PHP to 7.2
- Required 0.0.2 version of azure key vault library

## [0.0.2] - 2020-09-22

### Changed

- Downgraded required version of PHP to 7.1.3

## [0.0.1] - 2020-09-22

### Added

- README file
- CHANGELOG file
- LICENSE file
- PHP CS Fixer configuration
- PHP_CodeSniffer configuration
- PHPUnit configuration
- Phan configuration
- Functionality for making calls to the PersonBaseDataExtended service.
- Possibility to use certificates stored in Azure Key Vault.

[Unreleased]: https://github.com/itk-dev/serviceplatformen/compare/1.5.0...HEAD
[1.5.0]: https://github.com/itk-dev/serviceplatformen/compare/1.4.0...1.5.0
[1.4.0]: https://github.com/itk-dev/serviceplatformen/compare/1.3.0...1.4.0
[1.3.0]: https://github.com/itk-dev/serviceplatformen/compare/1.2.1...1.3.0
[1.2.1]: https://github.com/itk-dev/serviceplatformen/compare/1.2.0...1.2.1
[1.2.0]: https://github.com/itk-dev/serviceplatformen/compare/1.1.0...1.2.0
[1.1.0]: https://github.com/itk-dev/serviceplatformen/compare/1.0.0...1.1.0
[1.0.0]: https://github.com/itk-dev/serviceplatformen/compare/0.0.4...1.0.0
[0.0.4]: https://github.com/itk-dev/serviceplatformen/compare/0.0.3...0.0.4
[0.0.3]: https://github.com/itk-dev/serviceplatformen/compare/0.0.2...0.0.3
[0.0.2]: https://github.com/itk-dev/serviceplatformen/compare/0.0.1...0.0.2
[0.0.1]: https://github.com/itk-dev/serviceplatformen/releases/tag/0.0.1
