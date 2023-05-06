<?php

########################################################################
# Extension Manager/Repository config file for ext "base_font".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Font Library',
    'description' => 'This provides the dompdf PHP Font Lib (php-font-lib].',
    'category' => 'misc',
    'version' => '0.5.5',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Fabien Ménager, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.5.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
