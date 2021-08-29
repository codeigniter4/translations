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
    'missingDatabaseTable'   => '`sessionSavePath` phải có tên bảng để Trình xử lý Session cơ sở dữ liệu hoạt động.',
    'invalidSavePath'        => 'Session: Đường dẫn lưu được định cấu hình "{0}" không phải là thư mục, không tồn tại hoặc không thể được tạo.',
    'writeProtectedSavePath' => 'Session: Đường dẫn lưu được định cấu hình "{0}" không thể ghi được bằng PHP.',
    'emptySavePath'          => 'Session: Không lưu đường dẫn được cấu hình.',
    'invalidSavePathFormat'  => 'Session: Định dạng đường dẫn Redis không hợp lệ: {0}',
];
