<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
	// Migration Runner
	'missingTable'  => 'A tabela de migrações deve ser definida.',
	'disabled'      => 'As migrações foram carregadas, mas estão inativas ou estão configuradas incorretamente.',
	'notFound'      => 'Arquivo de migração não encontrado: ',
	'batchNotFound' => 'Não foi possível encontrar o ramo selecionado: ',
	'empty'         => 'Nenhum arquivo de migração encontrado',
	'gap'           => 'Há uma lacuna na sequência de migração perto do número da versão: ',
	'classNotFound' => 'A classe de migração "%s" não foi encontrada.',
	'missingMethod' => 'A classe de migração está faltando um método "%s".',

	// Migration Command
	'migHelpLatest'   => "\t\tMigra a base de dados para a última migração disponível.",
	'migHelpCurrent'  => "\t\tMigra a base de dados para a versão configurada como 'atual' na configuração.",
	'migHelpVersion'  => "\tMigra a base de dados para a versão {v}.",
	'migHelpRollback' => "\tExecuta todas as migrações 'para baixo' na versão 0.",
	'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migrações para atualizar a base de dados.",
	'migHelpSeed'     => "\tExecuta o semeador chamado [name].",
	'migCreate'       => "\tCria uma nova migração chamada [name]",
	'nameMigration'   => 'Nomeie o arquivo de migração',
	'migNumberError'  => 'O número da migração deve ter três dígitos e não deve haver lacunas na sequência.',

	'latest'            => 'Executando todas as novas migrações...',
	'generalFault'      => 'A migração falhou!',
	'migInvalidVersion' => 'Número de versão fornecido é inválido.',
	'toVersionPH'       => 'A migrar para a versão %s...',
	'toVersion'         => 'A migrar para a versão atual...',
	'rollingBack'       => 'Revertendo todas as migrações...',
	'noneFound'         => 'Nenhuma migração foi encontrada.',
	'on'                => 'A migrar para: ',
	'migSeeder'         => 'Nome do semeador',
	'migMissingSeeder'  => 'Deve fornecer um nome de semeador.',
	'removed'           => 'Revertendo: ',
	'added'             => 'Rodando: ',

	'version'  => 'Versão',
	'filename' => 'Nome do arquivo',
];
