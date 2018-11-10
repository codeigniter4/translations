<?php

return [
	// CurlRequest
	'missingCurl'                => 'CURL deve estar ativado para usar a classe CURLRequest.',
	'invalidSSLKey'              => 'Não é possível definir a Chave SSL. {0} não é um arquivo válido.',
	'sslCertNotFound'            => 'Certificado SSL não encontrado em: {0}',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => '{0} não é um tipo de negociação válido. Deve ser um dos seguintes: media, charset, encoding, language.',

		// Message
	'invalidHTTPProtocol'        => 'Versão inválida do Protocolo HTTP. Deve ser uma dessas: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Você deve fornecer uma array de valores suportados para todas as Negociações.',

	// RedirectResponse
	'invalidRoute'               => '{0, string} não é uma rota válida.',

	// Response
	'missingResponseStatus'      => 'Resposta HTTP está faltando um código de status',
	'invalidStatusCode'          => '{0, string} não é um código de status de retorno HTTP válido',
	'unknownStatusCode'          => 'Código de status HTTP desconhecido fornecido sem nenhuma mensagem: {0}',

	// URI
	'cannotParseURI'             => 'Não é possível analisar o URI: {0}',
	'segmentOutOfRange'          => 'Segmento do URI da Requisição está fora do intervalo: {0}',
	'invalidPort'                => 'Portas devem estar entre 0 e 65535. Dado: {0}',
	'malformedQueryString'       => 'As strings de consulta podem não incluir fragmentos de URI.',

	// Page Not Found
	'pageNotFound'               => 'Página Não Encontrada',
	'emptyController'            => 'Nenhum Controller especificado.',
	'controllerNotFound'         => 'Controller ou seu método não foi encontrado: {0}::{1}',
	'methodNotFound'             => 'Método do Controller não foi encontrado: {0}',

	// CSRF
	'disallowedAction'           => 'A ação que você solicitou não é permitida.',
];
