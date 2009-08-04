<?php

$TCA['tx_tceformstest_group'] = array(
	'ctrl' => $TCA['tx_tceformstest_group']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => ''
	),
	'feInterface' => $TCA['tx_tceformstest_group']['feInterface'],
	'columns' => array (
		'group_db' => array(
			'exclude' => 0,
			'label' => 'Group box for be_users, be_groups with wizard',
			'config' => array (
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'be_users,be_groups'
			)
		),
		'group_file_thumbnails' => array(
			'exclude' => 0,
			'label' => 'Group box for *.jpg files with thumbnails, upload disabled',
			'config' => array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => 'jpg',
				'show_thumbs' => TRUE,
				'size' => 3,
				'uploadfolder' => 'uploads/pics/',
				'disable_controls' => 'upload'
			)
		),
		'group_file_controls' => array(
			'exclude' => 0,
			'label' => 'Group box without any controls except list',
			'config' => array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => 'jpg',
				'show_thumbs' => TRUE,
				'size' => 3,
				'uploadfolder' => 'uploads/pics/',
				'disable_controls' => 'upload,browser'
			)
		),
		'group_file_uploadonly' => array(
			'exclude' => 0,
			'label' => 'Group box without list (only browser and upload)',
			'config' => array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => 'jpg',
				'show_thumbs' => TRUE,
				'size' => 3,
				'uploadfolder' => 'uploads/pics/',
				'disable_controls' => 'list'
			)
		)
	),
	'types' => array (
		'0' => array('showitem' => '--div--;internal_type="db", group_db;;;;1-1-1, group_file_thumbnails, group_file_controls, group_file_uploadonly')
	),
)

?>