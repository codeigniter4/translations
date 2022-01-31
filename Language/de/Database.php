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
    'invalidEvent'                     => '{0} ist kein gültiger Model Event Callback.',
    'invalidArgument'                  => 'Ungültiges Argument: {0}.',
    'invalidAllowedFields'             => 'Es sind keine zulässigen Felder angegeben für das Model: {0}',
    'emptyDataset'                     => 'Keine Daten gefunden für: {0}.',
    'emptyPrimaryKey'                  => 'Es ist kein Primärschlüssel definiert für die Erstellung von {0}.',
    'failGetFieldData'                 => 'Es konnten keine Felddaten aus der Datenbank abgerufen werden.',
    'failGetIndexData'                 => 'Es konnten keine Indexdaten aus der Datenbank abgerufen werden.',
    'failGetForeignKeyData'            => 'Die Fremdschlüssel konnten nicht aus der Datenbank abgerufen werden.',
    'parseStringFail'                  => 'Parsen des Key-Strings fehlgeschlagen.',
    'featureUnavailable'               => 'Diese Funktion ist für die verwendete Datenbank nicht verfügbar.',
    'tableNotFound'                    => 'Die Tabelle `{0}` konnte in der aktuellen Datenbank nicht gefunden werden.',
    'noPrimaryKey'                     => 'Das Model `{0}` definiert keinen Primärschlüssel.',
    'noDateFormat'                     => 'Das Model `{0}` hat kein valides Datumsformat ($dateFormat).',
    'fieldNotExists'                   => 'Feld `{0}` nicht gefunden.',
    'forEmptyInputGiven'               => 'Leere Anweisung für Feld `{0}`.',
    'forFindColumnHaveMultipleColumns' => 'Es darf nur ein einzelner Feldname definiert werden.',
    'methodNotAvailable'               => '`{1}` kann nicht in `{0}` verwendet werden. Dies ist eine Methode der Klasse `Query Builder`.',
];
