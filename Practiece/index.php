<?php
    $password = "eggchickenroll";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash."<br>";
    if(password_verify($password,$hash)){
        echo "you are logged in!<br>";
    }
    else{
        echo "you are not logged in!<br>";
    }
?>