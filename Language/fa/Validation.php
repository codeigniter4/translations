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
    'noRuleSets'      => 'در تنظیمات اعتبارسنجی هیچ سری قانونی تعریف نشده است.', // No rulesets specified in Validation configuration.

    'ruleNotFound'    => '{0} یک قانون معتبر نیست.',
    // {0} is not a valid rule.

    'groupNotFound'   => '{0} یک گروه اعتبار سنجی نیست.',
    // {0} is not a validation rules group.

    'groupNotArray'   => 'گروه قانون {0} باید یک آرایه باشد.',
    // {0} rule group must be an array.

    'invalidTemplate' => '{0} قالب اعتبارسنجی درستی نیست.',
    // {0} is not a valid Validation template.


    // Rule Messages
    'alpha'                 => 'فیلد {field} فقط می‌تواند شامل اعداد انگلیسی و یا حروف باشد.', // The {field} field may only contain alphabetical characters.
    'alpha_dash'            => 'فیلد {field} فقط می‌تواند شامل اعداد انگلیسی، حروف، خط تیره و آندرلاین باشد.', // The {field} field may only contain alphanumeric, underscore, and dash characters.
    'alpha_numeric'         => 'فیلد {field} فقط می‌تواند شامل اعداد انگلیسی و یا حروف باشد.', // The {field} field may only contain alphanumeric characters.
    'alpha_numeric_punct'   => 'فیلد {field} ممکن است فقط شامل کاراکترهای الفبایی، فاصله و ~ باشد! # $ % & * - _ + = | : . شخصیت ها', // The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.
    'alpha_numeric_space'   => 'فیلد {field} فقط می‌تواند شامل اعداد انگلیسی، حروف و فاصله باشد.', // The {field} field may only contain alphanumeric and space characters.
    'alpha_space'           => 'فیلد {field} فقط می‌تواند شامل حروف و فاصله باشد.', // The {field} field may only contain alphabetical characters and spaces.
    'decimal'               => 'فیلد {field} باید یک عدد اعشاری باشد.', // The {field} field must contain a decimal number.
    'differs'               => 'فیلد {field} باید با فیلد {param} متفاوت باشد.', // The {field} field must differ from the {param} field.
    'equals'                => 'فیلد {field} باید دقیقاً باشد: {param}.', // The {field} field must be exactly: {param}.
    'exact_length'          => 'طول فیلد {field} باید دقیقا {param} کاراکتر باشد.', // The {field} field must be exactly {param} characters in length.
    'greater_than'          => 'فیلد {field} باید عددی بزرگتر از {param} باشد.', // The {field} field must contain a number greater than {param}.
    'greater_than_equal_to' => 'فیلد {field} باید عددی بزرگتر یا مساوی {param} باشد.', // The {field} field must contain a number greater than or equal to {param}.
    'hex'                   => 'فیلد {field} ممکن است فقط دارای کاراکتر های هگزیدسیمال باشد.', // The {field} field may only contain hexidecimal characters.
    'in_list'               => 'فیلد {field} باید یکی از این مقدارها باشد: {param}.', // The {field} field must be one of: {param}.
    'integer'               => 'فیلد {field} باید یک عدد صحیح باشد.', // The {field} field must contain an integer.
    'is_natural'            => 'فیلد {field} فقط می‌تواند شامل ارقام باشد.', // The {field} field must only contain digits.
    'is_natural_no_zero'    => 'فیلد {field} باید عددی بزرگتر از صفر باشد.', // The {field} field must only contain digits and must be greater than zero.
    'is_not_unique'         => 'فیلد {field} باید حاوی یک مقدار قبلی موجود در پایگاه داده باشد.', // The {field} field must contain a previously existing value in the database.
    'is_unique'             => 'فیلد {field} باید مقداری یکتا داشته باشد.', // The {field} field must contain a unique value.
    'less_than'             => 'فیلد {field} باید عددی کوچکتر از {param} باشد.', // The {field} field must contain a number less than {param}.
    'less_than_equal_to'    => 'فیلد {field} باید عددی کوچکتر یا مساوی {param} باشد.', // The {field} field must contain a number less than or equal to {param}.
    'matches'               => 'فیلد {field} با فیلد {param} همخوانی ندارد.', // The {field} field does not match the {param} field.
    'max_length'            => 'طول فیلد {field} نباید بیشتر از {param} کاراکتر باشد.', // The {field} field cannot exceed {param} characters in length.
    'min_length'            => 'طول فیلد {field} باید حداقل {param} کاراکتر باشد.', // The {field} field must be at least {param} characters in length.
    'not_equals'            => 'فیلد {field} نمی تواند باشد: {param}.', // The {field} field cannot be: {param}.
    'not_in_list'           => 'فیلد {field} نباید یکی از موارد زیر باشد: {param}.', // The {field} field must not be one of: {param}.
    'numeric'               => 'فیلد {field} باید یک عدد باشد.', // The {field} field must contain only numbers.
    'regex_match'           => 'فرمت فیلد {field} رعایت نشده است.', // The {field} field is not in the correct format.
    'required'              => 'فیلد {field} اجباری است.', // The {field} field is required.
    'required_with'         => 'وقتی {param} پر باشد، فیلد {field} اجباری است.', // The {field} field is required when {param} is present.
    'required_without'      => 'وقتی {param} پر نشده باشد، فیلد {field} اجباری است.', // The {field} field is required when {param} is not present.
    'string'                => 'فیلد {field} باید یک رشته معتبر باشد.', // The {field} field must be a valid string.
    'timezone'              => 'فیلد {field} باید یک منطقه‌ی زمانی صحیح باشد.', // The {field} field must be a valid timezone.
    'valid_base64'          => 'فیلد {field} باید یک رشته‌ی صحیح base64 باشد.', // The {field} field must be a valid base64 string.
    'valid_email'           => 'فیلد {field} باید یک آدرس ای‌میل معتبر باشد.', // The {field} field must contain a valid email address.
    'valid_emails'          => 'تمام موارد {field} باید آدرس ای‌میل‌های معتبر باشند.', // The {field} field must contain all valid email addresses.
    'valid_ip'              => 'فیلد {field} باید یک IP معتبر باشد.', // The {field} field must contain a valid IP.
    'valid_url'             => 'فیلد {field} باید یک URL (آدرس اینترنتی) معتبر باشد.', // The {field} field must contain a valid URL.
    'valid_date'            => 'فیلد {field} باید یک تاریخ معتبر باشد.', // The {field} field must contain a valid date.

    // Credit Cards
    'valid_cc_num' => '{field} یک شماره‌ی کارت اعتباری معتبر نیست.', // {field} does not appear to be a valid credit card number.

    // Files
    'uploaded' => '{field} یک فایل آپلود شده‌ی معتبر نیست.', // {field} is not a valid uploaded file.
    'max_size' => '{field} برای یک فایل، سایز خیلی بزرگ دارد.', // {field} is too large of a file.
    'is_image' => '{field} یک عکس آپلود شده‌ی معتبر نیست.', // {field} is not a valid, uploaded image file.
    'mime_in'  => '{field} mime type معتبری ندارد.', // {field} does not have a valid mime type.
    'ext_in'   => '{field} پسوند فایل معتبری ندارد.', // {field} does not have a valid file extension.
    'max_dims' => '{field} یا یک عکس صحیح نیست، یا عرض یا طول خیلی زیادی دارد.', // {field} is either not an image, or it is too wide or tall.
];
