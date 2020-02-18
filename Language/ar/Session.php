<?php

/**
 * Session language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */
return [
	'missingDatabaseTable'   => '`sessionSavePath` يجب أن يحتوى على إسم الجدول حتى يعمل النظام بشكل صحيح.',
	'invalidSavePath'        => 'نظام الجلسة: المسار المحدد "{0}" ليس مجلد, أو غير موجود ولا يمكن انشاؤه.',
	'writeProtectedSavePath' => 'نظام الجلسة: المسار المحدد "{0}" غير قابل للكتابة.',
	'emptySavePath'          => 'نظام الجلسة: لا يوجد مسار للحفظ.',
	'invalidSavePathFormat'  => 'نظام الجلسة: مسار خادم  Redis غير صحيح: {0}',
];
