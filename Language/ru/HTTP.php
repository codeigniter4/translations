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

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'Для использования класса CURLRequest необходимо включить CURL.',
    'invalidSSLKey'   => 'Невозможно установить SSL-ключ. "{0}" не является корректным файлом.',
    'sslCertNotFound' => 'SSL-сертификат не найден по адресу: "{0}"',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" не является допустимым типом переговоров. Допустимые значения: media, charset, encoding, language.',
    'invalidJSON'            => 'Не удалось разобрать JSON-строку. Ошибка: {0}',
    'unsupportedJSONFormat'  => 'Предоставленный формат JSON не поддерживается.',

    // Message
    'invalidHTTPProtocol' => 'Недопустимая версия HTTP-протокола: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Необходимо предоставить массив поддерживаемых значений для всех Negotiations.',

    // RedirectResponse
    'invalidRoute' => 'Маршрут для "{0}" не найден.',

    // DownloadResponse
    'cannotSetBinary'        => 'Невозможно установить бинарные данные при указании filepath.',
    'cannotSetFilepath'      => 'Невозможно установить filepath при указании бинарных данных: "{0}"',
    'notFoundDownloadSource' => 'Источник данных для загрузки не найден.',
    'cannotSetCache'         => 'Кэширование при загрузке не поддерживается.',
    'cannotSetStatusCode'    => 'Изменение кода состояния при загрузке не поддерживается. Код: {0}, причина: {1}',

    // Response
    'missingResponseStatus' => 'HTTP-ответ не содержит кода состояния',
    'invalidStatusCode'     => '{0} не является допустимым кодом HTTP-статуса',
    'unknownStatusCode'     => 'Указан неизвестный HTTP-статус без сообщения: {0}',

    // URI
    'cannotParseURI'       => 'Не удалось разобрать URI: "{0}"',
    'segmentOutOfRange'    => 'Сегмент URI вне диапазона: "{0}"',
    'invalidPort'          => 'Порты должны быть в диапазоне от 0 до 65535. Указано: {0}',
    'malformedQueryString' => 'Строки запроса не могут содержать фрагменты URI.',

    // Page Not Found
    'pageNotFound'       => 'Страница не найдена',
    'emptyController'    => 'Контроллер не указан.',
    'controllerNotFound' => 'Контроллер или его метод не найдены: {0}::{1}',
    'methodNotFound'     => 'Метод контроллера не найден: "{0}"',
    'localeNotSupported' => 'Локаль не поддерживается: {0}',

    // CSRF
    'disallowedAction' => 'Запрошенное действие не разрешено.',

    // Uploaded file moving
    'alreadyMoved' => 'Загруженный файл уже был перемещён.',
    'invalidFile'  => 'Оригинальный файл недопустим.',
    'moveFailed'   => 'Не удалось переместить файл "{0}" в "{1}". Причина: {2}',

    'uploadErrOk'        => 'Файл успешно загружен.',
    'uploadErrIniSize'   => 'Файл "%s" превышает директиву upload_max_filesize.',
    'uploadErrFormSize'  => 'Файл "%s" превышает предел загрузки, определённый в форме.',
    'uploadErrPartial'   => 'Файл "%s" был загружен только частично.',
    'uploadErrNoFile'    => 'Файл не был загружен.',
    'uploadErrCantWrite' => 'Не удалось записать файл "%s" на диск.',
    'uploadErrNoTmpDir'  => 'Не удалось загрузить файл: отсутствует временный каталог.',
    'uploadErrExtension' => 'Загрузка файла была остановлена расширением PHP.',
    'uploadErrUnknown'   => 'Файл "%s" не был загружен из-за неизвестной ошибки.',

    // SameSite setting
    'invalidSameSiteSetting' => 'Настройка SameSite должна быть None, Lax, Strict или пустой строкой. Указано: {0}',
];
