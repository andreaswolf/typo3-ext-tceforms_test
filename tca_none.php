<?php


$TCA['tx_tceformstest_none'] = array (
	'ctrl' => $TCA['tx_tceformstest_none']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,fe_group,none_1,none_2,none_3,none_4,none_5,none_6'
	),
	'feInterface' => $TCA['tx_tceformstest_none']['feInterface'],
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
			'exclude' => 1,
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
			'exclude'     => 1,
			'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config'      => array (
				'type'  => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table'       => 'tx_tceformstest_none',
				'foreign_table_where' => 'AND tx_tceformstest_none.pid=###CURRENT_PID### AND tx_tceformstest_none.sys_language_uid IN (-1,0)',
			)
		),
		'l10n_diffsource' => array (		
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'starttime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'default'  => '0',
				'none' => '0'
			)
		),
		'endtime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'none' => '0',
				'default'  => '0',
				'range'    => array (
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
				)
			)
		),
		'fe_group' => array (		
			'exclude' => 1,
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
		'none_1' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_none.none_1',		
			'config' => array (
				'type' => 'none',
				'pass_content' => '1'
			)
		),
		'none_2' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_none.none_2',		
			'config' => array (
				'type' => 'none',
				'pass_content' => '0',
			)
		),
		'none_3' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_none.none_3',		
			'config' => array (
				'type' => 'none',
				'pass_content' => '0',
				'rows' => '2',
			)
		),
		'none_4' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_none.none_4',		
			'config' => array (
				'type' => 'none',
				'pass_content' => '0',
				'cols' => '2',
			)
		),
		'none_5' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_none.none_5',		
			'config' => array (
				'type' => 'none',
				'pass_content' => '0',
				'rows' => '2',
				'fixedRows' => '2',
			)
		),
		'none_6' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_none.none_6',		
			'config' => array (
				'type' => 'none',
				'size' => '6'
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, none_1,none_2,none_3,none_4,none_5,none_6')
	),
	'palettes' => array (
		'1' => array('showitem' => 'starttime, endtime, fe_group')
	)
);

?>