<?php
$servername = "localhost";
$username = "root";
$password = "mec";
$msg_db_connection = "";
try {
    $conn = new PDO("mysql:host=$servername;dbname=" . DB_NAME, DB_USER, DB_PASSWORD, array(PDO::ATTR_PERSISTENT => true));
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $msg_db_connection = "Connected successfully";
    }
catch(PDOException $e)
    {
    $msg_db_connection =  "Connection failed: " . $e->getMessage();
    }
?>
