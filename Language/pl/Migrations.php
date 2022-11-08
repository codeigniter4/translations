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
    'missingTable'  => 'Tabela migracji musi zostać ustawiona.',
    'disabled'      => 'Migracje zostały załadowane, ale są wyłączone lub niepoprawnie skonfigurowane.',
    'notFound'      => 'Nie znaleziono pliku migracji: ',
    'batchNotFound' => 'Nie znaleziono porcji docelowej: ',
    'empty'         => 'Nie znaleziono plików migracji',
    'gap'           => 'W sekwencji migracji znajduje się luka w pobliżu numeru wersji: ',
    'classNotFound' => 'Nie można znaleźć klasy migracji "%s".',
    'missingMethod' => 'W klasie migracji brakuje metody "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tMigruje bazę danych do najnowszej dostępnej migracji.",
    'migHelpCurrent'  => "\t\tMigruje bazę danych do wersji ustawionej jako \"aktualna\" w konfiguracji.",
    'migHelpVersion'  => "\tMigruje bazę danych do wersji {v}.",
    'migHelpRollback' => "\tUruchamia wszystkie migracje \"w dół\" do wersji 0.",
    'migHelpRefresh'  => "\t\tOdinstalowuje i ponownie uruchamia wszystkie migracje, aby odświeżyć bazę danych.",
    'migHelpSeed'     => "\tUruchamia źródło o nazwie [name].",
    'migCreate'       => "\tTworzy nową migrację o nazwie [name]",
    'nameMigration'   => 'Nazwij plik migracji',
    'migNumberError'  => 'Numer migracji musi składać się z trzech cyfr bez żadnych przerw w sekwencji.',
    'rollBackConfirm' => 'Czy jesteś pewny, że chcesz cofnąć zmiany?',
    'refreshConfirm'  => 'Czy jesteś pewny, że chcesz odświeżyć?',

    'latest'            => 'Uruchamianie wszystkich nowych migracji...',
    'generalFault'      => 'Błąd migracji!',
    'migrated'          => 'Migracje zakończone.',
    'migInvalidVersion' => 'Podano nieprawidłowy numer wersji.',
    'toVersionPH'       => 'Migrowanie do wersji %s...',
    'toVersion'         => 'Migrowanie do aktualnej wersji...',
    'rollingBack'       => 'Wycofywanie migracji do porcji: ',
    'noneFound'         => 'Nie znaleziono migracji.',
    'migSeeder'         => 'Nazwa źródła',
    'migMissingSeeder'  => 'Musisz podać nazwę źródła.',
    'nameSeeder'        => 'Nazwij plik źródła',
    'removed'           => 'Wycofywanie: ',
    'added'             => 'Uruchomienie: ',

    // Migrate Status
    'namespace' => 'Przestrzeń nazw',
    'filename'  => 'Nazwa pliku',
    'version'   => 'Wersja',
    'group'     => 'Grupa',
    'on'        => 'Migracja włączona: ',
    'batch'     => 'Porcja',
];
