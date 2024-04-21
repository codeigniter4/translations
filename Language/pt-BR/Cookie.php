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
    'invalidExpiresTime'    => 'Tipo "{0}" é inválido para o atributo "Expires". Esperado: string, integer, objeto de DateTimeInterface.', // 'Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.',
    'invalidExpiresValue'   => 'O tempo de expiração do cookie não é válido.', // 'The cookie expiration time is not valid.',
    'invalidCookieName'     => 'O nome do cookie "{0}" contém caracteres inválidos.', // 'The cookie name "{0}" contains invalid characters.',
    'emptyCookieName'       => 'O nome do cookie não pode ser vazio.', // 'The cookie name cannot be empty.',
    'invalidSecurePrefix'   => 'Usando o prefixo "__Secure-" requer que seja definido o atributo "Secure".', // 'Using the "__Secure-" prefix requires setting the "Secure" attribute.',
    'invalidHostPrefix'     => 'Usando o prefixo "__Host-" deve ser definido com a flag "Secure", não deve possuir o atributo "Domain", e "Path" deve ser "/".', // 'Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".',
    'invalidSameSite'       => 'O valor de SameSite deve ser None, Lax, Strict ou uma string vazia, "{0}" foi passado.', // 'The SameSite value must be None, Lax, Strict or a blank string, {0} given.',
    'invalidSameSiteNone'   => 'Usando o atributo "SameSite=None" requer que seja definido o atributo "Secure".', // 'Using the "SameSite=None" attribute requires setting the "Secure" attribute.',
    'invalidCookieInstance' => 'Classe "{0}" espera array de cookies serem instâncias de "{1}" mas recebeu "{2}" no índice "{3}".', // '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.',
    'unknownCookieInstance' => 'Objeto Cookie com o nome "{0}" e prefixo "{1}" não foi encontrado na coleção.', // 'Cookie object with name "{0}" and prefix "{1}" was not found in the collection.',
];
