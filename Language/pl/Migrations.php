<?php

/**
 * Migration language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */
return [
	// Migration Runner
	'missingTable'    => 'Tabela migracji musi zostać ustawiona.',
	'invalidType'     => 'Określono niepoprawny typ numerowania migracji: {0}',
	'disabled'        => 'Migracje zostały załadowane, ale są wyłączone lub niepoprawnie skonfigurowane.',
	'notFound'        => 'Nie znaleziono pliku migracji: ',
	'empty'           => 'Nie znaleziono plików migracji',
	'gap'             => 'W sekwencji migracji znajduje się luka w pobliżu numeru wersji: ',
	'classNotFound'   => 'Nie można znaleźć klasy migracji "%s".',
	'missingMethod'   => 'W klasie migracji brakuje metody "%s".',

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

	'toLatest'          => 'Migrowanie do najnowszej wersji...',
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

	'version'           => 'Wersja',
	'filename'          => 'Nazwa pliku',
];
