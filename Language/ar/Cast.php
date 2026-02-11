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

// Cast language settings
return [
    'baseCastMissing'        => 'يجب أن ترث الفئة "{0}" فئة "CodeIgniter\Entity\Cast\BaseCast".',
    'enumInvalidCaseName'    => 'اسم الحالة "{0}" غير صالح للتعداد (Enum) "{1}".',
    'enumInvalidType'        => 'المتوقع تعداد (Enum) من النوع "{1}"، لكن تم استلام "{0}".',
    'enumInvalidValue'       => 'القيمة "{1}" غير صالحة للتعداد (Enum) "{0}".',
    'enumMissingClass'       => 'يجب تحديد فئة التعداد (Enum class) لعملية تحويل التعداد.',
    'enumNotEnum'            => '"{0}" ليست فئة تعداد (Enum class) صالحة.',
    'invalidCastMethod'      => '"{0}" طريقة تحويل غير صالحة، الطرق الصالحة هي: ["get", "set"].',
    'invalidTimestamp'       => 'تحويل النوع "timestamp" يتطلب طابعاً زمنياً صحيحاً.',
    'jsonErrorCtrlChar'      => 'تم العثور على حرف تحكم (Control character) غير متوقع.',
    'jsonErrorDepth'         => 'تم تجاوز الحد الأقصى لعمق المكدس (Stack depth).',
    'jsonErrorStateMismatch' => 'تجاوز الحد الأدنى (Underflow) أو عدم تطابق الأوضاع.',
    'jsonErrorSyntax'        => 'خطأ في بناء الجملة، تنسيق JSON مشوه.',
    'jsonErrorUnknown'       => 'خطأ غير معروف.',
    'jsonErrorUtf8'          => 'حروف UTF-8 مشوهة، ربما تم ترميزها بشكل غير صحيح.',
];
