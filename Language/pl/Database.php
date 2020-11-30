<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Database language settings
return [
	'invalidEvent'                     => '{0} nie jest prawidłowym wywołaniem wywołania modelu.',
	'invalidArgument'                  => 'Musisz podać poprawną {0}.',
	'invalidAllowedFields'             => 'Dozwolone pola muszą być określone dla modelu: {0}',
	'emptyDataset'                     => 'Brak danych do {0}.',
	'failGetFieldData'                 => 'Błąd przy pobieraniu pola z bazy.',
	'failGetIndexData'                 => 'Błąd przy pobieraniu indeksu z bazy.',
	'failGetForeignKeyData'            => 'Błąd przy pobieraniu klucza obcego z bazy.',
	'parseStringFail'                  => 'Błąd parsowania klucza.',
	'featureUnavailable'               => 'Ta funkcja nie jest dostępna dla tego typu bazy danych.',
	'tableNotFound'                    => 'Tabela `{0}` nie została znaleziona w wybranej bazie.',
	'noPrimaryKey'                     => '`{0}` model nie wskazuje klucza głównego.',
	'noDateFormat'                     => '`{0}` model nie ma poprawnego formatu daty.',
	'fieldNotExists'                   => 'Pole `{0}` nie znalezione.',
	'forEmptyInputGiven'               => 'Empty statement is given for the field `{0}`',
	'forFindColumnHaveMultipleColumns' => 'Tylko pojedyncza nazwa kolumny jest dozwolona w tym polu.',
];
