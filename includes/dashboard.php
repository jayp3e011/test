<?php
@session_start();


	if (isset($_SESSION['user_level'])==1) {
		require_once('../public/admin.php');
	}
	else if (isset($_SESSION['user_level'])==0) {
		require_once('../public/student.php');
	}
	else{
		require_once('../public');
	}
?>