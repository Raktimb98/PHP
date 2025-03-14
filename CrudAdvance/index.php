<?php
require_once 'partials/connect.php';
$dbobj = new Database();
var_dump($dbobj);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Advance CRUD</title>
</head>

<body>

    <h1 class="text-center bg-dark text-light py-2">PHP Advance CRUD</h1>
    <div class="container">
        <!-- Form modal -->
        <div class="modal fade" id="user-modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalLabel">Add or update user</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="add-form" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- Username -->
                            <div class="form-group">
                                <label for="username">Name:</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark text-light"><i class="far fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter your username" id="username" name="username">
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark text-light"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" placeholder="Enter your Email" id="email" name="email">
                                </div>
                            </div>
                            <!-- Mobile -->
                            <div class="form-group">
                                <label for="mobile">Mobile:</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark text-light"><i class="fas fa-mobile"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter your mobile" id="mobile" name="mobile" pattern="\d{10}" title="Please enter a 10-digit number">
                                </div>
                            </div>
                            <!-- Image -->
                            <div class="form-group">
                                <label for="image" class="form-label">Choose your Image:</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-dark">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Input search and button section -->
        <div class="row mt-4 mb-3">
            <div class="col-10">
                <div class="input-group">
                    <span class="input-group-text bg-dark text-light"><i class="fas fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control" placeholder="Search user">
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#user-modal">Add User</button>
            </div>
        </div>
        <!-- Table section -->
        <table class="table" id="user-table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Picture-1</th>
                    <td>FrostFern</td>
                    <td>frostfern@xyz.com</td>
                    <td>1234567890</td>
                    <td>
                        <span>Edit</span>
                        <span>Profile</span>
                        <span>Delete</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Pagination -->
        <nav aria-label="Page navigation example" id="pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>