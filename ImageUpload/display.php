<?php
include('./connect.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $image = $_FILES['file'];
    // echo $username;
    // echo "<br>";
    // echo $mobile;
    // echo "<br>";
    // // print_r($image);
    // echo "<br>";
    $imageFileName = $image['name'];
    // print_r($imageFileName);
    // echo "<br>";
    $imageError = $image['error'];
    // print_r($imageError);
    // echo "<br>";
    $imageTempName = $image['tmp_name'];
    // print_r($imageTempName);
    // echo "<br>";
    $filename_separate = explode('.', $imageFileName);
    // print_r($filename_separate);
    // echo "<br>";
    // $file_extension = strtolower($filename_separate[1]);
    // print_r($file_extension);
    $file_extension = strtolower(end($filename_separate));
    // print_r($file_extension);
    $extension = array('jpg', 'jpeg', 'png');
    if (in_array($file_extension, $extension)) {
        $upload_image = 'images/' . $imageFileName;
        move_uploaded_file($imageTempName, $upload_image);
        $sql = "INSERT INTO `registration` (`name`, `mobile`, `image`) VALUES ('$username', '$mobile', '$upload_image')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong> Data Inserted Successfully
            </div>';
        } else {
            die(mysqli_error($connect));
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Display Data</title>
    <style>
        img {
            width: 200px;
        }
    </style>
</head>

<body>
    <h1 class="text-center my-4">User Data</h1>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `registration`";
                $result = mysqli_query($connect, $sql);
                $number = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $image = $row['image'];
                    echo "<tr>
                    <td>$number</td>
                    <td>$name</td>
                    <td><img src=\"$image\" alt=\"Image\"></td>
                </tr>";
                    $number++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>