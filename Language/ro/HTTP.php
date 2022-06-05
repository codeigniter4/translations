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
    'missingCurl'     => 'CURL trebuie să fie activat pentru a utiliza clasa CURLRequest.',
    'invalidSSLKey'   => 'Nu se poate seta cheia SSL. {0} nu este un fișier valid.',
    'sslCertNotFound' => 'Certificatul SSL nu a fost găsit la: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} nu este un tip de negociere valid. Trebuie să fie unul dintre: media, set de caractere, codificare, limbă.',

    // Message
    'invalidHTTPProtocol' => 'Versiunea protocolului HTTP invalidă. Trebuie să fie unul dintre: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Trebuie să furnizați o serie de valori acceptate pentru toate negocierile.',

    // RedirectResponse
    'invalidRoute' => 'Ruta {0} nu poate fi găsită în timpul direcționării inverse.',

    // DownloadResponse
    'cannotSetBinary'        => 'Când setați calea fișierului, nu se poate seta binar.',
    'cannotSetFilepath'      => 'Când setați binar, nu se poate seta calea fișierului: {0}',
    'notFoundDownloadSource' => 'Sursa de descărcare a corpului nu a fost găsită.',
    'cannotSetCache'         => 'Nu acceptă stocarea în cache pentru descărcare.',
    'cannotSetStatusCode'    => 'Nu acceptă modificarea codului de stare pentru descărcare. cod: {0}, motiv: {1}',

    // Response
    'missingResponseStatus' => 'În răspunsul HTTP lipsește un cod de stare',
    'invalidStatusCode'     => '{0} nu este un cod de stare HTTP returnat valid',
    'unknownStatusCode'     => 'Cod de stare HTTP necunoscut furnizat fără mesaj: {0}',

    // URI
    'cannotParseURI'       => 'Nu se poate analiza URI: {0}',
    'segmentOutOfRange'    => 'Segmentul URI al solicitării este în afara intervalului: {0}',
    'invalidPort'          => 'Porturile trebuie să fie între 0 și 65535. Dat: {0}',
    'malformedQueryString' => 'Este posibil ca șirurile de interogare să nu includă fragmente URI.',

    // Page Not Found
    'pageNotFound'       => 'Pagina nu a fost gasită',
    'emptyController'    => 'Fără Controller specificat.',
    'controllerNotFound' => 'Controller-ul sau metoda acestuia nu a fost găsită: {0}::{1}',
    'methodNotFound'     => 'Metoda controller-ului nu a fost găsită: {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'Acțiunea pe care ați solicitat-o nu este permisă.',

    // Uploaded file moving
    'alreadyMoved' => 'Fișierul încărcat a fost deja mutat.',
    'invalidFile'  => 'Fișierul original nu este un fișier valid.',
    'moveFailed'   => 'Nu s-a putut muta fișierul {0} în {1} ({2})',

    'uploadErrOk'        => 'Fișierul a fost încărcat cu succes.',
    'uploadErrIniSize'   => 'Fișierul "%s" depășește directiva ini upload_max_filesize.',
    'uploadErrFormSize'  => 'Fișierul "%s" depășește limita de încărcare definită în formularul dvs.',
    'uploadErrPartial'   => 'Fișierul "%s" a fost încărcat doar parțial.',
    'uploadErrNoFile'    => 'Nu a fost încărcat niciun fișier.',
    'uploadErrCantWrite' => 'Fișierul "%s" nu a putut fi scris pe disc.',
    'uploadErrNoTmpDir'  => 'Fișierul nu a putut fi încărcat: lipsește directorul temporar.',
    'uploadErrExtension' => 'Încărcarea fișierului a fost oprită de o extensie PHP.',
    'uploadErrUnknown'   => 'Fișierul "%s" nu a fost încărcat din cauza unei erori necunoscute.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'Setarea SameSite trebuie să fie None, Lax, Strict sau un șir gol. Dat: {0}',
];
