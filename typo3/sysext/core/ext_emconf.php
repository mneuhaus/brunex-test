<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'TYPO3 Core',
	'description' => 'The core library of TYPO3.',
	'category' => 'be',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'author' => 'Kasper Skaarhoj',
	'author_email' => 'kasperYYYY@typo3.com',
	'author_company' => '',
	'version' => '7.4.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.4.0-7.4.99',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);
