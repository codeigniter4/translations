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

// Configurações de linguagem de Sessão (Session)
return [
    'missingDatabaseTable'   => 'Sessão: "savePath" deve conter o nome da tabela para o Database Session Handler funcionar.',
    'invalidSavePath'        => 'Sessão: O caminho de salvamento configurado "{0}" não é um diretório, não existe ou não pode ser criado.',
    'writeProtectedSavePath' => 'Sessão: O caminho de salvamento configurado "{0}" não tem permissão de escrita pelo processo PHP.',
    'emptySavePath'          => 'Sessão: Nenhum caminho de salvamento (save path) configurado.',
    'invalidSavePathFormat'  => 'Sessão: Formato de caminho de salvamento Redis inválido: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => 'Sessão: A configuração SameSite deve ser None, Lax, Strict ou uma string vazia. Fornecido: "{0}"',
];
