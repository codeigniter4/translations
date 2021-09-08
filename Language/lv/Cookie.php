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
    'invalidExpiresTime'    => 'Atribūtam `Derīguma termiņš` nederīgs veids `{0}`. Paredzamais: `string`, `integer`, `DateTimeInterface` objekts.', // 'Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.'
    'invalidExpiresValue'   => 'Sīkdatņu derīguma termiņš nav derīgs.', // 'The cookie expiration time is not valid.'
    'invalidCookieName'     => 'Sīkdatņu nosaukumā `{0}` ir nederīgas rakstzīmes.', // 'The cookie name "{0}" contains invalid characters.'
    'emptyCookieName'       => 'Sīkdatnes nosaukums nevar būt tukšs.', // 'The cookie name cannot be empty.'
    'invalidSecurePrefix'   => 'Lai lietotu prefiksu `__Secure-`, jāiestata atribūts `Secure`.', // 'Using the "__Secure-" prefix requires setting the "Secure" attribute.'
    'invalidHostPrefix'     => 'Izmantojot prefiksu `__Host-`, jābūt iestatītam ar karodziņu `Secure`, tam nedrīkst būt atribūts `Domain`, un `Path` ir jābūt iestatītam kā `/`.', // 'Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".'
    'invalidSameSite'       => 'Vērtībai SameSite ir jābūt: `None`, `Lax`, `Strict` vai tukšai virknei. Norādīts: {0}', // 'The SameSite value must be None, Lax, Strict or a blank string, {0} given.'
    'invalidSameSiteNone'   => 'Lai izmantotu atribūtu `SameSite=None`, ir jāiestata `Secure` atribūts.', // 'Using the "SameSite=None" attribute requires setting the "Secure" attribute.'
    'invalidCookieInstance' => 'Paredzams, ka klases `{0}` sīkdatņu masīvs ir `{1}` gadījums, bet indeksā `{3}` ir `{2}`.', // '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.'
    'unknownCookieInstance' => 'Kolekcijā netika atrasts sīkdatņu objekts ar nosaukumu `{0}` un prefiksu `{1}`.', // 'Cookie object with name "{0}" and prefix "{1}" was not found in the collection.'
];
