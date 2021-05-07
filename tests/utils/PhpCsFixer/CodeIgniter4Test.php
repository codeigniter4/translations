<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Utils\Tests\PhpCsFixer;

use Nexus\CsConfig\Ruleset\RulesetInterface;
use Nexus\CsConfig\Test\AbstractRulesetTestCase;

/**
 * @internal
 */
final class CodeIgniter4Test extends AbstractRulesetTestCase
{
	protected static function createRuleset(): RulesetInterface
	{
		$className = preg_replace('/^(Utils)\\\\Tests(\\\\.+)Test$/', '$1$2', self::class);

		return new $className();
	}
}
