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
    'invalidExpiresTime'    => 'Nevalidan "{0}" tip za "Expires" atribut. Očekivano: string, integer, DateTimeInterface objekat.',
    'invalidExpiresValue'   => 'Vreme isteka kolačića nije validno.',
    'invalidCookieName'     => 'Ime kolačića "{0}" sadrži nevalidne znakove.',
    'emptyCookieName'       => 'Ime kolačića ne može biti prazno.',
    'invalidSecurePrefix'   => 'Korišćenje "__Secure-" zahteva postavljanje "Secure" atributa.',
    'invalidHostPrefix'     => 'Korišćenje "__Host-" prefiksa mora biti postavljeno sa "Secure" oznakom, ne sme imati "Domain" atribut, i "Path" je postavljen na "/".',
    'invalidSameSite'       => 'SameSite vrednost mora biti None, Lax, Strict ili prazan string, {0} postavljeno.',
    'invalidSameSiteNone'   => 'Korišćenje "SameSite=None" atributa zahteva postavljanje "Secure" atributa.',
    'invalidCookieInstance' => '"{0}" klasa očekuje niz kolačića da bude instanca od "{1}" ali je dobila "{2}" na indeksu {3}.',
    'unknownCookieInstance' => 'Kolačić objekat sa imenom "{0}" i prefiksom "{1}" nije pronađen u kolekciji.',
];
