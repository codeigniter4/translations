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
    'missingCurl'     => 'CURLRequest வகுப்பைப் பயன்படுத்த CURL ஐ இயக்க வேண்டும்.',
    'invalidSSLKey'   => 'SSL விசையை அமைக்க முடியாது. "{0}" சரியான கோப்பு அல்ல.',
    'sslCertNotFound' => 'SSL சான்றிதழ் இங்கு காணப்படவில்லை: "{0}"',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" சரியான பேச்சுவார்த்தை (Negotiation) வகை அல்ல. மீடியா, எழுத்துக்குறி, குறியாக்கம், மொழி இவற்றில் ஒன்றாக இருக்க வேண்டும்.',
    'invalidJSON'            => 'JSON சரத்தை அலசுவதில் தோல்வி. பிழை: {0}',
    'unsupportedJSONFormat'  => 'வழங்கப்பட்ட JSON வடிவம் ஆதரிக்கப்படவில்லை.',

    // Message
    'invalidHTTPProtocol' => 'தவறான HTTP Protocol பதிப்பு: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'அனைத்து பேச்சுவார்த்தைகளுக்கும் (Negotiations) நீங்கள் ஆதரவு மதிப்புகளின் வரிசையை வழங்க வேண்டும்.',

    // RedirectResponse
    'invalidRoute' => '"{0}"க்கான வழியைக் கண்டறிய முடியவில்லை.',

    // DownloadResponse
    'cannotSetBinary'        => 'கோப்பு பாதையை அமைக்கும் போது binary ஆக அமைக்க முடியாது.',
    'cannotSetFilepath'      => 'binary அமைக்கும் போது கோப்பு பாதையை அமைக்க முடியாது: "{0}"',
    'notFoundDownloadSource' => 'பதிவிறக்க உடல் (download body) ஆதாரம் கிடைக்கவில்லை.',
    'cannotSetCache'         => 'பதிவிறக்குவதற்கு தற்காலிக சேமிப்பு (caching) செய்வதை இது ஆதரிக்காது.',
    'cannotSetStatusCode'    => 'பதிவிறக்குவதற்கான நிலைக் குறியீட்டை மாற்றுவதற்கு இது ஆதரவளிக்காது. குறியீடு: {0}, காரணம்: {1}',

    // Response
    'missingResponseStatus' => 'HTTP பதிலில் நிலைக் குறியீடு இல்லை',
    'invalidStatusCode'     => '{0} என்பது சரியான HTTP ரிட்டர்ன் நிலைக் குறியீடு அல்ல',
    'unknownStatusCode'     => 'அறியப்படாத HTTP நிலைக் குறியீடு செய்தி இல்லாமல் வழங்கப்பட்டுள்ளது: {0}',

    // URI
    'cannotParseURI'       => 'URIயை அலச முடியவில்லை: "{0}"',
    'segmentOutOfRange'    => 'கோரிக்கை URI பிரிவு வரம்பிற்கு வெளியே உள்ளது: "{0}"',
    'invalidPort'          => 'Ports 0 மற்றும் 65535 க்கு இடையில் இருக்க வேண்டும். கொடுக்கப்பட்டுள்ளது: {0}',
    'malformedQueryString' => 'வினவல் சரங்களில் (Query Strings) URI துண்டுகள் இருக்கக்கூடாது.',

    // Page Not Found
    'pageNotFound'       => 'பக்கம் கிடைக்கவில்லை',
    'emptyController'    => 'கட்டுப்படுத்தி குறிப்பிடப்படவில்லை.',
    'controllerNotFound' => 'கட்டுப்படுத்தி அல்லது அதன் முறை காணப்படவில்லை: {0}::{1}',
    'methodNotFound'     => 'கட்டுப்படுத்தி முறை காணப்படவில்லை: "{0}"',
    'localeNotSupported' => 'மொழி ஆதரிக்கப்படவில்லை: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'நீங்கள் கோரிய செயல் அனுமதிக்கப்படவில்லை.',

    // Uploaded file moving
    'alreadyMoved' => 'பதிவேற்றிய கோப்பு ஏற்கனவே நகர்த்தப்பட்டுள்ளது.',
    'invalidFile'  => 'அசல் கோப்பு சரியான கோப்பு அல்ல.',
    'moveFailed'   => '"{0}" கோப்பை "{1}"க்கு நகர்த்த முடியவில்லை. காரணம்: {2}',

    'uploadErrOk'        => 'கோப்பு வெற்றிகரமாக பதிவேற்றப்பட்டது.',
    'uploadErrIniSize'   => '"%s" கோப்பு உங்கள் upload_max_filesize ini கட்டளையை மீறுகிறது.',
    'uploadErrFormSize'  => '"%s" கோப்பு உங்கள் படிவத்தில் வரையறுக்கப்பட்ட பதிவேற்ற வரம்பை மீறுகிறது.',
    'uploadErrPartial'   => '"%s" கோப்பு ஓரளவு மட்டுமே பதிவேற்றப்பட்டது.',
    'uploadErrNoFile'    => 'கோப்பு எதுவும் பதிவேற்றப்படவில்லை.',
    'uploadErrCantWrite' => '"%s" கோப்பை வட்டில் எழுத முடியவில்லை.',
    'uploadErrNoTmpDir'  => 'கோப்பை பதிவேற்ற முடியவில்லை: தற்காலிக கோப்பகம் இல்லை.',
    'uploadErrExtension' => 'PHP நீட்டிப்பு மூலம் கோப்பு பதிவேற்றம் நிறுத்தப்பட்டது.',
    'uploadErrUnknown'   => 'அறியப்படாத பிழை காரணமாக "%s" கோப்பு பதிவேற்றப்படவில்லை.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite அமைப்பானது None, Lax, Strict, அல்லது blank string ஆக இருக்க வேண்டும். வழங்கப்பட்டது: {0}',
];
