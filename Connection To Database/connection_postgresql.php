<!--
    -- PostgreSQL (using PGSQL extension)

    PGSQL Extension Start Code
-->

<?php
$hostname = "localhost"; // Replace with your PostgreSQL server hostname or IP address
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create connection
$connection = pg_connect("host=$hostname dbname=$database user=$username password=$password");

// Check connection
if (!$connection) {
    die("Connection failed: " . pg_last_error());
}

echo "Connected to PostgreSQL successfully!";
?>

<!-- PGSQL Extension End Code -->