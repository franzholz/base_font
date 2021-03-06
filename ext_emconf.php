<?php

########################################################################
# Extension Manager/Repository config file for ext "base_font".
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Font Library',
    'description' => 'This provides the PHP Font Lib (php-font-lib).',
    'category' => 'misc',
    'version' => '0.0.4',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Fabien Ménager, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => array(
        'depends' => array(
            'php' => '5.4.0-7.0.99',
            'typo3' => '6.2.0-9.5.99'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
