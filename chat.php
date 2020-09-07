<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/screen-split.css"> 
<link rel="stylesheet" href="assets/css/chat-style.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>

<div class="split1 left">
  <!-- <div class="centered"> -->
    <div class="centered">
    <!-- <img src="" alt="Avatar woman"> -->
    <h2>Hello <?php echo $_SESSION["username"]; ?></h2>
    <p>
        <?php 
        if(isset($_SESSION["username"]))
        {
        // echo $_SESSION["username"];
        echo " ".'<a href="logout.php">Log Out</a>';
        }
        
        else
        {
            header("Location:login.php");
        }
        ?>
    </p>






  </div>
</div>

<div class="split2 right">

  
<div class="col-3  centered1">
   <div id="col-3  div1">

     <img src="assets/imagess/11.jpg" alt="Avatar" style="width:12%;border-radius: 50%;float: left;"/> 
      <div id="header"> 
        &nbsp;&nbsp;&nbsp;
        <span style="color:white;text-transform: capitalize;margin-left: 110px;"><?php echo $_SESSION["username"]; ?> </span>
        <span style="margin-left: 158px;"><i class="fa fa-cog" aria-hidden="true"></i></span> 
      </div>




    <div class="col-3 div2">

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

          
                $sql = "SELECT * FROM message";
                $result = mysqli_query($conn, $sql);
                
                while($row = mysqli_fetch_assoc($result))
                {
                    $message = $row["message"];
                    $user_name = $row["username"];
                    $data = date('Y-m-d H:i:s');
                    $_SESSION["login"] = $data;
                    // $x = $_SESSION["login"];
                    $x = $row["date"];
                    
                    // echo '<h4 style="color:#0d1629;">'." ".$user_name.'</h4>';
                    // echo '<p>'."".$message.'</p>';
                    // header("refresh:0");


              ?>

                      <div class="container">

                        <?php

                        if($_SESSION["tipi"] == 'Perdorues')
                        {
                        ?> 

                      <img src="assets/imagess/11.jpg" alt="Avatar" style="width:100%;float: left;">

                      <p><?php echo '<p style="color:black;text-align: start;">'.$message.'</p>'; ?></p>
                      <span class="time-right">
                      <?php if(isset($x)){echo $x;} ?>
                      </span>


                      <?php }; ?>



                      <?php
                      if($_SESSION["tipi"] == 'Admin')
                      {
                      ?> 
                      <img src="assets/imagess/11.jpg" alt="Avatar" style="width:100%;float:right;">
                      <p style="float: right;"> <?php echo '<p style="color:black;text-align: start;float: right;">'.$message.'</p>';?> </p>
                      <span class="time-right" style="float: left;margin-top: 0px;">
                      <?php echo $x; ?>
                      </span>
                      <?php }; ?>

                    </div>

            <?php
                }

                if(isset($_POST["submit"]))
                {
                    $message = trim($_POST["message"]);
                    $username = $_SESSION["username"];
                    $data = date('Y-m-d H:i:s');
                    $_SESSION["login"] = $data;
                    $x = $_SESSION["login"];
                    

                    $sql_query = "select * from users where username = '$username';";
                    $result = mysqli_query($conn, $sql_query);

                    if(mysqli_num_rows($result) > 0 )
                    {

                    $row = mysqli_fetch_assoc($result);
                    $id =  $row['id'];


                    $query = "INSERT INTO message (message,username,user_id,date) 
                              VALUES ('$message', '$username','$id','$x');";
                    
                    
                    if (mysqli_query($conn,$query))
                    {
                        // echo '<h4 style="color:red;">'.$_SESSION["username"].'</h4>';
                        // echo '<p>'.$message.'</p>';

            ?>


                      <div class="container">
                      <?php

                        if($_SESSION["tipi"] == 'Perdorues')
                        {
                        ?> 

                      <img src="assets/imagess/11.jpg" alt="Avatar" style="width:100%;float: left;">

                      <p><?php echo '<p style="color:black;text-align: start;">'.$message.'</p>'; ?></p>
                      <span class="time-right">
                      <?php if(isset($x)){echo $x;} ?>
                      </span>


                      <?php }; ?>



                        <?php
                        if($_SESSION["tipi"] == 'Admin')
                        {
                        ?> 
                      <img src="assets/imagess/11.jpg" alt="Avatar" style="width:100%;float:right;">
                      <p style="float: right;"> <?php echo '<p style="color:black;text-align: start;float: right;">'.$message.'</p>';?> </p>
                      <span class="time-right" style="float: left;margin-top: 0px;">
                      <?php echo $x; ?>
                      </span>
                        <?php }; ?>

                    </div>


          <?php 

                    }
                }
            }

          ?>

    </div>

  <br>
    <form method="POST">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="message" placeholder="Type your message" class="col-2 msg"/>
        <!-- <input type="submit" name="submit" value="Send" class="btn"/>  -->
        <button type="submit" name="submit" class="col-4 btn"> Send </button>
    </form>
  </div>
</div>

</body>
</html> 
