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
        $states = $rowFound['User_States'];
    }
    
    $row = $resultOfQuery->fetch_assoc();
    if ($states == "User"){
        echo json_encode(
            array(
                "success"=>"User",
                "userData"=>$userRecord[0],
            )
        );
    }elseif($states == "Admin"){
        echo json_encode(
            array(
                "success"=>"Admin",
                "userData"=>$userRecord[0],
            )
        );
    }
}else{
    echo json_encode(array("success"=>false));
}







?>


