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
    'missingTable'  => 'Migrations table सेट केलेले असणे आवश्यक आहे.', // 'Migrations table must be set.'
    'disabled'      => 'Migrations load झाले आहेत, पण disabled आहेत किंवा चुकीच्या पद्धतीने setup झाले आहेत.', // 'Migrations have been loaded but are disabled or setup incorrectly.'
    'notFound'      => 'Migration file सापडली नाही: ', // 'Migration file not found: '
    'batchNotFound' => 'Target batch सापडला नाही: ', // 'Target batch not found: '
    'empty'         => 'Migration files सापडल्या नाहीत', // 'No Migration files found'
    'gap'           => 'Migration sequence मध्ये version number जवळ अंतर आहे: ', // 'There is a gap in the migration sequence near version number: '
    'classNotFound' => 'Migration class "%s" सापडली नाही.', // 'The migration class "%s" could not be found.'
    'missingMethod' => 'Migration class मध्ये "%s" method नाही.', // 'The migration class is missing an "%s" method.'
    'locked'        => 'Migrations दुसऱ्या process मध्ये आधीच चालू आहेत. वगळत आहे.', // 'Migrations already running in another process. Skipping.'

    // Migration Command
    'migHelpLatest'   => "\t\tडेटाबेसला उपलब्ध असलेल्या नवीनतम migration पर्यंत migrate करते.", // "\t\tMigrates database to latest available migration."
    'migHelpCurrent'  => "\t\tकॉन्फिगरेशनमध्ये 'current' म्हणून सेट केलेल्या version पर्यंत डेटाबेस migrate करते.", // "\t\tMigrates database to version set as 'current' in configuration."
    'migHelpVersion'  => "\tडेटाबेसला version {v} पर्यंत migrate करते.", // "\tMigrates database to version {v}."
    'migHelpRollback' => "\tसर्व migrations version 0 पर्यंत 'down' चालवते.", // "\tRuns all migrations 'down' to version 0."
    'migHelpRefresh'  => "\t\tडेटाबेस ताजा करण्यासाठी सर्व migrations uninstall करून पुन्हा चालवते.", // "\t\tUninstalls and re-runs all migrations to freshen database."
    'migHelpSeed'     => "\t[name] नावाचा seeder चालवते.", // "\tRuns the seeder named [name]."
    'migCreate'       => "\t[name] नावाची नवीन migration तयार करते", // "\tCreates a new migration named [name]"
    'nameMigration'   => 'Migration file चे नाव द्या', // 'Name the migration file'
    'migNumberError'  => 'Migration number तीन अंकांचा असणे आवश्यक आहे आणि sequence मध्ये कोणतेही अंतर नसावे.', // 'Migration number must be three digits, and there must not be any gaps in the sequence.'
    'rollBackConfirm' => 'तुम्ही rollback करायचे आहे याची खात्री आहे का?', // 'Are you sure you want to rollback?'
    'refreshConfirm'  => 'तुम्ही refresh करायचे आहे याची खात्री आहे का?', // 'Are you sure you want to refresh?'

    'latest'            => 'सर्व नवीन migrations चालवत आहे...', // 'Running all new migrations...'
    'generalFault'      => 'Migration अयशस्वी झाली!', // 'Migration failed!'
    'migrated'          => 'Migrations पूर्ण झाल्या.', // 'Migrations complete.'
    'migInvalidVersion' => 'अवैध version number दिला आहे.', // 'Invalid version number provided.'
    'toVersionPH'       => 'Version %s पर्यंत migrate करत आहे...', // 'Migrating to version %s...'
    'toVersion'         => 'सध्याच्या version पर्यंत migrate करत आहे...', // 'Migrating to current version...'
    'rollingBack'       => 'Batch पर्यंत migrations rollback करत आहे: ', // 'Rolling back migrations to batch: '
    'noneFound'         => 'कोणत्याही migrations सापडल्या नाहीत.', // 'No migrations were found.'
    'migSeeder'         => 'Seeder नाव', // 'Seeder name'
    'migMissingSeeder'  => 'तुम्ही seeder चे नाव द्यायला हवे.', // 'You must provide a seeder name.'
    'nameSeeder'        => 'Seeder file चे नाव द्या', // 'Name the seeder file'
    'removed'           => 'Rollback करत आहे: ', // 'Rolling back: '
    'added'             => 'चालवत आहे: ', // 'Running: '

    // Migrate Status
    'namespace' => 'नेमस्पेस', // 'Namespace'
    'filename'  => 'फाइलनाव', // 'Filename'
    'version'   => 'आवृत्ती', // 'Version'
    'group'     => 'गट', // 'Group'
    'on'        => 'Migration झाल्याची वेळ: ', // 'Migrated On: '
    'batch'     => 'बॅच', // 'Batch'
];
