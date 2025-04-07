<?php
require_once 'classes/Item.php';
$item = new Item();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $target = "upload/" . basename($image);
    $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($imageFileType, $allowedTypes) && $_FILES['image']['size'] < 5000000) { // 5MB limit
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            if ($item->create($name, $description, $image)) {
                header("Location: index.php");
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Invalid file type or size.";
    }
}
?>

<?php include 'includes/header.php'; ?>

<h1 class="text-center mb-4">Add New Item</h1>
<form action="" method="POST" enctype="multipart/form-data" class="border p-4 rounded shadow-sm">
    <div class="mb-3">
        <label class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description:</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Image:</label>
        <input type="file" name="image" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Add Item</button>
</form>
</div>
</body>
</html>
