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

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'இடம்பெயர்வு அட்டவணை அமைக்கப்பட வேண்டும்.',
    'disabled'      => 'இடம்பெயர்வுகள் ஏற்றப்பட்டன, ஆனால் அவை முடக்கப்பட்டுள்ளன அல்லது தவறாக அமைக்கப்பட்டுள்ளன.',
    'notFound'      => 'இடம்பெயர்வு கோப்பு கிடைக்கவில்லை: ',
    'batchNotFound' => 'இலக்கு தொகுதி கிடைக்கவில்லை: ',
    'empty'         => 'இடம்பெயர்வு கோப்புகள் எதுவும் இல்லை',
    'gap'           => 'பதிப்பு எண்ணுக்கு அருகில் இடம்பெயர்வு வரிசையில் இடைவெளி உள்ளது: ',
    'classNotFound' => 'இடம்பெயர்வு வகுப்பு "%s" கண்டுபிடிக்க முடியவில்லை.',
    'missingMethod' => 'இடம்பெயர்வு வகுப்பில் "%s" முறை இல்லை.',

    // Migration Command
    'migHelpLatest'   => "\t\tசமீபத்தில் கிடைக்கக்கூடிய இடம்பெயர்வுக்கு தரவுத்தளத்தை மாற்றவும்.",
    'migHelpCurrent'  => "\t\tஉள்ளமைவில் 'நடப்பு' என அமைக்கப்பட்ட பதிப்பிற்கு தரவுத்தளத்தை மாற்றுகிறது.",
    'migHelpVersion'  => "\tதரவுத்தளத்தை பதிப்பிற்கு மாற்றுகிறது {v}.",
    'migHelpRollback' => "\tஅனைத்து இடம்பெயர்வுகளையும் 'down' பதிப்பான 0 கு இயக்குகிறது.",
    'migHelpRefresh'  => "\t\tதரவுத்தளத்தை புதுப்பிக்க அனைத்து இடம்பெயர்வுகளையும் நிறுவல் நீக்கி மீண்டும் இயக்கவும்.",
    'migHelpSeed'     => "\t[name] என்ற விதையை இயக்குகிறது.",
    'migCreate'       => "\t[name] என்ற பெயரில் புதிய இடம்பெயர்வை உருவாக்குகிறது",
    'nameMigration'   => 'இடம்பெயர்வு கோப்பிற்கு பெயரிடவும்',
    'migNumberError'  => 'இடம்பெயர்வு எண் மூன்று இலக்கங்களாக இருக்க வேண்டும், மேலும் வரிசையில் எந்த இடைவெளியும் இருக்கக்கூடாது.',
    'rollBackConfirm' => 'நிச்சயமாக திரும்பப் பெற விரும்புகிறீர்களா?',
    'refreshConfirm'  => 'நிச்சயமாகப் புதுப்பிக்க விரும்புகிறீர்களா?',

    'latest'            => 'அனைத்து புதிய இடம்பெயர்வுகளையும் இயக்குகிறது...',
    'generalFault'      => 'இடம்பெயர்வு தோல்வியடைந்தது!',
    'migrated'          => 'இடம்பெயர்வு முடிந்தது.',
    'migInvalidVersion' => 'தவறான பதிப்பு எண் வழங்கப்பட்டுள்ளது.',
    'toVersionPH'       => 'பதிப்பிற்கு நகர்கிறது %s...',
    'toVersion'         => 'தற்போதைய பதிப்பிற்கு நகர்த்தப்படுகிறது...',
    'rollingBack'       => 'தொகுதிக்கு இடம்பெயர்வுகளை திரும்பப் பெறுதல்: ',
    'noneFound'         => 'இடம்பெயர்வுகள் எதுவும் கண்டறியப்படவில்லை.',
    'migSeeder'         => 'Seeder பெயர்',
    'migMissingSeeder'  => 'நீங்கள் Seeder பெயரை வழங்க வேண்டும்',
    'nameSeeder'        => 'Seeder கோப்பிற்கு பெயரிடவும்',
    'removed'           => 'பின் செல்லுகிறது: ',
    'added'             => 'நடைபெற்றுக்கொண்டு இருக்கிறது : ',

    // Migrate Status
    'namespace' => 'பெயர்வெளி',
    'filename'  => 'கோப்பின் பெயர்',
    'version'   => 'பதிப்பு',
    'group'     => 'குழு',
    'on'        => 'இடம்பெயர்ந்தது: ',
    'batch'     => 'தொகுதி',
];
