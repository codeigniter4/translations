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
    'sourceImageRequired'    => 'يجب تحديد صورة المصدر في تفضيلاتك.',
    'gdRequired'             => 'مكتبة الصور GD مطلوبة لاستخدام هذه الميزة.',
    'gdRequiredForProps'     => 'يجب أن يدعم الخادم الخاص بك مكتبة الصور GD لتحديد خصائص الصورة.',
    'gifNotSupported'        => 'صور GIF غالبًا ما تكون غير مدعومة بسبب قيود الترخيص. قد تضطر إلى استخدام صور JPG أو PNG بدلاً من ذلك.',
    'jpgNotSupported'        => 'صور JPG غير مدعومة.',
    'pngNotSupported'        => 'صور PNG غير مدعومة.',
    'webpNotSupported'       => 'صور WEBP غير مدعومة.',
    'fileNotSupported'       => 'الملف المقدم ليس نوع صورة مدعومًا.',
    'unsupportedImageCreate' => 'الخادم الخاص بك لا يدعم دالة GD المطلوبة لمعالجة هذا النوع من الصور.',
    'jpgOrPngRequired'       => 'بروتوكول تغيير حجم الصورة المحدد في تفضيلاتك يعمل فقط مع أنواع صور JPEG أو PNG.',
    'rotateUnsupported'      => 'لا يبدو أن تدوير الصور مدعوم من قبل الخادم الخاص بك.',
    'libPathInvalid'         => 'المسار إلى مكتبة الصور الخاصة بك غير صحيح. يرجى تعيين المسار الصحيح في تفضيلات الصور الخاصة بك. "{0}"',
    'imageProcessFailed'     => 'فشلت معالجة الصورة. يرجى التحقق من أن الخادم الخاص بك يدعم البروتوكول المختار وأن المسار إلى مكتبة الصور الخاصة بك صحيح.',
    'rotationAngleRequired'  => 'مطلوب زاوية دوران لتدوير الصورة.',
    'invalidPath'            => 'المسار إلى الصورة غير صحيح.',
    'copyFailed'             => 'فشلت عملية نسخ الصورة.',
    'missingFont'            => 'غير قادر على العثور على خط لاستخدامه.',
    'saveFailed'             => 'غير قادر على حفظ الصورة. يرجى التأكد من أن الصورة ودليل الملفات قابلان للكتابة.',
    'invalidDirection'       => 'اتجاه القلب يمكن أن يكون فقط "عمودي" أو "أفقي". المعطى: "{0}"',
    'exifNotSupported'       => 'قراءة بيانات EXIF غير مدعومة من خلال تثبيت PHP هذا.',
];
