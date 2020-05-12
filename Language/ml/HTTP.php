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
   'missingCurl'                => 'CURL റിക്വസ്റ്റ് ക്ലാസ് ഉപയോഗിക്കാൻ CURL പ്രാപ്തമാക്കിയിരിക്കണം.',
   'invalidSSLKey'              => 'SSL കീ സജ്ജമാക്കാൻ കഴിയില്ല. {0} സാധുവായ ഫയലല്ല.',
   'sslCertNotFound'            => 'SSL സർട്ടിഫിക്കറ്റ് ഇവിടെ കണ്ടെത്തിയില്ല: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} സാധുവായ ഒരു ചർച്ചാ തരമല്ല. ഇവയിലൊന്ന് ആയിരിക്കണം: മീഡിയ, പ്രതീകം, എൻകോഡിംഗ്, ഭാഷ. ',

	// Message
   'invalidHTTPProtocol'        => 'അസാധുവായ HTTP പ്രോട്ടോക്കോൾ പതിപ്പ്. ഇവയിലൊന്ന് ആയിരിക്കണം: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'എല്ലാ ചർച്ചകൾക്കും നിങ്ങൾ പിന്തുണയ്‌ക്കുന്ന മൂല്യങ്ങളുടെ ഒരു നിര നൽകണം.',

	// RedirectResponse
   'invalidRoute'               => '{0, string} റിവേഴ്സ് റൂട്ടിംഗ് സമയത്ത് റൂട്ട് കണ്ടെത്താൻ കഴിയില്ല',

	// DownloadResponse
   'cannotSetBinary'            => 'ഫയൽപാത്ത് സജ്ജമാക്കുമ്പോൾ ബൈനറി സജ്ജമാക്കാൻ കഴിയില്ല.',
   'cannotSetFilepath'          => 'ബൈനറി സജ്ജമാക്കുമ്പോൾ ഫയൽപാത്ത് സജ്ജമാക്കാൻ കഴിയില്ല: {0}',
   'notFoundDownloadSource'     => 'ഡൗൺലോഡ് ബോഡി ഉറവിടം കണ്ടെത്തിയില്ല.',
   'cannotSetCache'             => 'It does not supported caching for downloading.',
   'cannotSetStatusCode'        => 'It does not supported change status code for downloading. code: {0}, reason: {1}',

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
   'pageNotFound'               => 'Page Not Found',
   'emptyController'            => 'No Controller specified.',
   'controllerNotFound'         => 'Controller or its method is not found: {0}::{1}',
   'methodNotFound'             => 'Controller method is not found: {0}',

	// CSRF
   'disallowedAction'           => 'The action you requested is not allowed.',

	// Uploaded file moving
   'alreadyMoved'               => 'The uploaded file has already been moved.',
   'invalidFile'                => 'The original file is not a valid file.',
   'moveFailed'                 => 'Could not move file {0} to {1} ({2})',

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
