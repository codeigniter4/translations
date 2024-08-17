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
    'invalidExpiresTime'    => 'Onjuist "{0}" type voor het attribuut "Expires". Verwacht: string, integer, DateTimeInterface object.',
    'invalidExpiresValue'   => 'De cookie-vervaldatum is onjuist.',
    'invalidCookieName'     => 'De cookie-naam "{0}" bevat tekens die niet zijn toegestaan.',
    'emptyCookieName'       => 'De cookie-naam mag niet leeg zijn.',
    'invalidSecurePrefix'   => 'Om de prefix "__Secure-" te gebruiken moet het "Secure" attribuut ingesteld zijn.',
    'invalidHostPrefix'     => 'De "__Host-" prefix gebruikt worden met de "Secure" optie, mag geen "Domain" optie hebben, en "Path" moet "/" zijn.',
    'invalidSameSite'       => 'De waarde van SameSite moet zijn: None, Lax, Strict of een lege string, {0} gegeven.',
    'invalidSameSiteNone'   => 'Om "SameSite=None" te gebruiken moet het "Secure" attribuut ingesteld zijn.',
    'invalidCookieInstance' => '"{0}" class verwacht dat de cookie-array in instance is van "{1}" maar vond "{2}" voor index {3}.',
    'unknownCookieInstance' => 'Cookie-object met de naam "{0}" en prefix "{1}" kon niet gevonden worden in de collectie.',
];
