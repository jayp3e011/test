<?php
	session_start();
	$_SESSION['_ISTOKENVALID'] = false;
	header("Location: /test/public/?page=error");
	die();
?>