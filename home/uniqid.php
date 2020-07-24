<?php
require("connection.php");


function checkids($conn,$randStr){
    
$sql = "SELECT * FROM parentReg";
$result = mysqli_query($conn,$sql);
    
    while($row = mysqli_fetch_assoc($result)){
        
        if($row['parents_id'] == $randStr){
            $parents_idExists = true;
            break;
        }else{
            
             $parents_idExists = false;      
        }
    } 
    
     return $parents_idExists;
}

function generateID($conn){
    
    $idLength = 8;
    $str = "0A1B2C3D4E5F6G7H8I9JKLMNOPQRSTUVWXYZ";
    $randStr = "BWY-".substr(str_shuffle($str),0,$idLength);
    $checkid = checkids($conn,$randStr);
    
    while($checkid ==  true){
        
         $randStr = "BWY-".substr(str_shuffle($str),0,$idLength);
         $checkid    = checkids($conn,$randStr);
    }
    
    return $randStr; 
}

$parents_id = generatEID($conn);
$student1_ID =$parents_id."-01";
$student2_ID =$parents_id."-02";
$student3_ID =$parents_id."-03";
$student4_ID =$parents_id."-04";
$student5_ID =$parents_id."-05";
$student6_ID =$parents_id."-06";
$student7_ID =$parents_id."-07";
$student8_ID =$parents_id."-08";

$_SESSION[$parents_id] = $parents_id;
    $_SESSION[$student1_ID] = $student1_ID;
    $_SESSION[$student2_ID] = $student2_ID;
    $_SESSION[$student3_ID] = $student3_ID;
    $_SESSION[$student4_ID] = $student4_ID;
    $_SESSION[$student5_ID] = $student5_ID;
    $_SESSION[$student6_ID] = $student6_ID;
    $_SESSION[$student7_ID] = $student7_ID;
    $_SESSION[$student8_ID] = $student8_ID;



/*
echo $_SESSION[$parents_id];
print"<br>";
echo  $_SESSION[$student1_ID];
print"<br>";
echo  $_SESSION[$student2_ID];
print"<br>";
echo  $_SESSION[$student3_ID];
print"<br>";
echo  $_SESSION[$student4_ID];
print"<br>";
echo  $_SESSION[$student5_ID];
print"<br>";
echo  $_SESSION[$student6_ID];
print"<br>";
echo  $_SESSION[$student7_ID];
print"<br>";
echo  $_SESSION[$student8_ID];
*/

?>