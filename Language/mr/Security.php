<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Security language settings
return [
    'disallowedAction' => 'तुम्ही विनंती केलेली action अनुमत नाही.', // 'The action you requested is not allowed.'
    'insecureCookie'   => 'असुरक्षित connection वरून secure cookie पाठवण्याचा प्रयत्न झाला.', // 'Attempted to send a secure cookie over a non-secure connection.'

    // @deprecated
    'invalidSameSite' => 'SameSite चे मूल्य None, Lax, Strict किंवा रिकामी string असणे आवश्यक आहे. दिलेले: "{0}"', // 'The SameSite value must be None, Lax, Strict, or a blank string. Given: "{0}"'
];
