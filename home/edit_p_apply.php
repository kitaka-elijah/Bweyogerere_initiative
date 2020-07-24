<?php
require('userheader1.php');

require('connection.php');
if (isset($_POST['parentsSreach'])) {
    parentsSreach($mysqli);
}

function parentsSreach(){
$parents_id= $_POST["parents_id"];

// Include the database configuration file
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
preg.status AS current_status
FROM 
parentReg preg 
WHERE
 preg.parents_id = '$parents_id'
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
        
   } 
}
}
?>



<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 tab-registration-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tab-registration-menu hidden-xs">
 
<div class="list-group">
            <a href="edit_p_apply.php" class="list-group-item active">
                <text class=""><i class="fa fa-spinner"></i>Edit Parents</text>
            </a>
                    
      <a href="edit_p_apply.php" class="list-group-item ">
                <text class=""><i class="fa fa-spinner"></i>Edit Child1</text>
            </a>

            <a href="search_savings.php" class="list-group-item ">
                <text><i class=""></i>Search Savings</text>
            </a>


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
                                <input class="form-control text-box single-line" data-val="true" data-val-pid="Please enter a valid paernts id ." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="pid is required" id="parents id" name="parents_id"  type="text"   style="color:red; font-weight: bold;"; />
                                <span class="field-validation-valid text-danger" data-valmsg-for="surname" data-valmsg-replace="true"  ></span>
                            </div>
                            
            
            
             <div class="row">
                                <div class="col-md-6">
            <div class="form-group">
                                <label for="surname">Surname:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-surname="Please enter a valid Surname." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Surname is required" id="surname" name="surname" placeholder="Surname" type="text" value ="<?php echo $parents_surname;?>"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="surname" data-valmsg-replace="true" > </span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="firstname">First name:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-firstname="Please enter a valid firstname." data-val-length="The field First name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="firstname" name="firstname" placeholder="First name" type="text"  />
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
                                <input class="form-control text-box single-line" data-val="true" data-val-Telephone="Please enter a valid Telephone." data-val-length="The field Telephone must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="phone" name="phone" placeholder="Telephone" type="text" pattern="[0-9]{4}[0-9]{3}[0-9]{3}"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Telephone" data-valmsg-replace="true"></span>
                            </div>
                 </div>
            
              
            </div>
            
            
             <div class="row">
                                <div class="col-md-8">
                                    <label for="GenderID">Gender</label><span style="color:red">&nbsp;<b>*</b></span>
                                    <div class="form-inline required">
                                        <div class="form-group has-feedback">
                                            <label class="input-group">
                                                <span class="input-group-addon"><input name="gender" value="Male" type="radio"  title="One of these options is required"></span>
                                                <div class="form-control form-control-static"> Male</div>
                                                <span class="glyphicon form-control-feedback"></span>
                                            </label>
                                        </div>
                                        <div class="form-group has-feedback ">
                                            <label class="input-group">
                                                <span class="input-group-addon"><input name="gender" value="Female" type="radio" ></span>
                                                <div class="form-control form-control-static"> Female</div>
                                                <span class="glyphicon form-control-feedback "></span>
                                            </label>
                                        </div>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="GenderID" data-valmsg-replace="true"></span>
                                    </div>
                 </div>
                 <div class="col-md-4">
                            
                                    <div class="form-group"><span style="color:red">&nbsp;<b>*</b></span>
                                        <label for="MaritalStatusID">Marital Status</label>
                                        <select class="form-control" data-val="true" data-val-number="The field Marital Status must be a number."  data-val-required="Marital Status is required" id="MaritalStatusID" name="maritalstatus" ><option value="">-- Select Status --</option>
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Divorced">Divorced</option>
<option value="Widowed">Widowed</option>
</select>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="MaritalStatusID" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                            </div>
            
            
            
             <div class="row">
                                <div class="col-md-12">
            <div class="form-group">
                
                
                
                
                    <label for="firstname">Occupation:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-ocucupation="Please enter a valid occupation." data-val-length="The field Occupation must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="occupation" name="occupation" placeholder="Occupation" type="text"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="First name" data-valmsg-replace="true"></span>
                         
                
                
                
                
                
                
                               
                                    
                                                 <label for="BirthDate2">Birth Date</label><span style="color:red">&nbsp;*</span>
                                        <div class="input-group">
                                            
                                            <select class="form-control"  data-val="true" data-val-number="The field Day must be a number." data-val-required="Day required." id="Day" name="day" style="width:72px;"><option value="">Day</option>
                                                


<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'> 3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'> 9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'> 14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>
                                            <select class="form-control"  data-val="true" data-val-number="The field Month must be a number." data-val-required="Month required." id="Month" name="month" style="width:122px;"><option value="">Month</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
                                            <select class="form-control" data-val="true" data-val-number="The field Year must be a number." data-val-required="Year required." id="Year" name="year" style="width:82px;"><option value="">Year</option>

<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
<option value="1904">1904</option>
<option value="1903">1903</option>
<option value="1902">1902</option>
<option value="1901">1901</option>
<option value="1900">1900</option>
<option value="1899">1899</option>

</select>
                                            
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
                                <input class="form-control text-box single-line" data-val="true" data-val-location="Please enter a valid location." data-val-length="The field location must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Surname is required" id="location" name="location" placeholder="Location" type="text"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="location" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="religion">Religion:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-religion="Please enter a valid religion." data-val-length="The field religion must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="religion" name="religion" placeholder="Religion" type="text"  />
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
                                <input class="form-control text-box single-line" data-val="true" data-val-surname="Please enter a valid next_of_kin_surname." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="next_of_kin_surname is required" id="next_of_kin_surname" name="next_of_kin_surname" placeholder="Next_of_kin_Surname" type="text"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_surname" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="next_of_kin_firstname">Next Of Kin First name:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-next_of_kin_firstname="Please enter a valid next_of_kin_firstname." data-val-length="The field First name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="next_of_kin_firstname" name="next_of_kin_firstname" placeholder="Next Of Kin Firstname" type="text"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_firstname" data-valmsg-replace="true"></span>
                            </div>
                 </div>
            
              
            </div>
            
              <div class="row">
                                <div class="col-md-6">
            <div class="form-group">
                                <label for="next_of_kin_relationship">Next of Kin Relationship with Member:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-surname="Please enter a valid next_of_kin_relationship." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="next_of_kin_relationship is required" id="next_of_kin_relationship" name="relationship" placeholder="next_of_kin_relationship" type="text"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_relationship" data-valmsg-replace="true"></span>
                            </div>
                 </div>
                  <div class="col-md-6">
            <div class="form-group has-feedback">
                                <label for="next_of_kin_telephone">Next Of Kin Telphone number:</label><span style="color:red">&nbsp;<b>*</b></span>
                                <input class="form-control text-box single-line" data-val="true" data-val-next_of_kin_telephone="Please enter a valid next_of_kin_telephone." data-val-length="The field next_of_kin_telephone must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="next_of_kin_telephone is required" id="next_of_kin_telephone" name="next_of_kin_telephone" placeholder="next_of_kin_telephone" type="text" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="next_of_kin_telephone" data-valmsg-replace="true"></span>
                            </div>
                 </div>
            
              
            </div>
           
            <br/>
            <h4><b>Accounts Information</b></h4>
            
            
            
            
            
            
            
             <div class="form-group">
                                <label for="account_number">Account No:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-pid="Please enter a valid account_number id ." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="account_numberis required" id="account_number" name="account_number" placeholder="account_number" type="text"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="account_number" data-valmsg-replace="true"></span>
                            </div>
                            
            
            
            <div class="form-group">
                                <label for="bank">Bank:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-bank="Please enter a valid bank." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="bank is required" id="bank" name="bank" placeholder="Bank" type="text"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="bank" data-valmsg-replace="true"></span>
                            </div>
            <div class="form-group">
                                <label for="branch">Branch:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-branch="Please enter a valid branch." data-val-length="The field branch must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="First name is required" id="branch" name="branch" placeholder="Branch" type="text"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="branch" data-valmsg-replace="true"></span>
                            </div>
               <div class="form-group">
                                <label for="cdc">CDC:</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-branch="Please enter a valid cdc." data-val-length="The field cdc must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="cdc is required" id="cdc" name="cdc" placeholder="Branch" type="text"  />
                                <span class="field-validation-valid text-danger" data-valmsg-for="cdc" data-valmsg-replace="true"></span>
                            </div>
                                    
                                    </div>
                                 
                     <div class="col-sm-4">
                        <h6 class="page-header"><a href="#">Applicant's Next of Kin and Accounts infomation</a></h6>
       
            <h4><b>Next Of Kin Information</b></h4><br/>
            
                                    
                                    
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
                   
                                    
                                    
                                    
                                    
                                    
                           
   <div class="box-footer">
   <button name="parentsSreach" id ="StartNewApplication" value="saveContinue" type="submit" class="btn btn-primary btn-label-next pull-left" style="border-radius: 0;">
     | Search |
     <i class="fa fa-share"></i>
     </button>
     </div>
           </form>                   
                         
        <div class="box-footer">
       <button name="parentReg" id ="StartNewApplication" value="saveContinue" type="submit" class="btn btn-primary btn-label-next pull-right" style="border-radius: 0;">
     | Edit |
     <i class="fa fa-share"></i>
     </button>
            

                                  
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                            </div>
                </div>
                    
                    
                </div>
            </div>
        </div>
    
    
    
    
    
                          

