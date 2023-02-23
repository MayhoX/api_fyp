<?php

include '../connection.php';

$minRating = 1;
$limitCard = 5;



$sql = "SELECT * FROM `cards` INNER JOIN sellcard ON cards.Card_ID = sellcard.Card_ID GROUP BY sellcard.Card_ID 
        HAVING COUNT(sellcard.Card_ID) >= 1 ORDER BY COUNT(sellcard.Card_ID) DESC LIMIT 5";


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