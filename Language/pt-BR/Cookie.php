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

// Configurações de linguagem de Cookie
return [
    'invalidExpiresTime'    => 'Tipo "{0}" inválido para o atributo "Expires". Esperado: string, integer, objeto DateTimeInterface.',
    'invalidExpiresValue'   => 'O tempo de expiração do cookie não é válido.',
    'invalidCookieName'     => 'O nome do cookie "{0}" contém caracteres inválidos.',
    'emptyCookieName'       => 'O nome do cookie não pode estar vazio.',
    'invalidSecurePrefix'   => 'O uso do prefixo "__Secure-" exige a configuração do atributo "Secure".',
    'invalidHostPrefix'     => 'O uso do prefixo "__Host-" deve ser definido com a flag "Secure", não deve ter um atributo "Domain" e o "Path" deve ser definido como "/".',
    'invalidSameSite'       => 'O valor SameSite deve ser None, Lax, Strict ou uma string vazia; {0} fornecido.',
    'invalidSameSiteNone'   => 'O uso do atributo "SameSite=None" exige a configuração do atributo "Secure".',
    'invalidCookieInstance' => 'A classe "{0}" esperava que o array de cookies fosse de instâncias de "{1}", mas obteve "{2}" no índice {3}.',
    'unknownCookieInstance' => 'O objeto de cookie com o nome "{0}" e prefixo "{1}" não foi encontrado na coleção.',
];
