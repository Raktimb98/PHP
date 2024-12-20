<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Forms</title>
</head>

<body>
    <h1>Data Entry</h1>
    <div class="container">
        <form action="connect.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="genderContainer">
                <label>Gender:</label>
                <input type="radio" class="gender" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" class="gender" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" class="gender" id="other" name="gender" value="others">
                <label for="other">Other</label>
            </div>
            <div>
                <label for="phone">Phone:</label>
                <input type="number" id="phone" name="phone" placeholder="Enter your phone" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Submit Data</button>
        </form>
    </div>
</body>

</html>
