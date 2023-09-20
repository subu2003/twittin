<?php

session_start();
$email=  $_SESSION["email"];
echo $email;
?>

<!-- AAKASH R - 20BCE1003 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/8c363eddcf.js" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .self {
            color: black;
        }
        
        i:hover {
            color: black;
        }
        
        table.heading {
            width: 100%;
        }
        
        tr.heading {
            text-align: center;
        }
        
        td.heading {
            padding: 30px;
        }
        
        td {
            color: white;
        }
        
        .textfield {
            width: 300px;
            height: 100px;
            border-radius: 5px;
        }
        
        input[type=text].heading {
            width: 100%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-position: 10px 10px;
            padding: 12px 20px 12px 40px;
        }
        
        input[type=submit].heading {
            background-color: blue;
            border-radius: 100px;
            color: white;
            box-sizing: border-box;
            border-style: none;
            font-size: 16px;
            background-position: 10px 10px;
            padding: 15px 40px;
        }
        
        input[type=submit].heading:hover {
            cursor: pointer;
        }
        
        body {
            background-color: gainsboro;
        }
    </style>
    <script>
        function redirect_home() {
            window.location = "/twittin/twittin//user/posts/index.php";
        }

        function redirect_logout() {
            window.location = "/twittin/twittin//landing_page/index.html";
        }

        function redirect_profile() {
            window.location = "/twittin/twittin//user/profile/index.php";
        }

        function redirect_network() {
            window.location = "/twittin/twittin//user/network/index.php";
        }

        function redirect_edit() {
            window.location = "/twittin/twittin//user/edit_profile/profile.php";
        }
        function redirect_settings() {
            window.location = "http://localhost/twittin/twittin//user/settings.php";
        }
    </script>
</head>


<body>


<header>
    <center><div class="header" style="background-color:white; ">
        <div class="header__left">
            <img src="https://venturebeat.com/wp-content/uploads/2013/05/twitter-linkedin-fake-logo.jpg?w=1200&strip=all" alt="" />
            <div class="header__search">
                <i class="material-icons"> search </i>
                <input type="text" />
            </div>
        </div>

        <div class="header__right">
            <div class="headerOption">
                <i class="material-icons headerOption__icon " onclick="redirect_home()"> home </i>
                <h3>Home</h3>
            </div>
            <div class="headerOption">
                <i class="material-icons headerOption__icon" onclick="redirect_network()"> supervisor_account </i>
                <h3>Network and Recruiters</h3>
            </div>
            <div class="headerOption">
                <i class="material-icons headerOption__icon"> chat </i>
                <h3>Texts</h3>
            </div>
            <div class="headerOption">
                <i class="material-icons headerOption__icon" onclick="redirect_profile()"> account_circle </i>
                <h3>Profile</h3>
            </div>
            <div class="headerOption">
                <i class="material-icons headerOption__icon" onclick="redirect_edit()"> edit </i>
                <h3>Edit</h3>
            </div>
            <div class="headerOption">
                <span class="material-icons"onclick="redirect_settings()">settings</span>
                    <!-- <i class="m" onclick="redirect_settings()"> settings </i> -->
                    <h3>Settings</h3>
                </div>
            <div class="headerOption">
                <i class="material-icons headerOption__icon" onclick="redirect_logout()"> logout </i>
                <h3>Logout</h3>
            </div>
            

        </div>
    </div></center>
</header>


    <h2 class="pageTitle" style="background-image: url('pexels-prateek-katyal-2694434.jpg');
    background-size: cover;
    background-position: center;">Profile Details</h2>

    <form name="form1" action=" " method="post">
        <table class="data" style="background-image: url('pexels-prateek-katyal-2694434.jpg');
        background-size: cover;
        background-position: center;">
            <tr class="details">
                <td>
                    <p id="displayName"> Name : </p>
                </td>
            </tr>
            <tr>
                <td><input id="un" type="text" name="name"><br> </tr>
            <tr class="details">
                <td>Profile Picture :</td>
            </tr>
            <tr class="details">
                <td>
                    <label for="profilePic">Upload Picture</label>
                    <input type="file" id="profilePic" name="img" accept="image/*">
                </td>
            </tr>
            <tr class="details">
                <td>
                    <p id="displayName"> Short Summary : </p>
                </td>
            </tr>
            <tr>
                <td><input id="uns" type="text" name="summary"><br> </tr>
            <tr class="details">
                <td>Resume :</td>
            </tr>
            <tr class="details">
                <td>
                    <label for="Resume">Upload Resume</label>
                    <input type="file" id="Resume" name="resume" accept="application/pdf">
                </td>
            </tr>
            <tr class="details">
                <td>About Yourself :</td>
            </tr>
            <tr class="details">
                <td><input type="text" name="about"><br>
                </td>
            </tr>
            <tr class="details">
                <td>Education :</td>
            </tr>
            <tr class="details">
                <td><input type="text" name="education"><br></td>
            </tr>
            <tr class="details">
                <td> Skills :</td>
            </tr>
            <tr class="details">
                <td>
                    <center>
                        <div class="select select--multiple">
                            <select name="skills[]" id="skills" multiple>
                                <option value="Web Dev">Web Dev</option>
                                <option value="App Dev">App Dev</option>
                                <option value="Cloud Engineering">Cloud Engineering</option>
                                <option value="Infrastructure">Infrastructure</option>
                                <option value="NLP">NLP</option>
                                <option value="Python">Python</option>
                                <option value="Java">Java</option>
                                <option value="Machine Learning">Machine Learning</option>
                            </select>
                        </div>
                    </center>
                </td>
            </tr>
            <tr class="details">
                <td> Experience : </td>
            </tr>
            <tr class="details">
                <td><input type="text" name="experience"><br></td>
            </tr>
            <tr class="details">
                <td>Interests : </td>
            </tr>
            <tr class="details">
                <td><input type="text" name="interests"><br></td>
            </tr>
            <tr class="details">
                <td>
                    <input style="color:white; background-color: #4158D0; background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); cursor:pointer; font-family: sans-serif; font-size: 1.25rem; border-style:none; border-radius:50px ; width:40%"
                        type="submit" name="createProfile" value="Done">
                </td>
            </tr>
        </table>
    </form>



    <script>
        function validateName() {


            var choice = confirm("Confirm details");
            if (choice) {
                var name = document.forms['form1']['name'].value;
                if (name == null || name == "") {
                    alert("Please Enter Your Name");
                } else {
                    var updateName = "Hello " + name + " !";
                    document.getElementById("displayName").innerHTML = "HELLO";
                    document.write(updateName);
                }
            }
        }
    </script>


</body>



<?php


if(isset($_POST["createProfile"]))
{
    //$email =    $_SESSION['email'];    //"aakashrajan0202@gmail.com";
    $name = $_POST["name"];
    $about = $_POST["about"];
    $summary = $_POST["summary"];
    $education = $_POST["education"];
    $skills = array() ;
    $experience = $_POST["experience"];
    $interests = $_POST["interests"];

    // echo "<script>alert( hello ".$email.");</script>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "twittin";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

     $sql = "UPDATE user SET name=" . "'$name'".", summary="."'$summary'".", about="."'$about'" .", interest="."'$interests'". ", education="."'$education'" .", experience="."'$experience'"." WHERE email="."'$email'";
    // $sql = "UPDATE user SET about = "."'$about'"." WHERE email = 'aakashrajan0202@gmail.com'";
    if (mysqli_query($conn, $sql)) {
    echo "<script>alert( 'Profile Successfully Updated! ' );</script>";
    echo "<script> window.location.replace('http://localhost/twittin/twittin//user/profile/index.php') </script>";
    } else {
    echo "Error updating record: " . mysqli_error($conn);
    }



    if(isset($_POST["skills"])){
    $skills = filter_input(INPUT_POST,'skills',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
    if($skills)
    {
        foreach($skills as $skill) 
        {
            $sql1 = "SELECT * FROM user_skills where email = "."'$email'"." and skills = "."'$skill'";
            $result1 = mysqli_query($conn, $sql1);
            if(mysqli_num_rows($result1) == 0)
            {
                $sql2 = "INSERT INTO user_skills VALUES ("."'$email'".", "."'$skill'".")";
                mysqli_query($conn,$sql2);
                echo "Inserted skill : ".$skill;
            }
        }
    }
    }
    
    // echo $name."   ".$about."   ".$summary."    ";
    
    mysqli_close($conn);
}

?>


</html>