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
	'missingCurl'     => 'CURLRequest class එක භාවිතා කිරීමට CURL සක්‍රීය කළ යුතුය.', // CURL must be enabled to use the CURLRequest class.
	'invalidSSLKey'   => 'SSL Key එක set කල නොහැක. {0} වලංගු ගොනුවක් නොවේ.', // Cannot set SSL Key. {0} is not a valid file.
	'sslCertNotFound' => 'SSL සහතිකය මෙහි නොමැත: {0}', // SSL certificate not found at: {0}
	'curlError'       => '{0} : {1}', // {0} : {1}

	// IncomingRequest
	'invalidNegotiationType' => '{0} වලංගු negotiation වර්ගයක් නොවේ. මෙයින් එකක් විය යුතුය: media, charset, encoding, language.', // {0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.

	// Message
	'invalidHTTPProtocol' => 'වලංගු නොවන HTTP ප්‍රොටොකෝල අනුවාදයකි. මෙයින් එකක් විය යුතුය: {0}', // Invalid HTTP Protocol Version. Must be one of: {0}

	// Negotiate
	'emptySupportedNegotiations' => 'ඔබ සියලු negotiations සඳහා සහය දක්වන අගයන්ගෙන් යුත් array එකක් සැපයිය යුතුය.', // You must provide an array of supported values to all Negotiations.

	// RedirectResponse
	'invalidRoute' => 'Reverse-routing කිරීමේදී {0} route සොයාගත නොහැක.', // {0} route cannot be found while reverse-routing.

	// DownloadResponse
	'cannotSetBinary'        => 'Filepath සැකසීමේදී binary සැකසිය නොහැක.', // When setting filepath cannot set binary.
	'cannotSetFilepath'      => 'Binary සැකසීමේදී filepath සැකසිය නොහැක: {0}', // When setting binary cannot set filepath: {0}
	'notFoundDownloadSource' => 'Download body ප්‍රභවය හමු නොවීය.', // Not found download body source.
	'cannotSetCache'         => 'එය බාගත කිරීම සඳහා caching සඳහා සහය නොදක්වයි.', // It does not support caching for downloading.
	'cannotSetStatusCode'    => 'බාගත කිරීම සඳහා status code වෙනස් කිරීමට එය සහාය නොදක්වයි. කේතය: {0}, හේතුව: {1}', // It does not support change status code for downloading. code: {0}, reason: {1}

	// Response
	'missingResponseStatus' => 'HTTP Response හි status code එකක් නොමැත', // HTTP Response is missing a status code
	'invalidStatusCode'     => '{0} වලංගු HTTP return status code එකක් නොවේ', // {0} is not a valid HTTP return status code
	'unknownStatusCode'     => 'නොදන්නා HTTP status code එකක් සපයා ඇත message එකක් නොමැතිව: {0}', // Unknown HTTP status code provided with no message: {0}

	// URI
	'cannotParseURI'       => 'URI parse කිරීමට නෙැහැක: {0}', // Unable to parse URI: {0}
	'segmentOutOfRange'    => 'Request URI කොටස පරාසය ඉක්මවා ඇත: {0}', // Request URI segment is out of range: {0}
	'invalidPort'          => 'Ports 0 ත් 65535 ත් අතර විය යුතුය. ලබා දී ඇත්තේ: {0}', // Ports must be between 0 and 65535. Given: {0}
	'malformedQueryString' => 'Query strings වලට URI කොටස් ඇතුළත් නොවිය හැකිය.', // Query strings may not include URI fragments.

	// Page Not Found
	'pageNotFound'       => 'පිටුව හමු නොවීය', // Page Not Found
	'emptyController'    => 'Controller එකක් දක්වා නොමැත.', // No Controller specified.
	'controllerNotFound' => 'Controller එක හෝ එහි method එක සොයාගත නොහැක: {0}::{1}', // Controller or its method is not found: {0}::{1}
	'methodNotFound'     => 'Controller method එක සොයාගත නොහැක: {0}', // Controller method is not found: {0}

	// CSRF
	'disallowedAction' => 'ඔබ ඉල්ලූ ක්‍රියාවට අවසර නැත.', // The action you requested is not allowed.

	// Uploaded file moving
	'alreadyMoved' => 'Upload කරන ලද ගොනුව දැනටමත් move කර ඇත.', // The uploaded file has already been moved.
	'invalidFile'  => 'මුල් ගොනුව වලංගු ගොනුවක් නොවේ.', // The original file is not a valid file.
	'moveFailed'   => '{0} ගොනුව {1} වෙත ගෙනයාමට නොහැකි විය ({2})', // Could not move file {0} to {1} ({2})

	'uploadErrOk'        => 'ගොනුව upload කරන ලද්දේ සාර්ථකත්වයෙනි.', // The file uploaded with success.
	'uploadErrIniSize'   => '"%s" ගොනුව ඔබගේ upload_max_filesize ini directive ඉක්මවා යයි.', // The file "%s" exceeds your upload_max_filesize ini directive.
	'uploadErrFormSize'  => '"%s" ගොනුව ඔබගේ form එකෙහි define කර ඇති upload කිරීමේ සීමාව ඉක්මවා යයි.', // The file "%s" exceeds the upload limit defined in your form.
	'uploadErrPartial'   => '"%s" ගොනුව upload කරන ලද්දේ අර්ධ වශයෙන් පමණි.', // The file "%s" was only partially uploaded.
	'uploadErrNoFile'    => 'කිසිදු ගොනුවක් upload කර නොමැත.', // No file was uploaded.
	'uploadErrCantWrite' => '"%s" ගොනුව disk එකෙහි ලිවිය නොහැක.', // The file "%s" could not be written on disk.
	'uploadErrNoTmpDir'  => 'ගොනුව upload කළ නොහැකි විය: තාවකාලික ඩිරෙක්ටරිය අස්ථානගත වී ඇත.', // File could not be uploaded: missing temporary directory.
	'uploadErrExtension' => 'PHP extension එකක් මඟින් ගොනු upload කිරීම නතර කරන ලදි.', // File upload was stopped by a PHP extension.
	'uploadErrUnknown'   => 'නොදන්නා දෝෂයක් හේතුවෙන් "%s" ගොනුව උඩුගත කර නොමැත.', // The file "%s" was not uploaded due to an unknown error.

	// SameSite setting
	'invalidSameSiteSetting' => 'SameSite setting හි අගය None, Lax, Strict හෝ blank string විය යුතුය. දී තිබෙන්නේ: {0}', // The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}
];
