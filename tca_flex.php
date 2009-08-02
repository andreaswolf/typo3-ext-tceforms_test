﻿<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA["tx_tceformtest_flex"] = array (
	"ctrl" => $TCA["tx_tceformtest_flex"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "hidden,flex"
	),
	"feInterface" => $TCA["tx_tceformtest_flex"]["feInterface"],
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