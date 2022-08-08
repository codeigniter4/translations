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
    'missingCurl'     => 'CURLRequest 클래스를 사용하기 위해서 CURL이 반드시 활성화되어야 합니다.', // 'CURL must be enabled to use the CURLRequest class.'
    'invalidSSLKey'   => 'SSL Key를 설정할 수 없습니다. {0} 경우는 유효하지 않는 파일입니다.', // 'Cannot set SSL Key. {0} is not a valid file.'
    'sslCertNotFound' => '해당 파일에서 SSL 인증서를 찾을 수 없습니다: {0}', // 'SSL certificate not found at: {0}'
    'curlError'       => '{0} : {1}', // {0} : {1}

    // IncomingRequest
    'invalidNegotiationType' => '요청된 {0} 경우, 유효하지 않은 negotiation type입니다. 다음 중에 하나를 사용하십시오: media, charset, encoding, language.', // '{0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.'

    // Message
    'invalidHTTPProtocol' => '유효하지 않은 HTTP 프로토콜 버전입니다. 다음 버전 중에 하나를 사용하십시오: {0}', // Invalid HTTP Protocol Version. Must be one of: {0}

    // Negotiate
    'emptySupportedNegotiations' => '모든 Negotiations에 지원되는 값의 배열이 반드시 제공되어야 합니다.', // You must provide an array of supported values to all Negotiations.

    // RedirectResponse
    'invalidRoute' => '{0}에 대한 경로를 찾을 수 없습니다.', // The route for {0} cannot be found.

    // DownloadResponse
    'cannotSetBinary'        => '다운로드 에러: 파일 경로를 설정할 때에 바이너리로 설정할 수 없습니다.', // 'When setting filepath cannot set binary.'
    'cannotSetFilepath'      => '다운로드 에러: 바이너리 설정 시, 파일 경로를 설정할 수 없는 경우: {0}', // 'When setting binary cannot set filepath: {0}'
    'notFoundDownloadSource' => '다운로드 에러: 다운로드 본문 소스를 찾을 수 없음.', // 'Not found download body source.'
    'cannotSetCache'         => '다운로드 에러: 다운로드를 위해 지원되는 caching이 아닙니다.', // 'It does not support caching for downloading.'
    'cannotSetStatusCode'    => '다운로드 에러: 다운로드를 위해 상태 코드를 변경하는 것을 지원하지 않습니다. code: {0}, reason: {1}', // 'It does not support change status code for downloading. code: {0}, reason: {1}'

    // Response
    'missingResponseStatus' => 'HTTP 응답에 HTTP 상태 코드가 누락되어 있습니다.', // 'HTTP Response is missing a status code'
    'invalidStatusCode'     => '{0} 경우에 유효하지 않은 HTTP 상태 코드를 반환함.', // '{0} is not a valid HTTP return status code'
    'unknownStatusCode'     => '아무런 메시지 없이 제공된, 알 수 없는 HTTP 상태 코드: {0}', // 'Unknown HTTP status code provided with no message: {0}'

    // URI
    'cannotParseURI'       => '구문 분석을 할 수 없는 URI: {0}', // 'Unable to parse URI: {0}'
    'segmentOutOfRange'    => '요청한 URL 세그먼트가 범위를 벗어났습니다: {0}', // 'Request URI segment is out of range: {0}'
    'invalidPort'          => '포트 값은 0에서 65535 사이의 값을 사용해야 합니다. 사용된 값: {0}', // 'Ports must be between 0 and 65535. Given: {0}'
    'malformedQueryString' => 'URI 요청 문자열에 URI fragments가 포함되어 있지 않을 수 있습니다.', // 'Query strings may not include URI fragments.'

    // Page Not Found
    'pageNotFound'       => '페이지를 찾을 수 없습니다.', // 'Page Not Found'
    'emptyController'    => '컨트롤러가 명시되지 않았습니다.', // 'No Controller specified.'
    'controllerNotFound' => '컨트롤러 또는 해당 메서드를 찾을 수 없습니다: {0}::{1}', // 'Controller or its method is not found: {0}::{1}'
    'methodNotFound'     => '컨트롤러 메서드를 찾을 수 없습니다: {0}', // 'Controller method is not found: {0}'

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => '해당 요청은 허용되지 않습니다.', // 'The action you requested is not allowed.'

    // Uploaded file moving
    'alreadyMoved' => '업로드된 파일은 이미 옮겨졌습니다.', // 'The uploaded file has already been moved.'
    'invalidFile'  => '원본 파일은 유효한 파일이 아닙니다.', // 'The original file is not a valid file.'
    'moveFailed'   => '파일 {0} 경우에 {1} ({2}) 쪽으로 이동할 수 없습니다.', // 'Could not move file {0} to {1} ({2})'

    'uploadErrOk'        => '파일이 성공적으로 업로드가 되었습니다.', // 'The file uploaded with success.'
    'uploadErrIniSize'   => '업로드 에러: 해당 파일 "%s"의 경우, 용량이 ini 파일의 upload_max_filesize 설정값을 초과하였습니다.', // 'The file "%s" exceeds your upload_max_filesize ini directive.'
    'uploadErrFormSize'  => '업로드 에러: 해당 파일 "%s"의 경우, 용량이 form에 정의된 업로드 제한 값을 초과하였습니다.', // 'The file "%s" exceeds the upload limit defined in your form.'
    'uploadErrPartial'   => '업로드 에러: 해당 파일 "%s"의 경우, 부분적으로만 업로드가 되었습니다.', // 'The file "%s" was only partially uploaded.'
    'uploadErrNoFile'    => '업로드 에러: 업로드된 파일이 없습니다.', // 'No file was uploaded.'
    'uploadErrCantWrite' => '업로드 에러: 해당 파일 "%s"의 경우, disk에 쓸 수 없습니다.', // 'The file "%s" could not be written on disk.'
    'uploadErrNoTmpDir'  => '(업로드 에러) 파일을 업로드할 수 없습니다: 임시 디렉터리가 없습니다.', // 'File could not be uploaded: missing temporary directory.'
    'uploadErrExtension' => '업로드 에러: PHP 확장에 의해 파일 업로드가 중지되었습니다.', // 'File upload was stopped by a PHP extension.'
    'uploadErrUnknown'   => '업로드 에러: 해당 파일 "%s"의 경우, 알 수 없는 에러로 인해 업로드할 수 없습니다.', // 'The file "%s" was not uploaded due to an unknown error.'

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite 설정은 None, Lax, Strict 또는 빈 문자열이어야합니다. 주어진 값 : {0}', // 'The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}'
];
