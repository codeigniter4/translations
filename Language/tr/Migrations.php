<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'Göç tablosu ayarlanmalıdır.',
    'disabled'      => 'Göçler yüklendi ancak devre dışı bırakıldı veya yanlış şekilde kuruldu.',
    'notFound'      => 'Göç dosyası bulunamadı: ',
    'batchNotFound' => 'Hedef göç grubu bulunamadı: ',
    'empty'         => 'Göç dosyası bulunamadı',
    'gap'           => 'Göç sırasında sürüm numarası yakınında bir boşluk var: ',
    'classNotFound' => '"%s" göç sınıfı bulunamadı.',
    'missingMethod' => 'Göç sınıfında "%s" metodu eksik.',

    // Migration Command
    'migHelpLatest'   => "\t\tVeri tabanını en son kullanılabilir göçe taşır.",
    'migHelpCurrent'  => "\t\tVeri tabanını, yapılandırmada 'güncel' olarak ayarlanan sürüme taşır.",
    'migHelpVersion'  => "\tVeri tabanını {v} sürümüne taşır.",
    'migHelpRollback' => "\tTüm göçleri 'aşağı', sürüm 0'a taşır..",
    'migHelpRefresh'  => "\t\tTüm göçleri kaldırır ve veri tabanını yenilemek için yeniden çalıştırır.",
    'migHelpSeed'     => "\t[name] adlı tohumlayıcıyı çalıştırır.",
    'migCreate'       => "\t[name] adlı yeni bir göç oluşturur.",
    'nameMigration'   => 'Göç dosyasını adlandırın',
    'migNumberError'  => 'Göç numarası üç basamaklı olmalı ve sırada hiçbir boşluk olmamalıdır.',
    'rollBackConfirm' => 'Geri almayı gerçekten istiyor musunuz?',
    'refreshConfirm'  => 'Yenilemeyi gerçekten istiyor musunuz?',

    'latest'            => 'Tüm yeni göçler çalıştırılıyor...',
    'generalFault'      => 'Göç başarısız oldu!',
    'migrated'          => 'Göçler tamamlandı.',
    'migInvalidVersion' => 'Geçersiz sürüm numarası verildi.',
    'toVersionPH'       => '%s sürümüne taşınıyor...',
    'toVersion'         => 'Güncel sürüme taşınıyor...',
    'rollingBack'       => 'Göçler, şu göç grubuna geri alınıyor: ',
    'noneFound'         => 'Hiçbir göç bulunamadı.',
    'migSeeder'         => 'Tohumlayıcı adı',
    'migMissingSeeder'  => 'Bir tohumlayıcı adı belirtmelisiniz.',
    'nameSeeder'        => 'Tohumlayıcı dosyasını adlandırın',
    'removed'           => 'Geri alınıyor: ',
    'added'             => 'Çalıştırılıyor: ',

    // Migrate Status
    'namespace' => 'Ad Alanı',
    'filename'  => 'Dosya Adı',
    'version'   => 'Sürüm',
    'group'     => 'Grup',
    'on'        => 'Taşındı: ',
    'batch'     => 'Göç Grubu',
];
