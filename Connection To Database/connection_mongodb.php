<!--
    -- MongoDB (using MongoDB extension)

    MongoDB Extension Start Code
-->

<?php
$hostname = "localhost"; // Replace with your MongoDB server hostname or IP address
$port = "27017"; // Replace with your MongoDB port (default: 27017)
$database = "your_database";
$username = "your_username";
$password = "your_password";

// Create connection
$mongoClient = new MongoDB\Client("mongodb://$username:$password@$hostname:$port");

// Access database
$mongoDB = $mongoClient->$database;

echo "Connected to MongoDB successfully!";
?>

<!-- MongoDB Extension End Code -->