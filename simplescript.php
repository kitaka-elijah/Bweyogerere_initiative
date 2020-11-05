<?php


$passcode =  $_POST['passcode'];
if ($passcode == "999"){

   echo' <!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv="refresh" content="0;url=../index.php">
    <title>Bweyogerere Satation Initiative</title>
    <script language="javascript">
    window.location.href = "home/oc.php"
    </script>
    </head>
    </html>';

}else{

    echo '<!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv="refresh" content="0;url=home/index_01.php">
    <title>Bweyogerere Satation Initiative</title>
    <script language="javascript">
    window.location.href = "home/index_01.php"
    </script>
    </head>
    </html>';

}



?>