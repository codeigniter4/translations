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
    'missingTable'  => 'இடம்பெயர்வு அட்டவணை அமைக்கப்பட வேண்டும்.', // 'Migrations table must be set.',
    'disabled'      => 'இடம்பெயர்வுகள் ஏற்றப்பட்டன, ஆனால் அவை முடக்கப்பட்டுள்ளன அல்லது தவறாக அமைக்கப்பட்டுள்ளன.', // 'Migrations have been loaded but are disabled or setup incorrectly.',
    'notFound'      => 'இடம்பெயர்வு கோப்பு கிடைக்கவில்லை: ', // 'Migration file not found: ',
    'batchNotFound' => 'இலக்கு தொகுதி கிடைக்கவில்லை: ', // 'Target batch not found: ',
    'empty'         => 'இடம்பெயர்வு கோப்புகள் எதுவும் இல்லை', // 'No Migration files found',
    'gap'           => 'பதிப்பு எண்ணுக்கு அருகில் இடம்பெயர்வு வரிசையில் இடைவெளி உள்ளது: ', // 'There is a gap in the migration sequence near version number: ',
    'classNotFound' => 'இடம்பெயர்வு வகுப்பு "%s" கண்டுபிடிக்க முடியவில்லை.', // 'The migration class "%s" could not be found.',
    'missingMethod' => 'இடம்பெயர்வு வகுப்பில் "%s" முறை இல்லை.', // 'The migration class is missing an "%s" method.',

    // Migration Command
    'migHelpLatest'   => "\t\tசமீபத்தில் கிடைக்கக்கூடிய இடம்பெயர்வுக்கு தரவுத்தளத்தை மாற்றவும்.", // "\t\tMigrates database to latest available migration.",
    'migHelpCurrent'  => "\t\tஉள்ளமைவில் 'நடப்பு' என அமைக்கப்பட்ட பதிப்பிற்கு தரவுத்தளத்தை மாற்றுகிறது.", // "\t\tMigrates database to version set as 'current' in configuration.",
    'migHelpVersion'  => "\tதரவுத்தளத்தை பதிப்பிற்கு மாற்றுகிறது {v}.", // "\tMigrates database to version {v}.",
    'migHelpRollback' => "\tஅனைத்து இடம்பெயர்வுகளையும் 'down' பதிப்பான 0 கு இயக்குகிறது.", // "\tRuns all migrations 'down' to version 0.",
    'migHelpRefresh'  => "\t\tதரவுத்தளத்தை புதுப்பிக்க அனைத்து இடம்பெயர்வுகளையும் நிறுவல் நீக்கி மீண்டும் இயக்கவும்.", // "\t\tUninstalls and re-runs all migrations to freshen database.",
    'migHelpSeed'     => "\t[name] என்ற விதையை இயக்குகிறது.", // "\tRuns the seeder named [name].",
    'migCreate'       => "\t[name] என்ற பெயரில் புதிய இடம்பெயர்வை உருவாக்குகிறது", // "\tCreates a new migration named [name]",
    'nameMigration'   => 'இடம்பெயர்வு கோப்பிற்கு பெயரிடவும்', // 'Name the migration file',
    'migNumberError'  => 'இடம்பெயர்வு எண் மூன்று இலக்கங்களாக இருக்க வேண்டும், மேலும் வரிசையில் எந்த இடைவெளியும் இருக்கக்கூடாது.', // 'Migration number must be three digits, and there must not be any gaps in the sequence.',
    'rollBackConfirm' => 'நிச்சயமாக திரும்பப் பெற விரும்புகிறீர்களா?', // 'Are you sure you want to rollback?',
    'refreshConfirm'  => 'நிச்சயமாகப் புதுப்பிக்க விரும்புகிறீர்களா?', // 'Are you sure you want to refresh?',

    'latest'            => 'அனைத்து புதிய இடம்பெயர்வுகளையும் இயக்குகிறது...', // 'Running all new migrations...',
    'generalFault'      => 'இடம்பெயர்வு தோல்வியடைந்தது!', // 'Migration failed!',
    'migrated'          => 'இடம்பெயர்வு முடிந்தது.', // 'Migrations complete.',
    'migInvalidVersion' => 'தவறான பதிப்பு எண் வழங்கப்பட்டுள்ளது.', // 'Invalid version number provided.',
    'toVersionPH'       => 'பதிப்பிற்கு நகர்கிறது %s...', // 'Migrating to version %s...',
    'toVersion'         => 'தற்போதைய பதிப்பிற்கு நகர்த்தப்படுகிறது...', // 'Migrating to current version...',
    'rollingBack'       => 'தொகுதிக்கு இடம்பெயர்வுகளை திரும்பப் பெறுதல்: ', // 'Rolling back migrations to batch: ',
    'noneFound'         => 'இடம்பெயர்வுகள் எதுவும் கண்டறியப்படவில்லை.', // 'No migrations were found.',
    'migSeeder'         => 'Seeder பெயர்', // 'Seeder name',
    'migMissingSeeder'  => 'நீங்கள் Seeder பெயரை வழங்க வேண்டும்', // 'You must provide a seeder name.',
    'nameSeeder'        => 'Seeder கோப்பிற்கு பெயரிடவும்', // 'Name the seeder file',
    'removed'           => 'பின் செல்லுகிறது: ', // 'Rolling back: ',
    'added'             => 'நடைபெற்றுக்கொண்டு இருக்கிறது : ', // 'Running: ',

    // Migrate Status
    'namespace' => 'பெயர்வெளி', // 'Namespace',
    'filename'  => 'கோப்பின் பெயர்', // 'Filename',
    'version'   => 'பதிப்பு', // 'Version',
    'group'     => 'குழு', // 'Group',
    'on'        => 'இடம்பெயர்ந்தது: ', // 'Migrated On: ',
    'batch'     => 'தொகுதி', // 'Batch',
];
