<?php

return [
	'host' 	 	=> env('DB_HOST','127.0.0.1'),
	'user' 		=> env('DB_USERNAME','homestead'),
	'password' 	=> env('DB_PASSWORD','homestead'),
	'db' 		=> env('DB_DATABASE','secret'),


	'private_keys' 	=> env('CRYPTOBOX_PRIVATEKEY',null),
	// 'private_keys' 	=> '';
];