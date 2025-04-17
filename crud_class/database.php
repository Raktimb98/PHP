<?php
class Database {
    private $db_host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db_name = 'class_crud';

    private $mysqli = null;
    private $result = array();
    private $conn = false;

    public function __construct() {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->db_host, $this->username, $this->password, $this->db_name);
            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return;
            }
            $this->conn = true;
        }
    }

    public function insert($table, $params = array()) {
        if ($this->tableExists($table)) {
            $columns = implode(", ", array_keys($params));
            $placeholders = implode(", ", array_fill(0, count($params), '?'));
            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
            $stmt = $this->mysqli->prepare($sql);

            if ($stmt) {
                $types = str_repeat("s", count($params)); // Assuming all values are strings
                $stmt->bind_param($types, ...array_values($params));

                if ($stmt->execute()) {
                    array_push($this->result, "Data inserted successfully into $table table");
                    return true;
                } else {
                    array_push($this->result, $stmt->error);
                }

                $stmt->close();
            } else {
                array_push($this->result, $this->mysqli->error);
            }
        } else {
            array_push($this->result, "Table $table does not exist");
        }

        return false;
    }

    public function update($table, $params = array(), $where = null){
        if ($this->tableExists($table)){
            $args = array();
            foreach($params as $key => $value){
                $args[] = "$key = '$value'";
            }

            $sql = "UPDATE $table SET ".implode(', ', $args);

            // ✅ Fix: check if $where is a string
            if ($where != null && is_string($where)){
                $sql .= " WHERE $where";
            }

            echo $sql;
        } else {
            return false;
        }
    }

    public function delete($table, $where = null) {
        // To be implemented
    }

    public function select() {
        // To be implemented
    }

    private function tableExists($table) {
        $sql = "SHOW TABLES FROM `$this->db_name` LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if ($tableInDb && $tableInDb->num_rows == 1) {
            return true;
        } else {
            array_push($this->result, "Table $table does not exist in the database $this->db_name");
            return false;
        }
    }

    public function getResult() {
        return $this->result;
    }

    public function __destruct() {
        if ($this->conn) {
            if (!$this->mysqli->close()) {
                array_push($this->result, $this->mysqli->error);
            }
        }
    }
}
?>
