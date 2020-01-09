<?php

/**
 * Image language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */
return [
	'sourceImageRequired'    => 'Musisz określić obraz źródłowy w swoich preferencjach.',
	'gdRequired'             => 'Do korzystania z tej funkcji wymagana jest biblioteka obrazów GD.',
	'gdRequiredForProps'     => 'Twój serwer musi obsługiwać bibliotekę obrazów GD w celu określenia właściwości obrazu.',
	'gifNotSupported'        => 'Obrazy GIF często nie są obsługiwane ze względu na ograniczenia licencyjne. Może być konieczne użycie obrazów JPG lub PNG.',
	'jpgNotSupported'        => 'Obrazy JPG nie są obsługiwane.',
	'pngNotSupported'        => 'Obrazy PNG nie są obsługiwane.',
	'unsupportedImageCreate' => 'Twój serwer nie obsługuje funkcji GD wymaganej do przetwarzania tego typu obrazu.',
	'jpgOrPngRequired'       => 'Protokół zmiany rozmiaru obrazu określony w preferencjach działa tylko z obrazami JPEG lub PNG.',
	'rotateUnsupported'      => 'Obracanie obrazu nie jest obsługiwane przez Twój serwer.',
	'libPathInvalid'         => 'Ścieżka do biblioteki obrazów jest niepoprawna. Ustaw prawidłową ścieżkę w preferencjach obrazu. {0, string)',
	'imageProcessFailed'     => 'Przetwarzanie obrazu się nie udało. Sprawdź, czy twój serwer obsługuje wybrany protokół i czy ścieżka do biblioteki obrazów jest prawidłowa.',
	'rotationAngleRequired'  => 'Aby obrócić obraz, wymagany jest kąt obrotu.',
	'invalidPath'            => 'Ścieżka do obrazu jest nieprawidłowa.',
	'copyFailed'             => 'Procedura kopiowania obrazów nie powiodła się.',
	'missingFont'            => 'Nie można znaleźć czcionki do użycia.',
	'saveFailed'             => 'Nie można zapisać obrazu. Upewnij się, że obraz i katalog plików są zapisywalne.',
	'invalidDirection'       => 'Kierunek odwrócenia może być tylko "pionowy" lub "poziomy". Podano: {0}',
	'exifNotSupported'       => 'Odczytywanie danych EXIF nie jest obsługiwane przez tę instalację PHP.',
];
