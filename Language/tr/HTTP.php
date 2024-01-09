<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'CURLRequest sınıfını kullanmak için CURL etkinleştirilmelidir.',
    'invalidSSLKey'   => 'SSL Anahtarı ayarlanamıyor. "{0}" geçerli bir dosya değil.',
    'sslCertNotFound' => 'SSL sertifikası burada bulunamadı: "{0}"',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" geçerli bir müzakere türü değil. Olması gerekenler: media, charset, encoding, language.',
    'invalidJSON'            => 'JSON dizgisi ayrıştırılamadı. Hata: {0}',
    'unsupportedJSONFormat'  => 'Sağlanan JSON formatı desteklenmiyor.',

    // Message
    'invalidHTTPProtocol' => 'Geçersiz HTTP Protokol Sürümü: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Tüm Müzakereler için desteklenen değerlerin bir dizisi sağlanmalıdır.',

    // RedirectResponse
    'invalidRoute' => '"{0}" için rota bulunamadı.',

    // DownloadResponse
    'cannotSetBinary'        => 'Dosya yolu ayarlanırken ikili ayarlanamaz.',
    'cannotSetFilepath'      => 'İkili ayarlanırken dosya yolu ayarlanamaz: "{0}"',
    'notFoundDownloadSource' => 'İndirme kaynağı bulunamadı.',
    'cannotSetCache'         => 'İndirme için önbellekleme desteklenmiyor.',
    'cannotSetStatusCode'    => 'İndirme için durum kodu değiştirme desteklenmiyor. Kod: {0}, sebep: {1}',

    // Response
    'missingResponseStatus' => 'HTTP Yanıtında bir durum kodu eksik',
    'invalidStatusCode'     => '{0} geçerli bir HTTP dönüş durum kodu değil',
    'unknownStatusCode'     => 'Mesajı olmayan bilinmeyen bir HTTP durum kodu sağlandı: {0}',

    // URI
    'cannotParseURI'       => 'URI ayrıştırılamıyor: "{0}"',
    'segmentOutOfRange'    => 'İstek URI segmenti aralık dışında: "{0}"',
    'invalidPort'          => 'Portlar 0 ile 65535 arasında olmalıdır. Verilen: {0}',
    'malformedQueryString' => 'Sorgu dizgileri URI parçalarını içermemelidir.',

    // Page Not Found
    'pageNotFound'       => 'Sayfa Bulunamadı',
    'emptyController'    => 'Bir Kontrolör belirtilmedi.',
    'controllerNotFound' => 'Kontrolör veya yöntemi bulunamadı: {0}::{1}',
    'methodNotFound'     => 'Kontrolör yöntemi bulunamadı: "{0}"',
    'localeNotSupported' => 'Dil desteği bulunamadı: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'İstediğiniz işlem izin verilmiyor.',

    // Uploaded file moving
    'alreadyMoved' => 'Yüklenen dosya zaten taşındı.',
    'invalidFile'  => 'Orijinal dosya geçerli bir dosya değil.',
    'moveFailed'   => 'Dosya "{0}" dan "{1}" e taşınamadı. Sebep: {2}',

    // File upload errors
    'uploadErrOk'        => 'Dosya başarıyla yüklendi.',
    'uploadErrIniSize'   => 'Dosya "%s" upload_max_filesize ini yönergenizi aşıyor.',
    'uploadErrFormSize'  => 'Dosya "%s" formunuzda tanımlanan yükleme limitini aşıyor.',
    'uploadErrPartial'   => 'Dosya "%s" sadece kısmen yüklendi.',
    'uploadErrNoFile'    => 'Dosya yüklenmedi.',
    'uploadErrCantWrite' => 'Dosya "%s" diske yazılamadı.',
    'uploadErrNoTmpDir'  => 'Dosya yüklenemedi: geçici dizin eksik.',
    'uploadErrExtension' => 'Dosya yükleme bir PHP eklentisi tarafından durduruldu.',
    'uploadErrUnknown'   => 'Dosya "%s" bilinmeyen bir hata nedeniyle yüklenemedi.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite ayarı None, Lax, Strict veya boş bir dizge olmalıdır. Verilen: {0}',
];
