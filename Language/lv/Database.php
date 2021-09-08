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
    'invalidEvent'                     => 'Modeļa notikuma atgriezeniskās saiknes funkcija {0} nav derīga.', // '{0} is not a valid Model Event callback.'
    'invalidArgument'                  => 'Jums jānorāda derīgs arguments {0}.', // 'You must provide a valid {0}.'
    'invalidAllowedFields'             => 'Modelim ir jānorāda atļautie lauki: {0}', // 'Allowed fields must be specified for model: {0}'
    'emptyDataset'                     => 'Nav datu par {0}.', // 'There is no data to {0}.'
    'emptyPrimaryKey'                  => 'Nav definēta galvenā atslēga mēģinot izveidot {0}.', // 'There is no primary key defined when trying to make {0}.'
    'failGetFieldData'                 => 'Neizdevās iegūt lauka datus no datu bāzes.', // 'Failed to get field data from database.'
    'failGetIndexData'                 => 'Neizdevās iegūt indeksa datus no datu bāzes.', // 'Failed to get index data from database.'
    'failGetForeignKeyData'            => 'Neizdevās iegūt ārējās atslēgas datus no datu bāzes.', // 'Failed to get foreign key data from database.'
    'parseStringFail'                  => 'Neizdevās pārsēt atslēgas virkni.', // 'Parsing key string failed.'
    'featureUnavailable'               => 'Šī funkcija nav pieejama jūsu izmantotajā datu bāzē.', // 'This feature is not available for the database you are using.'
    'tableNotFound'                    => 'Tabula `{0}` pašreizējā datu bāzē netika atrasta.', // 'Table `{0}` was not found in the current database.'
    'noPrimaryKey'                     => '`{0}` modeļa klasē nav norādīta primārā atslēga.', // '`{0}` model class does not specify a Primary Key.'
    'noDateFormat'                     => '`{0}` modeļa klasē nav derīgs dateFormat.', // '`{0}` model class does not have a valid dateFormat.'
    'fieldNotExists'                   => 'Lauks `{0}` nav atrasts.', // 'Field `{0}` not found.'
    'forEmptyInputGiven'               => 'Laukam `{0}` ir norādīts tukšs paziņojums', // 'Empty statement is given for the field `{0}`'
    'forFindColumnHaveMultipleColumns' => 'Kolonnas nosaukumā ir atļauta tikai viena kolonna.', // 'Only single column allowed in Column name.'
];
