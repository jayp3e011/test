<?php
	include('dbconnect.php');
	session_start();
	session_destroy();
	$con->userLogout();
header('Location: ../public');
?>