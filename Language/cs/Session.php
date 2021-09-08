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
    'missingDatabaseTable'   => '`sessionSavePath` musí mít tabulku aby pracoval Database Session Handler.',
    'invalidSavePath'        => 'Session: Nastavená cesta uložení "{0}" není složka, neexistuje, nebo nemůže být vytvořena.',
    'writeProtectedSavePath' => 'Session: Nastavená cesta uložení "{0}" není zapisovatelná skrze PHP proces.',
    'emptySavePath'          => 'Session: Není nastavená cesta pro uložení.',
    'invalidSavePathFormat'  => 'Session: Neplatný formát Redis cesty: {0}',
    'invalidSameSiteSetting' => 'Session: SameSite nastavenie musí byť None, Lax, Strict, alebo prázdny reťazec. Zadané: {0}',
];
