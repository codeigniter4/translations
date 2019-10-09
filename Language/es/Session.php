<?php

/**
 * Session language strings.
 *
 * @package      CodeIgniter
 * @author       Fernán Castro Asensio
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 4.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */
return [
	'missingDatabaseTable'   => '`sessionSavePath` debe tener un nombre de tabla para que funcione el manejador de sesión de la base de datos.',
	'invalidSavePath'        => 'Sesión: La ruta de guardado configurada "{0}" no es un directorio, no existe o no puede ser creada.',
	'writeProtectedSavePath' => 'Sesión: La ruta de guardado configurada "{0}" no es escribible por el proceso de PHP.',
	'emptySavePath'          => 'Sesión: No se ha configurado una ruta de guardado.',
	'invalidSavePathFormat'  => 'Sesión: Formato de la ruta de guardado Redis inválida: {0}',
];
