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
    'baseCastMissing'        => 'Die Klasse "{0}" muss von der Klasse "CodeIgniter\Entity\Cast\BaseCast" erben.',
    'enumInvalidCaseName'    => 'Ungültiger Fallname "{0}" für die Aufzählung "{1}".',
    'enumInvalidType'        => 'Es wurde ein Enum-Wert vom Typ "{1}" erwartet, aber "{0}" empfangen.',
    'enumInvalidValue'       => 'Ungültiger Wert "{1}" für Enum "{0}".',
    'enumMissingClass'       => 'Für die Umwandlung von Enum-Werten muss eine Enum-Klasse angegeben werden.',
    'enumNotEnum'            => '"{0}" ist keine gültige Enum-Klasse.',
    'invalidCastMethod'      => '"{0}" ist ungültige Cast-Methode, gültige Methoden sind: ["get", "set"].',
    'invalidTimestamp'       => 'Type-Casting "timestamp" erwartet einen gültigen Timestamp.',
    'jsonErrorCtrlChar'      => 'Steuerzeichenfehler, möglicherweise falsch kodiert',
    'jsonErrorDepth'         => 'Die maximale Stacktiefe wurde überschritten',
    'jsonErrorStateMismatch' => 'Unterlauf oder State-Mismatch',
    'jsonErrorSyntax'        => 'Syntaxfehler, fehlerhaftes JSON',
    'jsonErrorUnknown'       => 'Unbekannter Fehler',
    'jsonErrorUtf8'          => 'Ungültiges UTF-8 Zeichen, möglicherweise falsch kodiert',
];
