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

// Cookie language settings
return [
    'invalidExpiresTime'    => 'Tipo "{0}" inválido para o atributo "Expires". Esperado: string, integer, objeto de DateTimeInterface.', // 'Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.',
    'invalidExpiresValue'   => 'O tempo de expiração do cookie não é válido.', // 'The cookie expiration time is not valid.',
    'invalidCookieName'     => 'O nome do cookie "{0}" contém caracteres inválidos.', // 'The cookie name "{0}" contains invalid characters.',
    'emptyCookieName'       => 'O nome do cookie não pode estar vazio.', // 'The cookie name cannot be empty.',
    'invalidSecurePrefix'   => 'O uso do prefixo "__Secure-" requer a configuração do atributo "Secure".', // 'Using the "__Secure-" prefix requires setting the "Secure" attribute.',
    'invalidHostPrefix'     => 'O prefixo "__Host-" deve ser configurado com a opção "Secure", não deve conter o atributo "Domain" e o "Path" deve ser definido como "/".', // 'Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".',
    'invalidSameSite'       => 'O valor de SameSite deve ser None, Lax, Strict ou uma string vazia. Foi fornecido "{0}".', // 'The SameSite value must be None, Lax, Strict or a blank string, {0} given.',
    'invalidSameSiteNone'   => 'O uso do atributo "SameSite=None" requer a configuração do atributo "Secure".', // 'Using the "SameSite=None" attribute requires setting the "Secure" attribute.',
    'invalidCookieInstance' => 'A classe "{0}" esperava que o array de cookies fosse composto por instâncias de "{1}", mas recebeu "{2}" no índice {3}.', // '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.',
    'unknownCookieInstance' => 'O objeto de cookie com nome "{0}" e prefixo "{1}" não foi encontrado na coleção.', // 'Cookie object with name "{0}" and prefix "{1}" was not found in the collection.',
];
