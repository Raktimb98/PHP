<?php
require_once 'classes/Database.php';
require_once 'classes/Item.php';

$item = new Item();
$items = $item->read();
?>

<?php include 'includes/header.php'; ?>

<h1 class="text-center mb-4">CRUD System</h1>
<a href="create.php" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Add New Item</a>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['description'] ?></td>
            <td><img src="upload/<?= $row['image'] ?>" width="100" class="img-thumbnail"></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</body>
</html>
