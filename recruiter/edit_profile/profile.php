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
        p{
            font-size:20px;
        }
    </style>
    <script>
        function redirect_home() {
            window.location = "file:///D:/twittin//recruiter/posts/index.php";
        }

        function redirect_logout() {
            window.location = "file:///D:/twittin//landing_page/index.php";
        }

        function redirect_profile() {
            window.location = "file:///D:/twittin//recruiter/profile/index.php";
        }

        function redirect_network() {
            window.location = "file:///D:/twittin//recruiter/network/index.php";
        }

        function redirect_edit() {
            window.location = "file:///D:/twittin//recruiter/edit_profile/profile.php";
        }
        function redirect_settings() {
            window.location = "http://localhost/twittin/twittin//recruiter/settings.php";
        }
    </script>
</head>


<body>

    <!-- <header>
<table class="heading">
<tr class="heading">
<td class="heading"><img class="logo" src="https://venturebeat.com/wp-content/uploads/2013/05/twitter-linkedin-fake-logo.jpg?w=1200&strip=all" height="100"    width="200" alt="Logo"></td>
<td class="textfield"><input class="heading" type="text" name="search"
placeholder="Search Profiles Here...." ></td>
<td class="heading"><input class="heading" type="submit"
name="searchSubmit" value="Search"></td>
</tr>
</table> 
</header> -->

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
    <!-- 
<table class="navBar" align="center" >
<tr height="70" width="50">
<td>
<a><i class="fa-solid fa-house fa-2xl"></i></a>
<a><i class="fa-solid fa-bell fa-2xl"></i></a>
<a><i class="fa-solid fa-circle-user fa-2xl"></i></a>
</td>
</tr>
</table> -->

    <h2 class="pageTitle" style="background-image: url('pexels-prateek-katyal-2694434.jpg');
    background-size: cover;
    background-position: center;">Recruiter Details</h2>

    <form name="form1">
        <table class="data" style="background-image: url('pexels-prateek-katyal-2694434.jpg');
        background-size: cover;
        background-position: center;">
            <tr class="details">
                <td>
                    <p id="displayName"> Recruiter Name (preferred w/ company) : </p>
                </td>
            </tr>
            <tr>
                <td><input id="un" type="text" name="name"><br> </tr>
            <tr class="details">
                <td> Recruiter Profile Picture :</td>
            </tr>
            <tr class="details">
                <td>
                    <label for="profilePic">Upload Picture</label>
                    <input type="file" id="profilePic" name="img" accept="image/*">
                </td>
            </tr>
            <tr class="details">
                <td>
                    <p id="displayName"> Short Summary about Job : </p>
                </td>
            </tr>
            <tr>
                <td><input id="uns" type="text" name="summary"><br> </tr>
            <tr class="details">
                <td>Resume :</td>
            </tr>
            <tr class="details">
                <td>
                    <label for="Resume">Upload Job Description of the job</label>
                    <input type="file" id="Resume" name="resume" accept="application/pdf">
                </td>
            </tr>
            <tr class="details">
                <td>About yourself and job openings :</td>
            </tr>
            <tr class="details">
                <td><input type="text" name="about"><br>
                </td>
            </tr>

            <tr class="details">
                <td> Skills Required:</td>
            </tr>
            <tr class="details">
                <td>
                    <center>
                        <div class="select select--multiple">
                            <select name="skills" id="skills" multiple>

                    <option value="volvo">Web Dev</option>
                    <option value="saab">App Dev</option>
                    <option value="mercedes">Cloud Engineering</option>
                    <option value="audi">Infrastructure</option>
                    <option value="volvo">Web Dev</option>
                    <option value="saab">App Dev</option>
                    <option value="mercedes">Cloud Engineering</option>
                    <option value="audi">Infrastructure</option>
                    </select>
                        </div>
                    </center>
                </td>
            </tr>
            <tr class="details">
                <td>
                    <input onclick="validateName()" style="color:white; background-color: #4158D0; background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); cursor:pointer; font-family: sans-serif; font-size: 1.25rem; border-style:none;border-radius:50px;width:40%"
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

</html>