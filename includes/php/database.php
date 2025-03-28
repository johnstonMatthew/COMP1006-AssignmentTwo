<?php 
    $server = "localhost";
    $userName = "root";
    $password = "mysql";
    $databaseName = "assignmentTwo";

    try {
        $connection = new PDO("mysql:host=$server; dbname=$databaseName", "$userName", "$password");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $_ENV) {
        die("<p> Unable to Connect to the Database </p>");
    }
?>