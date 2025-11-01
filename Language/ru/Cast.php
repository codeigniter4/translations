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
    'baseCastMissing'        => 'Класс "{0}" должен наследовать класс "CodeIgniter\Entity\Cast\BaseCast".',
    'invalidCastMethod'      => 'Метод приведения "{0}" неверен, допустимые методы: ["get", "set"].',
    'invalidTimestamp'       => 'Приведение типа "timestamp" ожидает корректное значение метки времени.',
    'jsonErrorCtrlChar'      => 'Обнаружен неожиданный управляющий символ.',
    'jsonErrorDepth'         => 'Превышена максимальная глубина стека.',
    'jsonErrorStateMismatch' => 'Недостаток данных или несоответствие режимов.',
    'jsonErrorSyntax'        => 'Синтаксическая ошибка, некорректный JSON.',
    'jsonErrorUnknown'       => 'Неизвестная ошибка.',
    'jsonErrorUtf8'          => 'Некорректные символы UTF-8, возможно, неправильно закодированы.',
];
