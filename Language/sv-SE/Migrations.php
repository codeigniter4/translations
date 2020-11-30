<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
	// Migration Runner
	'missingTable'  => 'Migrationstabellen måste anges.',
	'disabled'      => 'Migrationer har laddats men är antingen deaktiverade eller felaktigt inställda.',
	'notFound'      => 'Migrationsfilen hittade inte: ',
	'batchNotFound' => 'Target batch hittade inte: ',
	'empty'         => 'Ingen migrationsfil hittades',
	'gap'           => 'Det finns en lucka i migrationssekvens nära version: ',
	'classNotFound' => 'Migrationsklassen "%s" kunde inte hittas.',
	'missingMethod' => 'Migrationsklassen saknar funktionen "%s".',

	// Migration Command
	'migHelpLatest'     => "\t\tMigrerar databasen till senaste tillgängliga nivå.",
	'migHelpCurrent'    => "\t\tMigrerar databasen till den nivå som är angiven som 'current' i inställningarna.",
	'migHelpVersion'    => "\tMigrerar databasen to version {v}.",
	'migHelpRollback'   => "\tKör alla migreringar ned till version 0.",
	'migHelpRefresh'    => "\t\tAvinstallerar alla migreringar och kör om dessa för att uppdatera databsen.",
	'migHelpSeed'       => "\tKör seeder:n med namnet [name].",
	'migCreate'         => "\tSkapar en ny seered med namnet [name]",
	'nameMigration'     => 'Namnge migreringsfilen',
	'migNumberError'    => 'Migreringens nummer måste vara tre siffor och det får inte vara luckor i sekvensen.',
	'rollBackConfirm'   => 'Är du säker på att du vill göra en rollback?',
	'refreshConfirm'    => 'Är du säker på att du vill göra en refresh?',
	'latest'            => 'Kör alla nya migreringar...',
	'generalFault'      => 'Migreringen misslyckades!',
	'migInvalidVersion' => 'Felaktigt versionsnummer angivet.',
	'toVersionPH'       => 'Migrerar till version %s...',
	'toVersion'         => 'Migrerar till senaste version...',
	'rollingBack'       => 'Rollback på migreringar i batchen: ',
	'noneFound'         => 'Inga migreringar kunde hittas.',
	'migSeeder'         => 'Seederns namn',
	'migMissingSeeder'  => 'Du måste ange ett namn för seeder.',
	'nameSeeder'        => 'Namnge seederfilen',
	'removed'           => 'Rullar tillbaka: ',
	'added'             => 'Kör: ',

	// Migrate Status
	'namespace' => 'Namespace',
	'filename'  => 'Filnamn',
	'version'   => 'Version',
	'group'     => 'Grupp',
	'on'        => 'Migrerad: ',
	'batch'     => 'Batch',
];
