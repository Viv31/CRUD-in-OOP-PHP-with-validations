<?php 
include('functions.php');
$id = $_GET['id'];
//echo $id;
$obj = new Query();
$del = $obj->DeleteData('students',$id); //first parameter is table name and other one is id 
header("location:index.php");
?>