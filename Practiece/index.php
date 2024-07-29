<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>
        <label for="age">age:</label>
        <input type="text" name="age" id="age"><br>
        <label for="email">email:</label>
        <input type="text" name="email" id="email"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    // $username = filter_input($INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age =filter_input(INPUT_POST,"age", FILTER_VALIDATE_INT);
    // $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    // echo "hello {$username}";
    if(empty($age)){
        echo "Enter a valid age";
    }
    else{
        echo "you are {$age} years old";
    }
}
?>