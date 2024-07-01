<?php
echo ("hello\t");
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "apl_frm";
$connection_db = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection_db) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo ("connected");
    $quary = "INSERT INTO `student_name`(`name`, `marks`,`grade`) VALUES ('Roni','98','A')";
    if (mysqli_query($connection_db, $quary)) {
        echo ("inserted");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <input type="text" name> -->
    <form>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">
    </form>
</body>

</html>