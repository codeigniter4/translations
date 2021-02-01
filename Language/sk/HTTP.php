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
	'missingCurl'     => 'Aby bolo možné používať triedu CURLRequest, musí byť povolená funkcia CURL.',
	'invalidSSLKey'   => 'Nie je možné nastaviť kľúč SSL. {0} nie je platný súbor.',
	'sslCertNotFound' => 'SSL certifikát nebol nájdený na: {0}',
	'curlError'       => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType' => '{0} nie je platný typ vyjednávania. Musí to byť: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol' => 'Neplatná verzia protokolu HTTP. Musí to byť jedno z: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Musíte poskytnúť pole podporovaných hodnôt pre všetky Negotiations.',

	// RedirectResponse
	'invalidRoute' => '{0} trasu nemožno nájsť pri spätnom smerovaní.',

	// DownloadResponse
	'cannotSetBinary'        => 'Pri nastavovaní filepath nie je možné nastaviť binary.',
	'cannotSetFilepath'      => 'Pri nastavovaní binary nie je možné nastaviť filepath: {0}',
	'notFoundDownloadSource' => 'Nenašiel sa zdroj tela sťahovania.',
	'cannotSetCache'         => 'Nepodporuje ukladanie do vyrovnávacej pamäte pre sťahovanie.',
	'cannotSetStatusCode'    => 'Nepodporuje stavový kód chnage na stiahnutie. kód: {0}, dôvod: {1}',

	// Response
	'missingResponseStatus' => 'V odpovedi HTTP chýba stavový kód',
	'invalidStatusCode'     => '{0} nie je platný návratový stavový kód HTTP',
	'unknownStatusCode'     => 'Neznámy stavový kód HTTP poskytnutý bez správy: {0}',

	// URI
	'cannotParseURI'       => 'Nemožno analyzovať URI: {0}',
	'segmentOutOfRange'    => 'Segment URI žiadosti je mimo rozsahu: {0}',
	'invalidPort'          => 'Porty musia byť medzi 0 a 65535. Zadané: {0}',
	'malformedQueryString' => 'Reťazce dopytov nemusia obsahovať fragmenty URI.',

	// Page Not Found
	'pageNotFound'       => 'Stránka sa nenašla',
	'emptyController'    => 'Nie je zadaný žiadny Controller.',
	'controllerNotFound' => 'Controller alebo jeho metóda sa nenašla: {0}::{1}',
	'methodNotFound'     => 'Metóda Controller-u sa nenašla: {0}',

	// CSRF
	'disallowedAction' => 'Požadovaná akcia nie je povolená.',

	// Uploaded file moving
	'alreadyMoved' => 'Nahraný súbor už bol presunutý.',
	'invalidFile'  => 'Pôvodný súbor nie je platný.',
	'moveFailed'   => 'Nepodarilo sa presunúť súbor z {0} do {1} ({2})',

	'uploadErrOk'        => 'Súbor bol úspešne nahratý.',
	'uploadErrIniSize'   => 'Súbor "%s" prekračuje vašu direktívu upload_max_filesize ini.',
	'uploadErrFormSize'  => 'Súbor "%s" prekračuje limit pre upload stanovený vo vašom formulári.',
	'uploadErrPartial'   => 'Súbor "%s" bol nahraný iba čiastočne.',
	'uploadErrNoFile'    => 'Nebol nahraný žiaden súbor.',
	'uploadErrCantWrite' => 'Súbor "%s" sa nedal zapísať na disk.',
	'uploadErrNoTmpDir'  => 'Súbor sa nepodarilo nahrať: chýba dočasný adresár.',
	'uploadErrExtension' => 'Nahrávanie súborov bolo zastavené rozšírením PHP.',
	'uploadErrUnknown'   => 'Súbor "%s" nebol nahraný kvôli neznámej chybe.',

	// SameSite setting
	'invalidSameSiteSetting' => 'SameSite nastavenie musí byť None, Lax, Strict, alebo prázdny reťazec. Zadané: {0}',
];
