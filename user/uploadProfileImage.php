<?php

include '../connection.php';


$url = $_POST['profileImage'];

$sql = "ALTER TABLE user MODIFY User_ImageURL = '$url'";


$resultOfQuery =  $connectNow -> query($sql);

if($resultOfQuery){
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("success"=>false));
}




?>