<?php

/**
 * Migration language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     Mattias Sandström
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Migration Runner
   'missingTable'      => 'Migrationstabellen måste anges.',
   'disabled'          => 'Migrationer har laddats men är antingen deaktiverade eller felaktigt inställda.',
   'notFound'          => 'Migrationsfilen hittade inte: ',
   'batchNotFound'     => 'Target batch hittade inte: ',
   'empty'             => 'Ingen migrationsfil hittades',
   'gap'               => 'Det finns en lucka i migrationssekvens nära version: ',
   'classNotFound'     => 'Migrationsklassen "%s" kunde inte hittas.',
   'missingMethod'     => 'Migrationsklassen saknar funktionen "%s".',

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
   'namespace'         => 'Namespace',
   'filename'          => 'Filnamn',
   'version'           => 'Version',
   'group'             => 'Grupp',
   'on'                => 'Migrerad: ',
   'batch'             => 'Batch',
];
