<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'cix_readmore',
    'description' => 'Splits longer texts into preview and full content, with a reveal button. It offers customizable templates for easy styling.',
    'author' => 'Martin Hesse',
    'author_email' => 'info@creationx.de',
    'author_company' => 'CREATIONX GmbH',
    'state' => 'stable',
    'version' => '1.1.40',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Creationx\\CixReadmore\\' => 'Classes/',
        ],
    ],
];
