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

use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 *
 * @group license-review
 */
final class LicenseTest extends TestCase
{
    public function testLicenseCopyrightYearIsUpdated(): void
    {
        $license = $this->getContentsOrFail(__DIR__ . '/../../LICENSE');

        $updatedCopyrightYear = sprintf(
            '/Copyright \(c\) 2019\-%d CodeIgniter Foundation/',
            date('Y')
        );

        $this->assertSame(1, preg_match($updatedCopyrightYear, $license), sprintf(
            'Expected copyright year to be "Copyright (c) 2019-%d CodeIgniter Foundation" but is not found in LICENSE.',
            date('Y')
        ));
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
