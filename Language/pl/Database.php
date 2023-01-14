<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Database language settings
return [
    'invalidEvent'                     => '{0} nie jest prawidłowym wywołaniem zdarzenia modelu.',
    'invalidArgument'                  => 'Musisz podać poprawną {0}.',
    'invalidAllowedFields'             => 'Dozwolone pola muszą być określone dla modelu: {0}',
    'emptyDataset'                     => 'Brak danych do {0}.',
    'emptyPrimaryKey'                  => 'Musi być ustawiony klucz główny, by wykonać akcję {0}.',
    'failGetFieldData'                 => 'Nie udało się pobrać informacji o polach z bazy danych.',
    'failGetIndexData'                 => 'Nie udało się pobrać informacji o indeksach z bazy danych.',
    'failGetForeignKeyData'            => 'Nie udało się pobrać informacji o kluczach obcych z bazy danych.',
    'parseStringFail'                  => 'Nie udało się sparsować klucza.',
    'featureUnavailable'               => 'Ta funkcjonalność nie jest dostępna w bazie danych, której używasz.',
    'tableNotFound'                    => 'Tabela `{0}` nie została znaleziona w wybranej bazie danych.',
    'noPrimaryKey'                     => 'Model `{0}` nie ma zdefiniowanego klucza głównego.',
    'noDateFormat'                     => 'Model `{0}` ma nieprawidłowo ustawione pole dateFormat.',
    'fieldNotExists'                   => 'Pole `{0}` nie istnieje.',
    'forEmptyInputGiven'               => 'Przekazano pusta wartość do zapytania `{0}`',
    'forFindColumnHaveMultipleColumns' => 'Można przekazać tylko jedną nazwę kolumny.',
    'methodNotAvailable'               => 'Nie możesz użyć `{1}` w `{0}`. Jest to metoda klasy `Query Builder`.',
];
