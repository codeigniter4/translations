<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Images language settings
return [
    'sourceImageRequired'    => 'Cần chỉ định một hình ảnh nguồn trong cài đặt',
    'gdRequired'             => 'Cần có thư viện hình ảnh GD để sử dụng chức năng này.',
    'gdRequiredForProps'     => 'Máy chủ phải hỗ trợ thư viện GD để xác định thuộc tính hình ảnh.',
    'gifNotSupported'        => 'Hình ảnh GIF thường không được hỗ trợ do các hạn chế về giấy phép. Có thể cần sử dụng hình ảnh JPG hoặc PNG thay thế.',
    'jpgNotSupported'        => 'Hình ảnh JPG không được hỗ trợ.',
    'pngNotSupported'        => 'Hình ảnh PNG không được hỗ trợ.',
    'webpNotSupported'       => 'Hình ảnh WEBP không được hỗ trợ.',
    'fileNotSupported'       => 'Tệp chứa định dạng hình ảnh không được hỗ trợ.',
    'unsupportedImageCreate' => 'Máy chủ không hỗ trợ chức năng GD cần thiết để xử lý loại hình ảnh này.',
    'jpgOrPngRequired'       => 'Giao thức được chỉ định trong cài đặt để thay đổi kích thước hình ảnh chỉ hoạt động với các loại hình JPEG hoặc PNG.',
    'rotateUnsupported'      => 'Quá trình xoay hình ảnh dường như không được máy chủ hỗ trợ.',
    'libPathInvalid'         => 'Đường dẫn đến thư viện hình ảnh của bạn không chính xác. Vui lòng thiết lập đúng đường dẫn trong cài đặt hình ảnh. {0}',
    'imageProcessFailed'     => 'Quá trình xử lý hình ảnh đã thất bại. Vui lòng kiểm tra xem máy chủ có hỗ trợ giao thức đã chọn và đường dẫn đến thư viện hình ảnh có chính xác không.',
    'rotationAngleRequired'  => 'Cần có một góc xoay để xoay hình ảnh.',
    'invalidPath'            => 'Đường dẫn đến hình ảnh không chính xác.',
    'copyFailed'             => 'Chức năng sao chép hình ảnh đã thất bại.',
    'missingFont'            => 'Không tìm thấy phông chữ để sử dụng.',
    'saveFailed'             => 'Không thể lưu hình ảnh. Vui lòng đảm bảo rằng thư mục hình ảnh và tệp có thể ghi.',
    'invalidDirection'       => 'Hướng đảo ngược chỉ có thể là `vertical` hoặc `horizontal`. Đã cho: {0}',
    'exifNotSupported'       => 'Việc đọc dữ liệu EXIF không được hỗ trợ bởi cài đặt PHP này.',
];
