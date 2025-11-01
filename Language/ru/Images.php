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

// Images language settings
return [
    'sourceImageRequired'    => 'Необходимо указать исходное изображение в настройках.',
    'gdRequired'             => 'Для использования этой функции требуется библиотека изображений GD.',
    'gdRequiredForProps'     => 'Ваш сервер должен поддерживать библиотеку GD для определения свойств изображения.',
    'gifNotSupported'        => 'GIF-изображения часто не поддерживаются из-за лицензионных ограничений. Возможно, потребуется использовать JPG или PNG.',
    'jpgNotSupported'        => 'JPG-изображения не поддерживаются.',
    'pngNotSupported'        => 'PNG-изображения не поддерживаются.',
    'webpNotSupported'       => 'WEBP-изображения не поддерживаются.',
    'fileNotSupported'       => 'Указанный файл не является поддерживаемым типом изображения.',
    'unsupportedImageCreate' => 'Ваш сервер не поддерживает функцию GD, необходимую для обработки этого типа изображения.',
    'jpgOrPngRequired'       => 'Указанный протокол изменения размера изображения работает только с JPEG или PNG.',
    'rotateUnsupported'      => 'Поворот изображения, похоже, не поддерживается сервером.',
    'libPathInvalid'         => 'Путь к библиотеке изображений указан неверно. Укажите корректный путь в настройках. "{0}"',
    'imageProcessFailed'     => 'Обработка изображения не удалась. Убедитесь, что сервер поддерживает выбранный протокол и путь к библиотеке изображений указан верно.',
    'rotationAngleRequired'  => 'Для поворота изображения необходимо указать угол.',
    'invalidPath'            => 'Путь к изображению указан неверно.',
    'copyFailed'             => 'Не удалось выполнить копирование изображения.',
    'missingFont'            => 'Не удалось найти шрифт для использования.',
    'saveFailed'             => 'Не удалось сохранить изображение. Убедитесь, что изображение и каталог доступны для записи.',
    'invalidDirection'       => 'Направление отражения может быть только "vertical" или "horizontal". Указано: "{0}"',
    'exifNotSupported'       => 'Чтение данных EXIF не поддерживается этой установкой PHP.',
];
