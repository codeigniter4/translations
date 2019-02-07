##############################################
Translations for CodeIgniter 4 System Messages
##############################################

This project contains translations for CodeIgniter 4
localization, eg. **system/Language/en**.

Copy the folder(s) for the locales you are interested in,
from inside the **Language** folder of this project to your
**application/Language** folder.

You may then use the CodeIgniter Language class to reference the translations
directly ... see the `User Guide <https://codeigniter4.github.io/CodeIgniter4/outgoing/localization.html>`_.

Localization in CodeIgniter 4 follows the `ISO 639-1 conventions <https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes>`_.
Each translation set would go inside a folder named following the two-letter language code from here.

Localization variants are provided for, as folders named with the two-letter ISO 639-1 language code in lowercase, followed by the two-letter `ISO 3166 country code <https://en.wikipedia.org/wiki/ISO_3166-1>`_ capitalized, and with the two parts separated by a hyphen. An example would be "en" for English, and "en-US" for the variations appropriate to the United States.

**********************
Repository Information
**********************

Each language is maintained by a community member, per the table below.
The role of maintainers is to provide a single authority for vetting
translations for a given language, since the framework team claims no
expertise beyond English.


========  ===============  ===========  =================  =========================
Locale    Language         As of        Github User        Maintainer
========  ===============  ===========  =================  =========================
ar        Arabic           4.0.0        daif               Daif Alotaibi
en        English          4.0.0        n/a                CI team
de        German           4.0.0*       sba                Stefan Bauer
fr        French           4.0.0        amuratet           Amuratet?
id        Indonesian       4.0.0        ridho1991          Mutasim Ridlo
it        Italian          4.0.0        luk3b8             Luca Rasia
pl        Polish           4.0.0        DEVELPL            Maciej Jasiewicz
pt        Portugese        4.0.0        rbm0407            Rodrigo Borges
pt-BR     Brazilian        4.0.0        natanfelles        Natan Felles
es        Spanish          4.0.0        NandyJoshu         Fernán Castro Asensio
tr        Turkish          4.0.0        obozdag            obozdag
========  ===============  ===========  =================  =========================

************
Requirements
************

These translations are intended for use with CodeIgniter 4.x applications.

*******
License
*******

These translations are licensed under the `MIT license <license.txt>`_.

************
Contributing
************

If you have a translation or correction, please fork the repository, clone it
locally, and then create a new branch (from master)
for each set of related changes or for
a complete language pack. Once your branch is complete, *then* create a pull
request to merge it into the main repository.

If you are contributing a variant of a main locale (e.g. "en-CA"), you
only need to provide those translations that differ from it.

Unlike the framework repository, we are not insisting on GPG-signed
commits here, but please remember to "sign" your commits.

Pull requests to the repository will only be considered if they come from
the maintainer for any translations in the request, or if the maintainer
adds a comment indicating they approve of any changes.
If a maintainer is unresponsive, or we have a contribution for a new
language, we can add the contributor as a maintainer for that language.

PR conversations should be conducted in English, thanks.

`Jim Parry <jim_parry@bcit.ca>`_
