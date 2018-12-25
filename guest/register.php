<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Business Plus | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.error {color: red;}
</style>
</head>
<body>

<?php 
//
// Validating input fields
//
    $nameErrorMsg = $emailErrorMsg = $passwordErrorMsg = "";
    $name = $email = "";

    // validating Name field
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErrorMsg = "Name is required";
        } else {
            $name = validateInput($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErrorMsg = "Only letters and white space allowed"; 
            }
        }
        // validating Email field
        if (empty($_POST["email"])) {
            $email = "";
        } else {
            $email = validateInput($_POST["email"]);
            // check if email is valid 
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErrorMsg = "Invalid email format";
            }
        }
        // password field
        if (empty($_POST["password"])) {
            $passwordErrorMsg = "Password is required";
        }
    }
//Function to trim input and remove unnecessary characters
    function validateInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

/*
 * Connect to the Database.
 */
CONST HOST = 'localhost';
CONST DATABASE_NAME = 'businessplusdb';
CONST USER_NAME = 'root';
CONST PASSWORD = 1;



try {
    $db = new PDO('mysql:host=localhost;dbname=businessplusdb',USER_NAME,PASSWORD);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Using prepared statements to submit data (in PDO)
    $stmt1 =  $db->prepare("INSERT INTO `profiles` (name)
    VALUES (:name)");
    $stmt2 = $db->prepare("INSERT INTO `users` (email, password)
    VALUES (:email, :password)");

    $stmt1->bindParam(':name', $name);
    $stmt2->bindParam('email', $email);
    $stmt2->bindParam('password', $password);

    $name = $_POST["name"];
    $stmt1->execute();

    $email = $_POST["email"];
    $password = $_POST["password"];
    $stmt->execute();

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$db = null;
?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Name"/>
        <span class="error">* <?php echo $nameErrorMsg;?></span>
        <br/><br/>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email"/>
        <span class="error"><?php echo $emailErrorMsg;?></span>
        <br/><br/>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password"/>
        <span class="error">* <?php echo $passwordErrorMsg;?></span>
        <br/><br/>
        <input type="submit" value="Sign up"/>
    </form>

</body>
</html>