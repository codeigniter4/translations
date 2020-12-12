<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
	'mustBeArray'          => 'Phương thức xác thực email phải được thông qua một mảng.',
	'invalidAddress'       => 'Địa chỉ email không hợp lệ: {0}',
	'attachmentMissing'    => 'Không thể định vị tệp đính kèm email sau: {0}',
	'attachmentUnreadable' => 'Không thể mở tệp đính kèm này: {0}',
	'noFrom'               => 'Không thể gửi thư mà không có "From" header.',
	'noRecipients'         => 'Bạn phải bao gồm người nhận: To, Cc, or Bcc',
	'sendFailurePHPMail'   => 'Không thể gửi email bằng PHP mail(). Máy chủ của bạn có thể không được cấu hình để gửi thư bằng phương thức này.',
	'sendFailureSendmail'  => 'Không thể gửi email bằng PHP Sendmail. Máy chủ của bạn có thể không được cấu hình để gửi thư bằng phương thức này.',
	'sendFailureSmtp'      => 'Không thể gửi email bằng PHP SMTP. Máy chủ của bạn có thể không được cấu hình để gửi thư bằng phương thức này.',
	'sent'                 => 'Tin nhắn của bạn đã được gửi thành công bằng giao thức sau: {0}',
	'noSocket'             => 'Không thể mở ổ cắm cho Sendmail. Vui lòng kiểm tra cài đặt.',
	'noHostname'           => 'Bạn đã không chỉ định tên máy chủ SMTP.',
	'SMTPError'            => 'Đã xảy ra lỗi SMTP sau đây: {0}',
	'noSMTPAuth'           => 'Lỗi: Bạn phải chỉ định tên người dùng và mật khẩu SMTP.',
	'failedSMTPLogin'      => 'Không thể gửi lệnh AUTH LOGIN. Lỗi: {0}',
	'SMTPAuthUsername'     => 'Không thể xác thực tên người dùng. Lỗi: {0}',
	'SMTPAuthPassword'     => 'Không thể xác thực mật khẩu. Lỗi: {0}',
	'SMTPDataFailure'      => 'Không thể gửi dữ liệu: {0}',
];
