<?php
include 'connect.php';
extract($_POST);
if(isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['place'])){
    $query = "INSERT INTO `crud`(`name`, `email`, `phone`, `place`) VALUES ('$name','$email','$phone','$place')";
    $result = mysqli_query($connect,$query);
    if($result){
        echo "Data inserted successfully";
    }else{
        echo "Data not inserted";
    }
}
?>