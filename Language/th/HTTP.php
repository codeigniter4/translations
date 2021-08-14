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
    'missingCurl'     => 'ต้องเปิดใช้งาน CURL เพื่อใช้คลาส CURLRequest',
    'invalidSSLKey'   => 'ไม่สามารถตั้งค่าคีย์ SSL {0} ไม่ใช่ไฟล์ที่ถูกต้อง',
    'sslCertNotFound' => 'ไม่พบใบรับรอง SSL ที่: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} ไม่ใช่ประเภทการแลกเปลี่ยนข้อมูลที่ถูกต้อง ต้องเป็นหนึ่งใน: สื่อ ชุดอักขระ การเข้ารหัส ภาษา',

    // Message
    'invalidHTTPProtocol' => 'เวอร์ชันโปรโตคอล HTTP ไม่ถูกต้อง ต้องเป็นหนึ่งใน: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'คุณต้องระบุอาร์เรย์ของค่าที่รองรับสำหรับการแลกเปลี่ยนข้อมูลทั้งหมด',

    // RedirectResponse
    'invalidRoute' => 'ไม่พบเส้นทาง {0} ขณะเปลี่ยนเส้นทาง',

    // DownloadResponse
    'cannotSetBinary'        => 'เมื่อตั้งค่าพาธไฟล์ไม่สามารถตั้งค่าไบนารีได้',
    'cannotSetFilepath'      => 'เมื่อตั้งค่าไบนารีไม่สามารถตั้งค่าพาธไฟล์ได้: {0}',
    'notFoundDownloadSource' => 'ไม่พบแหล่งดาวน์โหลดเนื้อหา',
    'cannotSetCache'         => 'ไม่รองรับการแคชสำหรับการดาวน์โหลด',
    'cannotSetStatusCode'    => 'ไม่สนับสนุนการเปลี่ยนแปลงรหัสสถานะสำหรับการดาวน์โหลด รหัส: {0} เหตุผล: {1}',

    // Response
    'missingResponseStatus' => 'การตอบสนอง HTTP ไม่มีรหัสสถานะ',
    'invalidStatusCode'     => '{0} ไม่ใช่รหัสสถานะการส่งคืน HTTP ที่ถูกต้อง',
    'unknownStatusCode'     => 'ได้รับรหัสสถานะ HTTP ที่ไม่รู้จักโดยไม่มีข้อความ: {0}',

    // URI
    'cannotParseURI'       => 'ไม่สามารถแยกวิเคราะห์ URI: {0}',
    'segmentOutOfRange'    => 'ตำแหน่ง URI คำขออยู่นอกช่วงที่กำหนด: {0}',
    'invalidPort'          => 'พอร์ตต้องอยู่ระหว่าง 0 ถึง 65535 ที่ระบุไว้: {0}',
    'malformedQueryString' => 'สตริงการสืบค้นอาจไม่รวมส่วน URI',

    // Page Not Found
    'pageNotFound'       => 'ไม่พบหน้านี้',
    'emptyController'    => 'ไม่ได้ระบุคอนโทรลเลอร์',
    'controllerNotFound' => 'ไม่พบคอนโทรลเลอร์หรือเมธอด: {0} :: {1}',
    'methodNotFound'     => 'ไม่พบคอนโทรลเลอร์เมธอด: {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'การกระทำที่คุณร้องขอไม่ได้รับอนุญาต',

    // Uploaded file moving
    'alreadyMoved' => 'ไฟล์ที่อัปโหลดถูกย้ายแล้ว',
    'invalidFile'  => 'ไฟล์ต้นฉบับไม่ใช่ไฟล์ที่ถูกต้อง',
    'moveFailed'   => 'ไม่สามารถย้ายไฟล์ {0} ไปยัง {1} ({2})',

    'uploadErrOk'        => 'อัปโหลดไฟล์สำเร็จแล้ว',
    'uploadErrIniSize'   => 'ไฟล์ "%s" เกินคำสั่ง upload_max_filesize ini ของคุณ',
    'uploadErrFormSize'  => 'ไฟล์ "%s" เกินขีดจำกัดการอัปโหลดที่กำหนดไว้ในแบบฟอร์มของคุณ',
    'uploadErrPartial'   => 'ไฟล์ "%s" ถูกอัปโหลดเพียงบางส่วนเท่านั้น',
    'uploadErrNoFile'    => 'ไม่มีการอัปโหลดไฟล์',
    'uploadErrCantWrite' => 'ไม่สามารถเขียนไฟล์ "%s" บนดิสก์ได้',
    'uploadErrNoTmpDir'  => 'ไม่สามารถอัปโหลดไฟล์: ไม่มีไดเร็กทอรีชั่วคราว',
    'uploadErrExtension' => 'การอัปโหลดไฟล์ถูกหยุดโดยส่วนขยาย PHP',
    'uploadErrUnknown'   => 'ไฟล์ "%s" ไม่ได้อัปโหลดเนื่องจากเกิดข้อผิดพลาดที่ไม่รู้จัก',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'การตั้งค่า SameSite ต้องเป็น None, Lax, Strict หรือสตริงว่าง ที่ระบุไว้: {0}',
];
