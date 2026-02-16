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
    'baseCastMissing'        => 'Класс "{0}" должен наследоваться от "CodeIgniter\Entity\Cast\BaseCast".',
    'enumInvalidCaseName'    => 'Недопустимый ключ "{0}" для перечисления "{1}".',
    'enumInvalidType'        => 'Ожидается перечисление "{1}", получено "{0}".',
    'enumInvalidValue'       => 'Неверное значение "{1}" для перечисления "{0}".',
    'enumMissingClass'       => 'Должно быть указано перечисление для приведения типа.',
    'enumNotEnum'            => 'Значение "{0}" не является перечислением.',
    'invalidCastMethod'      => 'Неверный метод приведения "{0}", допустимые методы: ["get", "set"].',
    'invalidTimestamp'       => 'Приведение типа "timestamp" ожидает корректную метку времени.',
    'jsonErrorCtrlChar'      => 'Найден неожиданный управляющий символ.',
    'jsonErrorDepth'         => 'Превышена максимальная глубина стека.',
    'jsonErrorStateMismatch' => 'Недостаточный поток или несоответствие режимов.',
    'jsonErrorSyntax'        => 'В JSON найдена синтаксическая ошибка.',
    'jsonErrorUnknown'       => 'Неизвестная ошибка.',
    'jsonErrorUtf8'          => 'Возможно ваш JSON закодирован не в UTF-8.',
];
