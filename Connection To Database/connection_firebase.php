<!--
    -- Firebase Realtime Database (using Firebase PHP Admin SDK)

    To connect to Firebase Realtime Database, you'll need to use the Firebase PHP Admin SDK. First, you need to install it using Composer:

    -- composer require kreait/firebase-php --

    Firebase PHP Admin SDK Start Code
-->

<?php
    require 'vendor/autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    $serviceAccount = ServiceAccount::fromJsonFile('path/to/your/serviceAccountKey.json');
    $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();

    $database = $firebase->getDatabase();

    echo "Connected to Firebase Realtime Database successfully!";
?>

<!--
    Firebase PHP Admin SDK End Code

    Replace 'path/to/your/serviceAccountKey.json' with the path to your Firebase Service Account Key JSON file.

    Please note that for each of these connections, you need to have the appropriate PHP extensions installed and properly configured. Additionally, make sure to replace 'your_username', 'your_password', 'your_database', and any other specific connection details with your actual database credentials and configuration.

-->