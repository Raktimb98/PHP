<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Bootstrap modal crud</title>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add new user</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="completename" class="form-label">Name</label>
                        <input type="text" class="form-control" id="completename" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="completeemail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="completeemail" aria-describedby="emailHelp" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="completephone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="completephone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="completeplace" class="form-label">Place</label>
                        <input type="text" class="form-control" id="completeplace" placeholder="Enter your password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" onclick="adduser()">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center my-3">PHP CRUD operations using BootStrap Modal</h1>
        <button class="btn btn-dark my-4 w-100" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#completeModal">Add User</button>
        <div id="displayDataTable">

        </div>
    </div>

    <!-- JavaScript cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            displayData();
        });
        //display function
        function displayData(){
            var displayData="True";
            $.ajax({
                url: 'display.php',
                type: 'POST',
                data: {
                    displaySend: displayData
                },
                success: function(data, status) {
                $('#displayDataTable').html(data);
                }
            });
        }
        function adduser() {
            var nameAdd = $('#completename').val();
            var emailAdd = $('#completeemail').val();
            var phoneAdd = $('#completephone').val();
            var placeAdd = $('#completeplace').val();

            $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: {
                    name: nameAdd,
                    email: emailAdd,
                    phone: phoneAdd,
                    place: placeAdd
                },
                success: function(data, status) {
                    // console.log(data);
                    displayData();
                }
            });
        }
        //Delete User
        function Deleteuser(id){
            var conf = confirm("Are you sure you want to delete this user?");
            if(conf == true){
                $.ajax({
                    url: 'delete.php',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(data, status) {
                        displayData();
                    }
                });
            }
        }
    </script>
</body>

</html>