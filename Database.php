<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
* Database
* This classess contains all the functionality of database.
*/
class Database
{
	
	public $conn;

	function __construct()
	{
		$serverName = "localhost";
		$username	= "root";
		$password	= "123pradeep";
		$database 	= "login";

		$this->conn = new mysqli($serverName, $username, $password, $database );

		if(!$this->conn) {
			echo "Could not connect ". $this->conn->connect_error;
		}
	}

	function login( $email, $password ) {
		
		$sql = "Select * from users where email = '". $email ."' and password = '". $password ."'";
		$returnValue = $this->conn->query($sql);

		if(!$returnValue) {
			echo "Could not connect ". $this->conn->connect_error;
		} else if( $returnValue->num_rows == 1 ) {
			header("location:dashboard.php");
		} else {
			echo "Incorrect username & password";
			header("location:index.php");
		}
	}

	function register( $name, $email, $password ) {
		$sql = "Insert into users(name, email, password) values('".$name."', '".$email."', '".$password."')";

		$returnValue = $this->conn->query($sql);
		if( !returnValue ) {
			echo "Could not connect ". $this->conn->connect_error;
		} else {
			header("location:dashboard.php");
		}

	}
}
