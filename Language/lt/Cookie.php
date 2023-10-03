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
    'invalidExpiresTime'    => 'Neteisingas „{0}“ tipas „Expires“ atributui. Tikimasi: string, integer, DateTimeInterface objekto.',
    'invalidExpiresValue'   => 'Cookie expiration laikas neteisingas.',
    'invalidCookieName'     => 'Cookie vardas „{0}“ turi neteisingų simbolių.',
    'emptyCookieName'       => 'Cookie vardas negali būti tuščias.',
    'invalidSecurePrefix'   => 'Using „__Secure-“ prefix requires setting the „Secure“ attribute.',
    'invalidHostPrefix'     => 'Using the „__Host-“ prefix must be set with the „Secure“ flag, must not have a „Domain“ attribute, and the „Path“ is set to „/“.',
    'invalidSameSite'       => 'The SameSite reikšmė turi būti None, Lax, Strict arba tuščia string, tačiau gauta „{0}“.',
    'invalidSameSiteNone'   => 'Using the „SameSite=None“ attribute requires setting the „Secure“ attribute.',
    'invalidCookieInstance' => '„{0}“ klasė tikisi, kad „cookies“ masyvo elementai būtų „{1}“ duomenų tipo, bet gavo „{2}“ indekse „{3}“.',
    'unknownCookieInstance' => 'Cookie objektas su vardu „{0}“ ir priešdėliu „{1}“ nerastas rinkinyje.',
];
