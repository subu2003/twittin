<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
function senduseremail($con,$email,$id){
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
 $mail->Subject="Verify Your mail id";
 $html="http://127.0.0.1/twittin/twittin/login/verifyuser.php?id=".$id;
 $mail->Body="Your verification link is ".$html;
 $mail->send();
 echo
 "
 <script>
 alert('Please verify your email');
 document.location.href='login.php';
 </script>
 ";
}
 function sendrecruiteremail($con,$email,$id1){
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
    $mail->Subject="Verify Your mail id";
    $html="http://127.0.0.1/twittin/twittin/login/verifyrecruiter.php?id1=".$id1;
    $mail->Body="Your verification link is ".$html;
    $mail->send();
    echo
    "
    <script>
    alert('Please verify your email');
    document.location.href='login.php';
    </script>
    ";
   //  else
   //  {
   //      echo
   //      "
   //      <script>
   //      alert('Email was not send successfully');
   //      document.location.href='forgot.php';
   //      </script>
   //      "; 
   //  }
   // }
   }
?>