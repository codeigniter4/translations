# Running System Tests

This is the quick-start to CodeIgniter testing. Its intent is to describe what
it takes to get your system setup and ready to run the system tests.
It is not intended to be a full description of the test features that you can
use to test your application, since that can be found in the documentation.

## Requirements

It is recommended to use the latest version of PHPUnit. At the time of this
writing we are running version 8.5.9. Support for this has been built into the
**composer.json** file that ships with CodeIgniter, and can easily be installed
via [Composer](https://getcomposer.org/) if you don't already have it installed globally.

	> composer install

If running under OS X or Linux, you can create a symbolic link to make running tests a touch nicer.

	> ln -s ./vendor/bin/phpunit ./phpunit

## Running the Tests

The entire test suite can be ran by simply typing one command from the command line within the main directory.

	> ./phpunit

## Generating Code Coverage

To generate coverage information, including HTML reports you can view in your browser,
you can use the following command:

	> ./phpunit --colors --coverage-text=tests/coverage.txt --coverage-html=tests/coverage/ -d memory_limit=1024m

This runs all of the tests again, collecting information about how many lines,
functions, and files are tested, and the percent of the code that is covered by the tests.
It is collected in two formats: a simple text file that provides an overview,
as well as comprehensive collection of HTML files that show the status of every line of code in the project.

The text file can be found at **tests/coverage.txt**.
The HTML files can be viewed by opening **tests/coverage/index.html** in your favorite browser.

## PHPUnit XML Configuration

The repository has a ``phpunit.xml.dist`` file in the project root, used for
PHPUnit configuration. This is used as a default configuration if you
do not have your own ``phpunit.xml`` in the project root.

The normal practice would be to copy ``phpunit.xml.dist`` to ``phpunit.xml``
(which is git ignored), and to tailor yours as you see fit.
For instance, you might wish to exclude database tests
or automatically generate HTML code coverage reports.
