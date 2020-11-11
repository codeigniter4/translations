<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Email language settings
return [
	'mustBeArray'          => 'Metode validasi surel harus melewati sebuah array.',
	'invalidAddress'       => 'Alamat surel tidak valid: {0}',
	'attachmentMissing'    => 'Tidak dapat menemukan lampiran surel berikut: {0}',
	'attachmentUnreadable' => 'Tidak dapat membuka lampiran ini: {0}',
	'noFrom'               => 'Tidak dapat mengirim surel tanpa kepala "Dari".',
	'noRecipients'         => 'Anda harus menyertakan penerima: Kepada, Cc, or Bcc',
	'sendFailurePHPMail'   => 'Tidak dapat mengirim surel menggunakan PHP mail(). Server Anda mungkin tidak dikonfigurasi untuk mengirim surel menggunakan metode ini.',
	'sendFailureSendmail'  => 'Tidak dapat mengirim surel menggunakan PHP Sendmail. Server Anda mungkin tidak dikonfigurasi untuk mengirim surel menggunakan metode ini.',
	'sendFailureSmtp'      => 'Tidak dapat mengirim surel menggunakan PHP SMTP. Server Anda mungkin tidak dikonfigurasi untuk mengirim surel menggunakan metode ini.',
	'sent'                 => 'Pesan Anda telah berhasil dikirim menggunakan protokol berikut: {0}',
	'noSocket'             => 'Tidak dapat membuka sebuah soket ke Sendmail. Silakan periksa pengaturan.',
	'noHostname'           => 'Anda tidak menentukan sebuah nama host SMTP.',
	'SMTPError'            => 'Kesalahan SMTP berikut ditemukan: {0}',
	'noSMTPAuth'           => 'Kesalahan: Anda harus menetapkan sebuah nama pengguna dan kata sandi SMTP.',
	'failedSMTPLogin'      => 'Gagal mengirim perintah AUTH LOGIN. Kesalahan: {0}',
	'SMTPAuthUsername'     => 'Gagal mengautentikasi nama pengguna. Kesalahan: {0}',
	'SMTPAuthPassword'     => 'Gagal mengautentikasi kata sandi. Kesalahan: {0}',
	'SMTPDataFailure'      => 'Tidak dapat mengirim data: {0}',
	'exitStatus'           => 'Kode status keluar: {0}',
];
