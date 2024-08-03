<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = ""; // Replace with your actual password
    $db_name = "test";
    
    // Attempt to connect to the database
    $connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);

    // Check connection
    if (!$connection) {  // Use procedural style for error checking
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected to database";
?>

