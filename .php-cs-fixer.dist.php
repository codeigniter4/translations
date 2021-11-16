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
use Nexus\CsConfig\Fixer\Comment\NoCodeSeparatorCommentFixer;
use Nexus\CsConfig\Fixer\Comment\SpaceAfterCommentStartFixer;
use Nexus\CsConfig\FixerGenerator;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->files()
    ->in([__DIR__])
    ->append([
        __FILE__,
        '.github/scripts/continuous-integration',
        'bin/test',
    ]);

$overrides = [];

$options = [
    'finder'       => $finder,
    'usingCache'   => true,
    'customFixers' => FixerGenerator::create('vendor/nexusphp/cs-config/src/Fixer', 'Nexus\\CsConfig\\Fixer'),
    'customRules'  => [
        NoCodeSeparatorCommentFixer::name() => true,
        SpaceAfterCommentStartFixer::name() => true,
    ],
];

return Factory::create(new CodeIgniter4(), $overrides, $options)->forLibrary(
    'CodeIgniter 4 framework',
    'CodeIgniter Foundation',
    'admin@codeigniter.com'
);
