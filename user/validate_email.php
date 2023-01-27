<?php
include '../connection.php';

$userEmail = $_POST['User_Email'];

$sql = "SELECT * FROM user WHERE User_Email = '$userEmail'";

$resultOfQuery =  $connectNow -> query($sql);

if($resultOfQuery->num_rows > 0){
    echo json_encode(array("emailFound"=>true));   //have this email == error
}else{
    echo json_encode(array("emailFound"=>false));
}










?>