<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$con=mysqli_connect('localhost','root','','twittin');
if(!$con)
{
    die("Connection not Successful");
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
    <title>Change password</title>


    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />

    <!--Style CSS-->
    <link rel="style.css"/>
    <style>
        img {
            border-radius: 10px;
        }
    </style>

</head>

<body>
    <form method="post" action="settings.php">
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
                    <input type="text" name="password" id="password" required />
                    <label for="password">
                        Password
                    </label>
                </div>
                <div class="input">
                    <input type="password" name="repassword" id="repassword" required />
                    <label for="repassword">
					Retype Password
				</label>
                </div>
            </div>
            <input type="submit" name="submit"value="Change password" class="button">
            </p>
        </div>
    </form>
    <center class="footer">© 2022 TwittIN</center>
</body>
</html>
                    <!-- php -->

<?php

if(isset($_POST['submit']))
{
    $email=$_SESSION["email"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];
    if($password==$repassword)
    {
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql="UPDATE user set password='$hash' where email='$email'";
        $res=mysqli_query($con,$sql);
        if($res)
        {
            echo
            " 
            <script>
            alert('Password Changed Sucessfully');
            window.location.replace('http://localhost/twittin/twittin/user/posts/index.php')
            </script>
            ";
            header("http://localhost/twittin/twittin/user/posts/index.php");
            
        }
    }
    else
    {
        echo
        "
        <script>
        alert('Password Mismatch');
        </script>";
        
    }
}

?>


                                <!-- CSS -->


<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

.container {
    width: 320px;
    height: 470px;
    background-image: url('pexels-prateek-katyal-2694434.jpg');
    background-size: cover;
    background-position: center;
    top: 50%;
    left: 50%;
    border-radius: 7px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    padding: 1rem;
    margin: 50px auto;
    background-color: gainsboro;
}

.container h2 {
    color: #0A66C3;
    font-size: 1.6rem;
    background-color: white;
}

.container h2 i {
    font-size: 1.8rem;
    padding-left: .1rem;
    background-color: white;
}

.text p {
    font-size: .8rem;
    padding-top: 0.3rem;
    background-color: white;
}

.email p {
    font-size: .8rem;
    padding-top: 0.3rem;
}

.input {
    position: relative;
    width: 100%;
    height: 50px;
    margin-bottom: 0.7em;
}

.your-input input {
    width: 100%;
    height: 45px;
    padding-top: 1.1rem;
    padding-left: 9px;
    outline: none;
    border: 1px solid #8c8c8c;
    border-radius: 3px;
    transition: .2s;
}

.your-input label {
    position: absolute;
    top: 30%;
    left: 10px;
    font-size: 1.1rem;
    color: #8c8c8c;
    transition: .2s;
}

.input input:focus~label,
.input input:valid~label {
    top: 10%;
    font-size: .8rem;
    color: #000;
}

.input input:focus {
    border-width: 2px;
    border-color: #0A66C3;
}

.forgot-password-link {
    width: 140px;
    padding: .2rem;
    text-align: center;
    text-decoration: none;
    font-weight: bolder;
    color: #0A66C3;
    transition: .3s;
    border-radius: 12px;
    background-color: white;
}

.button {
    height: 50px;
    /* background: #0A66C3; */
    background-color: #4158D0;
    background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
    outline: none;
    border: none;
    border-radius: 30px;
    color: #fff;
    font-size: 1rem;
    font-weight: bolder;
}

.join-link {
    text-decoration: none;
    font-weight: bolder;
    color: #0A66C3;
}

.login {
    font-size: 30px;
    margin-left: 90px;
    background-color: white;
}

body {
    /* background-color: #f3f2ef; */
    background-color: gainsboro;
}

.login1 {
    font-size: 30px;
    margin-left: 100px;
    background-color: white;
}

.container1 {
    width: 350px;
    height: 650px;
    /* background: #fff; */
    background-image: url('pexels-prateek-katyal-2694434.jpg');
    background-size: cover;
    background-position: center;
    top: 50%;
    left: 50%;
    border-radius: 7px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    padding: 1rem;
    margin: 25px auto;
    /* background-color: white; */
    background-color: gainsboro;
}

.image {
    width: 50%;
    height: auto;
}

.material-icons.md-light {
    color: rgba(255, 255, 255, 1);
}

.container2 {
    width: 320px;
    height: 400px;
    background-image: url('pexels-prateek-katyal-2694434.jpg');
    background-size: cover;
    background-position: center;
    top: 50%;
    left: 50%;
    border-radius: 7px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    padding: 1rem;
    border-style: ridge;
    margin: 80px auto;
    background-color: white;
}

.linklogin {
    text-decoration: none;
    font-weight: lighter;
}

.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 25px;
}


/* Hide default HTML checkbox */

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}


/* The slider */

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 15px;
    width: 15px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: #2196F3;
}

input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}


/* Rounded sliders */

.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}

.custom {
    display: flex;
}































</style>