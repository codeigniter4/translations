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
    'missingTable'  => 'Bảng di trú phải được thiết lập.',
    'disabled'      => 'Di trú đã được tải, nhưng bị vô hiệu hóa hoặc được cấu hình sai.',
    'notFound'      => 'Tệp di trú không được tìm thấy: ',
    'batchNotFound' => 'Số batch mục tiêu không được tìm thấy: ',
    'empty'         => 'Không tìm thấy tệp di trú nào',
    'gap'           => 'Có một khoảng trống trong chuỗi di trú gần số phiên bản: ',
    'classNotFound' => 'Lớp di trú "%s" không thể được tìm thấy.',
    'missingMethod' => 'Lớp di trú thiếu một phương thức "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tDi chuyển cơ sở dữ liệu đến di trú mới nhất có sẵn.",
    'migHelpCurrent'  => "\t\tDi chuyển cơ sở dữ liệu đến phiên bản được thiết lập là hiện tại ('current') trong cấu hình.",
    'migHelpVersion'  => "\tDi chuyển cơ sở dữ liệu đến phiên bản {v}.",
    'migHelpRollback' => "\tThực hiện tất cả các di trú 'xuống' đến phiên bản 0.",
    'migHelpRefresh'  => "\t\tGỡ cài đặt và thực hiện lại tất cả các di trú để làm mới cơ sở dữ liệu.",
    'migHelpSeed'     => "\tXử lý dữ liệu ví dụ với tên [name].",
    'migCreate'       => "\tTạo một di trú mới với tên [name]",
    'nameMigration'   => 'Đặt tên tệp di trú',
    'migNumberError'  => 'Số di trú phải có ba chữ số và không được có khoảng trống trong chuỗi.',
    'rollBackConfirm' => 'Có thực sự muốn thực hiện rollback cơ sở dữ liệu không?',
    'refreshConfirm'  => 'Có thực sự muốn làm mới cơ sở dữ liệu không?',

    'latest'            => 'Thực hiện di trú mới...',
    'generalFault'      => 'Di trú không thành công!',
    'migrated'          => 'Di trú đã hoàn thành.',
    'migInvalidVersion' => 'Số phiên bản không hợp lệ đã được chỉ định.',
    'toVersionPH'       => 'Di chuyển đến phiên bản %s...',
    'toVersion'         => 'Di chuyển đến phiên bản hiện tại...',
    'rollingBack'       => 'Rollback tất cả các di trú đến số batch: ',
    'noneFound'         => 'Không tìm thấy di trú nào.',
    'migSeeder'         => 'Tên dữ liệu ví dụ',
    'migMissingSeeder'  => 'Cần phải chỉ định một tên dữ liệu ví dụ.',
    'nameSeeder'        => 'Đặt tên tệp dữ liệu ví dụ',
    'removed'           => 'Quay lại: ',
    'added'             => 'Thực hiện: ',

    // Migrate Status
    'namespace' => 'Không gian tên',
    'filename'  => 'Tên tệp',
    'version'   => 'Phiên bản',
    'group'     => 'Nhóm',
    'on'        => 'Di trú vào lúc: ',
    'batch'     => 'Batch',
];
