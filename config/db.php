<?php
/*
 * Connect to the Database.
 */
CONST HOST = localhost;
CONST DATABASE_NAME = 'business';
CONST USER_NAME = 'root';
CONST PASSWORD = 1;



try {
    $db = new PDO('mysql:host=localhost;dbname=business',USER_NAME,PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>