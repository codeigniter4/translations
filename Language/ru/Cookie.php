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
    'invalidExpiresTime'    => 'Неверный тип данных "{0}" для атрибута "Expires". Ожидается: строковый тип данных (String), целочисленный (Integer), или объект интерфейса DateTimeInterface.',
    'invalidExpiresValue'   => 'Неверное время срока действия куки.',
    'invalidCookieName'     => 'Имя куки "{0}" содержит неверные символы.',
    'emptyCookieName'       => 'Имя куки не может быть пустым.',
    'invalidSecurePrefix'   => 'Префикс "__Secure-" требует атрибут "Secure".',
    'invalidHostPrefix'     => 'Префикс "__Host-" должен использоваться с флагом "Secure", без атрибута "Domain", и с установкой "Path" как "/".',
    'invalidSameSite'       => 'Значение SameSite должно быть None, Lax, Strict или пустая строка. Дано: {0}.',
    'invalidSameSiteNone'   => 'Использование атрибута "SameSite=None" требует настройку атрибута "Secure".',
    'invalidCookieInstance' => 'Класс "{0}" ожидал массив куки инстансов от "{1}", но получил "{2}" с индексом {3}.',
    'unknownCookieInstance' => 'Объект Cookie с именем "{0}" и префиксом "{1}" не был найден в коллекции.',
];
