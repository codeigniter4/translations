<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Translations\Tests\Upstream;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

/**
 * This test case detects language files and keys that the main CI4 repository
 * has gained or lost since the baseline was last recorded.
 *
 * @internal
 */
#[CoversNothing]
#[Group('upstream')]
final class LanguageBaselineTest extends TestCase
{
    private const MAIN_LANGUAGE_REPO = '/../../vendor/codeigniter4/codeigniter4/system/Language/en/';
    private const REFRESH_HINT       = 'Translate the new strings in every locale, then record the change with "php bin/update-upstream-baseline".';

    public function testNoLanguageFilesWereAddedOrRemovedUpstream(): void
    {
        $baseline = array_keys($this->baseline());
        $upstream = array_keys($this->upstream());

        $changes = $this->changes($upstream, $baseline);

        $this->assertEmpty($changes, sprintf(
            "Failed asserting that the language files in the main repository match the recorded baseline.\n%s\n%s",
            implode("\n", $changes),
            self::REFRESH_HINT,
        ));
    }

    public function testNoLanguageKeysWereAddedOrRemovedUpstream(): void
    {
        $baseline = $this->qualifiedKeys($this->baseline());
        $upstream = $this->qualifiedKeys($this->upstream());

        $changes = $this->changes($upstream, $baseline);

        $this->assertEmpty($changes, sprintf(
            "Failed asserting that the language keys in the main repository match the recorded baseline.\n%s\n%s",
            implode("\n", $changes),
            self::REFRESH_HINT,
        ));
    }

    /**
     * Flattens a set of language files into sorted "File.key" entries.
     *
     * @param array<string, list<string>> $sets
     *
     * @return list<string>
     */
    private function qualifiedKeys(array $sets): array
    {
        $qualified = [];

        foreach ($sets as $file => $keys) {
            foreach ($keys as $key) {
                $qualified[] = substr($file, 0, -4) . '.' . $key;
            }
        }

        sort($qualified);

        return $qualified;
    }

    /**
     * Lists every entry the main CI4 repository gained (+) or lost (-)
     * relative to the recorded baseline.
     *
     * @param list<string> $upstream
     * @param list<string> $baseline
     *
     * @return list<string>
     */
    private function changes(array $upstream, array $baseline): array
    {
        $added   = array_diff($upstream, $baseline);
        $removed = array_diff($baseline, $upstream);

        sort($added);
        sort($removed);

        $changes = [];

        foreach ($added as $entry) {
            $changes[] = sprintf('+ %s', $entry);
        }

        foreach ($removed as $entry) {
            $changes[] = sprintf('- %s', $entry);
        }

        return $changes;
    }

    /**
     * @return array<string, list<string>>
     */
    private function baseline(): array
    {
        return require __DIR__ . '/baseline.php';
    }

    /**
     * @return array<string, list<string>>
     */
    private function upstream(): array
    {
        helper(['array', 'filesystem']);

        $enDir = __DIR__ . self::MAIN_LANGUAGE_REPO;

        if (! is_dir($enDir)) {
            $this->fail('No "Language/en" directory. Please run "composer update".');
        }

        $sets = [];

        foreach (directory_map($enDir, 1) as $file) {
            $sets[$file] = array_keys(array_flatten_with_dots(require $enDir . $file));
        }

        ksort($sets);

        return $sets;
    }
}
