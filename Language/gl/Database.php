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
    'invalidEvent'                     => '{0} non é unha chamada válida a un Evento de Modelo.', // '{0} is not a valid Model Event callback.',
    'invalidArgument'                  => 'Debes proporcionar un {0} válido.', // 'You must provide a valid {0}.',
    'invalidAllowedFields'             => 'Os campos permitidos deben especificarse para o modelo: {0}', // 'Allowed fields must be specified for model: {0}',
    'emptyDataset'                     => 'Non hai datos para {0}', // 'There is no data to {0}.',
    'emptyPrimaryKey'                  => 'Non hai unha clave principal definida ao intentar facer {0}', // 'There is no primary key defined when trying to make {0}.',
    'failGetFieldData'                 => 'Non se puderon obter datos do campo da base de datos.', // 'Failed to get field data from database.',
    'failGetIndexData'                 => 'Non se puderon obter datos de índice da base de datos.', // 'Failed to get index data from database.',
    'failGetForeignKeyData'            => 'Non se puderon obter datos de clave externa da base de datos.', // 'Failed to get foreign key data from database.',
    'parseStringFail'                  => 'Producíuse un erro ao analizar a clave da cadea.', // 'Parsing key string failed.',
    'featureUnavailable'               => 'Esta característica no está disponible para a base de datos que estás utilizando.', // 'This feature is not available for the database you are using.',
    'tableNotFound'                    => 'Non se encontró a táboa `{0}` en a base de datos actual.', // 'Table `{0}` was not found in the current database.',
    'noPrimaryKey'                     => 'A clase de modelo `{0}` non especifica unha clave primaria.', // '`{0}` model class does not specify a Primary Key.',
    'noDateFormat'                     => 'A clase de modelo `{0}` non ten un dateFormat válido.', // '`{0}` model class does not have a valid dateFormat.',
    'fieldNotExists'                   => 'Non se encontró o campo `{0}`.', // 'Field `{0}` not found.',
    'forEmptyInputGiven'               => 'Se proporciona unha declaración vacía para o campo `{0}`', // 'Empty statement is given for the field `{0}`',
    'forFindColumnHaveMultipleColumns' => 'Solo se permite unha sola columna no nome da columna.', // 'Only single column allowed in Column name.',
    'methodNotAvailable'               => 'No pode utilizar `{1}` en `{0}`. Este é un método da clase Query Builder.', // 'You cannot use "{1}" in "{0}". This is a method of the Query Builder Class.',
];
