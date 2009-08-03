<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA["tx_tceformstest_input_eval"] = array (
	"ctrl" => $TCA["tx_tceformstest_input_eval"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "hidden,inputfield"
	),
	"feInterface" => $TCA["tx_tceformstest_input_eval"]["feInterface"],
	"columns" => array (		
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		"inputfield_required" => Array (		
			"exclude" => 1,		
			"label" => "Eval: required",
			"config" => Array (
				"type" => "input",
				"eval" => "required",
			)
		),		
		"inputfield_trim" => Array (		
			"exclude" => 1,		
			"label" => "Eval: trim (should remove whitespaces before and after text)",
			"config" => Array (
				"type" => "input",
				"eval" => "trim",
			)
		),		
		
		"inputfield_date" => Array (		
			"exclude" => 1,		
			"label" => "Eval: date",
			"config" => Array (
				"type" => "input",
				"eval" => "date",
			)
		),		
		
		"inputfield_datetime" => Array (		
			"exclude" => 1,		
			"label" => "Eval: datetime",
			"config" => Array (
				"type" => "input",
				"eval" => "datetime",
			)
		),	
			
		"inputfield_time" => Array (		
			"exclude" => 1,		
			"label" => "Eval: time",
			"config" => Array (
				"type" => "input",
				"eval" => "time",
			)
		),	
		
		"inputfield_timesec" => Array (		
			"exclude" => 1,		
			"label" => "Eval: timesec",
			"config" => Array (
				"type" => "input",
				"eval" => "timesec",
			)
		),	
		
		"inputfield_year" => Array (		
			"exclude" => 1,		
			"label" => "Eval: year",
			"config" => Array (
				"type" => "input",
				"eval" => "year",
			)
		),
		
		"inputfield_int" => Array (		
			"exclude" => 1,		
			"label" => "Eval: int",
			"config" => Array (
				"type" => "input",
				"eval" => "int",
			)
		),
		
		"inputfield_upper" => Array (		
			"exclude" => 1,		
			"label" => "Eval: upper",
			"config" => Array (
				"type" => "input",
				"eval" => "upper",
			)
		),
		
		"inputfield_lower" => Array (		
			"exclude" => 1,		
			"label" => "Eval: lower",
			"config" => Array (
				"type" => "input",
				"eval" => "lower",
			)
		),
		
		"inputfield_alpha" => Array (		
			"exclude" => 1,		
			"label" => "Eval: alpha",
			"config" => Array (
				"type" => "input",
				"eval" => "alpha",
			)
		),
		
		"inputfield_num" => Array (		
			"exclude" => 1,		
			"label" => "Eval: num : Allows only 0-9 characters in the field.",
			"config" => Array (
				"type" => "input",
				"eval" => "num",
			)
		),
		
		"inputfield_alphanum" => Array (		
			"exclude" => 1,		
			"label" => "Eval: alphanum : Same as alpha but allows also 0-9",
			"config" => Array (
				"type" => "input",
				"eval" => "alphanum",
			)
		),				
		
		"inputfield_alphanum_x" => Array (		
			"exclude" => 1,		
			"label" => "Eval: alphanum_x : Same as alphanum but allows also _ and - chars.",
			"config" => Array (
				"type" => "input",
				"eval" => "alphanum_x",
			)
		),		
		
		"inputfield_nospace" => Array (		
			"exclude" => 1,		
			"label" => "Eval: nospace : Removes all occurrences of space characters (chr(32))",
			"config" => Array (
				"type" => "input",
				"eval" => "nospace",
			)
		),		
				
		"inputfield_md5" => Array (		
			"exclude" => 1,		
			"label" => "Eval: md5 : Will convert the inputted value to the md5-hash of it (The JavaScript MD5() function is found in typo3/md5.js)",
			"config" => Array (
				"type" => "input",
				"eval" => "md5",
			)
		),		
		
		"inputfield_is_in" => Array (		
			"exclude" => 1,		
			"label" => "Eval: is_in (Set Letters: abc123)",
			"config" => Array (
				"type" => "input",
				"eval" => "is_in",
				"is_in" => "abc123",
			)
		),		
		
		"inputfield_password" => Array (		
			"exclude" => 1,		
			"label" => "Eval: password",
			"config" => Array (
				"type" => "input",
				"eval" => "password",
			)
		),		
		
		"inputfield_double2" => Array (		
			"exclude" => 1,		
			"label" => "Eval: double2 (float with 2 decimals)",
			"config" => Array (
				"type" => "input",
				"eval" => "double2",
			)
		),	
		
		"inputfield_unique" => Array (		
			"exclude" => 1,		
			"label" => "Eval: unique",
			"config" => Array (
				"type" => "input",
				"eval" => "unique",
			)
		),	
		
		"inputfield_uniqueInPid" => Array (		
			"exclude" => 1,		
			"label" => "Eval: uniqueInPid",
			"config" => Array (
				"type" => "input",
				"eval" => "uniqueInPid",
			)
		),
		"inputfield_userdefined" => Array (		
			"exclude" => 1,		
			"label" => "Eval: user defined: appends always the number '500' to your input",
			"config" => Array (
				"type" => "input",
				"eval" => "tx_tceformstest_inputeval",
			)
		),
		"inputfield_combination" => Array (		
			"exclude" => 1,		
			"label" => "Eval: required and int in combination",
			"config" => Array (
				"type" => "input",
				"eval" => "required,int",
			)
		),						
	),
	"types" => array (
		"0" => array("showitem" => "inputfield_required, 
		  inputfield_trim, 
		  inputfield_date, 
		  inputfield_datetime,
		  inputfield_time,
		  inputfield_timesec,
		  inputfield_year,
		  inputfield_int,
		  inputfield_lower,
		  inputfield_upper,
		  inputfield_alpha,
		  inputfield_num,
		  inputfield_alphanum,
		  inputfield_alphanum_x,
		  inputfield_nospace,
		  inputfield_md5,
		  inputfield_is_in,		  
		  inputfield_password,
		  inputfield_double2,
		  inputfield_unique,
		  inputfield_uniqueInPid,
		  inputfield_userdefined,
		  inputfield_combination
		")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);
?>
