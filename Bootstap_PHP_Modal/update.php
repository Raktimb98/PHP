<?php
include 'connect.php';

if (isset($_POST['Updateuser'])) {
    $id = $_POST['Updateuser'];
    $sql = "SELECT * FROM `crud` WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $response = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    echo json_encode($response);
} else {
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
    echo json_encode($response);
}

// Update Query
if (isset($_POST['hiddenData'])) {
    $uniqueid = $_POST['hiddenData'];
    $name = $_POST['updatename'];
    $email = $_POST['updateemail'];
    $phone = $_POST['updatephone'];
    $place = $_POST['updateplace'];
    $sql = "UPDATE `crud` SET name = '$name', email = '$email', phone = '$phone', place = '$place' WHERE id = '$uniqueid'";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        $response['status'] = 200;
        $response['message'] = "Data updated successfully!";
    } else {
        $response['status'] = 500;
        $response['message'] = "Failed to update data!";
    }
    echo json_encode($response);
}
?>