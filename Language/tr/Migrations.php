<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
	// Migration Runner
	'missingTable'  => 'Göç tablosu belirtilmeli.',
	'disabled'      => 'Göçler yüklendi fakat etkinleştirilmedi veya yanlış kuruldu.',
	'notFound'      => 'Göç dosyası bulunamadı: ',
	'empty'         => 'Herhangi bir göç dosyası bulunamadı.',
	'gap'           => 'Göç kuyruğunda şu sürüm numarası yakınında bir boşluk var: ',
	'classNotFound' => 'Göç sınıfı "%s" bulunamadı.',
	'missingMethod' => 'Göç sınıfının "%s" metodu eksik.',

	// Migration Command
	'migHelpLatest'   => "\t\tVeri tabanını son göç sürümüne taşır.",
	'migHelpCurrent'  => "\t\tVeri tabınını ayarlarda 'current' (mevcut) olarak belirtilen sürüme taşır.",
	'migHelpVersion'  => "\tVeri tabanını {v} şu sürümüne taşır.",
	'migHelpRollback' => "\tTüm göçleri 0 sürümüne indirir.",
	'migHelpRefresh'  => "\t\tVeri tabanını yenilemek için tüm göçleri kaldırır ve yeniden çalıştırır.",
	'migHelpSeed'     => "\t[name] isimli tohumlayıcıyı çalıştırır.",
	'migCreate'       => "\t[name] isimli yeni bir göç oluşturur.",
	'nameMigration'   => 'Göç dosyasına bir isim verin.',

	'migInvalidVersion' => 'Geçersiz sürüm numarası belirtildi.',
	'toVersionPH'       => '%s sürümüne göçülüyor...',
	'toVersion'         => 'Mevcut sürüme göçülüyor....',
	'rollingBack'       => 'Tüm göçler geri alınıyor...',
	'noneFound'         => 'Herhangi bir göç bulunamadı.',
	'on'                => 'Göçüldü: ',
	'migSeeder'         => 'Tohumlayıcı adı',
	'migMissingSeeder'  => 'Tohumlayıcı adı belirtmelisiniz.',
	'removed'           => 'Geri alınıyor: ',
	'added'             => 'Çalıştırılıyor: ',

	'version'  => 'Sürüm',
	'filename' => 'Dosya adı',
];
