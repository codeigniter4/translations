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

// Images language settings
return [
    'sourceImageRequired'    => 'يجب عليك تحديد صورة المصدر في تفضيلاتك.',
    'gdRequired'             => 'مكتبة الصور GD مطلوبة لاستخدام هذه الميزة.',
    'gdRequiredForProps'     => 'يجب أن يدعم الخادم الخاص بك مكتبة الصور GD لتتمكن من تحديد خصائص الصورة.',
    'gifNotSupported'        => 'صور GIF غالباً غير مدعومة بسبب قيود الترخيص. قد تضطر إلى استخدام صور JPG أو PNG بدلاً من ذلك.',
    'jpgNotSupported'        => 'صور JPG غير مدعومة.',
    'pngNotSupported'        => 'صور PNG غير مدعومة.',
    'webpNotSupported'       => 'صور WEBP غير مدعومة.',
    'fileNotSupported'       => 'الملف المقدم ليس من نوع الصور المدعومة.',
    'unsupportedImageCreate' => 'الخادم الخاص بك لا يدعم دالة GD المطلوبة لمعالجة هذا النوع من الصور.',
    'jpgOrPngRequired'       => 'بروتوكول تغيير حجم الصورة المحدد في تفضيلاتك يعمل فقط مع أنواع صور JPEG أو PNG.',
    'rotateUnsupported'      => 'يبدو أن تدوير الصور غير مدعوم من قبل الخادم الخاص بك.',
    'imageProcessFailed'     => 'فشلت معالجة الصورة. يرجى التحقق من أن الخادم يدعم البروتوكول المختار وأن المسار إلى مكتبة الصور صحيح.',
    'rotationAngleRequired'  => 'زاوية التدوير مطلوبة لتدوير الصورة.',
    'invalidPath'            => 'المسار إلى الصورة غير صحيح.',
    'copyFailed'             => 'فشل روتين نسخ الصورة.',
    'missingFont'            => 'تعذر العثور على خط لاستخدامه.',
    'saveFailed'             => 'تعذر حفظ الصورة. يرجى التأكد من أن الصورة ودليل الملفات قابلان للكتابة.',
    'invalidDirection'       => 'اتجاه القلب (Flip) يمكن أن يكون فقط "vertical" (عمودي) أو "horizontal" (أفقي). القيمة المعطاة: "{0}"',
    'exifNotSupported'       => 'قراءة بيانات EXIF غير مدعومة في تثبيت PHP هذا.',

    // @deprecated
    'libPathInvalid' => 'المسار إلى مكتبة الصور الخاصة بك غير صحيح. يرجى تعيين المسار الصحيح في تفضيلات الصورة الخاصة بك. "{0}"',
];
