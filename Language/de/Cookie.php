<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cookie language settings
return [
    'invalidExpiresTime'    => 'Ungültiger "{0}" Datentyp für das "Expires" Attribut. Erwartet: String, Integer, DateTimeInterface Objekt.',
    'invalidExpiresValue'   => 'Das Cookie Ablaufdatum ist ungültig.',
    'invalidCookieName'     => 'Das Cookie "{0}" enthält ungültige Zeichen.',
    'emptyCookieName'       => 'Der Cookie-Name darf nicht leer sein.',
    'invalidSecurePrefix'   => 'Das "__Secure-" Prefix erfordert das "Secure" Attribut.',
    'invalidHostPrefix'     => 'Die Verwendung des Präfixes "__Host-" muss mit dem "Secure"-Flag gesetzt werden, darf kein "Domain"-Attribut haben und der "Path" ist auf "/" zu setzen.',
    'invalidSameSite'       => 'Die SameSite-Einstellung kann nur None, Lax, Strict, oder ein leerer String sein. Gegeben: {0}',
    'invalidSameSiteNone'   => 'Wenn das "SameSite=None" Attribut gesetzt ist, dann muss ebenfalls das "Secure" Attribute gesetzt werden.',
    'invalidCookieInstance' => 'Die Klasse "{0}" erwartete, dass das Cookie Array eine Instanz von "{1}" ist, bekam aber "{2}" bei Index {3}.',
    'unknownCookieInstance' => 'Das Cookie-Objekt mit dem Namen "{0}" und dem Prefix "{1}" wurde in der Collection nicht gefunden.',
];
