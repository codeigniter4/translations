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
	'missingCurl'     => 'Lai izmantotu CURLRequest klasi, jābūt iespējotam CURL.', // 'CURL must be enabled to use the CURLRequest class.'
	'invalidSSLKey'   => 'Nevar iestatīt SSL atslēgu. {0} nav derīgs fails.', // 'Cannot set SSL Key. {0} is not a valid file.'
	'sslCertNotFound' => 'SSL sertifikāts nav atrasts: {0}', // 'SSL certificate not found at: {0}'
	'curlError'       => '{0} : {1}', // '{0} : {1}'

	// IncomingRequest
	'invalidNegotiationType' => '{0} nav derīgs sarunu veids. Jābūt vienam no: `media`, `charset`, `encoding`, `language`.', // '{0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.'

	// Message
	'invalidHTTPProtocol' => 'Nederīga HTTP protokola versija. Jābūt vienai no: {0}', // 'Invalid HTTP Protocol Version. Must be one of: {0}'

	// Negotiate
	'emptySupportedNegotiations' => 'Visām sarunām ir jānorāda atbalstīto vērtību masīvs.', // 'You must provide an array of supported values to all Negotiations.'

	// RedirectResponse
	'invalidRoute' => 'Reversās maršrutēšanas izpildes laikā, maršruts `{0}` netika atrasts.', // '{0} route cannot be found while reverse-routing.'

	// DownloadResponse
	'cannotSetBinary'        => 'Iestatot $filepath nevar iestatīt bināro failu.', // 'When setting filepath cannot set binary.'
	'cannotSetFilepath'      => 'Iestatot bināro failu nevar iestatīt faila ceļu: {0}', // 'When setting binary cannot set filepath: {0}'
	'notFoundDownloadSource' => 'Lejupielādes avots nav atrasts.', // 'Not found download body source.'
	'cannotSetCache'         => 'Tas neatbalsta kešatmiņu lejupielādei.', // 'It does not support caching for downloading.'
	'cannotSetStatusCode'    => 'Tas neatbalsta statusa koda maiņu lejupielādei. Kods: {0}, iemesls: {1}', // 'It does not support change status code for downloading. code: {0}, reason: {1}'

	// Response
	'missingResponseStatus' => 'HTTP atbildē neeksistē statusa kods', // 'HTTP Response is missing a status code'
	'invalidStatusCode'     => '{0} nav derīgs HTTP atbildes statusa kods', // '{0} is not a valid HTTP return status code'
	'unknownStatusCode'     => 'Nezināms HTTP statusa kods, kas norādīts bez paziņojuma: {0}', // 'Unknown HTTP status code provided with no message: {0}'

	// URI
	'cannotParseURI'       => 'Nevar pārsēt URI: {0}', // 'Unable to parse URI: {0}'
	'segmentOutOfRange'    => 'Pieprasījuma URI segments ir ārpus diapazona: {0}', // 'Request URI segment is out of range: {0}'
	'invalidPort'          => 'Portam ir jābūt starp 0 un 65535. Norādīts: {0}', // 'Ports must be between 0 and 65535. Given: {0}'
	'malformedQueryString' => 'Vaicājumu virknēs iespējams nav iekļauti URI fragmenti.', // 'Query strings may not include URI fragments.'

	// Page Not Found
	'pageNotFound'       => 'Lapa nav atrasta', // 'Page Not Found'
	'emptyController'    => 'Kontrolieris nav norādīts.', // 'No Controller specified.'
	'controllerNotFound' => 'Kontrolieris vai tā metode nav atrasta: {0}::{1}', // 'Controller or its method is not found: {0}::{1}'
	'methodNotFound'     => 'Kontroliera metode `{0}` nav atrasta.', // 'Controller method is not found: {0}'

	// CSRF
	// @deprecated use `Security.disallowedAction`
	'disallowedAction' => 'Jūsu pieprasītā darbība nav atļauta.', // 'The action you requested is not allowed.'

	// Uploaded file moving
	'alreadyMoved' => 'Augšupielādētais fails jau ir pārvietots.', // 'The uploaded file has already been moved.'
	'invalidFile'  => 'Sākotnējais fails nav derīgs fails.', // 'The original file is not a valid file.'
	'moveFailed'   => 'Nevarēja pārvietot failu {0} uz {1} ({2})', // 'Could not move file {0} to {1} ({2})'

	'uploadErrOk'        => 'Fails tika veiksmīgi augšupielādēts.', // 'The file uploaded with success.'
	'uploadErrIniSize'   => 'Fails "%s" pārsniedz jūsu `upload_max_filesize` ini direktīvu.', // 'The file "%s" exceeds your upload_max_filesize ini directive.'
	'uploadErrFormSize'  => 'Fails "%s" pārsniedz jūsu formā noteikto augšupielādes limita ierobežojumu.', // 'The file "%s" exceeds the upload limit defined in your form.'
	'uploadErrPartial'   => 'Fails "%s" tika augšupielādēts tikai daļēji.', // 'The file "%s" was only partially uploaded.'
	'uploadErrNoFile'    => 'Netika augšupielādēts neviens fails.', // 'No file was uploaded.'
	'uploadErrCantWrite' => 'Failu "%s" nevarēja ierakstīt diskā.', // 'The file "%s" could not be written on disk.'
	'uploadErrNoTmpDir'  => 'Nevarēja augšupielādēt failu: trūkst pagaidu direktorija.', // 'File could not be uploaded: missing temporary directory.'
	'uploadErrExtension' => 'PHP paplašinājums apturēja faila augšupielādi.', // 'File upload was stopped by a PHP extension.'
	'uploadErrUnknown'   => 'Nezināmas kļūdas dēļ, fails "%s" netika augšupielādēts.', // 'The file "%s" was not uploaded due to an unknown error.'

	// SameSite setting
	// @deprecated
	'invalidSameSiteSetting' => 'Iestatījumam SameSite jābūt: `None`, `Lax`, `Strict` vai tukšai virknei. Norādīts: {0}', // 'The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}'
];
