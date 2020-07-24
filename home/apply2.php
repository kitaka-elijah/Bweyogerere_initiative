<?php
// Start the session
require('userheader1.php');

?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 module-content">
        <div class="row">
            <div class="col-sm-6" style="text-align:justify">
               
                
                <form action="upload_image.php" method="post" enctype="multipart/form-data" class="md-form" class="work-request" enctype="multipart/form-data" id="docUpload" >
                    

                    
                    
                    
                    <h6 class="page-header">
                    <a href="#">Parents ID   <?php echo $_SESSION["parents_id"];?></a>
                </h6>

                    
                   
            
                    
                <p>Passport Photo attached to ID :- <b><?php echo $_SESSION["parents_id"];?></b></p>
               
                <p>Date:- <br><b><?php echo $date=date("d/m/Y");?></b></p>
              
                     
                    
                    
                    
            </div>
            <div class="col-sm-6">
                 <h6 class="page-header"><a href="#">Upload Parents Passport Photo</a></h6>
                
               

                
                
                
                  
                    <div class="box box-default">
                       
                        <div class="box-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 style="margin-bottom:0px;">Applicant passport size photo </h6>
                                    <i style="font-size:15px;">(Supported types are <b>'jpeg/png'</b>, size = 300KB max)</i>
                                    <div class="form-group">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Photo" data-valmsg-replace="true"></span>
                                        <p class=""><img id="photoImg" src="images/ppdami.jpg" alt="your photo" style="height:200px;" class="img-thumbnail img-responsive"></p>
                                        <input type="file" name="file">
                  <input type="submit" name="submit" value="Upload" accept=".jpeg,.png" data-val="true" data-val-filesize="File size should be less than 300KB" data-val-filesize-maxbytes="300720" data-val-filetype="Only the following file types are allowed: png or jpg or jpeg" data-val-filetype-validtypes="png,jpg,jpeg" id="Photo" name="Photo" required="required" title="Photo is required"  />
                                    </div>
                                </div>
                               
                               

                                            </div>
                                    </div><br />
                            </div>
                
                
                
                
                
                
                    
                

            </div>
        </div>
        <div class="row">
           <!-- <div class="col-sm-6">
            <div class="col-md-4 col-sm-6 col-xs-6">
        <a href ="apply.php"  class="btn btn-warning btn-block btn-default">
            <text class="hidden-sm hidden-xs">| Back |</text>
            <text class="visible-sm visible-xs">Back</text>
            <i class="fa fa-save hidden-sm hidden-xs"></i>
        </a>
                </div>
-->
    </div>
            <div class="col-sm-6">
                <div class="box-footer">
                    <button name="submit" id ="Photo" value="saveContinue" type="submit" class="btn btn-primary btn-label-next pull-right" style="border-radius: 0;">
                                    | Proceed to Reg Children  |
                                    <i class="fa fa-share"></i>
                                </button>
                    
                   
                </div>
            </div>
        </div>
    </div>
        </form>
</div>
<hr/>
