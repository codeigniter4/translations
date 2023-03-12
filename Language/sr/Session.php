<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Session language settings
return [
    'missingDatabaseTable'   => '`sessionSavePath` mora imati ime tabele za Database Session Handler da bi radilo.',
    'invalidSavePath'        => 'Sesija: Konfigurisana putanja čuvanja "{0}" nije direktorijum, ne postoji ili ne može biti kreirana.',
    'writeProtectedSavePath' => 'Sesija: Konfigurisana putanja čuvanja "{0}" ne može biti sačuvana od strane PHP procesa.',
    'emptySavePath'          => 'Sesija: Putanja čuvanja nije konfigurisana.',
    'invalidSavePathFormat'  => 'Sesija: Nevalidan Redis format putanje za čuvanje: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'Sesija: SameSite mora biti postavljen na None, Lax, Strict, ili prazan string. Dato: {0}',
];
