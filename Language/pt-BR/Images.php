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

// Configurações de linguagem de Imagens
return [
    'sourceImageRequired'    => 'Deve especificar uma imagem de origem nas suas preferências.',
    'gdRequired'             => 'A biblioteca de imagens GD é necessária para usar este recurso.',
    'gdRequiredForProps'     => 'O seu servidor deve suportar a biblioteca de imagens GD para determinar as propriedades da imagem.',
    'gifNotSupported'        => 'Imagens GIF muitas vezes não são suportadas devido a restrições de licenciamento. Pode ter de usar imagens JPG ou PNG em seu lugar.',
    'jpgNotSupported'        => 'Imagens JPG não são suportadas.',
    'pngNotSupported'        => 'Imagens PNG não são suportadas.',
    'webpNotSupported'       => 'Imagens WEBP não são suportadas.',
    'fileNotSupported'       => 'O arquivo fornecido não é um tipo de imagem suportado.',
    'unsupportedImageCreate' => 'O seu servidor não suporta a funcionalidade necessária para processar este tipo de imagem.',
    'jpgOrPngRequired'       => 'O protocolo de redimensionamento de imagem especificado nas suas preferências só funciona com tipos de imagem JPEG ou PNG.',
    'rotateUnsupported'      => 'A rotação de imagem parece não ser suportada pelo seu servidor.',
    'imageProcessFailed'     => 'O processamento da imagem falhou. Verifique se o seu servidor suporta o protocolo escolhido e se o caminho para a sua biblioteca de imagens está correto.',
    'rotationAngleRequired'  => 'É necessário um ângulo de rotação para rodar a imagem.',
    'invalidPath'            => 'O caminho para a imagem não está correto.',
    'copyFailed'             => 'A rotina de cópia de imagem falhou.',
    'missingFont'            => 'Não foi possível encontrar uma fonte para usar.',
    'saveFailed'             => 'Não foi possível salvar a imagem. Certifique-se de que a imagem e o diretório de arquivos têm permissão de escrita.',
    'invalidDirection'       => 'A direção de inversão (flip) só pode ser "vertical" ou "horizontal". Fornecido: "{0}"',
    'exifNotSupported'       => 'A leitura de dados EXIF não é suportada por esta instalação do PHP.',

    // @deprecated
    'libPathInvalid' => 'O caminho para a sua biblioteca de imagens não está correto. Defina o caminho correto nas suas preferências de imagem. "{0}"',
];
