<?php
    include("database.php");
    $sql = "SELECT * FROM user";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["password"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
    mysqli_close($connection)
?>