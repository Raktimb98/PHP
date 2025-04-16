<?php
include './database.php';

$obj = new Database();
// $obj->insert('students',['student_name'=>'Joe Goldburg','age'=>'36','city'=>'New York']);
// print_r($obj->getResult());

// $obj->update('students',['student_name'=>'Joe Goldburg','age'=>'36','city'=>'India'],['student_id'=>1]);
// print_r($obj->getResult());

$obj->update('students', ['student_name' => 'Joe Goldburg', 'age' => '36', 'city' => 'India'], ['student_id' => 1]);
print_r($obj->getResult());

?>