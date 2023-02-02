<?php

include '../connection.php';

$keyword = $_POST['keyword'];

$sql = "SELECT * FROM cards WHERE Card_Name LIKE '%$keyword%' OR Card_Pack LIKE '%$keyword%' OR Card_Description LIKE '%$keyword%' OR Card_Languages LIKE'%$keyword%'
        OR Card_Game LIKE '%$keyword%' OR Card_Rare LIKE '%$keyword%' OR Card_ImageURL LIKE '%$keyword%' OR Card_Level LIKE '%$keyword%' OR Card_Special LIKE '%$keyword%' OR Card_Effect LIKE'%$keyword%'
        OR Card_Attribute LIKE '%$keyword%' OR Card_Attack LIKE '%$keyword%' OR Card_Defence LIKE '%$keyword%' OR Card_Password LIKE '%$keyword%'";

// $sql = "SELECT * FROM cards WHERE Card_Name LIKE '%$keyword%'";

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