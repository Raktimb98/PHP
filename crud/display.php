<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crud operation</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-success w-100 my-5">
            <a href="user.php" class="text-light">Add user</a>
        </button>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $password = $row['password'];
                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $phone . '</td>
                    <td>' . $password . '</td>
                                    <td>
                    <button class="btn btn-primary">
                        <a class="text-light" href="update.php?updateid='.$id.'">Update</a>
                    </button>
                    <button class="btn btn-danger">
                        <a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a>
                    </button>
                </td>
                </tr>';
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>