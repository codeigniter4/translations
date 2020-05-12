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
   'cannotSetCache'             => 'ഡൗൺലോഡുചെയ്യുന്നതിനുള്ള കാഷിംഗിനെ ഇത് പിന്തുണയ്‌ക്കുന്നില്ല.',
   'cannotSetStatusCode'        => 'download ചെയ്യുന്നതിനുള്ള സ്റ്റാറ്റസ് കോഡ് മാറ്റുന്നതിനെ ഇത് പിന്തുണയ്‌ക്കുന്നില്ല. കോഡ്: {0}, കാരണം: {1}',

	// Response
   'missingResponseStatus'      => 'എച്ച്ടിടിപി പ്രതികരണത്തിന് ഒരു സ്റ്റാറ്റസ് കോഡ് കാണുന്നില്ല',
   'invalidStatusCode'          => '{0, string} സാധുവായ എച്ച്ടിടിപി റിട്ടേൺ സ്റ്റാറ്റസ് കോഡല്ല',
   'unknownStatusCode'          => 'അജ്ഞാത എച്ച്ടിടിപി സ്റ്റാറ്റസ് കോഡ് സന്ദേശമൊന്നുമില്ല: {0}',

	// URI
   'cannotParseURI'             => 'URI വ്യാകരിക്കാൻ കഴിയില്ല: {0}',
   'segmentOutOfRange'          => 'അഭ്യർത്ഥന URI സെഗ്മെന്റ് ഞങ്ങളുടെ പരിധിയാണ്: {0}',
   'invalidPort'                => 'തുറമുഖങ്ങൾ 0 നും 65535 നും ഇടയിലായിരിക്കണം. നൽകിയിരിക്കുന്നത്: {0}',
   'malformedQueryString'       => 'അന്വേഷണ സ്ട്രിംഗുകളിൽ URI ശകലങ്ങൾ ഉൾപ്പെടില്ല.',

	// Page Not Found
   'pageNotFound'               => 'പേജ് കണ്ടെത്തിയില്ല',
   'emptyController'            => 'കൺട്രോളറൊന്നും വ്യക്തമാക്കിയിട്ടില്ല.',
   'controllerNotFound'         => 'കൺട്രോളറോ അതിന്റെ രീതിയോ കണ്ടെത്തിയില്ല: {0} :: {1}',
   'methodNotFound'             => 'കൺട്രോളർ രീതി കണ്ടെത്തിയില്ല: {0}',

	// CSRF
   'disallowedAction'           => 'നിങ്ങൾ അഭ്യർത്ഥിച്ച പ്രവർത്തനം അനുവദനീയമല്ല.',

	// Uploaded file moving
   'alreadyMoved'               => 'അപ്‌ലോഡുചെയ്‌ത ഫയൽ ഇതിനകം നീക്കി.',
   'invalidFile'                => 'യഥാർത്ഥ ഫയൽ സാധുവായ ഫയലല്ല.',
   'moveFailed'                 => 'ഫയൽ {1} ({2}) ലേക്ക് നീക്കാൻ കഴിഞ്ഞില്ല',

   'uploadErrOk'                => 'ഫയൽ വിജയകരമായി അപ്‌ലോഡുചെയ്‌തു.',
   'uploadErrIniSize'           => '"%s" ഫയൽ നിങ്ങളുടെ upload_max_filesize ini നിർദ്ദേശത്തെ കവിയുന്നു.',
   'uploadErrFormSize'          => '"%s" ഫയൽ നിങ്ങളുടെ ഫോമിൽ നിർവചിച്ചിരിക്കുന്ന അപ്‌ലോഡ് പരിധി കവിയുന്നു.',
   'uploadErrPartial'           => '"%s" ഫയൽ ഭാഗികമായി അപ്‌ലോഡുചെയ്‌തു.',
   'uploadErrNoFile'            => 'ഒരു ഫയലും അപ്‌ലോഡുചെയ്‌തിട്ടില്ല.',
   'uploadErrCantWrite'         => '"%s" ഫയൽ ഡിസ്കിൽ എഴുതാൻ കഴിഞ്ഞില്ല.',
   'uploadErrNoTmpDir'          => 'ഫയൽ അപ്‌ലോഡുചെയ്യാൻ കഴിഞ്ഞില്ല: താൽക്കാലിക ഡയറക്‌ടറി നഷ്‌ടമായി.',
   'uploadErrExtension'         => 'ഒരു PHP വിപുലീകരണം ഫയൽ അപ്‌ലോഡ് നിർത്തി.',
   'uploadErrUnknown'           => 'അജ്ഞാതമായ ഒരു പിശക് കാരണം "%s" ഫയൽ അപ്‌ലോഡ് ചെയ്തിട്ടില്ല.',
];
