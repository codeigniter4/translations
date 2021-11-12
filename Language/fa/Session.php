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
    'missingDatabaseTable'   => 'در هنگام استفاده از Database Session Handler، مقدار `sessionSavePath` باید باید برابر با نام جدول دیتابیس باشد.', // `sessionSavePath` must have the table name for the Database Session Handler to work.
    'invalidSavePath'        => 'Session: مسیر ذخیره سازی سشن: "{0}" یک فولدر معتبر نیست یا نمی تواند ایجاد شود.', // Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.
    'writeProtectedSavePath' => 'Session: مسیر ذخیره سازی سشن: "{0}" قابل نوشتن نیست.', // Session: Configured save path "{0}" is not writable by the PHP process.
    'emptySavePath'          => 'Session: مسیری برای سشن مشخص نشده است.', // Session: No save path configured.
    'invalidSavePathFormat'  => 'Session: فرمت مسیر ذخیره سازی ردیس نامعتبر است: {0}', // Session: Invalid Redis save path format: {0}.

    // @deprecated
    'invalidSameSiteSetting' => 'Session: تنظیمات SameSite باید None، Lax، Strict یا یک رشته خالی باشد. داده شده: {0}', // Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}.
];
