<?php
require('userheader1.php');
require('membergenerate.php');
?>

<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 module-content">
                <div class="row">
                    
                    
                                <div class="col-sm-12">
                        <h6 class="page-header"><a href="#">Member's Infomation</a></h6>
        <form action="brains.php" method="post"><input name="__RequestVerificationToken" type="hidden" value="4qcTXQjUp670Plq5n1m2yfWgCBZ_oBLJTdBRRDNSAFcAeg4jflnvkQILRJDGMFLajdGHrEDNJlk88NFyy-Z40eJ54n16L4ZsFp7OX3wOssfEpouABpdFEa2gCCbtfdg1pl-viISopFbYyqkS72dvZw2" />
            
            <h4><b>Parents Information</b></h4>
          
          
                            
            
            
             <div class="row">
                                <div class="col-md-6">
            <div class="form-group">
                                <label for="surname">Surname:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-surname="Please enter a valid Surname." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Surname is required" id="surname" name="surname" placeholder="Surname" type="text" required />
                                <span class="field-validation-valid text-danger" data-valmsg-for="surname" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="firstname">First name:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-firstname="Please enter a valid firstname." data-val-length="The field First name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="firstname" name="firstname" placeholder="First name" type="text" required />
                                <span class="field-validation-valid text-danger" data-valmsg-for="First name" data-valmsg-replace="true"></span>
                            </div>
                 </div>
            
              
            </div>
            
            
               <div class="row">
                                <div class="col-md-6">
            <div class="form-group">
                                <label for="nin">NIN:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-nin="Please enter a valid nin." data-val-length="The field NIN must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="nin is required" id="nin" name="nin" placeholder="NIN" type="text"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="nin" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="Telephone">Telephone:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-Telephone="Please enter a valid Telephone." data-val-length="The field Telephone must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="phone" name="phone" placeholder="Telephone" type="text" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" required />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Telephone" data-valmsg-replace="true"></span>
                            </div>
                 </div>
            
              
            </div>
            
            
           
            
            
             <div class="row">
                                <div class="col-md-12">
            <div class="form-group">
                
                
                
                
                
                
                
                
                
                               
                                    
                                                 <label for="ChildrenAc">Children A/C</label><span style="color:red">&nbsp;*</span>
                                        <div class="input-group">
                                            
                                            <select class="form-control" required data-val="true"  id="child1" name="child1" style="width:122px;"><option value="">Child 1</option>
                                             
                                                    <option value='27500'>PESA</option>
                                                    <option value='37500'>SESA</option>
                                                    <option value='54000'>HISA</option>
                                                </select>
                                            <select class="form-control"  data-val="true"  id="child2" name="child2" style="width:122px;"><option value="">Child 2</option>
                                                <option value='27500'>PESA</option>
                                                <option value='37500'>SESA</option>
                                                <option value='54000'>HISA</option>
                                                </select>
                                             <select class="form-control"  data-val="true"  id="child3" name="child3" style="width:122px;"><option value="">Child 3</option>
                                                      <option value='27500'>PESA</option>
                                                <option value='37500'>SESA</option>
                                                <option value='54000'>HISA</option>
                                                </select>
                                             <select class="form-control"  data-val="true"  id="child4" name="child4" style="width:122px;"><option value="">Child 4</option>
                                                <option value='27500'>PESA</option>
                                                <option value='37500'>SESA</option>
                                                <option value='54000'>HISA</option>
                                                </select>
                                             <select class="form-control"  data-val="true"  id="child5" name="child5" style="width:122px;"><option value="">Child 5</option>
                                                <option value='27500'>PESA</option>
                                                <option value='37500'>SESA</option>
                                                <option value='54000'>HISA</option>
                                                </select>
                                             <select class="form-control"  data-val="true"  id="child6" name="child6" style="width:122px;"><option value="">Child 6</option>
                                                <option value='27500'>PESA</option>
                                                <option value='37500'>SESA</option>
                                                <option value='54000'>HISA</option>
                                                </select>
                                             <select class="form-control"  data-val="true"  id="child7" name="child7" style="width:122px;"><option value="">Child 7</option>
                                                <option value='27500'>PESA</option>
                                                <option value='37500'>SESA</option>
                                                <option value='54000'>HISA</option>
                                                </select>
                                             <select class="form-control"  data-val="true"  id="child8" name="child8" style="width:122px;"><option value="">Child 8</option>
                                                <option value='27500'>PESA</option>
                                                <option value='37500'>SESA</option>
                                                <option value='54000'>HISA</option>
                                                </select>
                                            
                                        </div>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="BirthDate2" data-valmsg-replace="true"></span>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Day" data-valmsg-replace="true"></span>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Month" data-valmsg-replace="true"></span>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Year" data-valmsg-replace="true"></span>
                
                          <div class="box-footer">
                                <button name="addmember" id ="addMember" value="Add Member" type="submit" class="btn btn-primary btn-label-next pull-right" style="border-radius: 0;">
                                    | Add Member |
                                    <i class="fa fa-share"></i>
                                </button>
                            </div>
                   
                 
              
                                    </div>
                 </div>
                </div>
            
            
            
             
            
                
                
                  </div>

                    
                    
                </div>
            </div>
        </div>