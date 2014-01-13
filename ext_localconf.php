<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}


Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Bestand' => 'list, show',
		'Document' => 'list, show',
		'Person' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Bestand' => '',
		'Document' => '',
		'Person' => '',
		
	)
);

?>
