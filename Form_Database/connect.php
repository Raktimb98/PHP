<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    define('DB_HOSTNAME', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'form');

    $connect = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if (!$connect) {
        error_log("Connection error: " . mysqli_connect_error());
        die("Database connection failed. Please try again later.");
    } else {
        // echo "Your connection is successful";
        $sql = "INSERT INTO `data` (name,email,gender,phone,password) VALUES ('$name','$email','$gender','$phone','$password')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Data inserted successfully";
        } else {
            echo "Data insertion failed";
        }
    }
}
