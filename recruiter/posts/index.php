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
            window.location = "file:///D:/twittin//recruiter/posts/index.html";
        }

        function redirect_logout() {
            window.location = "file:///D:/twittin//landing_page/index.html";
        }

        function redirect_profile() {
            window.location = "file:///D:/twittin//recruiter/profile/index.html";
        }

        function redirect_network() {
            window.location = "file:///D:/twittin//recruiter/network/index.html";
        }

        function redirect_edit() {
            window.location = "file:///D:/twittin//recruiter/edit_profile/profile.html";
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
            <div style="display:flex; flex-direction:column; width:20%;">
                <div class="left__content">
                    <div style="padding:10px ">
                        <div style="margin-top:20px; background-image: url('pexels-prateek-katyal-2694434.jpg');
                        background-size: cover;
                        background-position: center; padding:5px; border-radius: 10px; margin:10px;">
                            <center><img src="user.png " width="30%; "></center>
                        </div>
                        <div style="margin-top:20px ">
                            <center>
                                <p style="color:black "><b>Julian Alvarez</b> | <span style="color:blue">Recruiter</span></p>
                                <p class="self " style="font-size:15px ">Recruiter @ Google | YouTuber(200k+) | Ex-Media.net, Amazon | JGEC</p>
                                <p class="self " style="font-size:12px; ">Looking forward for a MERN stack developer with a tinge of CI/CD knowledge</p>
                                <p class="self " style="font-size:10px; ">Warsaw, Mazowieckie, Poland </p>
                            </center>
                        </div>

                    </div>

                </div>
                <div class="left__content ">
                    <div style="padding:10px ">
                        <div>
                            <center>
                                <div style="margin-top:20px; background-image: url('pexels-prateek-katyal-2694434.jpg');
                                background-size: cover;
                                background-position: center; padding:5px; border-radius: 10px;margin:10px; display:flex; align-items: center;
                                justify-content: center; ">
                                    <div style="display:flex; align-items: center;
                                justify-content: center;">
                                        <span class="material-icons md-light" style="width:50px">
                                    settings_suggest
                                    </span>
                                        <h4 style="color:white">Profile Recommendations</h4>

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
                    <div class="post " style="display:flex; justify-content: left; align-items: center; ">
                        <img src="user.png " width="50px " style="margin-right:20px; ">
                        <button id="myBtn " style="height:40px; border-radius:20px; border:0px; background-color: #4158D0; background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); font-weight: bold; padding:10px; cursor: pointer
                                ;; ">Post your Job Openings!!</button>
                    </div>
                    <div id="myModal " class="modal ">

                        
                        <div class="modal-content ">
                            <span class="close ">&times;</span>
                            <div class="post ">
                                <div class=" " style="margin: 10; ">
                                    <h4>Make new Post</h4>
                                </div>
                                <div style="padding: 10px; ">
                                    <textarea id="poster" rows="5 " cols="170 " style="resize:vertical; border-radius:10px; padding:10px; font-family: sans-serif; "></textarea>
                                </div>
                                <div class="feed__inputOptions " onclick="createpost() ">
                                    <div class="inputOption ">
                                        <i style="margin-right:10px; " class="material-icons "> share </i>
                                        <p> Post</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal ");

                        // Get the button that opens the modal
                        var btn = document.getElementById("myBtn ");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close ")[0];

                        // When the user clicks the button, open the modal 
                        btn.onclick = function() {
                            modal.style.display = "block ";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none ";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none ";
                            }
                        }
                    </script>
                    <div class="scrollable ">
                        <div id="main_posts">
                            <div class="post ">
                                <div class="post__header ">
                                    <img src="user.png " width="10% ">
                                    <div class="post__info ">
                                        <h2>Srinath NS</h2>
                                        <p>Student at Vellore Institute of Technology | Posted 10h before</p>
                                    </div>
                                </div>

                                <div class="post__body ">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                        amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </p>
                                    
                                </div>

                                <div class="feed__inputOptions ">
                                    <div class="inputOption ">
                                        <i style="margin-right:10px; " class="material-icons "> thumb_up </i>
                                        <p>Like</p>
                                    </div>
                                    <div class="inputOption ">
                                        <i style="margin-right:10px; " class="material-icons "> comment </i>
                                        <p>Comment</p>
                                    </div>
                                    <div class="inputOption ">
                                        <i style="margin-right:10px; " class="material-icons "> share </i>
                                        <p> Share</p>
                                    </div>
                                    <div class="inputOption ">
                                        <i style="margin-right:10px; " class="material-icons "> send </i>
                                        <p> Send</p>
                                    </div>
                                </div>
                            </div>

                            <div class="post ">
                                <div class="post__header ">
                                    <img src="user.png " width="10% ">
                                    <div class="post__info ">
                                        <h2>Srinath NS</h2>
                                        <p>Student at Vellore Institute of Technology | Posted 10h before</p>
                                    </div>
                                </div>

                                <div class="post__body ">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                        amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </p>
                                    
                                </div>

                                <div class="feed__inputOptions ">
                                    <div class="inputOption ">
                                        <i style=" margin-right:10px; " class="material-icons "> thumb_up </i>
                                        <p>Like</p>
                                    </div>
                                    <div class="inputOption ">
                                        <i style="margin-right:10px; " class="material-icons "> comment </i>
                                        <p>Comment</p>
                                    </div>
                                    <div class="inputOption ">
                                        <i style=" margin-right:10px; " class="material-icons "> share </i>
                                        <p> Share</p>
                                    </div>
                                    <div class="inputOption ">
                                        <i style=" margin-right:10px; " class="material-icons "> send </i>
                                        <p> Send</p>
                                    </div>
                                </div>
                            </div>

                            <div class="post ">
                                <div class="post__header ">
                                    <img src="user.png " width="10% ">
                                    <div class="post__info ">
                                        <h2>Srinath NS</h2>
                                        <p>Student at Vellore Institute of Technology | Posted 10h before</p>
                                    </div>
                                </div>

                                <div class="post__body ">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                        amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </p>
                                    
                                </div>

                                <div class="feed__inputOptions ">
                                    <div class="inputOption ">
                                        <i style="margin-right:10px; " class="material-icons "> thumb_up </i>
                                        <p>Like</p>
                                    </div>
                                    <div class="inputOption ">
                                        <i style="margin-right:10px; " class="material-icons "> comment </i>
                                        <p>Comment</p>
                                    </div>
                                    <div class="inputOption ">
                                        <i style="margin-right:10px; " class="material-icons "> share </i>
                                        <p> Share</p>
                                    </div>
                                    <div class="inputOption ">
                                        <i style="margin-right:10px; " class="material-icons "> send </i>
                                        <p> Send</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width:20%; display:flex; flex-direction: column; ">
                    <div class="right__content ">
                        <div style="padding:10px ">
                            <div>
                                <center>
                                    <div style="margin-top:20px; background-color: #4158D0; background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); padding:5px; border-radius: 10px;margin:10px; display:flex; align-items: center;
                                justify-content: center; ">
                                        <img style="margin:15px; " src="newspaper-folded.png " alt=" " width=30px>
                                        <h4>TwittIN News</h4>
                                    </div>
                                </center>
                            </div>
                            <div class="news " style="margin-top:10px; ">
                                <ul>
                                    <a href="https:/www.google.com ">
                                        <li>Big Hikes in IT set to fade out</li>
                                    </a>
                                    <p class="news_para ">9 hours ago | 8642 readers</p>
                                    <a href="https:/www.google.com ">
                                        <li>RobinHood cuts staff by 23%</li>
                                    </a>
                                    <p class="news_para ">9 hours ago | 8642 readers</p>
                                    <a href="https:/www.google.com ">
                                        <li>Uber rides out of Zomato</li>
                                    </a>
                                    <p class="news_para ">9 hours ago | 8642 readers</p>
                                    <a href="https:/www.google.com ">
                                        <li>Discounts galore for car buyers</li>
                                    </a>
                                    <p class="news_para ">9 hours ago | 8642 readers</p>
                                    <a href="https:/www.google.com ">
                                        <li>MonkeyPox: India Updates</li>
                                    </a>
                                    <p class="news_para ">9 hours ago | 8642 readers</p>
                                    <a href="https:/www.google.com ">
                                        <li>Big Hikes in IT set to fade out</li>
                                    </a>
                                    <p class="news_para ">9 hours ago | 8642 readers</p>
                                    <a href="https:/www.google.com ">
                                        <li>RobinHood cuts staff by 23%</li>
                                    </a>
                                    <p class="news_para ">9 hours ago | 8642 readers</p>
                                    <a href="https:/www.google.com ">
                                        <li>Uber rides out of Zomato</li>
                                    </a>
                                    <p class="news_para ">9 hours ago | 8642 readers</p>
                                    <a href="https:/www.google.com ">
                                        <li>Discounts galore for car buyers</li>
                                    </a>
                                    <p class="news_para ">9 hours ago | 8642 readers</p>
                                    <a href="https:/www.google.com ">
                                        <li>MonkeyPox: India Updates</li>
                                    </a>
                                    <p class="news_para ">9 hours ago | 8642 readers</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right__content ">
                        <div style="padding:10px ">
                            <div>
                                <center>
                                    <div style="margin-top:20px; background-color: #4158D0; background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); padding:5px; border-radius: 10px;margin:10px; display:flex; align-items: center;
                                justify-content: center; ">
                                        <img style="margin:15px; " src="multiple-users-silhouette.png " alt=" " width=30px>
                                        <h4>Show your interest towards Profiles!</h4>
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