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
    'invalidExpiresTime'    => 'Felaktig typ "{0}" för "Expires" attributet. Förväntade antingen: string, integer eller DateTimeInterface objekt.',
    'invalidExpiresValue'   => 'Cookiens expire tid är inte giltig.',
    'invalidCookieName'     => 'Namnet på cookien "{0}" innehåller otillåtna tecken.',
    'emptyCookieName'       => 'Namnet på cookien kan inte vara tomt.',
    'invalidSecurePrefix'   => 'Användning av prefixet "__Secure-" förutsätter att attributet "Secure" är satt.',
    'invalidHostPrefix'     => 'Användning av prefixet "__Host-" kräver att "Secure" flaggan är satt, kan inte ha ett "Domain" attribut, samt att "Path" är satt till "/".',
    'invalidSameSite'       => 'SameSite måste vara None, Lax, Strict, eller en blank sträng. Givet: {0}',
    'invalidSameSiteNone'   => '"SameSite=None" kräver att "Secure" är satt.',
    'invalidCookieInstance' => 'Klassen "{0}" förväntade en cookie array av typen "{1}" men fick "{2}" i position {3}.',
    'unknownCookieInstance' => 'Cookie-objektet med namn "{0}" och prefix "{1}" kunde inte hittas i collection.',
];
