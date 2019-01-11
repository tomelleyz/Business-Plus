<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Business Plus | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="register.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>  

    <header>
        <span class="logo"> <span id="business">Business</span><span id="plus">Plus</span> </span>
        <span class="searchbox" style="display:none"> <input type="search" name="query"/><i class="fas fa-search"></i> </span> <!-- Visible only on large screens -->
        <span id="menu"><i class="fas fa-bars" style="font-size: 32px; color: grey;"></i></span>

        <!-- News Sections for large screens -->
        <nav style="display:none" class="news-sections">
            <a href="#">POLITICS</a>
            <a href="#">SPORTS</a>
            <a href="#">ENTERTAINMENT</a>
            <a href="#">FASHION</a>
            <a href="#">LIFESTYLE</a>
            <a href="#">FINANCE</a>
            <a href="#">TECH</a>

            <a href="#" id="login">Login</a>
        </nav>
        <!-- End of News Sections Nav for large screens -->
</header>

    <!-- SideNav -->
    <nav id="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()"><i class="fas fa-times" style="font-size: 35px"></i></a>
        <span> <input type="search" name="query"/><i class="fas fa-search"></i> </span>
        <hr/>
        <a href="#">POLITICS</a>
        <a href="#">SPORTS</a>
        <a href="#">ENTERTAINMENT</a>
        <a href="#">FASHION</a>
        <a href="#">LIFESTYLE</a>
        <a href="#">FINANCE</a>
        <a href="#">TECH</a>
        <hr/>
        <a href="#" id="login">Login</a>
        <a href="#" id="login">Sign Up</a>
    </nav>
    <!-- End of SideNav -->

    <form>
        <span> <a href="login.inc.php">Login</a> &#47; <a href="register.inc.php">Sign Up</a> </span>
        <br/><br/>
        <div class="field">
        <label for="name" id="name">Your Name</label>
        <input type="text" name="name" id="theName" class="input" onfocus="nameFocus()" onblur="nameBlur()"/>
        </div>
        <br/><br/>
        <div class="field">
        <label for="email" id="email">Email</label>
        <input type="email" name="email" id="theEmail" class="input" onfocus="emailFocus()" onblur="emailBlur()"/>
        </div>
        <br/><br/>
        <div class="field">
        <label for="password" id="password">Password</label>
        <input type="password" name="password" id="thePassword" class="input" onfocus="passwordFocus()" onblur="passwordBlur()"/>
        <span title="Show password" onclick="show()"><i class="fas fa-eye"></i></span> <span title="Hide password" onclick="hide()"><i class="fas fa-eye-slash"></i></span>
        </div>
        <br/><br/>
        <input type="submit" value="Sign up"/>
    </form>

<script>
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
    nameField.style.borderBottom = "2px solid #622670";
}
function nameBlur() {
    nameLabel.style.color = "grey";
    nameLabel.style.fontSize = "1.2em";
    nameLabel.style.fontWeight = "normal";
    nameField.style.borderBottom = "2px solid grey";
}

function emailFocus() {
    emailLabel.style.color = "#622670";
    emailLabel.style.fontSize = "13px";
    emailLabel.style.fontWeight = "bold";
    emailField.style.borderBottom = "2px solid #622670";
}
function emailBlur() {
    emailLabel.style.color = "grey";
    emailLabel.style.fontSize = "1.2em";
    emailLabel.style.fontWeight = "normal";
    emailField.style.borderBottom = "2px solid grey";
}

function passwordFocus() {
    passwordLabel.style.color = "#622670";
    passwordLabel.style.fontSize = "13px";
    passwordLabel.style.fontWeight = "bold";
    passwordField.style.borderBottom = "2px solid #622670";
}
function passwordBlur() {
    passwordLabel.style.color = "grey";
    passwordLabel.style.fontSize = "1.2em";
    passwordLabel.style.fontWeight = "normal";
    passwordField.style.borderBottom = "2px solid grey";
}

function show() {
    document.getElementById("thePassword").setAttribute("type", "text");
}
function hide() {
    document.getElementById("thePassword").setAttribute("type", "password");
}
/*$(document).ready(function(){
    $("#theName").focus(function(){
        $("#name").animate({
            color: '#622670',
            fontSize: '13px'
        });
        $(this).animate({borderBottom: '2px solid #622670'});
    });
    $("#theName").blur(function(){
        $("#name").animate({
            color: 'grey',
            fontSize: '1.2em'
        });
        $(this).animate({borderBottom: '2px solid grey'});
    });

    $("#theEmail").focus(function(){
        $("#email").animate({
            color: '#622670',
            fontSize: '13px'
        });
        $(this).animate({borderBottom: '2px solid #622670'});
    });
    $("#theEmail").blur(function(){
        $("#email").animate({
            color: 'grey',
            fontSize: '1.2em'
        });
        $(this).animate({borderBottom: '2px solid grey'});
    });

    $("#thePassword").focus(function(){
        $("#password").animate({
            color: '#622670',
            fontSize: '13px'
        });
        $(this).animate({borderBottom: '2px solid #622670'});
    });
    $("#thePassword").blur(function(){
        $("#password").animate({
            color: 'grey',
            fontSize: '1.2em'
        });
        $(this).animate({borderBottom: '2px solid grey'});
    });
});*/
</script>
</body>
</html>
