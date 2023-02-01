<?php

include '../connection.php';

$userName = $_POST['User_Name'];
$userEmail = $_POST['User_Email'];
$userPassword = $_POST['User_Password'];


$sql = "INSERT INTO user SET User_Name = '$userName', User_Email = '$userEmail', User_Password = '$userPassword', User_States ='User'";

$resultOfQuery =  $connectNow -> query($sql);

if($resultOfQuery){
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("success"=>false));
}







?>