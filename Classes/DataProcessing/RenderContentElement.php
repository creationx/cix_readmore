<?php
namespace Creationx\CixReadmore\DataProcessing;

use TYPO3\CMS\Core\TypoScript\TypoScriptService;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class RenderContentElement implements DataProcessorInterface
{
    /**
     * @var TypoScriptService
     */
    protected $typoScriptService;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typoScriptService = GeneralUtility::makeInstance(TypoScriptService::class);
    }

    public function process(ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
    {
        $settings = $this->typoScriptService->convertPlainArrayToTypoScriptArray(
            $GLOBALS['TSFE']->tmpl->setup
        );

        $processedData['data']['cix_readmore']['settings'] = $settings['plugin..']['tx_cixreadmore..']['settings..'];
        $processedData['data']['cix_readmore']['settings']['plain'] = $settings['plugin..']['tx_cixreadmore..']['settings..']['plain..'];
        $processedData['data']['cix_readmore']['settings']['bootstrap4'] = $settings['plugin..']['tx_cixreadmore..']['settings..']['bootstrap4..'];
        $processedData['data']['cix_readmore']['settings']['bootstrap5'] = $settings['plugin..']['tx_cixreadmore..']['settings..']['bootstrap5..'];

        if(isset($processedData['data']['cix_readmore_button']) && $processedData['data']['cix_readmore_button'] == '')
            $processedData['data']['cix_readmore_button'] = $settings['plugin..']['tx_cixreadmore..']['settings..']['buttonText'];

        return $processedData;
    }
}
