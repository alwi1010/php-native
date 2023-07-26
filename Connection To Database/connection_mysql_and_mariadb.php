<!--
    -- MySQL & MariaDB (using mysqli extension)

    MYSQLI Extension Start Code
-->

<?php
    // Connection To Database Use MYSQLI

    $hostname = "localhost"; // Or use the IP address or domain name if applicable
    $username = "your_username"; // Please use your username from your mysql account
    $password = "your_password"; // Please use your password from your mysql account
    $database = "your_database_name"; // Please add your database name from mysql database

    // Create a connection
    $connection = new mysqli($hostname, $username, $password, $database);

    // Check connection
    if ($connection->connect_error) {
        // If Connection Failed
        die("Connection failed: " . $connection->connect_error);
    }

    // If Connection Successfully
    echo "Connected to MySQL successfully!";

    // Now you're connected, and you can perform database operations.

    // Remember to close the connection when done.
    $conn->close();
?>

<!-- MYSQLI Extension End Code -->