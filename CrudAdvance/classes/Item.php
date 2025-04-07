<?php
require_once 'Database.php';

class Item {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }

    // Create new item
    public function create($name, $description, $image) {
        $stmt = $this->db->conn->prepare("INSERT INTO items (name, description, image) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $this->db->conn->error);
        }
        $stmt->bind_param("sss", $name, $description, $image);
        return $stmt->execute();
    }

    // Read all items
    public function read() {
        $result = $this->db->conn->query("SELECT * FROM items");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Read single item by ID
    public function getById($id) {
        $stmt = $this->db->conn->prepare("SELECT * FROM items WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Update item
    public function update($id, $name, $description, $image = null) {
        if ($image) {
            $stmt = $this->db->conn->prepare("UPDATE items SET name=?, description=?, image=? WHERE id=?");
            $stmt->bind_param("sssi", $name, $description, $image, $id);
        } else {
            $stmt = $this->db->conn->prepare("UPDATE items SET name=?, description=? WHERE id=?");
            $stmt->bind_param("ssi", $name, $description, $id);
        }
        return $stmt->execute();
    }

    // Delete item
    public function delete($id) {
        $stmt = $this->db->conn->prepare("DELETE FROM items WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
