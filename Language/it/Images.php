<?php

/**
 * Image language strings.
 *
 * @package      CodeIgniter
 * @author       Luca Marco Rasia
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 4.0.0
 *
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
	'sourceImageRequired'    => 'Devi specificare una sorgente immagine nelle tue preferenze.',
	'gdRequired'             => 'La libreria GD di gestione immagini è richiesta per poter utilizzare questa caratteristica.',
	'gdRequiredForProps'     => 'Il tuo server deve supportare la libreria GD di gestione immagini per determinare le proprietà dell\'immagine.',
	'gifNotSupported'        => 'Le immagini GIF spesso non sono supportate a causa delle restrizioni di licenza. Potresti, invece, dover usare immagini JPG or PNG.',
	'jpgNotSupported'        => 'Immagini JPG non sono supportate.',
	'pngNotSupported'        => 'Immagini PNG non sono supportate.',
	'unsupportedImageCreate' => 'Il tuo server non supporta la funzione GD richiesta per processare questo tipo di immagine.',
	'jpgOrPngRequired'       => 'Il protocollo di ridimensionamento dell\'immagine specificato nelle tue preferenze funziona solo con i tipi di immagine JPEG o PNG.',
	'rotateUnsupported'      => 'La rotazione dell\'immagine sembra non essere supportata dal tuo server.',
	'libPathInvalid'         => 'Il percorso della tua libreria di gestione immagini non è corretto. Si prega di indicare il persorso corretto nelle tue preferenze immagine. {0, string)',
	'imageProcessFailed'     => 'Elaborazione dell\'immagine fallita. Per favore verifica che il tuo server supporti il protocollo scelto e che il percorso della tua libreria di gestione immagini sia corretto.',
	'rotationAngleRequired'  => 'Un angolo di rotazione è richiesto per ruotare l\'immagine.',
	'invalidPath'            => 'Il percorso dell\'immagine non è corretto.',
	'copyFailed'             => 'L\'esecuzione del lavoro di copia dell\'immagine è fallito.',
	'missingFont'            => 'Impossibile trovare un font da usare.',
	'saveFailed'             => 'Impossibile salvare l\'immagine. Prego assicurati che l\'immagine e la cartella siano scrivibili.',
	'invalidDirection'       => 'La direzione per capovolgere può essere solo `vertical` o `horizontal`. Selezionato: {0}',
	'exifNotSupported'       => 'La lettura dei dati EXIF non è supportata da questa installazione PHP.',
];
