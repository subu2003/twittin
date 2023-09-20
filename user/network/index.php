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
    window.location = "http://localhost/twittin/twittin//user/network/index.html";
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
                    <i class="material-icons headerOption__icon" onclick="redirect_logout()"> logout </i>
                    <h3>Logout</h3>
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="main" style="display:flex; justify-content: center; padding:20px">
            <div class=" middle__content ">
                <div class="right__content ">
                    <div style="padding:10px ">
                        <div>
                            <center>
                                <div style="margin-top:20px; background-color: #4158D0; background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); padding:5px; border-radius: 10px;margin:10px; display:flex; align-items: center;
                            justify-content: center; ">
                                    <h2 style="color:white">Connect with People</h2>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div style="display:flex;flex-direction:row; overflow-x:scroll; width:90%; padding:10px; ">
<?php

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

$sql = "SELECT name FROM user WHERE email != ("."'$email'".") LIMIT 0,5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $i=0;
    //$arrayRev = array_reverse(mysqli_fetch_array($result),FALSE);
  // output data of each row
  while(($row = (mysqli_fetch_array($result) )) && $i<5) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    $i++;
?>    
                        
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">  <?php echo $row["name"]; ?>  </p>
                                <button style="width:auto; border-radius:10px; border: 2px solid gray;font-size:12px; background-color:white ">follow</button>
                            </center>
                        </div>
<?php
    
    }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>


                        <!-- <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Lionel Messi</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Cristiano Ronaldo</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Neymar Jr</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Paulo Dybala</p>
                                <button style="width:auto; border-radius:10px; font-size:12px;border: 2px solid gray; background-color:white ">follow</button>
                            </center>
                        </div> -->


                    </div>
                </div>
            </div>
            <div class=" middle__content ">
                <div class="right__content ">
                    <div style="padding:10px ">
                        <div>
                            <center>
                                <div style="margin-top:20px; background-image: url('pexels-prateek-katyal-2694434.jpg');
                                background-size: cover;
                                background-position: center; padding:5px; border-radius: 10px;margin:10px; display:flex; align-items: center;
                            justify-content: center; ">
                                    <h2 style="color:white">People Based on your skills</h2>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div style="display:flex;flex-direction:row; overflow-x:scroll; width:90%; padding:10px; ">
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Sergio Roberto</p>
                                <button style="width:auto; border-radius:10px; border: 2px solid gray;font-size:12px; background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Lionel Messi</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Cristiano Ronaldo</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Neymar Jr</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Paulo Dybala</p>
                                <button style="width:auto; border-radius:10px; font-size:12px;border: 2px solid gray; background-color:white ">follow</button>
                            </center>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="main" style="display:flex; justify-content: center; padding:20px">
            <div class=" middle__content ">
                <div class="right__content ">
                    <div style="padding:10px ">
                        <div>
                            <center>
                                <div style="margin-top:20px; background-color: #4158D0; background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); padding:5px; border-radius: 10px;margin:10px; display:flex; align-items: center;
                            justify-content: center; ">
                                    <h2 style="color:white">Recruiters</h2>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div style="display:flex;flex-direction:row; overflow-x:scroll; width:90%; padding:10px; ">
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Sergio Roberto</p>
                                <button style="width:auto; border-radius:10px; border: 2px solid gray;font-size:12px; background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Lionel Messi</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Cristiano Ronaldo</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Neymar Jr</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Paulo Dybala</p>
                                <button style="width:auto; border-radius:10px; font-size:12px;border: 2px solid gray; background-color:white ">follow</button>
                            </center>
                        </div>


                    </div>
                </div>
            </div>
            <div class=" middle__content ">
                <div class="right__content ">
                    <div style="padding:10px ">
                        <div>
                            <center>
                                <div style="margin-top:20px; background-image: url('pexels-prateek-katyal-2694434.jpg');
                                background-size: cover;
                                background-position: center; padding:5px; border-radius: 10px;margin:10px; display:flex; align-items: center;
                            justify-content: center; ">
                                    <h2 style="color:white">Recruiters looking for your skills</h2>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div style="display:flex;flex-direction:row; overflow-x:scroll; width:90%; padding:10px; ">
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Sergio Roberto</p>
                                <button style="width:auto; border-radius:10px; border: 2px solid gray;font-size:12px; background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Lionel Messi</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Cristiano Ronaldo</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Neymar Jr</p>
                                <button style="width:auto; border-radius:10px; font-size:12px; border: 2px solid gray;background-color:white ">follow</button>
                            </center>
                        </div>
                        <div style="display:flex;flex-direction: column; margin:10px; ">
                            <center><img src="user.png " width="70% ">
                                <p style="font-size:12 ">Paulo Dybala</p>
                                <button style="width:auto; border-radius:10px; font-size:12px;border: 2px solid gray; background-color:white ">follow</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</body>

</html>