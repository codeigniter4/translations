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
    'invalidExpiresTime'    => 'Neteisingas "{0}" tipas "Expires" atributui. Tikimasi: string, integer, DateTimeInterface object.',
    'invalidExpiresValue'   => 'Cookie expiration laikas neteisingas.',
    'invalidCookieName'     => 'Cookie vardas "{0}" turi neteisingų simbolių.',
    'emptyCookieName'       => 'Cookie vardas negali būti tuščias.',
    'invalidSecurePrefix'   => 'Naudojant "__Secure-" prefix requires setting the "Secure" attribute.',
    'invalidHostPrefix'     => 'Naudojant "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".',
    'invalidSameSite'       => 'The SameSite reikšmė turi būti None, Lax, Strict or a blank string, {0} given.',
    'invalidSameSiteNone'   => 'Naudojant "SameSite=None" attribute requires setting the "Secure" attribute.',
    'invalidCookieInstance' => '"{0}" klasė tikisi, kad cookies masyvas  būtų to be instances of "{1}", bet gavo "{2}" indekse {3}.',
    'unknownCookieInstance' => 'Cookie objektas su vardu "{0}" and prefix "{1}" was not found in the collection.',
];
