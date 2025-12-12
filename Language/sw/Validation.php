<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'Hakuna seti za kanuni zilizofafanuliwa katika usanidi wa uthibitishaji.',
    'ruleNotFound'    => '{0} sio kanuni halali.',
    'groupNotFound'   => '{0} sio kikundi cha uthibitishaji.',
    'groupNotArray'   => 'Kikundi cha kanuni {0} lazima kiwe safu.',
    'invalidTemplate' => '{0} sio kiolezo sahihi cha uthibitishaji.',

    // Rule Messages
    'alpha'                 => 'Sehemu ya {field} inaweza tu kujumuisha nambari za Kiingereza au herufi.',
    'alpha_dash'            => 'Sehemu ya {field} inaweza tu kujumuisha nambari za Kiingereza, herufi, vistari, na alama ya chini.',
    'alpha_numeric'         => 'Sehemu ya {field} inaweza tu kujumuisha nambari za Kiingereza au herufi.',
    'alpha_numeric_punct'   => 'Sehemu ya {field} inaweza tu kujumuisha nambari za Kiingereza, herufi, nafasi, na herufi ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'Sehemu ya {field} inaweza tu kujumuisha nambari za Kiingereza, herufi, na nafasi.',
    'alpha_space'           => 'Sehemu ya {field} inaweza tu kujumuisha herufi na nafasi.',
    'decimal'               => 'Sehemu ya {field} lazima iwe nambari ya desimali.',
    'differs'               => 'Sehemu ya {field} lazima itofautiane na sehemu ya {param}.',
    'equals'                => 'Sehemu ya {field} lazima iwe sawa kabisa na "{param}".',
    'exact_length'          => 'Urefu wa sehemu ya {field} lazima uwe haswa {param} herufi.',
    'field_exists'          => 'Sehemu ya {field} lazima iwepo.',
    'greater_than'          => 'Sehemu ya {field} lazima iwe nambari kubwa kuliko {param}.',
    'greater_than_equal_to' => 'Sehemu ya {field} lazima iwe nambari kubwa kuliko au sawa na {param}.',
    'hex'                   => 'Sehemu ya {field} inaweza tu kujumuisha herufi za heksadesimali.',
    'in_list'               => 'Sehemu ya {field} lazima iwe mojawapo ya maadili haya: {param}.',
    'integer'               => 'Sehemu ya {field} lazima iwe nambari kamili.',
    'is_natural'            => 'Sehemu ya {field} inaweza tu kujumuisha tarakimu.',
    'is_natural_no_zero'    => 'Sehemu ya {field} lazima iwe nambari kubwa kuliko sifuri.',
    'is_not_unique'         => 'Thamani ya sehemu ya {field} lazima tayari iwepo kwenye Database.',
    'is_unique'             => 'Sehemu ya {field} lazima iwe na thamani ya kipekee.',
    'less_than'             => 'Sehemu ya {field} lazima iwe nambari ndogo kuliko {param}.',
    'less_than_equal_to'    => 'Sehemu ya {field} lazima iwe nambari ndogo kuliko au sawa na {param}.',
    'matches'               => 'Sehemu ya {field} hailingani na sehemu ya {param}.',
    'max_length'            => 'Urefu wa sehemu ya {field} haupaswi kuzidi {param} herufi.',
    'min_length'            => 'Urefu wa sehemu ya {field} lazima uwe angalau {param} herufi.',
    'not_equals'            => 'Sehemu ya {field} haipaswi kuwa sawa na {param}.',
    'not_in_list'           => 'Sehemu ya {field} haipaswi kuwa sawa na yeyote kati ya maadili haya: {param}.',
    'numeric'               => 'Sehemu ya {field} lazima iwe nambari.',
    'regex_match'           => 'Muundo wa sehemu ya {field} haujazingatiwa.',
    'required'              => 'Sehemu ya {field} inahitajika.',
    'required_with'         => 'Wakati {param} imejazwa, sehemu ya {field} inahitajika.',
    'required_without'      => 'Wakati {param} haijajazwa, sehemu ya {field} inahitajika.',
    'string'                => 'Sehemu ya {field} lazima iwe mfuatano halali.',
    'timezone'              => 'Sehemu ya {field} lazima iwe eneo halali la muda.',
    'valid_base64'          => 'Sehemu ya {field} lazima iwe mfuatano sahihi wa base64.',
    'valid_email'           => 'Sehemu ya {field} lazima iwe anwani halali ya barua pepe.',
    'valid_emails'          => 'Vitu vyote vya {field} lazima viwe anwani halali za barua pepe.',
    'valid_ip'              => 'Sehemu ya {field} lazima iwe IP halali.',
    'valid_url'             => 'Sehemu ya {field} lazima iwe URL halali (anwani ya wavuti).',
    'valid_url_strict'      => 'Sehemu ya {field} lazima iwe URL halali (anwani ya wavuti).',
    'valid_date'            => 'Sehemu ya {field} lazima iwe tarehe halali.',
    'valid_json'            => 'Sehemu ya {field} lazima iwe json halali.',

    // Credit Cards
    'valid_cc_num' => 'Sehemu ya {field} haionekani kuwa nambari halali ya kadi ya mkopo.',

    // Files
    'uploaded' => '{field} sio faili halali iliyopakiwa.',
    'max_size' => '{field} ina ukubwa mkubwa sana kwa faili.',
    'is_image' => '{field} sio picha halali iliyopakiwa.',
    'mime_in'  => '{field} haina aina halali ya mime.',
    'ext_in'   => '{field} haina kiambishi halali cha faili.',
    'max_dims' => '{field} ama sio picha sahihi, au ina upana au urefu mkubwa sana.',
    'min_dims' => '{field} ama sio picha, au vipimo vyake sio vya kutosha upana au urefu.',
];
