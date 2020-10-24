<?php
require("connection.php");


function checkids($conn,$randStr){
    
$sql = "SELECT * FROM savings_receipt";
$result = mysqli_query($conn,$sql);
    
    while($row = mysqli_fetch_assoc($result)){
        
        if($row['receipt_number'] == $randStr){
            $receipt_numberExists = true;
            break;
        }else{
            
             $receipt_numberExists = false;      
        }
    } 
    
     return $receipt_numberExists;
}

function generateID($conn){
    
    $idLength = 8;
    $str = "0A1B2C3D4E5F6G7H8I9JKLMNOPQRSTUVWXYZ";
    $randStr = substr(str_shuffle($str),0,$idLength);
    $checkid = checkids($conn,$randStr);
    
    while($checkid ==  true){
        
         $randStr = substr(str_shuffle($str),0,$idLength);
         $checkid    = checkids($conn,$randStr);
    }
    
    return $randStr; 
}

$_SESSION["receipt_numberExists"] = generatEID($conn);

//echo $_SESSION["receipt_numberExists"];

?>