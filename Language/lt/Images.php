<?php

/**
 * Image language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'sourceImageRequired'    => 'Turite nurodyti šaltinio paveikslėlį nustatymuose.',
   'gdRequired'             => 'Norint naudoti šią savybę reikalinga GD paveikslėlių biblioteka.',
   'gdRequiredForProps'     => 'Norint nustatyti paveikslėlių savybes serveris turi palaikyti GD paveikslėlių biblioteką.',
   'gifNotSupported'        => 'GIF paveikslėliai dažnai nėra palaikomi dėl licenzijavimo apribojimų. Vietoje jų gali tekti naudoti JPG arba PNG paveikslėlius.',
   'jpgNotSupported'        => 'JPG paveikslėliai nepalaikomi.',
   'pngNotSupported'        => 'PNG paveikslėliai nepalaikomi.',
   'unsupportedImageCreate' => 'Serveris nepalaiko GD funkcijos, kurios reikia šio paveikslėlio apdorojimui.',
   'jpgOrPngRequired'       => 'Paveikslėlių dydžio keitimo protokolas, nurodytas Jūsų nustatymuose, veikia tik su JPG arba PNG paveikslėlių tipais.',
   'rotateUnsupported'      => 'Paveikslėlių sukimas atrodo nėra palaikomas serverio.',
   'libPathInvalid'         => 'Paveikslėlių apdorojimo bibliotekos kelias neteisingas. Prašome paveikslėlių nustatymuose nurodyti teisingą kelią. {0, string)',
   'imageProcessFailed'     => 'Paveikslėlio apdorojimas nepavyko. Prašome įsitikinti, kad serveris palaiko pasirinktą protokolą, ir kad kelias iki paveikslėlių bibliotekos nurodytas teisingai.',
   'rotationAngleRequired'  => 'Paveikslėlio pasukimui reikia nurodyti sukimo kampą.',
   'invalidPath'            => 'Paveikslėlio kelias nurodytas neteisingai.',
   'copyFailed'             => 'Paveikslėlio kopijavimas nepavyko.',
   'missingFont'            => 'Nepavyksta rasti naudotino šrifto.',
   'saveFailed'             => 'Nepavyko išsaugoti paveikslėlio. Prašome įsitikinti, kad į paveikslėlio vardą ir direktoriją galima rašyti.',
   'invalidDirection'       => 'Apvertimo kryptis gali būti arba `vertical`, arba `horizontal`. Nurodyta: {0}',
   'exifNotSupported'       => 'Serverio PHP nepalaiko EXIF duomenų skaitymo.',
];
