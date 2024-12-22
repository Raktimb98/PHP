<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO crud (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Data not inserted";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" placeholder="Enter your name" class="form-control text-center">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" placeholder="Enter your Email" class="form-control text-center">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="number" name="phone" placeholder="Enter your Phone number" class="form-control text-center">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" placeholder="Enter your Password" class="form-control text-center">
            </div>
            <button type="submit" name="submit" class="btn btn-secondary w-100">Submit</button>
        </form>
    </div>
</body>

</html>