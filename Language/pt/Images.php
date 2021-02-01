<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Images language settings
return [
	'sourceImageRequired'    => 'Deve especificar uma imagem de origem em suas preferências.',
	'gdRequired'             => 'A biblioteca de imagens GD é necessária para usar esse recurso.',
	'gdRequiredForProps'     => 'O servidor deve suportar a biblioteca de imagens GD para determinar as propriedades da imagem.',
	'gifNotSupported'        => 'Imagens GIF geralmente não são suportadas devido a restrições de licenciamento. Pode usar imagens JPG ou PNG.',
	'jpgNotSupported'        => 'Imagens JPG não são suportadas.',
	'pngNotSupported'        => 'Imagens PNG não são suportadas.',
	'unsupportedImageCreate' => 'O servidor não suporta a função GD necessária para processar este tipo de imagem.',
	'jpgOrPngRequired'       => 'O protocolo de redimensionamento de imagem especificado nas suas preferências só funciona com os tipos de imagem JPEG ou PNG.',
	'rotateUnsupported'      => 'A rotação de imagem não parece ser suportada pelo seu servidor.',
	'libPathInvalid'         => 'O caminho para a sua biblioteca de imagens não está correto. Por favor, defina o caminho correto nas suas preferências de imagem. {0, string)',
	'imageProcessFailed'     => 'O processamento de imagem falhou. Por favor, verifique se o seu servidor suporta o protocolo escolhido e se o caminho para a sua biblioteca de imagens está correto.',
	'rotationAngleRequired'  => 'Um ângulo de rotação é necessário para girar a imagem.',
	'invalidPath'            => 'O caminho para a imagem não está correto.',
	'copyFailed'             => 'A rotina de cópia de imagem falhou.',
	'missingFont'            => 'Não é possível encontrar uma fonte para usar.',
	'saveFailed'             => 'Não é possível salvar a imagem. Por favor, certifique-se de que a imagem e o diretório de arquivos são graváveis.',
	'invalidDirection'       => 'A direção de inversão pode ser apenas `vertical` ou `horizontal`. Fornecido: {0}',
	'exifNotSupported'       => 'A leitura de dados EXIF não é suportada por esta instalação do PHP.',
];
