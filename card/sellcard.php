<?php

include '../connection.php';

$CardID = $_POST['CardID'];
$SellerID = $_POST['SellerID'];
$Price = $_POST['Price'];
$Qty = $_POST['Qty'];
$Description = $_POST['Description'];
$url = $_POST['ImageURL'];
$Date = $_POST['Date'];

if ($url == ""){
    $sql = "INSERT INTO sellcard SET Card_ID = '$CardID', SellCard_Seller = '$SellerID', SellCard_Price = '$Price'
    , SellCard_Qty ='$Qty' , SellCard_Description = '$Description', SellCard_ImageURL =  NULL
    , SellCard_Date = '$Date', SellCard_state = 'Sell'"; 
}else{
    $sql = "INSERT INTO sellcard SET Card_ID = '$CardID', SellCard_Seller = '$SellerID', SellCard_Price = '$Price'
    , SellCard_Qty ='$Qty' , SellCard_Description = '$Description', SellCard_ImageURL = '$url'
    , SellCard_Date = '$Date', SellCard_state = 'Sell'"; 
}



$resultOfQuery =  $connectNow -> query($sql);

if($resultOfQuery){
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("success"=>false));
}







?>