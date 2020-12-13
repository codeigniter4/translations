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
	'missingCurl'     => 'CURL deve estar ativado para usar a classe CURLRequest.',
	'invalidSSLKey'   => 'Não é possível definir a chave SSL. {0} não é um arquivo válido.',
	'sslCertNotFound' => 'Certificado SSL não encontrado em: {0}',
	'curlError'       => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType' => '{0} não é um tipo de negociação válido. Deve ser um dos seguintes: mídia, charset, codificação, idioma.',

	// Message
	'invalidHTTPProtocol' => 'Versão inválida do protocolo HTTP. Deve ser um dos seguintes: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Você deve fornecer um array de valores suportados para todas as negociações.',

	// RedirectResponse
	'invalidRoute' => '{0} não é uma rota válida.',

	// Response
	'missingResponseStatus' => 'Resposta HTTP está sem um código de status',
	'invalidStatusCode'     => '{0} não é um código de status de retorno HTTP válido',
	'unknownStatusCode'     => 'Código de status HTTP desconhecido fornecido sem mensagem: {0}',

	// URI
	'cannotParseURI'       => 'Não é possível analisar o URI: {0}',
	'segmentOutOfRange'    => 'O segmento de URI de solicitação está fora do intervalo: {0}',
	'invalidPort'          => 'Portas devem estar entre 0 e 65535. Fornecido: {0}',
	'malformedQueryString' => 'As strings de consulta podem não incluir fragmentos de URI.',

	// Page Not Found
	'pageNotFound'       => 'Página não encontrada',
	'emptyController'    => 'Nenhum Controller especificado.',
	'controllerNotFound' => 'Controller ou seu método não encontrado: {0}::{1}',
	'methodNotFound'     => 'Método do Controller não encontrado: {0}',

	// CSRF
	'disallowedAction' => 'A ação que você solicitou não é permitida.',

	// Uploaded file moving
	'alreadyMoved' => 'O arquivo enviado já foi movido.',
	'invalidFile'  => 'O arquivo original não é um arquivo válido.',
	'moveFailed'   => 'Não foi possível mover o arquivo {0} para {1} ({2})',

	'uploadErrOk'        => 'O arquivo foi enviado com sucesso.',
	'uploadErrIniSize'   => 'O arquivo "%s" excede a diretiva ini upload_max_filesize.',
	'uploadErrFormSize'  => 'O arquivo "%s" excede o limite de envio definido no formulário.',
	'uploadErrPartial'   => 'O arquivo "%s" foi apenas parcialmente enviado.',
	'uploadErrNoFile'    => 'Nenhum arquivo foi enviado.',
	'uploadErrCantWrite' => 'O arquivo "%s" não pôde ser escrito no disco.',
	'uploadErrNoTmpDir'  => 'O arquivo não pôde ser enviado: falta diretório temporário.',
	'uploadErrExtension' => 'O envio do arquivo foi interrompido por uma extensão PHP.',
	'uploadErrUnknown'   => 'O arquivo "%s" não foi enviado devido a um erro desconhecido.',
];
