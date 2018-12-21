<?php
/*
 * Connect to the Database.
 */
CONST HOST = localhost;
CONST DATABASE_NAME = 'business';
CONST USER_NAME = 'slpepple01';
CONST PASSWORD = "1";



try {
    $db = new PDO('mysql:host=localhost;dbname=business',USER_NAME,PASSWORD);
    $db;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
