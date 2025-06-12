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
    'disallowedAction' => 'आपके द्वारा अनुरोधित कार्रवाई की अनुमति नहीं है।', // 'The action you requested is not allowed.'
    'insecureCookie'   => 'एक असुरक्षित कनेक्शन पर एक सुरक्षित कुकी भेजने का प्रयास किया गया।', // 'Attempted to send a secure cookie over a non-secure connection.'

    // @deprecated
    'invalidSameSite' => 'SameSite मान None, Lax, Strict, या एक खाली स्ट्रिंग होना चाहिए। दिया गया: "{0}"', // 'The SameSite value must be None, Lax, Strict, or a blank string. Given: "{0}"'
];
