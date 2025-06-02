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
    'missingTable'  => 'માઇગ્રેશન્સ કોષ્ટક સેટ કરવું આવશ્યક છે.', // 'Migrations table must be set.'
    'disabled'      => 'માઇગ્રેશન્સ લોડ કરવામાં આવ્યા છે પરંતુ તે અક્ષમ છે અથવા ખોટી રીતે સેટ અપ કરવામાં આવ્યા છે.', // 'Migrations have been loaded but are disabled or setup incorrectly.'
    'notFound'      => 'માઇગ્રેશન ફાઇલ મળી નથી: ', // 'Migration file not found: '
    'batchNotFound' => 'લક્ષ્ય બેચ મળ્યું નથી: ', // 'Target batch not found: '
    'empty'         => 'કોઈ માઇગ્રેશન ફાઇલો મળી નથી', // 'No Migration files found'
    'gap'           => 'સંસ્કરણ નંબરની નજીક માઇગ્રેશન ક્રમમાં એક ગેપ છે: ', // 'There is a gap in the migration sequence near version number: '
    'classNotFound' => 'માઇગ્રેશન ક્લાસ "%s" મળી શક્યો નથી.', // 'The migration class "%s" could not be found.'
    'missingMethod' => 'માઇગ્રેશન ક્લાસમાં "%s" પદ્ધતિ ખૂટે છે.', // 'The migration class is missing an "%s" method.'

    // Migration Command
    'migHelpLatest'   => "\t\tડેટાબેઝને નવીનતમ ઉપલબ્ધ માઇગ્રેશન પર માઇગ્રેટ કરે છે.", // "\t\tMigrates database to latest available migration."
    'migHelpCurrent'  => "\t\tડેટાબેઝને ગોઠવણીમાં 'વર્તમાન' તરીકે સેટ કરેલા સંસ્કરણ પર માઇગ્રેટ કરે છે.", // "\t\tMigrates database to version set as 'current' in configuration."
    'migHelpVersion'  => "\tડેટાબેઝને સંસ્કરણ {v} પર માઇગ્રેટ કરે છે.", // "\tMigrates database to version {v}."
    'migHelpRollback' => "\tતમામ માઇગ્રેશન્સને સંસ્કરણ 0 પર 'ડાઉન' કરે છે.", // "\tRuns all migrations 'down' to version 0."
    'migHelpRefresh'  => "\t\tડેટાબેઝને તાજો કરવા માટે તમામ માઇગ્રેશન્સને અનઇન્સ્ટોલ કરે છે અને ફરીથી ચલાવે છે.", // "\t\tUninstalls and re-runs all migrations to freshen database."
    'migHelpSeed'     => "\t[નામ] નામના સીડરને ચલાવે છે.", // "\tRuns the seeder named [name]."
    'migCreate'       => "\t[નામ] નામનું નવું માઇગ્રેશન બનાવે છે.", // "\tCreates a new migration named [name]"
    'nameMigration'   => 'માઇગ્રેશન ફાઇલનું નામ આપો', // 'Name the migration file'
    'migNumberError'  => 'માઇગ્રેશન નંબર ત્રણ અંકોનો હોવો જોઈએ, અને ક્રમમાં કોઈ ગેપ ન હોવા જોઈએ.', // 'Migration number must be three digits, and there must not be any gaps in the sequence.'
    'rollBackConfirm' => 'શું તમે ખરેખર રોલબેક કરવા માંગો છો?', // 'Are you sure you want to rollback?'
    'refreshConfirm'  => 'શું તમે ખરેખર રિફ્રેશ કરવા માંગો છો?', // 'Are you sure you want to refresh?'

    'latest'            => 'બધા નવા માઇગ્રેશન્સ ચલાવી રહ્યા છીએ...', // 'Running all new migrations...'
    'generalFault'      => 'માઇગ્રેશન નિષ્ફળ!', // 'Migration failed!'
    'migrated'          => 'માઇગ્રેશન્સ પૂર્ણ.', // 'Migrations complete.'
    'migInvalidVersion' => 'અમાન્ય સંસ્કરણ નંબર પ્રદાન કર્યો.', // 'Invalid version number provided.'
    'toVersionPH'       => 'સંસ્કરણ %s પર માઇગ્રેટ કરી રહ્યા છીએ...', // 'Migrating to version %s...'
    'toVersion'         => 'વર્તમાન સંસ્કરણ પર માઇગ્રેટ કરી રહ્યા છીએ...', // 'Migrating to current version...'
    'rollingBack'       => 'માઇગ્રેશન્સને બેચ પર રોલબેક કરી રહ્યા છીએ: ', // 'Rolling back migrations to batch: '
    'noneFound'         => 'કોઈ માઇગ્રેશન્સ મળ્યા નથી.', // 'No migrations were found.'
    'migSeeder'         => 'સીડરનું નામ', // 'Seeder name'
    'migMissingSeeder'  => 'તમારે સીડરનું નામ પ્રદાન કરવું આવશ્યક છે.', // 'You must provide a seeder name.'
    'nameSeeder'        => 'સીડર ફાઇલનું નામ આપો', // 'Name the seeder file'
    'removed'           => 'રોલબેક કરી રહ્યા છીએ: ', // 'Rolling back: '
    'added'             => 'ચલાવી રહ્યા છીએ: ', // 'Running: '

    // Migrate Status
    'namespace' => 'નેમસ્પેસ', // 'Namespace'
    'filename'  => 'ફાઇલનું નામ', // 'Filename'
    'version'   => 'સંસ્કરણ', // 'Version'
    'group'     => 'જૂથ', // 'Group'
    'on'        => 'આના પર માઇગ્રેટ થયેલ: ', // 'Migrated On: '
    'batch'     => 'બેચ', // 'Batch'
];
