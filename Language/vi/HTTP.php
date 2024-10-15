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
    'missingCurl'     => 'CURL phải được kích hoạt để sử dụng lớp CURLRequest.',
    'invalidSSLKey'   => 'Không thể thiết lập khóa SSL. {0} không phải là tên tệp hợp lệ.',
    'sslCertNotFound' => 'Chứng chỉ SSL không được tìm thấy tại: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} không phải là một loại nội dung hợp lệ. Các loại hợp lệ: media, charset, encoding, language.',
    'invalidJSON'            => 'Chuỗi JSON không thể được phân tích. Lỗi: {0}',
    'unsupportedJSONFormat'  => 'Định dạng JSON được chỉ định không được hỗ trợ.',

    // Message
    'invalidHTTPProtocol' => 'Phiên bản giao thức HTTP không hợp lệ: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Luôn phải chỉ định một mảng các loại nội dung hợp lệ.',

    // RedirectResponse
    'invalidRoute' => 'Không tìm thấy route {0}.',

    // DownloadResponse
    'cannotSetBinary'        => 'Lỗi khi tải xuống. Đường dẫn tệp không thể được đặt thành nhị phân.',
    'cannotSetFilepath'      => 'Lỗi khi tải xuống nhị phân. Không thể đặt đường dẫn tệp: {0}',
    'notFoundDownloadSource' => 'Lỗi khi tải xuống tệp.',
    'cannotSetCache'         => 'Caching tải xuống không được hỗ trợ.',
    'cannotSetStatusCode'    => 'Lỗi khi tải xuống. Không thể thiết lập mã trạng thái. Mã: {0}, Lý do: {1}',

    // Response
    'missingResponseStatus' => 'Phản hồi HTTP không chứa mã trạng thái',
    'invalidStatusCode'     => '{0} là mã trạng thái HTTP không hợp lệ',
    'unknownStatusCode'     => 'Mã trạng thái HTTP không xác định mà không có thông báo trạng thái được cung cấp: {0}',

    // URI
    'cannotParseURI'       => 'Không thể phân tích URI: {0}',
    'segmentOutOfRange'    => 'Phân đoạn URI của yêu cầu nằm ngoài phạm vi hợp lệ: {0}',
    'invalidPort'          => 'Cổng phải nằm trong khoảng từ 0 đến 65535. Đã cho: {0}',
    'malformedQueryString' => 'Chuỗi truy vấn không được chứa các đoạn URI.',

    // Page Not Found
    'pageNotFound'       => 'Không tìm thấy trang.',
    'emptyController'    => 'Không chỉ định bộ điều khiển nào.',
    'controllerNotFound' => 'Bộ điều khiển hoặc phương thức của nó không được tìm thấy: {0}::{1}',
    'methodNotFound'     => 'Phương thức bộ điều khiển không được tìm thấy: {0}',
    'localeNotSupported' => 'Ngôn ngữ không được hỗ trợ: {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'Hành động được yêu cầu không được phép.',

    // Uploaded file moving
    'alreadyMoved' => 'Tệp đã tải lên đã được di chuyển.',
    'invalidFile'  => 'Tệp gốc không phải là tệp hợp lệ.',
    'moveFailed'   => 'Không thể di chuyển tệp từ {0} đến {1} ({2}).',

    'uploadErrOk'        => 'Tệp đã được tải lên thành công.',
    'uploadErrIniSize'   => 'Tệp "%s" vượt quá chỉ thị upload_max_filesize ini.',
    'uploadErrFormSize'  => 'Tệp "%s" lớn hơn giới hạn đã định nghĩa trong biểu mẫu.',
    'uploadErrPartial'   => 'Tệp "%s" chỉ được tải lên một phần.',
    'uploadErrNoFile'    => 'Không có tệp nào được tải lên',
    'uploadErrCantWrite' => 'Không thể lưu tệp "%s".',
    'uploadErrNoTmpDir'  => 'Lỗi khi tải lên: Thư mục tạm thời không tồn tại.',
    'uploadErrExtension' => 'Việc tải tệp đã bị dừng bởi một tiện ích mở rộng PHP.',
    'uploadErrUnknown'   => 'Tệp "%s" không thể tải lên do lỗi không xác định.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'Cài đặt SameSite chỉ có thể là None, Lax, Strict hoặc một chuỗi rỗng. Đã cho: {0}',
];
