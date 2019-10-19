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
	'missingTable'    => 'A tabela de migrações deve ser definida.',
	'invalidType'     => 'Um tipo de numeração de migração inválido foi especificado: {0}',
	'disabled'        => 'As migrações foram carregadas, mas estão desativadas ou estão configuradas incorretamente.',
	'notFound'        => 'Arquivo de migração não encontrado: ',
	'empty'           => 'Nenhum arquivo de migração encontrado',
	'gap'             => 'Há uma lacuna na sequência de migração perto do número da versão: ',
	'classNotFound'   => 'A classe de migração "%s" não foi encontrada.',
	'missingMethod'   => 'A classe de migração está faltando um método "%s".',

	// Migration Command
	'migHelpLatest'   => "\t\tMigra o banco de dados para a última migração disponível.",
	'migHelpCurrent'  => "\t\tMigra o banco de dados para a versão configurada como 'atual' na configuração.",
	'migHelpVersion'  => "\tMigra o banco de dados para a versão {v}.",
	'migHelpRollback' => "\tExecuta todas as migrações 'para baixo' na versão 0.",
	'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migrações para atualizar o banco de dados.",
	'migHelpSeed'     => "\tExecuta o semeador chamado [name].",
	'migCreate'       => "\tCria uma nova migração chamada [name]",
	'nameMigration'   => 'Nomeie o arquivo de migração',
	'badCreateName'   => 'Você deve fornecer um nome de arquivo de migração.',
	'writeError'      => 'Erro ao tentar criar o arquivo.',

	'toLatest'          => 'Migrando para a versão mais recente...',
	'migInvalidVersion' => 'Número de versão fornecido é inválido.',
	'toVersionPH'       => 'Migrando para a versão %s...',
	'toVersion'         => 'Migrando para a versão atual...',
	'rollingBack'       => 'Revertendo todas as migrações...',
	'noneFound'         => 'Nenhuma migração foi encontrada.',
	'on'                => 'Migrado para: ',
	'migSeeder'         => 'Nome do semeador',
	'migMissingSeeder'  => 'Você deve fornecer um nome de semeador.',
	'removed'           => 'Revertendo: ',
	'added'             => 'Rodando: ',

	'version'           => 'Versão',
	'filename'          => 'Nome do arquivo',
];
