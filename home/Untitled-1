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
$parent_id = $_SESSION["parents_id"];


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
            <meta http-equiv="refresh" content="0;url=apply3.php">
            <title>Parents PP</title>
            <script language="javascript">
            window.location.href = "apply3.php"
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
            <meta http-equiv="refresh" content="0;url=errors/error204_No_Content">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/error204_No_Content.html"
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
            <meta http-equiv="refresh" content="0;url=errors/error204_No_Content">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/400_bad_request.html"
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
            <meta http-equiv="refresh" content="0;url=errors/error204_No_Content">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/400_bad_request_fileextastionerror.html"
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
            <meta http-equiv="refresh" content="0;url=errors/error204_No_Content">
            <title>Error 204</title>
            <script language="javascript">
            window.location.href = "errors/400_bad_request.html"
            </script>
            </head>
            </html>
            ';
}

// Display status message
echo $statusMsg;
?>
