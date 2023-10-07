<?php

	$DB_HOST = 's102.servername.online';
	$DB_USER = 'larcl953_larclic';
	$DB_PASS = '1121905051';
	$DB_NAME = 'larcl953_store';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
