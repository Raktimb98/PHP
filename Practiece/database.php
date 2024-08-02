<?php
    $db_server = "localhost";
    $db_user = "root";
    $port=3307;
    $db_password = ""; // Replace with your actual password
    $db_name = "school_management_system";

    // Attempt to connect to the database
    $connection = new mysqli($db_server, $db_user,$db_password, $db_name,$port);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    echo "Connected to database";
?>
