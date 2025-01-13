<?php
include ('connect.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `login` WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);

    if ($row["usertype"]=="user") {
        $_SESSION["username = $username"];
        header("location:sample1.php");
    }
    elseif ($row["usertype"]=="admin") {
        $_SESSION["username = $username"];
        header("location:sample2.php");
    }
    else{
        echo "Something went wrong";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="header">
        <h2>Multi-login</h2>
    </div>

    <div class="login">
        <form action="#" method="POST">
            <input type="text" name="username" placeholder="Username" required autofocus autocomplete="off">
            <input type="password" name="password" placeholder="Password" required autocomplete="off">
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>