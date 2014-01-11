<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Bestand' => 'list, show, new, create, update, edit, delete',
    	'Document' => 'list, show, add, create, edit, update, delete',
    	'Person' => 'add, show, edit, list, create, update, delete',	
	),
	// non-cacheable actions
	array(
		'Bestand' => 'new, create, edit, update, delete',
    'Document' => 'add, create, edit, update, delete',
    'Person' => 'add, create, edit, update, delete',
	)
);

?>
