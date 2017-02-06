<?php

class UserClass
{
	private $db;
	private $level;
	private $fullname;
	private $id;
	
	// constructor
	function __construct($db)
	{
		$this->db = $db;
	}
	
	function userLogin($email, $password){
		
        	
    	$password = md5($password);
		$sql2="SELECT id,first_name,last_name,is_admin from users WHERE email='$email' and password='$password'";
		
		//checking if the username is available in the table
    	$result = mysqli_query($this->db,$sql2);
    	$user_data = mysqli_fetch_array($result);
    	$count_row = $result->num_rows;
	
        if ($count_row == 1) {
            // this login var will use for the session thing
            $id = $user_data['id'];
            $level = intval($user_data['is_admin']);
            $fullname = $user_data['first_name'].' '.$user_data['last_name'];
            return true;
        }
        else{
		    return false;
		}
	}
	function userLevel()
	{
		return $level;
	}
	function userName()
	{
		return $fullname;
	}
	function userID()
	{
		return $id;
	}
	function userLogout()
	{
		session_destroy();
		unset($id);
		unset($fullname);
		unset($level);
		$login = false;
		return;
	}
	
	function escapeString($str) {
		return $this->db->real_escape_string($str);
	}

	public function reg_user($first_name,$last_name, $is_admin, $password, $email){

			
		$password = md5($password);
		$sql="SELECT * FROM users WHERE email='$email'";
		
		//checking if the username or email is available in db
		$check =  $this->db->query($sql) ;
		$count_row = $check->num_rows;

		//if the username is not in db then insert to the table
		if ($count_row == 0){
			$sql1="INSERT INTO users SET first_name='$first_name', last_name='$last_name', is_admin='$is_admin', email='$email, password='$password'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
			return $result;
		}
		else { return false;}
	}
}
?>