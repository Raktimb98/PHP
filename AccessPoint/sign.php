<?php
$success = 0;
$user = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $sql = "insert into `registration`(username,password) values('$username','$password')";
    // $result = mysqli_query($connect, $sql);
    // if ($result) {
    //     echo "Data inserted successfully";
    // } else {
    //     die(mysqli_error($connect));
    // }

    $sql = "Select * from `registration` where username='$username'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // echo "User already exist";
            $user = 1;
        } else {
            $sql = "insert into `registration`(username,password) values('$username','$password')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                // echo "Sign Up successful";
                $success = 1;
            } else {
                die(mysqli_error($connect));
            }
        }
    }
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
    <?php
    if ($user) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error </strong> User already exist
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <?php
    if ($success) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>success </strong> SignUp successful
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
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
            <button type="submit" class="btn btn-warning w-100">Sign Up</button>
        </form>
    </div>
</body>

</html>