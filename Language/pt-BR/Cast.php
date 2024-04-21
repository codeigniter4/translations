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
    'baseCastMissing'        => 'A classe "{0}" deve herdar da classe "CodeIgniter\Entity\Cast\BaseCast".', // 'The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.',
    'invalidCastMethod'      => 'O método de conversão "{0}" é inválido, métodos válidos são: ["get", "set"].', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].',
    'invalidTimestamp'       => 'Conversão do tipo "timestamp" espera um timestamp correto.', // 'Type casting "timestamp" expects a correct timestamp.',
    'jsonErrorCtrlChar'      => 'Caractere de controle inesperado encontrado.', // 'Unexpected control character found.',
    'jsonErrorDepth'         => 'Profundidade máxima da pilha foi excedida.', // 'Maximum stack depth exceeded.',
    'jsonErrorStateMismatch' => 'Underflow ou os modos são incompatíveis.', // 'Underflow or the modes mismatch.',
    'jsonErrorSyntax'        => 'Erro de sintaxe, JSON malformado.', // 'Syntax error, malformed JSON.',
    'jsonErrorUnknown'       => 'Erro desconhecido.', // 'Unknown error.',
    'jsonErrorUtf8'          => 'Caracteres UTF-8 malformados, possivelmente codificados incorretamente.', // 'Malformed UTF-8 characters, possibly incorrectly encoded.',
];
