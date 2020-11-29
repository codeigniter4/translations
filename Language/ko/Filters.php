<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Filters language settings
return [
	'noFilter'           => '{0} 필터는 매치되는 별칭이 정의되어 있어야 합니다.', // '{0} filter must have a matching alias defined.',
	'incorrectInterface' => '{0} 경우에는 CodeIgniter\Filters\FilterInterface 인터페이스를 구현해야 합니다.', // '은(는)' 보조사 대신 '경우에는' 사용. // CI4 기준 : if (! $class instanceof FilterInterface) 경우에 에러 메시지 // '{0} must implement CodeIgniter\Filters\FilterInterface.',
];
