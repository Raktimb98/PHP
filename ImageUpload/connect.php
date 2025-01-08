<?php
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'imageUpload');

$connect = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$connect) {
    error_log("Connection error: " . mysqli_connect_error());
    die("Database connection failed. Please try again later.");
} else {
    // echo "Your connection is successful";
}