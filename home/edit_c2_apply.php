<?php
require('userheader1.php');
require('connection.php');
$username = $_SESSION['username'];

 //Initalizing Parents Variables
        $student_id = "";
        $surname = "";      
        $firstname = "";
        $gender = "";
        $day ="";
        $month ="";
        $year ="";
        $esb="";
        $from="";
        $to ="";
        $photo = "";


                
function getPosts(){
     $posts = array();
     $posts[0]  = $_POST ['student_id'];
     $posts[1]  = $_POST ['surname'];
     $posts[2]  = $_POST ['firstname'];
     $posts[3]  = $_POST ['gender'];
     $posts[4]  = $_POST ['day'];
     $posts[5]  = $_POST ['month'];
     $posts[6]  = $_POST ['year'];
     $posts[7] = $_POST ['esb'];
     $posts[8] = $_POST ['from'];
     $posts[9] = $_POST ['to'];
        return $posts;
    
    
    
    
    
    
}
if (isset($_POST['parentsSearch'])) {
    $data = getPosts();
    $search_Query = "SELECT * FROM childReg2 WHERE student_ID ='$data[0]'"; 
    $search_Results   = mysqli_query($conn,$search_Query);
   // echo  $search_Query;
   
    
    if ($search_Results){
        
        if(mysqli_num_rows($search_Results)){
            
            while($row = mysqli_fetch_array($search_Results))
            {
                 $student_id                = $row['student_ID'];
                 $surname                   = $row['surname'];
                 $firstname                 = $row['firstname'];
                 $gender                    = $row['gender'];
                 $day                       = $row['day'];
                 $month                     = $row['month'];
                 $year                      = $row['year'];
                 $esb                       = $row['esbac'];
                 $from                      = $row['fromm'];
                 $to                        = $row['to'];;
                $photo                     = $row['childpassport_photo'];   
            }
            
        }else{
            echo "No Data found for this id ";
        }
        
        
    }else{
        echo "Result Error";
    }
}




///////////Update///////////
if (isset($_POST['parentUpdate'])) {
     $data = getPosts();
     $Update_Query = "   
     UPDATE `childReg2` 
     SET 
     `surname`='$data[1]',
     `firstname`= '$data[2]',
     `gender`= '$data[3]',
     `day`= '$data[4]',
     `month`= '$data[5]',
     `year`= '$data[6]',
     `esbac`= '$data[7]',
     `fromm`= '$data[8]',
     `to`= '$data[9]',
     `edited_by` = '$username'
     WHERE `student_ID` = '$data[0]'";
     
 
    try{
        $Update_Result   = mysqli_query($conn,$Update_Query);
        
        if ($Update_Result){
           if (mysqli_affected_rows($conn)>0){
               echo 'Data Updated';
               
           }else {
               echo 'Data Not Updated';
           } 
            
        }
        
    }catch(Exception $ex){
        
        echo  'Error Update'.$ex->getMessage(); 
    }
   
    
}

?>



<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 tab-registration-container">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 tab-registration-menu hidden-xs">
 
<div class="list-group">
            <a href="edit_p_apply.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Edit Parents</text>
            </a>
                    
      <a href="edit_c1_apply.php" class="list-group-item  ">
                <text class=""><i class="fa fa-spinner"></i>Edit Child1</text>
            </a>
     <a href="edit_c2_apply.php" class="list-group-item active ">
                <text class=""><i class="fa fa-spinner"></i>Edit Child2</text>
            </a>
     <a href="edit_c3_apply.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Edit Child3</text>
            </a>
     <a href="edit_c4_apply.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Edit Child4</text>
            </a>
     <a href="edit_c5_apply.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Edit Child5</text>
            </a>
     <a href="edit_c6_apply.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Edit Child6</text>
            </a>
     <a href="edit_c7_apply.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Edit Child7</text>
            </a>
     <a href="edit_c8_apply.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Edit Child8</text>
            </a>

           <!-- <a href="search_savings.php" class="list-group-item ">
                <text><i class=""></i>Search Savings</text>
            </a>
            -->


            </div></div>


<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 module-content">
                <div class="row">
                    
                    
                                <div class="col-sm-4">
                        <h6 class="page-header"><a href="#">Childs Information</a></h6>
                                    
        <form action="edit_c2_apply.php" method="post"><input name="__RequestVerificationToken" type="hidden" value="4qcTXQjUp670Plq5n1m2yfWgCBZ_oBLJTdBRRDNSAFcAeg4jflnvkQILRJDGMFLajdGHrEDNJlk88NFyy-Z40eJ54n16L4ZsFp7OX3wOssfEpouABpdFEa2gCCbtfdg1pl-viISopFbYyqkS72dvZw2" />
            
            <h4><b>EDIT FIRST CHILDS INFORMATION</b></h4>
            <br/>
             <div class="form-group">
                                <label for="parentsID">Student ID:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-pid="Please enter a valid paernts id ." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="pid is required" id="id" name="student_id"  type="text" value ="<?php echo $student_id;?>"   style="color:red; font-weight: bold;"; />
                                <span class="field-validation-valid text-danger" data-valmsg-for="surname" data-valmsg-replace="true"  ></span>
                            </div>
                            
            
            
             <div class="row">
                                <div class="col-md-6">
            <div class="form-group">
                                <label for="surname">Surname:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-surname="Please enter a valid Surname." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Surname is required" id="surname" name="surname" placeholder="Surname" type="text" value ="<?php echo $surname;?>"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="surname" data-valmsg-replace="true" > </span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="firstname">First name:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-firstname="Please enter a valid firstname." data-val-length="The field First name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="firstname" name="firstname" placeholder="First name" type="text" value ="<?php echo $firstname;?>"   />
                                <span class="field-validation-valid text-danger" data-valmsg-for="First name" data-valmsg-replace="true"></span>
                            </div>
                 </div>
            
              
            </div>
            
           
            
            
             <div class="row">
                                
                                   
                    <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="Telephone">Gender:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-Telephone="Please enter a valid Gender." data-val-length="The field Telephone must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Gender is required" id="gender" name="gender" placeholder="Gender" type="text"   value ="<?php echo $gender;?>"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Telephone" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                 
                 
                 
                 
              
                            </div>
            
            
            
             <div class="row">
                                <div class="col-md-12">
            <div class="form-group">
                
                
                
               
                
                
                
                
                
                               
                                    
                                                 <label for="BirthDate2">Birth Date</label><span style="color:red">&nbsp;*</span>
                                        <div class="input-group">
                                            
                                          
                                                
                                                <input class="form-control text-box single-line" data-val="true" data-val-ocucupation="Please enter a valid occupation." data-val-length="The field Day must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="occupation" name="day" placeholder="Day" type="text"  value ="<?php echo $day;?>"  style="width:72px;" />
                                            
                                             <input class="form-control text-box single-line" data-val="true" data-val-ocucupation="Please enter a valid occupation." data-val-length="The field Day must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="occupation" name="month" placeholder="Month" type="text"  value ="<?php echo $month;?>"  style="width:200px;" />
                                                
                                                <input class="form-control text-box single-line" data-val="true" data-val-ocucupation="Please enter a valid occupation." data-val-length="The field Day must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="occupation" name="year" placeholder="Year" type="text"  value ="<?php echo $year;?>"  style="width:82px;" />  


                                          
                                            
                                        </div>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="BirthDate2" data-valmsg-replace="true"></span>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Day" data-valmsg-replace="true"></span>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Month" data-valmsg-replace="true"></span>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Year" data-valmsg-replace="true"></span>
                
                        
                   
                 
              
                                    </div>
                 </div>
                </div>
            
            
            
              
                
                
                  </div>
                                <div class="col-sm-4">
                        <h6 class="page-header"><a href="#">Duration and Accounts Information</a></h6>
       
            <br/><br/>
            
            
            
            
            
               <div class="row">
                                <div class="col-md-6">
            <div class="form-group">
                                <label for="next_of_kin_surname">ESB/AC:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-surname="Please enter a valid next_of_kin_surname." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="next_of_kin_surname is required" id="esb" name="esb" placeholder="ESB ACCOUNT" type="text" value ="<?php echo $esb;?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_surname" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="next_of_kin_firstname">FORM:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-next_of_kin_firstname="Please enter a valid next_of_kin_firstname." data-val-length="The field First name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="from is required" id="from" name="from" placeholder="FROM" type="text" value ="<?php echo $from;?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_firstname" data-valmsg-replace="true"></span>
                            </div>
                 </div>
            
              
            </div>
            
              <div class="row">
                                <div class="col-md-6">
            <div class="form-group">
                                <label for="next_of_kin_relationship">TO:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-surname="Please enter a valid next_of_kin_relationship." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="next_of_kin_relationship is required" id="to" name="to" placeholder="TO" type="text"  value ="<?php echo $to;?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_relationship" data-valmsg-replace="true"></span>
                            </div>
                 </div>
               
            
              
            </div>
           
            <br/>
            
            
            
            
            
            
            
            
          
                            
            
            
       
            
                                    
                                    </div>
                                 
                     <div class="col-sm-4">
                        <h6 class="page-header"><a href="#">Find and Edit Buttons</a></h6>
       
                     
                   
                                    
                                    
                                    
                                    
                                    
                           
   <div class="box-footer">
   <button name="parentsSearch" id ="parentsSearch" value="Find" type="submit" class="btn btn-primary btn-label-next pull-left" style="border-radius: 0;">
     | Find |
     <i class="fa fa-share"></i>
     </button>
     </div>
                       
                         
        <div class="box-footer">
       <button name="parentUpdate" id ="parentUpdate" value="Edit" type="submit" class="btn btn-primary btn-label-next pull-right" style="border-radius: 0;">
     | Edit |
     <i class="fa fa-share"></i>
     </button>
            
            
    <!--                     </div>   </div></div>
     <div class="box-footer">
       <button name="parentReg" id ="StartNewApplication" value="saveContinue" type="submit" class="btn btn-primary btn-label-next pull-right" style="border-radius: 0;">
     | Delete |
     <i class="fa fa-share"></i>
     </button>
            
-->
                                  
                               
                                    
         </form>       
                                    </div></div>
                                    
                 <div class="col-sm-4">
                        <h6 class="page-header"><a href="#">Edit Parents Passport Photo</a></h6>
                     
                     
                            
                     
                    
                          
                      <form action="c2_pic_edit.php" method="post" enctype="multipart/form-data" class="md-form" class="work-request" enctype="multipart/form-data" id="docUpload" >
                    
  <div class="form-group">
                                <label for="parentsID">Students ID:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-pid="Please enter a valid paernts id ." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="pid is required" id="id" name="student_id"  type="hidden" value ="<?php echo $student_id;?>"   style="color:red; font-weight: bold;"; readonly />
                                <span class="field-validation-valid text-danger" data-valmsg-for="surname" data-valmsg-replace="true"  ></span>
                            </div>
                     
                     
                      

                
                
                
                  
           
                       
                        <div class="box-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 style="margin-bottom:0px;">Applicant passport size photo </h6>
                                    <i style="font-size:15px;">(Supported types are <b>'jpeg/png'</b>, size = 300KB max)</i>
                                    <div class="form-group">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Photo" data-valmsg-replace="true"></span>
                                        <p class=""><img id="photoImg" src="uploads/passport_photos/child/<?php echo $photo;?>" alt="Passport Photo will appear after parents Id is found. Use the Child Id and then Press Find to Search Photo" style="height:200px;" class="img-thumbnail img-responsive"></p>
                                        <input type="file" name="file">
                                        <!--
                  <input type="submit" name="submit" value="Upload" accept=".jpeg,.png" data-val="true" data-val-filesize="File size should be less than 300KB" data-val-filesize-maxbytes="300720" data-val-filetype="Only the following file types are allowed: png or jpg or jpeg" data-val-filetype-validtypes="png,jpg,jpeg" id="Photo" name="Photo" required="required" title="Photo is required"  />-->
                                    </div>
                              
                             
                            </div>
                               
                               

                                            </div>
                                    </div><br />
           
                       
                     
            <div class="col-sm-6">
                <div class="box-footer">
                    <button name="submit" id ="Photo" value="saveContinue" type="submit" class="btn btn-primary btn-label-next pull-right" style="border-radius: 0;">
                                    | Edit Passport Photo |
                                    <i class="fa fa-share"></i>
                                </button>
                    
                   
              