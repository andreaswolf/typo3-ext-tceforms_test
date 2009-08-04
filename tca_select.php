<?php

$TCA['tx_tceformstest_select'] = array(
	'ctrl' => $TCA['tx_tceformstest_select']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'select_1,select_2'
	),
	'feInterface' => $TCA['tx_tceformstest_select']['feInterface'],
	'columns' => array (
		'select_1' => array (
			'exclude' => 0,
			'label' => 'Select box with two items',
			'config' => array (
				'type' => 'select',
				'items' => array(
					array('item 1'),
					array('item 2')
				)
			)
		),
		'select_2' => array (
			'exclude' => 0,
			'label' => 'Select box with two items and itemsProcFunc',
			'config' => array (
				'type' => 'select',
				'itemsProcFunc' => 'tx_tceformstest_selectEval->itemsProcFunc',
				'items' => array(
					array('item 1'),
					array('item 2')
				)
			)
		),
		'select_3' => array (
			'exclude' => 0,
			'label' => 'Select box with items beginning with G from table static_countries',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'static_countries',
				'foreign_table_where' => 'AND cn_short_local LIKE "G%" ORDER BY cn_short_local',
				'foreign_table_prefix' => 'Prefix: '
			)
		),
		'select_fileFolder' => array(
			'exclude' => 0,
			'label' => 'Flag icons from icons folder in extension. Should also display icons from subfolders, watch for flag_se.gif. Icons should be ordered in 4 columns.',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('',0),
				),
				'fileFolder' => 'EXT:tceforms_test/icons',
				'fileFolder_extList' => 'png,jpg,jpeg,gif',
				'fileFolder_recursions' => 1,
				'selicon_cols' => 4,
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'select_5' => array (
			'exclude' => 0,
			'label' => 'Select box with three items, second item selected',
			'config' => array (
				'type' => 'select',
				'items' => array(
					array('item 1', 1),
					array('item 2', 2),
					array('item 3', 4)
				),
				'default' => 2
			)
		),
		'select_icons' => array (
			'exclude' => 0,
			'label' => 'Select box with three items with icons',
			'config' => array (
				'type' => 'select',
				'items' => array(
					array('item 1 (de)', 'de', 'EXT:tceforms_test/icons/flag_de.gif'),
					array('item 2 (fr)', 'fr', 'EXT:tceforms_test/icons/flag_fr.gif'),
					array('item 3 (es) -> Icon from typo3/gfx/ folder', 'es', 'flags/es.gif')
				),
				'default' => 'fr'
			)
		),
		'select_iconsInOptionTags' => array(
			'exclude' => 0,
			'label' => 'Icons in option tags, noIconsBelowSelect',
			'config' => array (
				'type' => 'select',
				'items' => array(
					array('item 1 (de)', 'de', 'EXT:tceforms_test/icons/flag_de.gif'),
					array('item 2 (fr)', 'fr', 'EXT:tceforms_test/icons/flag_fr.gif'),
					array('item 3 (es) -> Icon from typo3/gfx/ folder', 'es', 'flags/es.gif')
				),
				'default' => 'fr',
				'iconsInOptionTags' => TRUE,
				'noIconsBelowSelect' => TRUE
			)
		),
		'select_multiple' => array (
			'exclude' => 0,
			'label' => 'Select box with multiple set, maxitems=5, minitems=2',
			'config' => array (
				'type' => 'select',
				'items' => array(
					array('item 1', 1),
					array('item 2', 2),
					array('item 3', 4),
					array('item 4', 8)
				),
				'size' => 6,
				'maxitems' => 5,
				'minitems' => 2,
				'multiple' => TRUE
			)
		),
		'select_exclusiveKeys' => array (
			'exclude' => 0,
			'label' => 'Select box with multiple set, exclusiveKeys set for items 2 and 3',
			'config' => array (
				'type' => 'select',
				'items' => array(
					array('item 1', 1),
					array('item 2', 2),
					array('item 3', 4),
					array('item 4', 8),
					array('item 5', 16)
				),
				'size' => 6,
				'maxitems' => 5,
				'exclusiveKeys' => '2,4',
			)
		),
		'select_special_tables' => array (
			'exclude' => 0,
			'label' => 'Select box with all tables, 15 icons in a row',
			'config' => array (
				'type' => 'select',
				'special' => 'tables',
				'selicon_cols' => 15,
			)
		),
		'select_special_tables_no_icons' => array (
			'exclude' => 0,
			'label' => 'Select box with all tables, no icons underneath (suppress_icons enabled)',
			'config' => array (
				'type' => 'select',
				'special' => 'tables',
				'suppress_icons' => '1'
			)
		),
		'select_special_pagetypes' => array (
			'exclude' => 0,
			'label' => 'Select box with all pagetypes',
			'config' => array (
				'type' => 'select',
				'special' => 'pagetypes',
			)
		),
		'select_special_exclude' => array (
			'exclude' => 0,
			'label' => 'All fields listed as exclude fields',
			'config' => array (
				'type' => 'select',
				'special' => 'exclude',
				'size' => 10
			)
		),
		'select_special_modlistgroup' => array (
			'exclude' => 0,
			'label' => 'All modules listed for groups',
			'config' => array (
				'type' => 'select',
				'special' => 'modListGroup'
			)
		),
		'select_special_modlistuser' => array (
			'exclude' => 0,
			'label' => 'All modules listed for users',
			'config' => array (
				'type' => 'select',
				'special' => 'modListUser'
			)
		),
		'select_special_explicitvalues' => array (
			'exclude' => 0,
			'label' => 'Items that require explicit permission to be shown',
			'config' => array (
				'type' => 'select',
				'special' => 'explicitValues',
				'renderMode' => 'checkbox',
				'maxitems' => 5
			)
		),
		'select_special_languages' => array (
			'exclude' => 0,
			'label' => 'Languages',
			'config' => array (
				'type' => 'select',
				'special' => 'languages',
				'size' => 5,
				'suppress_icons' => 1
			)
		),
		'select_itemListStyle' => array (
			'exclude' => 0,
			'label' => 'Select box with styles for both lists; left green, right red',
			'config' => array (
				'type' => 'select',
				'items' => array(
					array('item 1', 1),
					array('item 2', 2),
					array('item 3', 4)
				),
				'itemListStyle' => 'width:250px;background-color:#ffcccc;',
				'selectedListStyle' => 'width:250px;background-color:#ccffcc;',
				'size' => 2,
				'maxitems' => 2
			)
		),
		'select_renderModeCheckbox' => array (
			'exclude' => 0,
			'label' => 'Render mode "checkbox"',
			'config' => array (
				'type' => 'select',
				'items' => array(
					array('item 1', 1),
					array('item 2', 2),
					array('item 3', 4)
				),
				'renderMode' => 'checkbox',
				'maxitems' => 2
			)
		),
		'select_renderModeSinglebox' => array (
			'exclude' => 0,
			'label' => 'Render mode "singlebox"',
			'config' => array (
				'type' => 'select',
				'items' => array(
					array('item 1', 1),
					array('item 2', 2),
					array('item 3', 4)
				),
				'renderMode' => 'singlebox',
				'maxitems' => 2
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => '--div--;General options, select_1;;;;1-1-1, select_2, select_3, select_5, select_multiple, select_exclusiveKeys, --div--;Icons, select_fileFolder, select_icons, select_iconsInOptionTags, --div--;"special" values, select_special_tables;;;;1-1-1, select_special_tables_no_icons, select_special_pagetypes, select_special_exclude, select_special_modlistgroup, select_special_modlistuser, select_special_explicitvalues, select_special_languages, --div--;list styles, select_itemListStyle, --div--;Render modes, select_renderModeCheckbox, select_renderModeSinglebox')
	),
);

?>