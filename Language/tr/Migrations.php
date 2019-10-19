<?php

/**
 * Migration language strings.
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
	// Migration Runner
	'missingTable'    => 'Göç tablosu belirtilmeli.',
	'invalidType'     => 'Geçersiz göç numaralama türü: {0}',
	'disabled'        => 'Göçler yüklendi fakat etkinleştirilmedi veya yanlış kuruldu.',
	'notFound'        => 'Göç dosyası bulunamadı: ',
	'empty'           => 'Herhangi bir göç dosyası bulunamadı.',
	'gap'             => 'Göç kuyruğunda şu sürüm numarası yakınında bir boşluk var: ',
	'classNotFound'   => 'Göç sınıfı "%s" bulunamadı.',
	'missingMethod'   => 'Göç sınıfının "%s" metodu eksik.',

	// Migration Command
	'migHelpLatest'   => "\t\tVeri tabanını son göç sürümüne taşır.",
	'migHelpCurrent'  => "\t\tVeri tabınını ayarlarda 'current' (mevcut) olarak belirtilen sürüme taşır.",
	'migHelpVersion'  => "\tVeri tabanını {v} şu sürümüne taşır.",
	'migHelpRollback' => "\tTüm göçleri 0 sürümüne indirir.",
	'migHelpRefresh'  => "\t\tVeri tabanını yenilemek için tüm göçleri kaldırır ve yeniden çalıştırır.",
	'migHelpSeed'     => "\t[name] isimli tohumlayıcıyı çalıştırır.",
	'migCreate'       => "\t[name] isimli yeni bir göç oluşturur.",
	'nameMigration'   => 'Göç dosyasına bir isim verin.',
	'badCreateName'   => 'Bir göç dosyası adı belirtmelisiniz.',
	'writeError'      => 'Yazma hatası nedeniyle dosya oluşturulamadı.',

	'toLatest'          => 'Son sürüme göçülüyor...',
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

	'version'           => 'Sürüm',
	'filename'          => 'Dosya adı',
];
