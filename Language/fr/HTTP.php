<?php

/**
 * HTTP language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// CurlRequest
   'missingCurl'                => 'CURL doit être activé pour utiliser la classe CURLRequest.',
   'invalidSSLKey'              => 'Impossible de paramétrer la Clé SSL. {0} n\'est pas un fichier valide.',
   'sslCertNotFound'            => 'Certificat SSL non trouvé : {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.',

	// Message
   'invalidHTTPProtocol'        => 'Invalid HTTP Protocol Version. Must be one of: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'You must provide an array of supported values to all Negotiations.',

	// RedirectResponse
   'invalidRoute'               => '{0, string} n\'est pas une route valide.',

   // DownloadResponse
   'cannotSetBinary'            => 'When setting filepath can not set binary.',
   'cannotSetFilepath'          => 'When setting binary can not set filepath: {0}',
   'notFoundDownloadSource'     => 'Not found download body source.',
   'cannotSetCache'             => 'It does not supported caching for downloading.',
   'cannotSetStatusCode'        => 'It does not supported chnage status code for downloading. code: {0}, reason: {1}',

	// Response
   'missingResponseStatus'      => 'HTTP Response is missing a status code',
   'invalidStatusCode'          => '{0, string} is not a valid HTTP return status code',
   'unknownStatusCode'          => 'Unknown HTTP status code provided with no message: {0}',

	// URI
   'cannotParseURI'             => 'Unable to parse URI: {0}',
   'segmentOutOfRange'          => 'Request URI segment is our of range: {0}',
   'invalidPort'                => 'Ports must be between 0 and 65535. Given: {0}',
   'malformedQueryString'       => 'Query strings may not include URI fragments.',

	// Page Not Found
   'pageNotFound'               => 'Page non trouvée',
   'emptyController'            => 'Pas de contrôleur spécifié.',
   'controllerNotFound'         => 'Le contrôleur ou sa méthode sont introuvables : {0}::{1}',
   'methodNotFound'             => 'La méthode du contrôleur est introuvable : {0}',

	// CSRF
   'disallowedAction'           => 'Votre demande n\'est pas autorisée.',

	// Uploaded file moving
   'alreadyMoved'               => 'Le fichier uploadé a déjà été déplacé.',
   'invalidFile'                => 'Le fichier original n\'est pas un fichier valide.',
   'moveFailed'                 => 'Impossible de déplacer le fichier {0} vers {1} ({2})',

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
