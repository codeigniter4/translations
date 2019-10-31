<?php
/**
 * Migration language strings.
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
	// Migration Runner
	'missingTable'    => 'Tabela de migrações deve ser definida.',
	'disabled'        => 'As migrações foram carregadas, mas estão desativadas ou estão configuradas incorretamente.',
	'notFound'        => 'Arquivo de migração não encontrado: ',
	'batchNotFound'     => 'Alvo batch não encontrado: ',
	'empty'           => 'Nenhum arquivo de migração encontrado',
	'gap'             => 'Há uma diferença na sequência de migração perto do número de versão: ',
	'classNotFound'   => 'A classe de migração "%s" não foi encontrada.',
	'missingMethod'   => 'A classe de migração está sem um método "%s".',

	// Migration Command
	'migHelpLatest'   => "\t\tMigra o banco de dados para a última migração disponível.",
	'migHelpCurrent'  => "\t\tMigra o banco de dados para a versão configurada como 'current' na configuração.",
	'migHelpVersion'  => "\tMigra o banco de dados para versão {v}.",
	'migHelpRollback' => "\tExecuta todas as migrações 'down' até a versão 0.",
	'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migrações para renovar o banco de dados..",
	'migHelpSeed'     => "\tRoda o seeder nomeado [name].",
	'migCreate'       => "\tCria uma nova migração nomeada [name]",
	'nameMigration'   => 'Nomeie o arquivo de migração',
	'badCreateName'   => 'Você deve fornecer um nome de arquivo de migração.',
	'writeError'      => 'Erro ao tentar criar arquivo.',
	'migNumberError'  => 'O número da migração deve ter três dígitos e não deve haver lacunas na sequência.',

	'latest'          => 'Executando todas as novas migrações...',
	'generalFault'      => 'Migração falhou!',
	'migInvalidVersion' => 'Número da versão fornecida é inválido.',
	'toVersionPH'       => 'Migrando para a versão %s...',
	'toVersion'         => 'Migrando para a versão atual...',
	'rollingBack'       => 'Revertendo todas as migrações...',
	'noneFound'         => 'Nenhuma migração foi encontrada.',
	'on'                => 'Migrado em: ',
	'migSeeder'         => 'Nome do seeder',
	'migMissingSeeder'  => 'Você deve fornecer o nome de um seeder.',
	'removed'           => 'Revertendo: ',
	'added'             => 'Rodando: ',

	'version'  => 'Versão',
	'filename' => 'Nome do arquivo',
];
