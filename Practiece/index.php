<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="pizza">Pizza</label>
        <input type="checkbox" name="pizza" id="pizza">
        <br>
        <label for="biriyani">Biriyani</label>
        <input type="checkbox" name="biriyani" id="biriyani">
        <br>
        <label for="roll">Egg chicken roll</label>
        <input type="checkbox" name="roll" id="roll">
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["pizza"])) {
        echo "order is pizza<br>";
    }
    if (isset($_POST["biriyani"])) {
        echo "order is biriyani<br>";
    }
    if (isset($_POST["roll"]))
        echo "order is chicken roll<br>";
    }
    if (empty($_POST["pizza"])) {
        echo "order is not pizza<br>";
    }
    if (empty($_POST["biriyani"])) {
        echo "order is not biriyani<br>";
    }
    if (empty($_POST["roll"])) {
        echo "order is not chicken roll<br>";
    }
?>