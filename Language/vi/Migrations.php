<?php

/**
 * Migration language strings.
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
	// Migration Runner
   'missingTable'      => 'Bạn phải thiết lập một bảng migration.',
   'disabled'          => 'Migration đã được tải nhưng bị vô hiệu hóa hoặc đặt không chính xác.',
   'notFound'          => 'Không tìm thấy tập tin Migration: ',
   'batchNotFound'     => 'Không tìm thấy mục tiêu: ',
   'empty'             => 'Tệp Migration trống',
   'gap'               => 'Có một khoảng trống trong migration sequence near version number: ',
   'classNotFound'     => 'Không thể tìm thấy class migration "%s".',
   'missingMethod'     => 'Class migration thiếu phương thức "%s".',

	// Migration Command
   'migHelpLatest'     => "\t\tDi chuyển cơ sở dữ liệu sang migration có sẵn mới nhất.",
   'migHelpCurrent'    => "\t\tDi chuyển cơ sở dữ liệu sang phiên bản được đặt là 'hiện tại' trong cấu hình.",
   'migHelpVersion'    => "\tDi chuyển cơ sở dữ liệu sang phiên bản {v}.",
   'migHelpRollback'   => "\tChạy tất cả các lần di chuyển 'xuống' xuống phiên bản 0.",
   'migHelpRefresh'    => "\t\tGỡ cài đặt và chạy lại tất cả các migration để làm mới cơ sở dữ liệu.",
   'migHelpSeed'       => "\tChạy seeder có tên [name].",
   'migCreate'         => "\tTạo một migration mới có tên [name]",
   'nameMigration'     => 'Đặt tên cho tệp migration',
   'badCreateName'     => 'Bạn phải cung cấp tên tệp migration.',
   'writeError'        => 'Lỗi khi tạo tệp {0}, kiểm tra xem thư mục có thể ghi được không.',
   'migNumberError'    => 'Số di chuyển phải có ba chữ số và không được có bất kỳ khoảng trống nào trong chuỗi.',
   'rollBackConfirm'   => 'Bạn có chắc chắn muốn quay trở lại?',
   'refreshConfirm'    => 'Bạn có chắc chắn muốn làm mới?',

   'latest'            => 'Chạy tất cả các migration mới ...',
   'generalFault'      => 'Chạy Migration thất bại!',
   'migInvalidVersion' => 'Số phiên bản được cung cấp không hợp lệ. ',
   'toVersionPH'       => 'Chuyển sang phiên bản %s...',
   'toVersion'         => 'Chuyển sang phiên bản hiện tại...',
   'rollingBack'       => 'Di chuyển trở lại hàng loạt: ',
   'noneFound'         => 'No migrations were found.',
   'on'                => 'Migrated On: ',
   'migSeeder'         => 'Tên Seeder',
   'migMissingSeeder'  => 'Bạn phải cung cấp một tên seeder.',
   'removed'           => 'Quay trở lại: ',
   'added'             => 'Đang chạy: ',

   'version'           => 'Phiên bản',
   'filename'          => 'Tên tệp',
];
