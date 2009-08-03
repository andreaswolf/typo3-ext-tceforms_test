<?php

$TCA['tx_tceformstest_check'] = array (
	'ctrl' => $TCA['tx_tceformstest_check']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,fe_group,checkbox_1,checkbox_2,checkbox_3,checkbox_4,checkbox_5,checkbox_6,checkbox_7,checkbox_8'
	),
	'feInterface' => $TCA['tx_tceformstest_check']['feInterface'],
	'columns' => array (
		't3ver_label' => array (		
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'max'  => '30',
			)
		),
		'sys_language_uid' => array (		
			'exclude' => 0,
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array (
				'type'                => 'select',
				'foreign_table'       => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				)
			)
		),
		'l10n_parent' => array (		
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude'     => 0,
			'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config'      => array (
				'type'  => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table'       => 'tx_tceformstest_check',
				'foreign_table_where' => 'AND tx_tceformstest_check.pid=###CURRENT_PID### AND tx_tceformstest_check.sys_language_uid IN (-1,0)',
			)
		),
		'l10n_diffsource' => array (		
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'hidden' => array (		
			'exclude' => 0,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'starttime' => array (		
			'exclude' => 0,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'default'  => '0',
				'checkbox' => '0'
			)
		),
		'endtime' => array (		
			'exclude' => 0,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0',
				'range'    => array (
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
				)
			)
		),
		'fe_group' => array (		
			'exclude' => 0,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.fe_group',
			'config'  => array (
				'type'  => 'select',
				'items' => array (
					array('', 0),
					array('LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2),
					array('LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--')
				),
				'foreign_table' => 'fe_groups'
			)
		),
		'checkbox_1' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_check.checkbox_1',		
			'config' => array (
				'type' => 'check',
			)
		),
		'checkbox_2' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_check.checkbox_2',		
			'config' => array (
				'type' => 'check',
				'default' => '1',
			)
		),
		'checkbox_3' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_check.checkbox_3',		
			'config' => array (
				'type' => 'check',
				'items' => Array (
					Array('Green tomatoes', ''),
					Array('Red peppers', '')
				),
			)
		),
		'checkbox_4' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_check.checkbox_4',		
			'config' => array (
				'type' => 'check',
				'items' => Array (
					Array('Green tomatoes', '1'),
					Array('Red peppers', '2')
				),
				'default' => '3',
			)
		),
		'checkbox_5' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_check.checkbox_5',		
			'config' => array (
				'type' => 'check',
				'items' => Array (
					Array('Green tomatoes', '1'),
					Array('Red peppers', '2')
				),
				'default' => '1',
			)
		),
		'checkbox_6' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_check.checkbox_6',		
			'config' => array (
				'type' => 'check',
				'items' => Array (
					Array('Green tomatoes', '1'),
					Array('Red peppers', '2'),
					Array('Yellow peppers', '3'),
					Array('Yellow peppers', '4'),
					Array('Yellow peppers', '5'),
					Array('Yellow peppers', '6'),
					Array('Yellow peppers', '7')
				),
				'cols' => '6',
				'default' => '1',
			)
		),
		'checkbox_7' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_check.checkbox_7',		
			'config' => array (
				'type' => 'check',
				'items' => Array (
					Array('Green tomatoes', '1'),
					Array('Red peppers', '2')
				),
				'showIfRTE' => '1',
			)
		),
		'checkbox_8' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_check.checkbox_8',		
			'config' => array (
				'type' => 'check',
				'items' => Array (
					Array('Green tomatoes', '1'),
					Array('Red peppers', '2')
				),
				'itemsProcFunc' => 'EXT:tceforms_test/specialCheckboxFunction.php:user_specialCheckboxFunction',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, checkbox_1,checkbox_2,checkbox_3,checkbox_4,checkbox_5,checkbox_6,checkbox_7,checkbox_8')
	),
	'palettes' => array (
		'1' => array('showitem' => 'starttime, endtime, fe_group')
	)
);

?>