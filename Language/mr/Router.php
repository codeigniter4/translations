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

// Router language settings
return [
    'invalidParameter'         => 'एक parameter अपेक्षित प्रकाराशी जुळत नाही.', // 'A parameter does not match the expected type.'
    'missingDefaultRoute'      => 'काय दाखवायचे हे ठरवता येत नाही. Routing file मध्ये default route दिलेला नाही.', // 'Unable to determine what should be displayed. A default route has not been specified in the routing file.'
    'invalidDynamicController' => 'सुरक्षेच्या कारणास्तव dynamic controller परवानगी नाही. Route handler: "{0}"', // 'A dynamic controller is not allowed for security reasons. Route handler: "{0}"'
    'invalidControllerName'    => 'Namespace delimiter हा backslash (\) आहे, slash (/) नाही. Route handler: "{0}"', // 'The namespace delimiter is a backslash (\), not a slash (/). Route handler: "{0}"'
];
