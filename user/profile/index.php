<?php

session_start();
$email=  $_SESSION["email"];
// echo $email;
?>


<html lang="en">
<!-- srinath ns 20BCE1074 -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <title>TwittIN-Professional Networking Website</title>
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
    </style>
    <script>
        function createpost() {
            var a = document.getElementById("poster").value;
            if (a !== "" && a !== " " && a !== null) {
                var a1 = "<div class='post '><div class='post__header '><img src='user.png ' width='10% '><div class='post__info '><h2>Srinath NS</h2><p>Student at Vellore Institute of Technology | Posted 10h before</p></div></div>";
                var b1 = " <div class='post__body '> <p>" + a + "</p> </div>"
                var c1 = "<div class='feed__inputOptions '><div class='inputOption '><i style=' margin-right:10px; ' class='material-icons '> thumb_up </i><p>Like</p></div><div class='inputOption '><i style='margin-right:10px; ' class='material-icons '> comment </i><p>Comment</p></div><div class='inputOption '><i style=' margin-right:10px; ' class='material-icons '> share </i><p> Share</p></div><div class='inputOption '><i style=' margin-right:10px; ' class='material-icons '> send </i><p> Send</p></div></div></div>"
                var d1 = document.getElementById("main_posts").innerHTML
                document.getElementById("main_posts").innerHTML = (a1 + b1 + c1) + d1;
            } else {
                alert("Kindly type some content to post :)");
            }
        }
 

        function redirect_home() {
            window.location = "http://localhost/twittin/twittin//user/posts/index.php";
        }

        function redirect_logout() {
            window.location = "http://localhost/twittin/twittin//landing_page/index.html";
        }

        function redirect_profile() {
            window.location = "http://localhost/twittin/twittin//user/profile/index.php";
        }

        function redirect_network() {
            window.location = "http://localhost/twittin/twittin//user/network/index.php";
        }

        function redirect_edit() {
            window.location = "http://localhost/twittin/twittin//user/edit_profile/profile.php";
        }
        function redirect_settings() {
            window.location = "http://localhost/twittin/twittin//user/settings.php";
        }


    </script>
</head>

<body>
    <header>
        <div class="header" style="background-color:white; ">
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
                    <i class="material-icons headerOption__icon" onclick="redirect_network()"> logout </i>
                    <h3>Logout</h3>
                </div>
            </div>
        </div>
    </header>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "twittin";

//$email = "aakashrajan0202@gmail.com";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user WHERE email="."'$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  ?>

    <section>
        <div class="main" style="display:flex; justify-content: center; padding:20px">
            <div class=" middle__content ">
                <div class="left__content">
                    <div style="padding:10px ">
                        <center>
                            <div style="margin-top:20px; background-image: url('pexels-prateek-katyal-2694434.jpg');
                        background-size: cover;
                        background-position: center; padding:5px; border-radius: 10px; margin:10px; width: 50%; display:flex; justify-content: center; align-items: center;">

                                <img src="user.png " width="20%; ">
                                <h1 style="color:white; font-size: 40px">  <?php echo $row["name"]; ?>     </h1>
                            </div>
                        </center>
                        <div style="margin-top:20px ">
                            <div style="display:flex; justify-content:center; flex-direction:row;">
                                <h2 style="color:black "><b>  <?php echo $row["name"]; ?>  </b> | <span style="color:green">User</span> | </h2>
                                <div style="display:flex; align-items:center; justify-content: center;">
                                    <span class="material-icons">
                                        location_on
                                        </span>
                                    <!-- <p class="self " style="font-size:15px;align-items: center; ">
                                        Warsaw, Mazowieckie, Poland </p> -->

                                </div>
                            </div>
                            <center>
                                <p>  <?php  echo $row["summary"]; ?>   </p>
                            </center>
                            <center>
                                <a href="Automated Elecvator System.pdf" download="Resume">
                                    Resume
                                </a>
                            </center>
                            <div class="box">
                                <div class="box-sm red"></div>
                                <div class="box-sm orange"></div>
                                <div class="box-sm yellow "></div>
                                <div class="box-sm green "></div>
                                <div class="box-sm blue "></div>
                                <div class="box-sm purple"></div>
                            </div>
                            <div>
                                <center>
                                    <h2>About</h2>
                                </center>
                                <p style="padding:10px; line-height: 1.5rem;">
                                <?php echo $row["about"]; ?>
                                </p>
                            </div>
                            <div class="box">
                                <div class="box-sm red"></div>
                                <div class="box-sm orange"></div>
                                <div class="box-sm yellow "></div>
                                <div class="box-sm green "></div>
                                <div class="box-sm blue "></div>
                                <div class="box-sm purple"></div>
                            </div>

                            <div>
                                <center>
                                    <h2>Education</h2>
                                </center>
                                <p style="padding:5px;">
                                    <ul>
                                        <li><?php echo $row["education"]; ?></li>
                                        <!-- <li><b>College</b>: Sergio Roberto Memorial College, Gainsville, Georgia</li> -->
                                    </ul>
                                </p>
                            </div>
                            <div class="box">
                                <div class="box-sm red"></div>
                                <div class="box-sm orange"></div>
                                <div class="box-sm yellow "></div>
                                <div class="box-sm green "></div>
                                <div class="box-sm blue "></div>
                                <div class="box-sm purple"></div>
                            </div>

                            <!-- <div>
                                <center>
                                    <h2>Skills</h2>
                                </center>
                                <p style="padding:5px;">
                                    <ul>
                                        <li><b>Web Development</b>: HTML,CSS,JS,MYSQL,PHP,AJAX,JQUERY</li>
                                        <li><b>App Development</b>: Flutter,DART,React Native</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="box">
                                <div class="box-sm red"></div>
                                <div class="box-sm orange"></div>
                                <div class="box-sm yellow "></div>
                                <div class="box-sm green "></div>
                                <div class="box-sm blue "></div>
                                <div class="box-sm purple"></div>
                            </div> -->

                            <div>
                                <center>
                                    <h2>Experience</h2>
                                </center>
                                <p style="padding:5px;">
                                    <ul>
                                        <li><b></b><?php echo $row["experience"]; ?></li>
                                        <!-- <li><b>Amazon</b>: Cloud Engineer, 2 years</li> -->
                                    </ul>
                                </p>
                            </div>
                            <div class="box">
                                <div class="box-sm red"></div>
                                <div class="box-sm orange"></div>
                                <div class="box-sm yellow "></div>
                                <div class="box-sm green "></div>
                                <div class="box-sm blue "></div>
                                <div class="box-sm purple"></div>
                            </div>

                            <div>
                                <center>
                                    <h2>Interests</h2>
                                </center>
                                <p style="padding:5px;">
                                    <ul>
                                    <?php 
                                    
                                    $interests = explode(",", $row["interest"]);
                                    for($i=0;$i<count($interests);$i++)
                                    {
                                        echo "<li>".$interests[$i]."</li>";
                                    }
                                    
                                    ?>
                                        
                                    </ul>
                                </p>
                            </div>
                            <div class="box">
                                <div class="box-sm red"></div>
                                <div class="box-sm orange"></div>
                                <div class="box-sm yellow "></div>
                                <div class="box-sm green "></div>
                                <div class="box-sm blue "></div>
                                <div class="box-sm purple"></div>
                            </div>

                            <div>
                                <center>
                                    <h2>Skills</h2>
                                </center>
                                <p style="padding:5px;">
                                    <ul>
                                        

<?php

}
} else {
  echo "0 results";
}

$sql = "SELECT skills FROM user_skills WHERE email="."'$email'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<li><b>".$row["skills"]."</b></li>";
    }
}

?>


                            <!-- 
                                <div>
                                <center>
                                    <h2>Skills</h2>
                                </center>
                                <p style="padding:5px;">
                                    <ul>
                                        <li><b>Web Development</b>: HTML,CSS,JS,MYSQL,PHP,AJAX,JQUERY</li>
                                        <li><b>App Development</b>: Flutter,DART,React Native</li>

                                        -->
                                    </ul>
                                </p>
                            </div>
                            <div class="box">
                                <div class="box-sm red"></div>
                                <div class="box-sm orange"></div>
                                <div class="box-sm yellow "></div>
                                <div class="box-sm green "></div>
                                <div class="box-sm blue "></div>
                                <div class="box-sm purple"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php

mysqli_close($conn);
?>
</body>

</html>