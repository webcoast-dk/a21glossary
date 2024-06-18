<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use WapplerSystems\A21glossary\Controller\GlossaryController;


TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'a21glossary',
    'Pi1',
    [GlossaryController::class => 'index,search,show'],
    [GlossaryController::class => 'search'],
    pluginType: ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);


ExtensionManagementUtility::addPageTSConfig(trim(
    '
		mod.wizards.newContentElement.wizardItems {
			plugins {
				elements {
					a21glossary {
						title = Glossary
						description =  Show glossary entries
						iconIdentifier = tx-a21glossary
						tt_content_defValues {
							CType = a21glossary_pi1
						}
					}
				}
			}
		}

	'));
