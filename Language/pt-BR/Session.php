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
    'missingDatabaseTable'   => '"sessionSavePath" deve ter o nome da tabela para o Database Session Handler funcionar.', // '"sessionSavePath" must have the table name for the Database Session Handler to work.',
    'invalidSavePath'        => 'Sessão: O save path "{0}" configurado não é um diretório, não existe ou não pode ser criado.', // 'Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.',
    'writeProtectedSavePath' => 'Sessão: O save path "{0}" configurado não é gravável pelo processo do PHP.', // 'Session: Configured save path "{0}" is not writable by the PHP process.',
    'emptySavePath'          => 'Sessão: Nenhum save path configurado.', // 'Session: No save path configured.',
    'invalidSavePathFormat'  => 'Sessão: Formato do Redis save path é inválido: "{0}"', // 'Session: Invalid Redis save path format: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => 'Sessão: A configuração SameSite deve ser None, Lax, Strict, ou uma string vazia. Dado: "{0}"', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: "{0}"',
];
