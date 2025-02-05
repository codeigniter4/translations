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

// Publisher language settings
return [
    'collision'             => 'Publisher обнаружил непредвиденное "{0}" при копировании "{1}" в "{2}".',
    'destinationNotAllowed' => 'Место назначения не входит в разрешенный список директорий Publisher: "{0}"',
    'fileNotAllowed'        => '"{0}" не соответствует следующему ограничению для "{1}": {2}',

    // Publish Command
    'publishMissing'          => 'Классы Publisher не найдены в {0} во всех пространствах имен.',
    'publishMissingNamespace' => 'Классы Publisher не найдены в {0} в пространстве имен {1}.',
    'publishSuccess'          => '"{0}" опубликовал {1} файл(ов) в "{2}".',
    'publishFailure'          => '"{0}" не удалось опубликовать в "{1}".',
];
