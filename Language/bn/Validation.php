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
    'noRuleSets'      => 'বৈধকরণ কনফিগারেশনে কোনো রুলসেট নির্দিষ্ট করা নেই।',
    'ruleNotFound'    => '{0} একটি বৈধ নিয়ম নয়।',
    'groupNotFound'   => '{0} একটি বৈধতা নিয়ম গোষ্ঠী নয়।',
    'groupNotArray'   => '{0} নিয়ম গ্রুপ অবশ্যই একটি অ্যারে হতে হবে।',
    'invalidTemplate' => '{0} একটি বৈধ বৈধকরণ টেমপ্লেট নয়।',

    // Rule Messages
    'alpha'                 => '{field} ফিল্ডে শুধুমাত্র বর্ণানুক্রমিক অক্ষর থাকতে পারে।',
    'alpha_dash'            => '{field} ফিল্ডে শুধুমাত্র আলফানিউমেরিক, আন্ডারস্কোর এবং ড্যাশ অক্ষর থাকতে পারে।',
    'alpha_numeric'         => '{field} ফিল্ডে শুধুমাত্র আলফানিউমেরিক অক্ষর থাকতে পারে।',
    'alpha_numeric_punct'   => '{field} ফিল্ডে শুধুমাত্র আলফানিউমেরিক অক্ষর, স্পেস এবং ~ থাকতে পারে! # $ % এবং * - _ + = | : চরিত্র.',
    'alpha_numeric_space'   => '{field} ফিল্ডে শুধুমাত্র আলফানিউমেরিক এবং স্পেস অক্ষর থাকতে পারে।',
    'alpha_space'           => '{field} ফিল্ডে শুধুমাত্র বর্ণানুক্রমিক অক্ষর এবং স্পেস থাকতে পারে।',
    'decimal'               => '{field} ফিল্ডে অবশ্যই একটি দশমিক সংখ্যা থাকতে হবে।',
    'differs'               => '{field} ফিল্ডটি অবশ্যই {param} ফিল্ড থেকে আলাদা হতে হবে।',
    'equals'                => '{field} ক্ষেত্রটি অবশ্যই হতে হবে: {param}।',
    'exact_length'          => '{field} ক্ষেত্রটি অবশ্যই দৈর্ঘ্যে ঠিক {param} অক্ষর হতে হবে।',
    'greater_than'          => '{field} ফিল্ডে অবশ্যই {param} এর থেকে বড় একটি সংখ্যা থাকতে হবে।',
    'greater_than_equal_to' => '{field} ক্ষেত্রে অবশ্যই {param} এর থেকে বড় বা সমান একটি সংখ্যা থাকতে হবে।',
    'hex'                   => '{field} ফিল্ডে শুধুমাত্র হেক্সিডেসিমেল অক্ষর থাকতে পারে।',
    'in_list'               => '{field} ক্ষেত্রটি অবশ্যই একটি হতে হবে: {param}।',
    'integer'               => '{field} ফিল্ডে অবশ্যই একটি পূর্ণসংখ্যা থাকতে হবে।',
    'is_natural'            => '{field} ফিল্ডে শুধুমাত্র সংখ্যা থাকতে হবে।',
    'is_natural_no_zero'    => '{field} ফিল্ডে শুধুমাত্র সংখ্যা থাকতে হবে এবং শূন্যের চেয়ে বড় হতে হবে।',
    'is_not_unique'         => '{field} ফিল্ডে অবশ্যই ডাটাবেসে পূর্বে বিদ্যমান একটি মান থাকতে হবে।',
    'is_unique'             => '{field} ক্ষেত্রে একটি অনন্য মান থাকতে হবে।',
    'less_than'             => '{field} ফিল্ডে অবশ্যই {param} এর চেয়ে কম সংখ্যা থাকতে হবে।',
    'less_than_equal_to'    => '{field} ফিল্ডে অবশ্যই {param} এর থেকে কম বা সমান একটি সংখ্যা থাকতে হবে।',
    'matches'               => '{field} ক্ষেত্রটি {param} ক্ষেত্রের সাথে মেলে না।',
    'max_length'            => '{field} ক্ষেত্রের দৈর্ঘ্য {param} অক্ষরের বেশি হতে পারে না।',
    'min_length'            => '{field} ক্ষেত্রের দৈর্ঘ্য কমপক্ষে {param} অক্ষরের হতে হবে।',
    'not_equals'            => '{field} ক্ষেত্রটি হতে পারে না: {param}।',
    'not_in_list'           => '{field} ক্ষেত্রটি অবশ্যই এর একটি হতে হবে না: {param}।',
    'numeric'               => '{field} ফিল্ডে শুধুমাত্র সংখ্যা থাকতে হবে।',
    'regex_match'           => '{field} ক্ষেত্রটি সঠিক বিন্যাসে নেই।',
    'required'              => '{field} ফিল্ডটি প্রয়োজন।',
    'required_with'         => 'যখন {param} থাকে তখন {field} ফিল্ডের প্রয়োজন হয়।',
    'required_without'      => 'যখন {param} না থাকে তখন {field} ফিল্ডের প্রয়োজন হয়।',
    'string'                => '{field} ক্ষেত্রটি অবশ্যই একটি বৈধ স্ট্রিং হতে হবে।',
    'timezone'              => '{field} ফিল্ডটি অবশ্যই একটি বৈধ টাইমজোন হতে হবে।',
    'valid_base64'          => '{field} ক্ষেত্রটি অবশ্যই একটি বৈধ base64 স্ট্রিং হতে হবে।',
    'valid_email'           => '{field} ফিল্ডে অবশ্যই একটি বৈধ ইমেল ঠিকানা থাকতে হবে।',
    'valid_emails'          => '{field} ফিল্ডে অবশ্যই সব বৈধ ইমেল ঠিকানা থাকতে হবে।',
    'valid_ip'              => '{field} ফিল্ডে অবশ্যই একটি বৈধ আইপি থাকতে হবে।',
    'valid_url'             => '{field} ফিল্ডে অবশ্যই একটি বৈধ URL থাকতে হবে।',
    'valid_url_strict'      => '{field} ফিল্ডে অবশ্যই একটি বৈধ URL থাকতে হবে।',
    'valid_date'            => '{field} ফিল্ডে অবশ্যই একটি বৈধ তারিখ থাকতে হবে।',
    'valid_json'            => '{field} ফিল্ডে অবশ্যই একটি বৈধ json থাকতে হবে।',

    // Credit Cards
    'valid_cc_num' => '{ক্ষেত্র} একটি বৈধ ক্রেডিট কার্ড নম্বর বলে মনে হচ্ছে না।',

    // Files
    'uploaded' => '{field} একটি বৈধ আপলোড করা ফাইল নয়।',
    'max_size' => '{ক্ষেত্র} একটি ফাইলের তুলনায় অনেক বড়।',
    'is_image' => '{field} একটি বৈধ, আপলোড করা ছবি ফাইল নয়।',
    'mime_in'  => '{field} এর কোনো বৈধ মাইম টাইপ নেই।',
    'ext_in'   => '{field} এর কোনো বৈধ ফাইল এক্সটেনশন নেই।',
    'max_dims' => '{ক্ষেত্র} হয় একটি চিত্র নয়, অথবা এটি খুব চওড়া বা লম্বা৷',
];
