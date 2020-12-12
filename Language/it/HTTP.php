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
	'missingCurl'     => 'CURL deve essere abilitato per usare la classe CURLRequest.',
	'invalidSSLKey'   => 'Non si riesce ad utilizzare la chiave SSL. {0} non è un file valido.',
	'sslCertNotFound' => 'Il certificato SSL non è stato trovato in: {0}',
	'curlError'       => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType' => '{0} non è un tipo di negoziazione valido. Deve essere uno fra questi: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol' => 'Versione del Protocollo HTTP non valida. Deve essere uno di: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Devi fornire un array di valori supportati a tutte le Negoziazioni.',

	// RedirectResponse
	'invalidRoute' => '{0} non è un percorso valido.',

	// DownloadResponse
	'cannotSetBinary'        => 'Se si imposta un filepath, non è possibile impostare un valore binario.',
	'cannotSetFilepath'      => 'Se si imposta un valore binario, non è possibile impostare il filepath: {0}',
	'notFoundDownloadSource' => 'Impossibile trovare il body del responso.',
	'cannotSetCache'         => 'Il caching per il download non è supportato.',
	'cannotSetStatusCode'    => 'Impossibile impostare il cambio di codice di stato per il download. codice: {0}, motivo: {1}',

	// Response
	'missingResponseStatus' => 'Alla risposta HTTP manca un codice di stato',
	'invalidStatusCode'     => '{0} non è un valido codice di stato di ritorno da HTTP',
	'unknownStatusCode'     => 'Codice di stato HTTP sconosciuto consegnato senza messaggi: {0}',

	// URI
	'cannotParseURI'       => 'Impossibile elaborare URI: {0}',
	'segmentOutOfRange'    => 'Il richiesto segmento URI è fuori limiti: {0}',
	'invalidPort'          => 'Le porte devono essere fra 0 e 65535. Indicato: {0}',
	'malformedQueryString' => 'Le stringhe di richiesta non possono includere frammenti URI.',

	// Page Not Found
	'pageNotFound'       => 'Pagina non trovata',
	'emptyController'    => 'Nessun Controller specificato.',
	'controllerNotFound' => 'Il Controller o il suo metodo non è stato trovato: {0}::{1}',
	'methodNotFound'     => 'Il metodo del Controller non è stato trovato: {0}',

	// CSRF
	'disallowedAction' => 'L\'azione richiesta non è permessa.',

	// Uploaded file moving
	'alreadyMoved' => 'Il file uploadato è già stato spostato.',
	'invalidFile'  => 'Il file originale non è un file valido.',
	'moveFailed'   => 'Non si può spostare il file {0} verso {1} ({2})',

	'uploadErrOk'        => 'Il file è stato caricato con successo.',
	'uploadErrIniSize'   => 'La dimensione del file "%s" supera il limite impostato dalla direttiva upload_max_filesize presente nel file php.ini.',
	'uploadErrFormSize'  => 'La dimensione del file "%s" supera il limite impostato nel form.',
	'uploadErrPartial'   => 'Il file "%s" è stato caricato solo parzialmente.',
	'uploadErrNoFile'    => 'Nessun file è stato caricato.',
	'uploadErrCantWrite' => 'Impossibile scrivere il file "%s" su disco.',
	'uploadErrNoTmpDir'  => 'Impossibile caricare il file: è necessaria una directory temporanea.',
	'uploadErrExtension' => 'Il caricamento del file è stato interrotto da un\'estensione PHP.',
	'uploadErrUnknown'   => 'Non è stato possibile caricare il file "%s" a causa di un errore sconosciuto.',

	// SameSite setting
	'invalidSameSiteSetting' => 'La proprietà SameSite deve essere None, Lax, Strict, oppure una stringa vuota. Rilevata: {0}',
];
