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
    'missingDatabaseTable'   => 'Session: "savePath" musí obsahovat název tabulky, aby Database Session Handler fungoval.',
    'invalidSavePath'        => 'Session: Nastavená cesta uložení "{0}" není adresář, neexistuje nebo nemůže být vytvořena.',
    'writeProtectedSavePath' => 'Session: Do nastavené cesty uložení "{0}" nemůže PHP proces zapisovat.',
    'emptySavePath'          => 'Session: Není nastavena cesta uložení.',
    'invalidSavePathFormat'  => 'Session: Neplatný formát cesty uložení Redis: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => 'Session: Nastavení SameSite musí být None, Lax, Strict nebo prázdný řetězec. Zadáno: "{0}"',
];
