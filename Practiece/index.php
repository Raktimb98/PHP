<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio button</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="radio" id="visa" name="payment" value="visa">
        <label for="visa">Visa</label>
        <br>
        <input type="radio" id="mastercard" name="payment" value="mastercard">
        <label for="mastercard">Mastercard</label>
        <br>
        <input type="radio" id="american_express" name="payment" value="american express">
        <label for="american_express">American Express</label>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>


<?php
if (isset($_POST["submit"])) {
    if(isset($_POST["payment"])){
        echo $_POST["payment"];
    }
    else{
        echo "Please select a payment method";
        }
}

?>