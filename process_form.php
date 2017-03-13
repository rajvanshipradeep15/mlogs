<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	require 'Database.php';

	$email 		= $_REQUEST['email'];
	$password 	= md5( $_REQUEST['password'] );
	$name 		= $_REQUEST['name'];
	$register 	= ( true == isset( $_REQUEST['register'] ) ) ? $_REQUEST['register'] : "";
	$login 		= ( true == isset( $_REQUEST['login'] ) ) ? $_REQUEST['login'] : "";

	$db = new Database();
	
	if( true == $login ) {
		$db->login($email, $password);
	} elseif ( true == $register ) {
		$db->register($name, $email, $password);
	}


