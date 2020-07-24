<?php require('userheader2.php');
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 module-content">
        <div class="row">
            <div class="col-sm-6" style="text-align:justify">
               
                
                <form action="parents_check_script.php" method="post" enctype="multipart/form-data" class="md-form" class="work-request" enctype="multipart/form-data" id="docUpload" >
                    

                    
                    
                    
                    <h6 class="page-header">
                    <a href="#">Insert Your Parents ID</a>
                </h6>

               <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Parent Application Id">Parent Id</label>
                                        <input class="form-control text-box single-line"  name="parent_id" placeholder="parent_id  " type="text" value="" required />
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
