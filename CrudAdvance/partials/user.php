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

    public function getRows($start=0, $limit=10){
        $sql = "SELECT * FROM {$this->tableName} ORDER BY DESC LIMIT {$start}, {$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        }
        else{
            $result = [];
            return $result;
        }
    }

    // Function to get single row

    public function getRow($id){
        $sql = "SELECT * FROM {$this->tableName} WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        if($stmt->rowCount() > 0){
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        else{
            $result = [];
            return $result;
        }
    }

    //Function to count no of rows

    public function getRowCount(){
        $sql = "SELECT count(*) as pcount FROM {$this->tableName}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['pcount'];
    }

    // Function to upload photo

    public function uploadPhoto($file){
        if(!empty($file)){
            $fileTempPath = $file['tmp_name'];
            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time().$fileName).'.'.$fileExtension;
            $allowedExtensions = array('jpg', 'png', 'jpeg');
            if(in_array($fileExtension, $allowedExtensions)){
                $uploadFileDir = getcwd().'/uploads/';
                $destFilePath = $uploadFileDir.$newFileName;
                if(move_uploaded_file($fileTempPath, $destFilePath)){
                    return $newFileName;
                }
            }
        }
    }

    // Function to update user

    // Function to delete user

    // Function to search user
}
?>