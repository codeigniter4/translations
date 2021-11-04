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
    'invalidExpiresTime'    => 'Typ "{0}" jest nieprawidłowy dla atrybutu "Expires". Akceptowalne: string, integer, objekt implementujący DateTimeInterface.',
    'invalidExpiresValue'   => 'Wartość wygaśnięcia pliku cookie jest nieprawidłowa.',
    'invalidCookieName'     => 'Nazwa ciasteczka "{0}" jest nieprawidłowa.',
    'emptyCookieName'       => 'Nazwa ciasteczka nie może być pusta.',
    'invalidSecurePrefix'   => 'Użycie prefiksu "__Secure-" wymaga ustawienia atrybutu "Secure".',
    'invalidHostPrefix'     => 'Użycie prefiksu "__Host-" wymaga ustawienia flagi "Secure", musi nie posiadać atrybutu "Domain" oraz atrybut "Path" musi być ustawiony jako "/".',
    'invalidSameSite'       => 'Wartość SameSite może przyjąć wartości "None", "Lax", "Strict" lub pusty ciąg znaków; podano "{0}".',
    'invalidSameSiteNone'   => 'Użycie atrybutu "SameSite=None" wymaga ustawienia atrybutu "Secure".',
    'invalidCookieInstance' => 'Klasa "{0}" oczekuje, że elementy tablicy ciasteczek będą instancjami "{1}", ale przekazano "{2}" na pozycji {3}.',
    'unknownCookieInstance' => 'Nie znaleziono objektu ciasteczka "{0}" z prefiksem "{1}".',
];
