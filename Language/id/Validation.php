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
    'noRuleSets'      => 'Tidak ada aturan yang ditentukan dalam konfigurasi Validasi.',
    'ruleNotFound'    => '{0} bukan sebuah aturan yang valid.',
    'groupNotFound'   => '{0} bukan sebuah grup aturan validasi.',
    'groupNotArray'   => '{0} grup aturan harus berupa sebuah array.',
    'invalidTemplate' => '{0} bukan sebuah template Validasi yang valid.',

    // Rule Messages
    'alpha'                 => 'Bidang {field} hanya boleh mengandung karakter alfabet.',
    'alpha_dash'            => 'Bidang {field} hanya boleh berisi karakter alfanumerik, setrip bawah, dan tanda pisah.',
    'alpha_numeric'         => 'Bidang {field} hanya boleh berisi karakter alfanumerik.',
    'alpha_numeric_punct'   => 'Bidang {field} hanya boleh berisi karakter alfanumerik, spasi, dan karakter ~! # $% & * - _ + = | :..',
    'alpha_numeric_space'   => 'Bidang {field} hanya boleh berisi karakter alfanumerik dan spasi.',
    'alpha_space'           => 'Bidang {field} hanya boleh berisi karakter alfabet dan spasi.',
    'decimal'               => 'Bidang {field} harus mengandung sebuah angka desimal.',
    'differs'               => 'Bidang {field} harus berbeda dari bidang {param}.',
    'equals'                => 'Bidang {field} harus persis: {param}.',
    'exact_length'          => 'Bidang {field} harus tepat {param} panjang karakter.',
    'greater_than'          => 'Bidang {field} harus berisi sebuah angka yang lebih besar dari {param}.',
    'greater_than_equal_to' => 'Bidang {field} harus berisi sebuah angka yang lebih besar atau sama dengan {param}.',
    'hex'                   => 'Bidang {field} hanya boleh berisi karakter heksadesimal.',
    'in_list'               => 'Bidang {field} harus salah satu dari: {param}.',
    'integer'               => 'Bidang {field} harus mengandung bilangan bulat.',
    'is_natural'            => 'Bidang {field} hanya boleh berisi angka.',
    'is_natural_no_zero'    => 'Bidang {field} hanya boleh berisi angka dan harus lebih besar dari nol.',
    'is_not_unique'         => 'Bidang {field} harus berisi nilai yang sudah ada sebelumnya dalam database.',
    'is_unique'             => 'Bidang {field} harus mengandung sebuah nilai unik.',
    'less_than'             => 'Bidang {field} harus berisi sebuah angka yang kurang dari {param}.',
    'less_than_equal_to'    => 'Bidang {field} harus berisi sebuah angka yang kurang dari atau sama dengan {param}.',
    'matches'               => 'Bidang {field} tidak cocok dengan bidang {param}.',
    'max_length'            => 'Bidang {field} tidak bisa melebihi {param} panjang karakter.',
    'min_length'            => 'Bidang {field} setidaknya harus {param} panjang karakter.',
    'not_equals'            => 'Bidang {field} tidak boleh: {param}.',
    'not_in_list'           => 'Bidang {field} tidak boleh salah satu dari: {param}.',
    'numeric'               => 'Bidang {field} hanya boleh mengandung angka.',
    'regex_match'           => 'Bidang {field} tidak dalam format yang benar.',
    'required'              => 'Bidang {field} diperlukan.',
    'required_with'         => 'Bidang {field} diperlukan saat {param} hadir.',
    'required_without'      => 'Bidang {field} diperlukan saat {param} tidak hadir.',
    'string'                => 'Bidang {field} harus berupa string yang valid.',
    'timezone'              => 'Bidang {field} harus berupa sebuah zona waktu yang valid.',
    'valid_base64'          => 'Bidang {field} harus berupa sebuah string base64 yang valid.',
    'valid_email'           => 'Bidang {field} harus berisi sebuah alamat email yang valid.',
    'valid_emails'          => 'Bidang {field} harus berisi semua alamat email yang valid.',
    'valid_ip'              => 'Bidang {field} harus berisi sebuah IP yang valid.',
    'valid_url'             => 'Bidang {field} harus berisi sebuah URL yang valid.',
    'valid_date'            => 'Bidang {field} harus berisi sebuah tanggal yang valid.',

    // Credit Cards
    'valid_cc_num' => '{field} tidak tampak sebagai sebuah nomor kartu kredit yang valid.',

    // Files
    'uploaded' => '{field} bukan sebuah berkas diunggah yang valid.',
    'max_size' => '{field} terlalu besar dari sebuah berkas.',
    'is_image' => '{field} bukan berkas gambar diunggah yang valid.',
    'mime_in'  => '{field} tidak memiliki sebuah tipe mime yang valid.',
    'ext_in'   => '{field} tidak memiliki sebuah ekstensi berkas yang valid.',
    'max_dims' => '{field} bukan gambar, atau terlalu lebar atau tinggi.',
];
