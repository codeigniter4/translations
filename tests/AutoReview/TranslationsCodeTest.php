<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Translations\Tests\AutoReview;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;
use Translations\Tests\AbstractTranslationTestCase;

/**
 * This test case eases away the boring review of tiny details in one's pull request.
 *
 * @internal
 */
#[CoversNothing]
#[Group('auto-review')]
final class TranslationsCodeTest extends TestCase
{
    public function testLocalesArrayAreArrangedByLocaleCode(): void
    {
        $locales = AbstractTranslationTestCase::$locales;
        $sorted  = $locales;
        uasort($sorted, static fn ($a, $b) => $a <=> $b);

        $this->assertSame($sorted, $locales, 'The `AbstractTranslationTestCase::$locales` property should be arranged by locale code.');
    }

    public function testAllTranslatedLocalesAreIncludedInTheReadMe(): void
    {
        $readme = $this->getContentsOrFail(__DIR__ . '/../../README.md');

        foreach ($this->locales() as $locale) {
            $this->assertSame(1, preg_match(sprintf('/\| %s \s+\|/', $locale), $readme), sprintf(
                'The locale "%s" is not found in the README.md file. Please add it.',
                $locale
            ));
        }
    }

    public function testAllTranslatedLocalesAreNotIncludedInMissing(): void
    {
        $missing = $this->getContentsOrFail(__DIR__ . '/../../MISSING.md');

        foreach ($this->locales() as $locale) {
            $this->assertSame(0, preg_match(sprintf('/\| %s \s+\|/', $locale), $missing), sprintf(
                'The locale "%s" is already translated and should no longer be found in MISSING.md file.',
                $locale
            ));
        }
    }

    /**
     * Get all the ISO 639-1 and 639-2 locale codes.
     *
     * @return iterable<string>
     */
    private function locales(): iterable
    {
        helper('filesystem');

        foreach (directory_map(getcwd() . '/Language', 1) as $dir) {
            yield trim($dir, '\\/');
        }
    }

    private function getContentsOrFail(string $filepath): string
    {
        $contents = @file_get_contents($filepath);

        if ($contents === false) {
            $this->fail(sprintf(
                'Failed to get the contents of %s. It is either not found or not readable.',
                basename($filepath)
            ));
        }

        return $contents;
    }
}
