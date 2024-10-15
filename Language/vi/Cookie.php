<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cookie language settings
return [
    'invalidExpiresTime'    => 'Kiểu dữ liệu "{0}" không hợp lệ cho thuộc tính "Expires". Mong đợi: Chuỗi, Số nguyên, hoặc đối tượng DateTimeInterface.',
    'invalidExpiresValue'   => 'Thời gian hết hạn của cookie không hợp lệ.',
    'invalidCookieName'     => 'Cookie "{0}" chứa ký tự không hợp lệ.',
    'emptyCookieName'       => 'Tên cookie không được để trống.',
    'invalidSecurePrefix'   => 'Tiền tố "__Secure-" yêu cầu thuộc tính "Secure".',
    'invalidHostPrefix'     => 'Việc sử dụng tiền tố "__Host-" phải đi kèm với cờ "Secure", không có thuộc tính "Domain", và đường dẫn (Path) phải được đặt là "/".',
    'invalidSameSite'       => 'Cài đặt SameSite chỉ có thể là None, Lax, Strict, hoặc chuỗi trống. Đã nhận: {0}',
    'invalidSameSiteNone'   => 'Nếu thuộc tính "SameSite=None" được thiết lập, thuộc tính "Secure" cũng phải được thiết lập.',
    'invalidCookieInstance' => 'Lớp "{0}" mong đợi mảng cookie là một thể hiện của "{1}", nhưng nhận được "{2}" tại chỉ số {3}.',
    'unknownCookieInstance' => 'Đối tượng cookie với tên "{0}" và tiền tố "{1}" không được tìm thấy trong bộ sưu tập.',
];
