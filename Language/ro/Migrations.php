<?php

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
    'missingTable'  => 'Tabelul de migrație trebuie să fie setat.',
    'disabled'      => 'Migrațiile au fost încărcate, dar sunt dezactivate sau configurate incorect.',
    'notFound'      => 'Fișierul de migrare nu a fost găsit: ',
    'batchNotFound' => 'Lotul țintă nu a fost găsit: ',
    'empty'         => 'Nu s-au găsit fișiere de migrare',
    'gap'           => 'Există un decalaj în secvența de migrare lângă numărul versiunii: ',
    'classNotFound' => 'Clasa de migrare "%s" nu a putut fi găsită.',
    'missingMethod' => 'Clasei de migrare îi lipsește metoda "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tMigrează baza de date la cea mai recentă migrare disponibilă.",
    'migHelpCurrent'  => "\t\tMigrează baza de date la versiunea setată ca 'actuală' în configurație.",
    'migHelpVersion'  => "\tMigrează baza de date la versiunea {v}.",
    'migHelpRollback' => "\tRulează toate migrările 'în jos' la versiunea 0.",
    'migHelpRefresh'  => "\t\tDezinstalează și rulează din nou toate migrările pentru a reîmprospăta baza de date.",
    'migHelpSeed'     => "\tRulează seeder-ul numit [name].",
    'migCreate'       => "\tCreează o nouă migrare numită [name]",
    'nameMigration'   => 'Denumiți fișierul de migrare',
    'migNumberError'  => 'Numărul de migrare trebuie să aibă trei cifre și nu trebuie să existe lacune în succesiune.',
    'rollBackConfirm' => 'Sunteți sigur că doriți să dați un rollback?',
    'refreshConfirm'  => 'Sunteți sigur că doriți să dați un refresh?',

    'latest'            => 'Rulează toate migrarile noi...',
    'generalFault'      => 'Migrarea a eșuat!',
    'migrated'          => 'Migrări finalizate.',
    'migInvalidVersion' => 'S-a furnizat un număr de versiune invalid.',
    'toVersionPH'       => 'Se migrează la versiunea %s...',
    'toVersion'         => 'Migrarea la versiunea actuală...',
    'rollingBack'       => 'Întoarcerea migrarii la lot: ',
    'noneFound'         => 'Nu au fost găsite migrații.',
    'migSeeder'         => 'Nume Seeder',
    'migMissingSeeder'  => 'Trebuie să furnizați un nume de Seeder.',
    'nameSeeder'        => 'Denumiți fișierul de Seeder',
    'removed'           => 'Întoarcere înapoi: ',
    'added'             => 'Rulează: ',

    // Migrate Status
    'namespace' => 'Spațiu de nume',
    'filename'  => 'Nume de fișier',
    'version'   => 'Versiune',
    'group'     => 'Grup',
    'on'        => 'Migrat pe: ',
    'batch'     => 'Lot',
];
