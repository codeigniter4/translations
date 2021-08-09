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
    'invalidExpiresTime'    => 'ข้อมูลประเภท "{0}" ไม่ถูกต้องสำหรับแอตทริบิวต์ "Expires" ประเภทข้อมูลที่ควรจะเป็น: สตริง, จำนวนเต็ม, ออบเจกต์ DateTimeInterface',
    'invalidExpiresValue'   => 'เวลาหมดอายุของคุกกี้ไม่ถูกต้อง',
    'invalidCookieName'     => 'ชื่อคุกกี้ "{0}" มีอักขระที่ไม่ถูกต้อง',
    'emptyCookieName'       => 'ต้องระบุชื่อคุกกี้',
    'invalidSecurePrefix'   => 'การใช้คำนำหน้า "__Secure-" จำเป็นต้องมีการตั้งค่าแอตทริบิวต์ "Secure"',
    'invalidHostPrefix'     => 'การใช้คำนำหน้า "__Host-" ต้องตั้งค่าสถานะ "ปลอดภัย" ต้องไม่มีแอตทริบิวต์ "โดเมน" และตั้งค่า "เส้นทาง" เป็น "/"',
    'invalidSameSite'       => 'ค่า SameSite ต้องเป็น None, Lax, Strict หรือสตริงว่าง แต่ที่กำหนดไว้คือ {0}',
    'invalidSameSiteNone'   => 'การใช้แอตทริบิวต์ "SameSite=None" จำเป็นต้องมีการตั้งค่าแอตทริบิวต์ "Secure"',
    'invalidCookieInstance' => 'คลาส "{0}" รองรับอาร์เรย์คุกกี้ซึ่งเป็นอินสแตนซ์ของ "{1}" แต่ได้รับ "{2}" ที่ดัชนี {3}',
    'unknownCookieInstance' => 'ไม่พบวัตถุคุกกี้ที่มีชื่อ "{0}" และคำนำหน้า "{1}" ในคอลเล็กชัน',
];
