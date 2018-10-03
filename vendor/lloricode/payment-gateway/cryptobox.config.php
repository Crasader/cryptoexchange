<?php
/**
 *  ... Please MODIFY this file ... 
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */

 $config = Config::get('cryptobox_config');

 define("DB_HOST", 	$config['host']);				// hostname
 define("DB_USER", 	$config['user']);		// database username
 define("DB_PASSWORD", 	$config['password']);		// database password
 define("DB_NAME", 	$config['db']);	// database name




/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional), etc...");
 */
 
 $cryptobox_private_keys = array($config['private_keys']);




 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys); 
 unset($config); 

?>