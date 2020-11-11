<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Migration language settings
return [
	// Migration Runner
	'missingTable'    => 'Tabel migrasi harus diatur.',
//	'invalidType'     => 'Jenis penomoran migrasi tidak valid telah ditentukan: {0}',
	'disabled'        => 'Migrasi telah dimuat tetapi dinonaktifkan atau pengaturan salah.',
	'notFound'        => 'Berkas migrasi tidak ditemukan: ',
	'batchNotFound'     => 'Sejumlah target tidak ditemukan: ',
	'empty'           => 'Tidak ditemukan berkas Migrasi',
	'gap'             => 'Ada sebuah celah dalam urutan migrasi dekat nomor versi: ',
	'classNotFound'   => 'Kelas migrasi "%s" tidak dapat ditemukan.',
	'missingMethod'   => 'Kelas migrasi kehilangan metode "%s".',

	// Migration Command
	'migHelpLatest'   => "\t\tMigrasi basis data ke migrasi terbaru yang tersedia.",
	'migHelpCurrent'  => "\t\tMigrasi basis data ke versi yang ditetapkan sebagai 'saat ini' dalam konfigurasi.",
	'migHelpVersion'  => "\tMigrasi basis data ke versi {v}.",
	'migHelpRollback' => "\tMenjalankan semua migrasi 'turun' ke versi 0.",
	'migHelpRefresh'  => "\t\tUninstal dan jalankan kembali semua migrasi untuk menyegarkan basis data.",
	'migHelpSeed'     => "\tMenjalankan seeder bernama [name].",
	'migCreate'       => "\tMenciptakan sebuah nama migrasi baru bernama [name]",
	'nameMigration'   => 'Beri nama berkas migrasi',
	'badCreateName'   => 'Anda harus memberikan sebuah nama berkas migrasi.',
	'writeError'      => 'Kesalahan saat mencoba membuat berkas.',
	'migNumberError'    => 'Nomor migrasi harus tiga digit dan tidak boleh ada jarak pada urutan.',

	'latest'            => 'Menjalankan semua migrasi baru...',
	'generalFault'      => 'Migrasi gagal!',
//	'toLatest'          => 'Migrasi ke versi terbaru...',
	'migInvalidVersion' => 'Nomor versi tidak valid diberikan.',
	'toVersionPH'       => 'Migrasi ke versi %s...',
	'toVersion'         => 'Migrasi ke versi saat ini...',
	'rollingBack'       => 'Mengembalikan semua migrasi...',
	'noneFound'         => 'Tidak ada migrasi yang ditemukan.',
	'on'                => 'Dimigrasi Pada: ',
	'migSeeder'         => 'Nama seeder',
	'migMissingSeeder'  => 'Anda harus memberikan sebuah nama seeder.',
	'removed'           => 'Mengembalikan: ',
	'added'             => 'Berjalan: ',

	'version'           => 'Versi',
	'filename'          => 'Nama berkas',
];
