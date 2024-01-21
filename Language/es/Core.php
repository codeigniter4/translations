<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Core language settings
return [
    'copyError'                    => 'Se encontró un error al intentar reemplazar el archivo ({0}). Asegúrese de que su directorio de archivos sea editable.', // 'An error was encountered while attempting to replace the file({0}). Please make sure your file directory is writable.',
    'enabledZlibOutputCompression' => 'Su directiva ini zlib.output_compression está activada. Esto no funcionará bien con búferes de salida.', // 'Your zlib.output_compression ini directive is turned on. This will not work well with output buffers.',
    'invalidFile'                  => 'Archivo inválido: {0}', // 'Invalid file: {0}',
    'invalidDirectory'             => 'El directorio no existe: "{0}"', // 'Directory does not exist: "{0}"',
    'invalidPhpVersion'            => 'Su versión de PHP debe ser {0} o superior para ejecutar CodeIgniter. Versión actual: {1}', // 'Your PHP version must be {0} or higher to run CodeIgniter. Current version: {1}',
    'missingExtension'             => 'La extensión {0} no está cargada.', // '{0} extension is not loaded.',
    'noHandlers'                   => '{0} debe proporcionar al menos un controlador.', // {0} must provide at least one Handler.
];
