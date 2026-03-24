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

// Core language settings
return [
    'copyError'                    => 'Ocorreu um erro ao tentar substituir o arquivo "{0}". Certifique-se de que seu diretório de arquivos tenha permissão de gravação.', // 'An error was encountered while attempting to replace the file "{0}". Please make sure your file directory is writable.',
    'enabledZlibOutputCompression' => 'A diretiva zlib.output_compression no seu arquivo .ini está ativada. Isso não funcionará bem com buffers de saída.', // 'Your zlib.output_compression ini directive is turned on. This will not work well with output buffers.',
    'invalidFile'                  => 'Arquivo inválido: "{0}"', // 'Invalid file: "{0}"',
    'invalidDirectory'             => 'O diretório não existe: "{0}"', // 'Directory does not exist: "{0}"',
    'invalidPhpVersion'            => 'Sua versão do PHP deve ser "{0}" ou superior para executar o CodeIgniter. Versão atual: "{1}"', // 'Your PHP version must be {0} or higher to run CodeIgniter. Current version: {1}',
    'missingExtension'             => 'O framework precisa que a(s) seguinte(s) extensão(ões) esteja(m) instalada(s) e carregada(s): "{0}".', // 'The framework needs the following extension(s) installed and loaded: "{0}".',
    'noHandlers'                   => '"{0}" deve fornecer pelo menos um manipulador (Handler).', // '"{0}" must provide at least one Handler.',
];
