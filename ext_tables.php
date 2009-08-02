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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_check.gif',
	),
);

$TCA["tx_tceformtest_input"] = array (
	"ctrl" => array (
		'title'     => 'Tests functionality of input fields',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca_input.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformtest_input.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden, inputfield",
	)
);

$TCA["tx_tceformtest_input_eval"] = array (
	"ctrl" => array (
		'title'     => 'Tests eval functionality of input fields',
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
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformtest_input.gif',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_check.gif',
	),
);


$TCA["tx_tceformtest_passthrough"] = array (
	"ctrl" => array (
		'title'     => 'Passthrough',
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
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformtest_input.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden, passthrough",
	)
);

$TCA["tx_tceformtest_flex"] = array (
	"ctrl" => array (
		'title'     => 'flex',
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
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformtest_input.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden",
	)
);

$TCA['tx_tceformtest_text'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:tceformtest/locallang_db.xml:tx_tceformtest_text',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY crdate',
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',	
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformtest_text.gif',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_tceformstest_check.gif',
	),
);
?>