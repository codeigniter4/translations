<?php
/**
 * Session language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	'missingDatabaseTable'   => '`sessionSavePath` deve ter o nome da tabela para o Database Session Handler funcionar.',
	'invalidSavePath'        => 'Sessão: O save path "{0}" configurado não é um diretório, não existe ou não pode ser criado.',
	'writeProtectedSavePath' => 'Sessão: O save path "{0}" configurado não é gravável pelo processo do PHP.',
	'emptySavePath'          => 'Sessão: Nenhum save path configurado.',
	'invalidSavePathFormat'  => 'Sessão: Formato do Redis save path é inválido: {0}',
];
