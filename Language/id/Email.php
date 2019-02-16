<?php

/**
 * Email language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */
return [
	'mustBeArray'          => 'Metode validasi email harus melewati sebuah array.',
	'invalidAddress'       => 'Alamat email tidak valid: {0}',
	'attachmentMissing'    => 'Tidak dapat menemukan lampiran email berikut: {0}',
	'attachmentUnreadable' => 'Tidak dapat membuka lampiran ini: {0}',
	'noFrom'               => 'Tidak dapat mengirim email tanpa kepala "Dari".',
	'noRecipients'         => 'Anda harus menyertakan penerima: Kepada, Cc, or Bcc',
	'sendFailurePHPMail'   => 'Tidak dapat mengirim email menggunakan PHP mail(). Server anda mungkin tidak dikonfigurasi untuk mengirim email menggunakan metode ini.',
	'sendFailureSendmail'  => 'Tidak dapat mengirim email menggunakan PHP Sendmail. Server anda mungkin tidak dikonfigurasi untuk mengirim email menggunakan metode ini.',
	'sendFailureSmtp'      => 'Tidak dapat mengirim email menggunakan PHP SMTP. Server anda mungkin tidak dikonfigurasi untuk mengirim email menggunakan metode ini.',
	'sent'                 => 'Pesan anda telah berhasil dikirim menggunakan protokol berikut: {0, string}',
	'noSocket'             => 'Tidak dapat membuka sebuah soket ke Sendmail. Silakan periksa pengaturan.',
	'noHostname'           => 'Anda tidak menentukan sebuah nama host SMTP.',
	'SMTPError'            => 'Kesalahan SMTP berikut ditemukan: {0}',
	'noSMTPAuth'           => 'Kesalahan: Anda harus menetapkan sebuah nama pengguna dan kata sandi SMTP.',
	'failedSMTPLogin'      => 'Gagal mengirim perintah AUTH LOGIN. Kesalahan: {0}',
	'SMTPAuthUsername'     => 'Gagal mengautentikasi nama pengguna. Kesalahan: {0}',
	'SMTPAuthPassword'     => 'Gagal mengotentikasi kata sandi. Kesalahan: {0}',
	'SMTPDataFailure'      => 'Tidak dapat mengirim data: {0}',
	'exitStatus'           => 'Kode status keluar: {0}',
];
