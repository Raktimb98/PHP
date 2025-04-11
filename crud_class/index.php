<?php
include './database.php';

$obj = new Database();
$obj->insert('students',['student_name'=>'Joe Goldburg','age'=>'36','city'=>'New York']);
?>