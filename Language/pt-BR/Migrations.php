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
    'missingTable'  => 'Tabela de migrations deve ser definida.',
    'disabled'      => 'As Migrations foram carregadas, mas estão desativadas ou estão configuradas incorretamente.',
    'notFound'      => 'Arquivo de Migration não encontrado: ',
    'batchNotFound' => 'Alvo batch não encontrado: ',
    'empty'         => 'Nenhum arquivo de Migration encontrado',
    'gap'           => 'Há uma diferença na sequência de Migration perto do número de versão: ',
    'classNotFound' => 'A classe migration "%s" não foi encontrada.',
    'missingMethod' => 'A classe migration está sem um método "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tMigra o banco de dados para a última migration disponível.",
    'migHelpCurrent'  => "\t\tMigra o banco de dados para a versão configurada como 'current' na configuração.",
    'migHelpVersion'  => "\tMigra o banco de dados para versão {v}.",
    'migHelpRollback' => "\tExecuta todas as migrations 'down' até a versão 0.",
    'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migrations para renovar o banco de dados..",
    'migHelpSeed'     => "\tRoda o seeder nomeado [name].",
    'migCreate'       => "\tCria uma nova migration nomeada [name]",
    'nameMigration'   => 'Nomeie o arquivo de migration',
    'migNumberError'  => 'O número da migration deve ter três dígitos e não deve haver lacunas na sequência.',
    'rollBackConfirm' => 'Você tem certeza que deseja reverter?',
    'refreshConfirm'  => 'Você tem certeza que deseja atualizar?',

    'latest'            => 'Executando todas as novas migrations...',
    'generalFault'      => 'Migration falhou!',
    'migrated'          => 'Migrations concluídas.',
    'migInvalidVersion' => 'Número da versão fornecida é inválido.',
    'toVersionPH'       => 'Migrando para a versão %s...',
    'toVersion'         => 'Migrando para a versão atual...',
    'rollingBack'       => 'Revertendo todas as migrations...',
    'noneFound'         => 'Nenhuma migration foi encontrada.',
    'migSeeder'         => 'Nome do seeder',
    'migMissingSeeder'  => 'Você deve fornecer o nome de um seeder.',
    'nameSeeder'        => 'Nomeie o arquivo seeder',
    'removed'           => 'Revertendo: ',
    'added'             => 'Rodando: ',

    // Migrate Status
    'namespace' => 'Namespace',
    'filename'  => 'Nome do arquivo',
    'version'   => 'Versão',
    'group'     => 'Grupo',
    'on'        => 'Migrado em: ',
    'batch'     => 'Lote',
];
