<?php

/**
 * HTTP language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     Mattias Sandström
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
   'missingCurl'                => 'CURL måste bli aktiverat för att kunna använda klassen CURLRequest.',
   'invalidSSLKey'              => 'Kan inte konfigurera SSL Key. {0} är inte en giltig fil.',
   'sslCertNotFound'            => 'SSL certifikatet kunde inte hittas: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} är inte en giltig negotiation typ. Den måste bli en av: media, charset, encoding, language.',

	// Message
   'invalidHTTPProtocol'        => 'Felaktigt HTTP Protocol Version. Måste bli en av: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'En array med giltiga värden för alla Negotiations måste anges.',

	// RedirectResponse
   'invalidRoute'               => 'Routen {0} kunde inte hittas vid reverse-routing.',

	// DownloadResponse
   'cannotSetBinary'            => 'När sökväg anges kan inte binär sättas.',
   'cannotSetFilepath'          => 'Kan inte sätta sökväg när binär är satt: {0}',
   'notFoundDownloadSource'     => 'Kunde inte hitta nedladdade filen.',
   'cannotSetCache'             => 'Stödjer inte cachening för nedladdning.',
   'cannotSetStatusCode'        => 'Stödjer inte byte av statuskod för nedladdning. Kod: {0}, anledning: {1}',

	// Response
   'missingResponseStatus'      => 'HTTP Response saknar en statuskod',
   'invalidStatusCode'          => '{0} är inte en giltig HTTP statuskod',
   'unknownStatusCode'          => 'Okänd HTTP statuskod utan meddelande: {0}',

	// URI
   'cannotParseURI'             => 'Kunde inte tolka URI: {0}',
   'segmentOutOfRange'          => 'Förfrågans URI segment utanför intervall: {0}',
   'invalidPort'                => 'Port måste anges mellan 0 och 65535. Angivet: {0}',
   'malformedQueryString'       => 'Query-strängen får inte innehålla URI-fragment.',

	// Page Not Found
   'pageNotFound'               => 'Sidan kunde inte hittas',
   'emptyController'            => 'Ingen Controller angiven.',
   'controllerNotFound'         => 'Controller eller metoden kunde inte hittas: {0}::{1}',
   'methodNotFound'             => 'Controller-methoden kunde inte hittas: {0}',

	// CSRF
   'disallowedAction'           => 'Den önskade funktionen är inte tillåten.',

	// Uploaded file moving
   'alreadyMoved'               => 'Den uppladdade filen har redan flyttats.',
   'invalidFile'                => 'Originalfilen är inte en giltig fil.',
   'moveFailed'                 => 'Kunde inte flytta filen {0} till {1} ({2})',

   'uploadErrOk'                => 'Filen laddades upp korrekt.',
   'uploadErrIniSize'           => 'Filen "%s" överstiger inställningen upload_max_filesize.',
   'uploadErrFormSize'          => 'Filen "%s" överstiger angiven begränsning på formuläret.',
   'uploadErrPartial'           => 'Enbart en del av filen "%s" laddades upp.',
   'uploadErrNoFile'            => 'Ingen fil laddades upp.',
   'uploadErrCantWrite'         => 'Filen "%s" kunde inte skrivas till disk.',
   'uploadErrNoTmpDir'          => 'Filen kunde inte laddas upp: temporärkatalog saknas.',
   'uploadErrExtension'         => 'Uppladdningen av filen stoppades av en PHP extension.',
   'uploadErrUnknown'           => 'Filen "%s" laddades inte upp på grund av ett okänt fel.',

	// SameSite setting
//   'invalidSameSiteSetting'     => 'Inställningen SameSite måste vara None, Lax, Strict, eller en blank sträng. Angivet: {0}',
];
