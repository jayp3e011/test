<?php
	include(getcwd().'/app/models/conf.php');
	$con->userLogout();
header('Location: /public');
?>