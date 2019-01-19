<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Business Plus | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>  

    <header>
        <span class="logo"> <span id="business">Business</span><span id="plus">Plus</span> </span>
        <span class="searchbox"> <input type="search" placeholder="Search our website..." name="query"/><i class="fas fa-search" style="padding:0 5px;color:white;background-color:#622670;cursor:pointer;"></i> </span> <!-- Visible only on large screens -->
        <span id="menuIcon" onclick="openMenu()"><i class="fas fa-bars" style="font-size: 35px;color: #333333;"></i></span>
    </header>

        <!-- News Sections for large screens -->
        <nav class="news-sections">
            <a href="#">Politics</a>
            <a href="#">Sports</a>
            <a href="#">Entertainment</a>
            <a href="#">Fashion</a>
            <a href="#">Lifestyle</a>
            <a href="#">Finance</a>
            <a href="#">Technology</a>

            <a href="register.inc.php">Sign up</a>
        </nav>
        <!-- End of News Sections Nav for large screens -->

    <!-- SideNav --> 
    <div id="sidenavContainer">
    <nav class="sidenav" id="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()"><i class="fas fa-times" style="font-size: 35px"></i></a>
        <div class="search-container"> <input type="search" placeholder="Search our website..." name="query"/><span class="search-icon"><i class="fas fa-search"></i></span> </div>
        <hr/>
        <a href="#" onclick="closeMenu()">Politics</a>
        <a href="#" onclick="closeMenu()">Sports</a>
        <a href="#" onclick="closeMenu()">Entertainment</a>
        <a href="#" onclick="closeMenu()">Fashion</a>
        <a href="#" onclick="closeMenu()">Lifestyle</a>
        <a href="#" onclick="closeMenu()">Finance</a>
        <a href="#" onclick="closeMenu()">Technology</a>
        <hr/>
        <a href="login.inc.php">Login</a>
        <a href="register.inc.php">Sign Up</a>
    </nav>
    </div>
    <!-- End of SideNav -->

    <form>
        <span> <a href="login.inc.php">Login</a> <span>&#47;</span> <a href="register.inc.php">Sign Up</a> </span>
        <br/><br/><br/><br/>
        <div class="field">
        <label for="name" id="name">Your Name</label>
        <input type="text" name="name" id="theName" class="input" onfocus="nameFocus()" onblur="nameBlur()"/> 
        <span class="error"></span>   
        </div>
        <br/><br/>
        <div class="field">
        <label for="email" id="email">Your Email</label> <span class="error"></span>
        <input type="email" name="email" id="theEmail" class="input" onfocus="emailFocus()" onblur="emailBlur()"/>
        <span class="error"></span>
        </div>
        <br/><br/>
        <div class="field">
        <label for="password" id="password">Password</label> <span class="error"></span>
        <input type="password" name="password" id="thePassword" class="input" onfocus="passwordFocus()" onblur="passwordBlur()"/>
        <span id="showPassword" title="Show password" onclick="show()"><i class="fas fa-eye" style="font-size: 20px;"></i></span> <span id="hidePassword" title="Hide password" onclick="hide()"><i class="fas fa-eye-slash" style="font-size: 20px;"></i></span>
        <span class="error"></span>    
        </div>
        <br/><br/>
        <input type="submit" value="Log in"/>
    </form>

<script>

    //
    // JS code for Sidenav
    //
var sidenavContainer = document.getElementById("sidenavContainer");
function openMenu() {
    sidenavContainer.style.display = "block";
    sidenavContainer.style.width = "100%";
}

function closeMenu() {
    sidenavContainer.style.display = "none";
    sidenavContainer.style.width = "0";
}

// Closes the sidenav container when user clicks anywhere outside of the sidenav
window.onclick = function(event) {
    if (event.target == sidenavContainer) {
        sidenavContainer.style.display = "none";
    }
}
    //
    // JS code for input fields and labels animation
    //
var nameLabel = document.getElementById("name");
var nameField = document.getElementById("theName");
var emailLabel = document.getElementById("email");
var emailField = document.getElementById("theEmail");
var passwordLabel = document.getElementById("password");
var passwordField = document.getElementById("thePassword");

function nameFocus() {
    nameLabel.style.color = "#622670";
    nameLabel.style.fontSize = "13px";
    nameLabel.style.fontWeight = "bold";
    nameField.style.borderBottom = "3px solid #622670";
}
function nameBlur() {
    nameLabel.style.color = "grey";
    nameLabel.style.fontSize = "1.2em";
    nameLabel.style.fontWeight = "normal";
    nameField.style.borderBottom = "1px solid grey";
}

function emailFocus() {
    emailLabel.style.color = "#622670";
    emailLabel.style.fontSize = "13px";
    emailLabel.style.fontWeight = "bold";
    emailField.style.borderBottom = "3px solid #622670";
}
function emailBlur() {
    emailLabel.style.color = "grey";
    emailLabel.style.fontSize = "1.2em";
    emailLabel.style.fontWeight = "normal";
    emailField.style.borderBottom = "1px solid grey";
}

function passwordFocus() {
    passwordLabel.style.color = "#622670";
    passwordLabel.style.fontSize = "13px";
    passwordLabel.style.fontWeight = "bold";
    passwordField.style.borderBottom = "3px solid #622670";
}
function passwordBlur() {
    passwordLabel.style.color = "grey";
    passwordLabel.style.fontSize = "1.2em";
    passwordLabel.style.fontWeight = "normal";
    passwordField.style.borderBottom = "1px solid grey";
}

// Code for showing and hiding password
function show() {
    document.getElementById("thePassword").setAttribute("type", "text");
    document.getElementById("showPassword").style.display = "none";
    document.getElementById("hidePassword").style.display = "block";
}
function hide() {
    document.getElementById("thePassword").setAttribute("type", "password");
    document.getElementById("hidePassword").style.display = "none";
    document.getElementById("showPassword").style.display = "block";
}
    // 
    // End of JS code for input fields and labels animation
    //
</script>
</body>
</html>
