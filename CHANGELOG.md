# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.3.0] - 2025-07-03

### Added
- Added support for OctoberCMS 4.x
- Added configuration to customize the HTTP response status code

## [2.2.1] - 2023-06-12

- Maintenance release.
- Set minimum required PHP version to ^8.0.2 (to match October CMS' PHP requirement).

## [2.2.0] - 2023-02-17

- Fix namespace of MaintenanceServiceProvider.
- Fix namespace of ResponseMaker.
- Drop support for older October CMS versions (<3.0).
- Drop support for PHP 7.4

## [2.1.2] - 2022-02-02

### Added

- Add .gitattributes file to repository.

### Changed

- Move `ResponseMaker` interface to `Classes\Contracts` namespace.

## [2.1.1] - 2022-01-07

### Added

- Add configuration option `use_preferred_locale` to switch locale based on preferred locale from browser request.

## [2.1.0] - 2021-08-30

- Move Service Provider to ServiceProviders namespace.
- Add CHANGELOG file.

## [2.0.0] - 2021-07-13

- Add support for PHP 7.4 and higher.
