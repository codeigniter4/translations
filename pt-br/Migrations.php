<?php

return [
	// Migration Runner
	'missingTable'      => 'Tabela de migrações deve ser definida.',
	'invalidType'       => 'Um tipo de numeração de migração inválido foi especificado: {0}',
	'disabled'          => 'As migrações foram carregadas, mas estão desativadas ou estão configuradas incorretamente.',
	'notFound'          => 'Arquivo de migração não encontrado: ',
	'empty'             => 'Nenhum arquivo de migração encontrado',
	'gap'               => 'Há uma diferença na sequência de migração perto do número de versão: ',
	'classNotFound'     => 'A classe de migração "%s" não foi encontrada.',
	'missingMethod'     => 'A classe de migração está sem um método "%s".',

	// Migration Command
	'migHelpLatest'     => "\t\tMigra o banco de dados para a última migração disponível.",
	'migHelpCurrent'    => "\t\tMigra o banco de dados para a versão configurada como 'current' na configuração.",
	'migHelpVersion'    => "\tMigra o banco de dados para versão {v}.",
	'migHelpRollback'   => "\tExecuta todas as migrações 'down' até a versão 0.",
	'migHelpRefresh'    => "\t\tDesinstala e executa novamente todas as migrações para renovar o banco de dados..",
	'migHelpSeed'       => "\tRoda o seeder nomeado [name].",
	'migCreate'         => "\tCria uma nova migração nomeada [name]",
	'nameMigration'     => 'Nomeie o arquivo de migração',
	'badCreateName'     => 'Você deve fornecer um nome de arquivo de migração.',
	'writeError'        => 'Erro ao tentar criar arquivo.',

	'toLatest'          => 'Migrando para a versão mais recente...',
	'migInvalidVersion' => 'Número da versão fornecida é inválido.',
	'toVersionPH'       => 'Migrando para a versão %s...',
	'toVersion'         => 'Migrando para a versão atual...',
	'rollingBack'       => 'Revertendo todas as migrações...',
	'noneFound'         => 'Nenhuma migração foi encontrada.',
	'on'                => 'Migrado em: ',
	'migSeeder'         => 'Nome do seeder',
	'migMissingSeeder'  => 'Você deve fornecer o nome de um seeder.',
	'historyFor'        => 'Histórico de migração para ',
	'removed'           => 'Revertendo: ',
	'added'             => 'Rodando: ',

	'version'           => 'Versão',
	'filename'          => 'Nome do arquivo',
];
