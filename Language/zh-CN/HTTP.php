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
    'missingCurl'     => '必须启用 CURL 扩展才能使用 CURLRequest。',
    'invalidSSLKey'   => '无法设置 SSL 密钥，{0} 不是有效的文件。',
    'sslCertNotFound' => '没有在以下位置找到 SSL 证书: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} 不是有效的内容协商类型。必须是以下其中之一: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol' => '无效的HTTP协议版本。必须是以下之一: {0}',

    // Negotiate
    'emptySupportedNegotiations' => '你必须以数组形式提供所有可用的内容协商。',

    // RedirectResponse
    'invalidRoute' => '无法在反向路由中找到 {0} 的路由。',

    // DownloadResponse
    'cannotSetBinary'        => '已设置文件路径，不能设置为二进制内容。',
    'cannotSetFilepath'      => '已设置二进制内容，不能设置文件路径: {0}',
    'notFoundDownloadSource' => '下载内容载体不存在。',
    'cannotSetCache'         => '文件下载响应不支持设置缓存。',
    'cannotSetStatusCode'    => '文件下载响应不支持修改状态代码。 代码: {0}, 消息: {1}',

    // Response
    'missingResponseStatus' => 'HTTP 响应缺少状态代码。',
    'invalidStatusCode'     => '{0} 不是有效的HTTP返回状态代码。',
    'unknownStatusCode'     => '未知的 HTTP 状态代码，没有提供信息。{0}',

    // URI
    'cannotParseURI'       => '无法解析URI: {0}',
    'segmentOutOfRange'    => '请求的 URI 片段超范围: {0}',
    'invalidPort'          => '端口必须在 0 到 65535 之间，当前是 {0}',
    'malformedQueryString' => '查询字符串不得包括 URI 片段。',

    // Page Not Found
    'pageNotFound'       => '找不到页面',
    'emptyController'    => '未指定控制器',
    'controllerNotFound' => '控制器或其方法不存在: {0}::{1}',
    'methodNotFound'     => '控制器方法不存在: {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => '当前请求操作不被允许。',

    // Uploaded file moving
    'alreadyMoved' => '上传的文件已经被移动。',
    'invalidFile'  => '原始文件不是有效的文件。',
    'moveFailed'   => '无法将文件 {0} 移动到 {1} ({2})。',

    'uploadErrOk'        => '文件上传成功。',
    'uploadErrIniSize'   => '文件大小 "%s" 超过了 upload_max_filesize 配置中的限制。',
    'uploadErrFormSize'  => '文件数量 "%s" 超过了表单中的上传限制。',
    'uploadErrPartial'   => '文件 "%s" 只是部分上传。',
    'uploadErrNoFile'    => '没有上传文件。',
    'uploadErrCantWrite' => '文件 "%s" 不能被写入硬盘。',
    'uploadErrNoTmpDir'  => '文件不能被上传: 缺少临时目录。',
    'uploadErrExtension' => '文件上传被一个 PHP 扩展程序阻止。',
    'uploadErrUnknown'   => '由于一个未知的错误，文件 "%s" 没有被上传。',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite 的值必须是 None, Lax, Strict 或者空白字符串, 当前是 {0}。',
];
