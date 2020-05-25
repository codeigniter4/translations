<?php

/**
 * Image language strings.
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
	'sourceImageRequired'    => 'Anda harus menentukan sebuah sumber gambar dalam preferensi Anda.',
	'gdRequired'             => 'Pustaka gambar GD diperlukan untuk menggunakan fitur ini....',
	'gdRequiredForProps'     => 'Server Anda harus mendukung pustaka gambar GD untuk menentukan properti gambar.',
	'gifNotSupported'        => 'Gambar GIF sering tidak didukung karena pembatasan perizinan. Anda mungkin harus menggunakan gambar JPG atau PNG sebagai gantinya.',
	'jpgNotSupported'        => 'Gambar JPG tidak didukung.',
	'pngNotSupported'        => 'Gambar PNG tidak didukung.',
	'unsupportedImageCreate' => 'Server Anda tidak mendukung fungsi GD yang diperlukan untuk memproses jenis gambar ini.',
	'jpgOrPngRequired'       => 'Protokol pengubahan ukuran gambar yang ditentukan dalam preferensi Anda hanya berfungsi dengan jenis gambar JPEG atau PNG.',
	'rotateUnsupported'      => 'Rotasi gambar sepertinya tidak didukung oleh server Anda.',
	'libPathInvalid'         => 'Jalur ke pustaka gambar Anda tidak benar. Silakan mengatur jalur yang benar dalam preferensi gambar Anda. {0, string)',
	'imageProcessFailed'     => 'Pemrosesan gambar gagal. Harap verifikasi bahwa server Anda mendukung protokol yang dipilih dan jalur ke pustaka gambar Anda sudah benar.',
	'rotationAngleRequired'  => 'Sudut rotasi diperlukan untuk memutar gambar.',
	'invalidPath'            => 'Jalur menuju gambar tidak benar.',
	'copyFailed'             => 'Salinan gambar gagal.',
	'missingFont'            => 'Tidak dapat menemukan sebuah huruf untuk digunakan.',
	'saveFailed'             => 'Tidak dapat menyimpan gambar. Pastikan gambar dan direktori berkas dapat ditulis.',
	'invalidDirection'       => 'Arah balik hanya bisa `vertical` atau `horizontal`. Diberikan: {0}',
	'exifNotSupported'       => 'Membaca data EXIF tidak didukung oleh instalasi PHP ini.',
];
