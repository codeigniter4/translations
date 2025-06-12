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
    'missingTable'  => 'माइग्रेशन टेबल सेट होनी चाहिए।', // 'Migrations table must be set.'
    'disabled'      => 'माइग्रेशन लोड हो गए हैं लेकिन अक्षम हैं या गलत तरीके से सेट किए गए हैं।', // 'Migrations have been loaded but are disabled or setup incorrectly.'
    'notFound'      => 'माइग्रेशन फ़ाइल नहीं मिली: ', // 'Migration file not found: '
    'batchNotFound' => 'टारगेट बैच नहीं मिला: ', // 'Target batch not found: '
    'empty'         => 'कोई माइग्रेशन फ़ाइल नहीं मिली', // 'No Migration files found'
    'gap'           => 'संस्करण संख्या के पास माइग्रेशन अनुक्रम में एक गैप है: ', // 'There is a gap in the migration sequence near version number: '
    'classNotFound' => 'माइग्रेशन क्लास "%s" नहीं मिल सकी।', // 'The migration class "%s" could not be found.'
    'missingMethod' => 'माइग्रेशन क्लास में "%s" विधि गायब है।', // 'The migration class is missing an "%s" method.'

    // Migration Command
    'migHelpLatest'   => "\t\tडेटाबेस को नवीनतम उपलब्ध माइग्रेशन में माइग्रेट करता है।", // "\t\tMigrates database to latest available migration."
    'migHelpCurrent'  => "\t\tडेटाबेस को कॉन्फ़िगरेशन में 'वर्तमान' के रूप में सेट किए गए संस्करण में माइग्रेट करता है।", // "\t\tMigrates database to version set as 'current' in configuration."
    'migHelpVersion'  => "\tडेटाबेस को संस्करण {v} में माइग्रेट करता है।", // "\tMigrates database to version {v}."
    'migHelpRollback' => "\tसभी माइग्रेशन को संस्करण 0 तक 'डाउन' करता है।", // "\tRuns all migrations 'down' to version 0."
    'migHelpRefresh'  => "\t\tडेटाबेस को ताज़ा करने के लिए सभी माइग्रेशन को अनइंस्टॉल और पुनः चलाता है।", // "\t\tUninstalls and re-runs all migrations to freshen database."
    'migHelpSeed'     => "\t[नाम] नामक सीडर चलाता है।", // "\tRuns the seeder named [name]."
    'migCreate'       => "\t[नाम] नामक एक नया माइग्रेशन बनाता है", // "\tCreates a new migration named [name]"
    'nameMigration'   => 'माइग्रेशन फ़ाइल का नाम दें', // 'Name the migration file'
    'migNumberError'  => 'माइग्रेशन संख्या तीन अंकों की होनी चाहिए, और अनुक्रम में कोई गैप नहीं होना चाहिए।', // 'Migration number must be three digits, and there must not be any gaps in the sequence.'
    'rollBackConfirm' => 'क्या आप रोलबैक करना सुनिश्चित हैं?', // 'Are you sure you want to rollback?'
    'refreshConfirm'  => 'क्या आप रीफ्रेश करना सुनिश्चित हैं?', // 'Are you sure you want to refresh?'

    'latest'            => 'सभी नए माइग्रेशन चलाए जा रहे हैं...', // 'Running all new migrations...'
    'generalFault'      => 'माइग्रेशन विफल रहा!', // 'Migration failed!'
    'migrated'          => 'माइग्रेशन पूर्ण।', // 'Migrations complete.'
    'migInvalidVersion' => 'अमान्य संस्करण संख्या प्रदान की गई।', // 'Invalid version number provided.'
    'toVersionPH'       => 'संस्करण %s में माइग्रेट कर रहा है...', // 'Migrating to version %s...'
    'toVersion'         => 'वर्तमान संस्करण में माइग्रेट कर रहा है...', // 'Migrating to current version...'
    'rollingBack'       => 'माइग्रेशन को बैच में रोलबैक कर रहा है: ', // 'Rolling back migrations to batch: '
    'noneFound'         => 'कोई माइग्रेशन नहीं मिला।', // 'No migrations were found.'
    'migSeeder'         => 'सीडर का नाम', // 'Seeder name'
    'migMissingSeeder'  => 'आपको एक सीडर नाम प्रदान करना होगा।', // 'You must provide a seeder name.'
    'nameSeeder'        => 'सीडर फ़ाइल का नाम दें', // 'Name the seeder file'
    'removed'           => 'रोलबैक कर रहा है: ', // 'Rolling back: '
    'added'             => 'चला रहा है: ', // 'Running: '

    // Migrate Status
    'namespace' => 'नेमस्पेस', // 'Namespace'
    'filename'  => 'फ़ाइलनाम', // 'Filename'
    'version'   => 'संस्करण', // 'Version'
    'group'     => 'समूह', // 'Group'
    'on'        => 'पर माइग्रेट किया गया: ', // 'Migrated On: '
    'batch'     => 'बैच', // 'Batch'
];
