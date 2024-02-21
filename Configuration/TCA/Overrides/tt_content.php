<?php

$additionalColumns = [
    'cix_readmore_text1' => [
        'label' => 'LLL:EXT:cix_readmore/Resources/Private/Language/locallang.xlf:tt_content.cix_readmore_text1',
        'config' => [
            'type' => 'text',
            'default' => '',
        ],
    ],
    'cix_readmore_text2' => [
        'label' => 'LLL:EXT:cix_readmore/Resources/Private/Language/locallang.xlf:tt_content.cix_readmore_text2',
        'config' => [
            'type' => 'text',
            'default' => '',
        ],
    ],
    'cix_readmore_button' => [
        'label' => 'LLL:EXT:cix_readmore/Resources/Private/Language/locallang.xlf:tt_content.cix_readmore_button',
        'config' => [
            'type' => 'text',
            'renderType' => 'input',
            'default' => '',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'cix_readmore_text1,cix_readmore_text2,cix_readmore_button',
    'cix_readmore',
    'before:bodytext'
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        // title
        'LLL:EXT:cix_readmore/Resources/Private/Language/locallang.xlf:contentelement_title',
        // plugin signature: extkey_identifier
        'cix_readmore',
        // icon identifier
        'content-text',
    ],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cix_readmore'] = 'content-text';


$GLOBALS['TCA']['tt_content']['types']['cix_readmore'] = [
    'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            cix_readmore_text1; LLL:EXT:cix_readmore/Resources/Private/Language/locallang.xlf:tt_content.cix_readmore_text1,
            cix_readmore_text2; LLL:EXT:cix_readmore/Resources/Private/Language/locallang.xlf:tt_content.cix_readmore_text2,
            cix_readmore_button; LLL:EXT:cix_readmore/Resources/Private/Language/locallang.xlf:tt_content.cix_readmore_button,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
      ',
    'columnsOverrides' => [
        'cix_readmore_text2' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
    ],
];