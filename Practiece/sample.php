<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Hurry Up!</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username)) {
            echo "Username required";
        } elseif (empty($password)) {
            echo "Password required";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            // Use the correct table name (either 'user' or 'users')
            $sql = "INSERT INTO user (username, password) VALUES ('$username', '$hash')";
            
            if (mysqli_query($connection, $sql)) {
                echo "Your data has been entered successfully";
            } else {
                echo "Error: " . mysqli_error($connection);
            }
        }
    }

    mysqli_close($connection);
?>
