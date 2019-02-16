<?php
/**
 * Validation language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
	// Core Messages
   'noRuleSets'            => 'No rulesets specified in Validation configuration.',
   'ruleNotFound'          => '{0} is not a valid rule.',
   'groupNotFound'         => '{0} is not a validation rules group.',
   'groupNotArray'         => '{0} rule group must be an array.',
   'invalidTemplate'       => '{0} is not a valid Validation template.',
	// Rule Messages
   'alpha'                 => 'فیلد {field} may only contain alphabetical characters.',
   'alpha_dash'            => 'فیلد {field} may only contain alpha-numeric characters, underscores, and dashes.',
   'alpha_numeric'         => 'فیلد {field} may only contain alpha-numeric characters.',
   'alpha_numeric_space'   => 'فیلد {field} may only contain alpha-numeric characters and spaces.',
   'alpha_space'           => 'فیلد {field} may only contain alphabetical characters and spaces.',
   'decimal'               => 'فیلد {field} باید یک a decimal number.',
   'differs'               => 'فیلد {field} must differ from the {param} field.',
   'exact_length'          => 'فیلد {field} must be exactly {param} characters in length.',
   'greater_than'          => 'فیلد {field} باید یک a number greater than {param}.',
   'greater_than_equal_to' => 'فیلد {field} باید یک a number greater than or equal to {param}.',
   'in_list'               => 'فیلد {field} must be one of: {param}.',
   'integer'               => 'فیلد {field} باید یک an integer.',
   'is_natural'            => 'فیلد {field} must only contain digits.',
   'is_natural_no_zero'    => 'فیلد {field} must only contain digits and must be greater than zero.',
   'is_unique'             => 'فیلد {field} باید یک a unique value.',
   'less_than'             => 'فیلد {field} باید یک a number less than {param}.',
   'less_than_equal_to'    => 'فیلد {field} باید یک a number less than or equal to {param}.',
   'matches'               => 'فیلد {field} does not match the {param} field.',
   'max_length'            => 'فیلد {field} cannot exceed {param} characters in length.',
   'min_length'            => 'فیلد {field} must be at least {param} characters in length.',
   'numeric'               => 'فیلد {field} باید یک only numbers.',
   'regex_match'           => 'فیلد {field} is not in the correct format.',
   'required'              => 'فیلد {field} is required.',
   'required_with'         => 'فیلد {field} is required when {param} is present.',
   'required_without'      => 'فیلد {field} is required when {param} is not present.',
   'timezone'              => 'فیلد {field} must be a valid timezone.',
   'valid_base64'          => 'فیلد {field} must be a valid base64 string.',
   'valid_email'           => 'فیلد {field} باید یک آدرس ای‌میل معتبر باشد.',
   'valid_emails'          => 'تمام موارد {field} باید آدرس ای‌میل‌های معتبر باشند.',
   'valid_ip'              => 'فیلد {field} باید یک IP معتبر باشد.',
   'valid_url'             => 'فیلد {field} باید یک URL (آدرس اینترنتی) معتبر باشد.',
   'valid_date'            => 'فیلد {field} باید یک تاریخ معتبر باشد.',
	// Credit Cards
   'valid_cc_num'          => '{field} یک شماره‌ی کارت اعتباری معتبر نیست.',
	// Files
   'uploaded'              => '{field} یک فایل آپلود شده‌ی معتبر نیست.',
   'max_size'              => '{field} برای یک فایل، سایز خیلی بزرگ دارد.',
   'is_image'              => '{field} یک عکس آپلود شده‌ی معتبر نیست.',
   'mime_in'               => '{field} mime type معتبری ندارد.',
   'ext_in'                => '{field} پسوند فایل معتبری ندارد.',
   'max_dims'              => '{field} یا یک عکس صحیح نیست، یا عرض یا طول خیلی زیادی دارد.',
];