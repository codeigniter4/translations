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
    'invalidExpiresTime'    => 'Neplatný typ "{0}" pre atribút "Expires". Očakávané: string, integer, objekt DateTimeInterface.',
    'invalidExpiresValue'   => 'Čas expirácie cookie nie je platný.',
    'invalidCookieName'     => 'Názov cookie "{0}" obsahuje neplatné znaky.',
    'invalidCookieValue'    => 'Hodnota cookie obsahuje neplatné znaky.',
    'invalidCookiePath'     => 'Cesta cookie obsahuje neplatné znaky.',
    'invalidCookieDomain'   => 'Doména cookie obsahuje neplatné znaky.',
    'emptyCookieName'       => 'Názov cookie nemôže byť prázdny.',
    'invalidSecurePrefix'   => 'Použitie prefixu "__Secure-" vyžaduje nastavenie atribútu "Secure".',
    'invalidHostPrefix'     => 'Použitie prefixu "__Host-" vyžaduje nastavený príznak "Secure", nesmie mať atribút "Domain" a "Path" musí byť nastavený na "/".',
    'invalidSameSite'       => 'Hodnota SameSite musí byť None, Lax, Strict alebo prázdny reťazec, zadané: {0}.',
    'invalidSameSiteNone'   => 'Použitie atribútu "SameSite=None" vyžaduje nastavenie atribútu "Secure".',
    'invalidCookieInstance' => 'Trieda "{0}" očakávala pole cookies s inštanciami "{1}", ale na indexe {3} dostala "{2}".',
    'unknownCookieInstance' => 'Objekt cookie s názvom "{0}" a prefixom "{1}" sa v kolekcii nenašiel.',
];
