<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Enter your username:</label>
        <input type="text" name="username">
        <br><br>
        <label for="password">Enter your password</label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="hit" value="Hit">
        <br>
    </form>
</body>

</html>
<?php
/*
    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }
*/
    if(isset($_POST["hit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Username is empty";
        }
        else{
            echo "You tried to login";
        }
    }
?>
