<?php
    $hostname = "localhost"; // Or use the IP address or domain name if applicable
    $username = "your_username"; // Please use your username from your mysql account
    $password = "your_password"; // Please use your password from your mysql account
    $database = "your_database_name"; // Please add your database name from mysql database

    // Create a connection
    $conn = new mysqli($hostname, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Now you're connected, and you can perform database operations.

    // Remember to close the connection when done.
    $conn->close();
?>
