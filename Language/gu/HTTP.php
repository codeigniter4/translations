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
    'missingCurl'              => 'CURLRequest ક્લાસનો ઉપયોગ કરવા માટે CURL સક્ષમ હોવું આવશ્યક છે.',
    'invalidSSLKey'            => 'SSL કી સેટ કરી શકાતી નથી. "{0}" માન્ય ફાઇલ નથી.',
    'sslCertNotFound'          => 'SSL પ્રમાણપત્ર અહીં મળ્યું નથી: "{0}"',
    'curlError'                => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType'   => '"{0}" માન્ય નેગોશિયેશન પ્રકાર નથી. આમાંથી એક હોવું જોઈએ: media, charset, encoding, language.',
    'invalidJSON'              => 'JSON સ્ટ્રિંગનું પાર્સિંગ નિષ્ફળ. ભૂલ: {0}',
    'unsupportedJSONFormat'    => 'પ્રદાન કરેલ JSON ફોર્મેટ સપોર્ટેડ નથી.',

    // Message
    'invalidHTTPProtocol'      => 'અમાન્ય HTTP પ્રોટોકોલ સંસ્કરણ: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'તમારે તમામ નેગોશિયેશન્સને સપોર્ટેડ મૂલ્યોનો એરે પ્રદાન કરવો આવશ્યક છે.',

    // RedirectResponse
    'invalidRoute'             => '"{0}" માટેનો રૂટ શોધી શકાતો નથી.',

    // DownloadResponse
    'cannotSetBinary'          => 'ફાઇલપાથ સેટ કરતી વખતે બાઇનરી સેટ કરી શકાતી નથી.',
    'cannotSetFilepath'        => 'બાઇનરી સેટ કરતી વખતે ફાઇલપાથ સેટ કરી શકાતી નથી: "{0}"',
    'notFoundDownloadSource'   => 'ડાઉનલોડ બોડી સ્રોત મળ્યો નથી.',
    'cannotSetCache'           => 'તે ડાઉનલોડ કરવા માટે કેશીંગને સપોર્ટ કરતું નથી.',
    'cannotSetStatusCode'      => 'તે ડાઉનલોડ કરવા માટે સ્ટેટસ કોડ બદલવાને સપોર્ટ કરતું નથી. કોડ: {0}, કારણ: {1}',

    // Response
    'missingResponseStatus'    => 'HTTP રિસ્પોન્સમાં સ્ટેટસ કોડ ખૂટે છે.',
    'invalidStatusCode'        => '{0} માન્ય HTTP રિટર્ન સ્ટેટસ કોડ નથી.',
    'unknownStatusCode'        => 'કોઈ સંદેશ વિના અજ્ઞાત HTTP સ્ટેટસ કોડ પ્રદાન કર્યો: {0}',

    // URI
    'cannotParseURI'           => 'URI પાર્સ કરી શકાતું નથી: "{0}"',
    'segmentOutOfRange'        => 'રિક્વેસ્ટ URI સેગમેન્ટ રેન્જની બહાર છે: "{0}"',
    'invalidPort'              => 'પોર્ટ્સ 0 થી 65535 ની વચ્ચે હોવા જોઈએ. આપેલ: {0}',
    'malformedQueryString'     => 'ક્વેરી સ્ટ્રિંગ્સમાં URI ફ્રેગમેન્ટ્સ શામેલ હોઈ શકતા નથી.',

    // Page Not Found
    'pageNotFound'             => 'પેજ મળ્યું નથી',
    'emptyController'          => 'કોઈ કંટ્રોલર સ્પષ્ટ નથી.',
    'controllerNotFound'       => 'કંટ્રોલર અથવા તેની પદ્ધતિ મળી નથી: {0}::{1}',
    'methodNotFound'           => 'કંટ્રોલર પદ્ધતિ મળી નથી: "{0}"',
    'localeNotSupported'       => 'સ્થાનિક સપોર્ટેડ નથી: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction'         => 'તમે વિનંતી કરેલી ક્રિયાને મંજૂરી નથી.',

    // Uploaded file moving
    'alreadyMoved'             => 'અપલોડ કરેલી ફાઇલ પહેલેથી જ ખસેડવામાં આવી છે.',
    'invalidFile'              => 'મૂળ ફાઇલ માન્ય ફાઇલ નથી.',
    'moveFailed'               => 'ફાઇલ "{0}" ને "{1}" પર ખસેડી શકાઈ નથી. કારણ: {2}',

    'uploadErrOk'              => 'ફાઇલ સફળતાપૂર્વક અપલોડ થઈ ગઈ છે.',
    'uploadErrIniSize'         => 'ફાઇલ "%s" તમારી upload_max_filesize ini ડિરેક્ટિવ કરતાં વધી ગઈ છે.',
    'uploadErrFormSize'        => 'ફાઇલ "%s" તમારા ફોર્મમાં વ્યાખ્યાયિત અપલોડ મર્યાદા કરતાં વધી ગઈ છે.',
    'uploadErrPartial'         => 'ફાઇલ "%s" ફક્ત આંશિક રીતે અપલોડ થઈ હતી.',
    'uploadErrNoFile'          => 'કોઈ ફાઇલ અપલોડ થઈ નથી.',
    'uploadErrCantWrite'       => 'ફાઇલ "%s" ડિસ્ક પર લખી શકાઈ નથી.',
    'uploadErrNoTmpDir'        => 'ફાઇલ અપલોડ કરી શકાઈ નથી: અસ્થાયી ડિરેક્ટરી ખૂટે છે.',
    'uploadErrExtension'       => 'ફાઇલ અપલોડ PHP એક્સ્ટેંશન દ્વારા રોકવામાં આવ્યું હતું.',
    'uploadErrUnknown'         => 'ફાઇલ "%s" અજ્ઞાત ભૂલને કારણે અપલોડ થઈ નથી.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting'   => 'SameSite સેટિંગ None, Lax, Strict, અથવા ખાલી સ્ટ્રિંગ હોવું જોઈએ. આપેલ: {0}',
];
