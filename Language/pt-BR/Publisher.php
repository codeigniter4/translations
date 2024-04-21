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
    'collision'             => 'Publisher encontrou uma "{0}" inesperada enquanto copiava "{1}" para "{2}".', // 'Publisher encountered an unexpected "{0}" while copying "{1}" to "{2}".',
    'destinationNotAllowed' => 'Destino não está na lista de diretórios permitidos do Publisher: "{0}"', // 'Destination is not on the allowed list of Publisher directories: "{0}"',
    'fileNotAllowed'        => '"{0}" falha a seguinte restrição para "{1}": {2}', // '"{0}" fails the following restriction for "{1}": {2}',

    // Publish Command
    'publishMissing' => 'Nenhuma classe Publisher detectada em {0} através de todos os namespaces.', // 'No Publisher classes detected in {0} across all namespaces.',
    'publishSuccess' => '"{0}" publicou {1} arquivo(s) para "{2}".', // '"{0}" published {1} file(s) to "{2}".',
    'publishFailure' => '"{0}" falhou ao publicar para "{1}".', // '"{0}" failed to publish to "{1}".',
];
