# Contributing to the CodeIgniter 4 Translations

We welcome contributions, to the **develop** branch, to add new translations or update existing ones.

If you have a translation or correction, please fork the repository, clone it
locally, and then create a new branch (from `develop`) for each set of related changes
or for a complete language pack. Once your branch is complete, create a pull
request to merge it into the develop branch of this repository.

If you are contributing a variant of a main locale (e.g. "en-CA"), you
only need to provide those translations that differ from it.

Each translation set would go inside a folder named following the two-letter ISO-639-1 language code.
Localization variants would have folders named with the two-letter ISO 639-1 language code in lowercase,
followed by the two-letter ISO 3166 country code capitalized,
and with the two parts separated by a hyphen. An example would be "en" for English, and "en-US" for the
variations appropriate to the United States.

Pull requests to the repository will only be considered if they come from
the maintainer for any translations in the request, or if the maintainer
adds a comment indicating they approve of any changes.
If a maintainer is unresponsive, or we have a contribution for a new
language, we can add the contributor as a maintainer for that language.

PR conversations should be conducted in English, thanks.

## Process

We would like to see GPG-signed commits for contributions,
and we have unit testing to help determine if your translations are complete.

The unit testing looks for translation sets' missing language settings that
are in the framework repository's `system/Language/en/ folder`, and for settings
in a translation set that are not in that folder.

Unit tests for a specific locale should pass. Failures would be thrown to clearly
show which files are missing or extra or which language strings are missing or extra.

For instance, a test error showing that the `de` translation has extra files not found in the framework:

    1) CodeIgniter\Language\GermanTranslationTest::testAllTranslatedLanguageFilesAreConfigured with data set "de" ('de')
    Failed asserting that translated language file "Seed.php" in "de" locale is configured in the main repository.
    Failed asserting that an array is empty.

Another example showing missing files in the `de` translation set:

    2) CodeIgniter\Language\GermanTranslationTest::testAllConfiguredLanguageFilesAreTranslated with data set "de" ('de')
    Failed asserting that language file "CLI.php" in the main repository is translated in "de" locale.
    Failed asserting that an array is empty.

An example showing missing keys for the `de` translation set:

    3) CodeIgniter\Language\GermanTranslationTest::testAllConfiguredLanguageKeysAreIncluded with data set "de" ('de')
    Failed asserting that the language keys "CLI.altCommandPlural", "CLI.altCommandSingular", "CLI.generateClassName", "CLI.generateFileError", "CLI.generateFileExists", "CLI.generateFileSuccess", "CLI.generateParentClass", "CLI.namespaceNotDefined", "Database.emptyDataset", "Database.emptyPrimaryKey", "Email.sent", "Fabricator.createFailed", "Format.invalidFormatter", "Format.invalidMime", "HTTP.invalidSameSiteSetting", "Migrations.batch", "Migrations.group", "Migrations.missingTable", "Migrations.nameSeeder", "Migrations.namespace", "Session.invalidSameSiteSetting", "Validation.not_in_list" in the main repository are included for translation in "de" locale.
    Failed asserting that an array is empty.

Lastly, an example showing extra keys for the `de` translation set:

    4) CodeIgniter\Language\GermanTranslationTest::testAllIncludedLanguageKeysAreConfigured with data set "de" ('de')
    Failed asserting that the translated language keys "Migrations.badCreateName", "Migrations.writeError" in "de" locale are configured in the main repository.
    Failed asserting that an array is empty.

The failure messages are fully descriptive of what went wrong in the translation process.

## Extending Unit Tests

Each language locale in this repository has a corresponding test class located in `tests/Language/` folder.
These test classes test individually the language sets for its completeness and precision. However, the test
class `CodeIgniter\Language\AllLocalesTranslationTest` tests **ALL** locales at once. This is used for a
full-blown testing of all language sets.

When adding a new locale for translation, the following steps should be followed strictly:

1. Make sure the language files to be translated are found in the framework's main repository.
2. Create a new test class in `tests/Language` folder. For example, the new locale is Canadian French
(fr-CA), then a test class named `CanadianFrenchTranslationTest` will be created. The pattern for naming is
the full name of the new locale followed by `TranslationTest`.
3. This new test class should be extending `CodeIgniter\Language\AbstractTranslationTestCase` and be marked
as a final class. This would not contain any new methods or properties as its sole purpose is to extend
`AbstractTranslationTestCase` for testing the specific locale.
4. In the static `$locales` array of `AbstractTranslationTestCase` this new class should be added. The name
of the new class would be the key and its corresponding locale would be the value. The `$locales` array
should be sorted on the basis of values.
5. Add the details of new locale in [README](README.rst). If the details is originally in
the [MISSING](MISSING.rst), remove the details from there.
6. After that, run the unit tests for your new locale:

        vendor/bin/phpunit --filter CanadianFrenchTranslationTest

7. When tests all pass, go create a pull request!
