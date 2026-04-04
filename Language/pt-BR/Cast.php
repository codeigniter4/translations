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
    'enumInvalidCaseName'    => 'O nome do caso "{0}" é inválido para o Enum "{1}".', // 'Invalid case name "{0}" for enum "{1}".',
    'enumInvalidType'        => 'Era esperado um Enum do tipo "{1}", mas foi recebido "{0}".', // 'Expected enum of type "{1}", but received "{0}".',
    'enumInvalidValue'       => 'O valor "{1}" é inválido para o Enum "{0}".', // 'Invalid value "{1}" for enum "{0}".',
    'enumMissingClass'       => 'A classe do Enum deve ser especificada para realizar o casting.', // 'Enum class must be specified for enum casting.',
    'enumNotEnum'            => '"{0}" não é uma classe Enum válida.', // 'The "{0}" is not a valid enum class.',
    'invalidCastMethod'      => 'O método de conversão "{0}" é inválido, métodos válidos são: ["get", "set"].', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].',
    'invalidTimestamp'       => 'Conversão do tipo "timestamp" espera um timestamp correto.', // 'Type casting "timestamp" expects a correct timestamp.',
    'jsonErrorCtrlChar'      => 'Caractere de controle inesperado encontrado.', // 'Unexpected control character found.',
    'jsonErrorDepth'         => 'Profundidade máxima da pilha foi excedida.', // 'Maximum stack depth exceeded.',
    'jsonErrorStateMismatch' => 'Underflow ou os modos são incompatíveis.', // 'Underflow or the modes mismatch.',
    'jsonErrorSyntax'        => 'Erro de sintaxe, JSON malformado.', // 'Syntax error, malformed JSON.',
    'jsonErrorUnknown'       => 'Erro desconhecido.', // 'Unknown error.',
    'jsonErrorUtf8'          => 'Caracteres UTF-8 malformados, possivelmente codificados incorretamente.', // 'Malformed UTF-8 characters, possibly incorrectly encoded.',
];
