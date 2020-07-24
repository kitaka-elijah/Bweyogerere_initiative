<?php
// Start the session
session_start();
// Include the database configuration file
include 'connection.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/passport_photos/child/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 $parent_id = $_SESSION["parents_id"];
$student_ID = $_SESSION["student4_ID"];


if(isset($_POST["saveandAddChild"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            // Insert image file name into database
                $insert = $db->query( "UPDATE childReg4 
                SET 
                childpassport_photo ='".$fileName."'
                WHERE parents_id = '$parent_id' AND student_ID = '$student_ID'
                ");
            
             //INSERTION
                $stmt = $mysqli->prepare("INSERT INTO passport_photos (
                `pid`,
                `sid`, 
                `url`
                ) VALUES (?,?,?)");
    
                $stmt->bind_param('sss', 
                $parent_id,
                $student_ID,
                $fileName
                );
                $stmt->execute();
            
            


            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                 echo'
            <!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="refresh" content="0;url=apply14.php">
            <title>Online Visa Processing</title>
            <script language="javascript">
            window.location.href = "apply14.php"
            </script>
            </head>
            </html>
            ';
                
            }else{
                $statusMsg = "File upload failed, please try again.";
                 echo'
            <!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="refresh" content="0;url=errors/child4_error204.html">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/child4_error204.html"
            </script>
            </head>
            </html>
            ';
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
              echo'
            <!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="refresh" content="0;url=errors/child4_error400.html">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/child4_error400.html"
            </script>
            </head>
            </html>
            ';
        }}
        else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
          echo'
            <!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="refresh" content="0;url=errors/child4_extation">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/child4_extation.html"
            </script>
            </head>
            </html>
            ';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
      echo'
            <!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="refresh" content="0;url=errors/child4_error400_L">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/child4_error400_L.html"
            </script>
            </head>
            </html>
            ';
}










// Display status message
echo $statusMsg;
?>
