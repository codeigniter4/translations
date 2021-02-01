<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Nexus\CsConfig\Factory;
use PhpCsFixer\Finder;
use Utils\PhpCsFixer\CodeIgniter4;

$finder = Finder::create()
	->files()
	->in([__DIR__])
	->append([
		__FILE__,
		'.github/scripts/continuous-integration',
	]);

$overrides = [];

$options = [
	'finder'     => $finder,
	'indent'     => "\t",
	'lineEnding' => "\n",
];

return Factory::create(new CodeIgniter4(), $overrides, $options)->forLibrary(
	'the CodeIgniter 4 framework',
	'CodeIgniter Foundation',
	'admin@codeigniter.com'
);
