<!--
    -- Oracle (using OCI8 extension)

    OCI8 Extension Start Code
-->

<?php
$tns = "  
  (DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = your_service_name)
    )
  )"; // Replace with your Oracle service name and connection details

$username = "your_username";
$password = "your_password";

// Create connection
$connection = oci_connect($username, $password, $tns);

// Check connection
if (!$connection) {
    $e = oci_error();
    die("Connection failed: " . $e['message']);
}

echo "Connected to Oracle successfully!";
?>

<!-- OCI8 Extension End Code -->