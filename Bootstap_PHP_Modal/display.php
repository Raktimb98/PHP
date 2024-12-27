<?php
include 'connect.php';
if (isset($_POST['displaySend'])) {
    $table = '<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Sl no</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Place</th>
            <th scope="col">Operations</th>
        </tr>';
    $sql = "SELECT * FROM `crud`";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $place = $row['place'];
        $table .= '<tr>
    <td scope="row">' . $id . '</td>
    <td>' . $name . '</td>
    <td>' . $email . '</td>
    <td>' . $phone . '</td>
    <td>' . $place . '</td>
    <td>
    <button class="btn btn-dark">Update</button>
    <button class="btn btn-danger" onclick="Deleteuser('.$id.')">Delete</button>
</td>
    </tr>';
    }
    $table .= '</table>';
    echo $table;
}
?>
