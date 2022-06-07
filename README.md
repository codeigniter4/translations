# Translations for CodeIgniter 4 System Messages

![build](https://github.com/codeigniter4/translations/workflows/build/badge.svg?branch=develop)
![code style](https://github.com/codeigniter4/translations/workflows/code%20style/badge.svg?branch=develop)
[![Latest Stable Version](https://poser.pugx.org/codeigniter4/translations/v)](//packagist.org/packages/codeigniter4/translations)
[![Total Downloads](https://poser.pugx.org/codeigniter4/translations/downloads)](//packagist.org/packages/codeigniter4/translations)
[![License](https://poser.pugx.org/codeigniter4/translations/license)](//packagist.org/packages/codeigniter4/translations)

This project contains translations for CodeIgniter 4 localization, *i.e.,* **system/Language/en/**.

Copy the folder(s) for the locales you are interested in, from inside the **Language** folder of
this project to your **app/Language/** folder.

You may then use the CodeIgniter Language class to reference the translations
directly. See the [User Guide](https://codeigniter4.github.io/CodeIgniter4/outgoing/localization.html).

Localization in CodeIgniter 4 follows the
[ISO 639-1 conventions](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes). Each translation set
would go inside a folder named following the two-letter language code from here.

Localization variants are provided for, as folders named with the two-letter ISO 639-1 language code in
lowercase, followed by the two-letter [ISO 3166 country code](https://en.wikipedia.org/wiki/ISO_3166-1)
capitalized, and with the two parts separated by a hyphen.

An example would be "en" for English, and "en-US" for the variations appropriate to the United States.

## Repository Information

Each ICU locale is maintained by a community member, per the table below. The role of maintainers is to
provide a single authority for vetting translations for a given language, since the framework team
claims no expertise beyond English.

| Locale | Language            | As of** | Github User           | Maintainer
|--------|---------------------|---------|-----------------------| --------------------
| ar     | Arabic              | 4.0.0   | [daif][ar]            | Daif Alotaibi
| bs     | Bosnian             | 4.2.0   | [demirkaric][bs]      | Demir Karić
| cs     | Czech               | 4.0.3   | [PavelTajdus][cs]     | Pavel Tajduš
| de     | German              | 4.0.0   | [sba][de]             | Stefan Bauer
| en     | English             | 4.0.0   | **N/A**               | CI team
| es     | Spanish             | 4.0.0   | [nachoaguirre][es]    | Ignacio Aguirre
| fa     | Farsi               | 4.0.0   | [smhnaji][fa]         | Mohammad Naji
| fr     | French              | 4.0.0   | [amuratet][fr]        | Amuratet?
| hu     | Hungarian           | 4.2.0   | [kzolee1][hu]         | Zoltan Kovacs
| id     | Indonesian          | 4.0.0   | [ridho1991][id]       | Mutasim Ridlo
| it     | Italian             | 4.0.0   | [luk3b8][it]          | Luca Rasia
| ja     | Japanese            | 4.0.3   | [kenjis][ja]          | Kenji Suzuki
| ko     | Korean              | 4.0.2   | [codeigniter-kr][kr]  | codeigniter-kr
| lt     | Lithuanian          | 4.0.2   | [dgvirtual][lt]       | Donatas Glodenis
| lv     | Latvian             | 4.0.3   | [davislasis][lv]      | Dāvis Lasis
| ml     | Malayalam           | 4.0.3   | [rakheshthayyur][ml]  | Rakhesh Thayyur
| nl     | Dutch               | 4.0.3   | [JohanSmolders][nl]   | JohanSmolders
| no     | Norwegian           | 4.0.0   | [LA3QMA][no]          | Kai Günter Brandt
| pl     | Polish              | 4.0.0   | [DEVELPL][pl]         | Maciej Jasiewicz
| pt     | Portuguese          | 4.0.0   | [rbm0407][pt]         | Rodrigo Borges
| pt-BR  | Brazilian           | 4.0.0   | [natanfelles][pt-BR]  | Natan Felles
| ro     | Romanian            | 4.2.1   | [ed3][ro]             | Ed
| ru     | Russian             | 4.0.0   | [DigitalWolf98][ru]   | Vladislav Rykhtikov
| si     | Sinhala             | 4.0.3   | [npwsamarasinghe][si] | Nalaka Prasad
| sk     | Slovak              | 4.0.0   | [xbotkaj][sk]         | Jozef Botka
| sv-SE  | Swedish - Sweden    | 4.0.3   | [tangix][sv-SE]       | Mattias Sandström
| th     | Thai                | 4.1.4   | [karidoe][th]         | Anuchit Thiamuan
| tr     | Turkish             | 4.0.0   | [obozdag][tr]         | obozdag
| uk     | Ukrainian           | 4.0.3   | [flybot][uk]          | Serhii Kosyi
| vi     | Vietnamese          | 4.0.3   | [xuandung38][vi]      | XuanDung38
| zh-CN  | Simplified Chinese  | 4.0.0   | [bangbangda][zh-CN]   | bangbangda
| zh-TW  | Traditional Chinese | 4.0.0   | [monkenWu][zh-TW]     | monkenWu

_**Version where the locale was released. 4.x denotes `Unreleased`._

[ar]: https://github.com/daif
[bs]: https://github.com/demirkaric
[cs]: https://github.com/PavelTajdus
[de]: https://github.com/sba
[es]: https://github.com/nachoaguirre
[fa]: https://github.com/smhnaji
[fr]: https://github.com/amuratet
[hu]: https://github.com/kzolee1
[id]: https://github.com/ridho1991
[it]: https://github.com/luk3b8
[ja]: https://github.com/kenjis
[kr]: https://github.com/codeigniter-kr
[lt]: https://github.com/dgvirtual
[lv]: https://github.com/davislasis
[ml]: https://github.com/rakheshthayyur
[nl]: https://github.com/JohanSmolders
[no]: https://github.com/LA3QMA
[pl]: https://github.com/DEVELPL
[pt]: https://github.com/rbm0407
[pt-BR]: https://github.com/natanfelles
[ro]: https://github.com/ed3
[ru]: https://github.com/DigitalWolf98
[si]: https://github.com/npwsamarasinghe
[sk]: https://github.com/xbotkaj
[sv-SE]: https://github.com/tangix
[th]: https://github.com/karidoe
[tr]: https://github.com/obozdag
[uk]: https://github.com/flybot
[vi]: https://github.com/xuandung38
[zh-CN]: https://github.com/bangbangda
[zh-TW]: https://github.com/monkenWu

## Requirements

These translations are intended for use with CodeIgniter 4.x applications.

## Contributing

Please refer to the [Contributing Guide](CONTRIBUTING.md) on how to contribute to this repository. Please
read on the tests' [README](tests/README.md) on running unit tests.

## License

These translations are licensed under the [MIT License](LICENSE).
