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
    <?php include './partials/header.php'; ?>
    <!-- PHP code -->
    <?php
    $id = $_GET['story_id'];
    $sql = "SELECT * FROM `topics` WHERE `topic_id` = $id";
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $topic_name = $row['topic_name'];
        $topic_desc = $row['topic_desc'];
        $topic_image = $row['topic_image'];
        
    }
    ?>

    <!-- Jumbotron -->
    <div class="container-fluid">
        <div class="jumbotron bg-warning">
            <div class="container">
                <h1 class="display-4"><?php echo $topic_name;?></h1>
                <p class="lead"><?php echo $topic_desc;?></p>
                <button class="btn btn-dark"><a class="text-light" href="#reading" role="button">Continue Reading</a>
                </button>
            </div>
        </div>
    </div>

    <div class="container-fluid slider p-0">
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

    <!-- Reading -->
<div class="container" id="reading">
<div class="jumbotron jumbotron-fluid bg-warning p-0">
            <div class="container">
                <h1 class="display-4 text-center">Enjoy Reading!</h1>
                <img src=<?php echo $topic_image;?> class="img-fluid" alt="Image">
                <p class="lead pb-3">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi aperiam iusto sequi quia perferendis laboriosam non est sint aspernatur ut doloribus quis quidem dolores placeat quod consequuntur temporibus accusamus odio, amet voluptas ipsa eveniet nesciunt illo dolorum. Sit distinctio placeat nostrum adipisci aliquid veniam laboriosam, eveniet, voluptates, atque ratione qui saepe voluptatibus error provident! Amet nisi nulla et officiis nesciunt labore laboriosam asperiores, eum voluptatum laudantium quisquam dolor inventore modi incidunt molestiae. Quos similique dolores quisquam maiores illum, autem, voluptatum beatae ex sit reiciendis aspernatur deserunt ipsam accusamus excepturi ipsum architecto adipisci quas atque, sapiente numquam? Harum expedita, repellat sequi consectetur veritatis dignissimos beatae eum atque. Error odio autem sint maiores reprehenderit facere nostrum voluptatem nulla dolores libero quam maxime modi doloribus, odit eveniet beatae?
                </p>
            </div>
        </div>
</div>
<!-- Thank You -->
<div class="container-fluid mb-4">
    <h2 class="text-center display-4">
        Thank You For Your Time! &#128512;
    </h2>
</div>

    <?php include './partials/footer.php'; ?>
</body>

</html>