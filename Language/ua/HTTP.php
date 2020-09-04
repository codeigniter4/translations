<?php

/**
 * HTTP language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// CurlRequest
   'missingCurl'                => 'Для використання класу CURLRequest потрібно ввімкнути CURL.',
   'invalidSSLKey'              => 'Не вдається встановити ключ SSL. {0} не є допустимим файлом.',
   'sslCertNotFound'            => 'SSL сертифікат не знайдений в: {0}',
   'curlError'                  => '{0} : {1}',

 	// IncomingRequest
   'invalidNegotiationType'     => '{0} не є дійсним типом узгодження. Повинен бути один із: media, charset, encoding, language.',

	// Message
   'invalidHTTPProtocol'        => 'Недійсна версія протоколу HTTP. Повинен бути один із: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'Ви повинні надати масив підтримуваних значень для всіх переговорів.',

	// RedirectResponse
   'invalidRoute'               => '{0} маршрут неможливо знайти під час зворотної маршрутизації.',

	// DownloadResponse
   'cannotSetBinary'            => 'При встановленні $filepath не можна встановити $binary.',
   'cannotSetFilepath'          => 'При встановленні $binary не можна встановити $filepath: {0}',
   'notFoundDownloadSource'     => 'Не знайдено джерело завантаження тіла.',
   'cannotSetCache'             => 'Для завантаження не підтримується кешування.',
   'cannotSetStatusCode'        => 'Для завантаження не підтримується зміна коду стану. Код: {0}, причина: {1}',

	// Response
   'missingResponseStatus'      => 'У відповіді HTTP відсутній код стану.',
   'invalidStatusCode'          => '{0} не є дійсним кодом стану відповіді HTTP',
   'unknownStatusCode'          => 'Невідомий код стану HTTP надається без повідомлення: {0}',

	// URI
   'cannotParseURI'             => 'Неможливо проаналізувати URI: {0}',
   'segmentOutOfRange'          => 'Сегмент URI запиту вийшов за межі діапазону: {0}',
   'invalidPort'                => 'Порти повинні бути між ними 0 і 65535. Дано: {0}',
   'malformedQueryString'       => 'Рядки запиту можуть не містити фрагментів URI.',

	// Page Not Found
   'pageNotFound'               => 'Сторінку не знайдено.',
   'emptyController'            => 'Не вказано контролер.',
   'controllerNotFound'         => 'Контролер або його метод не знайдено: {0}::{1}',
   'methodNotFound'             => 'Метод контролера не знайдено: {0}',

	// CSRF
   'disallowedAction'           => 'Дія, яку ви запросили, заборонена.',

	// Uploaded file moving
   'alreadyMoved'               => 'Завантажений файл уже переміщено.',
   'invalidFile'                => 'Оригінальний файл не є дійсним файлом.',
   'moveFailed'                 => 'Не вдалося перемістити файл {0} до {1} ({2})',

   'uploadErrOk'                => 'Файл завантажено успішно.',
   'uploadErrIniSize'           => 'Файл "%s" перевищує ini директиву upload_max_filesize.',
   'uploadErrFormSize'          => 'Файл "%s" перевищує ліміт завантаження, визначений у вашій формі.',
   'uploadErrPartial'           => 'Файл "%s" було завантажено лише частково.',
   'uploadErrNoFile'            => 'Файл не завантажено.',
   'uploadErrCantWrite'         => 'Не вдалося записати файл "%s" на диск.',
   'uploadErrNoTmpDir'          => 'Не вдалося завантажити файл: відсутній тимчасовий каталог.',
   'uploadErrExtension'         => 'Завантаження файлу було зупинено PHP-розширенням.',
   'uploadErrUnknown'           => 'Файл "%s" не було завантажено через невідому помилку.',
];
