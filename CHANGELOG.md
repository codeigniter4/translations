# Changelog

All notable changes to this library will be documented in this file:

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [v4.6.3](https://github.com/codeigniter4/translations/compare/v4.6.2...v4.6.3) - 2025-08-02

### Changed

- bn (Bengali)

## [v4.6.2](https://github.com/codeigniter4/translations/compare/v4.6.1...v4.6.2) - 2025-07-26

### Added

- gu (Gujarati)
- hi (Hindi)

### Changed

- ko (Korean)
- pl (Polish)
- sv-SE (Swedish)

### Fixed

- fix: use `0` as percent when file is missing for `array_sum()` (#490)
- fix translation testing (#492)
- Fix data provider order

### Others

- Don't use branch alias for `codeigniter4/codeigniter4`
- chore: use `system/util_bootstrap.php` for non-test scripts
- chore: make `bin/generate-changelog` executable
- Remove deprecated fixer

## [v4.6.1](https://github.com/codeigniter4/translations/compare/v4.6.0...v4.6.1) - 2025-05-02

### Changed

- ar (Arabic)
- id (Indonesian)
- pt-BR (Brazilian)

### Others

- chore: bump runner to ubuntu-24.04
- chore: check code style using lowest and highest PHP version (#487)
- chore: added PHP `8.4` to Github Action (#488)

## [v4.6.0](https://github.com/codeigniter4/translations/compare/v4.5.4...v4.6.0) - 2025-02-21

### Changed

- de (German)
- es (Spanish)
- fa (Farsi)
- ja (Japanese)
- ko (Korean)
- pt (Portuguese)
- ru (Russian)

### Others

- chore: update license year once (#472)
- style: fix coding styles (#475)
- chore: fix badges (#480)

## [v4.5.4](https://github.com/codeigniter4/translations/compare/v4.5.3...v4.5.4) - 2024-11-15

### Changed

- nl (Dutch)
- ru (Russian)
- vi (Vietnamese)

### Others

- chore(deps): bump peter-evans/create-pull-request from 6 to 7 (#468)

## [v4.5.3](https://github.com/codeigniter4/translations/compare/v4.5.2...v4.5.3) - 2024-07-25

### Added

- chore: add `bin/generate-changelog` (#466)

### Changed

- es (Spanish)

### Fixed

- chore: update cs (#464)

## [v4.5.2](https://github.com/codeigniter4/translations/compare/v4.5.1...v4.5.2) - 2024-07-01

### Added

- style: composer cs-fix (#461)
- chore: add composer command "cs-fix" (#460)

### Changed

- de (German)
- fa (Farsi)
- ko (Korean)
- sv-SE (Swedish-Sweden)

## [v4.5.1](https://github.com/codeigniter4/translations/compare/v4.5.0...v4.5.1) - 2024-05-18

### Added

- ta (Tamil)

### Changed

- ja (Japanese)

## [v4.5.0](https://github.com/codeigniter4/translations/compare/v4.4.4...v4.5.0) - 2024-05-05

### Added

- chore(deps): bump peter-evans/create-pull-request from 5 to 6 (#434)
- chore: update PHP versions (#441)
- chore(deps): bump actions/configure-pages from 4 to 5 (#438)
- refactor: update to PHP 8.1 and PHPUnit 10.5 || 11.0 (#445)

### Changed

- fa (Farsi)
- ja (Japanese)
- pt-BR (Portuguese)
- sv-SE (Swedish - Sweden)

## [v4.4.4](https://github.com/codeigniter4/translations/compare/v4.4.3...v4.4.4) - 2024-01-26

### Added

- chore(deps): bump actions/configure-pages from 3 to 4 (#418)
- chore(deps): bump actions/deploy-pages from 2 to 3 (#419)
- chore(deps): bump actions/upload-pages-artifact from 2 to 3 (#426)
- chore(deps): bump actions/deploy-pages from 3 to 4 (#425)
- chore(deps): bump actions/cache from 3 to 4 (#433)

### Changed

- el (Greek)
- es (Spanish)
- fa (Farsi)
- ja (Japanese)
- ko (Korean)
- lt (Lithuanian)
- pt-BR (Brazilian)
- sv-SE (Swedish - Sweden)
- tr (Turkish)

## [v4.4.3](https://github.com/codeigniter4/translations/compare/v4.4.1...v4.4.3) - 2023-10-27

### Fixed

- fix generate-page (#414)

### Changed

- de (German)
- id (Indonesian)
- ja (Japanese)
- ko (Korean)
- lt (Latvian)
- pl (Polish)

## [v4.4.1](https://github.com/codeigniter4/translations/compare/v4.3.8...v4.4.1) - 2023-09-14

### Added

- feat: Support for colored progress bars accdg to percent (#391)
- chore: add dependabot.yml (#401)
- chore(deps): bump actions/checkout from 3 to 4 (#403)
- chore(deps): bump peter-evans/create-pull-request from 4 to 5 (#404)

### Fixed

- \[de\] Convert windows-1252 files to UTF-8 (#399)
- fix: add env.GITHUB_TOKEN to setup-php (#402)

### Changed

- de (German)
- fa (Farsi)
- ja (Japanese)
- ru (Russian)

## [v4.3.8](https://github.com/codeigniter4/translations/compare/v4.3.6...v4.3.8) - 2023-08-25

### Added

- Add permissions to worklows

### Changed

- it (Italian)
- ru (Russian)

### Fixed

- Fix generate-page workflow (#390)
- Fix cs styles (#389)
- Fix compatibility with PHP 7.4

## [v4.3.6](https://github.com/codeigniter4/translations/compare/v4.3.1...v4.3.6) - 2023-06-23

### Changed

- sv-SE (Swedish-Sweden)

### Fixed

- Fix name of build workflow
- Fix intermittent failures on CI (#382)
- docs: fix sr version where the locale was released (#383)

## [v4.3.1](https://github.com/codeigniter4/translations/compare/v4.3.0...v4.3.1) - 2023-03-19

### Added

- sr (Serbian)

### Changed

- bs (Bosnian)
- fa (Farsi)
- ja (Japanese)
- ko (Korean)
- ml (Malayalam)
- ru (Russian)

### Fixed

- Replace deprecated `CLI::isWindows()`

## [v4.3.0](https://github.com/codeigniter4/translations/compare/v4.2.11...v4.3.0) - 2023-01-18

### Added

- bn (Bengali)
- Auto-review updating of license year

### Changed

- de (German)
- id (Indonesian)
- ja (Japanese)
- ko (Korean)
- sv-SE (Swedish-Sweden)

### Fixed

- Set `GITHUB_TOKEN` env in shivammathur/setup-php

## [v4.2.11](https://github.com/codeigniter4/translations/compare/v4.2.7...v4.2.11) - 2022-12-31

### Added

- Add script to generate the translation status webpage and deployed via GitHub Pages
  The status page is live at <https://codeigniter4.github.io/translations/>

### Changed

- fa (Farsi)
- ja (Japanese)
- pl (Polish)
- pt-BR (Brazilian)
- sv-SE (Swedish-Sweden)

### Fixed

- Update .gitattributes
- Fix levels in changelog

## [v4.2.7](https://github.com/codeigniter4/translations/compare/v4.2.5...v4.2.7) - 2022-10-15

### Added

- Add script to add en lang strings as comments
- Add .editorconfig

### Changed

- de (German)
- id (Indonesian)
- ja (Japanese)
- ko (Korean)
- lt (Lithuanian)

### Fixed

- Update action workflows

## [v4.2.5](https://github.com/codeigniter4/translations/compare/v4.2.2...v4.2.5) - 2022-08-29

### Changed

- fa (Farsi)
- ko (Korean)

### Fixed

- Removed deprecated `Nexus/space_after_comment_start` fixer

## [v4.2.2](https://github.com/codeigniter4/translations/compare/v4.2.1...v4.2.2) - 2022-08-07

### Added

- bg (Bulgarian)

### Changed

- ja (Japanese)
- ko (Korean)
- id (Indonesian)
- sv-SE (Swedish-Sweden)

## [v4.2.1](https://github.com/codeigniter4/translations/compare/v4.2.0...v4.2.1) - 2022-06-17

### Added

- ro (Romanian)

### Changed

- de (German)
- ko (Korean)

## [v4.2.0](https://github.com/codeigniter4/translations/compare/v4.1.6...v4.2.0) - 2022-06-04

### Added

- bs (Bosnian)
- hu (Hungarian)
- Added automatic review tests

### Changed

- Minimum PHP version bump to PHP 7.4

### Changed locales (except for `Validation.valid_url_strict` string)

- de (German)
- id (Indonesian)
- ja (Japanese)
- ko (Korean)
- sv-SE (Swedish-Sweden)
- pt-BR (Brazilian)

### Changed locales for `Validation.valid_url_strict` string

- all locales

### Fixed

- Fixed `Simple Chinese` to `Simplified Chinese`

## [v4.1.6](https://github.com/codeigniter4/translations/compare/v4.1.5...v4.1.6) - 2022-01-05

### Added

- Added script to check untranslated locales, using `php bin/test`

### Changed

- de (German)
- ja (Japanese)
- id (Indonesian)
- it (Italian)
- pt-BR (Brazilian)
- sv-SE (Swedish-Sweden)
- zh-CN (Simplified Chinese)
- zh-TW (Traditional Chinese)

## [v4.1.5](https://github.com/codeigniter4/translations/compare/v4.1.4...v4.1.5) - 2021-11-10

### Changed

- fr (French)
- pl (Polish)
- ko (Korean)

## [v4.1.4](https://github.com/codeigniter4/translations/compare/v4.1.3...v4.1.4) - 2021-09-08

### Added

- th (Thai)
- Switch to [official coding standard](https://github.com/codeigniter/coding-standard)

### Changed

- ar (Arabic)
- de (German)
- es (Spanish)
- ja (Japanese)
- sv-SE (Swedish-Sweden)
- zh-TW (Traditional Chinese)

## [v4.1.3](https://github.com/codeigniter4/translations/compare/v4.1.2...v4.1.3) - 2021-06-06

### Changed

- ko (Korean)
- Limit running actions to this repository

## [v4.1.2](https://github.com/codeigniter4/translations/compare/v4.1.1...v4.1.2) - 2021-05-18

### Added

- Add support for testing in PHP 8.0
- Run workflows on schedule using cron
- Support use of branch alias

### Fixed

- Added `.gitattributes` file to exclude test files, fixes [\#226](226). Use the `--prefer-dist` option
  to force composer installs to respect the `.gitattributes` file.

### Changed

- sv-SE (Swedish - Sweden)
- ko (Korean)
- ja (Japanese)
- id (Indonesian)
- lv (Latvian)

[226]: https://github.com/codeigniter4/translations/issues/226

## [v4.1.1](https://github.com/codeigniter4/translations/compare/v4.0.3...v4.1.1) - 2021-02-02

### Fixed

- Re-release of `v4.0.3` to make the commit history of `master` the same with `develop`
- Catch-up of release version to current framework release

## [v4.0.3](https://github.com/codeigniter4/translations/compare/v4.0.2...v4.0.3) - 2021-02-01

### Added

- cs (Czech)
- ja (Japanese)
- lv (Latvian)
- ml (Malayalam)
- nl (Dutch)
- si (Sinhala)
- sv-SE (Swedish - Sweden)
- uk (Ukrainian)
- vi (Vietnamese)

### Changed

- ar (Arabic)
- de (German)
- es (Spanish)
- fa (Farsi)
- fr (French)
- id (Indonesian)
- it (Italian)
- ko (Korean)
- lt (Lithuanian)
- no (Norwegian)
- pl (Polish)
- pt (Portuguese)
- pt-BR (Brazilian)
- ru (Russian)
- sk (Slovak)
- tr (Turkish)
- zh-CN (Simplified Chinese)
- zh-TW (Traditional Chinese)

## [v4.0.2](https://github.com/codeigniter4/translations/compare/v4.0.0-rc.3...v4.0.2) - 2020-04-22

### Added

- ko (Korean)
- lt (Lithuanian)

### Changed

- es (Spanish)
- fr (French)
- id (Indonesian)
- zh-TW (Traditional Chinese)

## [v4.0.0-rc.3](https://github.com/codeigniter4/translations/compare/v4.0.0-rc.2...v4.0.0-rc.3) - 2019-10-19

### Changed

- ar (Arabic)
- de (German)
- es (Spanish)
- fa (Farsi)
- fr (French)
- id (Indonesian)
- it (Italian)
- no Norwegian
- pl (Polish)
- pt (Portugese)
- pt-BR (Brazilian)
- ru (Russian)
- sk (Slovak)
- tr (Turkish)
- zh-CN (Simplified Chinese)

## [v4.0.0-rc.2](https://github.com/codeigniter4/translations/compare/v4.0.0-rc.1.2...v4.0.0-rc.2) - 2019-09-27

### Changed

- no (Norwegian)
- ru (Russian)
- sk (Slovak)

## [v4.0.0-rc.1.2](https://github.com/codeigniter4/translations/compare/v4.0.0-rc.1.1...v4.0.0-rc.1.2) - 2019-09-24

### Changed

- Changed namespace in `composer.json`

## [v4.0.0-rc.1.1](https://github.com/codeigniter4/translations/compare/v4.0.0-rc.1...v4.0.0-rc.1.1) - 2019-09-24

## Changed

- ru (Russian)

## [v4.0.0-rc.1](https://github.com/codeigniter4/translations/compare/v4.0.0-beta.5...v4.0.0-rc.1) - 2019-09-03

Re-release of previous release under the `rc` tag.

## [v4.0.0-beta.5](https://github.com/codeigniter4/translations/compare/v4.0.0-beta.4b...v4.0.0-beta.5) - 2019-08-16

Re-release of previous release under an incremented tag.

## [v4.0.0-beta.4b](https://github.com/codeigniter4/translations/compare/v4.0.0-beta.4...v4.0.0-beta.4b) - 2019-08-13

### Added

- Travis testing

## [v4.0.0-beta.4](https://github.com/codeigniter4/translations/compare/v4.0.0-beta.3...v4.0.0-beta.4) - 2019-08-13

### Added

- no (Norwegian)
- sk (Slovak)

### Changed

- ru (Russian)

## [v4.0.0-beta.3](https://github.com/codeigniter4/translations/compare/v4.0.0-beta.2...v4.0.0-beta.3) - 2019-05-07

### Added

- ru (Russian)

### Changed

- pt-BR (Brazilian)

## [v4.0.0-beta.2](https://github.com/codeigniter4/translations/compare/v4.0.0-beta.1...v4.0.0-beta.2) - 2019-04-04

### Changed

- ar (Arabic)

## [v4.0.0-beta.1](https://github.com/codeigniter4/translations/compare/v4.0.0-alpha.5...v4.0.0-beta.1) - 2019-03-01

### Added

- fa (Farsi)
- zh-CN (Simplified Chinese)

### Changed

- de (German)
- es (Spanish)
- pl (Polish)

## [v4.0.0-alpha.5](https://github.com/codeigniter4/translations/compare/v4.0.0-alpha.4...v4.0.0-alpha.5) - 2019-01-31

### Changed

- it (Italian)
- es (Spanish)

## [v4.0.0-alpha.4](https://github.com/codeigniter4/translations/compare/v4.0.0-alpha.3...v4.0.0-alpha.4) - 2018-12-16

### Added

- fr (French)
- it (Italian)

## [v4.0.0-alpha.3](https://github.com/codeigniter4/translations/releases/tag/v4.0.0-alpha.3) - 2018-11-19

### Added

- ar (Arabic)
- es (Spanish)
- id (Indonesian)
- pl (Polish)
- pt (Portugese)
- pt-BR (Brazilian)
- tr (Turkish)
