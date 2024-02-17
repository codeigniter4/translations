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
    'baseCastMissing'        => 'A clase "{0}" debe herdar a clase "CodeIgniter\Entity\Cast\BaseCast".', // ' The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.'
    'invalidCastMethod'      => 'O método de transmisión "{0}" non é válido, os métodos válidos son: ["get", "set"].',
    'invalidTimestamp'       => 'O tipo de transmisión "timestamp" espera un timestamp correcto.', // 'Type casting "timestamp" expects a correct timestamp.'
    'jsonErrorCtrlChar'      => 'Atopóuse un carácter de control non esperado', // 'Unexpected control character found.',
    'jsonErrorDepth'         => 'Excedéuse o nivel máximo de profundidade', // 'Maximum stack depth exceeded',
    'jsonErrorStateMismatch' => 'Desbordamento ou desaxuste de modo', // 'Underflow or the modes mismatch',
    'jsonErrorSyntax'        => 'Erro de sintaxe, JSON mal formado', // 'Syntax erro, malformed JSON',
    'jsonErrorUnknown'       => 'Erro descoñecido', // 'Unknown error',
    'jsonErrorUtf8'          => 'Carácter UTF-8 mal formado, posible codificación incorrecta', // 'Malformed UTF-8 characters, possibly incorrectly encoded',
];
