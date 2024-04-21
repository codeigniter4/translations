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
    'copyError'                    => 'Um erro foi encontrado ao tentar substituir o arquivo. Por favor, certifique-se de que seu diretório de arquivos é gravável.', // 'An error was encountered while attempting to replace the file "{0}". Please make sure your file directory is writable.',
    'enabledZlibOutputCompression' => 'Sua diretiva zlib.output_compression ini está ligada. Isso não irá trabalhar bem com a saída de buffers.', // 'Your zlib.output_compression ini directive is turned on. This will not work well with output buffers.',
    'invalidFile'                  => 'Arquivo inválido: "{0}"', // 'Invalid file: "{0}"',
    'invalidDirectory'             => 'O diretório não existe: "{0}"', // 'Directory does not exist: "{0}"',
    'invalidPhpVersion'            => 'Sua versão do PHP deve ser "{0}" ou mais recente para rodar CodeIgniter. Versão atual: "{1}"', // 'Your PHP version must be {0} or higher to run CodeIgniter. Current version: {1}',
    'missingExtension'             => 'A extensão "{0}" não está carregada.', // 'The framework needs the following extension(s) installed and loaded: "{0}".',
    'noHandlers'                   => '"{0}" deve fornecer pelo menos um Handler.', // '"{0}" must provide at least one Handler.',
];
