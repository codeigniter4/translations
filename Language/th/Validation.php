<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'ไม่ได้ระบุชุดกฎเกณฑไว้ในคอนฟิกของการตรวจสอบความถูกต้อง',
    'ruleNotFound'    => '{0}ไม่ใช่กฎที่ถูกต้อง',
    'groupNotFound'   => '{0}ไม่ใช่กลุ่มกฎการตรวจสอบความถูกต้อง',
    'groupNotArray'   => '{0}กฎต้องเป็นอาร์เรย์',
    'invalidTemplate' => '{0}ไม่ใช่แม่แบบการตรวจสอบความถูกต้องที่ถูกต้อง',

    // Rule Messages
    'alpha'                 => 'ฟิลด์ {field} มีได้เฉพาะตัวอักษรเท่านั้น',
    'alpha_dash'            => 'ฟิลด์ {field} มีได้เฉพาะอักขระที่เป็นตัวอักษรและตัวเลขคละกัน ขีดล่าง และขีดกลาง',
    'alpha_numeric'         => 'ฟิลด์ {field} มีได้เฉพาะอักขระที่เป็นตัวอักษรและตัวเลขคละกัน',
    'alpha_numeric_punct'   => 'ฟิลด์ {field} สามารถมีได้เฉพาะอักขระที่เป็นตัวอักษรและตัวเลขคละกัน ฟิลด์ว่าง และ ~ ! # $% & * - _ + = | : .',
    'alpha_numeric_space'   => 'ฟิลด์ {field} มีได้เฉพาะอักขระที่เป็นตัวเลขและตัวอักษรและฟิลด์ว่างเท่านั้น',
    'alpha_space'           => 'ฟิลด์ {field} มีได้เฉพาะตัวอักษรและฟิลด์ว่างเท่านั้น',
    'decimal'               => 'ฟิลด์ {field} ต้องมีตัวเลขทศนิยม',
    'differs'               => 'ฟิลด์ {field} ต้องแตกต่างจากฟิลด์ {param}',
    'equals'                => 'ฟิลด์ {field} ต้องตรงกันทุกประการ: {param}',
    'exact_length'          => 'ฟิลด์ {field} ต้องมีความยาว {param} ตัวอักษร',
    'greater_than'          => 'ฟิลด์ {field} ต้องมีตัวเลขที่มีค่ามากกว่า {param}',
    'greater_than_equal_to' => 'ฟิลด์ {field} ต้องมีตัวเลขที่มีค่ามากกว่าหรือเท่ากับ {param}',
    'hex'                   => 'ฟิลด์ {field} มีได้เฉพาะอักขระฐานสิบหก',
    'in_list'               => 'ฟิลด์ {field} ต้องเป็นหนึ่งใน: {param}',
    'integer'               => 'ฟิลด์ {field} ต้องมีจำนวนเต็ม',
    'is_natural'            => 'ฟิลด์ {field} ต้องมีตัวเลขเท่านั้น',
    'is_natural_no_zero'    => 'ฟิลด์ {field} ต้องมีเฉพาะตัวเลขและต้องมากกว่าศูนย์',
    'is_not_unique'         => 'ฟิลด์ {field} ต้องมีค่าที่มีอยู่ก่อนหน้านี้ในฐานข้อมูล',
    'is_unique'             => 'ฟิลด์ {field} ต้องมีค่าที่ไม่ซ้ำ',
    'less_than'             => 'ฟิลด์ {field} ต้องมีตัวเลขน้อยกว่า {param}',
    'less_than_equal_to'    => 'ฟิลด์ {field} ต้องมีตัวเลขน้อยกว่าหรือเท่ากับ {param}',
    'matches'               => 'ฟิลด์ {field} ไม่ตรงกับฟิลด์ {param}',
    'max_length'            => 'ฟิลด์ {field} ต้องมีความยาวไม่เกิน {param} อักขระ',
    'min_length'            => 'ฟิลด์ {field} ต้องมีความยาวอย่างน้อย {param} อักขระ',
    'not_equals'            => 'ฟิลด์ {field} ไม่สามารถเป็น: {param}',
    'not_in_list'           => 'ฟิลด์ {field} ต้องไม่เป็นหนึ่งใน: {param}',
    'numeric'               => 'ฟิลด์ {field} ต้องมีเฉพาะตัวเลขเท่านั้น',
    'regex_match'           => 'ฟิลด์ {field} อยู่ในรูปแบบที่ไม่ถูกต้อง',
    'required'              => 'ต้องระบุฟิลด์ {field}',
    'required_with'         => 'ต้องระบุฟิลด์ {field} เมื่อมี {param}',
    'required_without'      => 'ต้องระบุฟิลด์ {field} เมื่อไม่มี {param}',
    'string'                => 'ฟิลด์ {field} ต้องเป็นสตริงที่ถูกต้อง',
    'timezone'              => 'ฟิลด์ {field} ต้องเป็นเขตเวลาที่ถูกต้อง',
    'valid_base64'          => 'ฟิลด์ {field} ต้องเป็นสตริง base64 ที่ถูกต้อง',
    'valid_email'           => 'ฟิลด์ {field} ต้องมีที่อยู่อีเมลที่ถูกต้อง',
    'valid_emails'          => 'ฟิลด์ {field} ต้องมีที่อยู่อีเมลที่ถูกต้องทั้งหมด',
    'valid_ip'              => 'ฟิลด์ {field} ต้องมี IP ที่ถูกต้อง',
    'valid_url'             => 'ฟิลด์ {field} ต้องมี URL ที่ถูกต้อง',
    'valid_url_strict'      => 'ฟิลด์ {field} ต้องมี URL ที่ถูกต้อง',
    'valid_date'            => 'ฟิลด์ {field} ต้องมีวันที่ที่ถูกต้อง',

    // Credit Cards
    'valid_cc_num' => '{field} ดูเหมือนจะไม่ใช่หมายเลขบัตรเครดิตที่ถูกต้อง',

    // Files
    'uploaded' => '{field} ไม่ใช่ไฟล์ที่อัปโหลดที่ถูกต้อง',
    'max_size' => '{field} ไฟล์มีขนาดใหญ่เกินไป',
    'is_image' => '{field} ไม่ถูกต้อง, ไฟล์ภาพถูกอัปโหลด',
    'mime_in'  => '{field} มีประเภทของ mime type ที่ไม่ถูกต้อง',
    'ext_in'   => '{field} มีนามสกุลขขงไฟล์ที่ไม่ถูกต้อง',
    'max_dims' => '{field} ไม่ใช่รูปภาพ หรือกว้างหรือสูงเกินไป',
];
