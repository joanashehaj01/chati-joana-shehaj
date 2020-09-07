<?php
session_start();

if(isset($_SESSION["username"]))
{
	$data = date('Y-m-d H:i:s');
	$_SESSION["logout"] = $time;

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "chat_application";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Lidhja dështoj: " . $conn->connect_error);
	}

            $username_log = $_SESSION["username"];
            $sql_query = "select * from users where username = '$username_log';";
            $result = mysqli_query($conn, $sql_query);

            if(mysqli_num_rows($result) > 0 )
            {

            $row = mysqli_fetch_assoc($result);

            $id =  $row['id'];
            
            $query = "insert into logout(user_id,logout_time) values('$id', '$data');";
            $test = mysqli_query($conn,$query);  
            }

    unset($_SESSION["username"]);
    unset($_SESSION["logout"]);
 
header("Location:login.php");

}

?>