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
    'baseCastMissing'        => 'الصنف "{0}" يجب أن يرث من الصنف "CodeIgniter\Entity\Cast\BaseCast".',
    'invalidCastMethod'      => 'الطريقة "{0}" هي طريقة تحويل (cast) غير صالحة، الطرق الصالحة هي: ["get", "set"].',
    'invalidTimestamp'       => 'تحويل النوع "timestamp" يتوقع طابع زمني (timestamp) صحيح.',
    'jsonErrorCtrlChar'      => 'تم العثور على حرف تحكم غير متوقع.',
    'jsonErrorDepth'         => 'تم تجاوز الحد الأقصى لعمق المكدس.',
    'jsonErrorStateMismatch' => 'تدفق سفلي أو عدم تطابق الأوضاع.',
    'jsonErrorSyntax'        => 'خطأ في بناء الجملة، JSON غير صالح.',
    'jsonErrorUnknown'       => 'خطأ غير معروف.',
    'jsonErrorUtf8'          => 'أحرف UTF-8 غير صالحة، ربما تم ترميزها بشكل غير صحيح.',
];
