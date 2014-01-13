<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_ddarchiv_domain_model_bestand'] = array(
	'ctrl' => $TCA['tx_ddarchiv_domain_model_bestand']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description, provenience, year_from, year_to, loc, longitude, latitude, image, documents, persons',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, description, provenience, year_from, year_to, loc, longitude, latitude, image, documents, persons,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_ddarchiv_domain_model_bestand',
				'foreign_table_where' => 'AND tx_ddarchiv_domain_model_bestand.pid=###CURRENT_PID### AND tx_ddarchiv_domain_model_bestand.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'provenience' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.provenience',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'year_from' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.year_from',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'max' => 4,
				'eval' => 'int',
			),
		),
		'year_to' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.year_to',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'max' => 4,
				'eval' => 'int',
			),
		),
		'loc' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.loc',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'longitude' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.longitude',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'latitude' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.latitude',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'image' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_ddarchiv',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'documents' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.documents',
			'config' => array(
				'type' => 'inline',
        'foreign_class' => 'Tx_Ddarchiv_Domain_Model_Document',
				'foreign_table' => 'tx_ddarchiv_domain_model_document',
				'foreign_field' => 'bestand',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'persons' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ddarchiv/Resources/Private/Language/locallang_db.xml:tx_ddarchiv_domain_model_bestand.persons',
			'config' => array(
				'type' => 'select',
        'foreign_class' => 'Tx_Ddarchiv_Domain_Model_Person',
				'foreign_table' => 'tx_ddarchiv_domain_model_person',
				'MM' => 'tx_ddarchiv_bestand_person_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_ddarchiv_domain_model_person',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
	),
);
?>
