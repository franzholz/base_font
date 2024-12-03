<?php

########################################################################
# Extension Manager/Repository config file for ext "base_font".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Font Library',
    'description' => 'This provides the dompdf PHP Font Lib (php-font-lib].',
    'category' => 'misc',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'clearcacheonload' => 1,
    'author' => 'Fabien Ménager, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
