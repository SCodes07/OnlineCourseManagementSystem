<?php
$host = "localhost";
$dbname = "onlinecoursemanagementsystem";
$username = "root";
$password = "";

//Try–Catch block
try {

    //Create PDO object
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Catch block
} catch (PDOException $e) {
    die("Database connection failed");
}
