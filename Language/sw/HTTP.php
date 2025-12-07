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
    'missingCurl'     => 'CURL lazima iwe imewezeshwa ili kutumia darasa la CURLRequest.',
    'invalidSSLKey'   => 'Imeshindwa kuweka ufunguo wa SSL. {0} sio faili halali.',
    'sslCertNotFound' => 'Cheti cha SSL hakijapatikana: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} sio aina halali ya majadiliano. Lazima iwe mojawapo ya: media, charset, encoding, language.',
    'invalidJSON'            => 'Imeshindwa kuchanganua mfuatano wa JSON. Hitilafu: {0}',
    'unsupportedJSONFormat'  => 'Muundo wa JSON uliotolewa hausaidii.',

    // Message
    'invalidHTTPProtocol' => 'Toleo la itifaki ya HTTP sio sahihi. Lazima liwe mojawapo ya: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Lazima utoe safu ya thamani zilizoungwa mkono kwa Majadiliano yote.',

    // RedirectResponse
    'invalidRoute' => '{0} sio njia halali.',

    // DownloadResponse
    'cannotSetBinary'        => 'Ikiwa njia imewekwa, muundo wa binary hauwezi kuwekwa.',
    'cannotSetFilepath'      => 'Wakati muundo umewekwa kama binary, njia haiwezi kuwekwa: {0}',
    'notFoundDownloadSource' => 'Mwili wa chanzo cha upakuaji haujapatikana.',
    'cannotSetCache'         => 'Hifadhi ya kiolesura cha upakuaji haitumiki.',
    'cannotSetStatusCode'    => 'Kubadilisha msimbo wa majibu ya upakuaji haitumiki. msimbo: {0}, sababu: {1}',

    // Response
    'missingResponseStatus' => 'Majibu hayana msimbo wa hali ya HTTP',
    'invalidStatusCode'     => '{0} sio msimbo halali wa hali ya HTTP.',
    'unknownStatusCode'     => 'Msimbo wa hali ya HTTP usiojulikana umechukuliwa bila ujumbe: {0}',

    // URI
    'cannotParseURI'       => 'Hawezi kuchanganua URI: {0}',
    'segmentOutOfRange'    => 'Kipande cha URI cha ombi kiko nje ya safu: {0}',
    'invalidPort'          => 'Bandari lazima ziwe kati ya 0 na 65535. Iliyotolewa: {0}',
    'malformedQueryString' => 'Mistari ya swala haiwezi kujumuisha vipande vya URI.',

    // Page Not Found
    'pageNotFound'       => 'Ukurasa haujapatikana.',
    'emptyController'    => 'Hakuna kudhibiti maalum.',
    'controllerNotFound' => 'Mdhibiti au njia yake haijapatikana: {0}::{1}',
    'methodNotFound'     => 'Njia ya kudhibiti haijapatikana: {0}',
    'localeNotSupported' => 'Lugha zisizosaidiwa: {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'Ombi lako halikubaliki.',

    // Uploaded file moving
    'alreadyMoved' => 'Faili iliyopakiwa tayari imesongwa.',
    'invalidFile'  => 'Faili ya awali sio faili halali.',
    'moveFailed'   => 'Haikuweza kusogeza faili {0} hadi {1} ({2})',

    'uploadErrOk'        => 'Faili imepakiwa kwa mafanikio.',
    'uploadErrIniSize'   => 'Faili "%s" inazidi kikomo cha "upload_max_filesize" cha ini.',
    'uploadErrFormSize'  => 'Faili "%s" inazidi kikomo cha upakiaji kilichowekwa kwenye fomu.',
    'uploadErrPartial'   => 'Faili "%s" ilipakiwa kwa sehemu tu.',
    'uploadErrNoFile'    => 'Hakuna faili iliyopakiwa.',
    'uploadErrCantWrite' => 'Imeshindwa kuandika faili "%s" kwenye diski.',
    'uploadErrNoTmpDir'  => 'Haikuweza kupakia faili: hakuna saraka la muda.',
    'uploadErrExtension' => 'Upakiaji wa faili ulisimamishwa na ugani wa PHP.',
    'uploadErrUnknown'   => 'Faili "%s" haikupakiwa kwa sababu ya hitilafu isiyojulikana.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'Mpangilio wa SameSite lazima uwe None, Lax, Strict, au mfuatano tupu. Iliyotolewa: {0}',
];
