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
	'missingCurl'                => 'CURL deve essere abilitato per usare la classe CURLRequest.',
	'invalidSSLKey'              => 'Non si riesce ad utilizzare la chiave SSL. {0} non è un file valido.',
	'sslCertNotFound'            => 'Il certificato SSL non è stato trovato in: {0}',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => '{0} non è un tipo di negoziazione valido. Deve essere uno fra questi: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol'        => 'Versione del Protocollo HTTP non valida. Deve essere uno di: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Devi fornire un array di valori supportati a tutte le Negoziazioni.',

	// RedirectResponse
	'invalidRoute'               => '{0} non è un percorso valido.',

	// DownloadResponse
	'cannotSetBinary'            => 'When setting filepath can not set binary.',
	'cannotSetFilepath'          => 'When setting binary can not set filepath: {0}',
	'notFoundDownloadSource'     => 'Not found download body source.',
	'cannotSetCache'             => 'It does not supported caching for downloading.',
	'cannotSetStatusCode'        => 'It does not supported chnage status code for downloading. code: {0}, reason: {1}',

	// Response
	'missingResponseStatus'      => 'Alla risposta HTTP manca un codice di stato',
	'invalidStatusCode'          => '{0} non è un valido codice di stato di ritorno da HTTP',
	'unknownStatusCode'          => 'Codice di stato HTTP sconosciuto consegnato senza messaggi: {0}',

	// URI
	'cannotParseURI'             => 'Impossibile elaborare URI: {0}',
	'segmentOutOfRange'          => 'Il richiesto segmento URI è fuori limiti: {0}',
	'invalidPort'                => 'Le porte devono essere fra 0 e 65535. Indicato: {0}',
	'malformedQueryString'       => 'Le stringhe di richiesta non possono includere frammenti URI.',

	// Page Not Found
	'pageNotFound'               => 'Pagina non trovata',
	'emptyController'            => 'Nessun Controller specificato.',
	'controllerNotFound'         => 'Il Controller o il suo metodo non è stato trovato: {0}::{1}',
	'methodNotFound'             => 'Il metodo del Controller non è stato trovato: {0}',

	// CSRF
	'disallowedAction'           => 'L\'azione richiesta non è permessa.',

	// Uploaded file moving
	'alreadyMoved'				 => 'Il file uploadato è già stato spostato.',
	'invalidFile'				 => 'Il file originale non è un file valido.',
	'moveFailed'				 => 'Non si può spostare il file {0} verso {1} ({2})',

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
