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
    'enumInvalidCaseName'    => 'Nombre de caso no válido "{0}" para la enumeración "{1}".', // 'Invalid case name "{0}" for enum "{1}".',
    'enumInvalidType'        => 'Se esperaba una enumeración de tipo "{1}", pero se recibió "{0}".', // 'Expected enum of type "{1}", but received "{0}".',
    'enumInvalidValue'       => 'Valor no válido "{1}" para la enumeración "{0}".', // 'Invalid value "{1}" for enum "{0}".',
    'enumMissingClass'       => 'Se debe especificar la clase de enumeración para la conversión de enumeraciones.', // 'Enum class must be specified for enum casting.',
    'enumNotEnum'            => '"{0}" no es una clase de enumeración válida.', // 'The "{0}" is not a valid enum class.',
    'invalidCastMethod'      => 'El método de transmisión "{0}" es inválido, los métodos válidos son: ["get", "set"].', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].',
    'invalidTimestamp'       => 'El tipo de transmisión "timestamp" espera un timestamp correcto.', // 'Type casting "timestamp" expects a correct timestamp.'
    'jsonErrorCtrlChar'      => 'Se ha encontrado un carácter de control inesperado', // 'Unexpected control character found.',
    'jsonErrorDepth'         => 'Se ha excedido el nivel máximo de profundidad', // 'Maximum stack depth exceeded',
    'jsonErrorStateMismatch' => 'Desbordamiento o desajuste de modo', // 'Underflow or the modes mismatch',
    'jsonErrorSyntax'        => 'Error de sintaxis, JSON mal formado', // 'Syntax error, malformed JSON',
    'jsonErrorUnknown'       => 'Error desconocido', // 'Unknown error',
    'jsonErrorUtf8'          => 'Carácter UTF-8 mal formado, posible codificación incorrecta', // 'Malformed UTF-8 characters, possibly incorrectly encoded',
];
