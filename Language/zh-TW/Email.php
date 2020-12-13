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
	'mustBeArray'          => '電子郵件驗證方法（email validation method）必須傳入一個陣列。',
	'invalidAddress'       => '無效的電子郵件地址: {0}',
	'attachmentMissing'    => '找不到以下附件: {0}',
	'attachmentUnreadable' => '無法開啟此附件: {0}',
	'noFrom'               => '請設定發件人（From），否則將無法傳送。',
	'noRecipients'         => '請設定收件人（Recipients），收件人可以是: 發送給（To）、副本（CC），或密件副本（BCC）',
	'sendFailurePHPMail'   => '無法使用 PHP mail() 傳送電子郵件。您的伺服器可能尚未配置使用這個方法發送郵件的相關設定。',
	'sendFailureSendmail'  => '無法使用 PHP Sendmail 傳送電子郵件。您的伺服器可能尚未配置使用這個方法發送郵件的相關設定。',
	'sendFailureSmtp'      => '無法使用 PHP SMTP 傳送電子郵件。您的伺服器可能尚未配置使用這個方法發送郵件的相關設定。',
	'sent'                 => '您的郵件已使用下列協議成功寄出: {0}',
	'noSocket'             => '無法打開基座（Socket）傳送電子郵件，請確定您的設定是否正確。',
	'noHostname'           => '尚未指定SMTP的主機名稱。',
	'SMTPError'            => '發生以下SMTP錯誤: {0}',
	'noSMTPAuth'           => '錯誤: 您必須指定一組SMTP的使用者名稱與密碼。',
	'failedSMTPLogin'      => '無法傳送 AUTH LOGIN 指令。 錯誤: {0}',
	'SMTPAuthUsername'     => '驗證使用者名稱失敗。 錯誤: {0}',
	'SMTPAuthPassword'     => '驗證密碼失敗。 錯誤: {0}',
	'SMTPDataFailure'      => '無法傳送資料： {0}',
	'exitStatus'           => '結束（Exit）的狀態碼: {0}',
];
