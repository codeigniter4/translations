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
    'invalidExpiresTime'    => 'Tipo "{0}" invalido para o atributo "Expires". Esperado: string, integer, objeto DateTimeInterface.',
    'invalidExpiresValue'   => 'A data de validade da cookie não é valida.',
    'invalidCookieName'     => 'A cookie de nome "{0}" contem caracteres inválidos.',
    'emptyCookieName'       => 'O nome da cookie não pode estar vazio.',
    'invalidSecurePrefix'   => 'O uso do prefixo "__Secure-" requer a atribuição do atributo "Secure".',
    'invalidHostPrefix'     => 'O uso do prefixo "__Host-" deve ser atribuido com a flag "Secure", não deve ter o atributo "Domain", e o "Path" é atribuido para "/".',
    'invalidSameSite'       => 'O valor da SameSite deve ser None, Lax, Strict ou uma string vazia, dado {0}.',
    'invalidSameSiteNone'   => 'Usar o atributo "SameSite=None" requer atribuir o atributo "Secure".',
    'invalidCookieInstance' => 'A classe "{0}" experava a array de cookies ser uma instancia de "{1}" mas obteve "{2}" no index {3}.',
    'unknownCookieInstance' => 'A cookie de nome "{0}" e prefixo "{1}" não foi encontrada na coleção.',
];
