<?php
require('userheader1.php');
require('connection.php');
$username = $_SESSION['username'];

 //Initalizing Parents Variables
        $parents_id = "";
        $surname = "";      
        $firstname = "";
        $nin="";
        $phone_number="";
        $gender ="";
        $marital_status ="";
        $occupation ="";
        $day ="";
        $month ="";
        $year ="";
        $location = "";
        $religion = "";
        $next_of_kin_surname = "";
        $next_of_kin_firstname = "";
        $next_of_kin_relationship = "";
        $next_of_kin_telephone = "";
        $account_number = "";
        $bank = "";
        $branch = "";
        $cdc = "";
        $photo = "";


                
function getPosts(){
     $posts = array();
     $posts[0]  = $_POST ['parents_id'];
     $posts[1]  = $_POST ['surname'];
     $posts[2]  = $_POST ['firstname'];
     $posts[3]  = $_POST ['nin'];
     $posts[4]  = $_POST ['phone_number'];
     $posts[5]  = $_POST ['gender'];
     $posts[6]  = $_POST ['marital_status'];
     $posts[7] = $_POST ['occupation'];
     $posts[8] = $_POST ['day'];
     $posts[9] = $_POST ['month'];
     $posts[10] = $_POST ['year'];
     $posts[11] = $_POST ['location'];
     $posts[12] = $_POST ['religion'];
     $posts[13] = $_POST ['next_of_kin_surname'];
     $posts[14] = $_POST ['next_of_kin_firstname'];
     $posts[15] = $_POST ['relationship'];
     $posts[16] = $_POST ['next_of_kin_telephone'];
     $posts[17] = $_POST ['account_number'];
     $posts[18] = $_POST ['bank'];
     $posts[19] = $_POST ['branch'];
     $posts[20] = $_POST ['cdc'];
     //$posts[21] = $_POST ['photo'];
        return $posts;
    
    
    
    
    
    
}
if (isset($_POST['parentsSearch'])) {
    $data = getPosts();
    $search_Query = "SELECT * FROM parentReg WHERE parents_id ='$data[0]'"; 
    $search_Results   = mysqli_query($conn,$search_Query);
   // echo  $search_Query;
   
    
    if ($search_Results){
        
        if(mysqli_num_rows($search_Results)){
            
            while($row = mysqli_fetch_array($search_Results))
            {
                 $parents_id                        = $row['parents_id'];
                 $surname                   = $row['surname'];
                 $firstname                 = $row['firstname'];
                 $nin                       = $row['nin'];
                 $phone_number              = $row['phone'];
                 $gender                    = $row['gender'];
                 $marital_status            = $row['maritalstatus'];
                 $occupation                = $row['occupation'];
                 $day                       = $row['day'];
                 $month                     = $row['month'];
                 $year                      = $row['year'];
                 $location                  = $row['location'];
                 $religion                  = $row['religion'];
                 $next_of_kin_surname       = $row['next_of_kin_surname'];
                 $next_of_kin_firstname     = $row['next_of_kin_firstname'];
                 $next_of_kin_relationship  = $row['relationship'];
                 $next_of_kin_telephone     = $row['next_of_kin_telephone'];
                 $account_number            = $row['account_number'];
                 $bank                      = $row['bank'];
                 $branch                    = $row['branch'];
                 $cdc                       = $row['cdc'];
                $photo                     = $row['passport_photo'];   
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
     UPDATE `parentReg` 
     SET 
     `surname`='$data[1]',
     `firstname`= '$data[2]',
     `nin`= '$data[3]',
     `phone`= '$data[4]',
     `gender`= '$data[5]',
     `maritalstatus`= '$data[6]',
     `occupation`= '$data[7]' ,
     `day`= '$data[8]',
     `month`= '$data[9]',
     `year`= '$data[10]',
     `location`= '$data[11]',
     `religion`= '$data[12]',
     `next_of_kin_surname`= '$data[13]',
     `next_of_kin_firstname`= '$data[14]',
     `relationship`= '$data[15]',
     `next_of_kin_telephone`= '$data[16]',
     `account_number`= '$data[17]',
     `bank`= '$data[18]',
     `branch`= '$data[19]',
     `cdc`= '$data[20]',
     `edited_by` = '$username'
     WHERE `parents_id` = '$data[0]'";
     
 
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
            <a href="edit_p_apply.php" class="list-group-item active">
                <text class=""><i class="fa fa-spinner"></i>Edit Parents</text>
            </a>
                    
      <a href="edit_c1_apply.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Edit Child1</text>
            </a>
     <a href="edit_c2_apply.php" class="list-group-item ">
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
                        <h6 class="page-header"><a href="#">Applicant Personal's Infomation</a></h6>
                                    
        <form action="edit_p_apply.php" method="post"><input name="__RequestVerificationToken" type="hidden" value="4qcTXQjUp670Plq5n1m2yfWgCBZ_oBLJTdBRRDNSAFcAeg4jflnvkQILRJDGMFLajdGHrEDNJlk88NFyy-Z40eJ54n16L4ZsFp7OX3wOssfEpouABpdFEa2gCCbtfdg1pl-viISopFbYyqkS72dvZw2" />
            
            <h4><b>Parents Information</b></h4>
            <br/>
             <div class="form-group">
                                <label for="parentsID">Parents ID:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-pid="Please enter a valid paernts id ." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="pid is required" id="id" name="parents_id"  type="text" value ="<?php echo $parents_id;?>"   style="color:red; font-weight: bold;"; pattern="[^'\x22]+" title="Invalid input" />
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
            <div class="form-group">
                                <label for="nin">NIN:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-nin="Please enter a valid nin." data-val-length="The field NIN must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="nin is required" id="nin" name="nin" placeholder="NIN" type="text"  value ="<?php echo $nin;?>"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="nin" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="Telephone">Telephone:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-Telephone="Please enter a valid Telephone." data-val-length="The field Telephone must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="phone" name="phone_number" placeholder="Telephone" type="text" pattern="[0-9]{4}[0-9]{3}[0-9]{3}"  value ="<?php echo $phone_number;?>"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Telephone" data-valmsg-replace="true"></span>
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
                 
                 
                 
                 
              
                 <div class="col-md-6">
                            
                                      <div class="form-group has-feedback">
                                <label for="Telephone">Marital Status:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-Telephone="Please enter a valid Gender." data-val-length="The field Telephone must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Gender is required" id="MaritalStatus" name="marital_status" placeholder="Marital Status" type="text"   value ="<?php echo $marital_status;?>"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Telephone" data-valmsg-replace="true"></span>
                            </div>
                     
                                </div>
                            </div>
            
            
            
             <div class="row">
                                <div class="col-md-12">
            <div class="form-group">
                
                
                
                
                    <label for="firstname">Occupation:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-ocucupation="Please enter a valid occupation." data-val-length="The field Occupation must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="occupation" name="occupation" placeholder="Occupation" type="text"  value ="<?php echo $occupation;?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="occupation" data-valmsg-replace="true"></span>
                         
                
                
                
                
                
                
                               
                                    
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
            
            
            
                <div class="row">
                                <div class="col-md-6">
            <div class="form-group">
                                <label for="location">Physical Address:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-location="Please enter a valid location." data-val-length="The field location must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Surname is required" id="location" name="location" placeholder="Location" type="text" value ="<?php echo $location;?>"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="location" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="religion">Religion:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-religion="Please enter a valid religion." data-val-length="The field religion must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="religion" name="religion" placeholder="Religion" type="text" value ="<?php echo $religion;?>"   />
                                <span class="field-validation-valid text-danger" data-valmsg-for="religion" data-valmsg-replace="true"></span>
                            </div>
                 </div>
            
              
            </div>
            
                
                
                  </div>
                                <div class="col-sm-4">
                        <h6 class="page-header"><a href="#">Applicant's Next of Kin and Accounts infomation</a></h6>
       
            <h4><b>Next Of Kin Information</b></h4><br/>
            
            
            
            
            
               <div class="row">
                                <div class="col-md-6">
            <div class="form-group">
                                <label for="next_of_kin_surname">Next Of Kin Surname:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-surname="Please enter a valid next_of_kin_surname." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="next_of_kin_surname is required" id="next_of_kin_surname" name="next_of_kin_surname" placeholder="Next_of_kin_Surname" type="text" value ="<?php echo $next_of_kin_surname;?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_surname" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="next_of_kin_firstname">Next Of Kin First name:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-next_of_kin_firstname="Please enter a valid next_of_kin_firstname." data-val-length="The field First name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="next_of_kin_firstname" name="next_of_kin_firstname" placeholder="Next Of Kin Firstname" type="text" value ="<?php echo $next_of_kin_firstname;?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_firstname" data-valmsg-replace="true"></span>
                            </div>
                 </div>
            
              
            </div>
            
              <div class="row">
                                <div class="col-md-6">
            <div class="form-group">
                                <label for="next_of_kin_relationship">Next of Kin Relationship with Member:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-surname="Please enter a valid next_of_kin_relationship." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="next_of_kin_relationship is required" id="next_of_kin_relationship" name="relationship" placeholder="next_of_kin_relationship" type="text"  value ="<?php echo $next_of_kin_relationship;?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_relationship" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="next_of_kin_telephone">Next Of Kin Telphone number:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-next_of_kin_telephone="Please enter a valid next_of_kin_telephone." data-val-length="The field next_of_kin_telephone must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="next_of_kin_telephone is required" id="next_of_kin_telephone" name="next_of_kin_telephone" placeholder="next_of_kin_telephone" type="text" pattern="[0-9]{4}[0-9]{3}[0-9]{3}"   value ="<?php echo $next_of_kin_telephone;?>"/>
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_telephone" data-valmsg-replace="true"></span>
                            </div>
                 </div>
            
              
            </div>
           
            <br/>
            <h4><b>Accounts Information</b></h4>
            
            
            
            
            
            
            
             <div class="form-group">
                                <label for="account_number">Account No:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-pid="Please enter a valid account_number id ." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="account_numberis required" id="account_number" name="account_number" placeholder="account_number" type="text"  value ="<?php echo $account_number;?>"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="account_number" data-valmsg-replace="true"></span>
                            </div>
                            
            
            
            <div class="form-group">
                                <label for="bank">Bank:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-bank="Please enter a valid bank." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="bank is required" id="bank" name="bank" placeholder="Bank" type="text"  value ="<?php echo $bank;?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="bank" data-valmsg-replace="true"></span>
                            </div>
            <div class="form-group">
                                <label for="branch">Branch:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-branch="Please enter a valid branch." data-val-length="The field branch must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="branch" name="branch" placeholder="Branch" type="text"  value ="<?php echo $branch;?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="branch" data-valmsg-replace="true"></span>
                            </div>
               <div class="form-group">
                                <label for="cdc">CDC:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-branch="Please enter a valid cdc." data-val-length="The field cdc must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="cdc is required" id="cdc" name="cdc" placeholder="Branch" type="text"  value ="<?php echo $cdc;?>"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="cdc" data-valmsg-replace="true"></span>
                            </div>
                                    
                                    </div>
                                 
                     <div class="col-sm-4">
                        <h6 class="page-header"><a href="#">Find and Delete Buttons</a></h6>
       
                     
                   
                                    
                                    
                                    
                                    
                                    
                           
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
                     
                     
                            
                     
                      <form action="parents_pic_edit.php" method="post" enctype="multipart/form-data" class="md-form" class="work-request" enctype="multipart/form-data" id="docUpload" >
                    
  <div class="form-group">
                                <label for="parentsID">Parents ID:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-pid="Please enter a valid paernts id ." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="pid is required" id="id" name="parents_id"  type="hidden" value ="<?php echo $parents_id;?>"   style="color:red; font-weight: bold;"; readonly />
                                <span class="field-validation-valid text-danger" data-valmsg-for="surname" data-valmsg-replace="true"  ></span>
                            </div>
                     
                     
                      

                
                
                
                  
           
                       
                        <div class="box-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 style="margin-bottom:0px;">Applicant passport size photo </h6>
                                    <i style="font-size:15px;">(Supported types are <b>'jpeg/png'</b>, size = 300KB max)</i>
                                    <div class="form-group">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Photo" data-valmsg-replace="true"></span>
                                        <p class=""><img id="photoImg" src="uploads/passport_photos/parents/<?php echo $photo;?>" alt="Passport Photo will appear after parents Id is found. Use the Parents Id and then Press Find to Search Photo" style="height:200px;" class="img-thumbnail img-responsive"></p>
                                        <input type="file" name="file">
                                        <!--
                  <input type="submit" name="submit" value="Upload" accept=".jpeg,.png" data-val="true" data-val-filesize="File size should be less than 300KB" data-val-filesize-maxbytes="300720" data-val-filetype="Only the following file types are allowed: png or jpg or jpeg" data-val-filetype-validtypes="png,jpg,jpeg" id="Photo" name="Photo" required="required" title="Photo is required"  />-->
                                    </div>
                              
                             
                
                
                
                
                
                
                    
                

            </div>
        </div>
      
    </div>
            <div class="col-sm-6">
                <div class="box-footer">
                    <button name="submit" id ="Photo" value="saveContinue" type="submit" class="btn btn-primary btn-label-next pull-right" style="border-radius: 0;">
                                    | Edit Passport Photo |
                                    <i class="fa fa-share"></i>
                                </button>
                    
                   
              