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
    'missingDatabaseTable'   => '`sessionSavePath` debe ter un nome de táboa para que funcione o manexador de sesión da base de datos.',
    'invalidSavePath'        => 'Sesión: A ruta de gardado configurada "{0}" non é un cartafol, non existe ou non pode ser creada.',
    'writeProtectedSavePath' => 'Sesión: A ruta de gardado configurada "{0}" non é escribibel polo proceso de PHP.',
    'emptySavePath'          => 'Sesión: Non se configurou unha ruta de gardado.',
    'invalidSavePathFormat'  => 'Sesión: Formato de ruta de gardado de Redis non válido: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'Sesión: A configuración de SameSite debe ser None, Lax, Strict o unha cadea en branco. Dado: {0}', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}',
];
