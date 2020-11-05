<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "police_DB");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$field1 = strtoupper($_POST["caseid"]);
$field2 = strtoupper($_POST['surname']) ;
$field3 = strtoupper($_POST['firstname']);
$field4 = strtoupper($_POST['csurname']) ;
$field5 = strtoupper($_POST['cfirstname']);
$field6 = strtoupper($_POST['evidence']) ;
$field7 = strtoupper($_POST['complaint'] );
$field8 = strtoupper($_POST['withness'] );

 
// Attempt insert query execution
$sql = "INSERT INTO new_case 
(
    ref,
    surname, 
    firstname, 
    crimnal_surname, 
    crimnal_firstname, 
    evidence,
    complaint,
     withness
     
      
      
      
      
      
      ) VALUES ('$field1', '$field2', '$field3', '$field4', '$field5', '$field6', '$field7', '$field8')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    echo'
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=../index.php">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "index_01.php"
        </script>
        </head>
        </html>
        ';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
