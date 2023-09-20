<?php
include("database.inc.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email=$_POST["email"];
    $password=$_POST["password"];
    $usql="SELECT email from user WHERE email='$email'";
    $ures=mysqli_query($con,$usql);
    $rsql="SELECT email from recruiter WHERE email='$email'";
    $rres=mysqli_query($con,$rsql);
    if(mysqli_num_rows($ures)==1)
    {
        $usql="SELECT password from user where email='$email'";
        $ures=mysqli_query($con,$usql);
        $ures=mysqli_fetch_assoc($ures);
        $verify = password_verify($password,$ures["password"]);
        if($verify)
        {
            $sql="SELECT status FROM user where email='$email'";
            $s=mysqli_query($con,$sql);
            $s=mysqli_fetch_assoc($s);
            if($s['status']==1)
            {
            $_SESSION['email']=$email;
            header("location:/twittin/twittin/user/posts/index.php");
            }
            else
            {
                echo
                "
                <script>
                alert('Account Not Verified');
                </script>
                ";
                
            }
        }
        else{
            echo "<script>alert('Invalid Login');</script>";
        }
    }
    if(mysqli_num_rows($rres)==1)
    {
        $rsql="SELECT password from recruiter where email='$email'";
        $rres=mysqli_query($con,$rsql);
        $rres=mysqli_fetch_assoc($rres);
        $verify = password_verify($password,$rres["password"]);
        if($verify)
        {
            $sql="SELECT status FROM recruiter where email='$email'";
            $s=mysqli_query($con,$sql);
            $s=mysqli_fetch_assoc($s);
            if($s['status']==1)
            {
            $_SESSION['email']=$email;
            header("location:/twittin/twittin/recruiter/posts/index.php");
            }
            else
            {
                echo
                "
                <script>
                alert('Account Not Verified');
                document.location.href='login.php';
                </script>
                ";
            }
        }
        else{
            echo "<script>alert('Invalid Login');</script>";
        }
    }
    
    
}
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
    <title>Login-Twittin</title>


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
    <form method="post" action="">
        <div class="container" style="background-color:white">
            <center><img src="https://venturebeat.com/wp-content/uploads/2013/05/twitter-linkedin-fake-logo.jpg?w=1200&strip=all" alt="logo" class="image"></center>
            <div class="text">
                <center>
                    <h3 style="color:white"><b>Login</b></h3>
                    <br>
                </center>
            </div>
            <div class="your-input">
                <!-- <div class="input">
                    <input type="email" name="email" id="email" required />
                    <label for="email">Email</label>
                </div> -->
                <div class="input">
                    <input type="text" name="email" id="email" required />
                    <label for="email">
                        Email
                    </label>
                </div>
                <div class="input">
                    <input type="password" name="password" id="password" required />
                    <label for="password">
					Password
				</label>
                </div>
            </div>
            <center>
                <a href="forgot.php" style="color:white">
			Forgot Password?
		</a></center>
            <input type="submit" name="submit"value="Login" class="button">
            <center>
                <a href="signup.php" class="links" style="color:white">
				I'm new to this site!
			</a>
            </center>
            </p>
        </div>
    </form>
    <center class="footer">© 2022 TwittIN</center>
</body>
</html>