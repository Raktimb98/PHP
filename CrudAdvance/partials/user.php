<?php
require_once 'database.php';

class User extends Database{
    protected $tableName = 'user-table';

    // Function to add user
    public function add($data){
        if(!empty($data) )
        $fields= $placeholder=[];
        foreach($data as $key => $value){
            $fields[] = $key;
            $placeholder[] = ':'.$key;
        }
        // $sql = "INSERT INTO $this->tableName (name, email, phone) VALUES (:name, :email, :phone)";
        $sql = "INSERT INTO $this->tableName (".implode(',', $fields).") VALUES (".implode(',', $placeholder).")";
        $stmt = $this->conn->prepare($sql);
        try{
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertId = $this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertId;
        }catch(PDOException $e){
            $this->conn->rollBack();
            echo "Error: ".$e->getMessage();
            return false;
        }
    }
    // Function to get rows

    // Function to get single row

    //Function to count no of rows

    // Function to upload photo

    // Function to update user

    // Function to delete user

    // Function to search user
}
?>