<?php

/**
 * Session language strings.
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
	'missingDatabaseTable'   => '`sessionSavePath` harus memiliki nama tabel untuk Handler Sesi Basis Data agar bekerja.',
	'invalidSavePath'        => 'Sesi: Jalur penyimpanan terkonfigurasi "{0}" bukan sebuah direktori, tidak ada atau tidak dapat dibuat.',
	'writeProtectedSavePath' => 'Sesi: Jalur penyimpanan terkonfigurasi "{0}" tidak dapat ditulis oleh proses PHP.',
	'emptySavePath'          => 'Sesi: Tidak ada jalur penyimpanan yang dikonfigurasi.',
	'invalidSavePathFormat'  => 'Sesi: Format jalur penyimpanan Redis tidak valid: {0}',
];
