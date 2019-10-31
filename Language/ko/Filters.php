<?php

/**
 * Filters language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'noFilter'           => '{0} 필터는 매치되는 별칭이 정의되어 있어야 합니다.', // '{0} filter must have a matching alias defined.',
   'incorrectInterface' => '{0} 경우에는 CodeIgniter\Filters\FilterInterface 인터페이스를 구현해야 합니다.', // '은(는)' 보조사 대신 '경우에는' 사용. // CI4 rc.1기준 : if (! $class instanceof FilterInterface) 경우에 에러 메시지 // '{0} must implement CodeIgniter\Filters\FilterInterface.',
];
