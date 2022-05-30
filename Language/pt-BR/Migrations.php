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
    'missingTable'  => 'Tabela de migrações deve ser definida.',
    'disabled'      => 'As migrações foram carregadas, mas estão desativadas ou estão configuradas incorretamente.',
    'notFound'      => 'Arquivo de migração não encontrado: ',
    'batchNotFound' => 'Alvo batch não encontrado: ',
    'empty'         => 'Nenhum arquivo de migração encontrado',
    'gap'           => 'Há uma diferença na sequência de migração perto do número de versão: ',
    'classNotFound' => 'A classe de migração "%s" não foi encontrada.',
    'missingMethod' => 'A classe de migração está sem um método "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tMigra o banco de dados para a última migração disponível.",
    'migHelpCurrent'  => "\t\tMigra o banco de dados para a versão configurada como 'current' na configuração.",
    'migHelpVersion'  => "\tMigra o banco de dados para versão {v}.",
    'migHelpRollback' => "\tExecuta todas as migrações 'down' até a versão 0.",
    'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migrações para renovar o banco de dados..",
    'migHelpSeed'     => "\tRoda o seeder nomeado [name].",
    'migCreate'       => "\tCria uma nova migração nomeada [name]",
    'nameMigration'   => 'Nomeie o arquivo de migração',
    'migNumberError'  => 'O número da migração deve ter três dígitos e não deve haver lacunas na sequência.',
    'rollBackConfirm' => 'Você tem certeza que deseja reverter?',
    'refreshConfirm'  => 'Você tem certeza que deseja atualizar?',

    'latest'            => 'Executando todas as novas migrações...',
    'generalFault'      => 'Migração falhou!',
    'migrated'          => 'Migrações concluídas.',
    'migInvalidVersion' => 'Número da versão fornecida é inválido.',
    'toVersionPH'       => 'Migrando para a versão %s...',
    'toVersion'         => 'Migrando para a versão atual...',
    'rollingBack'       => 'Revertendo todas as migrações...',
    'noneFound'         => 'Nenhuma migração foi encontrada.',
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
