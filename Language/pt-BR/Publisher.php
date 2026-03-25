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

// Configurações de linguagem do Publisher
return [
    'collision'             => 'O Publisher encontrou um "{0}" inesperado ao copiar "{1}" para "{2}".',
    'destinationNotAllowed' => 'O destino não está na lista de diretórios permitidos do Publisher: "{0}"',
    'fileNotAllowed'        => '"{0}" falhou na seguinte restrição para "{1}": {2}',

    // Publish Command
    'publishMissing'          => 'Nenhuma classe Publisher detectada em {0} em todos os namespaces.',
    'publishMissingNamespace' => 'Nenhuma classe Publisher detectada em {0} no namespace {1}.',
    'publishSuccess'          => '"{0}" publicou {1} arquivo(s) em "{2}".',
    'publishFailure'          => '"{0}" falhou ao publicar em "{1}".',
];
