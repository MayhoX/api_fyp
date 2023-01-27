<?php

include '../connection.php';

$userEmail = $_POST['User_Email'];
$userPassword = $_POST['User_Password'];


$sql = "SELECT * FROM user WHERE User_Email = '$userEmail' AND User_Password = '$userPassword'";

$resultOfQuery =  $connectNow -> query($sql);

if($resultOfQuery-> num_rows > 0){
    $userRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc()){
        $userRecord[] = $rowFound;
    }
    echo json_encode(
        array(
            "success"=>true,
            "userData"=>$userRecord[0],
        )
    );
}else{
    echo json_encode(array("success"=>false));
}







?>