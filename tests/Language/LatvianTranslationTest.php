<?php

/**
 * This file is part of the CodeIgniter 4 framework.
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
final class LatvianTranslationTest extends AbstractTranslationTestCase
{
	protected function setUp(): void
	{
		// The keys of this locale that do not differ from the english value even if translated.
		$this->excludedLocaleKeyTranslations = [
			'HTTP.curlError',
			'Number.terabyteAbbr',
			'Number.gigabyteAbbr',
			'Number.megabyteAbbr',
			'Number.kilobyteAbbr',
		];
	}
}
