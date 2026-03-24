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

// Session language settings
return [
    'missingDatabaseTable'   => 'Sessão: "savePath" deve conter o nome da tabela para que Database Session Handler funcione.', // '"sessionSavePath" must have the table name for the Database Session Handler to work.',
    'invalidSavePath'        => 'Sessão: O save path "{0}" configurado não é um diretório, não existe ou não pode ser criado.', // 'Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.',
    'writeProtectedSavePath' => 'Sessão: O save path "{0}" configurado não é gravável pelo processo do PHP.', // 'Session: Configured save path "{0}" is not writable by the PHP process.',
    'emptySavePath'          => 'Sessão: Nenhum save path configurado.', // 'Session: No save path configured.',
    'invalidSavePathFormat'  => 'Sessão: O formato do save path do Redis não é válido: "{0}"', // 'Session: Invalid Redis save path format: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => 'Sessão: A configuração SameSite deve ser None, Lax, Strict, ou uma string vazia. Fornecido: "{0}"', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: "{0}"',
];
