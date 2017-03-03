<?php
	include('conf.php');
	$con->userLogout();
header('Location: /public');
?>