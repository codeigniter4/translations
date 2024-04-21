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
    'sourceImageRequired'    => 'Você deve especificar uma imagem de origem em suas preferências.', // 'You must specify a source image in your preferences.',
    'gdRequired'             => 'A biblioteca de imagens GD é necessária para usar este recurso.', // 'The GD image library is required to use this feature.',
    'gdRequiredForProps'     => 'Seu servidor deve suportar a biblioteca de imagens GD para determinar as propriedades da imagem.', // 'Your server must support the GD image library in order to determine the image properties.',
    'gifNotSupported'        => 'Imagens GIF geralmente não são suportadas devido a restrições de licenciamento. Talvez seja necessário usar imagens JPG ou PNG em vez disso.', // 'GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.',
    'jpgNotSupported'        => 'Imagens JPG não são suportadas.', // 'JPG images are not supported.',
    'pngNotSupported'        => 'Imagens PNG não são suportadas.', // 'PNG images are not supported.',
    'webpNotSupported'       => 'Imagens WEBP não são suportadas.', // 'WEBP images are not supported.',
    'fileNotSupported'       => 'O arquivo fornecido não é de um tipo de imagem suportado.', // 'The supplied file is not a supported image type.',
    'unsupportedImageCreate' => 'Seu servidor não suporta a função GD necessária para processar este tipo de imagem.', // 'Your server does not support the GD function required to process this type of image.',
    'jpgOrPngRequired'       => 'O protocolo de redimensionamento de imagem especificado nas suas preferências só funciona com os tipos de imagem JPEG ou PNG.', // 'The image resize protocol specified in your preferences only works with JPEG or PNG image types.',
    'rotateUnsupported'      => 'A rotação de imagem não parece ser suportada pelo seu servidor.', // 'Image rotation does not appear to be supported by your server.',
    'libPathInvalid'         => 'O caminho para a sua biblioteca de imagens não está correto. Por favor, defina o caminho correto nas suas preferências de imagem. "{0}"', // 'The path to your image library is not correct. Please set the correct path in your image preferences. "{0}"',
    'imageProcessFailed'     => 'O processamento de imagem falhou. Por favor, verifique se o seu servidor suporta o protocolo escolhido e se o caminho para a sua biblioteca de imagens está correto.', // 'Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.',
    'rotationAngleRequired'  => 'Um ângulo de rotação é necessário para girar a imagem.', // 'An angle of rotation is required to rotate the image.',
    'invalidPath'            => 'O caminho para a imagem não está correto.', // 'The path to the image is not correct.',
    'copyFailed'             => 'A rotina de cópia de imagem falhou.', // 'The image copy routine failed.',
    'missingFont'            => 'Não é possível encontrar uma fonte a ser usada.', // 'Unable to find a font to use.',
    'saveFailed'             => 'Não é possível salvar a imagem. Por favor, certifique-se de que a imagem e o diretório de arquivos são graváveis.', // 'Unable to save the image. Please make sure the image and file directory are writable.',
    'invalidDirection'       => 'A direção da giro pode ser somente "vertical" ou "horizontal". Dado: "{0}"', // 'Flip direction can be only "vertical" or "horizontal". Given: "{0}"',
    'exifNotSupported'       => 'A leitura de dados EXIF não é suportada por esta instalação do PHP.', // 'Reading EXIF data is not supported by this PHP installation.',
];
