<?php

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

$validime_array=array();

if(isset($_POST["register"]))
{
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$username = trim($_POST['username']);
	$password = md5($_POST['password']);
	$tipi = "Perdorues";
	
	if (empty($first_name)){
    $validime_array[]="Fusha e emrit duhet të plotësohet!";
    }
    
    if (empty($last_name)){
    $validime_array[]="Fusha e mbiemrit duhet të plotësohet!";
    }
    
    if (empty($username)){
    $validime_array[]="Fusha e username duhet të plotësohet!";
    }
    
    if (empty($password)){
    $validime_array[]="Fusha e password duhet të plotësohet!";
    }
    
    if (strlen($password) < 8 ){
    $validime_array[]="Password duhet te kete me teper se 8 karaktere!";}
    
    

if(empty($validime_array))
{
            
        $query = "INSERT INTO users (first_name,last_name,username,password,tipi) 
        VALUES ('$first_name', '$last_name', '$username', '$password', '$tipi');";
        
        $count=0;
        $res = mysqli_query($conn,"select * from users where username = '$_POST[username]'");
        $count= mysqli_num_rows($res);

        if($count > 0)
        {
                    echo "<script type='text/javascript'>alert('Ky username ekziston ne databaze!!');</script>";
                    // header("Location:registration.php");
                    ?>
                    <script type="text/javascript">
                        window.location="registration.php"
                    </script>
        <?php
        }
        else
        {
                    if(mysqli_query($conn, $query))
                    {
                        echo "<script type='text/javascript'>alert('U rregjistruat me sukses! Ju lutem, Logohuni.');</script>";
        ?>
                    
                    <script type="text/javascript">
                        window.location="login.php"
                    </script>    
                        
        <?php
                    }
        }
}
	
    	else {
                echo "<ul style='text-align: left'>";
                foreach($validime_array as $value){
                echo "<li style='color:red'>". $value . "</li>";
                }
                echo "</ul>";
            } 
	mysqli_close($conn);
}
?>

