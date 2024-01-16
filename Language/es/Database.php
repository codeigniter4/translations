<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Database language settings
return [
    'invalidEvent'                     => '{0} no es una llamada válida a un Evento de Modelo.', // '{0} is not a valid Model Event callback.',
    'invalidArgument'                  => 'Debes proporcionar un {0} válido.', // 'You must provide a valid {0}.',
    'invalidAllowedFields'             => 'Los campos permitidos deben especificarse para el modelo: {0}', // 'Allowed fields must be specified for model: {0}',
    'emptyDataset'                     => 'No hay datos para {0}', // 'There is no data to {0}.',
    'emptyPrimaryKey'                  => 'No hay una clave principal definida al intentar hacer {0}', // 'There is no primary key defined when trying to make {0}.',
    'failGetFieldData'                 => 'No se pudieron obtener datos del campo de la base de datos.', // 'Failed to get field data from database.',
    'failGetIndexData'                 => 'No se pudieron obtener datos de índice de la base de datos.', // 'Failed to get index data from database.',
    'failGetForeignKeyData'            => 'No se pudieron obtener datos de clave externa de la base de datos.', // 'Failed to get foreign key data from database.',
    'parseStringFail'                  => 'Se produjo un error al analizar la clave de la cadena.', // 'Parsing key string failed.',
    'featureUnavailable'               => 'Esta característica no está disponible para la base de datos que estás utilizando.', // 'This feature is not available for the database you are using.',
    'tableNotFound'                    => 'No se encontró la tabla `{0}` en la base de datos actual.', // 'Table `{0}` was not found in the current database.',
    'noPrimaryKey'                     => 'La clase de modelo `{0}` no especifica una clave primaria.', // '`{0}` model class does not specify a Primary Key.',
    'noDateFormat'                     => 'La clase de modelo `{0}` no tiene un dateFormat válido.', // '`{0}` model class does not have a valid dateFormat.',
    'fieldNotExists'                   => 'No se encontró el campo `{0}`.', // 'Field `{0}` not found.',
    'forEmptyInputGiven'               => 'Se proporciona una declaración vacía para el campo `{0}`', // 'Empty statement is given for the field `{0}`',
    'forFindColumnHaveMultipleColumns' => 'Solo se permite una sola columna en el nombre de la columna.', // 'Only single column allowed in Column name.',
    'methodNotAvailable'               => 'No puede utilizar `{1}` en `{0}`. Este es un método de la clase Query Builder.', // 'You cannot use "{1}" in "{0}". This is a method of the Query Builder Class.',
];
