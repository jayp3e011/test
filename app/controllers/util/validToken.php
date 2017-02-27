<?php
	session_start();	
	$_SESSION['_ISTOKENVALID'] = true;
	header("Location: /test/public/?page=dashboard");
	die();
?>