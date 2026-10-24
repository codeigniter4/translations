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

// Database language settings
return [
    'invalidEvent'                     => '"{0}" nie je platné spätné volanie Model Event.',
    'invalidArgument'                  => 'Musíte zadať platný "{0}".',
    'invalidAllowedFields'             => 'Pre model musia byť špecifikované povolené polia: "{0}"',
    'emptyDataset'                     => 'Žiadne dáta pre {0}.',
    'emptyPrimaryKey'                  => 'Pri pokuse o vykonanie {0} nie je definovaný žiadny primárny kľúč.',
    'failGetFieldData'                 => 'Zlyhalo získanie údajov poľa z databázy.',
    'failGetIndexData'                 => 'Zlyhalo získanie údajov indexu z databázy.',
    'failGetForeignKeyData'            => 'Zlyhalo získanie údajov cudzieho kľúča z databázy.',
    'parseStringFail'                  => 'Parsovanie reťazca kľúča zlyhalo.',
    'featureUnavailable'               => 'Táto funkcia nie je dostupná pre databázu, ktorú používate.',
    'tableNotFound'                    => 'Tabuľka "{0}" sa v aktuálnej databáze nenašla.',
    'noPrimaryKey'                     => 'Trieda modelu "{0}" nešpecifikuje primárny kľúč.',
    'noDateFormat'                     => 'Trieda modelu "{0}" nemá platný dateFormat.',
    'fieldNotExists'                   => 'Pole "{0}" nebolo nájdené.',
    'forEmptyInputGiven'               => 'Pre pole "{0}" bol zadaný prázdny výraz',
    'forFindColumnHaveMultipleColumns' => 'V názve stĺpca je povolený iba jeden stĺpec.',
    'methodNotAvailable'               => '"{1}" nemôžete použiť v "{0}". Toto je metóda triedy Query Builder.',
];
