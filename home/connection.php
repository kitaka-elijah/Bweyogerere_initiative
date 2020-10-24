<?php
    // DATABASE CONNECTIONS
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="bweyos";
	$mysqli = new mysqli($servername, $username, $password,$db);
    $conn = mysqli_connect($servername, $username, $password,$db);
    $db = new mysqli($servername, $username, $password,$db);
   // $connect = mysqli_connect($servername, $username, $password,$db);

   // $connection = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($db->connect_error) {
    die("Connection failed: ".$db->connect_error);
}

