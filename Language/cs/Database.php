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
    'invalidEvent'                     => '"{0}" není platné zpětné volání Model Event.',
    'invalidArgument'                  => 'Musíte zadat platný "{0}".',
    'invalidAllowedFields'             => 'Pro model musí být specifikována povolená pole: "{0}"',
    'emptyDataset'                     => 'Žádná data pro {0}.',
    'emptyPrimaryKey'                  => 'Při pokusu o provedení {0} není definován žádný primární klíč.',
    'failGetFieldData'                 => 'Selhalo získání údajů pole z databáze.',
    'failGetIndexData'                 => 'Selhalo získání údajů indexu z databáze.',
    'failGetForeignKeyData'            => 'Selhalo získání údajů cizího klíče z databáze.',
    'parseStringFail'                  => 'Parsování řetězce klíče selhalo.',
    'featureUnavailable'               => 'Tato funkce není dostupná pro databázi, kterou používáte.',
    'tableNotFound'                    => 'Tabulka "{0}" nebyla v aktuální databázi nalezena.',
    'noPrimaryKey'                     => 'Třída modelu "{0}" nespecifikuje primární klíč.',
    'noDateFormat'                     => 'Třída modelu "{0}" nemá platný dateFormat.',
    'fieldNotExists'                   => 'Pole "{0}" nebylo nalezeno.',
    'forEmptyInputGiven'               => 'Pro pole "{0}" byl zadán prázdný výraz',
    'forFindColumnHaveMultipleColumns' => 'V názvu sloupce je povolen pouze jeden sloupec.',
    'methodNotAvailable'               => '"{1}" nelze použít v "{0}". Toto je metoda třídy Query Builder.',
];
