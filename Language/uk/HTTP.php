<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
	// CurlRequest
	'missingCurl'     => 'Маєте включити бібліотеку CURL для використання класу CURLRequest.',
	'invalidSSLKey'   => 'Не вдається встановити ключ SSL. {0} не є дійсним файлом.',
	'sslCertNotFound' => 'SSL-сертифікат не знайдено в {0}',
	'curlError'       => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType' => '{0} не є дійсним типом погодження. Має бути один із: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol' => 'Некорректна версія протоколу HTTP. Має бути одне з: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Слід надати масив підтримуваних значень для всіх перемовин.',

	// RedirectResponse
	'invalidRoute' => '{0} маршрут не буде знайдено при зворотній маршрутизації.',

	// DownloadResponse
	'cannotSetBinary'        => 'Двійковий файл не може бути шляхом до файлу.',
	'cannotSetFilepath'      => 'При встановленні двійкового файлу не не вдається встановити шлях: {0}.',
	'notFoundDownloadSource' => 'Не знайдено основне джерело завантаження.',
	'cannotSetCache'         => 'При завантаженні кешування не підтримується.',
	'cannotSetStatusCode'    => 'Не можливо змінити код стану завантаження. Код: {0}, Причина: {1}.',

	// Response
	'missingResponseStatus' => 'У відповіді HTTP відсутній код стану.',
	'invalidStatusCode'     => '{0} не є допустимим кодом стану.',
	'unknownStatusCode'     => 'Невідомий HTTP код стану, наданий без повідомлення: {0}.',

	// URI
	'cannotParseURI'       => 'Неможливо розібрати URI: {0}',
	'segmentOutOfRange'    => 'Сегмент URI запиту поза діапазоном: {0}',
	'invalidPort'          => 'Вказаний порт мусить бути між 0 та 65535. Вказано: {0}',
	'malformedQueryString' => 'Рядки запиту можуть бути без фрагментів URI.',

	// Page Not Found
	'pageNotFound'       => 'Сторінку не знайдено.',
	'emptyController'    => 'Не вказано контролер.',
	'controllerNotFound' => 'Контролер чи його метод не знайдено: {0}::{1}',
	'methodNotFound'     => 'Метод контролеру не знайдено: {0}',

	// CSRF
	'disallowedAction' => 'Дія, яку ви вимагали, заборонена.',

	// Uploaded file moving
	'alreadyMoved' => 'Завантажений файл вже перенесено.',
	'invalidFile'  => 'Початковий файл не є допустимим файлом.',
	'moveFailed'   => 'Не вдалось переместити файл з {0} в {1}. ({2})',

	'uploadErrOk'        => 'Файл успішно завантажено!',
	'uploadErrIniSize'   => 'Ваш файл "%s" перевищує розмір, вказаний в директиві upload_max_filesize.',
	'uploadErrFormSize'  => 'Файл "%s" перевищує ліміт завантаження, встановлений у Вашій формі.',
	'uploadErrPartial'   => 'Файл "%s" було завантажено частково.',
	'uploadErrNoFile'    => 'Файл не завантажився.',
	'uploadErrCantWrite' => 'Не вдалося записати на диск файл "%s".',
	'uploadErrNoTmpDir'  => 'Не вдалося завантажити файл: Відсутній тимчасовий каталог.',
	'uploadErrExtension' => 'Завантаження файлу було зупинено розширенням PHP.',
	'uploadErrUnknown'   => 'Файл "%s" не завантажився через невідому помилку.',
];
