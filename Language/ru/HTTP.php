<?php

/**
 * HTTP language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// CurlRequest
   'missingCurl'                => 'CURL должен быть включен для использования класса CURLRequest.',
   'invalidSSLKey'              => 'Невозможно установить ключ SSL. {0} не является допустимым файлом.',
   'sslCertNotFound'            => 'Сертификат SSL не найден по адресу: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} не является допустимым типом согласования. Должно быть одним из: media, charset, encoding, language.',

	// Message
   'invalidHTTPProtocol'        => 'Неверная версия протокола HTTP. Должно быть одним из: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'Вы должны предоставить массив поддерживаемых значений для всех согласований.',

	// RedirectResponse
   'invalidRoute'               => 'Не удается найти маршрут {0, string} во время обратной маршрутизации.',

	// DownloadResponse
   'cannotSetBinary'            => 'При настройке filepath нельзя установить двоичный файл.',
   'cannotSetFilepath'          => 'При настройке двоичного файла невозможно задать путь к файлу: {0}',
   'notFoundDownloadSource'     => 'Не найдено скачивание источника тела.',
   'cannotSetCache'             => 'Не поддерживается кеширование для скачивания.',
   'cannotSetStatusCode'        => 'Не поддерживается изменение кода состояния для загрузки. код: {0}, причина: {1}',

	// Response
   'missingResponseStatus'      => 'В HTTP-ответе отсутствует код состояния',
   'invalidStatusCode'          => '{0, string} не является допустимым кодом возврата HTTP',
   'unknownStatusCode'          => 'Неизвестный код состояния HTTP предоставляется без сообщения: {0}',

	// URI
   'cannotParseURI'             => 'Невозможно проанализировать URI: {0}',
   'segmentOutOfRange'          => 'Сегмент запроса URI находится вне диапазона: {0}',
   'invalidPort'                => 'Порты должны быть между 0 и 65535. Дано: {0}',
   'malformedQueryString'       => 'Строки запроса могут не включать фрагменты URI.',

	// Page Not Found
   'pageNotFound'               => 'Страница не найдена',
   'emptyController'            => 'Контроллер не указан.',
   'controllerNotFound'         => 'Контроллер или его метод не найден: {0}::{1}',
   'methodNotFound'             => 'Метод контроллера не найден: {0}',

	// CSRF
   'disallowedAction'           => 'Запрошенное вами действие не разрешено.',

	// Uploaded file moving
   'alreadyMoved'               => 'Загруженный файл уже был перемещен.',
   'invalidFile'                => 'Исходный файл не является допустимым файлом.',
   'moveFailed'                 => 'Не удалось переместить файл {0} в {1} ({2})',

   'uploadErrOk'                => 'Файл успешно загружен.',
   'uploadErrIniSize'           => 'Файл "%s" превышает директиву upload_max_filesize ini.',
   'uploadErrFormSize'          => 'Файл "%s" указанный в вашей форме, превышает лимит загрузки.',
   'uploadErrPartial'           => 'Файл "%s" был загружен только частично.',
   'uploadErrNoFile'            => 'Файл не был загружен.',
   'uploadErrCantWrite'         => 'Файл "%s" не может быть записан на диск.',
   'uploadErrNoTmpDir'          => 'Файл не может быть загружен: отсутствует временный каталог.',
   'uploadErrExtension'         => 'Загрузка файла была остановлена расширением PHP.',
   'uploadErrUnknown'           => 'Файл "%s" не был загружен из-за неизвестной ошибки.',
];
