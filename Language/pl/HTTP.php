<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
	// CurlRequest
	'missingCurl'     => 'CURL musi mieć możliwość korzystania z klasy CURLRequest.',
	'invalidSSLKey'   => 'Nie można ustawić klucza SSL. {0} nie jest prawidłowym plikiem.',
	'sslCertNotFound' => 'Nie znaleziono certyfikatu SSL pod adresem: {0}',
	'curlError'       => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType' => '{0} nie jest prawidłowym typem negocjacji. Musi to być jeden z: mediów, zestawu znaków, kodowania, języka.',

	// Message
	'invalidHTTPProtocol' => 'Nieprawidłowa wersja protokołu HTTP. Musi być jednym z: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Musisz dostarczyć tablicę obsługiwanych wartości do wszystkich Negocjacji.',

	// RedirectResponse
	'invalidRoute' => '{0} nie jest prawidłową trasą.',

	// Response
	'missingResponseStatus' => 'W odpowiedzi HTTP brakuje kodu statusu',
	'invalidStatusCode'     => '{0} nie jest prawidłowym kodem statusu zwrotu HTTP',
	'unknownStatusCode'     => 'Nieznany kod statusu HTTP dostarczony bez komunikatu: {0}',

	// URI
	'cannotParseURI'       => 'Nie można przeanalizować identyfikatora URI: {0}',
	'segmentOutOfRange'    => 'Segment żądania identyfikatora URI jest poza zakresem: {0}',
	'invalidPort'          => 'Porty muszą należeć do zakresu od 0 do 65535. Podano: {0}',
	'malformedQueryString' => 'Łańcuchy zapytań mogą nie zawierać fragmentów URI.',

	// Page Not Found
	'pageNotFound'       => 'Strona nie została znaleziona',
	'emptyController'    => 'Nie określono kontrolera.',
	'controllerNotFound' => 'Nie znaleziono kontrolera lub jego metody: {0}::{1}',
	'methodNotFound'     => 'Nie znaleziono metody kontrolera: {0}',

	// CSRF
	'disallowedAction' => 'Żądane działanie jest niedozwolone.',

	// Uploaded file moving
	'alreadyMoved'       => 'Przesłany plik został już przeniesiony.',
	'invalidFile'        => 'Oryginalny plik nie jest prawidłowym plikiem.',
	'moveFailed'         => 'Nie można przenieść pliku {0} do {1} ({2})',
	'uploadErrOk'        => 'Plik został prawidłowo wysłany.',
	'uploadErrIniSize'   => 'Wielkość pliku "%s" przekracza wielkość określoną przez upload_max_filesize',
	'uploadErrFormSize'  => 'Wielkość pliku "%s" przekracza wielkość określoną w formularzu.',
	'uploadErrPartial'   => 'Plik "%s" został wysłany częściowo.',
	'uploadErrNoFile'    => 'Plik nie został wysłany',
	'uploadErrCantWrite' => 'Plik "%s" nie może być zapisany na dysku.',
	'uploadErrNoTmpDir'  => 'Plik nie może zostać wysłany. Brak katalogu tymczasowego.',
	'uploadErrExtension' => 'Wysyłka pliku została zablokowana przez PHP.',
	'uploadErrUnknown'   => 'Plik "%s" nie został wysłany z nieznanego powodu.',
];
