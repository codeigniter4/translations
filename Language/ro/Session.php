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
    'missingDatabaseTable'   => '`sessionSavePath` trebuie să aibă numele tabelului pentru ca Database Session Handler să funcționeze.',
    'invalidSavePath'        => 'Sesiune: Calea de salvare configurată "{0}" nu este un director, nu există sau nu poate fi creat.',
    'writeProtectedSavePath' => 'Sesiune: Calea de salvare configurată "{0}" nu poate fi scris prin procesul PHP.',
    'emptySavePath'          => 'Sesiune: Nu a fost configurată nicio cale de salvare.',
    'invalidSavePathFormat'  => 'Sesiune: Calea de salvare Redis are format invalid: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'Sesiune: Setarea SameSite trebuie să fie None, Lax, Strict sau un șir gol. Dat: {0}',
];
