<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cookie language settings
return [
    'invalidExpiresTime'    => 'Tipo "{0}" é inválido para o atributo "Expires". Esperado: string, integer, objeto de DateTimeInterface.',
    'invalidExpiresValue'   => 'O tempo de expiração do cookie não é válido.',
    'invalidCookieName'     => 'O nome do cookie "{0}" contém caracteres inválidos.',
    'emptyCookieName'       => 'O nome do cookie não pode ser vazio.',
    'invalidSecurePrefix'   => 'Usando o prefixo "__Secure-" requer que seja setado o atributo "Secure".',
    'invalidHostPrefix'     => 'Usando o prefixo "__Host-" deve ser setado com a flag "Secure", não deve possuir o atributo "Domain", e "Path" deve ser "/".',
    'invalidSameSite'       => 'O valor de SameSite deve ser None, Lax, Strict ou uma string vazia, {0} foi passado.',
    'invalidSameSiteNone'   => 'Usando o atributo "SameSite=None" requer que seja setado o atributo "Secure".',
    'invalidCookieInstance' => 'Classe "{0}" espera array de cookies serem instâncias de "{1}" mas recebeu "{2}" no índice {3}.',
    'unknownCookieInstance' => 'Objeto Cookie com o nome "{0}" e prefixo "{1}" não foi encontrado na coleção.',
];
