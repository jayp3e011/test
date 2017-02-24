<?php
	include('conf.php');

	if($link){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$table='user';
		$sql = "select id,email,firstname,lastname,createdat,isadmin from $table where email='$email' AND password=MD5('$password')";
	    $result = mysqli_query($link, $sql) or die("Invalid query" . mysqli_error($link));
		$arr = array();		
		while($row=mysqli_fetch_assoc($result)){
			$arr[] = $row;			
		}
		echo json_encode($arr);
	}
?>