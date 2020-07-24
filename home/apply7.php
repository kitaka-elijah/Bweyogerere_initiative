
<?php
require('userheader.php');?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 tab-registration-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tab-registration-menu hidden-xs">
 
<div class="list-group">
            <a href="apply6.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Add Second Child-2</text>
            </a>



            <a href="apply7.php" class="list-group-item active ">
                <text><i class=""></i>Add Second Child's Passport Photo-2</text>
            </a>
    <a href="#" class="list-group-item ">
        <text><i class=" "></i> Complete</text>
    </a>
</div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 tab-registration-tab">
<form action="upload_image_child2.php" method="post" enctype="multipart/form-data" class="md-form" class="work-request" enctype="multipart/form-data" id="docUpload" ><input name="__RequestVerificationToken" type="hidden" value="FYHG_pjxGXeLV_Futzz0kSJeEhJj-LLRz-qDWrn3kiCUf-b6RdyGNY4Iqfkxvqb4lqP2HBbDbjWD45y_HiRZWoFlu6OW9NdBFrITdlUab3NAL_0anXU0CrzDZEjO-8AXOrwYKgLEDZbzJupK8FxSSg2" />
                    <div class="callout callout-warning">
                        <p><b>Note:</b>This infomation is mapped on to the Parents ID.</p>
                    </div>
                 
                       
                                 <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Upload Passport</h3>
                        </div>
                        <div class="box-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 style="margin-bottom:0px;">Applicant passport size photo </h6>
                                    <i style="font-size:15px;">(Supported types are <b>'jpeg/png'</b>, size = 300KB max)</i>
                                    <div class="form-group">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Photo" data-valmsg-replace="true"></span>
                                        <p class=""><img id="photoImg" src="images/ppdami.jpg" alt="your photo" style="height:200px;" class="img-thumbnail img-responsive"></p>
                                        <input type="file" name="file">
                 <!-- <input type="submit" name="submit" value="Upload" accept=".jpeg,.png" data-val="true" data-val-filesize="File size should be less than 300KB" data-val-filesize-maxbytes="300720" data-val-filetype="Only the following file types are allowed: png or jpg or jpeg" data-val-filetype-validtypes="png,jpg,jpeg" id="Photo" name="Photo" required="required" title="Photo is required"  />-->
                                    </div>
                                </div>
                               
                               

                                            </div>
                                    </div><br />
                            </div>
                                
                                
                                
                                
                                
                                
                                
        
                                
                                
                                
                                
                         
                    
                    <div class="box-footer">
                        <div class="row">
   <!--- <div class="col-md-4 col-sm-6 col-xs-6">
        <a href ="apply6.php"  class="btn btn-warning btn-block btn-default">
            <text class="hidden-sm hidden-xs">| Back |</text>
            <text class="visible-sm visible-xs">Back</text>
            <i class="fa fa-save hidden-sm hidden-xs"></i>
        </a>
    </div>-->
                            
                             
                            
    <div class="col-md-4 hidden-sm hidden-xs"></div>
    <div class="col-md-4  col-sm-6 col-xs-6">
        <button name="saveandAddChild" value="saveContinue" type="submit" class="btn btn-primary btn-block btn-label-next" style="border-radius: 0px;">
            <text class="hidden-sm hidden-xs">Add another Child |</text>
            <text class="visible-sm visible-xs">Continue</text>
            <i class="fa fa-share hidden-sm hidden-xs"></i>
        </button>
    </div>
</div>

                    </div>
                
</form>        </div>
    </div>
</div>

   