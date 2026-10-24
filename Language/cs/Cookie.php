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
    'invalidExpiresTime'    => 'Neplatný typ "{0}" pro atribut "Expires". Očekáváno: string, integer, objekt DateTimeInterface.',
    'invalidExpiresValue'   => 'Čas expirace cookie není platný.',
    'invalidCookieName'     => 'Název cookie "{0}" obsahuje neplatné znaky.',
    'invalidCookieValue'    => 'Hodnota cookie obsahuje neplatné znaky.',
    'invalidCookiePath'     => 'Cesta cookie obsahuje neplatné znaky.',
    'invalidCookieDomain'   => 'Doména cookie obsahuje neplatné znaky.',
    'emptyCookieName'       => 'Název cookie nesmí být prázdný.',
    'invalidSecurePrefix'   => 'Použití prefixu "__Secure-" vyžaduje nastavení atributu "Secure".',
    'invalidHostPrefix'     => 'Použití prefixu "__Host-" vyžaduje nastavený příznak "Secure", nesmí mít atribut "Domain" a "Path" musí být nastaven na "/".',
    'invalidSameSite'       => 'Hodnota SameSite musí být None, Lax, Strict nebo prázdný řetězec, zadáno: {0}.',
    'invalidSameSiteNone'   => 'Použití atributu "SameSite=None" vyžaduje nastavení atributu "Secure".',
    'invalidCookieInstance' => 'Třída "{0}" očekávala pole cookies s instancemi "{1}", ale na indexu {3} dostala "{2}".',
    'unknownCookieInstance' => 'Objekt cookie s názvem "{0}" a prefixem "{1}" nebyl v kolekci nalezen.',
];
