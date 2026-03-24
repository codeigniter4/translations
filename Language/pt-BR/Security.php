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

// Security language settings
return [
    'disallowedAction' => 'A ação solicitada não é permitida.', // 'The action you requested is not allowed.',
    'insecureCookie'   => 'Tentativa de enviar um cookie seguro por meio de uma conexão insegura.', // 'Attempted to send a secure cookie over a non-secure connection.',

    // @deprecated
    'invalidSameSite' => 'O valor de SameSite deve ser None, Lax, Strict, ou uma string vazia. Fornecido: "{0}"', // 'The SameSite value must be None, Lax, Strict, or a blank string. Given: "{0}"',
];
