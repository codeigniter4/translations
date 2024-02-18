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
    'invalidExpiresTime'    => 'Tipo "{0}" non válido para o atributo "Caduca". Esperado: cadea, enteiro, obxecto DateTimeInterface.', // 'Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.',
    'invalidExpiresValue'   => 'O tempo de caducidade das cookies non é válido.', // 'The cookie expiration time is not valid.',
    'invalidCookieName'     => 'O nome da cookie "{0}" contén caracteres non válidos.', // 'The cookie name "{0}" contains invalid characters.',
    'emptyCookieName'       => 'O nome da cookie non pode estar baleiro.', // 'The cookie name cannot be empty.',
    'invalidSecurePrefix'   => 'O uso do prefixo "__Secure-" require estabrecer o atributo "Seguro".', // 'Using the "__Secure-" prefix requires setting the "Secure" attribute.',
    'invalidHostPrefix'     => 'O uso do prefixo "__Host-" debe estabrecerse co indicador "Seguro", non debe ter un atributo de "Dominio" e a "Ruta" estabrécese en "/".', // 'Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".',
    'invalidSameSite'       => 'O valor de "SameSite" debe ser None, Lax, Strict ou unha cadea en branco, {0} dado.', // 'The SameSite value must be None, Lax, Strict or a blank string, {0} given.',
    'invalidSameSiteNone'   => 'O uso do atributo "SameSite = None" require configurar o atributo "Seguro".', // 'Using the "SameSite=None" attribute requires setting the "Secure" attribute.',
    'invalidCookieInstance' => 'A clase "{0}" esperaba que a matriz de cookies foran instancias de "{1}" pero obtivo "{2}" no índice {3}.', // '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.',
    'unknownCookieInstance' => 'O obxecto Cookie co nome "{0}" e o prefixo "{1}" non se atopou na colección.', // 'Cookie object with name "{0}" and prefix "{1}" was not found in the collection.',
];
