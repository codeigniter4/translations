<?php

declare(strict_types=1);

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
    'missingDatabaseTable'   => 'Session: "savePath" musí obsahovať názov tabuľky, aby Database Session Handler fungoval.',
    'invalidSavePath'        => 'Session: Nastavená cesta uloženia "{0}" nie je adresár, neexistuje alebo nemôže byť vytvorená.',
    'writeProtectedSavePath' => 'Session: Do nastavenej cesty uloženia "{0}" nemôže PHP proces zapisovať.',
    'emptySavePath'          => 'Session: Nie je nastavená cesta uloženia.',
    'invalidSavePathFormat'  => 'Session: Neplatný formát cesty uloženia Redis: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => 'Session: Nastavenie SameSite musí byť None, Lax, Strict alebo prázdny reťazec. Zadané: "{0}"',
];
