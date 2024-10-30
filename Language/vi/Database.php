<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Database language settings
return [
    'invalidEvent'                     => '{0} không phải là một Callback sự kiện Model hợp lệ.',
    'invalidArgument'                  => 'Tham số không hợp lệ: {0}.',
    'invalidAllowedFields'             => 'Không có trường hợp lệ nào được chỉ định cho Model: {0}',
    'emptyDataset'                     => 'Không tìm thấy dữ liệu cho: {0}.',
    'emptyPrimaryKey'                  => 'Không có khóa chính nào được định nghĩa cho việc tạo {0}.',
    'failGetFieldData'                 => 'Không thể truy xuất dữ liệu trường từ cơ sở dữ liệu.',
    'failGetIndexData'                 => 'Không thể truy xuất dữ liệu chỉ mục từ cơ sở dữ liệu.',
    'failGetForeignKeyData'            => 'Không thể truy xuất khóa ngoại từ cơ sở dữ liệu.',
    'parseStringFail'                  => 'Phân tích chuỗi Key thất bại.',
    'featureUnavailable'               => 'Tính năng này không có sẵn cho cơ sở dữ liệu đang sử dụng.',
    'tableNotFound'                    => 'Không thể tìm thấy bảng `{0}` trong cơ sở dữ liệu hiện tại.',
    'noPrimaryKey'                     => 'Model `{0}` không định nghĩa khóa chính.',
    'noDateFormat'                     => 'Model `{0}` không có định dạng ngày hợp lệ ($dateFormat).',
    'fieldNotExists'                   => 'Không tìm thấy trường `{0}`.',
    'forEmptyInputGiven'               => 'Câu lệnh rỗng cho trường `{0}`.',
    'forFindColumnHaveMultipleColumns' => 'Chỉ được định nghĩa một tên trường duy nhất.',
    'methodNotAvailable'               => '`{1}` không thể sử dụng trong `{0}`. Đây là một phương thức của lớp `Query Builder`.',
];
