<?php

declare(strict_types=1);

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
    'disabled'      => 'As Migrations foram carregadas, mas estão desativadas ou configuradas incorretamente.', // 'Migrations have been loaded but are disabled or setup incorrectly.',
    'notFound'      => 'Arquivo Migration encontrado: ', // 'Migration file not found: ',
    'batchNotFound' => 'Lote de destino não encontrado: ', // 'Target batch not found: ',
    'empty'         => 'Nenhum arquivo Migration encontrado', // 'No Migration files found',
    'gap'           => 'Há uma lacuna na sequência de migração próxima ao número da versão: ', // 'There is a gap in the migration sequence near version number: ',
    'classNotFound' => 'A classe migration "%s" não foi encontrada.', // 'The migration class "%s" could not be found.',
    'missingMethod' => 'A classe migration não possuio o método "%s".', // 'The migration class is missing an "%s" method.',
    'locked' => 'As migrações já estão em execução em outro processo. Ignorando.', // 'Migrations already running in another process. Skipping.'

    // Migration Command
    'migHelpLatest'   => "\t\tMigra o banco de dados para a migration mais recente disponível.", // "\t\tMigrates database to latest available migration.",
    'migHelpCurrent'  => "\t\tMigra o banco de dados para a versão definida como 'current' na configuração.", // "\t\tMigrates database to version set as 'current' in configuration.",
    'migHelpVersion'  => "\tMigra o banco de dados para a versão {v}.", // "\tMigrates database to version {v}.",
    'migHelpRollback' => "\tExecuta todas as migrations 'down' até a versão 0.", // "\tRuns all migrations 'down' to version 0.",
    'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migrations para atualizar o banco de dados.", // "\t\tUninstalls and re-runs all migrations to freshen database.",
    'migHelpSeed'     => "\tExecuta o seeder chamado [name].", // "\tRuns the seeder named [name].",
    'migCreate'       => "\tCria uma nova migration chamada [name]", // "\tCreates a new migration named [name]",
    'nameMigration'   => 'Nomeie o arquivo migration', // 'Name the migration file',
    'migNumberError'  => 'O número da migration deve ter três dígitos e não deve haver lacunas na sequência.', // 'Migration number must be three digits, and there must not be any gaps in the sequence.',
    'rollBackConfirm' => 'Tem certeza que deseja reverter?', // 'Are you sure you want to rollback?',
    'refreshConfirm'  => 'Tem certeza que deseja atualizar?', // 'Are you sure you want to refresh?',

    'latest'            => 'Executando todas as novas migrations...', // 'Running all new migrations...',
    'generalFault'      => 'A migration falhou!', // 'Migration failed!',
    'migrated'          => 'Migrations concluídas.', // 'Migrations complete.',
    'migInvalidVersion' => 'O número da versão fornecida não é válida.', // 'Invalid version number provided.',
    'toVersionPH'       => 'Migrando para a versão %s...', // 'Migrating to version %s...',
    'toVersion'         => 'Migrando para a versão atual...', // 'Migrating to current version...',
    'rollingBack'       => 'Revertendo migrations para o lote:', // 'Rolling back migrations to batch: ',
    'noneFound'         => 'Nenhuma migration foi encontrada.', // 'No migrations were found.',
    'migSeeder'         => 'Nome do seeder', // 'Seeder name',
    'migMissingSeeder'  => 'Você deve fornecer um nome de seeder.', // 'You must provide a seeder name.',
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
