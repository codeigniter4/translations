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
    'baseCastMissing'        => 'Clasa "{0}" trebuie să moștenească clasa "CodeIgniter\Entity\Cast\BaseCast".',
    'enumInvalidCaseName'    => 'Nume de caz nevalid „{0}” pentru enumerarea „{1}”.',
    'enumInvalidType'        => 'Se aștepta o enumerare de tip „{1}”, dar s-a primit „{0}”.',
    'enumInvalidValue'       => 'Valoare invalidă „{1}” pentru enumerarea „{0}”.',
    'enumMissingClass'       => 'Clasa Enum trebuie specificată pentru conversia enum.',
    'enumNotEnum'            => '„{0}” nu este o clasă enum validă.',
    'invalidCastMethod'      => '"{0}" este metoda de difuzare nevalidă, metodele valide sunt: ["get", "set"].',
    'invalidTimestamp'       => 'Transmiterea tipului „timestamp” se așteaptă la un timestamp corect.',
    'jsonErrorCtrlChar'      => 'S-a găsit un caracter de control neașteptat.',
    'jsonErrorDepth'         => 'Adâncimea maximă a stivei a fost depășită.',
    'jsonErrorStateMismatch' => 'Underflow sau nepotrivirea modurilor.',
    'jsonErrorSyntax'        => 'Eroare de sintaxă, JSON incorect.',
    'jsonErrorUnknown'       => 'Eroare necunoscută.',
    'jsonErrorUtf8'          => 'Caractere UTF-8 incorecte, posibil codificare incorectă.',
];
