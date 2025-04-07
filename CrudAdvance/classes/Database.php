<?php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'advance_crud';
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        
        if ($this->conn->connect_error) {
            throw new Exception("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
