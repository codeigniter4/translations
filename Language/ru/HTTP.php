<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// HTTP language settings
return [
	// CurlRequest
	'missingCurl'     => 'На вашем сервере должна быть включена библиотека CURL для использования класса CURLRequest.',
	'invalidSSLKey'   => 'Не удается установить ключ SSL. {0} не является допустимым файлом.',
	'sslCertNotFound' => 'SSL-сертификат не найден в {0}',
	'curlError'       => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType' => '{0} не является допустимым типом согласования. Должен быть один из: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol' => 'Неверная версия протокола HTTP. Должно быть одно из следующих значений: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Необходимо предоставить массив поддерживаемых значений для всех переговоров.',

	// RedirectResponse
	'invalidRoute' => '{0} маршрут не может быть найден при обратной маршрутизации.',

	// DownloadResponse
	'cannotSetBinary'        => 'При установке $filepath не удается установить двоичного файл.',
	'cannotSetFilepath'      => 'При установке двоичного файла не удается установить $filepath: {0}.',
	'notFoundDownloadSource' => 'Не найден источник загрузки тела.',
	'cannotSetCache'         => 'Для загрузки кэширование не поддерживается.',
	'cannotSetStatusCode'    => 'При скачивании изменение HTTP кода не поддерживается. Код: {0}, Причина: {1}.',

	// Response
	'missingResponseStatus' => 'В ответе HTTP отсутствует код состояния.',
	'invalidStatusCode'     => '{0} не является допустимым кодом состояния.',
	'unknownStatusCode'     => 'Неизвестный HTTP код состояния, предоставленный без сообщения: {0}.',

	// URI
	'cannotParseURI'       => 'Невозможно разобрать URI: {0}',
	'segmentOutOfRange'    => 'Сегмент URI запроса имеет диапазон: {0}',
	'invalidPort'          => 'Указанный порт должен быть между 0 и 65535. Указан: {0}',
	'malformedQueryString' => 'Строки запроса могут не включать в себя фрагменты URI.',

	// Page Not Found
	'pageNotFound'       => 'Страница не найдена.',
	'emptyController'    => 'Не указан контроллер.',
	'controllerNotFound' => 'Контроллер или его метод не найден: {0}::{1}',
	'methodNotFound'     => 'Метод контроллера не найден: {0}',

	// CSRF
	'disallowedAction' => 'Действие, которое вы запросили, не разрешено.',

	// Uploaded file moving
	'alreadyMoved' => 'Загруженный файл уже перемещен.',
	'invalidFile'  => 'Исходный файл не является допустимым файлом.',
	'moveFailed'   => 'Не удалось переместить файл из {0} в {1}. ({2})',

	'uploadErrOk'        => 'Файл успешно загружен !',
	'uploadErrIniSize'   => 'Ваш файл "%s" превышает дерективу upload_max_filesize.',
	'uploadErrFormSize'  => 'Файл "%s" превышает лимит загрузки, установленную в форме.',
	'uploadErrPartial'   => 'Файл "%s" был загружен только частично.',
	'uploadErrNoFile'    => 'Файл не был загружен.',
	'uploadErrCantWrite' => 'Не удалось записать на диск файл "%s".',
	'uploadErrNoTmpDir'  => 'Не удалось загрузить файл: Отсутствует временный каталог.',
	'uploadErrExtension' => 'Загрузка файла была остановлена расширением PHP.',
	'uploadErrUnknown'   => 'Файл "%s" не был загружен из-за неизвестной ошыибки.',
];
