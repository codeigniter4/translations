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
    'missingDatabaseTable'   => '`sessionSavePath` mora imati ime tablice za Database Session Handler da bi radilo.',
    'invalidSavePath'        => 'Sesija: Konfigurisana putanja spremanja "{0}" nije direktorij, ne postoji ili ne može biti kreirana.',
    'writeProtectedSavePath' => 'Sesija: Konfigurisana putanja spremanja "{0}" ne može biti zapisana od strane PHP procesa.',
    'emptySavePath'          => 'Sesija: Putanja spremanja nije konfigurisana.',
    'invalidSavePathFormat'  => 'Sesija: Nevalidan Redis format putanje za spremanje: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'Sesija: SameSite mora biti postavljen na None, Lax, Strict, ili prazan string. Dato: {0}',
];
