<?php

$TCA['tx_tceformstest_text'] = array (
	'ctrl' => $TCA['tx_tceformtest_text']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,text1,text2,text3,text4,text5,text6,text7'
	),
	'feInterface' => $TCA['tx_tceformtest_text']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'text1' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceformtest/locallang_db.xml:tx_tceformtest_text.text1',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
				'wrap' => 'off',
				'default' => 'Hallo Textbox, wrap ist off',
			),
		),
		'text2' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceformtest/locallang_db.xml:tx_tceformtest_text.text2',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
				'wrap' => 'virtual',
				'default' => 'Hallo Textbox, wrapp ist virtual',
			),
		),
		'text3' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceformtest/locallang_db.xml:tx_tceformtest_text.text3',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
				'wizards' => array(
					'_PADDING' => 2,
          'add' => Array(
            'type' => 'script',
            'title' => 'Add Frontend Group',
            'icon' => 'add.gif',
            'notNewRecords' => 0,
            'params' => Array(
              'table' => 'fe_groups',
              'pid' => '1',
              'setValue' => 'set'
            ),
            'script' => 'wizard_add.php',
            'popup_onlyOpenIfSelected' => 0,
          ),
				),
			)
		),
		'text4' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceformtest/locallang_db.xml:tx_tceformtest_text.text4',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
        'wizards' => array(
          'edit' => Array(
            'type' => 'popup',
            'notNewRecords' => 0,
            'title' => 'Popup Test',
            'script' => 'EXT:tceformtest/tx_tceformtest_text_text4/index.php',
            'icon' => 'edit2.gif',
            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
          ),
        ),
			)
		),
		
		
		'text5' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceformtest/locallang_db.xml:tx_tceformtest_text.text5',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
        'wizards' => array(
          'list' => Array(
            'title' => 'userFunc Test',
            'type' => 'userFunc',
            'icon' => 'edit2.gif',
            'notNewRecords' => 'user_TCEformTest->user_testUserFunc',
          ),
        ),
			)
		),
		/*'text6' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceformtest/locallang_db.xml:tx_tceformtest_text.text6',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
        'wizards' => array(
          'list' => Array(
            'type' => 'colorbox',
          ),
        ),
			)
		),
		'text7' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceformtest/locallang_db.xml:tx_tceformtest_text.text7',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
        'wizards' => array(
          'list' => Array(
            'type' => 'select',
          ),
        ),
			)
		),*/
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, text1, text2, text3, text4, text5, text6, text7')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);

?>