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
    'invalidExpiresTime'    => 'Jenis "{0}" tidak valid untuk atribut "Kedaluwarsa". Diharapkan: string, integer, objek DateTimeInterface.',
    'invalidExpiresValue'   => 'Waktu kedaluwarsa cookie tidak valid.',
    'invalidCookieName'     => 'Nama cookie "{0}" mengandung karakter yang tidak valid.',
    'emptyCookieName'       => 'Nama cookie tidak boleh kosong.',
    'invalidSecurePrefix'   => 'Menggunakan awalan "__Secure-" memerlukan pengaturan atribut "Secure".',
    'invalidHostPrefix'     => 'Menggunakan awalan "__Host-" harus disetel dengan tanda "Secure", tidak boleh memiliki atribut "Domain", dan "Path" disetel ke "/".',
    'invalidSameSite'       => 'Nilai SameSite harus None, Lax, Strict atau string kosong, diberikan "{0}".',
    'invalidSameSiteNone'   => 'Menggunakan atribut "SameSite=None" memerlukan pengaturan atribut "Secure".',
    'invalidCookieInstance' => 'Kelas "{0}" mengharapkan susunan cookie menjadi instance "{1}" tetapi mendapatkan "{2}" pada indeks "{3}".',
    'unknownCookieInstance' => 'Objek cookie dengan nama "{0}" dan awalan "{1}" tidak ditemukan dalam koleksi.',
];
