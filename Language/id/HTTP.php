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
	'missingCurl'                => 'CURL harus diaktifkan untuk menggunakan kelas CURLRequest.',
	'invalidSSLKey'              => 'Tidak dapat mengatur Kunci SSL. {0} bukan sebuah berkas yang valid.',
	'sslCertNotFound'            => 'Sertifikat SSL tidak ditemukan di: {0}',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => '{0} bukan sebuah jenis negosiasi yang valid. Harus salah satu: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol'        => 'Versi Protokol HTTP Tidak Valid. Harus salah satu: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Anda harus memberikan sebuah array dari nilai yang didukung untuk semua Negosiasi.',

	// RedirectResponse
	'invalidRoute'               => '{0, string} bukan sebuah rute yang valid.',

	// DownloadResponse
	'cannotSetBinary'            => 'When setting filepath can not set binary.',
	'cannotSetFilepath'          => 'When setting binary can not set filepath: {0}',
	'notFoundDownloadSource'     => 'Not found download body source.',
	'cannotSetCache'             => 'It does not supported caching for downloading.',
	'cannotSetStatusCode'        => 'It does not supported chnage status code for downloading. code: {0}, reason: {1}',
 
	// Response
	'missingResponseStatus'      => 'Tanggapan HTTP kehilangan sebuah kode status',
	'invalidStatusCode'          => '{0, string} bukan sebuah kode status pengembalian HTTP yang valid',
	'unknownStatusCode'          => 'Kode status HTTP tidak dikenal diberikan tanpa pesan: {0}',

	// URI
	'cannotParseURI'             => 'Tidak dapat mengurai URI: {0}',
	'segmentOutOfRange'          => 'Permintaan segmen URI berada di luar jangkauan: {0}',
	'invalidPort'                => 'Port harus antara 0 dan 65535. Diberikan: {0}',
	'malformedQueryString'       => 'String kueri tidak boleh menyertakan fragmen URI.',

	// Page Not Found
	'pageNotFound'               => 'Halaman Tidak Ditemukan',
	'emptyController'            => 'Tidak ada Kontroler yang ditentukan.',
	'controllerNotFound'         => 'Kontroler atau metodenya tidak ditemukan: {0}::{1}',
	'methodNotFound'             => 'Metode kontroller tidak ditemukan: {0}',

	// CSRF
	'disallowedAction'           => 'Tindakan yang anda minta tidak diizinkan.',
	
	// Uploaded file moving
	'alreadyMoved'				 => 'Berkas yang diunggah telah dipindahkan.',
	'invalidFile'				 => 'Berkas asli tersebut bukan berkas yang valid.',
	'moveFailed'				 => 'Tidak dapat memindahkan berkas {0} ke {1} ({2})',

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
