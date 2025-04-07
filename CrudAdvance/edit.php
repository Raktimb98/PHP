<?php
require_once 'classes/Item.php';
$item = new Item();

$id = $_GET['id'];
$currentItem = $item->getById($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $newImage = null;

    if (!empty($_FILES['image']['name'])) {
        $newImage = $_FILES['image']['name'];
        $target = "upload/" . basename($newImage);
        $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($imageFileType, $allowedTypes) && $_FILES['image']['size'] < 5000000) {
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        } else {
            echo "Invalid file type or size.";
        }
    }

    if ($item->update($id, $name, $description, $newImage)) {
        header("Location: index.php");
    }
}
?>

<?php include 'includes/header.php'; ?>

<h1 class="text-center mb-4">Edit Item</h1>
<form action="" method="POST" enctype="multipart/form-data" class="border p-4 rounded shadow-sm">
    <div class="mb-3">
        <label class="form-label">Name:</label>
        <input type="text" name="name" value="<?= $currentItem['name'] ?>" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description:</label>
        <textarea name="description" class="form-control" required><?= $currentItem['description'] ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Current Image:</label><br>
        <img src="upload/<?= $currentItem['image'] ?>" width="100" class="img-thumbnail"><br><br>
        <label class="form-label">Replace Image:</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-warning">Update Item</button>
</form>
</div>
</body>
</html>
