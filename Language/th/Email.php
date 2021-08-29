<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
    'mustBeArray'          => 'เมธอดการตรวจสอบอีเมลจะต้องถูกส่งมาเป็นอาร์เรย์',
    'invalidAddress'       => 'ที่อยู่อีเมลไม่ถูกต้อง: {0}',
    'attachmentMissing'    => 'ไม่พบไฟล์แนบอีเมลต่อไปนี้: {0}',
    'attachmentUnreadable' => 'ไม่สามารถเปิดไฟล์แนบนี้: {0}',
    'noFrom'               => 'ไม่สามารถส่งอีเมลโดยไม่มีส่วนหัว "From"',
    'noRecipients'         => 'คุณต้องระบุผู้รับ: ถึง, สำเนาถึง, หรือ สำเนาลับ',
    'sendFailurePHPMail'   => 'ไม่สามารถส่งอีเมลโดยใช้เมล PHP () เซิร์ฟเวอร์ของคุณอาจไม่ได้รับการกำหนดค่าให้ส่งอีเมลโดยใช้วิธีนี้',
    'sendFailureSendmail'  => 'ไม่สามารถส่งอีเมลโดยใช้ PHP Sendmail เซิร์ฟเวอร์ของคุณอาจไม่ได้รับการกำหนดค่าให้ส่งอีเมลโดยใช้วิธีนี้',
    'sendFailureSmtp'      => 'ไม่สามารถส่งอีเมลโดยใช้ PHP SMTP เซิร์ฟเวอร์ของคุณอาจไม่ได้รับการกำหนดค่าให้ส่งอีเมลโดยใช้วิธีนี้',
    'sent'                 => 'ข้อความของคุณถูกส่งเรียบร้อยแล้วโดยใช้โปรโตคอลต่อไปนี้: {0}',
    'noSocket'             => 'ไม่สามารถเปิดซ็อกเก็ตไปยัง Sendmail ได้ โปรดตรวจสอบการตั้งค่า',
    'noHostname'           => 'คุณไม่ได้ระบุชื่อโฮสต์ SMTP',
    'SMTPError'            => 'พบข้อผิดพลาด SMTP ต่อไปนี้: {0}',
    'noSMTPAuth'           => 'ผิดพลาด: คุณต้องกำหนดชื่อผู้ใช้และรหัสผ่าน SMTP',
    'failedSMTPLogin'      => 'ไม่สามารถส่งคำสั่ง AUTH LOGIN เนื่องจากข้อผิดพลาด: {0}',
    'SMTPAuthUsername'     => 'ไม่สามารถตรวจสอบชื่อผู้ใช้ได้ เนื่องจากข้อผิดพลาด: {0}',
    'SMTPAuthPassword'     => 'ไม่สามารถตรวจสอบรหัสผ่านได้ เนื่องจากข้อผิดพลาด: {0}',
    'SMTPDataFailure'      => 'ไม่สามารถส่งข้อมูล: {0}',
    'exitStatus'           => 'รหัสสถานะการออก: {0}',
];
