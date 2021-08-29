<?php

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
    'sourceImageRequired'    => '您必須在偏好設定中（preferences）指定來源圖像。',
    'gdRequired'             => '使用這個功能需要 GD image 程式庫。',
    'gdRequiredForProps'     => '你的伺服器必須支援 GD image 程式庫才能獲取圖像屬性。',
    'gifNotSupported'        => '由於授權限制，GIF 圖像通常不支援，您可能得使用 JPG 與PNG 圖像。',
    'jpgNotSupported'        => '不支援 JPG 圖像。',
    'pngNotSupported'        => '不支援 PNG 圖像。',
    'webpNotSupported'       => '不支援 WEBP 圖像。',
    'fileNotSupported'       => '提供了檔案並非所支援的圖像類型。',
    'unsupportedImageCreate' => '你的伺服器不支援處理此類圖像所需的 GD 功能。',
    'jpgOrPngRequired'       => '在偏好設定中（preferences）調整圖像大小的功能僅適用於 JPEG 與 PNG 圖像。',
    'rotateUnsupported'      => '伺服器似乎不支援圖像旋轉。',
    'libPathInvalid'         => 'image 程式庫的路徑不正確，請在圖像的偏好設定中（preferences）設定正確的路徑。 {0, string)',
    'imageProcessFailed'     => '圖像處理失敗，請確定您的伺服器支援您所選擇的協議，並且 image 程式庫所設定的路徑正確。',
    'rotationAngleRequired'  => '您必須設定旋轉角度才能執行旋轉圖像功能。',
    'invalidPath'            => '圖像的路徑不正確。',
    'copyFailed'             => '圖像複製失敗。',
    'missingFont'            => '找不到您所設定的字體。',
    'saveFailed'             => '儲存圖像失敗，請確定圖像和檔案目錄允許寫入。',
    'invalidDirection'       => '圖像翻轉方向只能是 `vertical` 或 `horizontal` 。 目前的值為： {0}',
    'exifNotSupported'       => 'PHP 環境不支援讀取EXIF資料。',
];
