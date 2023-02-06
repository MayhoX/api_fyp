<?php

include '../connection.php';

$SellCardID = $_POST['SellCardID'];
$CardID = $_POST['CardID'];
$BuyerID = $_POST['BuyerID'];
$SellerID = $_POST['SellerID'];
$Qty = $_POST['Qty'];
$TotalPrice = $_POST['TotalPrice'];
$Date = $_POST['Date'];

$sql = "INSERT INTO buycard SET BuyCard_SellCardID  = '$SellerID', BuyCard_CardID  = '$CardID', BuyCard_BuyerID  = '$BuyerID'
    , BuyCard_SellerID ='$SellerID' , BuyCard_Qty = '$Qty', BuyCard_TotalPrice =  '$TotalPrice'
    , BuyCard_Date = '$Date', SellCard_state = 'Order'"; 



$resultOfQuery =  $connectNow -> query($sql);

if($resultOfQuery){
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("success"=>false));
}







?>