<?php

return [
	// Migration Runner
	'migMissingTable'   => 'Tabela de migrações deve ser definida.',
	'migInvalidType'    => 'Um tipo de numeração de migração inválido foi especificado: ',
	'migDisabled'       => 'As migrações foram carregadas, mas estão desativadas ou estão configuradas incorretamente.',
	'migNotFound'       => 'Arquivo de migração não encontrado: ',
	'migEmpty'          => 'Nenhum arquivo de migração encontrado',
	'migGap'            => 'Há uma diferença na sequência de migração perto do número de versão: ',
	'migClassNotFound'  => 'A classe de migração "%s" não foi encontrada.',
	'migMissingMethod'  => 'A classe de migração está sem um método "%s".',
	'migMultiple'       => 'Existem várias migrações com o mesmo número de versão: ',

	// Migration Command
	'migHelpLatest'     => "\t\tMigra o banco de dados para a última migração disponível.",
	'migHelpCurrent'    => "\t\tMigra o banco de dados para a versão configurada como 'current' na configuração.",
	'migHelpVersion'    => "\tMigra o banco de dados para versão {v}.",
	'migHelpRollback'   => "\tExecuta todas as migrações 'down' até a versão 0.",
	'migHelpRefresh'    => "\t\tDesinstala e executa novamente todas as migrações para renovar o banco de dados..",
	'migHelpSeed'       => "\tRoda o seeder nomeado [name].",
	'migCreate'         => "\tCria uma nova migração nomeada [name]",
	'migNameMigration'  => 'Nomeie o arquivo de migração',
	'migBadCreateName'  => 'Você deve fornecer um nome de arquivo de migração.',
	'migWriteError'     => 'Erro ao tentar criar arquivo.',

	'migToLatest'       => 'Migrando para a versão mais recente...',
	'migInvalidVersion' => 'Número da versão fornecida é inválido.',
	'migToVersionPH'    => 'Migrando para a versão %s...',
	'migToVersion'      => 'Migrando para a versão atual...',
	'migRollingBack'    => 'Revertendo todas as migrações...',
	'migNoneFound'      => 'Nenhuma migração foi encontrada.',
	'migOn'             => 'Migrado em: ',
	'migSeeder'         => 'Nome do seeder',
	'migMissingSeeder'  => 'Você deve fornecer o nome de um seeder.',
	'migHistoryFor'     => 'Histórico de migração para ',
	'migRemoved'        => 'Revertendo: ',
	'migAdded'          => 'Rodando: ',

	'version'           => 'Versão',
	'filename'          => 'Nome do arquivo',
];
