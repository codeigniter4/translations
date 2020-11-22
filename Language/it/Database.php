<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Database language settings
return [
	'invalidEvent'         => '{0} non è una valida chiamata dell\'evento del Model.',
	'invalidArgument'      => 'Devi fornire un valido {0}.',
	'invalidAllowedFields' => 'I campi autorizzati devono essere specificati per il model: {0}',
	'emptyDataset'         => 'Nessun dato presente in {0}.',
	'failGetFieldData'                 => 'Failed to get field data from database.',
	'failGetIndexData'                 => 'Failed to get index data from database.',
	'failGetForeignKeyData'            => 'Failed to get foreign key data from database.',
	'parseStringFail'                  => 'Parsing key string failed.',
	'featureUnavailable'               => 'This feature is not available for the database you are using.',
	'tableNotFound'                    => 'Table `{0}` was not found in the current database.',
	'noPrimaryKey'                     => '`{0}` model class does not specify a Primary Key.',
	'noDateFormat'                     => '`{0}` model class does not have a valid dateFormat.',
	'fieldNotExists'                   => 'Field `{0}` not found.',
	'forEmptyInputGiven'               => 'Empty statement is given for the field `{0}`',
	'forFindColumnHaveMultipleColumns' => 'Only single column allowed in Column name.',
];
