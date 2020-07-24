<?php 
	session_start(); 

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
    
<title>Bweyogerere Stattion Initiative</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Crops Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="logo">
		<div class="container">
			<div class="logo-info">
				<a><h1 style="font-size:48px;">
                  <!--  <img src="images/icon.png" width="100px">-->
				   Bweyogerere Station Initiative  Membership Application Form
                 <!--   <img src="images/flag.jpeg" width="100px">-->
					</h1>
				</a>
			</div>
		</div>	
	</div>
	<!--//header-->		
	<!--navigation-->
	<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="hvr-bounce-to-bottom active"><a href="index.php">Home</a></li>
				<!--	<li class="hvr-bounce-to-bottom"><a href="index.php">Driving Permit Application Guidelines</a></li>-->
					<li class="hvr-bounce-to-bottom"><a href="apply.php">Apply</a></li>
                    <li class="hvr-bounce-to-bottom"><a href="savings.php">Savings</a></li>
                     <li class="hvr-bounce-to-bottom"><a href="withdraw.php">With Draws</a></li>
                    <li class="hvr-bounce-to-bottom"><a href="checkstatusscript.php">CheckStatus</a></li>   
                  
                    
                     <li class="hvr-bounce-to-bottom dropdown-toggle" data-toggle ="dropdown" ><a href="edit_p_apply.php">Edit</a></li>
                   
                        
                  
            
                  
                    
                    <li class="hvr-bounce-to-bottom"> <a href="../index.php?logout='1'" style="background-color: pink;">logout</a> </li>

				<!--	<li class="hvr-bounce-to-bottom"><a href="../index.php">Logout</a></li>-->
				</ul>	
				<div class="clearfix"> </div>
			</div>	
		</nav>		
	</div>	
    <!--//navigation-->
    




























    