<!--
    -- SQL Server (using SQLSRV extension)

    SQLSRV Extension Start Code
-->

<?php
    $hostname = "localhost"; // Replace with your SQL Server hostname or IP address or Domain Name if applicable
    $username = "your_username"; // Please use your username from your SQL Server
    $password = "your_password"; // Please use your password from your SQL Server
    $database = "your_database_name"; // Please add your database name from SQL Server database

    // Connection options
    $connectionOptions = array(
        "Database" => $database,
        "Uid" => $username,
        "PWD" => $password
    );

    // Create connection
    $connection = sqlsrv_connect($hostname, $connectionOptions);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . print_r(sqlsrv_errors(), true));
    }

    // If Connection Successfully
    echo "Connected to SQL Server successfully!";
    
    // Now you're connected, and you can perform database operations.
?>

<!-- SQLSRV Extension End Code -->