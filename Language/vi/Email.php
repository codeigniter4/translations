<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
    'mustBeArray'          => 'Phương thức xác thực email phải được truyền một mảng.',
    'invalidAddress'       => 'Địa chỉ email không hợp lệ: {0}',
    'attachmentMissing'    => 'Không thể tìm thấy tệp đính kèm sau: {0}',
    'attachmentUnreadable' => 'Lỗi khi mở tệp đính kèm: {0}',
    'noFrom'               => 'Không thể gửi email mà không có tiêu đề "From".',
    'noRecipients'         => 'Không có người nhận được thiết lập. Cần có giá trị cho To, Cc hoặc Bcc.',
    'sendFailurePHPMail'   => 'Gửi email bằng PHP mail() thất bại. Có thể máy chủ không được cấu hình để gửi email bằng phương thức này.',
    'sendFailureSendmail'  => 'Gửi email bằng PHP Sendmail thất bại. Có thể máy chủ không được cấu hình để gửi email bằng phương thức này.',
    'sendFailureSmtp'      => 'Gửi email bằng PHP SMTP thất bại. Có thể máy chủ không được cấu hình để gửi email bằng phương thức này.',
    'sent'                 => 'Tin nhắn đã được gửi thành công với giao thức sau: {0}',
    'noSocket'             => 'Không thể mở socket cho Sendmail. Vui lòng kiểm tra cài đặt.',
    'noHostname'           => 'Không có tên máy chủ SMTP được xác định.',
    'SMTPError'            => 'Đã xảy ra lỗi SMTP sau: {0}',
    'noSMTPAuth'           => 'Lỗi: Cần có tên người dùng và mật khẩu SMTP.',
    'failedSMTPLogin'      => 'Không thể gửi AUTH LOGIN. Lỗi: {0}',
    'SMTPAuthUsername'     => 'Không thể xác thực tên người dùng. Lỗi: {0}',
    'SMTPAuthPassword'     => 'Không thể xác thực mật khẩu. Lỗi: {0}',
    'SMTPDataFailure'      => 'Không thể gửi dữ liệu: {0}',
    'exitStatus'           => 'Mã trạng thái thoát: {0}',
];
