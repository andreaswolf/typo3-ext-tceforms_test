<?php

$TCA['tx_tceformstest_check'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_check',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'versioningWS' => TRUE, 
		'origUid' => 't3_origuid',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l10n_parent',	
		'transOrigDiffSourceField' => 'l10n_diffsource',	
		'default_sortby' => 'ORDER BY crdate',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',	
			'starttime' => 'starttime',	
			'endtime' => 'endtime',	
			'fe_group' => 'fe_group',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_check.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_check.gif',
	),
);

$TCA["tx_tceformstest_group"] = array (
	"ctrl" => array(
		'title'     => 'TCEforms Test field, type "group"',
		'label'     => 'uid',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_group.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_group.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden, inputfield",
	)
);

$TCA["tx_tceformstest_input"] = array (
	"ctrl" => array (
		'title'     => 'TCEforms Test field, type "input"',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dividers2tabs' => 1,
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_input.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_input.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden, inputfield",
	)
);

$TCA["tx_tceformstest_select"] = array (
	"ctrl" => array (
		'title'     => 'TCEforms Test field, type "select"',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'enablecolumns' => array (
			'disabled' => 'hidden',
		),
		'dividers2tabs' => 1,
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_select.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_select.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden, inputfield",
	)
);

$TCA["tx_tceformstest_input_eval"] = array (
	"ctrl" => array (
		'title'     => 'TCEforms Test field, "eval" settings of type "input"',
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_input_eval.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_input_eval.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden, inputfield",
	)
);

$TCA['tx_tceformstest_none'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_none',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'versioningWS' => TRUE, 
		'origUid' => 't3_origuid',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l10n_parent',	
		'transOrigDiffSourceField' => 'l10n_diffsource',	
		'default_sortby' => 'ORDER BY crdate',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',	
			'starttime' => 'starttime',	
			'endtime' => 'endtime',	
			'fe_group' => 'fe_group',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_none.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_none.gif',
	),
);


$TCA["tx_tceformstest_passthrough"] = array (
	"ctrl" => array (
		'title'     => 'TCEforms Test field, type "passthrough"',
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_passthrough.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_passthrough.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden, passthrough",
	)
);

$TCA["tx_tceformstest_flex"] = array (
	"ctrl" => array (
		'title'     => 'TCEforms Test field, type "flex"',
		'label'     => 'uid',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_flex.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_flex.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden",
	)
);

$TCA['tx_tceformstest_text'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_text',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY crdate',
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',	
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_text.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_text.gif',
	),
);

$TCA['tx_tceformstest_user'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_user',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'versioningWS' => TRUE, 
		'origUid' => 't3_origuid',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l10n_parent',	
		'transOrigDiffSourceField' => 'l10n_diffsource',	
		'default_sortby' => 'ORDER BY crdate',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',	
			'starttime' => 'starttime',	
			'endtime' => 'endtime',	
			'fe_group' => 'fe_group',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_user.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_check.gif',
	),
);
?>