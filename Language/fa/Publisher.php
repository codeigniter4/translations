<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Publisher language settings
return [
    'collision'             => 'ناشر هنگام کپی کردن {1} در {2} با یک {0} غیرمنتظره مواجه شد.', // Publisher encountered an unexpected {0} while copying {1} to {2}.
    'destinationNotAllowed' => 'مقصد در فهرست مجاز فهرست‌های راهنمای ناشر نیست: {0}', // Destination is not on the allowed list of Publisher directories: {0}.

    'fileNotAllowed'        => '{0} محدودیت زیر را برای {1} انجام نمی دهد: {2}',
    // {0} fails the following restriction for {1}: {2}.


    // Publish Command
    'publishMissing' => 'هیچ کلاس ناشر در {0} در همه فضاهای نام شناسایی نشد.', // No Publisher classes detected in {0} across all namespaces.

    'publishSuccess' => '{0} {1} فایل(های) را در {2} منتشر کرد.',
    // {0} published {1} file(s) to {2}.

    'publishFailure' => '{0} در {1} منتشر نشد!',
    // {0} failed to publish to {1}!
];
