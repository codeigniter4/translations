<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Session language settings
return [
    'missingDatabaseTable'   => 'Trong `sessionSavePath`, phải chỉ định tên bảng để quản lý phiên bằng cơ sở dữ liệu.',
    'invalidSavePath'        => 'Phiên: Đường dẫn lưu trữ được cấu hình "{0}" không phải là một thư mục, không tồn tại hoặc không thể được tạo ra.',
    'writeProtectedSavePath' => 'Phiên: Đường dẫn lưu trữ được cấu hình "{0}" không thể được ghi bởi quy trình PHP.',
    'emptySavePath'          => 'Phiên: Không có đường dẫn lưu trữ nào được cấu hình.',
    'invalidSavePathFormat'  => 'Phiên: Định dạng đường dẫn lưu trữ Redis không hợp lệ: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'Phiên: Cài đặt SameSite chỉ có thể là None, Lax, Strict, hoặc một chuỗi rỗng. Đã cho: {0}',
];
