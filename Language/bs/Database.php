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
    'invalidEvent'                     => '{0} nije validan Model Event callback.',
    'invalidArgument'                  => 'Morate poslati validan {0}.',
    'invalidAllowedFields'             => 'Dozvoljena polja moraju biti definisana za model: {0}',
    'emptyDataset'                     => 'Ne postoje podaci za {0}.',
    'emptyPrimaryKey'                  => 'Nije definisan primarni ključ prilikom izrade {0}.',
    'failGetFieldData'                 => 'Neuspješno preuzimanje podataka o polju iz baze.',
    'failGetIndexData'                 => 'Neuspješno preuzimanje indeks podataka iz baze.',
    'failGetForeignKeyData'            => 'Neuspješno preuzimanje podataka o stranom ključu iz baze.',
    'parseStringFail'                  => 'Neuspješna obrada string ključa.',
    'featureUnavailable'               => 'Ova prednost nije dostupna za databazu koju koristite.',
    'tableNotFound'                    => 'Tabela`{0}` nije pronađena u trenutnoj bazi.',
    'noPrimaryKey'                     => '`{0}` model klasa nema definisan primarni ključ.',
    'noDateFormat'                     => '`{0}` model klasa nema ispravan dateFormat.',
    'fieldNotExists'                   => 'Polje `{0}` nije pronađeno.',
    'forEmptyInputGiven'               => 'Prazan uvjet je dat za polje `{0}`',
    'forFindColumnHaveMultipleColumns' => 'U nazivu kolone dozvoljena je samo jedna kolona.',
    'methodNotAvailable'               => 'Ne možete koristiti `{1}` u `{0}`. Ovo je metoda za `Query Builder` klasu.',
];
