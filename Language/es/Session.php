<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Session language settings
return [
    'missingDatabaseTable'   => '`sessionSavePath` debe tener un nombre de tabla para que funcione el manejador de sesión de la base de datos.',
    'invalidSavePath'        => 'Sesión: La ruta de guardado configurada "{0}" no es un directorio, no existe o no puede ser creada.',
    'writeProtectedSavePath' => 'Sesión: La ruta de guardado configurada "{0}" no es escribible por el proceso de PHP.',
    'emptySavePath'          => 'Sesión: No se ha configurado una ruta de guardado.',
    'invalidSavePathFormat'  => 'Sesión: Formato de ruta de guardado de Redis no válido: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'Sesión: La configuración de SameSite debe ser None, Lax, Strict o una cadena en blanco. Dado: {0}', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}',
];
