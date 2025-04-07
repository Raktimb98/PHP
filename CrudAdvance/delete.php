<?php
require_once 'classes/Item.php';
$item = new Item();

$id = $_GET['id'];
$currentItem = $item->getById($id);

// Delete image file
$imagePath = "upload/" . $currentItem['image'];
if (file_exists($imagePath)) {
    unlink($imagePath);
}

// Delete database record
if ($item->delete($id)) {
    header("Location: index.php");
}
?>
