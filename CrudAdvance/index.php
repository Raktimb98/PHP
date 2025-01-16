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
        <div class="modal fade" id="user-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add or update user</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="add-form" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- Username -->
                            <div class="form-group">
                                <label>Name:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light"><i class="fas fa-regular fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter your username" id="username">
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label>Email:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light"><i class="fa-regular fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Enter your Email" id="email">
                                </div>
                            </div>
                            <!-- Mobile -->
                            <div class="form-group">
                                <label>Mobile:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light"><i class="fa-solid fa-mobile"></i></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Enter your mobile" id="mobile">
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <label>Password:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light"><i class="fa-solid fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Enter your password" id="password">
                                </div>
                            </div>
                            <!-- Image -->
                            <div class="form-group">
                                <label for="image" class="form-label">Choose your Image:</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Input search and button section -->
        <div class="row">
            <div class="col-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark text-light"><i class="fa-duotone fa-solid fa-magnifying-glass"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search user">
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#user-modal">Add User</button>

            </div>
        </div>

        <!-- Jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <!-- Bootstrap JS cdn -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>