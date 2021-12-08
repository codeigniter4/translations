<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cookie language settings
return [
    'invalidExpiresTime'    => '"Expires" özelliği için geçersiz "{0}" tür. Beklenti: string, integer, DateTimeInterface nesnesi.',
    'invalidExpiresValue'   => 'Çerez sona erme zamanı geçerli değil.',
    'invalidCookieName'     => 'Çerez adı "{0}" geçersiz karakterler içeriyor.',
    'emptyCookieName'       => 'Çerez adı boş olamaz.',
    'invalidSecurePrefix'   => '"__Secure-" ön ekini kullanmak "Secure" özelliğini ayarlamayı gerektiriyor.',
    'invalidHostPrefix'     => '"__Host-" ön ekini kullanmak "Secure" işaretiyle ayarlanmalı, "Domain" özelliği olmamalı, ve "Path" şu şekilde ayarlanmalı: "/".',
    'invalidSameSite'       => 'SameSite değeri None, Lax, Strict ya da boş bir string olmalı, verilen {0}.',
    'invalidSameSiteNone'   => '"SameSite=None" özelliğini kullanmak "Secure" özelliğini ayarlamayı gerektiriyor.',
    'invalidCookieInstance' => '"{0}" sınıfı çerez dizilerinin (array) "{1}"\'in bir örneği olmasını bekledi ancak {3} dizininde "{2}" vardı .',
    'unknownCookieInstance' => '"{0}" ismiyle ve "{1}" ön ekiyle çerez nesnesi yığın içinde bulunmadı.',
];
