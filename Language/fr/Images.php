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
    'sourceImageRequired'    => 'Vous devez spécifier une image source dans vos préférences.',
    'gdRequired'             => 'La bibliothèque "GD image library" est nécessaire pour utiliser cette fonctionnalité.',
    'gdRequiredForProps'     => 'Votre serveur doit supporter la bibliothèque "GD image library" afin de déterminer les propriétés de l\'image.',
    'gifNotSupported'        => 'Les images GIF sont souvent non supportées du fait des restrictions de licence. Vous devrez peut-être utiliser des images JPG ou PNG à la place.',
    'jpgNotSupported'        => 'Les images JPG ne sont pas supportées.',
    'pngNotSupported'        => 'Les images PNG ne sont pas supportées.',
    'unsupportedImageCreate' => 'Votre serveur ne supporte pas la fonction GD nécessaire pour traiter ce type d\'image.',
    'jpgOrPngRequired'       => 'Le protocole de redimensionnement d\'image spécifié dans vos préférences ne fonctionne qu\'avec les images de type JPEG ou PNG.',
    'rotateUnsupported'      => 'La rotation d\'image ne semble pas être supportée par votre serveur.',
    'libPathInvalid'         => 'Le chemin vers votre bibliothèque d\'image est incorrect. Veuillez paramétrer le chemin correct dans vos préférences image. {0, string)',
    'imageProcessFailed'     => 'Échec du traitement de l\'image. Veuillez vérifier que votre serveur supporte le protocole choisi et que le chemin vers votre bibliothèque d\'image est correct.',
    'rotationAngleRequired'  => 'Un angle de rotation est requis pour opérer une rotation de l\'image.',
    'invalidPath'            => 'Le chemin vers l\'image est incorrect.',
    'copyFailed'             => 'Échec durant la copie de l\'image.',
    'missingFont'            => 'Impossible de trouver une police de caractéres à utiliser.',
    'saveFailed'             => 'Impossible de sauvegarder l\'image. Veuillez vous assurer que l\'image et le répertoire de fichier ont les permissions en écriture.',
    'invalidDirection'       => 'Seul un retournement `vertical` ou `horizontal` peut être effectué. Donné : {0}',
    'exifNotSupported'       => 'La lecture des données EXIF n\'est pas supportée dans cette installation de PHP.',
];
