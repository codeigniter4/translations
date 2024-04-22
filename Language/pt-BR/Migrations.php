<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'Tabela migrations deve ser definida.', // 'Migrations table must be set.',
    'disabled'      => 'As Migrations foram carregadas, mas estão desativadas ou estão configuradas incorretamente.', // 'Migrations have been loaded but are disabled or setup incorrectly.',
    'notFound'      => 'Arquivo Migration encontrado: ', // 'Migration file not found: ',
    'batchNotFound' => 'Alvo batch não encontrado: ', // 'Target batch not found: ',
    'empty'         => 'Nenhum arquivo Migration encontrado', // 'No Migration files found',
    'gap'           => 'Há uma diferença na sequência de migration perto do número de versão: ', // 'There is a gap in the migration sequence near version number: ',
    'classNotFound' => 'A classe migration "%s" não foi encontrada.', // 'The migration class "%s" could not be found.',
    'missingMethod' => 'A classe migration está sem um método "%s".', // 'The migration class is missing an "%s" method.',

    // Migration Command
    'migHelpLatest'   => "\t\tMigra o banco de dados para a última migration disponível.", // "\t\tMigrates database to latest available migration.",
    'migHelpCurrent'  => "\t\tMigra o banco de dados para a versão configurada como 'current' na configuração.", // "\t\tMigrates database to version set as 'current' in configuration.",
    'migHelpVersion'  => "\tMigra o banco de dados para versão {v}.", // "\tMigrates database to version {v}.",
    'migHelpRollback' => "\tExecuta todas as migrations 'down' até a versão 0.", // "\tRuns all migrations 'down' to version 0.",
    'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migrations para renovar o banco de dados.", // "\t\tUninstalls and re-runs all migrations to freshen database.",
    'migHelpSeed'     => "\tRoda o seeder chamado [name].", // "\tRuns the seeder named [name].",
    'migCreate'       => "\tCria uma nova migração chamada [name]", // "\tCreates a new migration named [name]",
    'nameMigration'   => 'Nomeie o arquivo de migração', // 'Name the migration file',
    'migNumberError'  => 'O número da migration deve ter três dígitos e não deve haver lacunas na sequência.', // 'Migration number must be three digits, and there must not be any gaps in the sequence.',
    'rollBackConfirm' => 'Você tem certeza que deseja reverter?', // 'Are you sure you want to rollback?',
    'refreshConfirm'  => 'Você tem certeza que deseja atualizar?', // 'Are you sure you want to refresh?',

    'latest'            => 'Executando todas as novas migrations...', // 'Running all new migrations...',
    'generalFault'      => 'Migration falhou!', // 'Migration failed!',
    'migrated'          => 'Migrations concluídas.', // 'Migrations complete.',
    'migInvalidVersion' => 'Número da versão fornecida é inválido.', // 'Invalid version number provided.',
    'toVersionPH'       => 'Migrando para a versão %s...', // 'Migrating to version %s...',
    'toVersion'         => 'Migrando para a versão atual...', // 'Migrating to current version...',
    'rollingBack'       => 'Revertendo todas as migrações...', // 'Rolling back migrations to batch: ',
    'noneFound'         => 'Nenhuma migration foi encontrada.', // 'No migrations were found.',
    'migSeeder'         => 'Nome do seeder', // 'Seeder name',
    'migMissingSeeder'  => 'Você deve fornecer o nome de um seeder.', // 'You must provide a seeder name.',
    'nameSeeder'        => 'Nomeie o arquivo seeder', // 'Name the seeder file',
    'removed'           => 'Revertendo: ', // 'Rolling back: ',
    'added'             => 'Executando: ', // 'Running: ',

    // Migrate Status
    'namespace' => 'Namespace', // 'Namespace',
    'filename'  => 'Nome do arquivo', //  'Filename',
    'version'   => 'Versão', // 'Version',
    'group'     => 'Grupo', // 'Group',
    'on'        => 'Migrado em: ', // 'Migrated On: ',
    'batch'     => 'Lote', // 'Batch',
];
