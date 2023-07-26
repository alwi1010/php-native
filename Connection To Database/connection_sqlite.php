<!--
    -- SQLite (using SQLite3 extension)

    SQLite3 Extension Start Code
-->

<?php
$database = "path/to/your/sqlite/database.db"; // Replace with the path to your SQLite database

// Create connection
$connection = new SQLite3($database);

// Check connection
if (!$connection) {
    die("Connection failed.");
}

echo "Connected to SQLite successfully!";
?>

<!-- SQLite3 Extension End Code -->