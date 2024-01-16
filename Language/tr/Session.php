<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Session language settings
return [
    'missingDatabaseTable'   => 'Veri tabanı Oturum İşleyicisinin (Database Session Handler) çalışması için "sessionSavePath" bir tablo adı içermelidir.',
    'invalidSavePath'        => 'Oturum: Yapılandırılan kayıt yolu "{0}" bir dizin değil, mevcut değil veya oluşturulamıyor.',
    'writeProtectedSavePath' => 'Oturum: Yapılandırılan kayıt yolu "{0}" PHP işlemi tarafından yazılabilir değil.',
    'emptySavePath'          => 'Oturum: Kayıt yolu yapılandırılmamış.',
    'invalidSavePathFormat'  => 'Oturum: Geçersiz Redis kayıt yolu formatı: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => 'Oturum: SameSite ayarı None, Lax, Strict veya boş bir dizgi olmalıdır. Verilen: "{0}"',
];
