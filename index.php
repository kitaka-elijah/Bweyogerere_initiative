<?php 
	//session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="refresh" content="0;url=../index.php">
        <title>Bweyogerere Satation Initiative</title>
        <script language="javascript">
        window.location.href = "home/index.php"
        </script>
        </head>
        </html>
        
        