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

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'Musí byť nastavená tabuľka migrácií.',
    'disabled'      => 'Migrácie boli načítané, ale sú vypnuté alebo nesprávne nastavené.',
    'notFound'      => 'Migračný súbor nebol nájdený: ',
    'batchNotFound' => 'Cieľová dávka sa nenašla: ',
    'empty'         => 'Nenašli sa žiadne migračné súbory',
    'gap'           => 'V migračnej sekvencii je medzera pri čísle verzie: ',
    'classNotFound' => 'Migračnú triedu "%s" sa nepodarilo nájsť.',
    'missingMethod' => 'V migračnej triede chýba metóda "%s".',
    'locked'        => 'Migrácie už bežia v inom procese. Preskakujem.',

    // Migration Command
    'migHelpLatest'   => "\t\tMigruje databázu na najnovšiu dostupnú migráciu.",
    'migHelpCurrent'  => "\t\tMigruje databázu na verziu nastavenú ako 'current' v konfigurácii.",
    'migHelpVersion'  => "\tMigruje databázu na verziu {v}.",
    'migHelpRollback' => "\tSpustí všetky migrácie 'down' až po verziu 0.",
    'migHelpRefresh'  => "\t\tOdinštaluje a znovu spustí všetky migrácie na obnovenie databázy.",
    'migHelpSeed'     => "\tSpustí seeder s názvom [name].",
    'migCreate'       => "\tVytvorí novú migráciu s názvom [name]",
    'nameMigration'   => 'Pomenujte migračný súbor',
    'migNumberError'  => 'Číslo migrácie musí mať tri číslice a v sekvencii nesmú byť medzery.',
    'rollBackConfirm' => 'Naozaj chcete vrátiť migrácie späť?',
    'refreshConfirm'  => 'Naozaj chcete obnoviť migrácie?',

    'latest'            => 'Spúšťajú sa všetky nové migrácie...',
    'generalFault'      => 'Migrácia zlyhala!',
    'migrated'          => 'Migrácie dokončené.',
    'migInvalidVersion' => 'Zadané neplatné číslo verzie.',
    'toVersionPH'       => 'Prebieha migrácia na verziu %s...',
    'toVersion'         => 'Prebieha migrácia na aktuálnu verziu...',
    'rollingBack'       => 'Vracanie migrácií späť na dávku: ',
    'noneFound'         => 'Nenašli sa žiadne migrácie.',
    'migSeeder'         => 'Názov seedera',
    'migMissingSeeder'  => 'Musíte zadať názov seedera.',
    'nameSeeder'        => 'Pomenujte súbor seedera',
    'removed'           => 'Vraciam späť: ',
    'added'             => 'Spúšťam: ',

    // Migrate Status
    'namespace' => 'Menný priestor',
    'filename'  => 'Názov súboru',
    'version'   => 'Verzia',
    'group'     => 'Skupina',
    'on'        => 'Zmigrované: ',
    'batch'     => 'Dávka',
];
