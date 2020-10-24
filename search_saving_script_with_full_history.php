<?php
require('userheader1.php');?>

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
                            position: absolute;
                                left: 0px;
                                 top: 0px;
                                z-index: -1;
                            
                            
                        }
                            
                            /* Adjusting the postioning to start form Top left */
                            .print-container{
                              position: absolute;
                                left: 0px;
                                 top: 0px;
                                z-index: -1;
                               
                                
                                
                                
                            }
                            
                    
                        }
                    
                    </style>
                    



<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 tab-registration-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tab-registration-menu hidden-xs">
 <!--
<div class="list-group">
            <a href="savings.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Search Savings</text>
            </a>



            <a href="search_savings.php" class="list-group-item  active">
                <text><i class=""></i>Search Savings</text>
            </a>


            </div></div>

--->
<div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-xs-10 module-content">
                <div class="row">
                    
               
                                                                <div class="col-sm-12">
                      <!--  <h5 class="page-header"><a href="#">Tabulated Data </a></h5>-->
                         <div class="p"> <button onclick="window.print()">Print</button></div>
       
            
            
            <!-----------Table--------to be fit here------>
            <div class ="print-container">
            <table class="table table-hover table-dark" >
                  <thead>
     <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT url FROM `passport_photos` WHERE pid ='$parent_id' AND sid = '$student_ID'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $image_url = $row["url"];
       
?>
            
<tr>    
    <th colspan ="2"><img src ="uploads/passport_photos/child/<?php echo $image_url ?>" width="100px" ></th>
    
     <?php }
}else{ ?>
    <p>No Data found...</p>
<?php } ?>
    <th colspan="7"><h4 style="text-align:center; color:black;"><b>STUDENT'S LEDGER SHEET<br/>UNDER<br/>BWEYOGERERE INITIATIVE</b></h4></th>
    
    
       <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT passport_photo FROM `parentReg` WHERE parents_id ='$parent_id' 
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $image_url = $row["passport_photo"];
       
?>
    
    
    <th colspan ="2"><img src="uploads/passport_photos/parents/<?php echo $image_url ?> " width="100px" ></th>
    
    
    
        <?php }
}else{ ?>
    <p>No Data found...</p>
<?php } ?>
    
</tr> 
                      
                      
                      
    <tr>
           <th colspan="2" style="color:black">STUDENTS NAME:- </th><th colspan="4"> 
        
            <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT firstname,surname  FROM `childReg` WHERE parents_id ='$parent_id' AND student_ID ='$student_ID'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $firstname = $row["firstname"];
        $surname = $row["surname"];
        
       
?> 
        
        
        
        
        
        
        <?php echo $surname." ".$firstname;?>
        
      <?php }
}else{ ?>
    
<?php } ?>  
        
        
        
 
        <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT firstname,surname  FROM `childReg2` WHERE parents_id ='$parent_id' AND student_ID ='$student_ID'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $firstname = $row["firstname"];
        $surname = $row["surname"];
        
       
?> 
        
        
        
        
        
        
        <?php echo $surname." ".$firstname;?>
        
      <?php }
}else{ ?>

<?php } ?>  
        
        
        
        
        
  <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT firstname,surname  FROM `childReg3` WHERE parents_id ='$parent_id' AND student_ID ='$student_ID'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $firstname = $row["firstname"];
        $surname = $row["surname"];
        
       
?> 
        
        
        
        
        
        
        <?php echo $surname." ".$firstname;?>
        
      <?php }
}else{ ?>
   
<?php } ?>  
              
    
    
        
        
 
   <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT firstname,surname  FROM `childReg4` WHERE parents_id ='$parent_id' AND student_ID ='$student_ID'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $firstname = $row["firstname"];
        $surname = $row["surname"];
        
       
?> 
        
        
        
        
        
        
        <?php echo $surname." ".$firstname;?>
        
      <?php }
}else{ ?>

<?php } ?>  
             
        
        
        
        
        
        
     <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT firstname,surname  FROM `childReg5` WHERE parents_id ='$parent_id' AND student_ID ='$student_ID'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $firstname = $row["firstname"];
        $surname = $row["surname"];
        
       
?> 
        
        
        
        
        
        
        <?php echo $surname." ".$firstname;?>
        
      <?php }
}else{ ?>
    
<?php } ?>  
           
        
        
        
        
        
        
   <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT firstname,surname  FROM `childReg6` WHERE parents_id ='$parent_id' AND student_ID ='$student_ID'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $firstname = $row["firstname"];
        $surname = $row["surname"];
        
       
?> 
        
        
        
        
        
        
        <?php echo $surname." ".$firstname;?>
        
      <?php }
}else{ ?>
    
<?php } ?>  
          
        
        
        
        
        
    
        <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT firstname,surname  FROM `childReg7` WHERE parents_id ='$parent_id' AND student_ID ='$student_ID'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $firstname = $row["firstname"];
        $surname = $row["surname"];
        
       
?> 
        
        
        
        
        
        
        <?php echo $surname." ".$firstname;?>
        
      <?php }
}else{ ?>
   
<?php } ?>  
        
        
        
     
        
        
        
      <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT firstname,surname  FROM `childReg8` WHERE parents_id ='$parent_id' AND student_ID ='$student_ID'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $firstname = $row["firstname"];
        $surname = $row["surname"];
        
       
?> 
        
        
        
        
        
        
        <?php echo $surname." ".$firstname;?>
        
      <?php }
}else{ ?>
   
<?php } ?>  
          
        
        
        
        
        
        
        
        
     </th>    
        
        
        
        
       <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("
SELECT firstname,surname,phone  FROM `parentReg` WHERE parents_id ='$parent_id' 
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $firstname = $row["firstname"];
        $surname = $row["surname"];
        $contact = $row["phone"];
       
?> 
        
        
        
        
           <th colspan="2" style="color:black">PARENTS NAME:- </th><th colspan="4"><?php echo $firstname. " " .$surname ;?></th>  
         
 
                      
    </tr>
        <tr> <th colspan="2" style="color:black">CONTACT:- </th><th colspan="4"> <?php echo $contact ;?> </th>  
         </tr>                    
                      
            <?php }
}else{ ?>
    <p>No Data found...</p>
<?php } ?>                  
                
                
                
                
                
                

    <tr class ="bg-primary">
    <th scope="col">PARENT ID</th>
      <th scope="col">CHILD ID</th>
      <th scope="col">TERM</th>
      <th scope="col">DATES</th>
      <th scope="col">SAVINGS</th>
      <th scope="col">10%<br/>P/FEES</th>
        <th scope="col">EDUCATION<br/> GRANTS</th>
      <th scope="col">WITH DRAWS</th>
        <th scope="col">COLLECTOR<br/>P/FEES</th>
      <th scope="col">TERM STATUS</th>
      
    </tr>
  </thead>
                                    
                                    
                                    
 <!---- creating table data------------->                                    
 <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("

SELECT 
id,
parents_id,
child_id,
term,
dates,
savings,
processing_fees,
education_grants,
with_draws_status,
collector,
term_status

FROM 
term1
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' ORDER BY dates ASC
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $parents_id = $row["parents_id"];
        $child_id = $row["child_id"]; 
        $term = $row["term"];
        $dates = $row["dates"];      
        $savings = $row["savings"];     
        $P_Fees=$row["processing_fees"];
        $education_grants=$row['education_grants'];
        $with_draws=$row["with_draws_status"];
        $collector=$row["collector"];
        $term_status=$row["term_status"];
       
    
?>
              
                                    <!--------------------------------------->
                                    
                                    
                                    
    
  <tbody>
    <tr class="bg-success">
        <th scope="row" ><?php echo $parents_id ;?></th>
      <td><?php echo  $child_id ;?></td>
      <td><?php echo $term ;?></td>
      <td><?php echo  $dates ;?></td>
      <td><?php echo  $savings ;?></td>
      <td><?php echo  $P_Fees  ;?></td>
      <td><?php echo  $education_grants ;?></td>
      <td><?php echo  $with_draws ;?></td>
      <td><?php echo  $collector ;?></td>
      <td><?php echo $term_status ;?></td>   
    </tr>
    
       <?php }
}else{ ?>
   
<?php } ?>
        
      
      
       <?php

// Include the database configuration file
//$parent_id = $_POST["parents_id"];
//$student_ID = $_POST["student1_ID"];
include 'connection.php';

// Get Data from the database
$query = $db->query("

SELECT 
SUM((savings+education_grants)) AS accounts_total,
text,
text1
FROM 
term1
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' AND with_draws_status = 'WITH DRAW NOT PAID' AND term_status = 'On Going'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $accounts_total = $row["accounts_total"];
        $text=$row["text"];
        $text1=$row["text1"];
   ?>   
         
     <tr class ="bg-danger"> 
         
    <th  colspan="10" scope="col"><?php echo $text ;?> <h5> <?php echo $accounts_total." ".$text1 ;?></h5> </th> 
         
      </tr>
      
      
        <?php }
}else{ ?>
   
<?php } ?>
      
<!---------------------------------------TERM2-------------------------------------------------------------------------------------------------------->
      
                                
 <!---- creating table data------------->                                    
 <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("

SELECT 
id,
parents_id,
child_id,
term,
dates,
savings,
processing_fees,
education_grants,
with_draws_status,
collector,
term_status

FROM 
term2
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' ORDER BY dates ASC
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $parents_id = $row["parents_id"];
        $child_id = $row["child_id"]; 
        $term = $row["term"];
        $dates = $row["dates"];      
        $savings = $row["savings"];     
        $P_Fees=$row["processing_fees"];
        $education_grants=$row['education_grants'];
        $with_draws=$row["with_draws_status"];
        $collector=$row["collector"];
        $term_status=$row["term_status"];
       
    
?>
              
                                    <!--------------------------------------->
                                    
                                    
                                    
    
  <tbody>
    <tr class="bg-info">
        <th scope="row"><?php echo $parents_id ;?></th>
      <td><?php echo  $child_id ;?></td>
      <td><?php echo $term ;?></td>
      <td><?php echo  $dates ;?></td>
      <td><?php echo  $savings ;?></td>
      <td><?php echo  $P_Fees  ;?></td>
      <td><?php echo  $education_grants ;?></td>
      <td><?php echo  $with_draws ;?></td>
      <td><?php echo  $collector ;?></td>
      <td><?php echo $term_status ;?></td>   
    </tr>
    
       <?php }
}else{ ?>
   
<?php } ?>
        
      
      
       <?php

// Include the database configuration file
//$parent_id = $_POST["parents_id"];
//$student_ID = $_POST["student1_ID"];
include 'connection.php';

// Get Data from the database
$query = $db->query("

SELECT 
SUM((savings+education_grants)) AS accounts_total,
text,
text1
FROM 
term2
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' AND with_draws_status = 'WITH DRAW NOT PAID' AND term_status = 'On Going'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $accounts_total = $row["accounts_total"];
         $text = $row["text"];
        $text1 =$row["text1"];
   ?>   
         
     <tr class ="bg-danger">  
     <th  colspan="10" scope="col"><?php echo $text ;?> <h5> <?php echo $accounts_total." ".$text1 ;?></h5> </th> 
      </tr>
      
      
        <?php }
}else{ ?>
   
<?php } ?>
      
      
<!------------------------------------------------------------------------------------------------------------------------------------------------->      
  
      
      
      
      
<!---------------------------------------TERM2-------------------------------------------------------------------------------------------------------->
      
                                
 <!---- creating table data------------->                                    
 <?php

// Include the database configuration file
$parent_id = $_POST["parents_id"];
$student_ID = $_POST["student_id"];
include 'connection.php';

// Get Data from the database
$query = $db->query("

SELECT 
id,
parents_id,
child_id,
term,
dates,
savings,
processing_fees,
education_grants,
with_draws_status,
collector,
term_status
FROM 
term3
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' ORDER BY dates ASC
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $parents_id = $row["parents_id"];
        $child_id = $row["child_id"]; 
        $term = $row["term"];
        $dates = $row["dates"];      
        $savings = $row["savings"];     
        $P_Fees=$row["processing_fees"];
        $education_grants=$row['education_grants'];
        $with_draws=$row["with_draws_status"];
        $collector=$row["collector"];
        $term_status=$row["term_status"];
      
    
?>
              
                                    <!--------------------------------------->
                                    
                                    
                                    
    
  <tbody>
    <tr class="bg-warning">
        <th scope="row"><?php echo $parents_id ;?></th>
      <td><?php echo  $child_id ;?></td>
      <td><?php echo $term ;?></td>
      <td><?php echo  $dates ;?></td>
      <td><?php echo  $savings ;?></td>
      <td><?php echo  $P_Fees  ;?></td>
      <td><?php echo  $education_grants ;?></td>
      <td><?php echo  $with_draws ;?></td>
      <td><?php echo  $collector ;?></td>
      <td><?php echo $term_status ;?></td>   
    </tr>
    
       <?php }
}else{ ?>
  
<?php } ?>
        
      
      
       <?php

// Include the database configuration file
//$parent_id = $_POST["parents_id"];
//$student_ID = $_POST["student1_ID"];
include 'connection.php';

// Get Data from the database
$query = $db->query("

SELECT 
SUM((savings+education_grants)) AS accounts_total,
text,
text1
FROM 
term3
WHERE parents_id ='$parent_id' AND child_id = '$student_ID' AND with_draws_status = 'WITH DRAW NOT PAID' AND term_status = 'On Going'
");

//WHERE parents_id = '$parent_id' AND child_id ='$student_ID'
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //Data
        $accounts_total = $row["accounts_total"];
        $text = $row["text"];
        $text1 =$row["text1"];
   ?>   
         
     <tr class ="bg-danger">  
         <th  colspan="10" scope="col"><?php echo $text ;?> <h5> <?php echo $accounts_total." ".$text1 ;?></h5> </th> 
      </tr>
      
      
        <?php }
}else{ ?>
   
<?php } ?>
      
      
<!------------------------------------------------------------------------------------------------------------------------------------------------->           
      
      
      
  </tbody>
</table>
            
            
            <!-----------Table--------to be fit here------>
            
                                    

        </form>            </div>
                    
                    
                </div>
            </div>
        </div>
    
    
    