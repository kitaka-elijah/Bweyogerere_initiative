<?php
// Start the session
session_start();

include 'connection.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/passport_photos/parents/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$parent_id = $_POST["parents_id"];


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','JPG','PNG','JPEG','GIF','PDF');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            // Insert image file name into database
                $insert = $db->query( "UPDATE parentReg 
                SET 
                passport_photo ='".$fileName."'
                WHERE parents_id = '$parent_id'
                ");


            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                 echo'
            <!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="refresh" content="0;url=edit_p_apply.php">
            <title>Parents PP</title>
            <script language="javascript">
            window.location.href = "edit_p_apply.php"
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
            <meta http-equiv="refresh" content="0;url=errors/p_invalid.html">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/p_invalid.html"
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
            <meta http-equiv="refresh" content="0;url=errors/error204_No_Content.html">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/p_invalid.html"
            </script>
            </head>
            </html>
            ';
               
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        $statusMsg = "Sorry, there was an error uploading your file.";
                echo'
            <!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="refresh" content="0;url=errors/p_invalid.html">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/p_invalid.html"
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
            <meta http-equiv="refresh" content="0;url=errors/p_invalid.html">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/p_invalid.html"
            </script>
            </head>
            </html>
            ';
               
}

// Display status message
echo $statusMsg;
?>
