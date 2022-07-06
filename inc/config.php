<?php
/************************************
FILENAME	: inc/config.php
AUTHOR		: CAHYA DSN
CREATED DATE: 2017-12-02
UPDATED DATE: 2017-12-02
*************************************/
//-- 
define('_ISONLINE',true);
//-- assets folder
define('_ASSET','assets/');
//-- database configuration
$dbhost='127.0.0.1';
$dbuser='root';
$dbpass='Drake51141363.';
$dbname='mbti_test';
//-- database connection
$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);