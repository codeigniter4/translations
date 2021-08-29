<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'Bạn phải thiết lập một bảng migration.',
    'disabled'      => 'Migration đã được tải nhưng bị vô hiệu hóa hoặc đặt không chính xác.',
    'notFound'      => 'Không tìm thấy tập tin Migration: ',
    'batchNotFound' => 'Không tìm thấy mục tiêu: ',
    'empty'         => 'Tệp Migration trống',
    'gap'           => 'Có một khoảng trống trong migration sequence near version number: ',
    'classNotFound' => 'Không thể tìm thấy class migration "%s".',
    'missingMethod' => 'Class migration thiếu phương thức "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tDi chuyển cơ sở dữ liệu sang migration có sẵn mới nhất.",
    'migHelpCurrent'  => "\t\tDi chuyển cơ sở dữ liệu sang phiên bản được đặt là 'hiện tại' trong cấu hình.",
    'migHelpVersion'  => "\tDi chuyển cơ sở dữ liệu sang phiên bản {v}.",
    'migHelpRollback' => "\tChạy tất cả các lần di chuyển 'xuống' xuống phiên bản 0.",
    'migHelpRefresh'  => "\t\tGỡ cài đặt và chạy lại tất cả các migration để làm mới cơ sở dữ liệu.",
    'migHelpSeed'     => "\tChạy seeder có tên [name].",
    'migCreate'       => "\tTạo một migration mới có tên [name]",
    'nameMigration'   => 'Đặt tên cho tệp migration',
    'migNumberError'  => 'Số di chuyển phải có ba chữ số và không được có bất kỳ khoảng trống nào trong chuỗi.',
    'rollBackConfirm' => 'Bạn có chắc chắn muốn quay trở lại?',
    'refreshConfirm'  => 'Bạn có chắc chắn muốn làm mới?',

    'latest'            => 'Chạy tất cả các migration mới ...',
    'generalFault'      => 'Chạy Migration thất bại!',
    'migInvalidVersion' => 'Số phiên bản được cung cấp không hợp lệ. ',
    'toVersionPH'       => 'Chuyển sang phiên bản %s...',
    'toVersion'         => 'Chuyển sang phiên bản hiện tại...',
    'rollingBack'       => 'Di chuyển trở lại hàng loạt: ',
    'migSeeder'         => 'Tên Seeder',
    'migMissingSeeder'  => 'Bạn phải cung cấp một tên seeder.',
    'removed'           => 'Quay trở lại: ',
    'added'             => 'Đang chạy: ',

    'version'  => 'Phiên bản',
    'filename' => 'Tên tệp',
];
