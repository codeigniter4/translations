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

// Configurações de linguagem de Migração
return [
    // Migration Runner
    'missingTable'  => 'A tabela de migrações deve ser definida.',
    'disabled'      => 'As migrações foram carregadas, mas estão desativadas ou configuradas incorretamente.',
    'notFound'      => 'Arquivo de migração não encontrado: ',
    'batchNotFound' => 'Lote (batch) de destino não encontrado: ',
    'empty'         => 'Nenhum arquivo de migração encontrado',
    'gap'           => 'Existe uma lacuna na sequência de migração próximo ao número da versão: ',
    'classNotFound' => 'A classe de migração "%s" não pôde ser encontrada.',
    'missingMethod' => 'A classe de migração não possui o método "%s".',
    'locked'        => 'As migrações já estão em execução em outro processo. Pulando.',

    // Migration Command
    'migHelpLatest'   => "\t\tMigra o banco de dados para a última migração disponível.",
    'migHelpCurrent'  => "\t\tMigra o banco de dados para a versão definida como 'current' na configuração.",
    'migHelpVersion'  => "\tMigra o banco de dados para a versão {v}.",
    'migHelpRollback' => "\tExecuta todas as migrações 'down' até a versão 0.",
    'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migrações para atualizar o banco de dados.",
    'migHelpSeed'     => "\tExecuta o seeder nomeado [name].",
    'migCreate'       => "\tCria uma nova migração nomeada [name]",
    'nameMigration'   => 'Nomeie o arquivo de migração',
    'migNumberError'  => 'O número da migração deve ter três dígitos e não deve haver lacunas na sequência.',
    'rollBackConfirm' => 'Tem certeza de que deseja reverter (rollback)?',
    'refreshConfirm'  => 'Tem certeza de que deseja atualizar (refresh)?',

    'latest'            => 'Executando todas as novas migrações...',
    'generalFault'      => 'A migração falhou!',
    'migrated'          => 'Migrações concluídas.',
    'migInvalidVersion' => 'Número de versão fornecido é inválido.',
    'toVersionPH'       => 'Migrando para a versão %s...',
    'toVersion'         => 'Migrando para a versão atual...',
    'rollingBack'       => 'Revertendo migrações para o lote (batch): ',
    'noneFound'         => 'Nenhuma migração foi encontrada.',
    'migSeeder'         => 'Nome do seeder',
    'migMissingSeeder'  => 'Você deve fornecer um nome de seeder.',
    'nameSeeder'        => 'Nomeie o arquivo seeder',
    'removed'           => 'Revertendo: ',
    'added'             => 'Executando: ',

    // Migrate Status
    'namespace' => 'Namespace',
    'filename'  => 'Nome do Arquivo',
    'version'   => 'Versão',
    'group'     => 'Grupo',
    'on'        => 'Migrado em: ',
    'batch'     => 'Lote',
];
