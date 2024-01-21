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
    'missingTable'  => 'Debe establecer la tabla de migrado.',
    'disabled'      => 'Las migraciones se han cargado pero están deshabilitadas o configuradas incorrectamente.',
    'notFound'      => 'Archivo de migración no encontrado: ',
    'batchNotFound' => 'Lote objetivo no encontrado: ',
    'empty'         => 'No se han encontrado archivos de migración',
    'gap'           => 'Hay un hueco en la secuencia de migración cerca del número de versión: ',
    'classNotFound' => 'La clase de migración "%s" no se ha encontrado.',
    'missingMethod' => 'La clase de migración no ha encontrado el método "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tMigra la base de datos a la última versión disponible.",
    'migHelpCurrent'  => "\t\tMigra la base de datos a la versión marcado como 'current' en configuración.",
    'migHelpVersion'  => "\tMigra la base de datos a la versión {v}.",
    'migHelpRollback' => "\tEjecuta todas las migraciones 'down' a la versión 0.",
    'migHelpRefresh'  => "\t\tDesinstala y reejecuta todas las migraciones para refrescar la base de datos.",
    'migHelpSeed'     => "\tEjecuta la semilla de nombre [name].",
    'migCreate'       => "\tCrea una nueva migración llamada [name]",
    'nameMigration'   => 'Nombre el archivo de migración',
    'migNumberError'  => 'El número de migración debe tener tres dígitos y no debe haber espacios en la secuencia.',
    'rollBackConfirm' => '¿Estás seguro de que quieres retrotraer?', // 'Are you sure you want to rollback?',
    'refreshConfirm'  => '¿Estás seguro de que quieres actualizar?', // 'Are you sure you want to refresh?',

    'latest'            => 'Migrando a la última versión...',
    'generalFault'      => '¡La migración falló!',
    'migrated'          => 'Migraciones completadas.', // 'Migrations complete.',
    'migInvalidVersion' => 'Número de versión incorrecta.',
    'toVersionPH'       => 'Migrando a la versión %s...',
    'toVersion'         => 'Migrando a la versión actual...',
    'rollingBack'       => 'Deshaciendo todas las migraciones...',
    'noneFound'         => 'No se han encontrado migraciones.',
    'migSeeder'         => 'Nombre de semilla',
    'migMissingSeeder'  => 'Debe indicar un nombre de semilla.',
    'nameSeeder'        => 'Nombra el archivo de la sembradora', // 'Name the seeder file',
    'removed'           => 'Desinstalando: ',
    'added'             => 'Ejecutando: ',

    // Migrate Status
    'namespace' => 'Espacio de nombres',
    'filename'  => 'Nombre de archivo',
    'version'   => 'Versión',
    'group'     => 'Grupo',
    'on'        => 'Migrado el: ',
    'batch'     => 'Lote',
];
