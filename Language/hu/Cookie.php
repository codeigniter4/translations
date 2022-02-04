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
    'invalidExpiresTime'    => 'Érvénytelen "{0}" típus az "Expires" attribútumhoz. Elvárt: karakterlánc, egész szám, DateTimeInterface objektum.',
    'invalidExpiresValue'   => 'A Süti lejárati ideje nem érvényes.',
    'invalidCookieName'     => 'A "{0}" Süti neve érvénytelen karaktereket tartalmaz.',
    'emptyCookieName'       => 'A Süti neve nem lehet üres.',
    'invalidSecurePrefix'   => 'A "__Secure-" előtag használatához be kell állítani a "Secure" attribútumot.',
    'invalidHostPrefix'     => 'A "__Host-" előtagot a "Secure" jelzővel kell beállítani, nem lehet "Domain" attribútum, és a "Path" értéke "/".',
    'invalidSameSite'       => 'A SameSite értékének None, Lax, Strict vagy egy üres karakterláncnak kell lennie, megadva: {0}.',
    'invalidSameSiteNone'   => 'A "SameSite=None" attribútum használatához be kell állítani a "Secure" attribútumot.',
    'invalidCookieInstance' => 'A "{0}" osztály a Süti-tömbtől elvárta, hogy a "{1}" példányai legyenek, de a "{2}" értéke a következő: {3}.',
    'unknownCookieInstance' => 'A "{0}" nevű és "{1}" előtagú Süti-objektum nem található a gyűjteményben.',
];
