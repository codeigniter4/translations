<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// CLI language settings
return [
    'altCommandPlural'   => 'तुमचा अर्थ यापैकी एक होता का?', // 'Did you mean one of these?'
    'altCommandSingular' => 'तुमचा अर्थ हे होते का?', // 'Did you mean this?'
    'commandNotFound'    => 'Command "{0}" सापडला नाही.', // 'Command "{0}" not found.'
    'generator'          => [
        'cancelOperation' => 'ऑपरेशन रद्द करण्यात आले आहे.', // 'Operation has been cancelled.'
        'className'       => [
            'cell'        => 'Cell class नाव', // 'Cell class name'
            'command'     => 'Command class नाव', // 'Command class name'
            'config'      => 'Config class नाव', // 'Config class name'
            'controller'  => 'Controller class नाव', // 'Controller class name'
            'default'     => 'Class नाव', // 'Class name'
            'entity'      => 'Entity class नाव', // 'Entity class name'
            'filter'      => 'Filter class नाव', // 'Filter class name'
            'migration'   => 'Migration class नाव', // 'Migration class name'
            'model'       => 'Model class नाव', // 'Model class name'
            'seeder'      => 'Seeder class नाव', // 'Seeder class name'
            'test'        => 'Test class नाव', // 'Test class name'
            'transformer' => 'Transformer class नाव', // 'Transformer class name'
            'validation'  => 'Validation class नाव', // 'Validation class name'
        ],
        'commandType'      => 'Command प्रकार', // 'Command type'
        'databaseGroup'    => 'डेटाबेस गट', // 'Database group'
        'fileCreate'       => 'फाइल तयार केली: {0}', // 'File created: {0}'
        'fileError'        => 'फाइल तयार करताना त्रुटी: "{0}"', // 'Error while creating file: "{0}"'
        'fileExist'        => 'फाइल आधीपासून अस्तित्वात आहे: "{0}"', // 'File exists: "{0}"'
        'fileOverwrite'    => 'फाइल अधिलिखित केली: "{0}"', // 'File overwritten: "{0}"'
        'parentClass'      => 'Parent class नाव', // 'Parent class'
        'returnType'       => 'Return प्रकार', // 'Return type'
        'tableName'        => 'टेबलचे नाव', // 'Table name'
        'usingCINamespace' => 'इशारा: "CodeIgniter" namespace वापरल्यास फाइल system directory मध्ये तयार होईल.', // 'Warning: Using the "CodeIgniter" namespace will generate the file in the system directory.'
        'viewName'         => [
            'cell' => 'Cell view नाव', // 'Cell view name'
        ],
    ],
    'helpArguments'       => 'आर्ग्युमेंट्स:', // 'Arguments:'
    'helpDescription'     => 'वर्णन:', // 'Description:'
    'helpOptions'         => 'पर्याय:', // 'Options:'
    'helpUsage'           => 'वापर:', // 'Usage:'
    'invalidColor'        => 'अवैध "{0}" रंग: "{1}".', // 'Invalid "{0}" color: "{1}".'
    'namespaceNotDefined' => 'Namespace "{0}" परिभाषित केलेले नाही.', // 'Namespace "{0}" is not defined.'
    'signals'             => [
        'noPcntlExtension' => 'PCNTL extension उपलब्ध नाही. Signal handling बंद केले आहे.', // 'PCNTL extension not available. Signal handling disabled.'
        'noPosixExtension' => 'SIGTSTP/SIGCONT हाताळण्यासाठी POSIX extension आवश्यक आहे. हे signals नोंदणीतून काढले जातील.', // 'SIGTSTP/SIGCONT handling requires POSIX extension. These signals will be removed from registration.'
        'failedSignal'     => 'या signal साठी handler नोंदवता आला नाही: "{0}".', // 'Failed to register handler for signal: "{0}".'
    ],
];
