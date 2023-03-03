<?php

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
    'baseCastMissing'        => 'Класс "{0}" должен наследовать класс "CodeIgniter\Entity\Cast\BaseCast".',
    'invalidCastMethod'      => 'Метод приведения "{0}" неверен, допустимые методы: ["get", "set"].',
    'invalidTimestamp'       => 'Приведение типа "timestamp" ожидает корректную метку времени.',
    'jsonErrorCtrlChar'      => 'Найден неожиданный управляющий символ.',
    'jsonErrorDepth'         => 'Превышена максимальная глубина стека.',
    'jsonErrorStateMismatch' => 'Недостаточный поток или несоответствие режимов.',
    'jsonErrorSyntax'        => 'В JSON найдена синтаксическая ошибка.',
    'jsonErrorUnknown'       => 'Неизвестная ошибка.',
    'jsonErrorUtf8'          => 'Возможно ваш JSON закодирован не в UTF-8.',
];
