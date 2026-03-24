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
    'baseCastMissing'        => 'A classe "{0}" deve herdar da classe "CodeIgniter\Entity\Cast\BaseCast".', // 'The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.',
    'enumInvalidCaseName'    => 'Nome de caso inválido "{0}" para enum "{1}"', // 'Invalid case name "{0}" for enum "{1}".',
    'enumInvalidType'        => 'Esperado enum do tipo "{1}", mas recebeu "{0}".', // 'Expected enum of type "{1}", but received "{0}".',
    'enumInvalidValue'       => 'Valor inválido "{1}" para o enum "{0}".', // 'Invalid value "{1}" for enum "{0}".',
    'enumMissingClass'       => 'A classe Enum deve ser especificada para a conversão de enum.', // 'Enum class must be specified for enum casting.',
    'enumNotEnum'            => 'A "{0}" não é uma classe enum válida.', // 'The "{0}" is not a valid enum class.',
    'invalidCastMethod'      => 'O método de conversão "{0}" não é válido; os métodos válidos são: ["get", "set"].', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].',
    'invalidTimestamp'       => 'A conversão de tipo "timestamp" espera um timestamp correto.', // 'Type casting "timestamp" expects a correct timestamp.',
    'jsonErrorCtrlChar'      => 'Caractere de controle inesperado encontrado.', // 'Unexpected control character found.',
    'jsonErrorDepth'         => 'A Profundidade máxima da pilha foi excedida.', // 'Maximum stack depth exceeded.',
    'jsonErrorStateMismatch' => 'Underflow ou incompatibilidade de modos.', // 'Underflow or the modes mismatch.',
    'jsonErrorSyntax'        => 'Erro de sintaxe, JSON malformado.', // 'Syntax error, malformed JSON.',
    'jsonErrorUnknown'       => 'Erro desconhecido.', // 'Unknown error.',
    'jsonErrorUtf8'          => 'Caracteres UTF-8 malformados, possivelmente codificados incorretamente.', // 'Malformed UTF-8 characters, possibly incorrectly encoded.',
];
