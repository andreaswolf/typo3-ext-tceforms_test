#
# Table structure for table 'tx_tceformstest_text'
#
CREATE TABLE tx_tceformstest_text (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	text1 text,
	text2 text,
	text3 text,
	text4 text,
	text5 text,
	text6 text,
	text7 text,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_tceformstest_select'
#
CREATE TABLE tx_tceformstest_select (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	select_itemsProcFunc tinyint(4) DEFAULT '0' NOT NULL
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_tceformstest_check'
#
CREATE TABLE tx_tceformstest_check (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(30) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	fe_group int(11) DEFAULT '0' NOT NULL,
	checkbox_1 tinyint(3) DEFAULT '0' NOT NULL,
	checkbox_2 tinyint(3) DEFAULT '0' NOT NULL,
	checkbox_3 tinyint(3) DEFAULT '0' NOT NULL,
	checkbox_4 tinyint(3) DEFAULT '0' NOT NULL,
	checkbox_5 tinyint(3) DEFAULT '0' NOT NULL,
	checkbox_6 tinyint(3) DEFAULT '0' NOT NULL,
	checkbox_7 tinyint(3) DEFAULT '0' NOT NULL,
	checkbox_8 tinyint(3) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid)
);

#
# Table structure for table 'tx_tceformstest_none'
#
CREATE TABLE tx_tceformstest_none (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(30) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	fe_group int(11) DEFAULT '0' NOT NULL,
	none_1 tinyint(3) DEFAULT '0' NOT NULL,
	none_2 tinyint(3) DEFAULT '0' NOT NULL,
	none_3 tinyint(3) DEFAULT '0' NOT NULL,
	none_4 tinyint(3) DEFAULT '0' NOT NULL,
	none_5 tinyint(3) DEFAULT '0' NOT NULL,
	none_6 tinyint(3) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid)
);

#
# Table structure for table 'tx_tceformstest_user'
#
CREATE TABLE tx_tceformstest_user (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(30) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	fe_group int(11) DEFAULT '0' NOT NULL,
	user_1 tinyint(3) DEFAULT '0' NOT NULL,
	user_2 tinyint(3) DEFAULT '0' NOT NULL,
	user_3 tinyint(3) DEFAULT '0' NOT NULL,
	user_4 tinyint(3) DEFAULT '0' NOT NULL,
	user_5 tinyint(3) DEFAULT '0' NOT NULL,
	user_6 tinyint(3) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid)
);

#
# Table structure for table 'tx_tceformstest_input'
#
CREATE TABLE tx_tceformstest_input (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	inputfield_size tinytext NOT NULL,
	inputfield_max tinytext NOT NULL,
	inputfield_checkbox tinytext NOT NULL,
	inputfield_default tinytext NOT NULL,
	inputfield_range tinytext NOT NULL,	
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);

CREATE TABLE tx_tceformstest_input_eval (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	
	inputfield_required tinytext NOT NULL, 
  inputfield_trim tinytext NOT NULL, 
	inputfield_date tinytext NOT NULL, 
	inputfield_datetime tinytext NOT NULL,
		  inputfield_time tinytext NOT NULL,
		  inputfield_timesec tinytext NOT NULL,
		  inputfield_year tinytext NOT NULL,
		  inputfield_int tinytext NOT NULL,
		  inputfield_lower tinytext NOT NULL,
		  inputfield_upper tinytext NOT NULL,
		  inputfield_alpha tinytext NOT NULL,
		  inputfield_num tinytext NOT NULL,
		  inputfield_alphanum tinytext NOT NULL,
		  inputfield_alphanum_x tinytext NOT NULL,
		  inputfield_nospace tinytext NOT NULL,
		  inputfield_md5 tinytext NOT NULL,
		  inputfield_is_in tinytext NOT NULL,
		  inputfield_password tinytext NOT NULL,
		  inputfield_double2 tinytext NOT NULL,
		  inputfield_unique tinytext NOT NULL,
		  inputfield_uniqueInPid tinytext NOT NULL,
		  inputfield_userdefined tinytext NOT NULL,
		  inputfield_combination tinytext NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);

CREATE TABLE tx_tceformstest_passthrough (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,	
	passthrough tinytext NOT NULL,	
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);

CREATE TABLE tx_tceformstest_flex (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,	
	
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);
