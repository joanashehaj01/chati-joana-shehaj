<!DOCTYPE html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="assets/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="assets/css/font.css" type="text/css"/>
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="assets/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
    <h2>Sign In Now</h2>
        <form action=" " method="post">
            <input type="username" class="ggg" name="username" placeholder="Username" required="">
            <input type="password" name="password" placeholder="Password" required class="ggg" />
         
                <div class="clearfix"></div>
                <input type="submit" value="Sign In" name="login">
        </form>
        <p>Don't Have an Account ?<a href="registration.php">Create an account</a></p>
</div>
</div>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="assets/js/jquery.scrollTo.js"></script>
</body>


<?php
session_start();

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

if(isset($_POST["login"]))
{
    $username = trim($_POST["username"]);
    $password = md5($_POST['password']);
    $data = date('Y-m-d H:i:s');
    $_SESSION["login"] = $data;
    $x = $_SESSION["login"];
    
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$username."' and password = '".$password."'");  

    if(mysqli_num_rows($sql) == 1)
    {
        $_SESSION["username"] = $username;
        $username_log = $_SESSION["username"];

        $sql_query = "select * from users where username = '$username_log';";
        $result = mysqli_query($conn, $sql_query);

            if(mysqli_num_rows($result) > 0 )
            {

            $row = mysqli_fetch_assoc($result);

            $id =  $row['id'];
            $session = session_id();
            $tipi = $row["Tipi"];
            $_SESSION["tipi"] = $tipi;
    

            $query = "insert into user_online(user_id,session,login_time) values('$id', '$session', '$x');";
            $test = mysqli_query($conn,$query);  
            }


            echo "Hello";
            header("Location:chat.php");
    }
    else
    {
        echo 'Password dhe username nuk perputhen!';
    }
}
?>
</html>