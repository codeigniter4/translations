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
    'missingCurl'     => 'CURL deve estar ativado para usar a classe CURLRequest.', // 'CURL must be enabled to use the CURLRequest class.',
    'invalidSSLKey'   => 'Não é possível definir a Chave SSL. "{0}" não é um arquivo válido.', // 'Cannot set SSL Key. "{0}" is not a valid file.',
    'sslCertNotFound' => 'Certificado SSL não encontrado em: "{0}"', // 'SSL certificate not found at: "{0}"',
    'curlError'       => '{0} : {1}', // '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" não é um tipo de negociação válido. Deve ser um dos seguintes: media, charset, encoding, language.', // '"{0}" is not a valid negotiation type. Must be one of: media, charset, encoding, language.',
    'invalidJSON'            => 'Falha ao analisar a string JSON. Erro: {0}', // 'Failed to parse JSON string. Error: {0}',
    'unsupportedJSONFormat'  => 'O formato JSON fornecido não é compatível.', // 'The provided JSON format is not supported.',

    // Message
    'invalidHTTPProtocol' => 'Versão inválida do Protocolo HTTP: {0}', // 'Invalid HTTP Protocol Version: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Você deve fornecer um array de valores suportados para todas as Negociações.', // 'You must provide an array of supported values to all Negotiations.',

    // RedirectResponse
    'invalidRoute' => 'A rota "{0}" não foi encontrada.', // 'The route for "{0}" cannot be found.',

    // DownloadResponse
    'cannotSetBinary'        => 'Ao configurar o caminho do arquivo, não foi possível definir o binário.', // 'When setting filepath cannot set binary.',
    'cannotSetFilepath'      => 'Ao configurar o binário, não foi possível definir o caminho do arquivo: "{0}"', // 'When setting binary cannot set filepath: "{0}"',
    'notFoundDownloadSource' => 'Fonte do corpo de download não encontrado.', // 'Not found download body source.',
    'cannotSetCache'         => 'Não suporta armazenamento em cache para download.', // 'It does not support caching for downloading.',
    'cannotSetStatusCode'    => 'Não suporta alteração de código de status para download. código: "{0}", motivo: "{1}"', // 'It does not support change status code for downloading. code: {0}, reason: {1}',

    // Response
    'missingResponseStatus' => 'A resposta HTTP não possui um código de status', // 'HTTP Response is missing a status code',
    'invalidStatusCode'     => '{0} não é um código de status de retorno HTTP válido', // '{0} is not a valid HTTP return status code',
    'unknownStatusCode'     => 'Código de status HTTP desconhecido fornecido sem nenhuma mensagem: {0}', // 'Unknown HTTP status code provided with no message: {0}',

    // URI
    'cannotParseURI'       => 'Não é possível analisar o URI: "{0}"', // 'Unable to parse URI: "{0}"',
    'segmentOutOfRange'    => 'O segmento do URI da requisição está fora do intervalo: "{0}"', // 'Request URI segment is out of range: "{0}"',
    'invalidPort'          => 'Portas devem estar entre 0 e 65535. Dado: {0}', // 'Ports must be between 0 and 65535. Given: {0}',
    'malformedQueryString' => 'As strings de consulta não podem incluir fragmentos de URI.', // 'Query strings may not include URI fragments.',

    // Page Not Found
    'pageNotFound'       => 'Página Não Encontrada', // 'Page Not Found',
    'emptyController'    => 'Nenhum Controller especificado.', // 'No Controller specified.',
    'controllerNotFound' => 'Controller ou seu método não foi encontrado: {0}::{1}', // 'Controller or its method is not found: {0}::{1}',
    'methodNotFound'     => 'Método do Controller não foi encontrado: "{0}"', // 'Controller method is not found: "{0}"',
    'localeNotSupported' => 'Idioma não suportado: {0}', // 'Locale is not supported: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'A ação que você solicitou não é permitida.', // 'The action you requested is not allowed.',

    // Uploaded file moving
    'alreadyMoved' => 'O arquivo enviado já foi movido.', // 'The uploaded file has already been moved.',
    'invalidFile'  => 'O arquivo original não é um arquivo válido.', // 'The original file is not a valid file.',
    'moveFailed'   => 'Não foi possível mover o arquivo "{0}" para "{1}". Motivo: "{2}"', // 'Could not move file "{0}" to "{1}". Reason: {2}',

    'uploadErrOk'        => 'O upload do arquivo foi realizado com sucesso.', // 'The file uploaded with success.',
    'uploadErrIniSize'   => 'O arquivo "%s" excede a diretiva ini upload_max_filesize.', // 'The file "%s" exceeds your upload_max_filesize ini directive.',
    'uploadErrFormSize'  => 'O arquivo "%s" excede o limite de upload definido em seu formulário.', // 'The file "%s" exceeds the upload limit defined in your form.',
    'uploadErrPartial'   => 'O upload do arquivo "%s" foi realizado apenas parcialmente.', // 'The file "%s" was only partially uploaded.',
    'uploadErrNoFile'    => 'Nenhum upload de arquivo foi realizado.', // 'No file was uploaded.',
    'uploadErrCantWrite' => 'O arquivo "%s" não pode ser escrito no disco.', // 'The file "%s" could not be written on disk.',
    'uploadErrNoTmpDir'  => 'Upload de arquivo não pode ser realizado: faltando diretório temporário.', // 'File could not be uploaded: missing temporary directory.',
    'uploadErrExtension' => 'Upload de arquivo foi parado por uma extensão PHP.', // 'File upload was stopped by a PHP extension.',
    'uploadErrUnknown'   => 'O upload do arquivo "%s" não foi realizado devido a um erro desconhecido.', // 'The file "%s" was not uploaded due to an unknown error.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'A configuração SameSite deve ser None, Lax, Strict ou uma string vazia. Dado: {0}', // 'The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}',
];
