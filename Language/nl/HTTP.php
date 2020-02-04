<?php

/**
 * HTTP language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// CurlRequest
   'missingCurl'                => 'CURL moet ingeschakeld zijn om de CURLRequest class te gebruiken.',
   'invalidSSLKey'              => 'Kan SSL Key niet instellen. {0} is geen geldig bestand.',
   'sslCertNotFound'            => 'SSL certificaat niet gevonden op: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} is geen geldige negotiation type. Moet een van media, charset, encoding of language zijn.',

	// Message
   'invalidHTTPProtocol'        => 'Ongeldige HTTP Protocol Versie. Moet een van de volgende zijn: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'U moet aan alle Negotiations een array van ondersteunde waardes geven.',

	// RedirectResponse
   'invalidRoute'               => '{0, string} route ka niet gevonden worden tijdens het reverse-routen.',

	// DownloadResponse
   'cannotSetBinary'            => 'Downloadfout. Filepath kan niet op binair gezet worden.',
   'cannotSetFilepath'          => 'Downloadfout. Filepath kan niet ingesteld worden: {0}',
   'notFoundDownloadSource'     => 'De downloadsource kon niet gevonden worden.',
   'cannotSetCache'             => 'Caching wordt bij het downloaden wordt niet ondersteund.',
   'cannotSetStatusCode'        => 'Change status code wordt bij het downloaden niet ondersteund. code: {0}, reason: {1}',

	// Response
   'missingResponseStatus'      => 'HTTP Response heeft geen status code',
   'invalidStatusCode'          => '{0, string} is geen geldige HTTP return status code',
   'unknownStatusCode'          => 'Onbekende HTTP status code gegeven met geen message: {0}',

	// URI
   'cannotParseURI'             => 'Kon URI niet parsen: {0}',
   'segmentOutOfRange'          => 'Het Request URI segment overschreidt het geldige bereik: {0}',
   'invalidPort'                => 'Poorten moeten tussen 0 en 65535 zijn. Gegeven: {0}',
   'malformedQueryString'       => 'Query strings mogen geen URI fragmenten bevatten.',

	// Page Not Found
   'pageNotFound'               => 'Pagina niet gevonden',
   'emptyController'            => 'Geen Controller gespecificeerd.',
   'controllerNotFound'         => 'Controller of controller-methode niet gevonden: {0}::{1}',
   'methodNotFound'             => 'Controller-methode niet gevonden: {0}',

	// CSRF
   'disallowedAction'           => 'De actie die u wilt uitvoeren is niet toegestaan.',

	// Uploaded file moving
   'alreadyMoved'               => 'Het geüploade bestand is al verplaatst.',
   'invalidFile'                => 'Het originele bestand is geen geldig bestand.',
   'moveFailed'                 => 'Kon bestand niet verplaatsen van {0} naar {1} ({2})',

   'uploadErrOk'                => 'Het bestand is succesvol geüpload.',
   'uploadErrIniSize'           => 'Het bestand "%s" overschreidt uw upload_max_filesize ini limiet.',
   'uploadErrFormSize'          => 'Het bestand "%s" overschreidt de uploadlimiet vastgesteld in uw formulier.',
   'uploadErrPartial'           => 'Het bestand "%s" is slechts gedeeltelijk geüpload.',
   'uploadErrNoFile'            => 'Er is geen bestand geüpload.',
   'uploadErrCantWrite'         => 'Het bestand "%s" kon niet naar de schijf worden geschreven.',
   'uploadErrNoTmpDir'          => 'Kon bestand niet uploaden: geen tijdelijke map.',
   'uploadErrExtension'         => 'De bestandupload is onderbroken door een PHP extensie.',
   'uploadErrUnknown'           => 'Het bestand "%s" is niet geüpload door een onbekende error.',
];
