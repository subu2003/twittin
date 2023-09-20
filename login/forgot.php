<?php
include("database.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Web tutorials" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="John Doe" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password</title>


    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />

    <!--Style CSS-->
    <link rel="stylesheet" href="style.css" />
    <style>
        img {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <form action="forgot.php" method="POST">
    <div class="container2" style="background-color:white">
        <center><img src="https://venturebeat.com/wp-content/uploads/2013/05/twitter-linkedin-fake-logo.jpg?w=1200&strip=all" alt="logo" class="image"></center>
        <div class="text">
            <h3 style="color:black;text-align:center;color:white;"><b>Reset your password </b></h3>
        </div>
        <div class="your-input">
            <div class="input">
                <input type="text" name="email" id="email" required>
                <label for="email">Email</label>
            </div>
        </div>
        <input type="submit" name="submit" value="Reset Password" class="button">
        <center>
            <h4 class="linklogin" style="color:white" >Already Registered? <a href="login.php" style="color:white">Login</a></h4>
        </center>
    </div>
    </form>
    <center class="footer"> © 2022 TwittIN</center>
</body>

</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if(isset($_POST["submit"]))
{

    $email=$_POST["email"];

$sql="SELECT email from user where email='$email'";
$res=mysqli_query($con,$sql);
$c=mysqli_num_rows($res);
 if($c>0)
 {
    $rand = rand(1, 1000000);
    $new_password=password_hash($rand,PASSWORD_DEFAULT);	
	mysqli_query($con,"update user set password='$new_password' where email='$email'");
 $mail=new PHPMailer(true);
 $mail->isSMTP(); 
 $mail->SMTPAuth = true;
 $mail->Host="smtp.gmail.com";
 $mail->Port=587;
 $mail->SMTPSecure="tls";
 $mail->SMTPAuth=true;
 $mail->Username="twittiniwp@gmail.com";
 $mail->Password='qtbvlxjgxwycgcpu';
 $mail->setFrom("twittiniwp@gmail.com");
 $mail->addAddress($email);
 $mail->isHTML(true);
 $mail->Subject="Reset Password From Twittin";
 $mail->Body="Your new Password for Login is "."<b>".$rand."</b>".".";
 $mail->send();
 echo
 "
 <script>
 alert('Password Reset Successful,Check Your mail');
 document.location.href='login.php';
 </script>
 ";
 }
 else
 {
        //recruiter
        $sql="SELECT email from recruiter where email='$email'";
        $res=mysqli_query($con,$sql);
        $c=mysqli_num_rows($res);
         if($c>0)
         {
            $rand = rand(1, 1000000);
            $new_password=password_hash($rand,PASSWORD_DEFAULT);	
            mysqli_query($con,"update recruiter set password='$new_password' where email='$email'");
         $mail=new PHPMailer(true);
         $mail->isSMTP(); 
         $mail->SMTPAuth = true;
         $mail->Host="smtp.gmail.com";
         $mail->Port=587;
         $mail->SMTPSecure="tls";
         $mail->SMTPAuth=true;
         $mail->Username="twittiniwp@gmail.com";
         $mail->Password='qtbvlxjgxwycgcpu';
         $mail->setFrom("twittiniwp@gmail.com");
         $mail->addAddress($email);
         $mail->isHTML(true);
         $mail->Subject="Reset Password From Twittin";
         $mail->Body="Your new Password for Login is "."<b>".$rand."</b>".".";
         $mail->send();
         echo
         "
         <script>
         alert('Password Reset Successful,Check Your mail');
         document.location.href='login.php';
         </script>
         ";
         }
         else
         {
            
                 echo
                "
                <script>
                alert('Email does not exists');
                document.location.href='forgot.php';
                </script>"; 

         } 
}
}
?>