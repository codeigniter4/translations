<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Images language settings
return [
	'sourceImageRequired'    => 'Tercihlerinizde bir kaynak resim belirtmelisiniz.',
	'gdRequired'             => 'Bu özelliği kullanabilmek için GD resim kütüphanesi gerekli.',
	'gdRequiredForProps'     => 'Resmin özelliklerini belirleyebilmek için sunucunuzun GD resim kütüphanesini desteklemesi gerekir.',
	'gifNotSupported'        => 'GIF resimleri lisans sınırlamaları nedeniyle genellikle desteklenmez. Bunun yerine JPG veya PNG resimler kullanabilirsiniz.',
	'jpgNotSupported'        => 'JPG resimler desteklenmiyor.',
	'pngNotSupported'        => 'PNG resimler desteklenmiyor.',
	'unsupportedImageCreate' => 'Sunucunuz bu tür resmi işlemek için gerekli GD fonksiyonunu desteklemiyor.',
	'jpgOrPngRequired'       => 'Tercihlerinizde belirttiğiniz resim boyutlandırma protokolü yalnız JPEG veya PNG resim türleriyle çalışır.',
	'rotateUnsupported'      => 'Resim döndürme sunucunuz tarafından desteklenmiyor.',
	'libPathInvalid'         => 'Resim kütüphanesi yolu doğru değil. Lütfen resim tercihlerinizde doğru yolu belirtiniz. {0, string)',
	'imageProcessFailed'     => 'Resim işleme başarısız. Lütfen sunucunuzun seçilen protokolü desteklediğini resim kütüphanesi yolunun doğru olduğunu kontrol ediniz.',
	'rotationAngleRequired'  => 'Resmi döndürebilmek için bir döndürme açısı belirtilmeli.',
	'invalidPath'            => 'Resmin yolu doğru değil.',
	'copyFailed'             => 'Resim kopyalama işlemi başarısız.',
	'missingFont'            => 'Kullanılacak bir yazıtipi bulunamadı.',
	'saveFailed'             => 'Resim kaydedilemedi. Resim dosyasının ve klasörün yazılabilir olduğundan emin olunuz.',
	'invalidDirection'       => 'Çevirme yönü yalnızca `vertical` veya `horizontal` olabilir. Verilen: {0}',
	'exifNotSupported'       => 'Reading EXIF verisi okuma işlemi bu PHP kurulumunda desteklenmiyor.',
];
