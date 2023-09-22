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
    'invalidExpiresTime'    => 'Atribūtam `Derīguma termiņš` nederīgs veids `{0}`. Paredzamais: `string`, `integer`, `DateTimeInterface` objekts.',
    'invalidExpiresValue'   => 'Sīkdatņu derīguma termiņš nav derīgs.',
    'invalidCookieName'     => 'Sīkdatņu nosaukumā `{0}` ir nederīgas rakstzīmes.',
    'emptyCookieName'       => 'Sīkdatnes nosaukums nevar būt tukšs.',
    'invalidSecurePrefix'   => 'Lai lietotu prefiksu `__Secure-`, jāiestata atribūts `Secure`.',
    'invalidHostPrefix'     => 'Izmantojot prefiksu `__Host-`, jābūt iestatītam ar karodziņu `Secure`, tam nedrīkst būt atribūts `Domain`, un `Path` ir jābūt iestatītam kā `/`.',
    'invalidSameSite'       => 'Vērtībai SameSite ir jābūt: `None`, `Lax`, `Strict` vai tukšai virknei. Norādīts: {0}',
    'invalidCookieInstance' => 'Paredzams, ka klases `{0}` sīkdatņu masīvs ir `{1}` gadījums, bet indeksā `{3}` ir `{2}`.',
    'unknownCookieInstance' => 'Kolekcijā netika atrasts sīkdatņu objekts ar nosaukumu `{0}` un prefiksu `{1}`.',
];
