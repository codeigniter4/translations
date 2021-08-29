<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'CURL harus diaktifkan untuk menggunakan kelas CURLRequest.',
    'invalidSSLKey'   => 'Tidak dapat mengatur Kunci SSL. {0} bukan sebuah berkas yang valid.',
    'sslCertNotFound' => 'Sertifikat SSL tidak ditemukan di: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} bukan sebuah jenis negosiasi yang valid. Harus salah satu: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol' => 'Versi Protokol HTTP Tidak Valid. Harus salah satu: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Anda harus memberikan sebuah array dari nilai yang didukung untuk semua Negosiasi.',

    // RedirectResponse
    'invalidRoute' => '{0} bukan sebuah rute yang valid.',

    // DownloadResponse
    'cannotSetBinary'        => 'Saat mengatur filepath, tidak dapat mengatur binary.',
    'cannotSetFilepath'      => 'Saat mengatur binary, tidak dapat mengatur filepath: {0}',
    'notFoundDownloadSource' => 'Tidak ditemukan badan sumber unduhan.',
    'cannotSetCache'         => 'Itu tidak mendukung cache untuk mengunduh.',
    'cannotSetStatusCode'    => 'Itu tidak mendukung perubahan kode status untuk mengunduh. kode: {0}, alasan: {1}',

    // Response
    'missingResponseStatus' => 'Tanggapan HTTP kehilangan sebuah kode status',
    'invalidStatusCode'     => '{0} bukan sebuah kode status pengembalian HTTP yang valid',
    'unknownStatusCode'     => 'Kode status HTTP tidak dikenal diberikan tanpa pesan: {0}',

    // URI
    'cannotParseURI'       => 'Tidak dapat mengurai URI: {0}',
    'segmentOutOfRange'    => 'Permintaan segmen URI berada di luar jangkauan: {0}',
    'invalidPort'          => 'Port harus antara 0 dan 65535. Diberikan: {0}',
    'malformedQueryString' => 'String kueri tidak boleh menyertakan fragmen URI.',

    // Page Not Found
    'pageNotFound'       => 'Halaman Tidak Ditemukan',
    'emptyController'    => 'Tidak ada Controller yang ditentukan.',
    'controllerNotFound' => 'Controller atau metodenya tidak ditemukan: {0}::{1}',
    'methodNotFound'     => 'Metode controller tidak ditemukan: {0}',

    // CSRF
    'disallowedAction' => 'Tindakan yang Anda minta tidak diizinkan.',

    // Uploaded file moving
    'alreadyMoved' => 'Berkas yang diunggah telah dipindahkan.',
    'invalidFile'  => 'Berkas asli tersebut bukan berkas yang valid.',
    'moveFailed'   => 'Tidak dapat memindahkan berkas {0} ke {1} ({2})',

    'uploadErrOk'        => 'Berkas berhasil diunggah.',
    'uploadErrIniSize'   => 'Berkas "%s" melampaui pengaturan upload_max_filesize Anda.',
    'uploadErrFormSize'  => 'Berkas "%s" melampaui batas unggahan yang ditentukan pada formulir Anda.',
    'uploadErrPartial'   => 'Berkas "%s" hanya sebagian yang terunggah.',
    'uploadErrNoFile'    => 'Tidak ada berkas yang terunggah.',
    'uploadErrCantWrite' => 'Berkas "%s" tidak dapat ditulis pada diska.',
    'uploadErrNoTmpDir'  => 'Berkas tidak dapat diunggah: direktori sementara tidak ditemukan.',
    'uploadErrExtension' => 'Unggahan berkas dihentikan oleh ekstensi PHP.',
    'uploadErrUnknown'   => 'Berkas "%s" tidak terunggah karena kesalahan yang tidak diketahui.',

    // SameSite setting
    'invalidSameSiteSetting' => 'Pengaturan SameSite harus None, Lax, Strict, atau string kosong. Diberikan: {0}',
];
