<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use CodeIgniter\CodingStandard\CodeIgniter4;
use Nexus\CsConfig\Factory;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->files()
    ->in([__DIR__])
    ->append([
        __FILE__,
        '.github/scripts/continuous-integration',
        '.github/scripts/update-license',
        'bin/generate-changelog',
        'bin/generate-page',
        'bin/test',
        'bin/update-en-comments',
    ]);

$overrides = [];

$options = [
    'finder'     => $finder,
    'usingCache' => true,
];

return Factory::create(new CodeIgniter4(), $overrides, $options)->forLibrary(
    'CodeIgniter 4 framework',
    'CodeIgniter Foundation',
    'admin@codeigniter.com',
);
