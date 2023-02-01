<?php

include '../connection.php';

$CardName = $_POST['Card_Name'];
$CardPack = $_POST['Card_Pack'];
$Description = $_POST['Card_Description'];
$Languages = $_POST['Card_Languages'];
$Game = $_POST['Card_Game'];
$rare = $_POST['Card_Rare'];
$url = $_POST['Card_ImageURL'];
$level = $_POST['Card_Level'];
$special = $_POST['Card_Special'];
$effect = $_POST['Card_Effect'];
$attribute = $_POST['Card_Attribute'];
$attack = $_POST['Card_Attack'];
$defence = $_POST['Card_Defence'];
$password = $_POST['Card_Password'];


$sql = "INSERT INTO cards SET Card_Name='$CardName', Card_Pack='$CardPack', Card_Description='$Description', Card_Languages='$Languages'
        , Card_Game='$Game', Card_Rare='$rare', Card_ImageURL='$url', Card_Level='$level', Card_Special='$special', Card_Effect='$effect'
        , Card_Attribute='$attribute', Card_Attack='$attack', Card_Defence='$defence', Card_Password='$password'";

$resultOfQuery =  $connectNow -> query($sql);

if($resultOfQuery){
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("success"=>false));
}


?>