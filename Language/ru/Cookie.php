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
    'invalidExpiresTime'    => 'Недопустимый тип "{0}" для атрибута "Expires". Ожидается: string, integer или объект DateTimeInterface.',
    'invalidExpiresValue'   => 'Время истечения срока действия cookie недействительно.',
    'invalidCookieName'     => 'Имя cookie "{0}" содержит недопустимые символы.',
    'emptyCookieName'       => 'Имя cookie не может быть пустым.',
    'invalidSecurePrefix'   => 'Использование префикса "__Secure-" требует установки атрибута "Secure".',
    'invalidHostPrefix'     => 'Использование префикса "__Host-" требует установки флага "Secure", отсутствия атрибута "Domain" и установки "Path" на "/".',
    'invalidSameSite'       => 'Значение SameSite должно быть None, Lax, Strict или пустой строкой, указано: {0}.',
    'invalidSameSiteNone'   => 'Использование атрибута "SameSite=None" требует установки атрибута "Secure".',
    'invalidCookieInstance' => 'Класс "{0}" ожидал, что массив cookies будет содержать экземпляры "{1}", но получил "{2}" на индексе {3}.',
    'unknownCookieInstance' => 'Объект cookie с именем "{0}" и префиксом "{1}" не найден в коллекции.',
];
