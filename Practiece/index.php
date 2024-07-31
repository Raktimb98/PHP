<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
<form action="index.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            // header("Location: sample.php");
            // echo $_SESSION["username"]."<br>";
            // echo $_SESSION["password"]."<br>";
        }
        else{
            echo "Please fill in all fields";
        }
    }
?>