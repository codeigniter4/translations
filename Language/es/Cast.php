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
    'baseCastMissing'        => 'La clase "{0}" debe heredar la clase "CodeIgniter\Entity\Cast\BaseCast".', // ' The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.'
    'invalidCastMethod'      => 'El método de transmisión "{0}" es inválido, los métodos válidos son: ["get", "set"].',
    'invalidTimestamp'       => 'El tipo de transmisión "timestamp" espera un timestamp correcto.', // 'Type casting "timestamp" expects a correct timestamp.'
    'jsonErrorCtrlChar'      => 'Se ha encontrado un carácter de control inesperado', // 'Unexpected control character found.',
    'jsonErrorDepth'         => 'Se ha excedido el nivel máximo de profundidad', // 'Maximum stack depth exceeded',
    'jsonErrorStateMismatch' => 'Desbordamiento o desajuste de modo', // 'Underflow or the modes mismatch',
    'jsonErrorSyntax'        => 'Error de sintaxis, JSON mal formado', // 'Syntax error, malformed JSON',
    'jsonErrorUnknown'       => 'Error desconocido', // 'Unknown error',
    'jsonErrorUtf8'          => 'Carácter UTF-8 mal formado, posible codificación incorrecta', // 'Malformed UTF-8 characters, possibly incorrectly encoded',
];
