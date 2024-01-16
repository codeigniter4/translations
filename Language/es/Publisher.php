<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Publisher language settings
return [
    'collision'             => 'El editor encontró un "{0}" inesperado al copiar "{1}" en "{2}".', // 'Publisher encountered an unexpected "{0}" while copying "{1}" to "{2}".',
    'destinationNotAllowed' => 'El destino no está en la lista permitida de directorios de editores: "{0}"', // 'Destination is not on the allowed list of Publisher directories: "{0}"',
    'fileNotAllowed'        => '"{0}" no cumple con la siguiente restricción para "{1}": {2}', // '"{0}" fails the following restriction for "{1}": {2}',

    // Publish Command
    'publishMissing' => 'No se detectaron clases de editor en {0} en todos los espacios de nombres.', // 'No Publisher classes detected in {0} across all namespaces.',
    'publishSuccess' => '"{0}" publicó {1} archivo(s) en "{2}".', // '"{0}" published {1} file(s) to "{2}".',
    'publishFailure' => '"{0}" no pudo publicar en "{1}".', // '"{0}" failed to publish to "{1}".',
];
