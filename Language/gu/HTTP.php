<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'CURLRequest ક્લાસનો ઉપયોગ કરવા માટે CURL સક્ષમ હોવું આવશ્યક છે.', // 'CURL must be enabled to use the CURLRequest class.'
    'invalidSSLKey'   => 'SSL કી સેટ કરી શકાતી નથી. "{0}" માન્ય ફાઇલ નથી.', // 'Cannot set SSL Key. "{0}" is not a valid file.'
    'sslCertNotFound' => 'SSL પ્રમાણપત્ર અહીં મળ્યું નથી: "{0}"', // 'SSL certificate not found at: "{0}"'
    'curlError'       => '{0} : {1}', // '{0} : {1}'

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" માન્ય નેગોશિયેશન પ્રકાર નથી. આમાંથી એક હોવું જોઈએ: media, charset, encoding, language.', // '"{0}" is not a valid negotiation type. Must be one of: media, charset, encoding, language.'
    'invalidJSON'            => 'JSON સ્ટ્રિંગનું પાર્સિંગ નિષ્ફળ. ભૂલ: {0}', // 'Failed to parse JSON string. Error: {0}'
    'unsupportedJSONFormat'  => 'પ્રદાન કરેલ JSON ફોર્મેટ સપોર્ટેડ નથી.', // 'The provided JSON format is not supported.'

    // Message
    'invalidHTTPProtocol' => 'અમાન્ય HTTP પ્રોટોકોલ સંસ્કરણ: {0}', // 'Invalid HTTP Protocol Version: {0}'

    // Negotiate
    'emptySupportedNegotiations' => 'તમારે તમામ નેગોશિયેશન્સને સપોર્ટેડ મૂલ્યોનો એરે પ્રદાન કરવો આવશ્યક છે.', // 'You must provide an array of supported values to all Negotiations.'

    // RedirectResponse
    'invalidRoute' => '"{0}" માટેનો રૂટ શોધી શકાતો નથી.', // 'The route for "{0}" cannot be found.'

    // DownloadResponse
    'cannotSetBinary'        => 'ફાઇલપાથ સેટ કરતી વખતે બાઇનરી સેટ કરી શકાતી નથી.', // 'When setting filepath cannot set binary.'
    'cannotSetFilepath'      => 'બાઇનરી સેટ કરતી વખતે ફાઇલપાથ સેટ કરી શકાતી નથી: "{0}"', // 'When setting binary cannot set filepath: "{0}"'
    'notFoundDownloadSource' => 'ડાઉનલોડ બોડી સ્રોત મળ્યો નથી.', // 'Not found download body source.'
    'cannotSetCache'         => 'તે ડાઉનલોડ કરવા માટે કેશીંગને સપોર્ટ કરતું નથી.', // 'It does not support caching for downloading.'
    'cannotSetStatusCode'    => 'તે ડાઉનલોડ કરવા માટે સ્ટેટસ કોડ બદલવાને સપોર્ટ કરતું નથી. કોડ: {0}, કારણ: {1}', // 'It does not support change status code for downloading. code: {0}, reason: {1}'

    // Response
    'missingResponseStatus' => 'HTTP રિસ્પોન્સમાં સ્ટેટસ કોડ ખૂટે છે.', // 'HTTP Response is missing a status code'
    'invalidStatusCode'     => '{0} માન્ય HTTP રિટર્ન સ્ટેટસ કોડ નથી.', // '{0} is not a valid HTTP return status code'
    'unknownStatusCode'     => 'કોઈ સંદેશ વિના અજ્ઞાત HTTP સ્ટેટસ કોડ પ્રદાન કર્યો: {0}', // 'Unknown HTTP status code provided with no message: {0}'

    // URI
    'cannotParseURI'       => 'URI પાર્સ કરી શકાતું નથી: "{0}"', // 'Unable to parse URI: "{0}"'
    'segmentOutOfRange'    => 'રિક્વેસ્ટ URI સેગમેન્ટ રેન્જની બહાર છે: "{0}"', // 'Request URI segment is out of range: "{0}"'
    'invalidPort'          => 'પોર્ટ્સ 0 થી 65535 ની વચ્ચે હોવા જોઈએ. આપેલ: {0}', // 'Ports must be between 0 and 65535. Given: {0}'
    'malformedQueryString' => 'ક્વેરી સ્ટ્રિંગ્સમાં URI ફ્રેગમેન્ટ્સ શામેલ હોઈ શકતા નથી.', // 'Query strings may not include URI fragments.'

    // Page Not Found
    'pageNotFound'       => 'પેજ મળ્યું નથી', // 'Page Not Found'
    'emptyController'    => 'કોઈ કંટ્રોલર સ્પષ્ટ નથી.', // 'No Controller specified.'
    'controllerNotFound' => 'કંટ્રોલર અથવા તેની પદ્ધતિ મળી નથી: {0}::{1}', // 'Controller or its method is not found: {0}::{1}'
    'methodNotFound'     => 'કંટ્રોલર પદ્ધતિ મળી નથી: "{0}"', // 'Controller method is not found: "{0}"'
    'localeNotSupported' => 'સ્થાનિક સપોર્ટેડ નથી: {0}', // 'Locale is not supported: {0}'

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'તમે વિનંતી કરેલી ક્રિયાને મંજૂરી નથી.', // 'The action you requested is not allowed.'

    // Uploaded file moving
    'alreadyMoved' => 'અપલોડ કરેલી ફાઇલ પહેલેથી જ ખસેડવામાં આવી છે.', // 'The uploaded file has already been moved.'
    'invalidFile'  => 'મૂળ ફાઇલ માન્ય ફાઇલ નથી.', // 'The original file is not a valid file.'
    'moveFailed'   => 'ફાઇલ "{0}" ને "{1}" પર ખસેડી શકાઈ નથી. કારણ: {2}', // 'Could not move file "{0}" to "{1}". Reason: {2}'

    'uploadErrOk'        => 'ફાઇલ સફળતાપૂર્વક અપલોડ થઈ ગઈ છે.', // 'The file uploaded with success.'
    'uploadErrIniSize'   => 'ફાઇલ "%s" તમારી upload_max_filesize ini ડિરેક્ટિવ કરતાં વધી ગઈ છે.', // 'The file "%s" exceeds your upload_max_filesize ini directive.'
    'uploadErrFormSize'  => 'ફાઇલ "%s" તમારા ફોર્મમાં વ્યાખ્યાયિત અપલોડ મર્યાદા કરતાં વધી ગઈ છે.', // 'The file "%s" exceeds the upload limit defined in your form.'
    'uploadErrPartial'   => 'ફાઇલ "%s" ફક્ત આંશિક રીતે અપલોડ થઈ હતી.', // 'The file "%s" was only partially uploaded.'
    'uploadErrNoFile'    => 'કોઈ ફાઇલ અપલોડ થઈ નથી.', // 'No file was uploaded.'
    'uploadErrCantWrite' => 'ફાઇલ "%s" ડિસ્ક પર લખી શકાઈ નથી.', // 'The file "%s" could not be written on disk.'
    'uploadErrNoTmpDir'  => 'ફાઇલ અપલોડ કરી શકાઈ નથી: અસ્થાયી ડિરેક્ટરી ખૂટે છે.', // 'File could not be uploaded: missing temporary directory.'
    'uploadErrExtension' => 'ફાઇલ અપલોડ PHP એક્સ્ટેંશન દ્વારા રોકવામાં આવ્યું હતું.', // 'File upload was stopped by a PHP extension.'
    'uploadErrUnknown'   => 'ફાઇલ "%s" અજ્ઞાત ભૂલને કારણે અપલોડ થઈ નથી.', // 'The file "%s" was not uploaded due to an unknown error.'

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite સેટિંગ None, Lax, Strict, અથવા ખાલી સ્ટ્રિંગ હોવું જોઈએ. આપેલ: {0}', // 'The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}'
];
