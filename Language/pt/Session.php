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
    'missingDatabaseTable'   => '`sessionSavePath` deve ter o nome da tabela para o manipulador de sessão de base de dados funcionar.',
    'invalidSavePath'        => 'Sessão: O caminho configurado "{0}" não é um diretório, não existe ou não pode ser criado.',
    'writeProtectedSavePath' => 'Sessão: O caminho configurado "{0}" não tem permissões de escrita pelo processo do PHP.',
    'emptySavePath'          => 'Sessão: Nenhum caminho configurado.',
    'invalidSavePathFormat'  => 'Sessão: Formato de caminho Redis inválido: {0}',
];
