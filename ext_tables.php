<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Stadtteilarchiv'
);

//$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . pi1;
//$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .pi1. '.xml');






t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Stadtteilarchiv');


t3lib_extMgm::addLLrefForTCAdescr('tx_ddarchiv_domain_model_bestand', 'EXT:ddarchiv/Resources/Private/Language/locallang_csh_tx_ddarchiv_domain_model_bestand.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_ddarchiv_domain_model_bestand');
$TCA['tx_ddarchiv_domain_model_bestand'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Bestand.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_ddarchiv_domain_model_bestand.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_ddarchiv_domain_model_document', 'EXT:ddarchiv/Resources/Private/Language/locallang_csh_tx_ddarchiv_domain_model_document.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_ddarchiv_domain_model_document');
$TCA['tx_ddarchiv_domain_model_document'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_document',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Document.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_ddarchiv_domain_model_document.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_ddarchiv_domain_model_person', 'EXT:ddarchiv/Resources/Private/Language/locallang_csh_tx_ddarchiv_domain_model_person.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_ddarchiv_domain_model_person');
$TCA['tx_ddarchiv_domain_model_person'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_person',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Person.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_ddarchiv_domain_model_person.gif'
	),
);

?>
