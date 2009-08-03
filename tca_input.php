<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA["tx_tceformstest_input"] = array (
	"ctrl" => $TCA["tx_tceformstest_input"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "hidden,inputfield"
	),
	"feInterface" => $TCA["tx_tceformstest_input"]["feInterface"],
	"columns" => array (		
		'hidden' => array (		
			'exclude' => 0,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		"inputfield_size" => Array (		
			"exclude" => 0,		
			"label" => "Tests size: is set to 30",
			"config" => Array (
				"type" => "input",
				"max" => "30",
			)
		),
		"inputfield_max" => Array (		
			"exclude" => 0,		
			"label" => "Tests max: 30",
			"config" => Array (
				"type" => "input",
				"max" => "30",
			)
		),
		
		"inputfield_default" => Array (		
			"exclude" => 0,		
			"label" => "Tests default value",
			"config" => Array (
				"type" => "input",
				"default" => "default value",
			)
		),		

		"inputfield_checkbox" => Array (		
			"exclude" => 0,		
			"label" => "Tests checkbox (is set to 123)",
			"config" => Array (
				"type" => "input",
				"checkbox" => "123",
			)
		),		
		
		"inputfield_range" => Array (
			"exclude" => 0,
			"label" => "Tests range (lower is set to 10, upper is set to 1000)",
			"config" => Array (
				"type" => "input",
				"eval" => "int",
				"range" => Array(
					'lower' => 10,
					'upper' => 1000,
				),
			),
		),
		"inputfield_linkwizard" => Array (
			"exclude" => 0,
			"label" => "Tests linkwizard",
			"config" => Array (
				"type" => "input",
				'wizards' => Array(
					'_PADDING' => 2,
					'link' => Array(
						'type' => 'popup',
						'title' => 'Link',
						'icon' => 'link_popup.gif',
						'script' => 'browse_links.php?mode=wizard',
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
					)
				)
			),
		),				
	),
	"types" => array (
		"0" => array("showitem" => "hidden;;1;;1-1-1, inputfield_size,inputfield_max,inputfield_default,inputfield_checkbox,inputfield_range,inputfield_linkwizard")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);
?>
