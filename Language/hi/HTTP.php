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
    'missingCurl'     => 'CURLRequest क्लास का उपयोग करने के लिए CURL सक्षम होना चाहिए।', // 'CURL must be enabled to use the CURLRequest class.'
    'invalidSSLKey'   => 'SSL कुंजी सेट नहीं की जा सकती। "{0}" एक मान्य फ़ाइल नहीं है।', // 'Cannot set SSL Key. "{0}" is not a valid file.'
    'sslCertNotFound' => 'SSL प्रमाणपत्र यहां नहीं मिला: "{0}"', // 'SSL certificate not found at: "{0}"'
    'curlError'       => '{0} : {1}', // '{0} : {1}'

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" एक मान्य नेगोशिएशन प्रकार नहीं है। इनमें से एक होना चाहिए: media, charset, encoding, language।', // '"{0}" is not a valid negotiation type. Must be one of: media, charset, encoding, language.'
    'invalidJSON'            => 'JSON स्ट्रिंग को पार्स करने में विफल। त्रुटि: {0}', // 'Failed to parse JSON string. Error: {0}'
    'unsupportedJSONFormat'  => 'प्रदान किया गया JSON प्रारूप समर्थित नहीं है।', // 'The provided JSON format is not supported.'

    // Message
    'invalidHTTPProtocol' => 'अमान्य HTTP प्रोटोकॉल संस्करण: {0}', // 'Invalid HTTP Protocol Version: {0}'

    // Negotiate
    'emptySupportedNegotiations' => 'आपको सभी नेगोशिएशन के लिए समर्थित मानों का एक सरणी (array) प्रदान करना होगा।', // 'You must provide an array of supported values to all Negotiations.'

    // RedirectResponse
    'invalidRoute' => '"{0}" के लिए मार्ग (route) नहीं मिल रहा है।', // 'The route for "{0}" cannot be found.'

    // DownloadResponse
    'cannotSetBinary'        => 'फ़ाइलपाथ सेट करते समय बाइनरी सेट नहीं किया जा सकता।', // 'When setting filepath cannot set binary.'
    'cannotSetFilepath'      => 'बाइनरी सेट करते समय फ़ाइलपाथ सेट नहीं किया जा सकता: "{0}"', // 'When setting binary cannot set filepath: "{0}"'
    'notFoundDownloadSource' => 'डाउनलोड बॉडी स्रोत नहीं मिला।', // 'Not found download body source.'
    'cannotSetCache'         => 'यह डाउनलोड करने के लिए कैशिंग का समर्थन नहीं करता है।', // 'It does not support caching for downloading.'
    'cannotSetStatusCode'    => 'यह डाउनलोड करने के लिए स्थिति कोड बदलने का समर्थन नहीं करता है। कोड: {0}, कारण: {1}', // 'It does not support change status code for downloading. code: {0}, reason: {1}'

    // Response
    'missingResponseStatus' => 'HTTP रिस्पांस में स्थिति कोड गायब है।', // 'HTTP Response is missing a status code'
    'invalidStatusCode'     => '{0} एक मान्य HTTP रिटर्न स्थिति कोड नहीं है।', // '{0} is not a valid HTTP return status code'
    'unknownStatusCode'     => 'कोई संदेश के साथ अज्ञात HTTP स्थिति कोड प्रदान किया गया: {0}', // 'Unknown HTTP status code provided with no message: {0}'

    // URI
    'cannotParseURI'       => 'URI को पार्स करने में असमर्थ: "{0}"', // 'Unable to parse URI: "{0}"'
    'segmentOutOfRange'    => 'अनुरोध URI सेगमेंट सीमा से बाहर है: "{0}"', // 'Request URI segment is out of range: "{0}"'
    'invalidPort'          => 'पोर्ट 0 और 65535 के बीच होने चाहिए। दिया गया: {0}', // 'Ports must be between 0 and 65535. Given: {0}'
    'malformedQueryString' => 'क्वेरी स्ट्रिंग में URI फ़्रैगमेंट शामिल नहीं हो सकते।', // 'Query strings may not include URI fragments.'

    // Page Not Found
    'pageNotFound'       => 'पेज नहीं मिला', // 'Page Not Found'
    'emptyController'    => 'कोई कंट्रोलर निर्दिष्ट नहीं किया गया।', // 'No Controller specified.'
    'controllerNotFound' => 'कंट्रोलर या उसकी विधि नहीं मिली: {0}::{1}', // 'Controller or its method is not found: {0}::{1}'
    'methodNotFound'     => 'कंट्रोलर विधि नहीं मिली: "{0}"', // 'Controller method is not found: "{0}"'
    'localeNotSupported' => 'स्थान (Locale) समर्थित नहीं है: {0}', // 'Locale is not supported: {0}'

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'आपके द्वारा अनुरोधित कार्रवाई की अनुमति नहीं है।', // 'The action you requested is not allowed.'

    // Uploaded file moving
    'alreadyMoved' => 'अपलोड की गई फ़ाइल पहले ही ले जाई जा चुकी है।', // 'The uploaded file has already been moved.'
    'invalidFile'  => 'मूल फ़ाइल एक मान्य फ़ाइल नहीं है।', // 'The original file is not a valid file.'
    'moveFailed'   => 'फ़ाइल "{0}" को "{1}" पर ले जाया नहीं जा सका। कारण: {2}', // 'Could not move file "{0}" to "{1}". Reason: {2}'

    'uploadErrOk'        => 'फ़ाइल सफलतापूर्वक अपलोड हो गई।', // 'The file uploaded with success.'
    'uploadErrIniSize'   => 'फ़ाइल "%s" आपके upload_max_filesize ini निर्देश से अधिक है।', // 'The file "%s" exceeds your upload_max_filesize ini directive.'
    'uploadErrFormSize'  => 'फ़ाइल "%s" आपके फ़ॉर्म में परिभाषित अपलोड सीमा से अधिक है।', // 'The file "%s" exceeds the upload limit defined in your form.'
    'uploadErrPartial'   => 'फ़ाइल "%s" आंशिक रूप से ही अपलोड हुई थी।', // 'The file "%s" was only partially uploaded.'
    'uploadErrNoFile'    => 'कोई फ़ाइल अपलोड नहीं हुई।', // 'No file was uploaded.'
    'uploadErrCantWrite' => 'फ़ाइल "%s" डिस्क पर लिखी नहीं जा सकी।', // 'The file "%s" could not be written on disk.'
    'uploadErrNoTmpDir'  => 'फ़ाइल अपलोड नहीं की जा सकी: अस्थायी डायरेक्टरी गायब है।', // 'File could not be uploaded: missing temporary directory.'
    'uploadErrExtension' => 'फ़ाइल अपलोड एक PHP एक्सटेंशन द्वारा रोक दी गई थी।', // 'File upload was stopped by a PHP extension.'
    'uploadErrUnknown'   => 'अज्ञात त्रुटि के कारण फ़ाइल "%s" अपलोड नहीं हुई।', // 'The file "%s" was not uploaded due to an unknown error.'

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite सेटिंग None, Lax, Strict, या एक खाली स्ट्रिंग होनी चाहिए। दिया गया: {0}', // 'The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}'
];
