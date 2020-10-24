<?php
session_start(); 
require('connection.php'); 


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
        
    }}
    
$field01  = strtoupper($_POST['parents_id']) ;
$field02  = strtoupper($_POST['student_id']) ;
$field03  =  $term;
$field04  = $savings ;
$field05= $_SESSION['username'];
$field06  = "With Drawn" ;
$field07 = strtoupper($_POST["cdc"]);
$field08 = date("Y/m/d");
   //INSERTION
$stmt = $mysqli->prepare("INSERT INTO `withdraw_receipt` (
 `pid`,
 `cid`, 
 `term`, 
 `with_draw`,
 `withdrawn_by`,
 `status`,
 `cdc`,
  `date`
 
 
 ) VALUES (?,?,?,?,?,?,?,?)");
    

$stmt->bind_param('ssssssss', 
$field01,
$field02,
$field03,
$field04,
$field05,
$field06,
$field07,
$field08
);
$stmt->execute();
$stmt->close();
          