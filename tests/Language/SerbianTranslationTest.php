<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Translations\Tests;

/**
 * @internal
 */
final class SerbianTranslationTest extends AbstractTranslationTestCase
{
    protected array $excludedLocaleKeyTranslations = [
        'Migrations.batch',
        'Migrations.namespace',
    ];
}
