<?php

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
    'invalidParameter'         => 'Μια παράμετρος δεν ταιριάζει με τον αναμενόμενο τύπο.', // 'A parameter does not match the expected type.',
    'missingDefaultRoute'      => 'Δεν μπορεί να προσδιοριστεί τι πρέπει να εμφανίζεται. Δεν έχει καθοριστεί μια προεπιλεγμένη διαδρομή στο αρχείο δρομολόγησης.', // 'Unable to determine what should be displayed. A default route has not been specified in the routing file.',
    'invalidDynamicController' => 'Δεν επιτρέπεται η χρήση δυναμικού controller για λόγους ασφαλείας. Route handler: "{0}"', // 'A dynamic controller is not allowed for security reasons. Route handler: "{0}"',
    'invalidControllerName'    => 'Ο οριοθέτης χώρου ονομάτων είναι backslash (\), όχι slash (/). Route handler: "{0}"', // 'The namespace delimiter is a backslash (\), not a slash (/). Route handler: "{0}"',
];
