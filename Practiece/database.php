<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = ""; // Replace with your actual password
    $db_name = "test";
    $connection = null;
    try{
        $connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);
        // echo "you are connected";
    }
    catch(mysqli_sql_exception){
        echo "Error connecting to database!";
    }
    // if($connection){
    //     echo "you are connected";
    // }
?>