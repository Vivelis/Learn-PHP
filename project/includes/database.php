<?php
    // Params to connect to a database
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "learn_php";

    // Connection to the database
    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$connection) {
        die("Error: database connection failed.<br>");
    }
?>