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

// Cache language settings
return [
    'unableToWrite'   => 'Não foi possível gravar no cache "{0}"', // 'Cache unable to write to "{0}".',
    'invalidHandlers' => 'A configuração do cache deve ter um array de $validHandlers.', // 'Cache config must have an array of $validHandlers.',
    'noBackup'        => 'A configuração do cache deve ter um manipulador (handler) e um manipulador de backup (backupHandler) definidos.', // 'Cache config must have a handler and backupHandler set.',
    'handlerNotFound' => 'A configuração do cache tem um manipulador (handler) inválido ou um manipulador de backup (backupHandler) especificado.', // 'Cache config has an invalid handler or backup handler specified.',
];
