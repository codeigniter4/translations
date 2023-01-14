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
    'missingDatabaseTable'   => '`sessionSavePath`-এ ডাটাবেস সেশন হ্যান্ডলারের কাজ করার জন্য টেবিলের নাম থাকতে হবে।',
    'invalidSavePath'        => 'সেশন: কনফিগার করা সেভ পাথ "{0}" একটি ডিরেক্টরি নয়, বিদ্যমান নেই বা তৈরি করা যাবে না।',
    'writeProtectedSavePath' => 'সেশন: কনফিগার করা সেভ পাথ "{0}" পিএইচপি প্রক্রিয়া দ্বারা লেখার যোগ্য নয়।',
    'emptySavePath'          => 'সেশন: কোনো সেভ পাথ কনফিগার করা নেই।',
    'invalidSavePathFormat'  => 'সেশন: অবৈধ রেডিস সেভ পাথ ফরম্যাট: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'সেশন: SameSite মানটি অবশ্যই None, Lax, Strict, বা একটি ফাঁকা স্ট্রিং হতে হবে। দেওয়া হয়েছে: {0}',
];
