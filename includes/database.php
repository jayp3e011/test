<?php
	/**
	* 
	*/
	include("constants.php")
	class DB
	{
		var $connection;
		function DB(){
	      /* Make connection to database */
	      $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysqli_error());
	      mysqli_select_db($this->connection,DB_NAME ) or die(mysqli_error());
	    }
	    function confirmUserPass($email, $password){
  	      /* Add slashes if necessary (for query) */
  			if(!get_magic_quotes_gpc()) {
  				$email = addslashes($email);
			}

				/* Verify that user is in database */
				$q = "SELECT password FROM ".TBL_USERS." WHERE email = '$email'";
				$result = mysqli_query( $this->connection,$q);
				if(!$result || (mysqli_num_rows($result) < 1)){
				 return 1; //Indicates email failure
			}

			/* Retrieve password from result, strip slashes */
			$dbarray = mysqli_fetch_array($result);
			$dbarray['password'] = stripslashes($dbarray['password']);
			$password = stripslashes($password);

			/* Validate that password is correct */
			if($password == $dbarray['password']){
			 	return 0; //Success! email and password confirmed
			}
			else{
			 	return 2; //Indicates password failure
			}
    }
    function confirmUserID($email, $userid){
      /* Add slashes if necessary (for query) */
      if(!get_magic_quotes_gpc()) {
	      $email = addslashes($email);
      }

      /* Verify that user is in database */
      $q = "SELECT userid FROM ".TBL_USERS." WHERE email = '$email'";
      $result = mysqli_query( $this->connection,$q);
      if(!$result || (mysqli_num_rows($result) < 1)){
         return 1; //Indicates email failure
      }

      /* Retrieve userid from result, strip slashes */
      $dbarray = mysqli_fetch_array($result);
      $dbarray['userid'] = stripslashes($dbarray['userid']);
      $userid = stripslashes($userid);

      /* Validate that userid is correct */
      if($userid == $dbarray['userid']){
         return 0; //Success! email and userid confirmed
      }
      else{
         return 2; //Indicates userid invalid
      }
   }
   
   /**
    * emailTaken - Returns true if the email has
    * been taken by another user, false otherwise.
    */
   function emailTaken($email){
      if(!get_magic_quotes_gpc()){
         $email = addslashes($email);
      }
      $q = "SELECT email FROM ".TBL_USERS." WHERE email = '$email'";
      $result = mysqli_query( $this->connection,$q);
      return (mysqli_num_rows($result) > 0);
   }
   
   /**
    * addNewUser - Inserts the given (email, password, email)
    * info into the database. Appropriate user level is set.
    * Returns true on success, false otherwise.
    */
   function addNewUser($first_name, $last_name, $is_admin, $email, $password){
      $q = "INSERT INTO ".TBL_USERS." VALUES ('$first_name', '$last_name', '$is_admin', $email, '$password)";
      return mysqli_query( $this->connection,$q);
   }
   
   /**
    * updateUserField - Updates a field, specified by the field
    * parameter, in the user's row of the database.
    */
   function updateUserField($email, $field, $value){
      $q = "UPDATE ".TBL_USERS." SET ".$field." = '$value' WHERE email = '$email'";
      return mysqli_query($this->connection,$q);
   }
   
   /**
    * getUserInfo - Returns the result array from a mysql
    * query asking for all information stored regarding
    * the given email. If query fails, NULL is returned.
    */
   function getUserInfo($email){
      $q = "SELECT * FROM ".TBL_USERS." WHERE email = '$email'";
      $result = mysqli_query($this->connection,$q);
      /* Error occurred, return given name by default */
      if(!$result || (mysqli_num_rows($result) < 1)){
         return NULL;
      }
      /* Return result array */
      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }
	}
?>