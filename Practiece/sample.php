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

    <?php
    $payment = $_POST["payment"];
    switch ($payment) {
        case "visa":
            echo "Visa is selected";
            break;
        case "mastercard":
            echo "Mastercard is selected";
            break;
        case "american express":
            echo "American Express is selected";
            break;
        default:
            echo "You selected nothing";
    }
    ?>
</body>

</html>
