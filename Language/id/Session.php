<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Session language settings
return [
	'missingDatabaseTable'   => '`sessionSavePath` harus memiliki nama tabel untuk Handler Sesi Basis Data agar bekerja.',
	'invalidSavePath'        => 'Sesi: Jalur penyimpanan terkonfigurasi "{0}" bukan sebuah direktori, tidak ada atau tidak dapat dibuat.',
	'writeProtectedSavePath' => 'Sesi: Jalur penyimpanan terkonfigurasi "{0}" tidak dapat ditulis oleh proses PHP.',
	'emptySavePath'          => 'Sesi: Tidak ada jalur penyimpanan yang dikonfigurasi.',
	'invalidSavePathFormat'  => 'Sesi: Format jalur penyimpanan Redis tidak valid: {0}',
	'invalidSameSiteSetting' => 'Sesi: Pengaturan SameSite harus ada, Lax, Strict, atau string kosong. Diberikan: {0}',
];
