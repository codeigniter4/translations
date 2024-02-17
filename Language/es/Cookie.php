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
    'invalidExpiresTime'    => 'Tipo "{0}" no válido para el atributo "Caduca". Esperado: cadena, entero, objeto DateTimeInterface.', // 'Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.',
    'invalidExpiresValue'   => 'El tiempo de caducidad de las cookies no es válido.', // 'The cookie expiration time is not valid.',
    'invalidCookieName'     => 'El nombre de la cookie "{0}" contiene caracteres no válidos.', // 'The cookie name "{0}" contains invalid characters.',
    'emptyCookieName'       => 'El nombre de la cookie no puede estar vacío.', // 'The cookie name cannot be empty.',
    'invalidSecurePrefix'   => 'El uso del prefijo "__Secure-" requiere establecer el atributo "Seguro".', // 'Using the "__Secure-" prefix requires setting the "Secure" attribute.',
    'invalidHostPrefix'     => 'El uso del prefijo "__Host-" debe establecerse con el indicador "Seguro", no debe tener un atributo de "Dominio" y la "Ruta" se establece en "/".', // 'Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".',
    'invalidSameSite'       => 'El valor de "SameSite" debe ser None, Lax, Strict o una cadena en blanco, {0} dado.', // 'The SameSite value must be None, Lax, Strict or a blank string, {0} given.',
    'invalidSameSiteNone'   => 'El uso del atributo "SameSite = None" requiere configurar el atributo "Seguro".', // 'Using the "SameSite=None" attribute requires setting the "Secure" attribute.',
    'invalidCookieInstance' => 'La clase "{0}" esperaba que la matriz de cookies fueran instancias de "{1}" pero obtuvo "{2}" en el índice {3}.', // '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.',
    'unknownCookieInstance' => 'El objeto Cookie con el nombre "{0}" y el prefijo "{1}" no se encontró en la colección.', // 'Cookie object with name "{0}" and prefix "{1}" was not found in the collection.',
];
