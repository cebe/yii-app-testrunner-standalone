<?php

defined('DS') OR define('DS', DIRECTORY_SEPARATOR);

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(dirname(__FILE__)),
	'name'=>'Yii-App-Test-Runner',
	// application components
	'commandMap' => array(
		'tests'=>array(
			'class'=>'application.commands.testRunner.TestrunnerCommand',
			'baseAlias'=>'application.commands.testRunner',
		),
	),

	'components'=>array(

		'db'=>array(
			'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
	),
);
