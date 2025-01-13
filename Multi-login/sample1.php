<?php
session_start();
$_SESSION["username"] = "user";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sample 2</title>
</head>
<body>
    <h1>Hello, I'm Sample 1</h1>
    <?php 
        if (isset($_SESSION["username"])) {
            echo htmlspecialchars($_SESSION["username"]);
        } else {
            echo "Guest";
        }
    ?>
	<a href="logout.php">Logout</a>
</body>
</html>
