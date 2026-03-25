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

// Configurações de linguagem HTTP
return [
    // CurlRequest
    'missingCurl'     => 'O CURL deve estar habilitado para usar a classe CURLRequest.',
    'invalidSSLKey'   => 'Não é possível definir a Chave SSL. "{0}" não é um arquivo válido.',
    'sslCertNotFound' => 'Certificado SSL não encontrado em: "{0}"',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" não é um tipo de negociação válido. Deve ser um dos seguintes: media, charset, encoding, language.',
    'invalidJSON'            => 'Falha ao analisar a string JSON. Erro: {0}',
    'unsupportedJSONFormat'  => 'O formato JSON fornecido não é suportado.',

    // Message
    'invalidHTTPProtocol' => 'Versão do Protocolo HTTP inválida: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Você deve fornecer um array de valores suportados para todas as Negociações.',

    // RedirectResponse
    'invalidRoute' => 'A rota para "{0}" não pôde ser encontrada.',

    // DownloadResponse
    'cannotSetBinary'        => 'Ao definir o caminho do arquivo (filepath), não é possível definir binário (binary).',
    'cannotSetFilepath'      => 'Ao definir binário (binary), não é possível definir o caminho do arquivo (filepath): "{0}"',
    'notFoundDownloadSource' => 'Fonte do corpo do download não encontrada.',
    'cannotSetCache'         => 'DownloadResponse não suporta cache.',
    'cannotSetStatusCode'    => 'DownloadResponse não suporta alteração do código de status. código: {0}, razão: {1}',

    // Response
    'missingResponseStatus' => 'Resposta HTTP está faltando um código de status.',
    'invalidStatusCode'     => '{0} não é um código de status de retorno HTTP válido.',
    'unknownStatusCode'     => 'Código de status HTTP desconhecido fornecido sem mensagem: {0}',

    // URI
    'cannotParseURI'       => 'Não foi possível analisar a URI: {0}',
    'segmentOutOfRange'    => 'Segmento da URI solicitado está fora do intervalo: {0}',
    'invalidPort'          => 'Portas devem estar entre 0 e 65535. Fornecido: {0}',
    'malformedQueryString' => 'Strings de consulta (query strings) não podem incluir fragmentos de URI.',

    // PageNotFound
    'pageNotFound'       => 'Página Não Encontrada',
    'emptyController'    => 'Nenhum Controller especificado.',
    'controllerNotFound' => 'O Controller ou seu método não foi encontrado: {0}::{1}',
    'methodNotFound'     => 'O método do Controller não foi encontrado: "{0}"',
    'localeNotSupported' => 'O local (locale) não é suportado: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'A ação solicitada não é permitida.',

    // Uploaded file moving
    'alreadyMoved' => 'O arquivo carregado já foi movido.',
    'invalidFile'  => 'O arquivo original não é um arquivo válido.',
    'moveFailed'   => 'Não foi possível mover o arquivo "{0}" para "{1}". Razão: {2}',

    'uploadErrOk'        => 'O arquivo foi enviado com sucesso.',
    'uploadErrIniSize'   => 'O arquivo "%s" excede a diretiva ini upload_max_filesize.',
    'uploadErrFormSize'  => 'O arquivo "%s" excede o limite de envio definido no seu formulário.',
    'uploadErrPartial'   => 'O arquivo "%s" foi apenas parcialmente enviado.',
    'uploadErrNoFile'    => 'Nenhum arquivo foi enviado.',
    'uploadErrCantWrite' => 'O arquivo "%s" não pôde ser escrito no disco.',
    'uploadErrNoTmpDir'  => 'O arquivo não pôde ser enviado: diretório temporário ausente.',
    'uploadErrExtension' => 'O envio do arquivo foi interrompido por uma extensão do PHP.',
    'uploadErrUnknown'   => 'O arquivo "%s" não foi enviado devido a um erro desconhecido.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'A configuração SameSite deve ser None, Lax, Strict ou uma string vazia. Fornecido: {0}',
];
