<?php

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
    'missingCurl'     => 'CURL трябва да бъде активиран, за да използва класа CURLRequest.',
    'invalidSSLKey'   => 'Не може да се зададе SSL ключ. {0} не е валиден файл.',
    'sslCertNotFound' => 'SSL сертификатът не е намерен на: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} не е валиден тип преговори. Трябва да е едно от: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol' => 'Невалидна версия на HTTP протокола. Трябва да е едно от: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Трябва да предоставите масив от поддържани стойности за всички преговори.',

    // RedirectResponse
    'invalidRoute' => '{0} маршрут не може да бъде намерен при обратна маршрутизация.',

    // DownloadResponse
    'cannotSetBinary'        => 'Когато се задава пътят на файла, не може да се задава двоичен файл.',
    'cannotSetFilepath'      => 'Когато се задава двоичен файл, не може да се зададе файлов път: {0}',
    'notFoundDownloadSource' => 'Не е намерен основният източник за изтегляне.',
    'cannotSetCache'         => 'Не поддържа кеширане за изтегляне.',
    'cannotSetStatusCode'    => 'Не поддържа промяна на кода на състоянието за изтегляне. код: {0}, причина: {1}',

    // Response
    'missingResponseStatus' => 'В HTTP отговора липсва код на състоянието',
    'invalidStatusCode'     => '{0} не е валиден HTTP код за състояние на връщане',
    'unknownStatusCode'     => 'Неизвестен HTTP код за състояние, предоставен без съобщение: {0}',

    // URI
    'cannotParseURI'       => 'Не може да се анализира URI: {0}',
    'segmentOutOfRange'    => 'URI сегментът на заявката е извън диапазона: {0}',
    'invalidPort'          => 'Портовете трябва да са между 0 и 65535. Дадено е: {0}',
    'malformedQueryString' => 'Низовете на заявката може да не включват URI фрагменти.',

    // Page Not Found
    'pageNotFound'       => 'Страницата не е намерена',
    'emptyController'    => 'Не е посочен контролер.',
    'controllerNotFound' => 'Контролерът или неговият метод не са намерени: {0}::{1}',
    'methodNotFound'     => 'Методът на контролера не е намерен: {0}',

    // CSRF
    'disallowedAction' => 'Заявеното от вас действие не е разрешено.',

    // Uploaded file moving
    'alreadyMoved' => 'Каченият файл вече е преместен.',
    'invalidFile'  => 'Оригиналния файл не е валиден файл.',
    'moveFailed'   => 'Не може да се премести файл {0} в {1} ({2})',

    'uploadErrOk'        => 'Файлът е качен успешно.',
    'uploadErrIniSize'   => 'Файлът "%s" надвишава вашата ini директива upload_max_filesize.',
    'uploadErrFormSize'  => 'Файлът "%s" надвишава ограничението за качване, определено във вашия формуляр.',
    'uploadErrPartial'   => 'Файлът "%s" беше качен само частично.',
    'uploadErrNoFile'    => 'Няма качен файл.',
    'uploadErrCantWrite' => 'Файлът "%s" не може да бъде записан на диск.',
    'uploadErrNoTmpDir'  => 'Файлът не може да бъде качен: липсва временна директория.',
    'uploadErrExtension' => 'Качването на файл беше спряно от PHP разширение.',
    'uploadErrUnknown'   => 'Файлът "%s" не беше качен поради неизвестна грешка.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'Настройката SameSite трябва да е None, Lax, Strict или празен низ. Дадено: {0}',
];
