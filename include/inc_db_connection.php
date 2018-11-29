<?php
$servername = "localhost";
$msg_db_connection = "";
try {
    $conn = new PDO("mysql:host=$servername;dbname=faculty", "dbUser", "dbPassword", array(PDO::ATTR_PERSISTENT => true));
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $msg_db_connection = "Connected successfully";
    }
catch(PDOException $e)
    {
    $msg_db_connection =  "Connection failed: " . $e->getMessage();
    }
?>
