
<style>
    @media print {
        
        /* Hide every other element*/
        .printbutton{
           visibility:  hidden;
        }
        
        /* Then display print container elements*/
        .print-container, .print-container *{
            
            visibility: visible; 
        }
        
        /*Adjusting e postion to start form the top*/
        
        .print-container{
            
            position: absolute;
            left:0px;
            top:0px;
        }
        
        
    }

</style>

<?php require('userheader.php');?>
<?php

// Include the database configuration file
$parent_id = $_SESSION["parents_id"];
$student_ID = $_SESSION["student1_ID"];
include 'connection.php';

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
preg.status AS current_status,

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
parentReg preg , 
childReg crg 


WHERE preg.parents_id = '$parent_id' AND crg.parents_id = '$parent_id' AND crg.student_ID = '$student_ID'
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

 
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 tab-registration-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tab-registration-menu hidden-xs">
            

<div class="list-group">

 
    <a href="#" class="list-group-item  active">
        <text><i class=" "></i> Complete</text>
    </a>
</div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 tab-registration-tab" print-container>
            <div class="tab-registration-content active">
                <div class="card">
                    <div class="callout callout-warning">
                        <p><b>NOTE:</b> Infomation is attached to <?php echo $parents_id;?>.</p>
                    </div>
                    <div class="box panel panel-default" print-container>
                        <div class="box-header panel-heading">
                            <i class="fa fa-user"></i>  <h3 class="box-title">Parents and Children  Information</h3>
                            
                          

                                <div class="row">
                            <div class="col-sm-12">
                            
                            <span style="line-height: 1.7em;">
                                                <b>Parent ID:- <span style=color:red;><?php echo $parents_id;?><br/>
                                            </span></b>
                          
                           
                            <div class="col-sm-6">
                                <img src=<?php echo $parentsimageURL;?> width = 250px >
                                    
                            </div>

                           
                                <h2 style="color:darkred">Status:- <?php echo $current_status;?></h2>
                           


                            <div class="col-sm-6">
                            
                                <h4><span style="color:black";>Name:- </span>
                               <span style="color:green";> <?php  echo  strtoupper($parents_firstname);?> <?php echo strtoupper($parents_surname);?></span> </h4>    


                                <br/>
                                <h4><span style="color:black";>Phone Number :- </span>
                                <?php  echo  strtoupper( $parents_phone_number);?> </h4>                          
                                

                                <br/>
                                <h4><span style="color:black";>CDC :- </span>
                                <?php  echo  strtoupper( $parents_cdc);?> </h4>                          
                                 
                                <br/>
                                <h4><span style="color:black";>Relationship:- </span>
                                <?php  echo  strtoupper( $parents_relation_to_child);?> </h4>                          
                                
                                <br/>
                                <h4><span style="color:black";>Date Of Registration:- <br></span>  
                                <?php  echo  strtolower( $parents_Date_of_Reg);?> </h4>                          
                                
                                <br/>
                                <h4><span style="color:black";>Time Of Registration:- </span>
                                <?php  echo  strtoupper( $parents_tine_of_Reg);?> </h4>                          
                                
                                
                                  </div>
                        </div>
                                
                                
                                
                                <!---- CHild 1---->
                                 <div class="col-sm-6">
                                     
                                     <div class="col-sm-4">
                                            <span style="line-height: 1.7em;">
                                                <b>Child One Infomation</b><br>
                                                  <img src=<?php echo $student1_imageURL;?>  width="100%">
                                                
                                            </span>
                                        </div>
                            
                                      
                                         <br/>
                                <h4><span style="color:black";>Child One ID :- </span>
                                <?php  echo  strtoupper( $student1_ID);?> </h4>                          
                                
                                         
                                <h4><span style="color:black";>Child Name :- </span>
                               <span style="color:green";> <?php  echo  strtoupper($student1_firstname);?> <?php echo strtoupper($student1_surname);?></span> </h4>    
                             
                                <h4><span style="color:black";>Gender :- </span>
                                <?php  echo  strtoupper( $student1_agender);?> </h4>                          
                                

                            
                                <h4><span style="color:black";>DOB :- </span>
                                <?php  echo  strtoupper( $student1_dob);?> </h4>                          
                                 
                              
                                
                            
                                <h4><span style="color:black";>ESB/AC:- </span>
                                <?php  echo  strtoupper( $student1_esbac);?> </h4>                          
                                
                                     
                              
                                <h4><span style="color:black";>From:- </span>
                                <?php  echo  strtoupper( $student1_from);?>                         
                                <span style="color:black";>To:- </span>
                                <?php  echo  strtoupper( $student1_to);?> </h4>                          
                                     
                                  </div>
                                
                                
                                
                                
                                
                                
                        <?php }
}else{ ?>
    <p>No Data found...</p>
<?php } ?>

                                    </div></div></div></div></div></div>
                          <div class="col-md-4 col-sm-4 col-xs-4" printbutton >
        <button onclick="window.print();" class="btn btn-primary btn-block btn-primary">
            <text class="hidden-sm hidden-xs">| Print |</text>
            <text class="visible-sm visible-xs">print</text>
            <i class="fa fa-save hidden-sm hidden-xs"></i>
        </button>
    </div>