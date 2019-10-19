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
	'missingDatabaseTable'   => '`sessionSavePath` deve ter o nome da tabela para o manipulador de sessão de banco de dados funcionar.',
	'invalidSavePath'        => 'Sessão: O caminho configurado "{0}" não é um diretório, não existe ou não pode ser criado.',
	'writeProtectedSavePath' => 'Sessão: O caminho configurado "{0}" não é gravável pelo processo do PHP.',
	'emptySavePath'          => 'Sessão: Nenhum caminho configurado.',
	'invalidSavePathFormat'  => 'Sessão: Formato de caminho Redis inválido: {0}',
];
