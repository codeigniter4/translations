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
    'sourceImageRequired'    => '你必须指定源图像。',
    'gdRequired'             => '使用该功能需要 GD 图像库。',
    'gdRequiredForProps'     => '你的服务器必须支持 GD 图像库，以便确定图像属性。',
    'gifNotSupported'        => '不支持 GIF 图像。',
    'jpgNotSupported'        => '不支持 JPG 图像。',
    'pngNotSupported'        => '不支持 PNG 图像。',
    'webpNotSupported'       => '不支持 WEBP 图像。',
    'fileNotSupported'       => '提供的文件不是支持的图像类型。',
    'unsupportedImageCreate' => '你的服务器不支持处理这种类型的图像所需的GD功能。',
    'jpgOrPngRequired'       => '在你的首选项中指定的图像调整协议只适用于JPEG或PNG图像类型。',
    'rotateUnsupported'      => '你的服务器似乎不支持图像旋转。',
    'libPathInvalid'         => '你的图像库的路径不正确。请在你的图像首选项中设置正确的路径。{0}',
    'imageProcessFailed'     => '图像处理失败。请验证你的服务器是否支持所选择的协议，以及你的图像库的路径是否正确。',
    'rotationAngleRequired'  => '需要一个旋转的角度来旋转图像。',
    'invalidPath'            => '图像的路径不正确。',
    'copyFailed'             => '图像复制程序失败。',
    'missingFont'            => '无法找到可使用的字体。',
    'saveFailed'             => '无法保存图像。请确保图像和文件目录是可写的。',
    'invalidDirection'       => '翻转方向只能是 垂直 (vertial) 或 水平 (horizontal)，当前是 {0}',
    'exifNotSupported'       => '读取 EXIF 数据不被此 PHP 安装所支持。',
];
