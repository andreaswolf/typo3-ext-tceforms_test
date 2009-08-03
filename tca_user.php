<?php

$TCA['tx_tceformstest_user'] = array (
	'ctrl' => $TCA['tx_tceformstest_user']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,fe_group,user_1,user_2,user_3,user_4,user_5,user_6'
	),
	'feInterface' => $TCA['tx_tceformstest_user']['feInterface'],
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
				'foreign_table'       => 'tx_tceformstest_user',
				'foreign_table_where' => 'AND tx_tceformstest_user.pid=###CURRENT_PID### AND tx_tceformstest_user.sys_language_uid IN (-1,0)',
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
				'user' => '0'
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
				'user' => '0',
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
		'user_1' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_user.user_1',		
			'config' => array (
				'type' => 'user',
				'userFunc' => 'user_test->user_TCAform_test',
			)
		),
		'user_2' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_user.user_2',		
			'config' => array (
				'type' => 'user',
				'userFunc' => 'EXT:tceforms_test/userFunc.php:user_function2TCAform_test',
			)
		),
		'user_3' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_user.user_3',		
			'config' => array (
				'type' => 'user',
				'userFunc' => 'EXT:tceforms_test/userFunc.php:user_function3TCAform_test',
				'noTableWrapping' => '1',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, user_1,user_2,user_3,user_4,user_5,user_6')
	),
	'palettes' => array (
		'1' => array('showitem' => 'starttime, endtime, fe_group')
	)
);


?>