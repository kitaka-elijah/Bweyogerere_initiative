
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
					<li class="hvr-bounce-to-bottom "><a href="index_01.php">Desk Office </a></li>   
                    
                    <!--
                    <li class="hvr-bounce-to-bottom"><a href="index_003.php">Payments</a></li>
                    -->
                   
                    <li class="hvr-bounce-to-bottom active"><a href="../login2.php">OC</a></li>     
                     <li class="hvr-bounce-to-bottom dropdown-toggle"><a href="edit.php">Edit</a></li>
                    <li class="hvr-bounce-to-bottom"> <a href="../index.php?logout='1'" style="background-color: pink;">logout</a> </li>
				<!--	<li class="hvr-bounce-to-bottom"><a href="../index.php">Logout</a></li>-->
				</ul>	
				<div class="clearfix"> </div>
			</div>	
		</nav>		
	</div>	
    <!--//navigation-->
    
<?php
$caseid =$_POST['caseid'];
// Include the database configuration file
include 'connection.php';

?>

        
<?php        
        
        // Get images from the database
$query = $db->query("
SELECT 
`ref`,
`surname`,
`firstname`,
`crimnal_surname`,
`crimnal_firstname`,
`evidence`,
`complaint`,
`withness`,
`timestamp`
 FROM
  `new_case`
   WHERE 
   `ref` =  '$caseid'
   Limit 1
");
        
        if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //parent
        $img = 'images/bg/policelog.png';
        $ref = $row["ref"];    
        $surname = $row["surname"];     
        $firstname=$row["firstname"];
        $crimnal_surname=$row['crimnal_surname'];
        $crimnal_firstname=$row["crimnal_firstname"];
        $evidence=$row["evidence"];
        $complaint=$row["complaint"];
        $withness=$row["withness"];
        $timestamp=$row["timestamp"];
   // }else {echo"<p>No Data found...</p>";}
        ?>       
                      
  <style>
                        @media print{
                    /*Hide every content other than element */
                        body *{
                            visibility: visible;
                            
                        }
                            .logo *{
                                
                                visibility: hidden;
                            }
                            
                            
                            .btn *{
                                
                                visibility: hidden;
                            }
                            
                            .p *{
                                
                                visibility: hidden;
                            }
                            
                            .top-nav{
                                visibility: hidden;    
                            }
                            
                            
                        /* Then display print container elements */
                        .print-container, print-container * {
                            visibility: visible;
                            
                            
                        }
                            
                            /* Adjusting the postioning to start form Top left */
                            .print-container{
                               position:  absolute;
                                 top:0px;
                                 left:0px;
                                bottom: 0px;
                                right: 0px;
                                
                                
                                
                            }
                            
                    
                        }
                    
                    </style>
                    
        
        
        
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 tab-registration-tab print-container">
            <div class="tab-registration-content active">
                <div class="card">
                    
                    
                       
                    <br/>
                    
                    <div class="callout callout-warning">
              
   
                        <p><b>NOTE:</b> Infomation is attached to <?php echo $ref;?>.</p>
                    </div>
                    
                  
                    
                    
                    
                           
                    <br/>
                            
                            <div class="row">
                            <div class="col-sm-12">
                                    <div class="row">
                                       
                                      
                                </div>

                                <div class="row">
                            <div class="col-sm-12">
                            
                            <span style="line-height: 1.7em;">
                                                <b>case ref :- <span style=color:red;><?php echo $ref;?></b><br>
                                            </span>
                            </div>
                           
                            <div class="col-sm-6">
                                <img src=<?php echo $img;?> width =50%>
                                   <br/>   
                            </div>

                           
                            


                            <div class="col-sm-6">
       
                            
                                <h4><span style="color:black";> Complaint name:- </span>

                               <span style="color:green";> <?php  echo  strtoupper($surname);?> <?php echo strtoupper($firstname);?></span> </h4>    
                              
                              <br/>
                               <h4><span style="color:black";> Criminal name:- </span>
                               <span style="color:green";> <?php  echo  strtoupper($crimnal_surname);?> <?php echo strtoupper($crimnal_firstname);?></span> </h4>    


                               <br/>
                                <h4><span style="color:black";>Evidence :- </span>
                                <?php  echo  strtoupper( $evidence);?> </h4>                          
                                

                                <br/>
                                <h4><span style="color:black";>Complaint :- </span>
                                <?php  echo  strtoupper( $complaint);?> </h4>                          
                                 
                                                                
                                <br/>
                                <h4><span style="color:black";>Witness:- <br></span>  
                                <?php  echo  strtolower( $withness);?> </h4>                          
                                
                                <br/>
                                <h4><span style="color:black";>Date and Time :- </span>
                                <?php  echo  strtoupper( $timestamp);?> </h4>                          
                                
                                <br/> <br/> <br/> <br/> 
                                
                                  </div>
                        </div>
                                    
                                
                              <?php }
}else{ ?>
    <p>No Data found </p>
<?php } ?>
    
                                    
   