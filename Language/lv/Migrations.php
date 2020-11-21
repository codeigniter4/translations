<?php

/**
 * Migrations language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     Dāvis Lasis <davis.lasis@gmail.com>
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Migration Runner
   'missingTable'      => 'Jābūt iestatītai migrāciju tabulai.',
   'disabled'          => 'Migrācijas ir ielādētas, bet ir atspējotas vai nepareizi iestatītas.',
   'notFound'          => 'Migrācijas fails nav atrasts: ',
   'batchNotFound'     => 'Mērķa partija nav atrasta: ',
   'empty'             => 'Migrāciju faili nav atrasti.',
   'gap'               => 'Blakus versijas numuram migrāciju secībā ir pārrāvums: ',
   'classNotFound'     => 'Nevar atrast migrācijas klasi: "%s".',
   'missingMethod'     => 'Migrācijas klasē nav "%s" metode.',

	// Migration Command
   'migHelpLatest'     => "\t\tMigrē datu bāzi uz jaunāko pieejamo migrāciju.",
   'migHelpCurrent'    => "\t\tMigrē datu bāzi uz versiju, kas konfigurācijā iestatīta kā `current`.",
   'migHelpVersion'    => "\tMigrē datu bāzi uz versiju {v}.",
   'migHelpRollback'   => "\tIzpilda visas migrācijas ar metodi 'down' līdz versijai 0.",
   'migHelpRefresh'    => "\t\tAtinstalē un atkārtoti izpilda visas migrācijas, lai atjaunotu datu bāzi.",
   'migHelpSeed'       => "\tIzpilda SEEDER ar nosaukumu [name].",
   'migCreate'         => "\tIzveido jaunu migrāciju ar nosaukumu [name]",
   'nameMigration'     => 'Nosauciet migrācijas failu',
   'migNumberError'    => 'Migrācijas numuram ir jābūt trīs cipariem, un virknē nedrīkst būt atstarpes.',
   'rollBackConfirm'   => 'Vai tiešām vēlaties atcelt?',
   'refreshConfirm'    => 'Vai tiešām vēlaties atjaunot?',

   'latest'            => 'Izpilda visas jaunās migrācijas...',
   'generalFault'      => 'Migrācija neizdevās!',
   'migInvalidVersion' => 'Norādīts nederīgs versijas numurs.',
   'toVersionPH'       => 'Migrē uz versiju %s...',
   'toVersion'         => 'Migrē uz pašreizējo versiju...',
   'rollingBack'       => 'Atgriež migrācijas uz: ',
   'noneFound'         => 'Migrācijas netika atrastas.',
   'migSeeder'         => 'SEEDER nosaukums',
   'migMissingSeeder'  => 'Jums ir jānorāda SEEDER nosaukums.',
   'nameSeeder'        => 'Nosauciet SEEDER failu',
   'removed'           => 'Atgriež atpakaļ: ',
   'added'             => 'Izpilda: ',

   // Migrate Status
   'namespace'         => 'Nosaukumvieta',
   'filename'          => 'Faila nosaukums',
   'version'           => 'Versija',
   'group'             => 'Grupa',
   'on'                => 'Migrēts uz: ',
   'batch'             => 'Partija',
];
