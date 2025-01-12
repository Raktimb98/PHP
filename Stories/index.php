<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Stories</title>
</head>

<body>
    <?php include './partials/connect.php'; ?>

    <div class="container-fluid slider p-0">
        <?php include './partials/header.php'; ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/crow.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/duck.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/rabbit-turtle.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    <!-- Cards -->
    <div class="container">
        <h1 class="text-center featureTitle">Featured Stories</h1>
        <div class="row">
            <?php
            $sql = "SELECT * FROM `topics`";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo $row['topic_id'];
                    $id = $row['topic_id'];
                    $topic_image = $row['topic_image'];
                    $topic_name = $row['topic_name'];
                    $topic_desc = $row['topic_desc'];
                    echo '<div class="col-md-4 col-sm-6 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="' . $topic_image . '.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $topic_name . '</h5>
                        <p class="card-text">' . substr($topic_desc, 0, 50) . '...</p>
                        <a href="stories.php?story_id=' . $id . '" class="btn btn-primary">Continue reading</a>
                    </div>
                </div>
            </div>';
                }
            }
            ?>
        </div>

        <?php include './partials/footer.php'; ?>

        <!-- Bootstrap js cdn -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>