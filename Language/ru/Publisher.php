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
    'collision'             => 'Publisher столкнулся с неожиданным "{0}" при копировании "{1}" в "{2}".',
    'destinationNotAllowed' => 'Папка назначения не входит в разрешённый список каталогов Publisher: "{0}"',
    'fileNotAllowed'        => '"{0}" не соответствует следующим ограничениям для "{1}": {2}',

    // Publish Command
    'publishMissing'          => 'Классы Publisher не обнаружены в {0} во всех пространствах имён.',
    'publishMissingNamespace' => 'Классы Publisher не обнаружены в {0} в пространстве имён {1}.',
    'publishSuccess'          => '"{0}" опубликовал {1} файл(ов) в "{2}".',
    'publishFailure'          => '"{0}" не удалось опубликовать в "{1}".',
];
