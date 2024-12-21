<?php
$success = 0;
$user = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    // Sanitize and retrieve inputs
    $username = mysqli_real_escape_string($connect, trim($_POST['username']));
    $password = trim($_POST['password']);
    $cpassword = trim($_POST['cpassword']);

    // Check if user already exists
    $sql = "SELECT * FROM `registration` WHERE username = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = 1;
    } else {
        if ($password === $cpassword) {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert new user
            $sql = "INSERT INTO `registration` (username, password) VALUES (?, ?)";
            $stmt = $connect->prepare($sql);
            $stmt->bind_param("ss", $username, $hashed_password);

            if ($stmt->execute()) {
                $success = 1;
                // Redirect to login page
                // header('Location: login.php');
            } else {
                $invalid = 1;
            }
        } else {
            $invalid = 1; // Passwords don't match
        }
    }
    $stmt->close();
    $connect->close();
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
    if ($invalid) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error </strong> Check the password
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
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                <input type="password" class="form-control" name="cpassword">
            </div>
            <button type="submit" class="btn btn-warning w-100">Sign Up</button>
        </form>
    </div>
</body>

</html>