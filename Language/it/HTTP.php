<?php

/**
 * HTTP language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// CurlRequest
   'missingCurl'                => 'CURL deve essere abilitato per usare la classe CURLRequest.',
   'invalidSSLKey'              => 'Non è possibile imostare la chiave SSL. {0} non è un file valido.',
   'sslCertNotFound'            => 'Certificato SSL non trovato in: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} non è una tipologia di negoziazione valida. Deve essere una di queste: media, charset, encoding, language.',

	// Message
   'invalidHTTPProtocol'        => 'Versione protocollo HTTP non valida. Deve essere una di queste: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'Devi fornire un array di valori supportati a tutte le negoziazioni.',

	// RedirectResponse
   'invalidRoute'               => '{0, string} route non puà essere trovata durante il reverse-routing.',

	// DownloadResponse
   'cannotSetBinary'            => 'Quando si imposta il percorso del file non è possibile impostare il binario.',
   'cannotSetFilepath'          => 'Quando si imposta il binario non è possibile impostare il percorso del file: {0}',
   'notFoundDownloadSource'     => 'Sorgente del download non trovata.',
   'cannotSetCache'             => 'Non supporta la memorizzazione nella cache per il download.',
   'cannotSetStatusCode'        => 'Non supporta il cambiamento del codice di stato per il download. Codice: {0}, motivo: {1}',

	// Response
   'missingResponseStatus'      => 'Codice di stato mancante per l\'HTTP Response',
   'invalidStatusCode'          => '{0, string} non è un codice di stato di ritorno HTTP valido',
   'unknownStatusCode'          => 'Codice di stato HTTP sconosciuto fornito senza messaggio: {0}',

	// URI
   'cannotParseURI'             => 'Impossibile dare il parse dell\'URI: {0}',
   'segmentOutOfRange'          => 'Il segmento URI della richiesta è fuori dal range: {0}',
   'invalidPort'                => 'Le porte devono essere tra 0 e 65535. Indicato: {0}',
   'malformedQueryString'       => 'Le stringhe della query potrebbero non includere frammenti URI.',

	// Page Not Found
   'pageNotFound'               => 'Pagina non trovata',
   'emptyController'            => 'Nessun controller specificato.',
   'controllerNotFound'         => 'Il controller o il suo method non è stato trovato: {0}::{1}',
   'methodNotFound'             => 'Il method del controller non è stato trovato: {0}',

	// CSRF
   'disallowedAction'           => 'L\'azione richiesta non è consentita.',

	// Uploaded file moving
   'alreadyMoved'               => 'Il file caricato è già stato spostato.',
   'invalidFile'                => 'Il file originale non è un file valido.',
   'moveFailed'                 => 'Non si può spostare il file {0} verso {1} ({2})',

   'uploadErrOk'                => 'Il file è stato caricato con successo.',
   'uploadErrIniSize'           => 'Il file "%s" eccede le direttive upload_max_filesize del file ini.',
   'uploadErrFormSize'          => 'Il file "%s" eccede i limiti di caricamento definiti nel form.',
   'uploadErrPartial'           => 'Il file "%s" è stato caricato solo parzialmente.',
   'uploadErrNoFile'            => 'Nessun file è stato caricato.',
   'uploadErrCantWrite'         => 'Il file "%s" non può essere scritto sul disco.',
   'uploadErrNoTmpDir'          => 'Il file non può essere caricato: directory temporanea mancante.',
   'uploadErrExtension'         => 'Il caricamento del file è stato bloccato da un\'estensione PHP.',
   'uploadErrUnknown'           => 'Il file "%s" non è stato caricato a causa di un errore sconosciuto.',
];
