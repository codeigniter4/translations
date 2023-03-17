<?php

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
    'missingCurl'     => 'CURLRequest ക്ലാസ് ഉപയോഗിക്കുന്നതിന് ചുരുളൻ സജീവമാക്കണം.',
    'invalidSSLKey'   => 'SSL കീ സജ്ജമാക്കാൻ കഴിയില്ല.{0} സാധുവായ ഒരു ഫയലല്ല.',
    'sslCertNotFound' => 'SSL സർട്ടിഫിക്കറ്റ് കണ്ടെത്താൻ കഴിഞ്ഞില്ല: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} സാധുവായ ഒരു ചർച്ചാ തരം അല്ല.ഇവയിലൊന്ന് ഇതായിരിക്കണം: മീഡിയ, പ്രതീകങ്ങൾ സജ്ജമാക്കി, എൻകോഡിംഗ്, ഭാഷ.',

    // Message
    'invalidHTTPProtocol' => 'എച്ച്ടിടിപി പ്രോട്ടോക്കോൾ പതിപ്പ് അസാധുവാണ്.ഒരാളിൽ ഒന്ന് ആയിരിക്കണം: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'എല്ലാ ചർച്ചകളിലും പിന്തുണയുള്ള മൂല്യങ്ങളുടെ ഒരു നിര നിങ്ങൾ നൽകണം.',

    // RedirectResponse
    'invalidRoute' => '"{0}" അതിന്റെ റൂട്ട് കണ്ടെത്താൻ കഴിയില്ല.',

    // DownloadResponse
    'cannotSetBinary'        => 'ഫയൽപാത്ത് സജ്ജമാകുമ്പോൾ ബൈനറി സജ്ജമാക്കാൻ കഴിയില്ല. ',
    'cannotSetFilepath'      => 'ഫയൽ പാത്ത് സജ്ജമാക്കാൻ ബൈറിക്ക് കഴിയുമ്പോൾ: {0} ',
    'notFoundDownloadSource' => 'ബോഡി ഉറവിടം ഡൗൺലോഡുചെയ്യുക. ',
    'cannotSetCache'         => 'ഡൗൺലോഡ് ൺലോഡ് ചെയ്യാൻ ഇത് കാഷെയെ പിന്തുണയ്ക്കുന്നില്ല. ',
    'cannotSetStatusCode'    => 'ഡൗൺലോഡുചെയ്യുന്നതിനുള്ള സ്റ്റാറ്റസ് കോഡ് മാറ്റത്തെ ഇത് പിന്തുണയ്ക്കുന്നില്ല.കോഡ്: {0}, കാരണം: {1}',

    // Response
    'missingResponseStatus' => 'എച്ച്ടിടിപി പ്രതികരണമായി ഒരു സ്റ്റാറ്റസ് കോഡ് ഇല്ല',
    'invalidStatusCode'     => '{0} സാധുവായ ഒരു എച്ച്ടിടിപി റിട്ടേൺ സ്റ്റാറ്റസ് കോഡ് അല്ല',
    'unknownStatusCode'     => 'ഒരു സന്ദേശവുമില്ലാതെ അജ്ഞാത എച്ച്ടിടിപി സ്റ്റാറ്റസ് കോഡ് നൽകി: {0}',

    // URI
    'cannotParseURI'       => 'URI പാഴ്സുചെയ്യാനായില്ല: {0}',
    'segmentOutOfRange'    => 'URI സെഗ്മെന്റ് ശ്രേണിക്ക് പുറത്താണ് അഭ്യർത്ഥിക്കുക: {0}',
    'invalidPort'          => 'പോർട്ടുകൾ 0-നും 65535-നും ഇടയിലായിരിക്കണം. കൊടുത്തു: {0}',
    'malformedQueryString' => 'അന്വേഷണ സ്ട്രിംഗുകളിൽ URI ശകലങ്ങൾ അടങ്ങിയിരിക്കണമെന്നില്ല.',

    // Page Not Found
    'pageNotFound'       => 'പേജ് കണ്ടെത്തിയില്ല',
    'emptyController'    => 'കൺട്രോളറും വ്യക്തമാക്കിയിട്ടില്ല.',
    'controllerNotFound' => 'കൺട്രോളർ അല്ലെങ്കിൽ അതിന്റെ നടപടിക്രമം കണ്ടെത്താൻ കഴിഞ്ഞില്ല: {0}::{1}',
    'methodNotFound'     => 'റെഗുലേറ്ററി രീതി കണ്ടെത്താനായില്ല: {0}',
    'localeNotSupported' => 'ലോക്ക് പിന്തുണയ്ക്കുന്നില്ല: {0}।',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'നിങ്ങൾ അഭ്യർത്ഥിച്ച പ്രവർത്തനം അനുവദനീയമല്ല.',

    // Uploaded file moving
    'alreadyMoved' => 'അപ്ലോഡുചെയ്തു ഫയൽ ഇതിനകം നീക്കംചെയ്തു. ',
    'invalidFile'  => 'യഥാർത്ഥ ഫയൽ സാധുവായ ഒരു ഫയലല്ല. ',
    'moveFailed'   => '{0} മുതൽ {1} ({2}) വരെ നീങ്ങാൻ കഴിഞ്ഞില്ല',

    'uploadErrOk'        => 'ഫയൽ അപ്‌ലോഡ് ചെയ്തു.',
    'uploadErrIniSize'   => '"%s" ഫയൽ നിങ്ങളുടെ upload_max_filesize ini ഡയറക്‌ടീവിനേക്കാൾ കൂടുതലാണ്.',
    'uploadErrFormSize'  => '"%s" ഫയൽ നിങ്ങളുടെ ഫോമിൽ നിർവചിച്ചിരിക്കുന്ന അപ്‌ലോഡ് പരിധി കവിഞ്ഞു.',
    'uploadErrPartial'   => '"%s" ഫയൽ ഭാഗികമായി മാത്രമേ അപ്‌ലോഡ് ചെയ്തിട്ടുള്ളൂ.',
    'uploadErrNoFile'    => 'ഫയലുകളൊന്നും അപ്ലോഡുചെയ്തു.',
    'uploadErrCantWrite' => '"%s" ഫയൽ ഡിസ്കിൽ എഴുതാൻ കഴിയില്ല.',
    'uploadErrNoTmpDir'  => 'ഫയൽ അപ്ലോഡ് ചെയ്യാൻ കഴിഞ്ഞില്ല: താൽക്കാലിക ഡയറക്ടറി കാണുന്നില്ല.',
    'uploadErrExtension' => 'ഫയൽ ഒരു പിഎച്ച്പി വിപുലീകരണം അടച്ചു. ',
    'uploadErrUnknown'   => 'ഒരു അജ്ഞാത പിശക് കാരണം "%s" ഫയൽ അപ്ലോഡ് ചെയ്തില്ല.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'ഒരേസൈറ്റ് ക്രമീകരണം ഒന്നുമല്ല, അയഞ്ഞതോ കർശനമായതോ ശൂന്യമായതോ ആയ സ്ട്രിംഗ് ആയിരിക്കണം. കൊടുത്തു: {0}',
];
