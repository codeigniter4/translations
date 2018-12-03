<?php

/**
 * HTTP language strings.
 *
 * @package      CodeIgniter
 * @author       Luca Marco Rasia
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 4.0.0
 *
 * @filesource
 * 
 * @codeCoverageIgnore
 */
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
	'invalidRoute'               => '{0, string} non è un percorso valido.',

	// Response
	'missingResponseStatus'      => 'Alla risposta HTTP manca un codice di stato',
	'invalidStatusCode'          => '{0, string} non è un valido codice di stato di ritorno da HTTP',
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
];
