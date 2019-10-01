# Contributing to the CodeIgniter 4 translations

We welcome contributions, to the *develop* branch,
 to add new translations or update existing ones.

If you have a translation or correction, please fork the repository, clone it
locally, and then create a new branch (from develop)
for each set of related changes or for
a complete language pack. Once your branch is complete, *then* create a pull
request to merge it into the develop branch of this repository.

If you are contributing a variant of a main locale (e.g. "en-CA"), you
only need to provide those translations that differ from it.

Each translation set would go inside a folder named following the two-letter ISO-639-1 language code.
Localization variants would have folders named with the two-letter ISO 639-1 language code in lowercase, 
followed by the two-letter ISO 3166 country code capitalized, 
and with the two parts separated by a hyphen. 
An example would be "en" for English, and "en-US" for the variations appropriate to the United States.

Pull requests to the repository will only be considered if they come from
the maintainer for any translations in the request, or if the maintainer
adds a comment indicating they approve of any changes.
If a maintainer is unresponsive, or we have a contribution for a new
language, we can add the contributor as a maintainer for that language.

PR conversations should be conducted in English, thanks.

## Process

We would like to see GPG-signed commits for contributions,
and we have unit testing to help determine if your translations are complete.

The unit testing looks for translation sets missing language settings that
are in the framework repository's `app/Language/en folder`, and for settings
in a translation set that are not in that folder.

The unit testing is expected to fail, unless all translation sets are totally
in synch with the framework's. Look for your language set in the travis-ci
details for your pull request.

For instance, a travis-ci excerpt showing that the `fa` translation is missing
a specific set of messages:

    12) CodeIgniter\Language\TranslationsTest::testExtraFiles with data set "fa" ('fa')
    fa has extra files: Filter.php

This was caused by `Filters.php` incorrectly named `Filter,php`.

An example showing missing keys for the `sk` translation set:

    10) CodeIgniter\Language\TranslationsTest::testMissingFiles with data set "sk" ('sk')
    sk is missing: RESTful.php Email.php Encryption.php

These would be caused by message sets added to the framework but not here.

And an example showing extra keys for the `it` translation set:

    33) CodeIgniter\Language\TranslationsTest::testExtraKeys with data set "it" ('it')
    it has extra keys: Files.invalidFilename Files.cannotCopy Images.unsupportedImagecreate

This would be caused by messages removed or renamed in the framework, and not reflected here.
