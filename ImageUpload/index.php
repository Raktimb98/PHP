<?php
require_once("./operations.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <!-- BootStrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center my-3"> Registration Form </h1>
    <div class="container d-flex justify-content-center">
        <form action="" class="w-50">
            <?php inputFields("Username", "username", "", "text"); ?>
            <?php inputFields("Mobile", "mobile", "", "text"); ?>
            <?php inputFields("", "file", "", "file"); ?>
            <div class="container d-flex justify-content-center">
                <button type="button" class="btn btn-dark" name="submit">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>