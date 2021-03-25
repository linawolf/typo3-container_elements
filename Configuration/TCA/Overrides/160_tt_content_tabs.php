<?php

/*
 * This file is part of the package buepro/container_elements.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') || die('Access denied.');

(function () {
    /**
     * Register tabs
     */
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'ce_tabs',
                'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tabs.title',
                'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tabs.description',
                [
                    [
                        [
                            'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:content',
                            'colPos' => 101
                        ]
                    ]
                ]
            )
        )
        ->setIcon('container-elements-tabs')
        ->setBackendTemplate('EXT:container_elements/Resources/Private/Templates/Backend/Container.html')
        ->setSaveAndCloseInNewContentElementWizard(true)
    );

    /**
     * Add flexForm
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:container_elements/Configuration/FlexForms/Tabs.xml',
        'ce_tabs'
    );
})();
