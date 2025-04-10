<?php
class Database{
    private $db_host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db_name = 'class_crud';

    private $mysqli = '';
    private $result = array();
    private $conn = false;

    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host,$this->username,$this->password,$this->db_name);

            if($this->mysqli->connect_error){
                array_push($this->result,$this->mysqli->connect_error);
                return false;
            }
        }
        else{
            return true;
        }
    }
    public function insert(){

    }
    public function update(){

    }
    public function delete($table,$where = null){

    }
    public function select(){

    }
    public function __destruct()
    {
        if($this->conn){
            if($this->mysqli->close()){
                return true;
            }
            else{
                array_push($this->result,$this->mysqli->error);
                return false;
            }
        }
        else{
            return false;
        }
    }
}
?>