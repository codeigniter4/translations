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
    'invalidExpiresTime'    => 'Tip invalid "{0}" pentru atributul "Expiră". De așteptat: șir, întreg, obiect DateTimeInterface.',
    'invalidExpiresValue'   => 'Timpul de expirare a cookie-urilor nu este validă.',
    'invalidCookieName'     => 'Numele cookie-ului "{0}" conține caractere invalide.',
    'emptyCookieName'       => 'Numele cookie-ului nu poate fi gol.',
    'invalidSecurePrefix'   => 'Utilizarea prefixului "__Secure-" necesită setarea atributului "Secure".',
    'invalidHostPrefix'     => 'Utilizarea prefixului "__Host-" trebuie setat cu indicatorul "Secure", nu trebuie să aibă un atribut "Domain", iar "Path" este setată la "/".',
    'invalidSameSite'       => 'Valoarea SameSite trebuie să fie None, Lax, Strict sau un șir gol, {0} dat.',
    'invalidSameSiteNone'   => 'Utilizarea atributului "SameSite=None" necesită setarea atributului "Secure".',
    'invalidCookieInstance' => 'Clasa "{0}" se așteptă ca matricea cookie-urilor să fie instanțe ale lui "{1}" dar a primit "{2}" la indexul {3}.',
    'unknownCookieInstance' => 'Obiectul cookie cu numele "{0}" și prefixul "{1}" nu au fost găsit în colecție.',
];
