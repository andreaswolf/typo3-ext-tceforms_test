<?php

$TCA['tx_tceformstest_text'] = array (
	'ctrl' => $TCA['tx_tceformstest_text']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,text1,text2,text3,text4,text5,text6,text7'
	),
	'feInterface' => $TCA['tx_tceformstest_text']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 0,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'text1' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_text.text1',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
				'wrap' => 'off',
				'default' => 'This textbox has wrap set to "off", so these long paragraphs should appear in one line: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non luctus elit. In sed nunc velit. Donec gravida eros sollicitudin ligula mollis id eleifend mauris laoreet. Donec turpis magna, pulvinar id pretium eu, blandit et nisi. Nulla facilisi. Vivamus pharetra orci sed nunc auctor condimentum. Aenean volutpat posuere scelerisque. Nullam sed dolor justo. Pellentesque id tellus nunc, id sodales diam. Sed rhoncus risus a enim lacinia tincidunt. Aliquam ut neque augue. ',
			),
		),
		'text2' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_text.text2',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
				'wrap' => 'virtual',
				'default' => 'This textbox has wrap set to "virtual", so these long paragraphs should appear in multiple lines (wrapped at the end of the textbox): Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non luctus elit. In sed nunc velit. Donec gravida eros sollicitudin ligula mollis id eleifend mauris laoreet. Donec turpis magna, pulvinar id pretium eu, blandit et nisi. Nulla facilisi. Vivamus pharetra orci sed nunc auctor condimentum. Aenean volutpat posuere scelerisque. Nullam sed dolor justo. Pellentesque id tellus nunc, id sodales diam. Sed rhoncus risus a enim lacinia tincidunt. Aliquam ut neque augue.',
			),
		),
		'text3' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_text.text3',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
				'default' => 'Test and document this!',
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
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_text.text4',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
				'default' => 'TODO: Test and document this',
        'wizards' => array(
          'edit' => Array(
            'type' => 'popup',
            'notNewRecords' => 0,
            'title' => 'Popup Test',
            'script' => 'EXT:tceforms_test/tx_tceformstest_text_text4/index.php',
            'icon' => 'edit2.gif',
            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
          ),
        ),
			)
		),
		
		
		'text5' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_text.text5',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',	
        'wizards' => array(
          'list' => Array(
            'title' => 'userFunc Test',
            'type' => 'userFunc',
            'icon' => 'edit2.gif',
            'notNewRecords' => 'user_tceformstest->user_testUserFunc',
          ),
        ),
			)
		),
		/*'text6' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_text.text6',		
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
			'label' => 'LLL:EXT:tceforms_test/locallang_db.xml:tx_tceformstest_text.text7',		
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