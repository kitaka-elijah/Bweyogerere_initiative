<?php require('userheader2.php');?>
<?php
$parent_check_id =$_POST['parent_id'];
// Include the database configuration file
include 'connection.php';

?>

        
<?php        
        
        // Get images from the database
$query = $db->query("
SELECT 
preg.parents_id AS parents_id,
preg.surname AS parents_surname,
preg.firstname AS parents_firstname,
preg.phone AS parents_phone_number,
preg.cdc AS parents_cdc,
preg.relationship AS parents_relation_to_child,
preg.passport_photo AS parents_passport_photo,
preg.date AS parents_Date_of_Reg,
preg.time AS parents_tine_of_Reg,
preg.status AS current_status
FROM 
parentReg preg
WHERE
preg.parents_id = '$parent_check_id'
");
        
        if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
        //parent
        $parentsimageURL = 'uploads/passport_photos/parents/'.$row["parents_passport_photo"];
        $parents_id = $row["parents_id"];
        $parents_surname = $row["parents_surname"];      
        $parents_firstname = $row["parents_firstname"];     
        $parents_phone_number=$row["parents_phone_number"];
        $parents_cdc=$row['parents_cdc'];
        $parents_relation_to_child=$row["parents_relation_to_child"];
        $parents_passport_photo=$row["parents_passport_photo"];
        $parents_Date_of_Reg=$row["parents_Date_of_Reg"];
        $parents_tine_of_Reg=$row["parents_tine_of_Reg"];
        $current_status=$row["current_status"];
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
                    
                     <i class="fa fa-user"></i> <u> <h3 style="text-align:center;">Bweyogerere Station Initiative Membership Application Form </h3>
                        </u>
                    <br/>
                    
                    <div class="callout callout-warning">
                        <p><b>NOTE:</b> Infomation is attached to <?php echo $parents_id;?>.</p>
                    </div>
                    
                  
                    
                    
                    
                           
                    <br/>
                            
                            <div class="row">
                            <div class="col-sm-12">
                                    <div class="row">
                                       
                                      
                                </div>

                                <div class="row">
                            <div class="col-sm-12">
                            
                            <span style="line-height: 1.7em;">
                                                <b>Parent ID:- <span style=color:red;><?php echo $parents_id;?></b><br>
                                            </span>
                            </div>
                           
                            <div class="col-sm-6">
                                <img src=<?php echo $parentsimageURL;?> width =50%>
                                   <br/>   
                            </div>

                           
                                <h3 style="color:darkred">Status:- <?php echo $current_status;?></h3>
                                <br/>


                            <div class="col-sm-6">
                            
                                <h4><span style="color:black";>Name:- </span>
                               <span style="color:green";> <?php  echo  strtoupper($parents_firstname);?> <?php echo strtoupper($parents_surname);?></span> </h4>    


                               
                                <h4><span style="color:black";>Phone Number :- </span>
                                <?php  echo  strtoupper( $parents_phone_number);?> </h4>                          
                                

                              
                                <h4><span style="color:black";>CDC :- </span>
                                <?php  echo  strtoupper( $parents_cdc);?> </h4>                          
                                 
                                                                
                               
                                <h4><span style="color:black";>Date Of Registration:- <br></span>  
                                <?php  echo  strtolower( $parents_Date_of_Reg);?> </h4>                          
                                
                              
                                <h4><span style="color:black";>Time Of Registration:- </span>
                                <?php  echo  strtoupper( $parents_tine_of_Reg);?> </h4>                          
                                
                                <br/> <br/> <br/> <br/> 
                                
                                  </div>
                        </div>
                                    
                                
                              <?php }
}else{ ?>
    <p>No Data found </p>
<?php } ?>
    
                                    
                                  
                                    
  <?php                                  
                         
$query1 = $db->query("
SELECT 
crg.student_ID AS student1_ID,
crg.firstname AS student1_firstname,
crg.surname AS student1_surname,
crg.gender AS student1_agender,
crg.day AS student1_DOB_day,
crg.month AS student1_DOB_month,
crg.year AS student1_DOB_year,
crg.esbac AS student1_esbac,
crg.fromm AS student1_from,
crg.to AS student1_to,
crg.childpassport_photo AS student1_childpassport_photo
FROM
childReg crg 
WHERE
crg.parents_id = '$parent_check_id'
");
if($query1->num_rows > 0){
    while($row = $query1->fetch_assoc()){    
        //Child 1
        $student1_ID=$row["student1_ID"];
        $student1_firstname=$row["student1_firstname"];
        $student1_surname=$row["student1_surname"];
        $student1_agender=$row['student1_agender'];
        $student1_dob=$row["student1_DOB_day"]."-".$row["student1_DOB_month"]."-".$row["student1_DOB_year"];   
        $student1_esbac=$row["student1_esbac"];
        $student1_from=$row["student1_from"];
        $student1_to=$row["student1_to"];
        $student1_imageURL = 'uploads/passport_photos/child/'.$row["student1_childpassport_photo"]; 
 //}else {echo"<p>No Data found...</p>";}
         ?>          
                                    
                                    
                                
                                <!---- CHild 1---->
                                 <div class="col-sm-6">
                                     
                                     <div class="col-sm-4">
                                            <span style="line-height: 1.7em;">
                                                <br>
                                                  <img src=<?php echo $student1_imageURL;?>  width="100%">
                                                
                                            </span>
                                        </div>
                            
                                      
                                         <br/>
                                <h6><span style="color:black";>ID :- </span>
                                <?php  echo  strtoupper( $student1_ID);?> </h6>                          
                                
                                         
                                <h6><span style="color:black";>Name :- </span>
                               <span style="color:green";> <?php  echo  strtoupper($student1_firstname);?> <?php echo strtoupper($student1_surname);?></span> </h6>    
                             
                                <h6><span style="color:black";>Gender :- </span>
                                <?php  echo  strtoupper( $student1_agender);?> </h6>                          
                                

                            
                                <h6><span style="color:black";>DOB :- </span>
                                <?php  echo  strtoupper( $student1_dob);?> </h6>                          
                                                                 
                            
                                <h6><span style="color:black";>ESB/AC:- </span>
                                <?php  echo  strtoupper( $student1_esbac);?> </h6>                          
                                
                                     
                              
                                <h6><span style="color:black";>From:- </span>
                                <?php  echo  strtoupper( $student1_from);?>                         
                                <span style="color:black";>To:- </span>
                                <?php  echo  strtoupper( $student1_to);?> </h6>                          
                                     
                                  </div>
                                
                                <!---end of child one--->
                                
                         <?php }
}else{ ?>
   <!-- <p>No Data found for Child One</p>-->
<?php } ?>
             
                            
                            
    <?php
$query2 = $db->query("
SELECT
crg2.student_ID AS student2_ID,
crg2.firstname AS student2_firstname,
crg2.surname AS student2_surname,
crg2.gender AS student2_agender,
crg2.day AS student2_DOB_day,
crg2.month AS student2_DOB_month,
crg2.year AS student2_DOB_year,
crg2.esbac AS student2_esbac,
crg2.fromm AS student2_from,
crg2.to AS student2_to,
crg2.childpassport_photo AS student2_childpassport_photo
FROM
childReg2 crg2 
WHERE
crg2.parents_id = '$parent_check_id'
");
 if($query2->num_rows > 0){
    while($row = $query2->fetch_assoc()){  
        //Child 2
        $student2_ID=$row["student2_ID"];
        $student2_firstname=$row["student2_firstname"];
        $student2_surname=$row["student2_surname"];
        $student2_agender=$row['student2_agender'];
        $student2_dob=$row["student2_DOB_day"]."-".$row["student2_DOB_month"]."-".$row["student2_DOB_year"];   
        $student2_esbac=$row["student2_esbac"];
        $student2_from=$row["student2_from"];
        $student2_to=$row["student2_to"];
        $student2_imageURL = 'uploads/passport_photos/child/'.$row["student2_childpassport_photo"]; 
// }else {echo"<p>No Data found...</p>";}
       ?>      

        
        
        
        
                                <br>
                                
                                <!---- CHild 2---->
                                 <div class="col-sm-6">
                                     
                                     <div class="col-sm-4">
                                            <span style="line-height: 1.7em;">
                                               <br>
                                                  <img src=<?php echo $student2_imageURL;?>  width="100%">
                                                
                                            </span>
                                        </div>
                            
                                      
                                         <br/>
                                <h6><span style="color:black";>ID :- </span>
                                <?php  echo  strtoupper( $student2_ID);?> </h6>                          
                                
                                         
                                <h6><span style="color:black";>Name :- </span>
                               <span style="color:green";> <?php  echo  strtoupper($student2_firstname);?> <?php echo strtoupper($student2_surname);?></span> </h6>    
                             
                                <h6><span style="color:black";>Gender :- </span>
                                <?php  echo  strtoupper( $student2_agender);?> </h6>                          
                                

                            
                                <h6><span style="color:black";>DOB :- </span>
                                <?php  echo  strtoupper( $student2_dob);?> </h6>                          
                                 
                              
                               
                                <h6><span style="color:black";>ESB/AC:- </span>
                                <?php  echo  strtoupper( $student2_esbac);?> </h6>                          
                                
                                     
                              
                                <h6><span style="color:black";>From:- </span>
                                <?php  echo  strtoupper( $student2_from);?>                         
                                <span style="color:black";>To:- </span>
                                <?php  echo  strtoupper( $student2_to);?> </h6>                          
                                     
                                  </div>
                                
                                <!---end of child two--->
                                
            
                         <?php }
}else{ ?>
   <!-- <p>No Data found for Child Two</p>-->
<?php } ?>

                                </div>

<?php
        
        $query3 = $db->query("
SELECT
crg3.student_ID AS student3_ID,
crg3.firstname AS student3_firstname,
crg3.surname AS student3_surname,
crg3.gender AS student3_agender,
crg3.day AS student3_DOB_day,
crg3.month AS student3_DOB_month,
crg3.year AS student3_DOB_year,
crg3.esbac AS student3_esbac,
crg3.fromm AS student3_from,
crg3.to AS student3_to,
crg3.childpassport_photo AS student3_childpassport_photo
FROM
childReg3 crg3 
WHERE
crg3.parents_id = '$parent_check_id'
");

      if($query3->num_rows > 0){
    while($row = $query3->fetch_assoc()){  
        //Child 3
        $student3_ID=$row["student3_ID"];
        $student3_firstname=$row["student3_firstname"];
        $student3_surname=$row["student3_surname"];
        $student3_agender=$row['student3_agender'];
        $student3_dob=$row["student3_DOB_day"]."-".$row["student3_DOB_month"]."-".$row["student3_DOB_year"];   
        $student3_esbac=$row["student3_esbac"];
        $student3_from=$row["student3_from"];
        $student3_to=$row["student3_to"];
        $student3_imageURL = 'uploads/passport_photos/child/'.$row["student3_childpassport_photo"]; 
 //}else {echo"<p>No Data found...</p>";}
         ?>         
        
                                
                                <!---- CHild 3---->
                                 <div class="col-sm-6">
                                     
                                     <div class="col-sm-4">
                                            <span style="line-height: 1.7em;">
                                                <br>
                                                  <img src=<?php echo $student3_imageURL;?>  width="100%">
                                                
                                            </span>
                                        </div>
                            
                                      
                                         <br/>
                                <h6><span style="color:black";>ID :- </span>
                                <?php  echo  strtoupper( $student3_ID);?> </h6>                          
                                
                                         
                                <h6><span style="color:black";>Name :- </span>
                               <span style="color:green";> <?php  echo  strtoupper($student3_firstname);?> <?php echo strtoupper($student3_surname);?></span> </h6>    
                             
                                <h6><span style="color:black";>Gender :- </span>
                                <?php  echo  strtoupper( $student3_agender);?> </h6>                          
                                

                            
                                <h6><span style="color:black";>DOB :- </span>
                                <?php  echo  strtoupper( $student3_dob);?> </h6>                          
                                 
                              
                              
                                <h6><span style="color:black";>ESB/AC:- </span>
                                <?php  echo  strtoupper( $student3_esbac);?> </h6>                          
                                
                                     
                              
                                <h6><span style="color:black";>From:- </span>
                                <?php  echo  strtoupper( $student3_from);?>                         
                                <span style="color:black";>To:- </span>
                                <?php  echo  strtoupper( $student3_to);?> </h6>                          
                                     
                                  </div>
                                
                                <!---end of child one--->
   
  <?php }
}else{ ?>
  <!--  <p>No Data found for Child Three</p>-->
<?php } ?>


<?php
        $query4 = $db->query("
SELECT
crg4.student_ID AS student4_ID,
crg4.firstname AS student4_firstname,
crg4.surname AS student4_surname,
crg4.gender AS student4_agender,
crg4.day AS student4_DOB_day,
crg4.month AS student4_DOB_month,
crg4.year AS student4_DOB_year,
crg4.esbac AS student4_esbac,
crg4.fromm AS student4_from,
crg4.to AS student4_to,
crg4.childpassport_photo AS student4_childpassport_photo
FROM
childReg4 crg4 
WHERE
crg4.parents_id = '$parent_check_id'
");
 if($query4->num_rows > 0){
    while($row = $query4->fetch_assoc()){        
         //Child 4
        $student4_ID=$row["student4_ID"];
        $student4_firstname=$row["student4_firstname"];
        $student4_surname=$row["student4_surname"];
        $student4_agender=$row['student4_agender'];
        $student4_dob=$row["student4_DOB_day"]."-".$row["student4_DOB_month"]."-".$row["student4_DOB_year"];   
        $student4_esbac=$row["student4_esbac"];
        $student4_from=$row["student4_from"];
        $student4_to=$row["student4_to"];
        $student4_imageURL = 'uploads/passport_photos/child/'.$row["student4_childpassport_photo"]; 
        
   //  }else {echo"<p>No Data found...</p>";}   
                   
        ?>     
        

                                
                                <!---- CHild 1---->
                                 <div class="col-sm-6">
                                     
                                     <div class="col-sm-4">
                                            <span style="line-height: 1.7em;">
                                                <br>
                                                  <img src=<?php echo $student4_imageURL;?>  width="100%">
                                                
                                            </span>
                                        </div>
                            
                                      
                                         <br/>
                                <h6><span style="color:black";>ID :- </span>
                                <?php  echo  strtoupper( $student4_ID);?> </h6>                          
                                
                                         
                                <h6><span style="color:black";>Name :- </span>
                               <span style="color:green";> <?php  echo  strtoupper($student4_firstname);?> <?php echo strtoupper($student4_surname);?></span> </h6>    
                             
                                <h6><span style="color:black";>Gender :- </span>
                                <?php  echo  strtoupper( $student4_agender);?> </h6>                          
                                

                            
                                <h6><span style="color:black";>DOB :- </span>
                                <?php  echo  strtoupper( $student4_dob);?> </h6>                          
                                 
                              
                              
                            
                                <h6><span style="color:black";>ESB/AC:- </span>
                                <?php  echo  strtoupper( $student4_esbac);?> </h6>                          
                                
                                     
                              
                                <h6><span style="color:black";>From:- </span>
                                <?php  echo  strtoupper( $student4_from);?>                         
                                <span style="color:black";>To:- </span>
                                <?php  echo  strtoupper( $student4_to);?> </h6>                          
                                     
                                  </div>
                                
                                <!---end of child one--->
                                
                                
       <?php }
}else{ ?>
   <!-- <p>No Data found for Child Four</p>->
<?php } ?>

</div>

<?php
        
   $query5 = $db->query("
SELECT
crg5.student_ID AS student5_ID,
crg5.firstname AS student5_firstname,
crg5.surname AS student5_surname,
crg5.gender AS student5_agender,
crg5.day AS student5_DOB_day,
crg5.month AS student5_DOB_month,
crg5.year AS student5_DOB_year,
crg5.esbac AS student5_esbac,
crg5.fromm AS student5_from,
crg5.to AS student5_to,
crg5.childpassport_photo AS student5_childpassport_photo
FROM
childReg5 crg5 
WHERE
crg5.parents_id = '$parent_check_id'
");
 if($query5->num_rows > 0){
    while($row = $query5->fetch_assoc()){  
          //Child 5
        $student5_ID=$row["student5_ID"];
        $student5_firstname=$row["student5_firstname"];
        $student5_surname=$row["student5_surname"];
        $student5_agender=$row['student5_agender'];
        $student5_dob=$row["student5_DOB_day"]."-".$row["student5_DOB_month"]."-".$row["student5_DOB_year"];   
        $student5_esbac=$row["student5_esbac"];
        $student5_from=$row["student5_from"];
        $student5_to=$row["student5_to"];
        $student5_imageURL = 'uploads/passport_photos/child/'.$row["student5_childpassport_photo"]; 
        
   //  }else {echo"<p>No Data found...</p>";}   
             
         ?>    
                                
                                    
                                    
                                    
                                    
                                    
                                        
                                
                                <!---- CHild 5---->
                                 <div class="col-sm-6">
                                     
                                     <div class="col-sm-4">
                                            <span style="line-height: 1.7em;">
                                               <br>
                                                  <img src=<?php echo $student5_imageURL;?>  width="100%">
                                                
                                            </span>
                                        </div>
                            
                                      
                                         <br/>
                                <h6><span style="color:black";>ID :- </span>
                                <?php  echo  strtoupper( $student5_ID);?> </h6>                          
                                
                                         
                                <h6><span style="color:black";>Name :- </span>
                               <span style="color:green";> <?php  echo  strtoupper($student5_firstname);?> <?php echo strtoupper($student5_surname);?></span> </h6>    
                             
                                <h6><span style="color:black";>Gender :- </span>
                                <?php  echo  strtoupper( $student5_agender);?> </h6>                          
                                

                            
                                <h6><span style="color:black";>DOB :- </span>
                                <?php  echo  strtoupper( $student5_dob);?> </h6>                          
                                                                 
                            
                                <h6><span style="color:black";>ESB/AC:- </span>
                                <?php  echo  strtoupper( $student5_esbac);?> </h6>                          
                                
                                     
                              
                                <h6><span style="color:black";>From:- </span>
                                <?php  echo  strtoupper( $student5_from);?>                         
                                <span style="color:black";>To:- </span>
                                <?php  echo  strtoupper( $student5_to);?> </h6>                          
                                     
                                  </div>
                                
                                <!---end of child one--->
                                   
       <?php }
}else{ ?>
   <!-- <p>No Data found for Child Five</p>-->
<?php } ?>


<?php

$query6 = $db->query("
SELECT
crg6.student_ID AS student6_ID,
crg6.firstname AS student6_firstname,
crg6.surname AS student6_surname,
crg6.gender AS student6_agender,
crg6.day AS student6_DOB_day,
crg6.month AS student6_DOB_month,
crg6.year AS student6_DOB_year,
crg6.esbac AS student6_esbac,
crg6.fromm AS student6_from,
crg6.to AS student6_to,
crg6.childpassport_photo AS student6_childpassport_photo
FROM
childReg6 crg6 
WHERE
crg6.parents_id = '$parent_check_id'
");
 if($query6->num_rows > 0){
    while($row = $query6->fetch_assoc()){  
        //Child 6
        $student6_ID=$row["student6_ID"];
        $student6_firstname=$row["student6_firstname"];
        $student6_surname=$row["student6_surname"];
        $student6_agender=$row['student6_agender'];
        $student6_dob=$row["student6_DOB_day"]."-".$row["student6_DOB_month"]."-".$row["student6_DOB_year"];   
        $student6_esbac=$row["student6_esbac"];
        $student6_from=$row["student6_from"];
        $student6_to=$row["student6_to"];
        $student6_imageURL = 'uploads/passport_photos/child/'.$row["student6_childpassport_photo"]; 
   //  }else {echo"<p>No Data found...</p>";}  
        
   ?>  
                                
                                
                                
                                <!---- CHild 6---->
                                 <div class="col-sm-6">
                                     
                                     <div class="col-sm-4">
                                            <span style="line-height: 1.7em;">
                                                <br>
                                                  <img src=<?php echo $student6_imageURL;?>  width="100%">
                                                
                                            </span>
                                        </div>
                            
                                      
                                         <br/>
                                <h6><span style="color:black";>ID :- </span>
                                <?php  echo  strtoupper( $student6_ID);?> </h6>                          
                                
                                         
                                <h6><span style="color:black";>Name :- </span>
                               <span style="color:green";> <?php  echo  strtoupper($student6_firstname);?> <?php echo strtoupper($student6_surname);?></span> </h6>    
                             
                                <h6><span style="color:black";>Gender :- </span>
                                <?php  echo  strtoupper( $student6_agender);?> </h6>                          
                                

                            
                                <h6><span style="color:black";>DOB :- </span>
                                <?php  echo  strtoupper( $student6_dob);?> </h6>                          
                                 
                              
                               
                                <h6><span style="color:black";>ESB/AC:- </span>
                                <?php  echo  strtoupper( $student6_esbac);?> </h6>                          
                                
                                     
                              
                                <h6><span style="color:black";>From:- </span>
                                <?php  echo  strtoupper( $student6_from);?>                         
                                <span style="color:black";>To:- </span>
                                <?php  echo  strtoupper( $student6_to);?> </h6>                          
                                     
                                  </div>
                                
                                <!---end of child one--->
            
       <?php }
}else{ ?>
  <!--  <p>No Data found for Child Six</p>-->
<?php } ?>


<?php 

$query7 = $db->query("
SELECT
crg7.student_ID AS student7_ID,
crg7.firstname AS student7_firstname,
crg7.surname AS student7_surname,
crg7.gender AS student7_agender,
crg7.day AS student7_DOB_day,
crg7.month AS student7_DOB_month,
crg7.year AS student7_DOB_year,
crg7.esbac AS student7_esbac,
crg7.fromm AS student7_from,
crg7.to AS student7_to,
crg7.childpassport_photo AS student7_childpassport_photo
FROM
childReg7 crg7 
WHERE
crg7.parents_id = '$parent_check_id'
");
  if($query7->num_rows > 0){
    while($row = $query7->fetch_assoc()){           
         //Child 7
        $student7_ID=$row["student7_ID"];
        $student7_firstname=$row["student7_firstname"];
        $student7_surname=$row["student7_surname"];
        $student7_agender=$row['student7_agender'];
        $student7_dob=$row["student7_DOB_day"]."-".$row["student7_DOB_month"]."-".$row["student7_DOB_year"];   
        $student7_esbac=$row["student7_esbac"];
        $student7_from=$row["student7_from"];
        $student7_to=$row["student7_to"];
        $student7_imageURL = 'uploads/passport_photos/child/'.$row["student7_childpassport_photo"]; 
 //  }else {echo"<p>No Data found...</p>";}  
                   
        ?>        
                                
                                <!---- CHild 7---->
                                 <div class="col-sm-6">
                                     
                                     <div class="col-sm-4">
                                            <span style="line-height: 1.7em;">
                                               <br>
                                                  <img src=<?php echo $student7_imageURL;?>  width="100%">
                                                
                                            </span>
                                        </div>
                            
                                      
                                         <br/>
                                <h6><span style="color:black";>ID :- </span>
                                <?php  echo  strtoupper( $student7_ID);?> </h6>                          
                                
                                         
                                <h6><span style="color:black";>Name :- </span>
                               <span style="color:green";> <?php  echo  strtoupper($student7_firstname);?> <?php echo strtoupper($student7_surname);?></span> </h6>    
                             
                                <h6><span style="color:black";>Gender :- </span>
                                <?php  echo  strtoupper( $student7_agender);?> </h6>                          
                                

                            
                                <h6><span style="color:black";>DOB :- </span>
                                <?php  echo  strtoupper( $student7_dob);?> </h6>                          
                                 
                              
                              
                                <h6><span style="color:black";>ESB/AC:- </span>
                                <?php  echo  strtoupper( $student7_esbac);?> </h6>                          
                                
                                     
                              
                                <h6><span style="color:black";>From:- </span>
                                <?php  echo  strtoupper( $student7_from);?>                         
                                <span style="color:black";>To:- </span>
                                <?php  echo  strtoupper( $student7_to);?> </h6>                          
                                     
                                  </div>
                                
                                <!---end of child one--->
                                
              <?php }
}else{ ?>
   <!-- <p>No Data found for Child Seven</p>--->
<?php } ?>


<?php    

$query8 = $db->query("
SELECT
crg8.student_ID AS student8_ID,
crg8.firstname AS student8_firstname,
crg8.surname AS student8_surname,
crg8.gender AS student8_agender,
crg8.day AS student8_DOB_day,
crg8.month AS student8_DOB_month,
crg8.year AS student8_DOB_year,
crg8.esbac AS student8_esbac,
crg8.fromm AS student8_from,
crg8.to AS student8_to,
crg8.childpassport_photo AS student8_childpassport_photo
FROM
childReg8 crg8 
WHERE
crg8.parents_id = '$parent_check_id'
");
 if($query8->num_rows > 0){
    while($row = $query8->fetch_assoc()){ 
         //Child 8
        $student8_ID=$row["student8_ID"];
        $student8_firstname=$row["student8_firstname"];
        $student8_surname=$row["student8_surname"];
        $student8_agender=$row['student8_agender'];
        $student8_dob=$row["student8_DOB_day"]."-".$row["student8_DOB_month"]."-".$row["student8_DOB_year"];   
        $student8_esbac=$row["student8_esbac"];
        $student8_from=$row["student8_from"];
        $student8_to=$row["student8_to"];
        $student8_imageURL = 'uploads/passport_photos/child/'.$row["student8_childpassport_photo"]; 
//}else {echo"<p>No Data found...</p>";}  

   ?>  


                                <!---- CHild 8---->
                                 <div class="col-sm-6">
                                     
                                     <div class="col-sm-4">
                                            <span style="line-height: 1.7em;">
                                                <br>
                                                  <img src=<?php echo $student8_imageURL;?>  width="100%">
                                                
                                            </span>
                                        </div>
                            
                                      
                                         <br/>
                                <h6><span style="color:black";>ID :- </span>
                                <?php  echo  strtoupper( $student8_ID);?> </h6>                          
                                
                                         
                                <h6><span style="color:black";>Name :- </span>
                               <span style="color:green";> <?php  echo  strtoupper($student8_firstname);?> <?php echo strtoupper($student8_surname);?></span> </h6>    
                             
                                <h6><span style="color:black";>Gender :- </span>
                                <?php  echo  strtoupper( $student8_agender);?> </h6>                          
                                

                            
                                <h6><span style="color:black";>DOB :- </span>
                                <?php  echo  strtoupper( $student8_dob);?> </h6>                          
                                 
                              
                              
                            
                                <h6><span style="color:black";>ESB/AC:- </span>
                                <?php  echo  strtoupper( $student8_esbac);?> </h6>                          
                                
                                     
                              
                                <h6><span style="color:black";>From:- </span>
                                <?php  echo  strtoupper( $student8_from);?>                         
                                <span style="color:black";>To:- </span>
                                <?php  echo  strtoupper( $student8_to);?> </h6>                          
                                     
                                  </div>
                                
                                <!---end of child one--->
                                
                        <?php }
}else{ ?>
  <!--  <p>No Data found for Child Eight</p>--->
<?php } ?>

                                </div></div> </div></div></div></div>
                                  <!--  <a class="btn btn-primary hidden.print" href ="javascript:window.print()">Print</a>-->
                                
                               <div class="p"> <button onclick="window.print()">Print</button></div>