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
            window.location = "/twittin/twittin/recruiter/posts/index.html";
        }

        function redirect_logout() {
            window.location = "/twittin/twittin/landing_page/index.html";
        }

        function redirect_profile() {
            window.location = "/twittin/twittin/recruiter/profile/index.html";
        }

        function redirect_network() {
            window.location = "/twittin/twittin/recruiter/network/index.html";
        }

        function redirect_edit() {
            window.location = "/twittin/twittin/recruiter/edit_profile/profile.html";
        }
        function redirect_settings() {
            window.location = "http://localhost/twittin/twittin//recruiter/settings.php";
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
                    <h3>Network and Profiles</h3>
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
                <div class="left__content">
                    <div style="padding:10px ">
                        <center>
                            <div style="margin-top:20px; background-image: url('pexels-prateek-katyal-2694434.jpg');
                        background-size: cover;
                        background-position: center; padding:5px; border-radius: 10px; margin:10px; width: 50%; display:flex; justify-content: center; align-items: center;">

                                <img src="user.png " width="20%; ">
                                <h1 style="color:white; font-size: 40px">Julian Alvarez | Google</h1>
                            </div>
                        </center>
                        <div style="margin-top:20px ">
                            <div style="display:flex; justify-content:center; flex-direction:row;">
                                <h2 style="color:black "><b>Julian Alvarez</b> | <span style="color:blue">Recruiter</span> | </h2>
                                <div style="display:flex; align-items:center; justify-content: center;">
                                    <span class="material-icons">
                                        location_on
                                        </span>
                                    <p class="self " style="font-size:15px;align-items: center; ">
                                        Warsaw, Mazowieckie, Poland </p>

                                </div>
                            </div>
                            <center>
                                <p>Recruiter @ Google | YouTuber(200k+) | Ex-Media.net, Amazon | JGEC</p>

                                    <p>Looking forward for a MERN stack developer with a tinge of CI/CD knowledge</p>
                            </center>
                            <center>
                                <a href="Automated Elecvator System.pdf" download="Resume">
                                    Job Description
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
                                    <h2>Skills Im looking for</h2>
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
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

</html>