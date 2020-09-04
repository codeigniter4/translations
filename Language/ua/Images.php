<?php

/**
 * Images language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'sourceImageRequired'    => 'В налаштуваннях необхідно вказати вихідне зображення.',
   'gdRequired'             => 'Для використання цієї функції потрібна бібліотека зображень GD.',
   'gdRequiredForProps'     => 'Для визначення властивостей зображення ваш сервер повинен підтримувати бібліотеку зображень GD.',
   'gifNotSupported'        => 'Зображення GIF часто не підтримуються через обмеження ліцензування. Можливо, вам доведеться використовувати зображення JPG або PNG.',
   'jpgNotSupported'        => 'Зображення JPG не підтримуються.',
   'pngNotSupported'        => 'Зображення PNG не підтримуються.',
   'webpNotSupported'       => 'Зображення WEBP не підтримуються.',
   'fileNotSupported'       => 'Наданий файл не є підтримуваним типом зображення.',
   'unsupportedImageCreate' => 'Ваш сервер не підтримує функцію GD, необхідну для обробки зображення цього типу.',
   'jpgOrPngRequired'       => 'Протокол зміни розміру зображення, вказаний в налаштуваннях, працює лише з типами зображень JPEG або PNG.',
   'rotateUnsupported'      => 'Ваш сервер не підтримує обертання зображень.',
   'libPathInvalid'         => 'Шлях до вашої бібліотеки зображень неправильний. Будь ласка, встановіть правильний шлях у своїх налаштуваннях зображення. {0}',
   'imageProcessFailed'     => 'Помилка обробки зображень. Переконайтесь, що ваш сервер підтримує обраний протокол і чи правильний шлях до вашої бібліотеки зображень.',
   'rotationAngleRequired'  => 'Для повороту зображення потрібен кут повороту.',
   'invalidPath'            => 'Шлях до зображення неправильний.',
   'copyFailed'             => 'Помилка процедури копіювання зображень.',
   'missingFont'            => 'Не вдається знайти шрифт для використання.',
   'saveFailed'             => 'Не вдалося зберегти зображення. Будь ласка, переконайтесь, що каталог зображень та файлів доступний для запису.',
   'invalidDirection'       => 'Напрямок повороту може бути лише вертикальним (`vertical`) або горизонтальним (`horizontal`). Вказано: {0}',
   'exifNotSupported'       => 'Інсталяція PHP не підтримує читання даних EXIF.',
];
