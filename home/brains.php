<?php

session_start();

require('connection.php');



if (isset($_POST['parentReg'])) {
    parentReg($mysqli);
}

if (isset($_POST['saveandAddChild'])) {
    cildReg($mysqli);
}
if (isset($_POST['saveandAddSecondChild'])) {
    cildReg2($mysqli);
}
if (isset($_POST['saveandAddThirdChild'])) {
    cildReg3($mysqli);
}
if (isset($_POST['saveandAddfourthChild'])) {
    cildReg4($mysqli);
}

if (isset($_POST['saveandAddfifithChild'])) {
    cildReg5($mysqli);
}
if (isset($_POST['saveandAddsixthChild'])) {
    cildReg6($mysqli);
}
if (isset($_POST['saveandAddseventhChild'])) {
    cildReg7($mysqli);
}
if (isset($_POST['saveandAddeigthChild'])) {
    cildReg8($mysqli);
}


if (isset($_POST['SavingsButton'])) {
    savings($mysqli);
}

if (isset($_POST['InitiateWithDrawalButton'])) {
    withDraw($mysqli);
}

if (isset($_POST['addmember'])) {
    addmember($mysqli);
}


 




///////////////////////////////////////////////////////////////////////////Apply Parents//////////////////////////////////////////////////////////////
///APPLY Parents 
function parentReg(){
require('connection.php');    
$_SESSION["parents_id"] = $_POST["parents_id"];  
    // MySQL data
$field1 = strtoupper($_SESSION["parents_id"]);//$_POST['parents_id'];
$field2 = strtoupper($_POST['surname']) ;
$field3 = strtoupper($_POST['firstname']);
$field4 = strtoupper($_POST['nin']) ;
$field5 = strtoupper($_POST['phone'] );
$field6 = strtoupper($_POST['gender']) ;
$field7 = strtoupper($_POST['maritalstatus']) ;
$field8 = strtoupper($_POST['occupation']) ;   
$field9 = strtoupper($_POST['day']) ;   
$field10 = strtoupper($_POST['month']) ;   
$field11 = strtoupper($_POST['year'] );   
$field12 = strtoupper($_POST['location']) ;  
$field13 = strtoupper($_POST['religion']) ;  
$field14 = strtoupper($_POST['next_of_kin_surname']) ;     
$field15 = strtoupper($_POST['next_of_kin_firstname']) ; 
$field16 = strtoupper($_POST['relationship']) ; 
$field17 = strtoupper($_POST['next_of_kin_telephone']) ; 
$field18= strtoupper($_POST['account_number']) ;
$field19= strtoupper($_POST['bank'] );
$field20= strtoupper($_POST['branch']) ;    
$field21= strtoupper($_POST['cdc']);
$field22= strtoupper($_SESSION['username']);
    
    //Ckech if exists
    $query = $db->query("SELECT * FROM parentReg WHERE parents_id = '$field1'");
    
    if($query->num_rows > 0){
    //Data exists
     //echo"<script>alert('Parent with that ID Already Exists');</script>";
        echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/error409_parrents_alreay_reg.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/error409_parrents_alreay_reg.html"
        </script>
        </head>
        </html>
        ';
    }else{
       
        
        
    //insertion
$stmt = $mysqli->prepare("INSERT INTO `parentReg` ( 
parents_id,
surname,
firstname,
nin,
phone,
gender,
maritalstatus,
occupation,
day,
month,
year,
location,
religion,
next_of_kin_surname,
next_of_kin_firstname,
relationship,
next_of_kin_telephone,
account_number,
bank,
branch,
cdc,
registered_by

) VALUES
(?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssssssssssssssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$field7,
$field8,
$field9,
$field10,
$field11,
$field12,
$field13,
$field14,
$field15,
$field16,
$field17,
$field18,
$field19,
$field20,
$field21,
$field22
                  
);
$stmt->execute();
$stmt->close();
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=../index.php">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "apply2.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();        

    
    
    }
}



/////////////////////////////////////////////////////////APPLY First  Child///////////////////////////////////////////////////////////////////////

///APPLY First  Child
function cildReg(){
require('connection.php');    
    
    // MySQL data
$_SESSION["student1_ID"] = strtoupper($_POST["student1_ID"]);
$field1  = strtoupper($_SESSION["parents_id"]);//$_POST['parents_id'];
$field2  = strtoupper($_SESSION["student1_ID"]);
$field3  = strtoupper($_POST['firstname']);
$field4  = strtoupper($_POST['surname'] );
$field5  = strtoupper($_POST['gender']);
$field6  = strtoupper($_POST['day']) ;
$field7  = strtoupper($_POST['month']);
$field8  = strtoupper($_POST['year'] );
$field9 = strtoupper($_POST['esbac']);
$field10 = strtoupper($_POST['from']) ;
$field11 = strtoupper($_POST['to']) ;
$field12= strtoupper($_SESSION['username']);
    
    
 //Ckech if exists
    $query = $db->query("SELECT * FROM childReg WHERE student_ID = '$field2'");
    
    if($query->num_rows > 0){
    //Data exists
     //echo"<script>alert('Parent with that ID Already Exists');</script>";
        echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/error409_parrents_alreay_reg.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/error409_student_alreay_reg.html"
        </script>
        </head>
        </html>
        ';
    }else{
       
    
    
    
        if($field10 <= $field11 ){
        
        
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `childReg` (
 `parents_id`,
 `student_ID`, 
 `firstname`, 
 `surname`,
 `gender`,
 `day`,
 `month`, 
 `year`, 
 `esbac`, 
 `fromm`, 
 `to`,
 `registered_by`
 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$field7,
$field8,
$field9,
$field10,
$field11,
$field12
);
$stmt->execute();
$stmt->close();
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=apply4.php">
        <title>Upload A PP for Child1</title>
        <script language="javascript">
        window.location.href = "apply4.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();        

        }else{
            echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/400_bad_request _from_to.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/400_bad_request _from_to.html"
        </script>
        </head>
        </html>
        ';
            
            
        }
        
        
    
    
    }
}




///////////////////////////////////////////////////////////APPLY child2///////////////////////////////////////////////////////////////////

///APPLY Second Child
function cildReg2(){
require('connection.php');    
    
    // MySQL data
$_SESSION["student2_ID"] = strtoupper($_POST["student2_ID"]);
$field1  = strtoupper($_SESSION["parents_id"]);//$_POST['parents_id'];
$field2  = strtoupper($_SESSION["student2_ID"]);
$field3  = strtoupper($_POST['firstname']);
$field4  = strtoupper($_POST['surname']) ;
$field5  = strtoupper($_POST['gender']);
$field6  = strtoupper($_POST['day']) ;
$field7  = strtoupper($_POST['month']);
$field8  = strtoupper($_POST['year']) ;
$field9 = strtoupper($_POST['esbac']);
$field10 = strtoupper($_POST['from']) ;
$field11 = strtoupper($_POST['to']) ;
$field12= strtoupper($_SESSION['username']);
    
    
 //Ckech if exists
    $query = $db->query("SELECT * FROM childReg2 WHERE student_ID = '$field2'");
    
    if($query->num_rows > 0){
    //Data exists
     //echo"<script>alert('Parent with that ID Already Exists');</script>";
        echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/error409_parrents_alreay_reg.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/error409_student_alreay_reg2.html"
        </script>
        </head>
        </html>
        ';
    }else{
       
    
    
    
        if($field10 <= $field11 ){
        
        
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `childReg2` (
 `parents_id`,
 `student_ID`, 
 `firstname`, 
 `surname`,
 `gender`,
 `day`,
 `month`, 
 `year`, 
 `esbac`, 
 `fromm`, 
 `to`,
  `registered_by`
 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$field7,
$field8,
$field9,
$field10,
$field11,
$field12
);
$stmt->execute();
$stmt->close();
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=apply7.php">
        <title>Upload A PP for Child1</title>
        <script language="javascript">
        window.location.href = "apply7.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();        

        }else{
            echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/400_bad_request _from_to.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/400_bad_request _from_to2.html"
        </script>
        </head>
        </html>
        ';
            
            
        }
        
        
    
    
    }
}











///////////////////////////////////////////////////////////APPLY child3///////////////////////////////////////////////////////////////////

///APPLY Third Child
function cildReg3(){
require('connection.php');    
    
    // MySQL data
$_SESSION["student3_ID"] = strtoupper($_POST["student3_ID"]);
$field1  = strtoupper($_SESSION["parents_id"]);//$_POST['parents_id'];
$field2  = strtoupper($_SESSION["student3_ID"]);
$field3  = strtoupper($_POST['firstname']);
$field4  = strtoupper($_POST['surname']) ;
$field5  = strtoupper($_POST['gender']);
$field6  = strtoupper($_POST['day']) ;
$field7  = strtoupper($_POST['month']);
$field8  = strtoupper($_POST['year']) ;
$field9 = strtoupper($_POST['esbac']);
$field10 = strtoupper($_POST['from']) ;
$field11 = strtoupper($_POST['to']) ;
$field12= strtoupper($_SESSION['username']);
    
    
 //Ckech if exists
    $query = $db->query("SELECT * FROM childReg3 WHERE student_ID = '$field2'");
    
    if($query->num_rows > 0){
    //Data exists
     //echo"<script>alert('Parent with that ID Already Exists');</script>";
        echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/error409_parrents_alreay_reg.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/error409_student_alreay_reg3.html"
        </script>
        </head>
        </html>
        ';
    }else{
       
    
    
    
        if($field10 <= $field11 ){
        
        
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `childReg3` (
 `parents_id`,
 `student_ID`, 
 `firstname`, 
 `surname`,
 `gender`,
 `day`,
 `month`, 
 `year`, 
 `esbac`, 
 `fromm`, 
 `to`,
  `registered_by`
 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$field7,
$field8,
$field9,
$field10,
$field11,
$field12
);
$stmt->execute();
$stmt->close();
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=apply10.php">
        <title>Upload A PP for Child1</title>
        <script language="javascript">
        window.location.href = "apply10.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();        

        }else{
            echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/400_bad_request _from_to.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/400_bad_request _from_to3.html"
        </script>
        </head>
        </html>
        ';
            
            
        }
        
        
    
    
    }
}





///////////////////////////////////////////////////////////APPLY child4///////////////////////////////////////////////////////////////////

///APPLY Third Child
function cildReg4(){
require('connection.php');    
    
    // MySQL data
$_SESSION["student4_ID"] = strtoupper($_POST["student4_ID"]);
$field1  = strtoupper($_SESSION["parents_id"]);//$_POST['parents_id'];
$field2  = strtoupper($_SESSION["student4_ID"]);
$field3  = strtoupper($_POST['firstname']);
$field4  = strtoupper($_POST['surname']) ;
$field5  = strtoupper($_POST['gender']);
$field6  = strtoupper($_POST['day']) ;
$field7  = strtoupper($_POST['month']);
$field8  = strtoupper($_POST['year']) ;
$field9 = strtoupper($_POST['esbac']);
$field10 = strtoupper($_POST['from']) ;
$field11 = strtoupper($_POST['to']) ;
$field12= strtoupper($_SESSION['username']);
    
    
 //Ckech if exists
    $query = $db->query("SELECT * FROM childReg4 WHERE student_ID = '$field2'");
    
    if($query->num_rows > 0){
    //Data exists
     //echo"<script>alert('Parent with that ID Already Exists');</script>";
        echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/error409_parrents_alreay_reg.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/child4exist.html"
        </script>
        </head>
        </html>
        ';
    }else{
       
    
    
    
        if($field10 <= $field11 ){
        
        
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `childReg4` (
 `parents_id`,
 `student_ID`, 
 `firstname`, 
 `surname`,
 `gender`,
 `day`,
 `month`, 
 `year`, 
 `esbac`, 
 `fromm`, 
 `to`,
  `registered_by`
 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$field7,
$field8,
$field9,
$field10,
$field11,
$field12
);
$stmt->execute();
$stmt->close();
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=apply13.php">
        <title>Upload A PP for Child1</title>
        <script language="javascript">
        window.location.href = "apply13.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();        

        }else{
            echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/child4_from_to.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/child4_from_to.html"
        </script>
        </head>
        </html>
        ';
            
            
        }
        
        
    
    
    }
}







///////////////////////////////////////////////////////////APPLY child5///////////////////////////////////////////////////////////////////

///APPLY Third Child
function cildReg5(){
require('connection.php');    
    
    // MySQL data
$_SESSION["student5_ID"] = strtoupper($_POST["student5_ID"]);
$field1  = strtoupper($_SESSION["parents_id"]);//$_POST['parents_id'];
$field2  = strtoupper($_SESSION["student5_ID"]);
$field3  = strtoupper($_POST['firstname']);
$field4  = strtoupper($_POST['surname']) ;
$field5  = strtoupper($_POST['gender']);
$field6  = strtoupper($_POST['day']) ;
$field7  = strtoupper($_POST['month']);
$field8  = strtoupper($_POST['year']) ;
$field9 = strtoupper($_POST['esbac']);
$field10 = strtoupper($_POST['from']) ;
$field11 = strtoupper($_POST['to']) ;
$field12= strtoupper($_SESSION['username']);
    
    
 //Ckech if exists
    $query = $db->query("SELECT * FROM childReg5 WHERE student_ID = '$field2'");
    
    if($query->num_rows > 0){
    //Data exists
     //echo"<script>alert('Parent with that ID Already Exists');</script>";
        echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/error409_parrents_alreay_reg.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/child5exist.html"
        </script>
        </head>
        </html>
        ';
    }else{
       
    
    
    
        if($field10 <= $field11 ){
        
        
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `childReg5` (
 `parents_id`,
 `student_ID`, 
 `firstname`, 
 `surname`,
 `gender`,
 `day`,
 `month`, 
 `year`, 
 `esbac`, 
 `fromm`, 
 `to`,
  `registered_by`
 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$field7,
$field8,
$field9,
$field10,
$field11,
$field12
);
$stmt->execute();
$stmt->close();
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=apply16.php">
        <title>Upload A PP for Child1</title>
        <script language="javascript">
        window.location.href = "apply16.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();        

        }else{
            echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/child4_from_to.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/child5_from_to.html"
        </script>
        </head>
        </html>
        ';
            
            
        }
        
        
    
    
    }
}







///////////////////////////////////////////////////////////APPLY child6///////////////////////////////////////////////////////////////////

///APPLY six Child
function cildReg6(){
require('connection.php');    
    
    // MySQL data
$_SESSION["student6_ID"] = strtoupper($_POST["student6_ID"]);
$field1  = strtoupper($_SESSION["parents_id"]);//$_POST['parents_id'];
$field2  = strtoupper($_SESSION["student6_ID"]);
$field3  = strtoupper($_POST['firstname']);
$field4  = strtoupper($_POST['surname']) ;
$field5  = strtoupper($_POST['gender']);
$field6  = strtoupper($_POST['day']) ;
$field7  = strtoupper($_POST['month']);
$field8  = strtoupper($_POST['year']) ;
$field9 = strtoupper($_POST['esbac']);
$field10 = strtoupper($_POST['from']) ;
$field11 = strtoupper($_POST['to']) ;
$field12= strtoupper($_SESSION['username']);
    
    
 //Ckech if exists
    $query = $db->query("SELECT * FROM childReg6 WHERE student_ID = '$field2'");
    
    if($query->num_rows > 0){
    //Data exists
     //echo"<script>alert('Parent with that ID Already Exists');</script>";
        echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/child6exist.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/child6exist.html"
        </script>
        </head>
        </html>
        ';
    }else{
       
    
    
    
        if($field10 <= $field11 ){
        
        
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `childReg6` (
 `parents_id`,
 `student_ID`, 
 `firstname`, 
 `surname`,
 `gender`,
 `day`,
 `month`, 
 `year`, 
 `esbac`, 
 `fromm`, 
 `to`,
  `registered_by`
 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$field7,
$field8,
$field9,
$field10,
$field11,
$field12
);
$stmt->execute();
$stmt->close();
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=apply16.php">
        <title>Upload A PP for Child1</title>
        <script language="javascript">
        window.location.href = "apply19.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();        

        }else{
            echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/child4_from_to.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/child6_from_to.html"
        </script>
        </head>
        </html>
        ';
            
            
        }
        
        
    
    
    }
}








///////////////////////////////////////////////////////////APPLY child7///////////////////////////////////////////////////////////////////

///APPLY Seven Child
function cildReg7(){
require('connection.php');    
    
    // MySQL data
$_SESSION["student7_ID"] = strtoupper($_POST["student7_ID"]);
$field1  = strtoupper($_SESSION["parents_id"]);//$_POST['parents_id'];
$field2  = strtoupper($_SESSION["student7_ID"]);
$field3  = strtoupper($_POST['firstname']);
$field4  = strtoupper($_POST['surname']) ;
$field5  = strtoupper($_POST['gender']);
$field6  = strtoupper($_POST['day']) ;
$field7  = strtoupper($_POST['month']);
$field8  = strtoupper($_POST['year']) ;
$field9 = strtoupper($_POST['esbac']);
$field10 = strtoupper($_POST['from']) ;
$field11 = strtoupper($_POST['to']) ;
$field12= strtoupper($_SESSION['username']);
    
    
 //Ckech if exists
    $query = $db->query("SELECT * FROM childReg7 WHERE student_ID = '$field2'");
    
    if($query->num_rows > 0){
    //Data exists
     //echo"<script>alert('Parent with that ID Already Exists');</script>";
        echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/child6exist.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/child7exist.html"
        </script>
        </head>
        </html>
        ';
    }else{
       
    
    
    
        if($field10 <= $field11 ){
        
        
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `childReg7` (
 `parents_id`,
 `student_ID`, 
 `firstname`, 
 `surname`,
 `gender`,
 `day`,
 `month`, 
 `year`, 
 `esbac`, 
 `fromm`, 
 `to`,
  `registered_by`
 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$field7,
$field8,
$field9,
$field10,
$field11,
$field12
);
$stmt->execute();
$stmt->close();
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=apply22.php">
        <title>Upload A PP for Child1</title>
        <script language="javascript">
        window.location.href = "apply22.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();        

        }else{
            echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/child4_from_to.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/child7_from_to.html"
        </script>
        </head>
        </html>
        ';
            
            
        }
        
        
    
    
    }
}









///////////////////////////////////////////////////////////APPLY child8///////////////////////////////////////////////////////////////////

///APPLY Seven Child
function cildReg8(){
require('connection.php');    
    
    // MySQL data
$_SESSION["student8_ID"] = strtoupper($_POST["student8_ID"]);
$field1  = strtoupper($_SESSION["parents_id"]);//$_POST['parents_id'];
$field2  = strtoupper($_SESSION["student8_ID"]);
$field3  = strtoupper($_POST['firstname']);
$field4  = strtoupper($_POST['surname']) ;
$field5  = strtoupper($_POST['gender']);
$field6  = strtoupper($_POST['day']) ;
$field7  = strtoupper($_POST['month']);
$field8  = strtoupper($_POST['year']) ;
$field9 = strtoupper($_POST['esbac']);
$field10 = strtoupper($_POST['from']) ;
$field11 = strtoupper($_POST['to']) ;
$field12= strtoupper($_SESSION['username']);
    
    
 //Ckech if exists
    $query = $db->query("SELECT * FROM childReg8 WHERE student_ID = '$field2'");
    
    if($query->num_rows > 0){
    //Data exists
     //echo"<script>alert('Parent with that ID Already Exists');</script>";
        echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/child6exist.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/child8exist.html"
        </script>
        </head>
        </html>
        ';
    }else{
       
    
    
    
        if($field10 <= $field11 ){
        
        
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `childReg8` (
 `parents_id`,
 `student_ID`, 
 `firstname`, 
 `surname`,
 `gender`,
 `day`,
 `month`, 
 `year`, 
 `esbac`, 
 `fromm`, 
 `to`,
  `registered_by`
 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$field7,
$field8,
$field9,
$field10,
$field11,
$field12
);
$stmt->execute();
$stmt->close();
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=apply25.php">
        <title>Upload A PP for Child1</title>
        <script language="javascript">
        window.location.href = "apply25.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();        

        }else{
            echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=errors/child8_from_to.html">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "errors/child8_from_to.html"
        </script>
        </head>
        </html>
        ';
            
            
        }
        
        
    
    
    }
}




function savings(){
require('connection.php');  
    
$field1  = strtoupper($_POST['parents_id']) ;
$field2  = strtoupper($_POST['student_id']) ;
$field3  = $_POST['term'] ;
$field4  = $_POST['total_fees'] ;
$field5= strtoupper($_SESSION['username']);
$field6  = $_POST['processing_fees'] ;
$savingsfee = ($field4*1)-($field6*1);
$text_value = $field4*0.10; 
$cdc  = strtoupper($_POST['cdc']) ;    
    ///////checking for equality in 10%
if($field4 < $field6 ){
   // echo("<script>alert('Invalid Processing Fees');</script>");
    echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=savings.php">
        <title>Saving</title>
        <script language="javascript">
        window.location.href = "invalidprocssesing.php"
        </script>
        </head>
        </html>
        ';
        
}else
    
    
if($field3 == "1"){    
    
    
    
///////////////////////////////////////////////////// TERM 1 ////////////////////////////////////////
     //Ckech if exists
    $query = $db->query("
    SELECT * FROM 
    childReg c1,
    childReg2 c2,
    childReg3 c3,
    childReg4 c4,
    childReg5 c5,
    childReg6 c6,
    childReg7 c7,
    childReg8 c8
    WHERE

c1.student_ID = '$field2' 
OR
c2.student_ID = '$field2' 
OR
c3.student_ID = '$field2' 
OR
c4.student_ID = '$field2' 
OR
c5.student_ID = '$field2' 
OR
c6.student_ID = '$field2' 
OR
c7.student_ID = '$field2' 
OR
c8.student_ID = '$field2' 
");
    
    if($query->num_rows > 0){
       
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `term1` (
 `parents_id`,
 `child_id`, 
 `term`, 
 `total_fees`,
 `collector`,
  `processing_fees`,
  `cdc`
  
 
 
 ) VALUES (?,?,?,?,?,?,?)");
    

$stmt->bind_param('sssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$cdc
);
$stmt->execute();
$stmt->close();
        
        
        savingrecipt();
        
        require('generate_recipt_number.php');
        
           echo '
             <style>
                        @media print{
                    /*Hide every content other than element */
                        body *{
                            visibility: visible;
                            
                        }
                            .logo *{
                                
                                visibility: hidden;
                            }
                            
                            
                            .btn *{
                                
                                visibility: hidden;
                            }
                            
                            .p *{
                                
                                visibility: hidden;
                            }
                            
                            .top-nav{
                                visibility: hidden;    
                            }
                            
                            
                        /* Then display print container elements */
                        .print-container, print-container * {
                            visibility: visible;
                            
                            
                        }
                            
                            /* Adjusting the postioning to start form Top left */
                            .print-container{
                               position:  absolute;
                                 top:0px;
                                 left:0px;
                                bottom: 0px;
                                right: 0px;
                                
                                
                                
                            }
                            
                            table{
                            
                            border:1px solid black;
                            }
                            
                    
                        }
                    
                    </style>
                    
           
           
           
           
           
           
           
           
           
           
           
           
           
           
                                  
                                     <div class ="row">
                 <div class="col-sm-6">
                         <table style="border:1px solid black;";>
                         <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><th colspan=7><h4>  BWEYOGERERE &emsp; ROOTS &emsp; INITIATIVE &emsp; (LTD)</h4><br/>Savings Receipt</th></tr>  
              
            <tr><h6><td colspan=4>Receipt No_'.$_SESSION["receipt_numberExists"].'</td>           
                                     
            <td colspan=3>Date:- ' .date("Y/m/d") .'</td></h6><br/><br/></tr>
            
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th>Parents ID:- <td><u>&emsp;&emsp;'.$field1.'&emsp;&emsp;</u></td><th>&emsp;Child ID:- </th><td><u>&emsp;&emsp;'.$field2.'&emsp;&emsp;</u> </td><th>Term:- </th><td colspan =1><u>&emsp;&emsp;'.$field3.'&emsp;&emsp;</u></td></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th colspan =3 >Savings:- Ugx'.$savingsfee.'
              <th>CDC:- '.$cdc.'</th><th colspan = 3>Processing Fees:- Ugx'.$field6.'</th></tr>
            <tr><td colspan =3>&emsp;&emsp;&emsp; </td><th>Total</th><th colspan =2>Ugx'.$field4.'</th></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            
            </table>
        </div></div>
         <div class="p"> <button onclick="window.print()">Print</button></div>
        ';
        
        
        /*
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=savings.php">
        <title>Saving</title>
        <script language="javascript">
        window.location.href = "saving_receipt.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();   
*/
    }else{
        
      echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=notfound.php">
        <title>Not Found</title>
        <script language="javascript">
        window.location.href = "errors/notfound.php"
        </script>
        </head>
        </html>
        '; 
        
        
    }
    
    
}else if($field3 == "2"){
    
  
    
      
    
///////////////////////////////////////////////////// TERM 2 ////////////////////////////////////////
     //Ckech if exists
    $query = $db->query("
    SELECT * FROM 
    childReg c1,
    childReg2 c2,
    childReg3 c3,
    childReg4 c4,
    childReg5 c5,
    childReg6 c6,
    childReg7 c7,
    childReg8 c8
    WHERE

c1.student_ID = '$field2' 
OR
c2.student_ID = '$field2' 
OR
c3.student_ID = '$field2' 
OR
c4.student_ID = '$field2' 
OR
c5.student_ID = '$field2' 
OR
c6.student_ID = '$field2' 
OR
c7.student_ID = '$field2' 
OR
c8.student_ID = '$field2' 
");
    
    if($query->num_rows > 0){
       
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `term2` (
 `parents_id`,
 `child_id`, 
 `term`, 
 `total_fees`,
 `collector`,
  `processing_fees`,
  `cdc`
  
 
 
 ) VALUES (?,?,?,?,?,?,?)");
    

$stmt->bind_param('sssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$cdc
);
$stmt->execute();
$stmt->close();
        
        
        savingrecipt();
        
        require('generate_recipt_number.php');
        
           echo '
             <style>
                        @media print{
                    /*Hide every content other than element */
                        body *{
                            visibility: visible;
                            
                        }
                            .logo *{
                                
                                visibility: hidden;
                            }
                            
                            
                            .btn *{
                                
                                visibility: hidden;
                            }
                            
                            .p *{
                                
                                visibility: hidden;
                            }
                            
                            .top-nav{
                                visibility: hidden;    
                            }
                            
                            
                        /* Then display print container elements */
                        .print-container, print-container * {
                            visibility: visible;
                            
                            
                        }
                            
                            /* Adjusting the postioning to start form Top left */
                            .print-container{
                               position:  absolute;
                                 top:0px;
                                 left:0px;
                                bottom: 0px;
                                right: 0px;
                                
                                
                                
                            }
                            
                            table{
                            
                            border:1px solid black;
                            }
                            
                    
                        }
                    
                    </style>
                    
           
           
           
           
           
           
           
           
           
           
           
           
           
           
                                  
                                     <div class ="row">
                 <div class="col-sm-6">
                         <table style="border:1px solid black;";>
                         <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><th colspan=7><h4>  BWEYOGERERE &emsp; ROOTS &emsp; INITIATIVE &emsp; (LTD)</h4><br/>Savings Receipt</th></tr>  
              
            <tr><h6><td colspan=4>Receipt No_'.$_SESSION["receipt_numberExists"].'</td>           
                                     
            <td colspan=3>Date:- ' .date("Y/m/d") .'</td></h6><br/><br/></tr>
            
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th>Parents ID:- <td><u>&emsp;&emsp;'.$field1.'&emsp;&emsp;</u></td><th>&emsp;Child ID:- </th><td><u>&emsp;&emsp;'.$field2.'&emsp;&emsp;</u> </td><th>Term:- </th><td colspan =1><u>&emsp;&emsp;'.$field3.'&emsp;&emsp;</u></td></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th colspan =3 >Savings:- Ugx'.$savingsfee.'
              <th>CDC:- '.$cdc.'</th><th colspan = 3>Processing Fees:- Ugx'.$field6.'</th></tr>
            <tr><td colspan =3>&emsp;&emsp;&emsp; </td><th>Total</th><th colspan =2>Ugx'.$field4.'</th></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            
            </table>
        </div></div>
         <div class="p"> <button onclick="window.print()">Print</button></div>
        ';
        
        
        /*
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=savings.php">
        <title>Saving</title>
        <script language="javascript">
        window.location.href = "saving_receipt.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();   
*/
    }else{
        
      echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=notfound.php">
        <title>Not Found</title>
        <script language="javascript">
        window.location.href = "errors/notfound.php"
        </script>
        </head>
        </html>
        '; 
        
        
    }  
    
    
    
    
    
    
    
    
    
    
    
    
    
}else if($field3 == "3"){
    
    
     
    
///////////////////////////////////////////////////// TERM 3 ////////////////////////////////////////
     //Ckech if exists
    $query = $db->query("
    SELECT * FROM 
    childReg c1,
    childReg2 c2,
    childReg3 c3,
    childReg4 c4,
    childReg5 c5,
    childReg6 c6,
    childReg7 c7,
    childReg8 c8
    WHERE

c1.student_ID = '$field2' 
OR
c2.student_ID = '$field2' 
OR
c3.student_ID = '$field2' 
OR
c4.student_ID = '$field2' 
OR
c5.student_ID = '$field2' 
OR
c6.student_ID = '$field2' 
OR
c7.student_ID = '$field2' 
OR
c8.student_ID = '$field2' 
");
    
    if($query->num_rows > 0){
       
        
    //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `term3` (
 `parents_id`,
 `child_id`, 
 `term`, 
 `total_fees`,
 `collector`,
  `processing_fees`,
  `cdc`
  
 
 
 ) VALUES (?,?,?,?,?,?,?)");
    

$stmt->bind_param('sssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$cdc
);
$stmt->execute();
$stmt->close();
        
        
        savingrecipt();
        
        require('generate_recipt_number.php');
        
           echo '
             <style>
                        @media print{
                    /*Hide every content other than element */
                        body *{
                            visibility: visible;
                            
                        }
                            .logo *{
                                
                                visibility: hidden;
                            }
                            
                            
                            .btn *{
                                
                                visibility: hidden;
                            }
                            
                            .p *{
                                
                                visibility: hidden;
                            }
                            
                            .top-nav{
                                visibility: hidden;    
                            }
                            
                            
                        /* Then display print container elements */
                        .print-container, print-container * {
                            visibility: visible;
                            
                            
                        }
                            
                            /* Adjusting the postioning to start form Top left */
                            .print-container{
                               position:  absolute;
                                 top:0px;
                                 left:0px;
                                bottom: 0px;
                                right: 0px;
                                
                                
                                
                            }
                            
                            table{
                            
                            border:1px solid black;
                            }
                            
                    
                        }
                    
                    </style>
                    
           
           
           
           
           
           
           
           
           
           
           
           
           
           
                                  
                                     <div class ="row">
                 <div class="col-sm-6">
                         <table style="border:1px solid black;";>
                         <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><th colspan=7><h4>  BWEYOGERERE &emsp; ROOTS &emsp; INITIATIVE &emsp; (LTD)</h4><br/>Savings Receipt</th></tr>  
              
            <tr><h6><td colspan=4>Receipt No_'.$_SESSION["receipt_numberExists"].'</td>           
                                     
            <td colspan=3>Date:- ' .date("Y/m/d") .'</td></h6><br/><br/></tr>
            
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th>Parents ID:- <td><u>&emsp;&emsp;'.$field1.'&emsp;&emsp;</u></td><th>&emsp;Child ID:- </th><td><u>&emsp;&emsp;'.$field2.'&emsp;&emsp;</u> </td><th>Term:- </th><td colspan =1><u>&emsp;&emsp;'.$field3.'&emsp;&emsp;</u></td></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th colspan =3 >Savings:- Ugx'.$savingsfee.'
              <th>CDC:- '.$cdc.'</th><th colspan = 3>Processing Fees:- Ugx'.$field6.'</th></tr>
            <tr><td colspan =3>&emsp;&emsp;&emsp; </td><th>Total</th><th colspan =2>Ugx'.$field4.'</th></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            
            </table>
        </div></div>
         <div class="p"> <button onclick="window.print()">Print</button></div>
        ';
        
        
        /*
echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=savings.php">
        <title>Saving</title>
        <script language="javascript">
        window.location.href = "saving_receipt.php"
        </script>
        </head>
        </html>
        ';
        
$stmt->execute();
$stmt->close();   
*/
    }else{
        
      echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=notfound.php">
        <title>Not Found</title>
        <script language="javascript">
        window.location.href = "errors/notfound.php"
        </script>
        </head>
        </html>
        '; 
        
        
    }  
    
    
    
}
    else{
        
        echo "Not Selected";
    }
    
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function withDraw(){
    
   
    
    
    
    require('connection.php');  
    
$field1  = $_POST['parents_id'] ;
$field2  = $_POST['student_id'] ;
$field3  = $_POST['term'] ;
$field4= $_SESSION['username'];
    
    
if($field3 == "1"){    
///////////////////////////////////////////////////// TERM 1 ////////////////////////////////////////
    
    
    
     //Ckech if exists
    $query = $db->query("
   
   
   SELECT * FROM `term1` WHERE with_draws_status = 'WITH DRAW NOT PAID'
   AND
   parents_id = '$field1' AND child_id = '$field2'  
");
    
    if($query->num_rows > 0){
        // if exists
        
         ////Selecting and inserting data


// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("

SELECT 

term,
savings
FROM 
term1
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' AND with_draws_status = 'WITH DRAW NOT PAID' AND term_status = 'On Going' ORDER BY dates ASC
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
      
        $term = $row["term"];     
        $savings = $row["savings"];     
        
    
    
$field01  = strtoupper($_POST['parents_id']) ;
$field02  = strtoupper($_POST['student_id']) ;
$field03  =  $term;
$field04  = $savings ;
$field05= $_SESSION['username'];
$field06  = "With Drawn" ;
$field07 = strtoupper($_POST["cdc"]);
$field08 = date("Y/m/d");
$field9 = strtoupper($_SESSION["receipt_numberExists"]);
   //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `withdraw_receipt` (
 `pid`,
 `cid`, 
 `term`, 
 `with_draw`,
 `withdrawn_by`,
 `status`,
 `cdc`,
`date`,
`receipt_number`
  
  
 
 
 ) VALUES (?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('sssssssss', 
$field01,
$field02,
$field03,
$field04,
$field05,
$field06,
$field07,
$field08,
$field9                  
);
$stmt->execute();
         }} 
    
   $query = $db->query("

SELECT 
SUM((savings+education_grants)) AS accounts_total,
text,
text1
FROM 
term1
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' AND with_draws_status = 'WITH DRAW NOT PAID' AND term_status = 'On Going'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $accounts_total = $row["accounts_total"];
         $text = $row["text"];
        $text1 =$row["text1"];
$field01  = strtoupper($_POST['parents_id']) ;
$field02  = strtoupper($_POST['student_id']) ;
$field03  =  "1";
$field05= $_SESSION['username'];
$field06  = "With Drawn" ;
$field07 = strtoupper($_POST["cdc"]);
$field08 = date("Y/m/d");
$field9 = strtoupper($_SESSION["receipt_numberExists"]);
  
    
    
    $stmt = $mysqli->prepare("INSERT INTO `total_withdraw_receipt` (
 `pid`,
 `cid`, 
 `term`, 
 `total_with_draw`,
 `withdrawn_by`,
 `status`,
 `cdc`,
  `date`,
  `receipt_number`
  
 
 
 ) VALUES (?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('sssssssss', 
$field01,
$field02,
$field03,
$accounts_total,
$field05,
$field06,
$field07,
$field08,
$field9
);
$stmt->execute();
   }}         

    
    
    
    
$stmt->close();

    
  
    
    
 
        
        
       //UPDATE AFTER
         $db->query( "UPDATE term1 
                SET 
                with_draws_status ='PAID',
                withdrawn_by ='$field4',
                term_status ='ENDED'
                WHERE parents_id = '$field1' AND child_id = '$field2'
                ");
        
        
        
        
   /////////////////////////////////////////////////////////////////////////////////////////////////////////     
        
        
        
        
        
        
        
        //  require('generate_recipt_number.php');
        
           echo '
             <style>
                        @media print{
                    /*Hide every content other than element */
                        body *{
                            visibility: visible;
                            
                        }
                            .logo *{
                                
                                visibility: hidden;
                            }
                            
                            
                            .btn *{
                                
                                visibility: hidden;
                            }
                            
                            .p *{
                                
                                visibility: hidden;
                            }
                            
                            .top-nav{
                                visibility: hidden;    
                            }
                            
                            
                        /* Then display print container elements */
                        .print-container, print-container * {
                            visibility: visible;
                            
                            
                        }
                            
                            /* Adjusting the postioning to start form Top left */
                            .print-container{
                               position:  absolute;
                                 top:0px;
                                 left:0px;
                                bottom: 0px;
                                right: 0px;
                                
                                
                                
                            }
                            
                            table{
                            
                            border:1px solid black;
                            }
                            
                    
                        }
                    
                    </style>
                    
           
           
           
           
           
           
           
           
           
           
           
           
           
           
                                  
                                     <div class ="row">
                 <div class="col-sm-6">
                         <table style="border:1px solid black;";>
                         <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><th colspan=7><h4>  BWEYOGERERE &emsp; ROOTS &emsp; INITIATIVE &emsp; (LTD)</h4><br/>Withdraw Receipt</th></tr>  
              
            <tr><h6><td colspan=4>Receipt No_ ' .$field9 .'</td>           
                                     
            <td colspan=3>Date:- ' .date("Y/m/d") .'</td></h6><br/><br/></tr>
            
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th>Parents ID:- <td><u>&emsp;&emsp;'.strtoupper($field1).'&emsp;&emsp;</u></td><th>&emsp;Child ID:- </th><td><u>&emsp;&emsp;'.strtoupper($field2).'&emsp;&emsp;</u> </td><th>Term:- </th><td colspan =1><u>&emsp;&emsp;'.strtoupper($field3).'&emsp;&emsp;</u></td></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th colspan =3 >CDC:- '.ucwords($field07).'</th></tr>
            <tr><td colspan =3>&emsp;&emsp;&emsp; </td><th>Total Withdrawn</th><th colspan =2>Ugx'.$accounts_total.'</th></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><td colspan =3>Given By </td> <td colspan =4>Taken By </td> </tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =3><u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u> </td> <td colspan =4><u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u> </td></tr>
             <tr><td colspan =3>Sign </td> <td colspan =4>Sign </td> </tr>
            
            </table>
        </div></div>
         <div class="p"> <button onclick="window.print()">Print</button></div>
        ';
        
  
    }else{
      // echo "not found";
        
     echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=notfound.php">
        <title>Not Found</title>
        <script language="javascript">
        window.location.href = "TermError.php"
        </script>
        </head>
        </html>
        '; 
        
    }
    
    
}else if($field3 == "2"){
    
 ///////////////////////////////////////////////////// TERM 2 ////////////////////////////////////////
    
    
    
     //Ckech if exists
    $query = $db->query("
   
   
   SELECT * FROM `term2` WHERE with_draws_status = 'WITH DRAW NOT PAID'
   AND
   parents_id = '$field1' AND child_id = '$field2'  
");
    
    if($query->num_rows > 0){
        // if exists
        
         ////Selecting and inserting data


// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("

SELECT 

term,
savings
FROM 
term2
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' AND with_draws_status = 'WITH DRAW NOT PAID' AND term_status = 'On Going' ORDER BY dates ASC
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
      
        $term = $row["term"];     
        $savings = $row["savings"];     
        
    
    
$field01  = strtoupper($_POST['parents_id']) ;
$field02  = strtoupper($_POST['student_id']) ;
$field03  =  $term;
$field04  = $savings ;
$field05= $_SESSION['username'];
$field06  = "With Drawn" ;
$field07 = strtoupper($_POST["cdc"]);
$field08 = date("Y/m/d");
$field9 = strtoupper($_SESSION["receipt_numberExists"]);
   //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `withdraw_receipt` (
 `pid`,
 `cid`, 
 `term`, 
 `with_draw`,
 `withdrawn_by`,
 `status`,
 `cdc`,
`date`,
`receipt_number`
  
  
 
 
 ) VALUES (?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('sssssssss', 
$field01,
$field02,
$field03,
$field04,
$field05,
$field06,
$field07,
$field08,
$field9                  
);
$stmt->execute();
         }} 
    
   $query = $db->query("

SELECT 
SUM((savings+education_grants)) AS accounts_total,
text,
text1
FROM 
term2
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' AND with_draws_status = 'WITH DRAW NOT PAID' AND term_status = 'On Going'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $accounts_total = $row["accounts_total"];
         $text = $row["text"];
        $text1 =$row["text1"];
$field01  = strtoupper($_POST['parents_id']) ;
$field02  = strtoupper($_POST['student_id']) ;
$field03  =  "2";
$field05= $_SESSION['username'];
$field06  = "With Drawn" ;
$field07 = strtoupper($_POST["cdc"]);
$field08 = date("Y/m/d");
$field9 = strtoupper($_SESSION["receipt_numberExists"]);
  
    
    
    $stmt = $mysqli->prepare("INSERT INTO `total_withdraw_receipt` (
 `pid`,
 `cid`, 
 `term`, 
 `total_with_draw`,
 `withdrawn_by`,
 `status`,
 `cdc`,
  `date`,
  `receipt_number`
  
 
 
 ) VALUES (?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('sssssssss', 
$field01,
$field02,
$field03,
$accounts_total,
$field05,
$field06,
$field07,
$field08,
$field9
);
$stmt->execute();
   }}         

    
    
    
    
$stmt->close();

    
  
    
    
 
        
        
       //UPDATE AFTER
         $db->query( "UPDATE term2 
                SET 
                with_draws_status ='PAID',
                withdrawn_by ='$field4',
                term_status ='ENDED'
                WHERE parents_id = '$field1' AND child_id = '$field2'
                ");
        
        
        
        
   /////////////////////////////////////////////////////////////////////////////////////////////////////////     
        
        
        
        
        
        
        
        //  require('generate_recipt_number.php');
        
           echo '
             <style>
                        @media print{
                    /*Hide every content other than element */
                        body *{
                            visibility: visible;
                            
                        }
                            .logo *{
                                
                                visibility: hidden;
                            }
                            
                            
                            .btn *{
                                
                                visibility: hidden;
                            }
                            
                            .p *{
                                
                                visibility: hidden;
                            }
                            
                            .top-nav{
                                visibility: hidden;    
                            }
                            
                            
                        /* Then display print container elements */
                        .print-container, print-container * {
                            visibility: visible;
                            
                            
                        }
                            
                            /* Adjusting the postioning to start form Top left */
                            .print-container{
                               position:  absolute;
                                 top:0px;
                                 left:0px;
                                bottom: 0px;
                                right: 0px;
                                
                                
                                
                            }
                            
                            table{
                            
                            border:1px solid black;
                            }
                            
                    
                        }
                    
                    </style>
                    
           
           
           
           
           
           
           
           
           
           
           
           
           
           
                                  
                                     <div class ="row">
                 <div class="col-sm-6">
                         <table style="border:1px solid black;";>
                         <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><th colspan=7><h4>  BWEYOGERERE &emsp; ROOTS &emsp; INITIATIVE &emsp; (LTD)</h4><br/>Withdraw Receipt</th></tr>  
              
            <tr><h6><td colspan=4>Receipt No_ ' .$field9 .'</td>           
                                     
            <td colspan=3>Date:- ' .date("Y/m/d") .'</td></h6><br/><br/></tr>
            
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th>Parents ID:- <td><u>&emsp;&emsp;'.strtoupper($field1).'&emsp;&emsp;</u></td><th>&emsp;Child ID:- </th><td><u>&emsp;&emsp;'.strtoupper($field2).'&emsp;&emsp;</u> </td><th>Term:- </th><td colspan =1><u>&emsp;&emsp;'.strtoupper($field3).'&emsp;&emsp;</u></td></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th colspan =3 >CDC:- '.ucwords($field07).'</th></tr>
            <tr><td colspan =3>&emsp;&emsp;&emsp; </td><th>Total Withdrawn</th><th colspan =2>Ugx'.$accounts_total.'</th></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><td colspan =3>Given By </td> <td colspan =4>Taken By </td> </tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =3><u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u> </td> <td colspan =4><u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u> </td></tr>
             <tr><td colspan =3>Sign </td> <td colspan =4>Sign </td> </tr>
            
            </table>
        </div></div>
         <div class="p"> <button onclick="window.print()">Print</button></div>
        ';
        
      
      
    }else{
      // echo "not found";
        
     echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=notfound.php">
        <title>Not Found</title>
        <script language="javascript">
        window.location.href = "TermError.php"
        </script>
        </head>
        </html>
        '; 
        
    }
    
   
    
    
}else if($field3 == "3"){
    
    
 ///////////////////////////////////////////////////// TERM 1 ////////////////////////////////////////
    
    
    
     //Ckech if exists
    $query = $db->query("
   
   
   SELECT * FROM `term3` WHERE with_draws_status = 'WITH DRAW NOT PAID'
   AND
   parents_id = '$field1' AND child_id = '$field2'  
");
    
    if($query->num_rows > 0){
        // if exists
        
         ////Selecting and inserting data


// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("

SELECT 

term,
savings
FROM 
term3
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' AND with_draws_status = 'WITH DRAW NOT PAID' AND term_status = 'On Going' ORDER BY dates ASC
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
      
        $term = $row["term"];     
        $savings = $row["savings"];     
        
    
    
$field01  = strtoupper($_POST['parents_id']) ;
$field02  = strtoupper($_POST['student_id']) ;
$field03  =  $term;
$field04  = $savings ;
$field05= $_SESSION['username'];
$field06  = "With Drawn" ;
$field07 = strtoupper($_POST["cdc"]);
$field08 = date("Y/m/d");
$field9 = strtoupper($_SESSION["receipt_numberExists"]);
   //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `withdraw_receipt` (
 `pid`,
 `cid`, 
 `term`, 
 `with_draw`,
 `withdrawn_by`,
 `status`,
 `cdc`,
`date`,
`receipt_number`
  
  
 
 
 ) VALUES (?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('sssssssss', 
$field01,
$field02,
$field03,
$field04,
$field05,
$field06,
$field07,
$field08,
$field9                  
);
$stmt->execute();
         }} 
    
   $query = $db->query("

SELECT 
SUM((savings+education_grants)) AS accounts_total,
text,
text1
FROM 
term3
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' AND with_draws_status = 'WITH DRAW NOT PAID' AND term_status = 'On Going'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $accounts_total = $row["accounts_total"];
         $text = $row["text"];
        $text1 =$row["text1"];
$field01  = strtoupper($_POST['parents_id']) ;
$field02  = strtoupper($_POST['student_id']) ;
$field03  =  "3";
$field05= $_SESSION['username'];
$field06  = "With Drawn" ;
$field07 = strtoupper($_POST["cdc"]);
$field08 = date("Y/m/d");
$field9 = strtoupper($_SESSION["receipt_numberExists"]);
  
    
    
    $stmt = $mysqli->prepare("INSERT INTO `total_withdraw_receipt` (
 `pid`,
 `cid`, 
 `term`, 
 `total_with_draw`,
 `withdrawn_by`,
 `status`,
 `cdc`,
  `date`,
  `receipt_number`
  
 
 
 ) VALUES (?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('sssssssss', 
$field01,
$field02,
$field03,
$accounts_total,
$field05,
$field06,
$field07,
$field08,
$field9
);
$stmt->execute();
   }}         

    
    
    
    
$stmt->close();

    
  
    
    
 
        
        
       //UPDATE AFTER
         $db->query( "UPDATE term3 
                SET 
                with_draws_status ='PAID',
                withdrawn_by ='$field4',
                term_status ='ENDED'
                WHERE parents_id = '$field1' AND child_id = '$field2'
                ");
        
        
        
        
   /////////////////////////////////////////////////////////////////////////////////////////////////////////     
        
        
        
        
        
        
        
        //  require('generate_recipt_number.php');
        
           echo '
             <style>
                        @media print{
                    /*Hide every content other than element */
                        body *{
                            visibility: visible;
                            
                        }
                            .logo *{
                                
                                visibility: hidden;
                            }
                            
                            
                            .btn *{
                                
                                visibility: hidden;
                            }
                            
                            .p *{
                                
                                visibility: hidden;
                            }
                            
                            .top-nav{
                                visibility: hidden;    
                            }
                            
                            
                        /* Then display print container elements */
                        .print-container, print-container * {
                            visibility: visible;
                            
                            
                        }
                            
                            /* Adjusting the postioning to start form Top left */
                            .print-container{
                               position:  absolute;
                                 top:0px;
                                 left:0px;
                                bottom: 0px;
                                right: 0px;
                                
                                
                                
                            }
                            
                            table{
                            
                            border:1px solid black;
                            }
                            
                    
                        }
                    
                    </style>
                    
           
           
           
           
           
           
           
           
           
           
           
           
           
           
                                  
                                     <div class ="row">
                 <div class="col-sm-6">
                         <table style="border:1px solid black;";>
                         <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><th colspan=7><h4>  BWEYOGERERE &emsp; ROOTS &emsp; INITIATIVE &emsp; (LTD)</h4><br/>Withdraw Receipt</th></tr>  
              
            <tr><h6><td colspan=4>Receipt No_ ' .$field9 .'</td>           
                                     
            <td colspan=3>Date:- ' .date("Y/m/d") .'</td></h6><br/><br/></tr>
            
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th>Parents ID:- <td><u>&emsp;&emsp;'.strtoupper($field1).'&emsp;&emsp;</u></td><th>&emsp;Child ID:- </th><td><u>&emsp;&emsp;'.strtoupper($field2).'&emsp;&emsp;</u> </td><th>Term:- </th><td colspan =1><u>&emsp;&emsp;'.strtoupper($field3).'&emsp;&emsp;</u></td></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th colspan =3 >CDC:- '.ucwords($field07).'</th></tr>
            <tr><td colspan =3>&emsp;&emsp;&emsp; </td><th>Total Withdrawn</th><th colspan =2>Ugx'.$accounts_total.'</th></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><td colspan =3>Given By </td> <td colspan =4>Taken By </td> </tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =3><u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u> </td> <td colspan =4><u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u> </td></tr>
             <tr><td colspan =3>Sign </td> <td colspan =4>Sign </td> </tr>
            
            </table>
        </div></div>
         <div class="p"> <button onclick="window.print()">Print</button></div>
        ';
        
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
/*echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=savings.php">
        <title>Saving</title>
        <script language="javascript">
        window.location.href = "withdraw.php"
        </script>
        </head>
        </html>
        ';
        //  echo "added";
        
        
        */
    }else{
      // echo "not found";
        
     echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=notfound.php">
        <title>Not Found</title>
        <script language="javascript">
        window.location.href = "TermError.php"
        </script>
        </head>
        </html>
        '; 
        
    }
    
  
    
    
    
}
    else{
        
        echo "Not Selected";
    }

    
    
}



/////////recpt//////////////////////////
function savingrecipt(){
  require('connection.php'); 
$field1  = strtoupper($_POST['parents_id']) ;
$field2  = strtoupper($_POST['student_id']) ;
$field3  = $_POST['term'] ;
$field4  = $_POST['total_fees'] ;
$field5= strtoupper($_SESSION['username']);
$field6  = $_POST['processing_fees'] ;
$savingsfee = ($field4*1)-($field6*1);
$text_value = $field4*0.10; 
$field7 = strtoupper($_SESSION["receipt_numberExists"]);
$cdc = strtoupper($_POST["cdc"]);
$mydate = date("Y/m/d");
   //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `savings_receipt` (
 `pid`,
 `cid`, 
 `date`, 
 `term`,
 `savings`,
 `processing_fees`,
 `total`,
  `receipt_number`,
  `cdc`
 
 
 ) VALUES (?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('sssssssss', 
$field1,
$field2,
$mydate,
$field3,
$savingsfee,
$field6,
$field4,
$field7,
$cdc
);
$stmt->execute();
$stmt->close();
        
}


//// adding member
function addmember(){
require('connection.php');
require('membergenerate.php');
    
$field1  = strtoupper($_SESSION["member_receipt_number"]) ;
$field2  = strtoupper($_POST['surname']) ;
$field3  = strtoupper($_POST['firstname']) ;
$field4  = strtoupper($_POST['nin']);
$field5  = $_POST['phone'] ; 
$field6  = intval($_POST['child1']);
$field7  = intval($_POST['child2']);
$field8  = intval($_POST['child3']);
$field9  = intval($_POST['child4']);
$field10  = intval($_POST['child5']);
$field11 = intval($_POST['child6']);
$field12 = intval($_POST['child7']);
$field13 = intval($_POST['child8']);
$field14  = 40000;
$field15 =  25000;
$field16 =  5000;
$field17 =  $field6 + $field7 + $field8 + $field9 + $field10 +$field11 + $field12 + $field13 + $field14 + $field15 + $field16;
$field18 =  $_SESSION['username'];
    
    
    
    
    
    
    
    
    
    
    
    
    
  //insertion
$stmt = $mysqli->prepare("INSERT INTO `membership` ( 
`receipt_number`,
`surname`,
`firstname`,
`nin`,
`tel`,
`child1`,
`child2`,
`child3`,
`child4`,
`child5`, 
`child6`, 
`child7`, 
`child8`,
`membership_fees`, 
`passcard`, 
`certificate`, 
`members_total`,
`reg_by`

) VALUES
(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssssssssssssss', 
$field1,
$field2,
$field3,
$field4,
$field5,
$field6,
$field7,
$field8,
$field9,
$field10,
$field11,
$field12,
$field13,
$field14,
$field15,
$field16,
$field17,
$field18
                  
);
$stmt->execute();
$stmt->close();   
    




//
   echo '
             <style>
                        @media print{
                    /*Hide every content other than element */
                        body *{
                            visibility: visible;
                            
                        }
                            .logo *{
                                
                                visibility: hidden;
                            }
                            
                            
                            .btn *{
                                
                                visibility: hidden;
                            }
                            
                            .p *{
                                
                                visibility: hidden;
                            }
                            
                            .top-nav{
                                visibility: hidden;    
                            }
                            
                            
                        /* Then display print container elements */
                        .print-container, print-container * {
                            visibility: visible;
                            
                            
                        }
                            
                            /* Adjusting the postioning to start form Top left */
                            .print-container{
                               position:  absolute;
                                 top:0px;
                                 left:0px;
                                bottom: 0px;
                                right: 0px;
                                
                                
                                
                            }
                            
                            table{
                            
                            border:1px solid black;
                            }
                            
                    
                        }
                    
                    </style>
                    
           
           
           
           
           
           
           
           
           
           
           
           
           
           
                                  
                                     <div class ="row">
                 <div class="col-sm-6">
                         <table style="border:1px solid black;";>
                         <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><th colspan=7><h4>  BWEYOGERERE &emsp; ROOTS &emsp; INITIATIVE &emsp; (LTD)</h4><br/>Memebership Receipt</th></tr>  
              
            <tr><h6><td colspan=4>Receipt No_ ' .$field1 .'</td>           
                                     
            <td colspan=3>Date:- ' .date("Y/m/d") .'</td></h6><br/><br/></tr>
            
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th>Surname:- <td><u>&emsp;&emsp;'.strtoupper($field2).'&emsp;&emsp;</u></td><th>&emsp;Firstname:- </th><td><u>&emsp;&emsp;'.strtoupper($field3).'&emsp;&emsp;</u> </td><th>Phone Number:- </th><td colspan =1><u>&emsp;&emsp;'.strtoupper($field5).'&emsp;&emsp;</u></td></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><th colspan =3 >NIN:- '.ucwords($field4).'</th></tr>
            <tr><th colspan =3 >Worked on by:- '.ucwords($field18).'</th></tr>
            <tr><td colspan =3>&emsp;&emsp;&emsp; </td><th>Total Payment</th><th colspan =2>Ugx'.$field17.'</th></tr>
             <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
             <tr><td colspan =3>Given By </td> <td colspan =4>Taken By </td> </tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =7>&emsp;&emsp;&emsp; </td></tr>
            <tr><td colspan =3><u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u> </td> <td colspan =4><u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u> </td></tr>
             <tr><td colspan =3>Sign </td> <td colspan =4>Sign </td> </tr>
            
            </table>
        </div></div>
         <div class="p"> <button onclick="window.print()">Print</button></div>
        ';
        
      
        





}



?>