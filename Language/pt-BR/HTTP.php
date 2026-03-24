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
    'missingCurl'     => 'O CURL precisa estar habilitado para usar a classe CURLRequest.', // 'CURL must be enabled to use the CURLRequest class.',
    'invalidSSLKey'   => 'Não foi possível definir a chave SSL. "{0}" não é um arquivo válido.', // 'Cannot set SSL Key. "{0}" is not a valid file.',
    'sslCertNotFound' => 'Certificado SSL não encontrado em: "{0}"', // 'SSL certificate not found at: "{0}"',
    'curlError'       => '{0} : {1}', // '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" não é um tipo de negociação válido. Deve ser um desses: media, charset, encoding, language.', // '"{0}" is not a valid negotiation type. Must be one of: media, charset, encoding, language.',
    'invalidJSON'            => 'Falha ao analisar a string JSON. Erro: {0}', // 'Failed to parse JSON string. Error: {0}',
    'unsupportedJSONFormat'  => 'O formato JSON fornecido não é suportado.', // 'The provided JSON format is not supported.',

    // Message
    'invalidHTTPProtocol' => 'Versão do protocolo HTTP inválida: {0}', // 'Invalid HTTP Protocol Version: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Você deve fornecer um array de valores suportados para todas as Negociações.', // 'You must provide an array of supported values to all Negotiations.',

    // RedirectResponse
    'invalidRoute' => 'A rota para "{0}" não foi encontrada.', // 'The route for "{0}" cannot be found.',

    // DownloadResponse
    'cannotSetBinary'        => 'Não foi possível definir o binário ao definir o caminho do arquivo.', // 'When setting filepath cannot set binary.',
    'cannotSetFilepath'      => 'Não foi possível definir o caminho do arquivo: "{0}"', // 'When setting binary cannot set filepath: "{0}"',
    'notFoundDownloadSource' => 'Origem do download não encontrada.', // 'Not found download body source.',
    'cannotSetCache'         => 'O cache para downloads não é suportado', // 'It does not support caching for downloading.',
    'cannotSetStatusCode'    => 'Não é possível alterar o código de status do download. Código: {0}, motivo: {1}', // 'It does not support change status code for downloading. code: {0}, reason: {1}',

    // Response
    'missingResponseStatus' => 'A resposta HTTP não possui um código de status', // 'HTTP Response is missing a status code',
    'invalidStatusCode'     => '{0} não é um código de status HTTP válido', // '{0} is not a valid HTTP return status code',
    'unknownStatusCode'     => 'Código de status HTTP desconhecido, sem mensagem: {0}', // 'Unknown HTTP status code provided with no message: {0}',

    // URI
    'cannotParseURI'       => 'Não foi possível analisar a URI: "{0}"', // 'Unable to parse URI: "{0}"',
    'segmentOutOfRange'    => 'O segmento da URI da solicitação está fora do intervalo: "{0}"', // 'Request URI segment is out of range: "{0}"',
    'invalidPort'          => 'As portas devem estar entre 0 e 65535. Fornecida: {0}', // 'Ports must be between 0 and 65535. Given: {0}',
    'malformedQueryString' => 'As strings de consulta não podem incluir fragmentos de URI.', // 'Query strings may not include URI fragments.',

    // Page Not Found
    'pageNotFound'       => 'Página não encontrada', // 'Page Not Found',
    'emptyController'    => 'Nenhum Controller especificado.', // 'No Controller specified.',
    'controllerNotFound' => 'Controller ou método não encontrado: {0}::{1}', // 'Controller or its method is not found: {0}::{1}',
    'methodNotFound'     => 'Método do Controller não encontrado: "{0}"', // 'Controller method is not found: "{0}"',
    'localeNotSupported' => 'Idioma não suportado: {0}', // 'Locale is not supported: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'A ação solicitada não é permitida.', // 'The action you requested is not allowed.',

    // Uploaded file moving
    'alreadyMoved' => 'O arquivo enviado já foi movido.', // 'The uploaded file has already been moved.',
    'invalidFile'  => 'O arquivo original não é válido.', // 'The original file is not a valid file.',
    'moveFailed'   => 'Não foi possível mover o arquivo "{0}" para "{1}". Motivo: "{2}"', // 'Could not move file "{0}" to "{1}". Reason: {2}',

    'uploadErrOk'        => 'O arquivo foi enviado.', // 'The file uploaded with success.',
    'uploadErrIniSize'   => 'O arquivo "%s" excede o tamanho máximo permitido pela diretiva upload_max_filesize do seu arquivo .ini.', // 'The file "%s" exceeds your upload_max_filesize ini directive.',
    'uploadErrFormSize'  => 'O arquivo "%s" excede o limite de envio definido no seu formulário.', // 'The file "%s" exceeds the upload limit defined in your form.',
    'uploadErrPartial'   => 'O arquivo "%s" foi enviado apenas parcialmente.', // 'The file "%s" was only partially uploaded.',
    'uploadErrNoFile'    => 'Nenhum arquivo foi enviado.', // 'No file was uploaded.',
    'uploadErrCantWrite' => 'Não foi possível gravar o arquivo "%s" no disco.', // 'The file "%s" could not be written on disk.',
    'uploadErrNoTmpDir'  => 'Não foi possível enviar o arquivo: diretório temporário ausente.', // 'File could not be uploaded: missing temporary directory.',
    'uploadErrExtension' => 'O envio do arquivo foi interrompido por uma extensão doPHP.', // 'File upload was stopped by a PHP extension.',
    'uploadErrUnknown'   => 'O arquivo "%s" não foi enviado devido a um erro desconhecido.', // 'The file "%s" was not uploaded due to an unknown error.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'A configuração SameSite deve ser None, Lax, Strict ou uma string vazia. Fornecido: {0}', // 'The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}',
];
