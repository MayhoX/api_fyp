<?php

include '../connection.php';

$CardID = $_POST['CardID'];
$SellerID = $_POST['SellerID'];
$Price = $_POST['Price'];
$Qty = $_POST['Qty'];
$Description = $_POST['Description'];
$Date = $_POST['Date'];




// $sql = "INSERT INTO sellcard SET Card_ID = '$cardID', SellCard_Seller = '$SellerID', SellCard_Price = '$Price', SellCard_Qty ='$Qty'
//         , SellCard_Description = '$Description', SellCard_Date = '$Date', SellCard_state = 'Sell'";

$sql = "INSERT INTO sellcard SET Card_ID = '$CardID', SellCard_Seller = '$SellerID', SellCard_Price = '$Price'
, SellCard_Qty ='$Qty' , SellCard_Description = '$Description', SellCard_Date = '$Date'
, SellCard_state = 'Sell'"; 


$resultOfQuery =  $connectNow -> query($sql);

if($resultOfQuery){
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("success"=>false));
}







?>