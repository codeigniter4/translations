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
	'missingTable'  => 'Tabela migracji musi zostać ustawiona.',
	'disabled'      => 'Migracje zostały załadowane, ale są wyłączone lub niepoprawnie skonfigurowane.',
	'notFound'      => 'Nie znaleziono pliku migracji: ',
	'batchNotFound' => 'Target batch not found: ',
	'empty'         => 'Nie znaleziono plików migracji',
	'gap'           => 'W sekwencji migracji znajduje się luka w pobliżu numeru wersji: ',
	'classNotFound' => 'Nie można znaleźć klasy migracji "%s".',
	'missingMethod' => 'W klasie migracji brakuje metody "%s".',

	// Migration Command
	'migHelpLatest'   => "\t\tPrzeprowadza migrację bazy danych do najnowszej dostępnej migracji.",
	'migHelpCurrent'  => "\t\tMigracja bazy danych do wersji ustawionej jako \"aktualny\" w konfiguracji.",
	'migHelpVersion'  => "\tMigracja bazy danych do wersji {v}.",
	'migHelpRollback' => "\tUruchamia wszystkie migracje \"w dół\" do wersji 0.",
	'migHelpRefresh'  => "\t\tOdinstalowuje i ponownie uruchamia wszystkie migracje, aby odświeżyć bazę danych.",
	'migHelpSeed'     => "\tUruchamia siewnik o nazwie [name].",
	'migCreate'       => "\tTworzy nową migrację o nazwie [name]",
	'nameMigration'   => 'Nazwij plik migracji',
	'badCreateName'   => 'Musisz podać nazwę pliku migracji.',
	'writeError'      => 'Błąd podczas próby utworzenia pliku.',
	'migNumberError'  => 'Migration number must be three digits, and there must not be any gaps in the sequence.',
	'rollBackConfirm' => 'Are you sure you want to rollback?',
	'refreshConfirm'  => 'Are you sure you want to refresh?',

	'latest'            => 'Running all new migrations...',
	'generalFault'      => 'Migration failed!',
	'migInvalidVersion' => 'Podano nieprawidłowy numer wersji.',
	'toVersionPH'       => 'Migrowanie do wersji %s...',
	'toVersion'         => 'Migracja do bieżącej wersji...',
	'rollingBack'       => 'Wycofuję wszystkie migracje...',
	'noneFound'         => 'Nie znaleziono migracji.',
	'on'                => 'Migracja włączona: ',
	'migSeeder'         => 'Nazwa Seedera',
	'migMissingSeeder'  => 'Musisz podać nazwę seedera.',
	'removed'           => 'Wycofywanie: ',
	'added'             => 'Uruchomienie: ',

	'version'  => 'Wersja',
	'filename' => 'Nazwa pliku',
];
