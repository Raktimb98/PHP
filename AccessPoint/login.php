<?php
$login = 0;
$invalid = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `registration` WHERE username ='$username' AND password = '$password'";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $login=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:home.php');
        } else {
            $invalid = 1;
        }
    } else {
        echo "Something went wrong. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login Page</title>
</head>

<body>
<?php
    if ($invalid) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error </strong> Invalid username or password
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>success </strong> Login successful
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <h1 class="text-center">Login Please</h1>
    <div class="container mt-5">
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-warning w-100">Login</button>
        </form>
    </div>
</body>

</html>