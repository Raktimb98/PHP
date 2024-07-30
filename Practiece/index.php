<?php
    setcookie("food","Egg chicken roll",time()+(10000),"/");
    setcookie("drink","milkshake",time()+(10),"/");
    
    /*foreach($_COOKIE as $key =>$value){
        echo"{$key} = {$value} <br>";
    }
    */
    if(isset($_COOKIE["food"])){
        echo "Buy some {$_COOKIE["food"]}!";
    }
    else{
        echo "I don't know your favorite food";
    }
?>