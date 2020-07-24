<?php

include '../connection.php';
$parentsID = $_POST["parent_id"];
$number_of_children = $_POST["number_of_children"];

//Ckech if exists
    $query = $db->query("SELECT * FROM parentReg WHERE parents_id = '$parentsID'");

if($parentsID == "" OR  $number_of_children ==""){
    
   echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=../index.php">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "parents_check.php"
        </script>
        </head>
        </html>
        ';
        
echo "<script>alert('Alert invalid Entry');</script>";

}else if($query->num_rows < 0){
    //Data exists
     //echo"<script>alert('Parent with that ID Already Exists');</script>";
       
    /* echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=../index.php">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "parents_check.php"
        </script>
        </head>
        </html>
        ';
        
        */
        
echo "<script>alert('Parent doesn't exitst);</script>";

    
    
    
    
    
    }else if($parentsID == "8"){
       
   

echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=../index.php">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "parents_check_script.php"
        </script>
        </head>
        </html>
        ';









}

else{
   echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=../index.php">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "parents_check.php"
        </script>
        </head>
        </html>
        ';
        


    
   echo "<script>alert('Alert invalid Entry');</script>";
   
    
}
?>




