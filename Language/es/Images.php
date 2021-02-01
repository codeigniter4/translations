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
	'sourceImageRequired'    => 'Debe especificar el origen de la imagen en las preferencias.',
	'gdRequired'             => 'Se requiere la librería de imágenes GD para esta funcionalidad.',
	'gdRequiredForProps'     => 'Su servidor debe soportar la librería de imágenes GD para determinar las propiedades de la imagen.',
	'gifNotSupported'        => 'Las imágnes GIF no suelen ser soportadas por restricciones de licencia. Puede utilizar imágenes JPG o PNG en su lugar.',
	'jpgNotSupported'        => 'No se soportan imágnes JPG.',
	'pngNotSupported'        => 'No se soportan imágnes PNG.',
	'unsupportedImageCreate' => 'Su servidor no soporta la función GD necesaria para procesar este tipo de imagen.',
	'jpgOrPngRequired'       => 'El protocolo de escalado especificado en sus preferencias solo funciona con imágenes JPEG o PNG.',
	'rotateUnsupported'      => 'La rotación de imágenes no parece estar soportada por su servidor.',
	'libPathInvalid'         => 'La ruta a su librería de imágenes no es correcta. Por fabor corrija la ruta en sus preferencias de imagen. {0, string)',
	'imageProcessFailed'     => 'Ha fallado el procesamiento de imagen. Por favor, verifique que su servidor soporta el protocolo seleccionado y que la ruta a su librería de imágenes es correcta.',
	'rotationAngleRequired'  => 'Es necesario un ángulo de rotación para rotar la imagen.',
	'invalidPath'            => 'La ruta a la imagen no es correcta.',
	'copyFailed'             => 'La rutina de copiado de imagen ha fallado.',
	'missingFont'            => 'Incapaz de encontrar la fuente a utilizar.',
	'saveFailed'             => 'Incapaz de guardar la imagen. Por favor compruebe el archivo que la imagen y el directorio tienen permiso de escritura.',
	'invalidDirection'       => 'La dirección de girado puede ser solo `vertical` o `horizontal`. Seleccionado: {0}',
	'exifNotSupported'       => 'Leer datos EXIF no está soportado por esta instalación de PHP.',
];
