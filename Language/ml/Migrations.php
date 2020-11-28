<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Migration language settings
return [
	// Migration Runner
   'missingTable'      => 'മൈഗ്രേഷൻ പട്ടിക സജ്ജമാക്കിയിരിക്കണം.',
   'disabled'          => 'മൈഗ്രേഷനുകൾ ലോഡുചെയ്‌തുവെങ്കിലും അവ പ്രവർത്തനരഹിതമാക്കി അല്ലെങ്കിൽ തെറ്റായി സജ്ജീകരിച്ചു.',
   'notFound'          => 'മൈഗ്രേഷൻ ഫയൽ കണ്ടെത്തിയില്ല: ',
   'batchNotFound'     => 'ടാർഗെറ്റ് ബാച്ച് കണ്ടെത്തിയില്ല: ',
   'empty'             => 'മൈഗ്രേഷൻ ഫയലുകളൊന്നും കണ്ടെത്തിയില്',
   'gap'               => 'പതിപ്പ് നമ്പറിനടുത്തുള്ള മൈഗ്രേഷൻ ശ്രേണിയിൽ ഒരു വിടവ് ഉണ്ട്: ',
   'classNotFound'     => 'മൈഗ്രേഷൻ ക്ലാസ് "%s" കണ്ടെത്താനായില്ല.',
   'missingMethod'     => 'മൈഗ്രേഷൻ ക്ലാസിന് "%s" രീതി കാണുന്നില്ല.',

	// Migration Command
   'migHelpLatest'     => "\t\tMigrates database to latest available migration.",
   'migHelpCurrent'    => "\t\tMigrates database to version set as 'current' in configuration.",
   'migHelpVersion'    => "\tMigrates database to version {v}.",
   'migHelpRollback'   => "\tRuns all migrations 'down' to version 0.",
   'migHelpRefresh'    => "\t\tUninstalls and re-runs all migrations to freshen database.",
   'migHelpSeed'       => "\tRuns the seeder named [name].",
   'migCreate'         => "\tCreates a new migration named [name]",
   'nameMigration'     => 'Name the migration file',
   'badCreateName'     => 'You must provide a migration file name.',
   'writeError'        => 'Error trying to create {0} file, check if the directory is writable.',
   'migNumberError'    => 'Migration number must be three digits, and there must not be any gaps in the sequence.',
   'rollBackConfirm'   => 'Are you sure you want to rollback?',
   'refreshConfirm'    => 'Are you sure you want to refresh?',

   'latest'            => 'Running all new migrations...',
   'generalFault'      => 'Migration failed!',
   'migInvalidVersion' => 'Invalid version number provided.',
   'toVersionPH'       => 'Migrating to version %s...',
   'toVersion'         => 'Migrating to current version...',
   'rollingBack'       => 'Rolling back migrations to batch: ',
   'noneFound'         => 'No migrations were found.',
   'on'                => 'Migrated On: ',
   'migSeeder'         => 'Seeder name',
   'migMissingSeeder'  => 'You must provide a seeder name.',
   'removed'           => 'Rolling back: ',
   'added'             => 'പ്രവർത്തിക്കുന്നു: ',

   'version'           => 'പതിപ്പ്',
   'filename'          => 'ഫയൽനാമം',
];
