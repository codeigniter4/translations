<?php

/**
 * Session language strings.
 *
 * @package    CodeIgniter
 * @author     XuanDung38 (Fox)
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'missingDatabaseTable'   => '`sessionSavePath` phải có tên bảng để Trình xử lý Session cơ sở dữ liệu hoạt động.',
   'invalidSavePath'        => 'Session: Đường dẫn lưu được định cấu hình "{0}" không phải là thư mục, không tồn tại hoặc không thể được tạo.',
   'writeProtectedSavePath' => 'Session: Đường dẫn lưu được định cấu hình "{0}" không thể ghi được bằng PHP.',
   'emptySavePath'          => 'Session: Không lưu đường dẫn được cấu hình.',
   'invalidSavePathFormat'  => 'Session: Định dạng đường dẫn Redis không hợp lệ: {0}',
];
