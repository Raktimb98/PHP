<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home Page</title>
</head>

<body>
    <h1 class="text-center text-success mt-5">Hello, <?php echo $_SESSION['username'];?></h1>
    <div class="container mt-5">
        <a href="logout.php" class="btn btn-danger w-100">Logout</a>
</body>

</html>