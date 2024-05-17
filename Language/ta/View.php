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

// View language settings
return [
    'invalidCellMethod'     => '{class}::{method} சரியான முறை அல்ல.', // '{class}::{method} is not a valid method.',
    'missingCellParameters' => '{class}::{method} இல் அளவுருக்கள் இல்லை.', // '{class}::{method} has no params.',
    'invalidCellParameter'  => '"{0}" என்பது சரியான பரிமாணப் பெயர் அல்ல.', // '"{0}" is not a valid param name.',
    'noCellClass'           => 'பார்வை செல் வகுப்பு வழங்கப்படவில்லை.', // 'No view cell class provided.',
    'invalidCellClass'      => 'பார்வை செல் வகுப்பைக் கண்டறிய முடியவில்லை: "{0}".', // 'Unable to locate view cell class: "{0}".',
    'tagSyntaxError'        => 'உங்கள் பாகுபடுத்தி குறிச்சொற்களில் தொடரியல் பிழை உள்ளது: "{0}"', // 'You have a syntax error in your Parser tags: "{0}"',
    'invalidDecoratorClass' => '"{0}" சரியான காட்சி அலங்கரிப்பாளர் (view decorator) அல்ல.', // '"{0}" is not a valid View Decorator.',
];
