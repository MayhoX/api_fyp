<?php

include '../connection.php';

$CardID = $_POST['CardID'];

// $sql="SELECT * FROM sellcard WHERE Card_ID = '$CardID'";
$sql="SELECT * FROM sellcard INNER JOIN user ON sellcard.SellCard_Seller = user.User_ID WHERE Card_ID = '$CardID'";
 

$resultOfQuery =  $connectNow -> query($sql);

if($resultOfQuery-> num_rows > 0){
    $CardRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc()){
        $CardRecord[] = $rowFound;
    }
    
    echo json_encode(
        array(
            "success"=>true,
            "CardListData"=>$CardRecord,
        )
    );

}else{
    echo json_encode(array("success"=>false));
}

?>