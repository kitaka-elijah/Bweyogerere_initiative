<?php require('userheader2.php');
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 module-content">
        <div class="row">
            <div class="col-sm-6" style="text-align:justify">


                <form action="divert.php" method="post" enctype="multipart/form-data" class="md-form" class="work-request" enctype="multipart/form-data" id="docUpload" >





                    <h6 class="page-header">
                    <a href="#">Parents ID</a>
                </h6>

               <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Parent Application Id">Parent Id</label>
                                        <input class="form-control text-box single-line"  name="parent_id" placeholder="parent_id  " type="text" value="" required />
                                        <span class="field-validation-valid text-danger" data-valmsg-for="parents_id" data-valmsg-replace="true"></span>
                                    </div>
                                </div>


                                <div class="box box-default">
                                                        <div class="box-header with-border">

                                                                </div>
                                                        <div class="box-body" style="display: block;">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group">
                                                                        <h3 class="box-title">Please Select number of Children you have</h3>

                                                                        <label for="BirthNationalityID">Number of Children</label>




                                                                         <select class="form-control" data-val="true" data-val-number="The field Year must be a number." data-val-required="Year required." id="number_of_children" name="number_of_children" style="width:82px;"><option value="">0</option>



                                <option value= "1" >1</option>
                                <option value= "2" >2</option>
                                <option value= "3" >3</option>
                                <option value= "4" >4</option>
                                <option value= "5" >5</option>
                                <option value= "6" >6</option>
                                <option value= "7">7</option>
                                <option value= "8" >8</option>

                                </select>





                                                                                                                <span class="field-validation-valid text-danger" data-valmsg-for="esbac" data-valmsg-replace="true"></span>

                                                                     </div>
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
