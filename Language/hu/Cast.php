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

// Cast language settings
return [
    'baseCastMissing'        => 'A "{0}" osztálynak örökölnie kell a "CodeIgniter\Entity\Cast\BaseCast" osztályt.',
    'enumInvalidCaseName'    => 'Érvénytelen esetnév "{0}" a(z) "{1}" enumerációhoz.',
    'enumInvalidType'        => 'A várt enumeráció típusa "{1}", a kapott enumeráció azonban "{0}".',
    'enumInvalidValue'       => 'Érvénytelen "{1}" érték a(z) "{0}" enumerációhoz.',
    'enumMissingClass'       => 'Az enum osztályt meg kell adni az enum konvertáláshoz.',
    'enumNotEnum'            => 'A(z) „{0}” nem érvényes enumerációs osztály.',
    'invalidCastMethod'      => 'A "{0}" érvénytelen Cast módszer, az érvényes metódusok: ["get", "set"].',
    'invalidTimestamp'       => 'Az "időbélyeg" típusú Cast megfelelő időbélyeget vár.',
    'jsonErrorCtrlChar'      => 'Váratlan vezérlőkarakter található.',
    'jsonErrorDepth'         => 'Túllépte a verem maximális mélységét.',
    'jsonErrorStateMismatch' => 'Alulcsordulás vagy a módok nem egyeznek.',
    'jsonErrorSyntax'        => 'Szintaktikai hiba, hibás formátumú JSON.',
    'jsonErrorUnknown'       => 'Ismeretlen hiba.',
    'jsonErrorUtf8'          => 'Rosszul formázott UTF-8 karakterek, valószínűleg helytelenül kódoltak.',
];
