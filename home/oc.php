
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
require('uniqid.php');
?>
<!DOCTYPE html>
<html>
<head>
    
<title>  Makerere Police Station Managment System </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>

<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

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
    
    <style>
    
       select,input{
             text-transform: uppercase;
        }
       
    </style>
</head>
<body>
	<!--header-->
	<div class="logo">
		<div class="container">
			<div class="logo-info">
				<a><h1 style="font-size:48px; font-family: sans-serif;">
                    <!--<img src="images/icon.png" width="100px">-->
                    MAKERERE &emsp;&emsp; POLICE &emsp;&emsp; STATION &emsp;&emsp; MANAGEMENT &emsp;&emsp;SYSTEM
                    <!--<img src="images/flag.jpeg" width="100px">-->
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
			<!--Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="hvr-bounce-to-bottom "><a href="index.php">Home</a></li>
				<!--	<li class="hvr-bounce-to-bottom"><a href="#visaG">Driving Permit Application Guidelines</a></li>-->
					<li class="hvr-bounce-to-bottom active"><a href="index_01.php">Desk Office </a></li>   
                    
                    <!--
                    <li class="hvr-bounce-to-bottom"><a href="index_003.php">Payments</a></li>
                    -->
                   
                    <li class="hvr-bounce-to-bottom"><a href="../login2.php">OC</a></li>     
                     <li class="hvr-bounce-to-bottom dropdown-toggle"><a href="edit_p_apply.php">Edit</a></li>
                    <li class="hvr-bounce-to-bottom"> <a href="../index.php?logout='1'" style="background-color: pink;">logout</a> </li>
				<!--	<li class="hvr-bounce-to-bottom"><a href="../index.php">Logout</a></li>-->
				</ul>	
				<div class="clearfix"> </div>
			</div>	
		</nav>		
	</div>	
    <!--//navigation-->
    
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 module-content">
        <div class="row">
            <div class="col-sm-6" style="text-align:justify">
               
                
                <form action="oc_check_script.php" method="post" enctype="multipart/form-data" class="md-form" class="work-request" enctype="multipart/form-data" id="docUpload" >
                    

                    
                    
                    
                    <h6 class="page-header">
                    <a href="#">OC Search for the case</a>
                </h6>

               <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Parent Application Id">Case Ref Id</label>
                                        <input class="form-control text-box single-line"  name="caseid" placeholder="Enter case ref id  " type="text" value="" required />
                                        <span class="field-validation-valid text-danger" data-valmsg-for="parents_id" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                
                
                
                <p>Date <br><b><?php echo $date=date("d/m/Y");?></b></p>
              
                     
                    
                    
                    
            </div>
          </div>
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <div class="box-footer">
                    <button name="submit" id ="Photo" value="saveContinue" type="submit" class="btn btn-primary btn-label-next pull-right" style="border-radius: 0;">
                                    | Search for case  |
                                    <i class="fa fa-share"></i>
                                </button>
                    
                   
                </div>
            </div>
        </div>
    </div>
        </form>
</div>
<hr/>
