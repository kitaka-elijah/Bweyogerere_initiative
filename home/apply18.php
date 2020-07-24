
<?php
require('userheader.php');?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 tab-registration-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tab-registration-menu hidden-xs">
 
<div class="list-group">
            <a href="apply18.php" class="list-group-item active">
                <text class=""><i class="fa fa-spinner"></i>Add Six Child-6 </text>
            </a>



            <a href="apply19.php" class="list-group-item ">
                <text><i class=""></i>Add Six Child's Passport Photo-6</text>
            </a>
   
    <a href="#" class="list-group-item ">
        <text><i class=" "></i> Complete</text>
    </a>
</div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 tab-registration-tab">
<form action="brains.php" method="post"><input name="__RequestVerificationToken" required type="hidden" value="faB39RiD9QUizP9xrHNuOrks0eiSVmHUbLffqa4zaMLvNei_UofEVVHGONAy4ACO3FlME7eo5eEvbIH-KTOY4YJsJG-6pcGW0mytt2xrrJ1ydc-PbDlzaE_VG4GSK4z72_1D_U9ePWHZOdQnrLSmag2" /><input data-val="true" data-val-number="The field ApplicationID must be a number." id="ApplicationID" name="ApplicationID" type="hidden" value="84849" /><input id="UserId" name="UserId" type="hidden" value="" />                <div class="tab-registration-content active">
                    <div class="callout callout-warning">
                        <p><b>Note:</b>This infomation is mapped on to the Parents ID. <?php echo $_SESSION["parents_id"];?></p>
                    </div>
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Child Information</h3>
                        </div>
                        <div class="box-body" style="display: block;">
                            <div class="row">
                              
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Application Id">Student Id</label>
                                        <input class="form-control text-box single-line" required name="student6_ID" placeholder="Child ID" type="text" value="<?php  echo $_SESSION["parents_id"]."-006"; ?>" readonly style="color:red";/>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="student_id" data-valmsg-replace="true"></span>
                                    </div>
                                    
                                </div>
                                   
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Middlename">First name</label>
                                        <input class="form-control text-box single-line" required data-val="true" data-val-length="The field Middle name must be a string with a maximum length of 100." data-val-length-max="100" data-val-regex="Only Alphabet characters are allowed" data-val-regex-pattern="[A-Za-z]([a-zA-Z&#39;-]|\s)*" id="Firstname" name="firstname" placeholder="First Name" type="text" value="" />
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Middlename" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Surname">Surname</label>
                                        <input class="form-control text-box single-line" required data-val="true" data-val-length="The field Surname must be a string with a maximum length of 100." data-val-length-max="100" data-val-regex="Only Alphabet characters are allowed" data-val-regex-pattern="[A-Za-z]([a-zA-Z&#39;-]|\s)*" id="Surname" name="surname" placeholder="Surname" type="text" value="" />
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Surname" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                           
                         
                                <div class="col-md-4">
                                    <label for="GenderID">Gender</label><span style="color:red">&nbsp;<b>*</b></span>
                                    <div class="form-inline required">
                                        <div class="form-group has-feedback">
                                            <label class="input-group">
                                                <span class="input-group-addon"><input name="gender" value="Male" type="radio" required title="One of these options is required"></span>
                                                <div class="form-control form-control-static"> Male</div>
                                                <span class="glyphicon form-control-feedback"></span>
                                            </label>
                                        </div>
                                        <div class="form-group has-feedback ">
                                            <label class="input-group">
                                                <span class="input-group-addon"><input name="gender" value="Female" type="radio" required></span>
                                                <div class="form-control form-control-static"> Female</div>
                                                <span class="glyphicon form-control-feedback "></span>
                                            </label>
                                        </div>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="GenderID" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                 </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Date and Place of Birth</h3>
                        </div>
                        <div class="box-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label for="BirthDate2">Birth Date</label><span style="color:red">&nbsp;*</span>
                                        <div class="input-group">
                                            
                                            <select class="form-control" required data-val="true" data-val-number="The field Day must be a number." data-val-required="Day required." id="Day" name="day" style="width:72px;"><option value="">Day</option>
                                                
<!--

 for($day=1;31>=$day;$day++){
  print"<option value=$day>$day</option>";  
}
    ?>
-->

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
                                            <select class="form-control" required data-val="true" data-val-number="The field Month must be a number." data-val-required="Month required." id="Month" name="month" style="width:122px;"><option value="">Month</option>
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
<!--

for ($year =2019 ; 1899<=$year;$year--){
   // print "<h1>$year</h1>";
    $selectedValue = print "<option value=$year>$year</option>";
    
}
$sub = $selectedValue - date("Y");
if($sub <18){
    echo "<script>alert('You Must Be above 18 years to get a driving permit');</script>";
}

?>
-->

<option value="2020">2020</option>
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
                               
                                
                                
                    <div class="box box-default">
                        <div class="box-header with-border">
                            
                                </div>
                        <div class="box-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <h3 class="box-title">Duration and Accounts Information</h3>
                    
                                        <label for="BirthNationalityID">ESB/AC</label>
                                       
                                        
                                        
                                        
                                         <select class="form-control" data-val="true" data-val-number="The field Year must be a number." data-val-required="Year required." id="esbac" name="esbac" style="width:82px;"><option value="">Account</option>



<option value="PESA">PESA</option>
<option value="SESA">SESA</option>
<option value="HISA">HISA</option>


</select>
                                        
                                        
                                        
                                        
                                        
                                                                                <span class="field-validation-valid text-danger" data-valmsg-for="esbac" data-valmsg-replace="true"></span>
                                     
                                     </div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="CurrentNationalityID">From</label>
                                       
                                        
                                                                           <select class="form-control" data-val="true" data-val-number="The field Year must be a number." data-val-required="Year required." id="Year" name="from" style="width:82px;"><option value="">Year</option>


<option value="2020">2020</option>
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
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="CurrentNationalityID">To</label>
                                         
                                         <select class="form-control" data-val="true" data-val-number="The field Year must be a number." data-val-required="Year required." id="Year" name="to" style="width:82px;"><option value="">Year</option>


                                             
<option value="2050">2050</option>
<option value="2049">2049</option>
<option value="2048">2048</option>
<option value="2047">2047</option>
<option value="2046">2046</option>
<option value="2045">2045</option>
<option value="2044">2044</option>
<option value="2043">2043</option>
<option value="2042">2042</option>
<option value="2041">2041</option>                                                                                    
<option value="2040">2040</option>
<option value="2039">2039</option>
<option value="2038">2038</option>
<option value="2037">2037</option>
<option value="2036">2036</option>
<option value="2035">2035</option>
<option value="2034">2034</option>
<option value="2033">2033</option>
<option value="2032">2032</option>
<option value="2031">2031</option>
<option value="2030">2030</option>                                                        
<option value="2029">2029</option>
<option value="2028">2028</option>
<option value="2027">2027</option>
<option value="2026">2026</option>
<option value="2025">2025</option>
<option value="2024">2024</option>
<option value="2023">2023</option>
<option value="2022">2022</option>
<option value="2021">2021</option>                           
<option value="2020">2020</option>
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
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="row">
   <!-- <div class="col-md-4 col-sm-6 col-xs-6">
        <a href ="apply17.php"  class="btn btn-warning btn-block btn-default">
            <text class="hidden-sm hidden-xs">| Back |</text>
            <text class="visible-sm visible-xs">Back</text>
            <i class="fa fa-save hidden-sm hidden-xs"></i>
        </a>
    </div>-->
    <div class="col-md-4 hidden-sm hidden-xs"></div>
    <div class="col-md-4  col-sm-6 col-xs-6">
        <button name="saveandAddsixthChild" value="saveContinue" type="submit" class="btn btn-primary btn-block btn-label-next" style="border-radius: 0px;">
            <text class="hidden-sm hidden-xs">|Continue to Add Passport Photo |</text>
            <text class="visible-sm visible-xs">Continue</text>
            <i class="fa fa-share hidden-sm hidden-xs"></i>
        </button>
    </div>
</div>

                    </div>
                </div>
</form>        </div>
    </div>
</div>

   