<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Business Plus | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="register.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

    <form>

        <div class="field">
        <label for="name" id="name">Your Name</label>
        <input type="text" name="name" id="theName" class="input"/>
        </div>
        <br/><br/>
        <div>
        <label for="email" id="email">Email</label>
        <input type="email" name="email" id="theEmail" class="input"/>
        </div>
        <br/><br/>
        <div>
        <label for="password" id="password">Password</label>
        <input type="password" name="password" id="thePassword" class="input"/>
        </div>
        <br/><br/>
        <input type="submit" value="Sign up"/>
    </form>

<script>
$(document).ready(function(){
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
});
</script>
</body>
</html>