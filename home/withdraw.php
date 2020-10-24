<?php
require('userheader1.php');
require('generate_recipt_number.php');
?>
 

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 tab-registration-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tab-registration-menu hidden-xs">
 
<div class="list-group">
            <a href="withdraw.php" class="list-group-item active">
                <text class=""><i class="fa fa-spinner"></i>Withdraw</text>
            </a>



           <!-- <a href="withdraw_status.php" class="list-group-item ">
                <text><i class=""></i>Withdraw Status</text>
            </a>
                -->


            </div></div>



<div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-10 module-content">
                <div class="row">
                    
                    
                                <div class="col-sm-3">
                        <h6 class="page-header"><a href="#">Withdraw </a></h6>
        <form action="brains.php" method="post"><input name="__RequestVerificationToken" type="hidden" value="4qcTXQjUp670Plq5n1m2yfWgCBZ_oBLJTdBRRDNSAFcAeg4jflnvkQILRJDGMFLajdGHrEDNJlk88NFyy-Z40eJ54n16L4ZsFp7OX3wOssfEpouABpdFEa2gCCbtfdg1pl-viISopFbYyqkS72dvZw2" />
            
            <h4><b>Parents Information</b></h4>
            <br/>
             <div class="form-group">
                                <label for="parentsID">Parents ID:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-pid="Please enter a valid paernts id ." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="pid is required" id="parents id" name="parents_id" placeholder="parents id" type="text" required />
                                <span class="field-validation-valid text-danger" data-valmsg-for="parents_id" data-valmsg-replace="true"></span>
                            </div>
                            
            
            
             <div class="row">
                                <div class="col-md-12">
            <div class="form-group">
                                <label for="student_id">Student ID:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-surname="Please enter a valid student id." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Surname is required" id="student_id" name="student_id" placeholder="Student id" type="text" required />
                                <span class="field-validation-valid text-danger" data-valmsg-for="student_id" data-valmsg-replace="true"></span>
                            </div>
               
                                   
                            
                                    <div class="form-group"><span style="color:red">&nbsp;<b>*</b></span>
                                        <label for="Term">Term</label>
                                        <select class="form-control" data-val="true" data-val-number="The field Marital Status must be a number." required data-val-required="Marital Status is required" id="term" name="term" required><option value="">----</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>

</select>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="MaritalStatusID" data-valmsg-replace="true"></span>
                                    </div>
                                        
                                    
                                     <div class="form-group">
                                <label for="cdc">CDC:</label>
                    <select class="form-control" data-val="true" data-val-number="The field Marital Status must be a number." required data-val-required="Marital Status is required" id="MaritalStatusID" name="cdc" required><option value="">-- Select CDC --</option>
                        <option value="BOMBO">BOMBO</option>
                        <option value="BUWOYA">BUWOYA</option>
                        <option value="BWEYOGERERE">BWEYOGERERE</option>
                        <option value="KALULE">KALULE</option>
                        <option value="KIDS CARE">KIDS CARE</option>
                        <option value="KIREKA SDA">KIREKA SDA</option>
                        <option value="KITEGA">KITEGA</option>
                        <option value="MAKULA">MAKULA</option>
                        <option value="NAJANAKUMBI">NAJANAKUMBI</option>
                        <option value="NKOOWE">NKOOWE</option>
                        <option value="POTTER HOUSE">POTTER HOUSE</option>
                    </select>
                   
                                <span class="field-validation-valid text-danger" data-valmsg-for="cdc" data-valmsg-replace="true"></span>
                            </div>
                            
                                
                            </div>     
                            </div>
            <!--
                      <div class="form-group">
                                <label for="Savings">Withdraw:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-pid="Please enter a valid sacvings." data-val-length="The field Savings must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="pid is required" id="savings id" name="savings" placeholder="Savings" type="text" required />
                                <span class="field-validation-valid text-danger" data-valmsg-for="savings" data-valmsg-replace="true"></span>
                            </div>
            
            
            -->
                                    <!--    <div class="box-footer">
                                <button name="SavingsButton" id ="StartNewApplication" value="save Savings" type="submit" class="btn btn-primary btn-label-next pull-right" style="border-radius: 0;">
                                    | Save Savings |
                                    <i class="fa fa-share"></i>
                                </button>
                            </div>
-->
              <div class="box-footer">
                                <button name="InitiateWithDrawalButton" id ="StartNewApplication" value="save Savings" type="submit" class="btn btn-primary btn-label-next pull-right" style="border-radius: 0;">
                                    | Initiate WithDrawal |
                                    <i class="fa fa-share"></i>
                                </button>
                            </div>
            
           </div>
                                    
                                    
                                    
        </form>            </div>
                    
                    
                </div>
            </div>
        </div>
    
    
    