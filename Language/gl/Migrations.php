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
    'missingTable'  => 'Débese estabelecer a táboa de migrado.',
    'disabled'      => 'As migracións cargáronse pero están deshabilitadas ou configuradas incorrectamente.',
    'notFound'      => 'Arquivo de migración non atopado: ',
    'batchNotFound' => 'Lote obxectivo non atopado: ',
    'empty'         => 'Non se atoparon arquivos de migración',
    'gap'           => 'Hai un oco na secuencia de migración cerca do número de versión: ',
    'classNotFound' => 'A clase de migración "%s" non se atopou.',
    'missingMethod' => 'A clase de migración non atopou o método "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tMigra a base de datos á última versión dispoñible.",
    'migHelpCurrent'  => "\t\tMigra a base de datos á versión marcada como 'current' na configuración.",
    'migHelpVersion'  => "\tMigra a base de datos á versión {v}.",
    'migHelpRollback' => "\tExecuta tódalas migracións 'down' á versión 0.",
    'migHelpRefresh'  => "\t\tDesinstala e reexecuta tódalas migracións para refrescar a base de datos.",
    'migHelpSeed'     => "\tExecuta a semente de nome [name].",
    'migCreate'       => "\tCrea unha nova migración chamada [name]",
    'nameMigration'   => 'Nomea o arquivo de migración',
    'migNumberError'  => 'O número de migración debe ter tres díxitos e non debe haber espazos na secuencia.',
    'rollBackConfirm' => 'Estás seguro de que queres retrotraer?', // 'Are you sure you want to rollback?',
    'refreshConfirm'  => 'Estás seguro de que queres actualizar?', // 'Are you sure you want to refresh?',

    'latest'            => 'Migrando á última versión...',
    'generalFault'      => 'A migración fallou!',
    'migrated'          => 'Migracións completadas.', // 'Migrations complete.',
    'migInvalidVersion' => 'Número de versión incorrecta.',
    'toVersionPH'       => 'Migrando á versión %s...',
    'toVersion'         => 'Migrando á versión actual...',
    'rollingBack'       => 'Desfacendo tódalas migracións...',
    'noneFound'         => 'Non se atoparon migracións.',
    'migSeeder'         => 'Nome da semente',
    'migMissingSeeder'  => 'Débese indicar un nome da semente.',
    'nameSeeder'        => 'Nomea o arquivo da sembra', // 'Name the seeder file',
    'removed'           => 'Desinstalando: ',
    'added'             => 'Executando: ',

    // Migrate Status
    'namespace' => 'Espazo de nomes',
    'filename'  => 'Nome de arquivo',
    'version'   => 'Versión',
    'group'     => 'Grupo',
    'on'        => 'Migrado o: ',
    'batch'     => 'Lote',
];
