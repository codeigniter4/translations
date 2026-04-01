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
    'missingCurl'     => 'CURLRequest class वापरण्यासाठी CURL enabled असणे आवश्यक आहे.', // 'CURL must be enabled to use the CURLRequest class.'
    'invalidSSLKey'   => 'SSL Key सेट करता येत नाही. "{0}" ही वैध फाइल नाही.', // 'Cannot set SSL Key. "{0}" is not a valid file.'
    'sslCertNotFound' => 'SSL certificate येथे सापडले नाही: "{0}"', // 'SSL certificate not found at: "{0}"'
    'curlError'       => '{0} : {1}', // '{0} : {1}'

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" हा वैध negotiation type नाही. खालीलपैकी एक असणे आवश्यक आहे: media, charset, encoding, language.', // '"{0}" is not a valid negotiation type. Must be one of: media, charset, encoding, language.'
    'invalidJSON'            => 'JSON string parse करण्यात अयशस्वी. त्रुटी: {0}', // 'Failed to parse JSON string. Error: {0}'
    'unsupportedJSONFormat'  => 'दिलेला JSON format समर्थित नाही.', // 'The provided JSON format is not supported.'

    // Message
    'invalidHTTPProtocol' => 'अवैध HTTP Protocol Version: {0}', // 'Invalid HTTP Protocol Version: {0}'

    // Negotiate
    'emptySupportedNegotiations' => 'सर्व Negotiations साठी supported values ची array देणे आवश्यक आहे.', // 'You must provide an array of supported values to all Negotiations.'

    // RedirectResponse
    'invalidRoute' => '"{0}" साठी route सापडू शकला नाही.', // 'The route for "{0}" cannot be found.'

    // DownloadResponse
    'cannotSetBinary'        => 'filepath सेट करताना binary सेट करता येत नाही.', // 'When setting filepath cannot set binary.'
    'cannotSetFilepath'      => 'binary सेट करताना filepath सेट करता येत नाही: "{0}"', // 'When setting binary cannot set filepath: "{0}"'
    'notFoundDownloadSource' => 'download body source सापडला नाही.', // 'Not found download body source.'
    'cannotSetCache'         => 'डाउनलोडसाठी caching समर्थित नाही.', // 'It does not support caching for downloading.'
    'cannotSetStatusCode'    => 'डाउनलोडसाठी status code बदलणे समर्थित नाही. code: {0}, reason: {1}', // 'It does not support change status code for downloading. code: {0}, reason: {1}'

    // Response
    'missingResponseStatus' => 'HTTP Response मध्ये status code नाही', // 'HTTP Response is missing a status code'
    'invalidStatusCode'     => '{0} हा वैध HTTP return status code नाही', // '{0} is not a valid HTTP return status code'
    'unknownStatusCode'     => 'कुठलाही message नसलेला अज्ञात HTTP status code दिला आहे: {0}', // 'Unknown HTTP status code provided with no message: {0}'

    // URI
    'cannotParseURI'       => 'URI parse करता आला नाही: "{0}"', // 'Unable to parse URI: "{0}"'
    'segmentOutOfRange'    => 'Request URI segment मर्यादेबाहेर आहे: "{0}"', // 'Request URI segment is out of range: "{0}"'
    'invalidPort'          => 'Ports 0 आणि 65535 च्या दरम्यान असणे आवश्यक आहे. दिलेले: {0}', // 'Ports must be between 0 and 65535. Given: {0}'
    'malformedQueryString' => 'Query strings मध्ये URI fragments असू शकत नाहीत.', // 'Query strings may not include URI fragments.'

    // Page Not Found
    'pageNotFound'       => 'पृष्ठ सापडले नाही', // 'Page Not Found'
    'emptyController'    => 'कोणताही Controller दिलेला नाही.', // 'No Controller specified.'
    'controllerNotFound' => 'Controller किंवा त्याची method सापडली नाही: {0}::{1}', // 'Controller or its method is not found: {0}::{1}'
    'methodNotFound'     => 'Controller method सापडली नाही: "{0}"', // 'Controller method is not found: "{0}"'
    'localeNotSupported' => 'Locale समर्थित नाही: {0}', // 'Locale is not supported: {0}'

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'तुम्ही विनंती केलेली action अनुमत नाही.', // 'The action you requested is not allowed.'

    // Uploaded file moving
    'alreadyMoved' => 'अपलोड केलेली फाइल आधीच हलवली गेली आहे.', // 'The uploaded file has already been moved.'
    'invalidFile'  => 'मूळ फाइल वैध नाही.', // 'The original file is not a valid file.'
    'moveFailed'   => 'फाइल "{0}" ला "{1}" येथे हलवता आले नाही. कारण: {2}', // 'Could not move file "{0}" to "{1}". Reason: {2}'

    'uploadErrOk'        => 'फाइल यशस्वीपणे अपलोड झाली.', // 'The file uploaded with success.'
    'uploadErrIniSize'   => 'फाइल "%s" तुमच्या upload_max_filesize ini directive पेक्षा मोठी आहे.', // 'The file "%s" exceeds your upload_max_filesize ini directive.'
    'uploadErrFormSize'  => 'फाइल "%s" तुमच्या form मध्ये दिलेल्या upload मर्यादेपेक्षा मोठी आहे.', // 'The file "%s" exceeds the upload limit defined in your form.'
    'uploadErrPartial'   => 'फाइल "%s" फक्त अंशतः अपलोड झाली.', // 'The file "%s" was only partially uploaded.'
    'uploadErrNoFile'    => 'कोणतीही फाइल अपलोड झाली नाही.', // 'No file was uploaded.'
    'uploadErrCantWrite' => 'फाइल "%s" डिस्कवर लिहिता आली नाही.', // 'The file "%s" could not be written on disk.'
    'uploadErrNoTmpDir'  => 'फाइल अपलोड करता आली नाही: temporary directory नाही.', // 'File could not be uploaded: missing temporary directory.'
    'uploadErrExtension' => 'PHP extension मुळे file upload थांबवण्यात आला.', // 'File upload was stopped by a PHP extension.'
    'uploadErrUnknown'   => 'अज्ञात त्रुटीमुळे फाइल "%s" अपलोड झाली नाही.', // 'The file "%s" was not uploaded due to an unknown error.'

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite setting None, Lax, Strict किंवा रिकामी string असणे आवश्यक आहे. दिलेले: {0}', // 'The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}'
];
