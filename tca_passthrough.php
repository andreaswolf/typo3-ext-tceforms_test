<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA["tx_tceformtest_passthrough"] = array (
	"ctrl" => $TCA["tx_tceformtest_passthrough"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "hidden,passthrough"
	),
	"feInterface" => $TCA["tx_tceformtest_passthrough"]["feInterface"],
	"columns" => array (
		"passthrough" => Array (
			"exclude" => 1,		
			"label" => "Passthrough, value is directly saved to database",
			"config" => Array (
				"type" => "passthrough",
			)
		),		
	),
	"types" => array (
		"0" => array("showitem" => "passthrough")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);
?>