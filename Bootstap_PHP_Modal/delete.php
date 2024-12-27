<?php
include 'connect.php';
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM `crud` WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
        echo "Data Deleted Successfully";
    }else{
        echo "Data Not Deleted";
    }
}
?>