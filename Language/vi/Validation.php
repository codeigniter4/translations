<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'Không có tập quy tắc nào được chỉ định trong cấu hình xác thực.',
    'ruleNotFound'    => '{0} không phải là một quy tắc hợp lệ.',
    'groupNotFound'   => '{0} không phải là một nhóm quy tắc xác thực.',
    'groupNotArray'   => 'Nhóm quy tắc {0} phải là một mảng.',
    'invalidTemplate' => '{0} không phải là một mẫu xác thực hợp lệ.',

    // Rule Messages
    'alpha'                 => 'Trường {field} chỉ được phép chứa các ký tự chữ cái.',
    'alpha_dash'            => 'Trường {field} chỉ được phép chứa các ký tự chữ cái, số, dấu gạch dưới và dấu gạch ngang.',
    'alpha_numeric'         => 'Trường {field} chỉ được phép chứa các ký tự chữ cái và số.',
    'alpha_numeric_punct'   => 'Trường {field} chỉ được phép chứa các ký tự chữ cái, số, khoảng trắng và các ký tự ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'Trường {field} chỉ được phép chứa các ký tự chữ cái, số và khoảng trắng.',
    'alpha_space'           => 'Trường {field} chỉ được phép chứa các ký tự chữ cái và khoảng trắng.',
    'decimal'               => 'Trường {field} phải chứa một số thập phân.',
    'differs'               => 'Trường {field} phải khác với trường {param}.',
    'equals'                => 'Trường {field} phải chính xác là {param}.',
    'exact_length'          => 'Trường {field} phải có độ dài chính xác {param} ký tự.',
    'field_exists'          => 'Trường {field} phải tồn tại.',
    'greater_than'          => 'Trường {field} phải chứa một số lớn hơn {param}.',
    'greater_than_equal_to' => 'Trường {field} phải chứa một số lớn hơn hoặc bằng {param}.',
    'hex'                   => 'Trường {field} chỉ được phép chứa các ký tự số thập lục phân.',
    'in_list'               => 'Trường {field} phải là một trong các giá trị sau: {param}.',
    'integer'               => 'Trường {field} phải chứa một số nguyên.',
    'is_natural'            => 'Trường {field} chỉ được phép chứa các chữ số.',
    'is_natural_no_zero'    => 'Trường {field} chỉ được phép chứa các chữ số và phải lớn hơn không.',
    'is_not_unique'         => 'Trường {field} phải chứa một giá trị đã tồn tại trong cơ sở dữ liệu.',
    'is_unique'             => 'Trường {field} phải chứa một giá trị duy nhất.',
    'less_than'             => 'Trường {field} phải chứa một số nhỏ hơn {param}.',
    'less_than_equal_to'    => 'Trường {field} phải chứa một số nhỏ hơn hoặc bằng {param}.',
    'matches'               => 'Trường {field} không khớp với trường {param}.',
    'max_length'            => 'Trường {field} không được vượt quá độ dài {param} ký tự.',
    'min_length'            => 'Trường {field} phải có độ dài ít nhất {param} ký tự.',
    'not_equals'            => 'Trường {field} không được phép bằng {param}.',
    'not_in_list'           => 'Trường {field} phải là một phần tử trong danh sách này: {param}.',
    'numeric'               => 'Trường {field} chỉ được phép chứa các số.',
    'regex_match'           => 'Trường {field} không đúng định dạng.',
    'required'              => 'Trường {field} là bắt buộc.',
    'required_with'         => 'Trường {field} là bắt buộc nếu {param} tồn tại.',
    'required_without'      => 'Trường {field} là bắt buộc nếu {param} không tồn tại.',
    'string'                => 'Trường {field} phải chứa một chuỗi hợp lệ.',
    'timezone'              => 'Trường {field} phải là một múi giờ hợp lệ.',
    'valid_base64'          => 'Trường {field} phải chứa một chuỗi base64 hợp lệ.',
    'valid_email'           => 'Trường {field} phải chứa một địa chỉ email hợp lệ.',
    'valid_emails'          => 'Trường {field} phải chứa các địa chỉ email hợp lệ.',
    'valid_ip'              => 'Trường {field} phải chứa một địa chỉ IP hợp lệ.',
    'valid_url'             => 'Trường {field} phải chứa một URL hợp lệ.',
    'valid_url_strict'      => 'Trường {field} phải chứa một URL hợp lệ.',
    'valid_date'            => 'Trường {field} phải chứa một ngày hợp lệ.',
    'valid_json'            => 'Trường {field} phải chứa một chuỗi json hợp lệ.',

    // Credit Cards
    'valid_cc_num' => 'Trường {field} dường như không chứa một số thẻ tín dụng hợp lệ.',

    // Files
    'uploaded' => 'Trường {field} không chứa một tệp tin đã tải lên hợp lệ.',
    'max_size' => 'Trường {field} chứa một tệp tin quá lớn.',
    'is_image' => 'Trường {field} không chứa một tệp tin hình ảnh hợp lệ đã tải lên.',
    'mime_in'  => 'Trường {field} không chứa một loại Mime hợp lệ.',
    'ext_in'   => 'Trường {field} không chứa một phần mở rộng tệp tin hợp lệ.',
    'max_dims' => 'Trường {field} không chứa hình ảnh nào hoặc hình ảnh quá rộng hoặc quá cao.',
];
