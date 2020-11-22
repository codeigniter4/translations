<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// HTTP language settings
return [
	// CurlRequest
	'missingCurl'                => 'CURL deve estar ativado para usar a classe CURLRequest.',
	'invalidSSLKey'              => 'Não é possível definir a chave SSL. {0} não é um arquivo válido.',
	'sslCertNotFound'            => 'Certificado SSL não encontrado em: {0}',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => '{0} não é um tipo de negociação válido. Deve ser um dos seguintes: mídia, charset, codificação, idioma.',

	// Message
	'invalidHTTPProtocol'        => 'Versão inválida do protocolo HTTP. Deve ser um dos seguintes: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'Você deve fornecer um array de valores suportados para todas as negociações.',

	// RedirectResponse
	'invalidRoute'               => '{0} não é uma rota válida.',

	// DownloadResponse
	'cannotSetBinary'            => 'When setting filepath can not set binary.',
	'cannotSetFilepath'          => 'When setting binary can not set filepath: {0}',
	'notFoundDownloadSource'     => 'Not found download body source.',
	'cannotSetCache'             => 'It does not supported caching for downloading.',
	'cannotSetStatusCode'        => 'It does not supported chnage status code for downloading. code: {0}, reason: {1}',

	// Response
	'missingResponseStatus'      => 'Resposta HTTP está sem um código de status',
	'invalidStatusCode'          => '{0} não é um código de status de retorno HTTP válido',
	'unknownStatusCode'          => 'Código de status HTTP desconhecido fornecido sem mensagem: {0}',

	// URI
	'cannotParseURI'             => 'Não é possível analisar o URI: {0}',
	'segmentOutOfRange'          => 'O segmento de URI de solicitação está fora do intervalo: {0}',
	'invalidPort'                => 'Portas devem estar entre 0 e 65535. Fornecido: {0}',
	'malformedQueryString'       => 'As strings de consulta podem não incluir fragmentos de URI.',

	// Page Not Found
	'pageNotFound'               => 'Página não encontrada',
	'emptyController'            => 'Nenhum Controller especificado.',
	'controllerNotFound'         => 'Controller ou seu método não encontrado: {0}::{1}',
	'methodNotFound'             => 'Método do Controller não encontrado: {0}',

	// CSRF
	'disallowedAction'           => 'A ação que você solicitou não é permitida.',

	// Uploaded file moving
	'alreadyMoved'				 => 'O arquivo enviado já foi movido.',
	'invalidFile'				 => 'O arquivo original não é um arquivo válido.',
	'moveFailed'				 => 'Não foi possível mover o arquivo {0} para {1} ({2})',

	'uploadErrOk'                => 'The file uploaded with success.',
	'uploadErrIniSize'           => 'The file "%s" exceeds your upload_max_filesize ini directive.',
	'uploadErrFormSize'          => 'The file "%s" exceeds the upload limit defined in your form.',
	'uploadErrPartial'           => 'The file "%s" was only partially uploaded.',
	'uploadErrNoFile'            => 'No file was uploaded.',
	'uploadErrCantWrite'         => 'The file "%s" could not be written on disk.',
	'uploadErrNoTmpDir'          => 'File could not be uploaded: missing temporary directory.',
	'uploadErrExtension'         => 'File upload was stopped by a PHP extension.',
	'uploadErrUnknown'           => 'The file "%s" was not uploaded due to an unknown error.',
];
