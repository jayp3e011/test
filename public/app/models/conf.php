<?php
	define('HOST1', 'localhost');
	define('USER1', 'root');
	define('PASS1', '');
	define('DBSE1', 'test');
	// define('PORT', '');

	define('HOST', 'sql6.freemysqlhosting.net');
	define('USER', 'sql6161771');
	define('PASS', 'BzWAKbzp8a');
	define('DBSE', 'sql6161771');
	// define('PORT1', '3306');

	$link = mysqli_connect(HOST, USER, PASS, DBSE);
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	
	include_once(getcwd().'/app/controllers/php/UserClass.php');
	$con = new UserClass($link);
?>