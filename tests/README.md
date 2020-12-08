# Running Translations Tests

This is the quick-start to CodeIgniter testing. Its intent is to describe what
it takes to get your system setup and ready to run the system tests.
It is not intended to be a full description of the test features that you can
use to test your application, since that can be found in the documentation.

## Requirements

It is recommended to use the latest version of PHPUnit. At the time of this
writing we are running version `9.x`. Support for this has been built into the
**composer.json** file that ships with CodeIgniter, and can easily be installed
via [Composer](https://getcomposer.org/) if you don't already have it installed globally.

	composer update

If running under OS X or Linux, you can create a symbolic link to make running tests a touch nicer.

	ln -s ./vendor/bin/phpunit ./phpunit

## Running the Tests

The entire test suite can be ran by simply running the command below:

	vendor/bin/phpunit

To run the specific test suite for a locale, simply provide the class name of the locale-specific test:

	vendor/bin/phpunit --filter FrenchTranslationTest

Locale-specific test class names follow the named regex pattern `/^(?P<locale>[A-Za-z]+)TranslationTest$/`.

## PHPUnit XML Configuration

The repository has a ``phpunit.xml.dist`` file in the project root, used for
PHPUnit configuration. This is used as a default configuration if you
do not have your own ``phpunit.xml`` in the project root.

The normal practice would be to copy ``phpunit.xml.dist`` to ``phpunit.xml`` (which is git ignored),
and to tailor yours as you see fit.
