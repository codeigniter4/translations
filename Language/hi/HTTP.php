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
    'missingCurl'     => 'CURLRequest क्लास का उपयोग करने के लिए CURL सक्षम होना चाहिए।',
    'invalidSSLKey'   => 'SSL कुंजी सेट नहीं की जा सकती। "{0}" एक मान्य फ़ाइल नहीं है।',
    'sslCertNotFound' => 'SSL प्रमाणपत्र यहां नहीं मिला: "{0}"',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" एक मान्य नेगोशिएशन प्रकार नहीं है। इनमें से एक होना चाहिए: media, charset, encoding, language।',
    'invalidJSON'            => 'JSON स्ट्रिंग को पार्स करने में विफल। त्रुटि: {0}',
    'unsupportedJSONFormat'  => 'प्रदान किया गया JSON प्रारूप समर्थित नहीं है।',

    // Message
    'invalidHTTPProtocol' => 'अमान्य HTTP प्रोटोकॉल संस्करण: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'आपको सभी नेगोशिएशन के लिए समर्थित मानों का एक सरणी (array) प्रदान करना होगा।',

    // RedirectResponse
    'invalidRoute' => '"{0}" के लिए मार्ग (route) नहीं मिल रहा है।',

    // DownloadResponse
    'cannotSetBinary'        => 'फ़ाइलपाथ सेट करते समय बाइनरी सेट नहीं किया जा सकता।',
    'cannotSetFilepath'      => 'बाइनरी सेट करते समय फ़ाइलपाथ सेट नहीं किया जा सकता: "{0}"',
    'notFoundDownloadSource' => 'डाउनलोड बॉडी स्रोत नहीं मिला।',
    'cannotSetCache'         => 'यह डाउनलोड करने के लिए कैशिंग का समर्थन नहीं करता है।',
    'cannotSetStatusCode'    => 'यह डाउनलोड करने के लिए स्थिति कोड बदलने का समर्थन नहीं करता है। कोड: {0}, कारण: {1}',

    // Response
    'missingResponseStatus' => 'HTTP रिस्पांस में स्थिति कोड गायब है।',
    'invalidStatusCode'     => '{0} एक मान्य HTTP रिटर्न स्थिति कोड नहीं है।',
    'unknownStatusCode'     => 'कोई संदेश के साथ अज्ञात HTTP स्थिति कोड प्रदान किया गया: {0}',

    // URI
    'cannotParseURI'       => 'URI को पार्स करने में असमर्थ: "{0}"',
    'segmentOutOfRange'    => 'अनुरोध URI सेगमेंट सीमा से बाहर है: "{0}"',
    'invalidPort'          => 'पोर्ट 0 और 65535 के बीच होने चाहिए। दिया गया: {0}',
    'malformedQueryString' => 'क्वेरी स्ट्रिंग में URI फ़्रैगमेंट शामिल नहीं हो सकते।',

    // Page Not Found
    'pageNotFound'       => 'पेज नहीं मिला',
    'emptyController'    => 'कोई कंट्रोलर निर्दिष्ट नहीं किया गया।',
    'controllerNotFound' => 'कंट्रोलर या उसकी विधि नहीं मिली: {0}::{1}',
    'methodNotFound'     => 'कंट्रोलर विधि नहीं मिली: "{0}"',
    'localeNotSupported' => 'स्थान (Locale) समर्थित नहीं है: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'आपके द्वारा अनुरोधित कार्रवाई की अनुमति नहीं है।',

    // Uploaded file moving
    'alreadyMoved' => 'अपलोड की गई फ़ाइल पहले ही ले जाई जा चुकी है।',
    'invalidFile'  => 'मूल फ़ाइल एक मान्य फ़ाइल नहीं है।',
    'moveFailed'   => 'फ़ाइल "{0}" को "{1}" पर ले जाया नहीं जा सका। कारण: {2}',

    'uploadErrOk'        => 'फ़ाइल सफलतापूर्वक अपलोड हो गई।',
    'uploadErrIniSize'   => 'फ़ाइल "%s" आपके upload_max_filesize ini निर्देश से अधिक है।',
    'uploadErrFormSize'  => 'फ़ाइल "%s" आपके फ़ॉर्म में परिभाषित अपलोड सीमा से अधिक है।',
    'uploadErrPartial'   => 'फ़ाइल "%s" आंशिक रूप से ही अपलोड हुई थी।',
    'uploadErrNoFile'    => 'कोई फ़ाइल अपलोड नहीं हुई।',
    'uploadErrCantWrite' => 'फ़ाइल "%s" डिस्क पर लिखी नहीं जा सकी।',
    'uploadErrNoTmpDir'  => 'फ़ाइल अपलोड नहीं की जा सकी: अस्थायी डायरेक्टरी गायब है।',
    'uploadErrExtension' => 'फ़ाइल अपलोड एक PHP एक्सटेंशन द्वारा रोक दी गई थी।',
    'uploadErrUnknown'   => 'अज्ञात त्रुटि के कारण फ़ाइल "%s" अपलोड नहीं हुई।',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite सेटिंग None, Lax, Strict, या एक खाली स्ट्रिंग होनी चाहिए। दिया गया: {0}',
];
