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
    'disallowedAction' => 'நீங்கள் கோரிய செயல் அனுமதிக்கப்படவில்லை.', // 'The action you requested is not allowed.',
    'insecureCookie'   => 'பாதுகாப்பற்ற இணைப்பு மூலம் பாதுகாப்பான சேமிக்கப்பட்ட தகவலினை (Cookie) அனுப்ப முயற்சிக்கப்பட்டது.', // 'Attempted to send a secure cookie over a non-secure connection.',

    // @deprecated
    'invalidSameSite' => 'SameSite அமைப்பானது None, Lax, Strict, அல்லது blank string ஆக இருக்க வேண்டும். வழங்கப்பட்டது: {0}', // 'The SameSite value must be None, Lax, Strict, or a blank string. Given: "{0}"',
];
