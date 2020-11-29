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
	'missingCurl'     => 'Lai izmantotu CURLRequest klasi, jābūt iespējotam CURL.',
	'invalidSSLKey'   => 'Nevar iestatīt SSL atslēgu. {0} nav derīgs fails.',
	'sslCertNotFound' => 'SSL sertifikāts nav atrasts: {0}',
	'curlError'       => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType' => '{0} nav derīgs sarunu veids. Jābūt vienam no: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol' => 'Nederīga HTTP protokola versija. Jābūt vienai no: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Visām sarunām ir jānorāda atbalstīto vērtību masīvs.',

	// RedirectResponse
	'invalidRoute' => 'Reversās maršrutēšanas izpildes laikā, maršruts `{0}` netika atrasts.',

	// DownloadResponse
	'cannotSetBinary'        => 'Iestatot $filepath nevar iestatīt bināro failu.',
	'cannotSetFilepath'      => 'Iestatot bināro failu nevar iestatīt $filepath: {0}',
	'notFoundDownloadSource' => 'Lejupielādes avots nav atrasts.',
	'cannotSetCache'         => 'Tas neatbalsta kešatmiņu lejupielādei.',
	'cannotSetStatusCode'    => 'Tas neatbalsta statusa koda maiņu lejupielādei. Kods: {0}, iemesls: {1}',

	// Response
	'missingResponseStatus' => 'HTTP atbildē neeksistē statusa kods',
	'invalidStatusCode'     => '{0} nav derīgs HTTP atbildes statusa kods',
	'unknownStatusCode'     => 'Nezināms HTTP statusa kods, kas norādīts bez paziņojuma: {0}',

	// URI
	'cannotParseURI'       => 'Nevar pārsēt URI: {0}',
	'segmentOutOfRange'    => 'Pieprasījuma URI segments ir ārpus diapazona: {0}',
	'invalidPort'          => 'Portam ir jābūt starp 0 un 65535. Norādīts: {0}',
	'malformedQueryString' => 'Vaicājumu virknēs iespējams nav iekļauti URI fragmenti.',

	// Page Not Found
	'pageNotFound'       => 'Lapa nav atrasta',
	'emptyController'    => 'Kontrolieris nav norādīts.',
	'controllerNotFound' => 'Kontrolieris vai tā metode nav atrasta: {0}::{1}',
	'methodNotFound'     => 'Kontroliera metode `{0}` nav atrasta.',

	// CSRF
	'disallowedAction' => 'Jūsu pieprasītā darbība nav atļauta.',

	// Uploaded file moving
	'alreadyMoved' => 'Augšupielādētais fails jau ir pārvietots.',
	'invalidFile'  => 'Sākotnējais fails nav derīgs fails.',
	'moveFailed'   => 'Nevarēja pārvietot failu {0} uz {1} ({2})',

	'uploadErrOk'        => 'Fails tika veiksmīgi augšupielādēts.',
	'uploadErrIniSize'   => 'Fails "%s" pārsniedz jūsu `upload_max_filesize` ini direktīvu.',
	'uploadErrFormSize'  => 'Fails "%s" pārsniedz jūsu formā noteikto augšupielādes limita ierobežojumu.',
	'uploadErrPartial'   => 'Fails "%s" tika augšupielādēts tikai daļēji.',
	'uploadErrNoFile'    => 'Netika augšupielādēts neviens fails.',
	'uploadErrCantWrite' => 'Failu "%s" nevarēja ierakstīt diskā.',
	'uploadErrNoTmpDir'  => 'Nevarēja augšupielādēt failu: trūkst pagaidu direktorija.',
	'uploadErrExtension' => 'PHP paplašinājums apturēja faila augšupielādi.',
	'uploadErrUnknown'   => 'Nezināmas kļūdas dēļ, fails "%s" netika augšupielādēts.',

	// SameSite setting
	'invalidSameSiteSetting' => 'Iestatījumam SameSite jābūt: None, Lax, Strict vai tukšai virknei. Norādīts: {0}',
];
