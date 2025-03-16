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
                    <td scope="row">Picture-1</td>
                    <td>FrostFern</td>
                    <td>frostfern@xyz.com</td>
                    <td>1234567890</td>
                    <td>
                        <a href="#" class="mr-3 profile" title="View User">
                            <i class="fas fa-eye view-icon" data-bs-toggle="modal" data-bs-target="#userViewModal"></i>

                        </a>
                        <a href="#" class="mr-3 editUser" title="Edit User">
                            <i class="fas fa-edit text-warning" data-bs-toggle="modal" data-bs-target="#userViewModal"></i>
                        </a>
                        <a href="#" class="mr-3 deleteUser" title="Delete User">
                            <i class="fas fa-trash text-danger "data-bs-toggle="modal" data-bs-target="#userViewModal"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>