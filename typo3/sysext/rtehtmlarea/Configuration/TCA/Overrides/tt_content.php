<?php
defined('TYPO3_MODE') or die();

// Adding soft reference keys in tt_content configuration
// htmlArea RTE soft reference keys are inserted in front so that their tokens are inserted first
$GLOBALS['TCA']['tt_content']['columns']['header']['config']['softref'] = 'typolink_tag' . ($GLOBALS['TCA']['tt_content']['columns']['header']['config']['softref'] ? ',' . $GLOBALS['TCA']['tt_content']['columns']['header']['config']['softref'] : '');

foreach ($GLOBALS['TCA']['tt_content']['columns'] as $column => $config) {
	if ($config['config']['softref']) {
		if (\TYPO3\CMS\Core\Utility\GeneralUtility::inList($config['config']['softref'], 'images')) {
			// Remove obsolete soft reference key 'images'
			// The references from RTE content to the original images are handled with the key 'rtehtmlarea_images'.
			$softReferences = 'rtehtmlarea_images,' . \TYPO3\CMS\Core\Utility\GeneralUtility::rmFromList('images', $config['config']['softref']);
			$GLOBALS['TCA']['tt_content']['columns'][$column]['config']['softref'] = $softReferences;
		}
	} else {
		if ($config['config']['type'] === 'text') {
			$GLOBALS['TCA']['tt_content']['columns'][$column]['config']['softref'] = 'rtehtmlarea_images,typolink_tag';
		}
	}

}
