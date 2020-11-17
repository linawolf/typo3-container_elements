<?php

/*
 * This file is part of the package buepro/container_elements.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die('Access denied.');

(function () {
    /**
     * Register columns4
     */
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'ce_columns4',
                'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.fourColumnTitle',
                'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.fourColumnDescription',
                [
                    [
                        [
                            'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column1',
                            'colPos' => 101
                        ],
                        [
                            'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column2',
                            'colPos' => 102
                        ],
                        [
                            'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column3',
                            'colPos' => 103
                        ],
                        [
                            'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column4',
                            'colPos' => 104
                        ],
                    ]
                ]
            )
        )
        ->setIcon('container-elements-columns4')
        ->setBackendTemplate('EXT:container_elements/Resources/Private/Templates/Backend/Container.html')
        ->setSaveAndCloseInNewContentElementWizard(true)
    );

    /**
     * Add flexForm
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:container_elements/Configuration/FlexForms/Columns4.xml',
        'ce_columns4'
    );
})();
