<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "insert into `registration`(username,password) values('$username','$password')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "Data inserted successfully";
    } else {
        die(mysqli_error($connect));
    }
} else {
    echo ("Connection error: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>SignUP Page</title>
</head>

<body>
    <h1 class="text-center">Here is your SignUP page</h1>
    <div class="container mt-5">
        <form action="sign.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-warning w-100">Submit</button>
        </form>
    </div>
</body>

</html>