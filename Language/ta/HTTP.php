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
    'missingCurl'     => 'CURLRequest வகுப்பைப் பயன்படுத்த CURL ஐ இயக்க வேண்டும்.', // 'CURL must be enabled to use the CURLRequest class.',
    'invalidSSLKey'   => 'SSL விசையை அமைக்க முடியாது. "{0}" சரியான கோப்பு அல்ல.', // 'Cannot set SSL Key. "{0}" is not a valid file.',
    'sslCertNotFound' => 'SSL சான்றிதழ் இங்கு காணப்படவில்லை: "{0}"', // 'SSL certificate not found at: "{0}"',
    'curlError'       => '{0} : {1}', // '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" சரியான பேச்சுவார்த்தை (Negotiation) வகை அல்ல. மீடியா, எழுத்துக்குறி, குறியாக்கம், மொழி இவற்றில் ஒன்றாக இருக்க வேண்டும்.', // '"{0}" is not a valid negotiation type. Must be one of: media, charset, encoding, language.',
    'invalidJSON'            => 'JSON சரத்தை அலசுவதில் தோல்வி. பிழை: {0}', // 'Failed to parse JSON string. Error: {0}',
    'unsupportedJSONFormat'  => 'வழங்கப்பட்ட JSON வடிவம் ஆதரிக்கப்படவில்லை.', // 'The provided JSON format is not supported.',

    // Message
    'invalidHTTPProtocol' => 'தவறான HTTP Protocol பதிப்பு: {0}', // 'Invalid HTTP Protocol Version: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'அனைத்து பேச்சுவார்த்தைகளுக்கும் (Negotiations) நீங்கள் ஆதரவு மதிப்புகளின் வரிசையை வழங்க வேண்டும்.', // 'You must provide an array of supported values to all Negotiations.',

    // RedirectResponse
    'invalidRoute' => '"{0}"க்கான வழியைக் கண்டறிய முடியவில்லை.', // 'The route for "{0}" cannot be found.',

    // DownloadResponse
    'cannotSetBinary'        => 'கோப்பு பாதையை அமைக்கும் போது binary ஆக அமைக்க முடியாது.', // 'When setting filepath cannot set binary.',
    'cannotSetFilepath'      => 'binary அமைக்கும் போது கோப்பு பாதையை அமைக்க முடியாது: "{0}"', // 'When setting binary cannot set filepath: "{0}"',
    'notFoundDownloadSource' => 'பதிவிறக்க உடல் (download body) ஆதாரம் கிடைக்கவில்லை.', // 'Not found download body source.',
    'cannotSetCache'         => 'பதிவிறக்குவதற்கு தற்காலிக சேமிப்பு (caching) செய்வதை இது ஆதரிக்காது.', // 'It does not support caching for downloading.',
    'cannotSetStatusCode'    => 'பதிவிறக்குவதற்கான நிலைக் குறியீட்டை மாற்றுவதற்கு இது ஆதரவளிக்காது. குறியீடு: {0}, காரணம்: {1}', // 'It does not support change status code for downloading. code: {0}, reason: {1}',

    // Response
    'missingResponseStatus' => 'HTTP பதிலில் நிலைக் குறியீடு இல்லை', // 'HTTP Response is missing a status code',
    'invalidStatusCode'     => '{0} என்பது சரியான HTTP ரிட்டர்ன் நிலைக் குறியீடு அல்ல', // '{0} is not a valid HTTP return status code',
    'unknownStatusCode'     => 'அறியப்படாத HTTP நிலைக் குறியீடு செய்தி இல்லாமல் வழங்கப்பட்டுள்ளது: {0}', // 'Unknown HTTP status code provided with no message: {0}',

    // URI
    'cannotParseURI'       => 'URIயை அலச முடியவில்லை: "{0}"', // 'Unable to parse URI: "{0}"',
    'segmentOutOfRange'    => 'கோரிக்கை URI பிரிவு வரம்பிற்கு வெளியே உள்ளது: "{0}"', // 'Request URI segment is out of range: "{0}"',
    'invalidPort'          => 'Ports 0 மற்றும் 65535 க்கு இடையில் இருக்க வேண்டும். கொடுக்கப்பட்டுள்ளது: {0}', // 'Ports must be between 0 and 65535. Given: {0}',
    'malformedQueryString' => 'வினவல் சரங்களில் (Query Strings) URI துண்டுகள் இருக்கக்கூடாது.', // 'Query strings may not include URI fragments.',

    // Page Not Found
    'pageNotFound'       => 'பக்கம் கிடைக்கவில்லை', // 'Page Not Found',
    'emptyController'    => 'கட்டுப்படுத்தி குறிப்பிடப்படவில்லை.', // 'No Controller specified.',
    'controllerNotFound' => 'கட்டுப்படுத்தி அல்லது அதன் முறை காணப்படவில்லை: {0}::{1}', // 'Controller or its method is not found: {0}::{1}',
    'methodNotFound'     => 'கட்டுப்படுத்தி முறை காணப்படவில்லை: "{0}"', // 'Controller method is not found: "{0}"',
    'localeNotSupported' => 'மொழி ஆதரிக்கப்படவில்லை: {0}', // 'Locale is not supported: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'நீங்கள் கோரிய செயல் அனுமதிக்கப்படவில்லை.', // 'The action you requested is not allowed.',

    // Uploaded file moving
    'alreadyMoved' => 'பதிவேற்றிய கோப்பு ஏற்கனவே நகர்த்தப்பட்டுள்ளது.', // 'The uploaded file has already been moved.',
    'invalidFile'  => 'அசல் கோப்பு சரியான கோப்பு அல்ல.', // 'The original file is not a valid file.',
    'moveFailed'   => '"{0}" கோப்பை "{1}"க்கு நகர்த்த முடியவில்லை. காரணம்: {2}', // 'Could not move file "{0}" to "{1}". Reason: {2}',

    'uploadErrOk'        => 'கோப்பு வெற்றிகரமாக பதிவேற்றப்பட்டது.', // 'The file uploaded with success.',
    'uploadErrIniSize'   => '"%s" கோப்பு உங்கள் upload_max_filesize ini கட்டளையை மீறுகிறது.', // 'The file "%s" exceeds your upload_max_filesize ini directive.',
    'uploadErrFormSize'  => '"%s" கோப்பு உங்கள் படிவத்தில் வரையறுக்கப்பட்ட பதிவேற்ற வரம்பை மீறுகிறது.', // 'The file "%s" exceeds the upload limit defined in your form.',
    'uploadErrPartial'   => '"%s" கோப்பு ஓரளவு மட்டுமே பதிவேற்றப்பட்டது.', // 'The file "%s" was only partially uploaded.',
    'uploadErrNoFile'    => 'கோப்பு எதுவும் பதிவேற்றப்படவில்லை.', // 'No file was uploaded.',
    'uploadErrCantWrite' => '"%s" கோப்பை வட்டில் எழுத முடியவில்லை.', // 'The file "%s" could not be written on disk.',
    'uploadErrNoTmpDir'  => 'கோப்பை பதிவேற்ற முடியவில்லை: தற்காலிக கோப்பகம் இல்லை.', // 'File could not be uploaded: missing temporary directory.',
    'uploadErrExtension' => 'PHP நீட்டிப்பு மூலம் கோப்பு பதிவேற்றம் நிறுத்தப்பட்டது.', // 'File upload was stopped by a PHP extension.',
    'uploadErrUnknown'   => 'அறியப்படாத பிழை காரணமாக "%s" கோப்பு பதிவேற்றப்படவில்லை.', // 'The file "%s" was not uploaded due to an unknown error.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite அமைப்பானது None, Lax, Strict, அல்லது blank string ஆக இருக்க வேண்டும். வழங்கப்பட்டது: {0}', // 'The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}',
];
