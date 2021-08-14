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
    'missingDatabaseTable'   => '`sessionSavePath` ต้องมีชื่อตารางเพื่อให้ตัวจัดการเซสชันฐานข้อมูลทำงาน',
    'invalidSavePath'        => 'Session: เส้นทางการบันทึกที่กำหนดค่าไว้ "{0}" ไม่ใช่ไดเร็กทอรี ไม่มีอยู่ หรือไม่สามารถสร้างได้',
    'writeProtectedSavePath' => 'Session: เส้นทางการบันทึกที่กำหนดค่า "{0}" ไม่สามารถเขียนได้โดยกระบวนการ PHP',
    'emptySavePath'          => 'Session: ไม่มีการกำหนดค่าเส้นทางบันทึก',
    'invalidSavePathFormat'  => 'Session: รูปแบบเส้นทางบันทึก Redis ไม่ถูกต้อง: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'Session: การตั้งค่า SameSite ต้องเป็น None, Lax, Strict หรือสตริงว่าง ให้: {0}',
];
