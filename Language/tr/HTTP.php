<?php

/**
 * HTTP language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */
return [
	// CurlRequest
	'missingCurl'                => 'CURLRequest sınıfını kullanabilmek için CURL etkinleştirilmeli.',
	'invalidSSLKey'              => 'SSL anahtarı belirlenemiyor. {0} geçersiz bir dosya.',
	'sslCertNotFound'            => 'SSL sertifikası {0} \'da bulunamadı.',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => '{0} geçersiz bir pazarlık türü. Şunlardan biri olmalı: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol'        => 'Geçersiz HTTP protokol sürümü. Şunlardan biri olmalı: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Tüm pazarlıklara (Negotiations) bir desteklenen değerler dizisi belirtmelisiniz.',

	// RedirectResponse
	'invalidRoute'               => '{0, string} geçersiz rota.',

	// DownloadResponse
	'cannotSetBinary'            => 'When setting filepath can not set binary.',
	'cannotSetFilepath'          => 'When setting binary can not set filepath: {0}',
	'notFoundDownloadSource'     => 'Not found download body source.',
	'cannotSetCache'             => 'It does not supported caching for downloading.',
	'cannotSetStatusCode'        => 'It does not supported chnage status code for downloading. code: {0}, reason: {1}',
 
	// Response
	'missingResponseStatus'      => 'HTTP Response durum kodu eksik.',
	'invalidStatusCode'          => '{0, string} geçersiz HTTP cevap durum kodu',
	'unknownStatusCode'          => 'Bilinmeyen HTTP durum kodu: {0}',

	// URI
	'cannotParseURI'             => 'URI çözümlenemedi: {0}',
	'segmentOutOfRange'          => 'İstenen URI bölümü aralık dışında: {0}',
	'invalidPort'                => 'Portlar 0 ve 65535 arasında olmalı. Verilen: {0}',
	'malformedQueryString'       => 'Sorgu karakter dizileri URI bölümleri içermemeli.',

	// Page Not Found
	'pageNotFound'               => 'Sayfa bulunamadı.',
	'emptyController'            => 'Controller belirtilmemiş.',
	'controllerNotFound'         => 'Controller veya metod bulunamadı: {0}::{1}',
	'methodNotFound'             => 'Controller metodu bulunamadı: {0}',

	// CSRF
	'disallowedAction'           => 'İstenen eyleme izin verilmiyor.',
	
	// Uploaded file moving
	'alreadyMoved'				 => 'Yüklenen dosya zaten taşınmış.',
	'invalidFile'				 => 'Orijinal dosya geçersiz bir dosya.',
	'moveFailed'				 => '{0} dosyası {1} ({2}) ye taşınamıyor.',

	'uploadErrOk'                => 'The file uploaded with success.',
	'uploadErrIniSize'           => 'The file "%s" exceeds your upload_max_filesize ini directive.',
	'uploadErrFormSize'          => 'The file "%s" exceeds the upload limit defined in your form.',
	'uploadErrPartial'           => 'The file "%s" was only partially uploaded.',
	'uploadErrNoFile'            => 'No file was uploaded.',
	'uploadErrCantWrite'         => 'The file "%s" could not be written on disk.',
	'uploadErrNoTmpDir'          => 'File could not be uploaded: missing temporary directory.',
	'uploadErrExtension'         => 'File upload was stopped by a PHP extension.',
	'uploadErrUnknown'           => 'The file "%s" was not uploaded due to an unknown error.', 
];
