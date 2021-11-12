<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Database language settings
return [
    'invalidEvent'          => '{0} callback معتبری به عنوان رویداد مدل نیست.',
    // {0} is not a valid Model Event callback.

    'invalidArgument'       => 'لطفا {0} معتبری وارد کنید.',
    // You must provide a valid {0}.

    'invalidAllowedFields'  => 'فیلدهای مجاز برای مدل باید تعیین شوند: {0}',
    // Allowed fields must be specified for model: {0}

    'emptyDataset'          => 'داده‌ای در {0} وجود ندارد.',
    // There is no data to {0}.

    'emptyPrimaryKey'       => 'هنگام تلاش برای ایجاد {0} کلید اصلی تعریف نشده است.', // There is no primary key defined when trying to make {0}.
    'failGetFieldData'      => 'مشکلی در گرفتن اطلاعات فیلد از دیتابیس به وجود آمده است.', // Failed to get field data from database.
    'failGetIndexData'      => 'مشکلی در گرفتن اطلاعات ایندکس از دیتابیس به وجود آمده است.', // Failed to get index data from database.
    'failGetForeignKeyData' => 'مشکلی در گرفتن اطلاعات کلید خارجی از دیتابیس به وجود آمده است.', // Failed to get foreign key data from database.
    'parseStringFail'       => 'تجزیه رشته کلید انجام نشد.', // Parsing key string failed.
    'featureUnavailable'    => 'این قابلیت برای بانک اطلاعاتی که شما در حال استفاده از آن هستید، فراهم نیست.', // This feature is not available for the database you are using.
    'tableNotFound'         => 'جدول «{0}» در پایگاه داده فعلی یافت نشد.', // Table `{0}` was not found in the current database.

    'noPrimaryKey'          => 'کلاس مدل `{0}` کلید اصلی را مشخص نمی کند.', 
    // `{0}` model class does not specify a Primary Key.

    'noDateFormat'          => 'کلاس مدل `{0}` یک dateFormat معتبر ندارد.', 
    // `{0}` model class does not have a valid dateFormat.

    'fieldNotExists'        => 'فیلد «{0}» یافت نشد.', // Field `{0}` not found.
    'forEmptyInputGiven'    => 'عبارت خالی برای فیلد «{0}» داده شده است', // Empty statement is given for the field `{0}`
    'forFindColumnHaveMultipleColumns' => 'فقط تک ستون در نام ستون مجاز است.', // Only single column allowed in Column name.
];
