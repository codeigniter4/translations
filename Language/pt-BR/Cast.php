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

// Configurações de linguagem de Cast
return [
    'baseCastMissing'        => 'A classe "{0}" deve herdar da classe "CodeIgniter\Entity\Cast\BaseCast".',
    'enumInvalidCaseName'    => 'Nome de case inválido "{0}" para o enum "{1}".',
    'enumInvalidType'        => 'Esperado enum do tipo "{1}", mas recebido "{0}".',
    'enumInvalidValue'       => 'Valor inválido "{1}" para o enum "{0}".',
    'enumMissingClass'       => 'A classe Enum deve ser especificada para o casting de enum.',
    'enumNotEnum'            => '"{0}" não é uma classe enum válida.',
    'invalidCastMethod'      => '"{0}" é um método de cast inválido, os métodos válidos são: ["get", "set"].',
    'invalidTimestamp'       => 'O casting do tipo "timestamp" espera um timestamp correto.',
    'jsonErrorCtrlChar'      => 'Caractere de controle inesperado encontrado.',
    'jsonErrorDepth'         => 'Profundidade máxima da pilha excedida.',
    'jsonErrorStateMismatch' => 'Underflow ou erro de correspondência de modos.',
    'jsonErrorSyntax'        => 'Erro de sintaxe, JSON malformado.',
    'jsonErrorUnknown'       => 'Erro desconhecido.',
    'jsonErrorUtf8'          => 'Caracteres UTF-8 malformados, possivelmente codificados incorretamente.',
];
