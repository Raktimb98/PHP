<div class="modal fade" id="user-modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalLabel">Add or update user</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="addform" method="POST" enctype="multipart/form-data">
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
                            <!-- 2 Input fields first for adding and next for updating , deleting or viewing profile -->
                            <input type="hidden" name="action" value="adduser">
                            <input type="hidden" name="userId" id="userId" value="">
                        </div>
                    </form>
                </div>
            </div>
        </div>