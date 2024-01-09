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
    'batchNotFound' => 'Hedef batch bulunamadı: ',
    'empty'         => 'Göç dosyası bulunamadı',
    'gap'           => 'Göç sırasında sürüm numarası yakınında bir boşluk var: ',
    'classNotFound' => '"%s" göç sınıfı bulunamadı.',
    'missingMethod' => 'Göç sınıfında "%s" metodu eksik.',

    // Migration Command
    'migHelpLatest'   => "\t\tVeritabanını en son kullanılabilir göçe taşır.",
    'migHelpCurrent'  => "\t\tVeritabanını yapılandırmada 'güncel' olarak ayarlanan sürüme taşır.",
    'migHelpVersion'  => "\tVeritabanını {v} sürümüne taşır.",
    'migHelpRollback' => "\tTüm göçleri sürüm 0'a 'aşağı' taşır.",
    'migHelpRefresh'  => "\t\tTüm göçleri kaldırır ve veritabanını yenilemek için yeniden çalıştırır.",
    'migHelpSeed'     => "\t[name] adlı tohumlayıcıyı çalıştırır.",
    'migCreate'       => "\tYeni bir göç oluşturur adlandırılmış [name]",
    'nameMigration'   => 'Göç dosyasını adlandırın',
    'migNumberError'  => 'Göç numarası üç basamaklı olmalı ve sıradaki hiçbir boşluk olmamalıdır.',
    'rollBackConfirm' => 'Geri almayı gerçekten istiyor musunuz?',
    'refreshConfirm'  => 'Yenilemeyi gerçekten istiyor musunuz?',

    'latest'            => 'Tüm yeni göçler çalıştırılıyor...',
    'generalFault'      => 'Göç başarısız oldu!',
    'migrated'          => 'Göçler tamamlandı.',
    'migInvalidVersion' => 'Geçersiz sürüm numarası verildi.',
    'toVersionPH'       => '%s sürümüne taşınıyor...',
    'toVersion'         => 'Güncel sürüme taşınıyor...',
    'rollingBack'       => 'Göçler geri alınıyor batch: ',
    'noneFound'         => 'Hiçbir göç bulunamadı.',
    'migSeeder'         => 'Tohumlayıcı adı',
    'migMissingSeeder'  => 'Bir tohumlayıcı adı belirtmelisiniz.',
    'nameSeeder'        => 'Tohumlayıcı dosyasını adlandırın',
    'removed'           => 'Geri alınıyor: ',
    'added'             => 'Çalıştırılıyor: ',

    // Göç Durumu
    'namespace' => 'Ad Alanı',
    'filename'  => 'Dosya Adı',
    'version'   => 'Sürüm',
    'group'     => 'Grup',
    'on'        => 'Taşındı: ',
    'batch'     => 'Batch',
];
