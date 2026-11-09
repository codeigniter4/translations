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

// Cookie language settings
return [
    'invalidExpiresTime'    => 'Neteisingas „{0}“ tipas „Expires“ atributui. Tikimasi: string, integer, DateTimeInterface objekto.',
    'invalidExpiresValue'   => 'Cookie galiojimo laikas neteisingas.',
    'invalidCookieName'     => 'Cookie vardas „{0}“ turi neteisingų simbolių.',
    'invalidCookieValue'    => 'Cookie reikšmė turi neteisingų simbolių.',
    'invalidCookiePath'     => 'Cookie kelias turi neteisingų simbolių.',
    'invalidCookieDomain'   => 'Cookie domenas turi neteisingų simbolių.',
    'emptyCookieName'       => 'Cookie vardas negali būti tuščias.',
    'invalidSecurePrefix'   => 'Naudojant priešdėlį „__Secure-“ būtina nustatyti atributą „Secure“.',
    'invalidHostPrefix'     => 'Naudojant priešdėlį „__Host-“ turi būti nustatyta vėliava „Secure“, neturi būti atributo „Domain“, o „Path“ turi būti nustatytas į „/“.',
    'invalidSameSite'       => 'SameSite reikšmė turi būti None, Lax, Strict arba tuščia eilutė, tačiau gauta „{0}“.',
    'invalidSameSiteNone'   => 'Naudojant atributą „SameSite=None“ būtina nustatyti atributą „Secure“.',
    'invalidCookieInstance' => '„{0}“ klasė tikisi, kad „cookies“ masyvo elementai būtų „{1}“ duomenų tipo, bet gavo „{2}“ indekse „{3}“.',
    'unknownCookieInstance' => 'Cookie objektas su vardu „{0}“ ir priešdėliu „{1}“ nerastas rinkinyje.',
];
