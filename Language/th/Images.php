<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Images language settings
return [
    'sourceImageRequired'    => 'คุณต้องระบุภาพต้นฉบับในการตั้งค่าของคุณ',
    'gdRequired'             => 'ไลบรารีรูปภาพ GD จำเป็นต้องใช้คุณสมบัตินี้',
    'gdRequiredForProps'     => 'เซิร์ฟเวอร์ของคุณต้องสนับสนุนไลบรารีรูปภาพ GD เพื่อกำหนดคุณสมบัติของรูปภาพ',
    'gifNotSupported'        => 'มักไม่รองรับรูปภาพ GIF เนื่องจากข้อจำกัดด้านใบอนุญาต คุณอาจต้องใช้ภาพ JPG หรือ PNG แทน',
    'jpgNotSupported'        => 'ไม่รองรับภาพ JPG',
    'pngNotSupported'        => 'ไม่รองรับรูปภาพ PNG',
    'webpNotSupported'       => 'ไม่รองรับภาพ WEBP',
    'fileNotSupported'       => 'ไฟล์ที่ให้มาไม่ใช่ประเภทภาพที่รองรับ',
    'unsupportedImageCreate' => 'เซิร์ฟเวอร์ของคุณไม่สนับสนุนฟังก์ชัน GD ที่จำเป็นสำหรับการประมวลผลภาพประเภทนี้',
    'jpgOrPngRequired'       => 'โปรโตคอลการปรับขนาดรูปภาพที่ระบุในการตั้งค่าของคุณใช้ได้กับประเภทรูปภาพ JPEG หรือ PNG เท่านั้น',
    'rotateUnsupported'      => 'เซิร์ฟเวอร์ของคุณไม่รองรับการหมุนรูปภาพ',
    'libPathInvalid'         => 'เส้นทางไปยังไลบรารีรูปภาพของคุณไม่ถูกต้อง โปรดกำหนดเส้นทางที่ถูกต้องในการตั้งค่าภาพของคุณ {0}',
    'imageProcessFailed'     => 'การประมวลผลภาพล้มเหลว โปรดตรวจสอบว่าเซิร์ฟเวอร์ของคุณสนับสนุนโปรโตคอลที่เลือก และเส้นทางไปยังไลบรารีรูปภาพของคุณถูกต้อง',
    'rotationAngleRequired'  => 'ต้องใช้มุมหมุนเพื่อหมุนภาพ',
    'invalidPath'            => 'เส้นทางไปยังรูปภาพไม่ถูกต้อง',
    'copyFailed'             => 'รูทีนการคัดลอกรูปภาพล้มเหลว',
    'missingFont'            => 'หาฟอนต์ที่จะใช้ไม่ได้',
    'saveFailed'             => 'ไม่สามารถบันทึกภาพได้ โปรดตรวจสอบให้แน่ใจว่ารูปภาพและไดเร็กทอรีไฟล์สามารถเขียนได้',
    'invalidDirection'       => 'ทิศทางพลิกได้เฉพาะ "แนวตั้ง" หรือ "แนวนอน" ที่ให้ไว้: {0}',
    'exifNotSupported'       => 'การติดตั้ง PHP นี้ไม่รองรับการอ่านข้อมูล EXIF',
];
