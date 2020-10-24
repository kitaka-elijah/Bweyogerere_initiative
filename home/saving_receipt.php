<?php
require('userheader1.php');
require('generate_recipt_number.php');?>



<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 tab-registration-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tab-registration-menu hidden-xs">
 
<div class="list-group">
            <a href="savings.php" class="list-group-item active">
                <text class=""><i class="fa fa-spinner"></i>Savings</text>
            </a>



            <a href="search_savings.php" class="list-group-item ">
                <text><i class=""></i>Search Savings</text>
            </a>


            </div></div>



<div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-10 module-content">
                <div class="row">
                    
                    
                                <div class="col-sm-3">
                        <h6 class="page-header"><a href="#">Savings </a></h6>
  <?php        

                       
                            
                        $field1  = $_POST['parents_id'] ;
                        $field2  = $_POST['student_id'] ;
                        $field3  = $_POST['term'] ;
                        $field4  = $_POST['total_fees'] ;
                        $field5  = $_POST['processing_fees'] ;
                        $field6 = $field4 - $field5;
                        
                
                echo '
                        
                        
                      
 
                        
                        
                        
                        
                        
                                     <div class ="row">
                 <div class="col-sm-6">
                 <div class ="print-container">
                         <table>
            <tr><th>Parents ID</th><th>'.
             $field1.

            '</th></tr>
             <tr><th>Child  ID</th><th>'.$field2.' </th></tr>
             <tr><th>Term</th><th>'.$field3.'</th></tr>
            <tr><th>Savings</th><th>Processing Fees</th></tr>
             <tr><th>'.$field6.'</th><th>'.$field5.'</th></tr>
            <tr><th>Total</th><th>'.$field4.'</th></tr>
            
            </table>
        </div></div>
        
        ';
        
     
                    
    ?>              
                    
                    
                    
                    
                    </div>
                                    
                                       
                                    
          </div>
                    
                    
                </div>
            </div>
        </div>
   
     
            
    
    
    