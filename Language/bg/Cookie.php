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
    'invalidExpiresTime'    => 'Невалиден тип „{0}“ за атрибут Expires. Очаква се: низ, цяло число или обект от тип DateTimeInterface.',
    'invalidExpiresValue'   => 'Времето на изтичане на бисквитката не е валидно.',
    'invalidCookieName'     => 'Името на бисквитката „{0}“ съдържа невалидни знаци.',
    'emptyCookieName'       => 'Името на бисквитката не може да бъде празно.',
    'invalidSecurePrefix'   => 'Използването на префикса "__Secure-" изисква настройка на атрибута "Secure".',
    'invalidHostPrefix'     => 'Използването на префикса "__Host-" трябва да бъде зададено с флага "Secure", не трябва да има атрибут "Domain", а "Path" е зададен на "/".',
    'invalidSameSite'       => 'Стойността на SameSite трябва да бъде None, Lax, Strict или празен низ, даден {0}.',
    'invalidSameSiteNone'   => 'Използването на атрибута "SameSite=None" изисква настройка на атрибута "Secure".',
    'invalidCookieInstance' => '"{0}" класът очаква масивът от бисквитки да бъде инстанция на "{1}", но получи "{2}" при индекс {3}.',
    'unknownCookieInstance' => 'Cookie обекта с име "{0}" и префикс "{1}" не беше намерен в колекцията.',
];
