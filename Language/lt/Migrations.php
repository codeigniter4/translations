<?php

/**
 * Migration language strings.
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
	// Migration Runner
   'missingTable'      => 'Turi būti nustatyta migracijų lentelė.',
   'disabled'          => 'Migracijos buvo įkeltos, bet yra išjungtos, arba nustatytos neteisingai.',
   'notFound'          => 'Migracijų failas nerastas: ',
   'batchNotFound'     => 'Tikslinis paketas nerastas: ',
   'empty'             => 'Nerasta migracijų failų',
   'gap'               => 'Migracijų sekoje netoli versijos numerio yra tarpas: ',
   'classNotFound'     => 'Migracijos klasė „%s“ nerasta.',
   'missingMethod'     => 'Migracijos klasei trūksta „%s“ metodo.',

	// Migration Command
   'migHelpLatest'     => "\t\tMigruoja duomenų bazes naudojant vėliausią prieinamą migraciją.",
   'migHelpCurrent'    => "\t\tMigruoja duomenų bazę iki versijos, kuri konfigūracijoje nurodyta kaip 'current'.",
   'migHelpVersion'    => "\tMigruoja duomenų bazę iki versijos {v}.",
   'migHelpRollback'   => "\tVykdo visas migracijas 'down' iki versijos 0.",
   'migHelpRefresh'    => "\t\tIšinstaliuoja ir iš naujo įvykdo visas migracijas siekiant atšviežinti duomenų bazę.",
   'migHelpSeed'       => "\tvykdo sėjiką, pavadintą [name].",
   'migCreate'         => "\tSukuria naują migraciją vardu [name]",
   'nameMigration'     => 'Įvardinkite migracijos failą',
   'badCreateName'     => 'Turite nurodyti migracijos failo vardą.',
   'writeError'        => 'Klaida bandant sukurti failą.',
   'migNumberError'    => 'Migracijos numerį turi sudaryti trys skaitmenys, o jų sekoje neturi būti jokių tarpų.',

   'latest'            => 'Vykdomos visos migracijos...',
   'generalFault'      => 'Migracijos nepavyko!',
   'migInvalidVersion' => 'Nurodytas neteisingas versijos numeris.',
   'toVersionPH'       => 'Migruojama iki versijos %s...',
   'toVersion'         => 'Migruojama iki dabartinės versijos...',
   'rollingBack'       => 'Migracijos anuliuojamos iki paketo: ',
   'noneFound'         => 'Nerasta migracijų.',
   'on'                => 'Migruota: ',
   'migSeeder'         => 'Sėjiko vardas',
   'migMissingSeeder'  => 'Turite nurodyti sėjimo vardą.',
   'removed'           => 'Anuliuojama: ',
   'added'             => 'Vykdoma: ',

   'version'           => 'Versija',
   'filename'          => 'Failo pavadinimas',
];
