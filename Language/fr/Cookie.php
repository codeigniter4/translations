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
    'invalidExpiresTime'    => 'Le type "{0}" n\'est pas valide pour l\'attribut "Expires". Attendu : chaîne de caractères (string), nombre entier (integer), objet DateTimeInterface.',
    'invalidExpiresValue'   => 'Le délai d\'expiration du cookie n\'est pas valide.',
    'invalidCookieName'     => 'Le nom du cookie "{0}" contient des caractères non valides.',
    'emptyCookieName'       => 'Le nom du cookie ne peut pas être vide.',
    'invalidSecurePrefix'   => 'L\'utilisation du préfixe "__Secure-" nécessite de définir l\'attribut "Secure".',
    'invalidHostPrefix'     => 'L\'utilisation du préfixe "__Host-" doit être définie avec l\'indicateur "Secure", ne doit pas avoir d\'attribut "Domain", et le "Path" est défini sur "/".',
    'invalidSameSite'       => 'La valeur SameSite doit être None, Lax, Strict ou une chaîne vide, {0} donnée.',
    'invalidSameSiteNone'   => 'L\'utilisation de l\'attribut "SameSite=None" nécessite de définir l\'attribut "Secure".',
    'invalidCookieInstance' => 'La classe "{0}" s\'attendait à ce que le tableau de cookies soit constitué d\'instances de "{1}", mais elle a obtenu "{2}" à l\'index {3}.',
    'unknownCookieInstance' => 'L\'objet Cookie avec le nom "{0}" et le préfixe "{1}" n\'a pas été trouvé dans la collection.',
];
