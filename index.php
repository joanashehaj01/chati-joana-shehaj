<!DOCTYPE html>
<html>
<head>
    <title> Chat </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/imagess/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fontss/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/countdowntime/flipclock.css">
    <link rel="stylesheet" type="text/css" href="assets/csss/util.css">
    <link rel="stylesheet" type="text/css" href="assets/csss/main.css">

</head>
<body>
    
    
    <div class="bg-img1 size1 overlay1 p-b-35 p-l-15 p-r-15" style="background-image: url('assets/imagess/66.jpg');">

        <br>
        <!-- Social Media-->
        <div class="flex-w flex-c-m p-b-35">
            <a href="https://www.facebook.com/joanashehaj62" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5" title="Facebook">
                <i class="fa fa-facebook"></i>
            </a>

            <a href="https://www.instagram.com/joanashehaj62/?hl=en" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5" title="Instagram">
                <i class="fa fa-instagram"></i>
            </a>

            <a href="https://api.whatsapp.com/send?phone=+355698246776" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5" title="whatsapp">
                <i class="fa fa-whatsapp"></i>
            </a>


            <a href="mailto:joanashehaj01@gmail.com" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5" title="E-mail">
                <i class="fa fa-envelope"></i>
            </a>


            <a href="chat.php" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5" title="Chat Profile">
                <i class="fa fa-user"></i>
            </a>



        </div>


        <div class="flex-col-c p-t-160 p-b-215 respon1">
            <div class="wrappic1">
                <h3 class="l1-txt1 txt-center p-t-30 p-b-100">
                  CHAT Coming Soon
                </h3>
            </div>


         


<!--Duhet patur parasysh se stilizimi nuk perfshihet ne tagun e php <?php ?>, pra nqs do te besh stilizim mbylle dhe hape aty ku do ti ta besh tagun per php -->
<?php 

session_start();

if(isset($_SESSION["username"]))
{
?>

    <div>
        <span style="background-color: #0d1629; padding: 14px 25px; text-align: left; text-decoration: none;display: inline-block; border-radius: 10px;color: white;">
           <?php    echo 'Hello'." ".$_SESSION["username"]; ?>
           <a href="logout.php" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5" title="LogOut" style="margin-top: -28px;
    margin-left: 81px;">
             <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
        </span>

    </div>
 
<?php    
}
else
{?>
    <div>
        <span style="background-color: #0d1629; padding: 14px 25px; text-align: center; text-decoration: none;display: inline-block; border-radius: 10px;">
            <a href="login.php" style="color: white;">
               Login
            </a>
        </span>


        <span style="background-color: #0d1629; padding: 14px 25px; text-align: center; text-decoration: none;display: inline-block; border-radius: 10px;">
            <a href="registration.php" style="color: white;">
                Register
            </a>
        </span>    
    </div>


<?php }
?>
            <div class="cd100"></div>

        </div>

        <div class="flex-w flex-c-m p-b-35" style="color: white;">
            <h5>Developed By : <a href="mailto:joanashehaj01@gmail.com" style="color: white;">Joana Shehaj</a> </h5>
        </div>
    </div>



    
<script src="assets/vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/select2/select2.min.js"></script>
<script src="assets/vendors/countdowntime/flipclock.min.js"></script>
<script src="assets/vendors/countdowntime/moment.min.js"></script>
<script src="assets/vendors/countdowntime/moment-timezone.min.js"></script>
<script src="assets/vendors/countdowntime/moment-timezone-with-data.min.js"></script>
<script src="assets/vendors/countdowntime/countdowntime.js"></script>
    <script>
        $('.cd100').countdown100({
            /*Set Endtime here*/
            /*Endtime must be > current time*/
            endtimeYear: 0,
            endtimeMonth: 0,
            endtimeDate: 35,
            endtimeHours: 18,
            endtimeMinutes: 0,
            endtimeSeconds: 0,
            timeZone: "" 
            // ex:  timeZone: "America/New_York"
            //go to " http://momentjs.com/timezone/ " to get timezone
        });
        
    </script>
    <script src="assets/vendors/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="assets/jss/main.js"></script>

</body>
</html>