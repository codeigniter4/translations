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
    'missingCurl'     => 'CURL phải được kích hoạt để sử dụng class CURLRequest.',
    'invalidSSLKey'   => 'Không thể đặt Khóa SSL. {0} không phải là một tệp hợp lệ.',
    'sslCertNotFound' => 'Chứng chỉ SSL không được tìm thấy tại: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} không phải là một loại trao đổi hợp lệ. Loại của nó chỉ có thể là một trong những thứ sau đây: phương tiện (media), bảng mã (charset), mã hóa (encoding) hoặc ngôn ngữ (language).',

    // Message
    'invalidHTTPProtocol' => 'Phiên bản giao thức HTTP không hợp lệ. Phải là một trong: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Bạn phải cung cấp một loạt các giá trị được hỗ trợ cho tất cả các Cuộc đàm phán.',

    // RedirectResponse
    'invalidRoute' => '{0} route không thể được tìm thấy trong khi định tuyến ngược.',

    // DownloadResponse
    'cannotSetBinary'        => 'Cài đặt đường dẫn tập tin không thể đặt binary.',
    'cannotSetFilepath'      => 'Cài đặt binary không thể đặt đường dẫn tệp: {0}',
    'notFoundDownloadSource' => 'Không tìm thấy nguồn tải nội dung.',
    'cannotSetCache'         => 'Nó không hỗ trợ bộ nhớ đệm để tải xuống.',
    'cannotSetStatusCode'    => 'Nó không hỗ trợ thay đổi mã trạng thái để tải xuống. mã: {0}, lý do: {1}',

    // Response
    'missingResponseStatus' => 'Phản hồi HTTP thiếu mã trạng thái',
    'invalidStatusCode'     => '{0} trả về mã trạng thái HTTP không hợp lệ',
    'unknownStatusCode'     => 'Không có mã trạng thái HTTP nào được cung cấp hoặc không xác định: {0}',

    // URI
    'cannotParseURI'       => 'Không thể phân tích cú pháp URI: {0}',
    'segmentOutOfRange'    => 'URI được yêu cầu nằm ngoài phạm vi: {0}',
    'invalidPort'          => 'Số cổng phải nằm trong khoảng từ 0 đến 65535, hiện tại là: {0}',
    'malformedQueryString' => 'Chuỗi truy vấn có thể không chứa các đoạn URI.',

    // Page Not Found
    'pageNotFound'       => 'Các trang được chỉ định không được tìm thấy.',
    'emptyController'    => 'Không có Controler được chỉ định. ',
    'controllerNotFound' => 'Không thể tìm thấy Controler hoặc phương thức:{0}::{1}',
    'methodNotFound'     => 'Không có cách nào để tìm Controler: {0}',

    // CSRF
    'disallowedAction' => 'Hành động bạn yêu cầu không được phép.',

    // Uploaded file moving
    'alreadyMoved' => 'Các tập tin tải lên đã được di chuyển.',
    'invalidFile'  => 'Tệp gốc không phải là tệp hợp lệ.',
    'moveFailed'   => 'Không thể di chuyển tệp {0} sang {1} ({2})',

    'uploadErrOk'        => 'Các tập tin được tải lên thành công.',
    'uploadErrIniSize'   => 'Tệp "%s" vượt quá cấu hình upload_max_filesize ini của bạn.',
    'uploadErrFormSize'  => 'Tệp "%s" vượt quá giới hạn tải lên được xác định trong biểu mẫu của bạn.',
    'uploadErrPartial'   => 'Tệp "%s" chỉ được tải lên một phần.',
    'uploadErrNoFile'    => 'Không có tập tin nào được tải lên.',
    'uploadErrCantWrite' => 'Không thể ghi tệp "%s" trên đĩa.',
    'uploadErrNoTmpDir'  => 'Không thể tải lên tệp: thiếu thư mục tạm thời.',
    'uploadErrExtension' => 'Tải lên tệp đã bị dừng bởi một extension PHP.',
    'uploadErrUnknown'   => 'Tệp "%s" không được tải lên do lỗi không xác định.',
];
