<?php

include '../connection.php';

$minRating = 4;
$limitCard = 5;

$sql="SELECT * FROM cards WHERE Card_Rare >= '$minRating' ORDER BY Card_Rare DESC LIMIT $limitCard";



$resultOfQuery =  $connectNow -> query($sql);

if($resultOfQuery-> num_rows > 0){
    $CardRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc()){
        $CardRecord[] = $rowFound;
    }
    
    echo json_encode(
        array(
            "success"=>true,
            "CardData"=>$CardRecord,
        )
    );

}else{
    echo json_encode(array("success"=>false));
}

?>