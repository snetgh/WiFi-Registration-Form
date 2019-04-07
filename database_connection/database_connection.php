<?php

/* For Other Uses Directly  */

/* Note : Dont Forget to Change the values below too */

$host = "localhost";
$user = "admin";
$password = "presby2018";
$database = "portal";

$my_database_connection = mysqli_connect($host,$user,$password,$database);



/**
* 
*/
class database_operations
{  

	private $host;
	private $user;
	private $password;
	private $database;
	private $my_database_connection;

	
	function __construct()
	{
		$this->host = "localhost";
		$this->user = "admin";
		$this->password = "presby2018";
		$this->database = "portal";

		$this->my_database_connection = new mysqli($this->host,$this->user,$this->password,$this->database);
		
	}


	function insert_data($first_name,$last_name,$staff_id,$department,$password,$telephone){

		$get_all_users = "SELECT * FROM `user_details` WHERE `staff_id` = '$staff_id' LIMIT 1";

		$execute_get_all = $this->my_database_connection->query($get_all_users);

		if($execute_get_all->num_rows >= 1){

			echo "<script>alert('Staff ID exists in system already')</script>";
		}else{

		$statement = "INSERT INTO `user_details` (`id`, `first_name`, `last_name`, `staff_id`, `telephone`, `department`, `password`, `user_status`, `registered_on`) VALUES (NULL, '$first_name', '$last_name', '$staff_id', '$telephone', '$department', '$password', 'pending', CURRENT_TIMESTAMP)";
		$insert = $this->my_database_connection->query($statement);
		if($insert){
			header("Location:thank_you.php");
		}
	}
	}


	function remove_registered_person($user_id){

		$delete_statement = "DELETE FROM `$user_details` WHERE `id` = '$user_id'";
		$delete_user = $this->my_database_connection->query($delete_statement);

	}

	function get_all_users(){

		$get_all_statement = "SELECT * FROM `user_details` ORDER BY ASC";
		$execute_get_all = $this->my_database_connection->query($get_all_statement);

		//if($)

	}

    function clean_input($clean_input){
        $cleaned_input = mysqli_escape_string($this->my_database_connection,$clean_input);
       return ($cleaned_input);
    }


    function password_harsh($to_be_harshed){

		$encrypted_password = password_hash($to_be_harshed,PASSWORD_DEFAULT);

		return $encrypted_password;
	}


	function create_sign_up($username,$user_password){

		$my_encrypted_password =  $this->password_harsh($user_password);

		$statement = "INSERT INTO `admininistrator_login` (`id`, `admin_username`, `admin_password`) VALUES (NULL, '$username', '$my_encrypted_password')";

		$save_signup = $this->my_database_connection->query($statement);
		if($save_signup){
			echo "<script>alert('Success')</script>";
		}
	}


	function login_in_controller($username,$password){

		$get_all_users = "SELECT * FROM `admininistrator_login` WHERE `admin_username` = '$username' LIMIT 1";
		$execute_get_all = $this->my_database_connection->query($get_all_users);

		if($execute_get_all->num_rows >= 1){

			while($user_data =  $execute_get_all->fetch_array()){

			$user_pass = $user_data["admin_password"];
		}

		}else{
			echo "<script>alert('User Not Found')</script>";
		}

		

		if(password_verify($password,$user_pass)){
			setcookie("i",'in', time() + (86400 * 30),"/");
			header("Location:admin_section/index.php");

		}


	}
}



?>