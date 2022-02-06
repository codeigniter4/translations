<?php

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
    'invalidEvent'                     => 'A(z) {0} nem érvényes modellesemény-visszahívás.',
    'invalidArgument'                  => 'Érvényes {0}-t kell megadnia.',
    'invalidAllowedFields'             => 'Az engedélyezett mezőket meg kell adni a következő modellhez: {0}',
    'emptyDataset'                     => 'Nincsenek adatok a következőhöz: {0}.',
    'emptyPrimaryKey'                  => 'A(z) {0} létrehozásakor nincs megadva elsődleges kulcs.',
    'failGetFieldData'                 => 'Nem sikerült lekérni a mező adatokat az adatbázisból.',
    'failGetIndexData'                 => 'Nem sikerült lekérni az indexadatokat az adatbázisból.',
    'failGetForeignKeyData'            => 'Nem sikerült lekérni az idegen kulcs adatait az adatbázisból.',
    'parseStringFail'                  => 'A kulcs karakterláncának elemzése nem sikerült.',
    'featureUnavailable'               => 'Ez a funkció nem érhető el az Ön által használt adatbázisban.',
    'tableNotFound'                    => 'A(z) `{0}` tábla nem található az aktuális adatbázisban.',
    'noPrimaryKey'                     => 'A `{0}` modellosztály nem ad meg elsődleges kulcsot.',
    'noDateFormat'                     => 'A `{0}` modellosztálynak nincs érvényes dátumformátuma.',
    'fieldNotExists'                   => 'A(z) `{0}` mező nem található.',
    'forEmptyInputGiven'               => 'A(z) `{0}` mezőhöz üres utasítás tartozik',
    'forFindColumnHaveMultipleColumns' => 'Csak egyetlen oszlop engedélyezett az oszlopnévben.',
    'methodNotAvailable'               => 'A `{1}` nem használható a `{0}`-ban. Ez a `Query Builder` osztály egyik metódusa.',
];
