<?php
	include_once('../includes/dbconnect.php');
	if ($con->userLevel()==1) {
		require_once('admin.php');
	}
	else if ($con->userLevel()==0){
		require_once('student.php');
	}
	else{
		require_once('../public');
	}
?>