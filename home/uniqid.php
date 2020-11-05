<?php
require("connection.php");


function checkids($conn,$randStr){
    
$sql = "SELECT * FROM case_ref";
$result = mysqli_query($conn,$sql);
    
    while($row = mysqli_fetch_assoc($result)){
        
        if($row['case_ref_id'] == $randStr){
            $case_idExists = true;
            break;
        }else{
            
             $case_idExists = false;      
        }
    } 
    
     return $case_idExists;
}

function generateID($conn){
    
    $idLength = 8;
    $str = "0A1B2C3D4E5F6G7H8I9JKLMNOPQRSTUVWXYZ";
    $randStr = "case-".substr(str_shuffle($str),0,$idLength);
    $checkid = checkids($conn,$randStr);
    
    while($checkid ==  true){
        
         $randStr = "Tenant-".substr(str_shuffle($str),0,$idLength);
         $checkid    = checkids($conn,$randStr);
    }
    
    return $randStr; 
}

$case_id = generatEID($conn);

$_SESSION[$case_id] = $case_id;
    



?>