<!--
    If You Want Use PDO, You Can Use This Code
    PDO Start Code
-->

<?php
    // Connection To Database Use PDO

    $hostname = "localhost"; // Or use the IP address or domain name if applicable
    $username = "your_username"; // Please use your username from your mysql account
    $password = "your_password"; // Please use your password from your mysql account
    $database = "your_database_name"; // Please add your database name from mysql database

    try {
        // Create a PDO instance
        $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";

        // Now you're connected, and you can perform database operations.

        // Remember to close the connection when done.
        $conn = null;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>

<!-- PDO End Code -->