<?php
$servername =  "localhost";
$username = "root";
$password = "NejeL8";
$db = "exercices_sql";


// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    echo "<script>console.log('Connected successfully');</script>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
