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
    'missingCurl'     => 'CURL debe estar habilitado para usar a clase CURLRequest.', // 'CURL must be enabled to use the CURLRequest class.',
    'invalidSSLKey'   => 'Non se pode estabelecer a clave SSL. {0} non é un arquivo válido.', // 'Cannot set SSL Key. {0} is not a valid file.',
    'sslCertNotFound' => 'Certificado SSL non atopado en: {0}', // 'SSL certificate not found at: {0}',
    'curlError'       => '{0} : {1}', // '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" non é un tipo de negociación válido. Debe ser un de: media, charset, encoding, language.', // '{0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.',
    'invalidJSON'            => 'Non se puido analizar a cadea JSON. Erro: {0}', // 'Failed to parse JSON string. Error: {0}',
    'unsupportedJSONFormat'  => 'O formato JSON proporcionado non é compatible', // 'The provided JSON format is not supported.',,

    // Message
    'invalidHTTPProtocol' => 'Versión de protocolo HTTP non válida. Debe ser unha de: {0}', // 'Invalid HTTP Protocol Version. Must be one of: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Debe proporcionar un array de valores compatibles a tódalas negociacións.', // 'You must provide an array of supported values to all Negotiations.',

    // RedirectResponse
    'invalidRoute' => 'A ruta para {0} non se pode atopar.', // 'The route for "{0}" cannot be found.',

    // DownloadResponse
    'cannotSetBinary'        => 'Ao estabelecer a ruta do arquivo non se pode estabelecer binario.', // 'When setting filepath cannot set binary.',
    'cannotSetFilepath'      => 'Cando se configura binario non se pode estabelecer ruta de arquivo: {0}', // 'When setting binary cannot set filepath: {0}',
    'notFoundDownloadSource' => 'Non se atopou a fonte do corpo de descarga.', // 'Not found download body source.',
    'cannotSetCache'         => 'Non é compatible co almacenamento na caché para a descarga.', // 'It does not support caching for downloading.',
    'cannotSetStatusCode'    => 'Non admite o código de cambio de estado para descargar. código: {0}, razón: {1}', // 'It does not support change status code for downloading. code: {0}, reason: {1}',

    // Response
    'missingResponseStatus' => 'Resposta HTTP sin código de estado', // 'HTTP Response is missing a status code',
    'invalidStatusCode'     => '{0} non é un código de estado de retorno HTTP válido', // '{0} is not a valid HTTP return status code',
    'unknownStatusCode'     => 'Código de estado HTTP descoñecido provisto sen mensaxe: {0}', // 'Unknown HTTP status code provided with no message: {0}',

    // URI
    'cannotParseURI'       => 'Non se pode analizar a URI: {0}', // 'Unable to parse URI: {0}',
    'segmentOutOfRange'    => 'O segmento de solicitude de URI está fora de rango: {0}', // 'Request URI segment is our of range: {0}',
    'invalidPort'          => 'Os portos deben estar entre 0 e 65535. Dado: {0}', // 'Ports must be between 0 and 65535. Given: {0}',
    'malformedQueryString' => 'As cadeas de consulta poden non incluir fragmentos de URI.', // 'Query strings may not include URI fragments.',

    // Page Not Found
    'pageNotFound'       => 'Páxina non atopada', // 'Page Not Found',
    'emptyController'    => 'Ningún controlador especificado.', // 'No Controller specified.',
    'controllerNotFound' => 'Controlador ou seu método non atopado: {0}::{1}', // 'Controller or its method is not found: {0}::{1}',
    'methodNotFound'     => 'Non se atopou o método do controlador: {0}', // 'Controller method is not found: {0}',
    'localeNotSupported' => 'A configuración rexional non é compatible: {0}', // 'Locale is not supported: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'A acción que solicitaches non está permitida.', // 'The action you requested is not allowed.',

    // Uploaded file moving
    'alreadyMoved' => 'O arquivo cargado xa se moveu.', // 'The uploaded file has already been moved.',
    'invalidFile'  => 'O arquivo orixinal non é un arquivo válido.', // 'The original file is not a valid file.',
    'moveFailed'   => 'Non se puido mover o arquivo {0} a {1} ({2})', // 'Could not move file {0} to {1} ({2})',

    'uploadErrOk'        => 'Arquivo cargado con éxito.', // 'The file uploaded with success.',
    'uploadErrIniSize'   => 'O arquivo "%s" excede a directiva ini upload_max_filesize.', // 'The file "%s" exceeds your upload_max_filesize ini directive.',
    'uploadErrFormSize'  => 'O arquivo "%s" excede o límite de carga definido no formulario.', // 'The file "%s" exceeds the upload limit defined in your form.',
    'uploadErrPartial'   => 'O arquivo "%s" só se cargou parcialmente.', // 'The file "%s" was only partially uploaded.',
    'uploadErrNoFile'    => 'Non se cargou ningún arquivo.', // 'No file was uploaded.',
    'uploadErrCantWrite' => 'O arquivo "%s" non se puido escribir no disco.', // 'The file "%s" could not be written on disk.',
    'uploadErrNoTmpDir'  => 'O arquivo non se puido cargar: falta o cartafol temporal.', // 'File could not be uploaded: missing temporary directory.',
    'uploadErrExtension' => 'A carga de arquivos foi detida por unha extensión PHP.', // 'File upload was stopped by a PHP extension.',
    'uploadErrUnknown'   => 'O arquivo "%s" non se cargou debido a un erro descoñecido.', // 'The file "%s" was not uploaded due to an unknown error.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'A configuración de SameSite debe ser None, Lax, Strict o unha cadea en branco. Dado: {0}', // 'The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}',
];
