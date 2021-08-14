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
    'missingTable'  => 'ต้องตั้งค่าตารางการย้ายข้อมูล',
    'disabled'      => 'โหลดการย้ายข้อมูลแล้ว แต่ถูกปิดใช้งานหรือตั้งค่าไม่ถูกต้อง',
    'notFound'      => 'ไม่พบไฟล์การย้ายข้อมูล:',
    'batchNotFound' => 'ไม่พบแบทช์เป้าหมาย:',
    'empty'         => 'ไม่พบไฟล์การย้ายข้อมูล',
    'gap'           => 'มีช่องว่างในลำดับการย้ายข้อมูลใกล้กับหมายเลขเวอร์ชัน:',
    'classNotFound' => 'ไม่พบคลาสการย้ายข้อมูล "%s"',
    'missingMethod' => 'คลาสการย้ายข้อมูลไม่มีเมธอด "%s"',

    // Migration Command
    'migHelpLatest'   => "\t\tย้ายฐานข้อมูลเป็นการย้ายข้อมูลล่าสุดที่มี",
    'migHelpCurrent'  => "\t\tย้ายฐานข้อมูลเป็นเวอร์ชันที่กำหนดเป็น 'ปัจจุบัน' ในการกำหนดค่า",
    'migHelpVersion'  => "\tย้ายฐานข้อมูลเป็นเวอร์ชัน {v}",
    'migHelpRollback' => "\tเปิดการโยกย้ายทั้งหมด 'down' เป็นเวอร์ชัน 0",
    'migHelpRefresh'  => "\t\tถอนการติดตั้งและเรียกใช้การย้ายข้อมูลทั้งหมดอีกครั้งเพื่อทำให้ฐานข้อมูลใหม่",
    'migHelpSeed'     => "\tเรียกใช้ seeder ชื่อ [name]",
    'migCreate'       => "\tสร้างการย้ายข้อมูลใหม่ชื่อ [ชื่อ]",
    'nameMigration'   => 'ตั้งชื่อไฟล์การโยกย้าย',
    'migNumberError'  => 'หมายเลขการย้ายข้อมูลต้องเป็นตัวเลขสามหลัก และต้องไม่มีช่องว่างในลำดับ',
    'rollBackConfirm' => 'คุณแน่ใจหรือไม่ว่าต้องการย้อนกลับ?',
    'refreshConfirm'  => 'คุณแน่ใจหรือว่าต้องการรีเฟรช?',

    'latest'            => 'กำลังเรียกใช้การย้ายข้อมูลใหม่ทั้งหมด...',
    'generalFault'      => 'การย้ายข้อมูลล้มเหลว!',
    'migInvalidVersion' => 'ระบุหมายเลขเวอร์ชันไม่ถูกต้อง',
    'toVersionPH'       => 'กำลังย้ายไปยังเวอร์ชัน %s...',
    'toVersion'         => 'กำลังย้ายไปยังเวอร์ชันปัจจุบัน...',
    'rollingBack'       => 'ย้อนกลับการโยกย้ายไปยังแบทช์:',
    'noneFound'         => 'ไม่พบการย้ายข้อมูล',
    'migSeeder'         => 'ชื่อ Seeder',
    'migMissingSeeder'  => 'คุณต้องระบุชื่อ Seeder',
    'nameSeeder'        => 'ตั้งชื่อไฟล์ Seeder',
    'removed'           => 'กำลังย้อนกลับ:',
    'added'             => 'กำลังทำงาน: ',

    // Migrate Status
    'namespace' => 'เนมสเปซ',
    'filename'  => 'ชื่อไฟล์',
    'version'   => 'เวอร์ชั่น',
    'group'     => 'กลุ่ม',
    'on'        => 'ย้ายข้อมูลเมื่อ: ',
    'batch'     => 'แบทช์',
];
