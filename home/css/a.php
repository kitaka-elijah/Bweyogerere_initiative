<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "onlinevisaprocessing";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
  $applicationid=$_POST["applicationid"];
$ApplyingCountryID2=$_POST["ApplyingCountryID2"];
$EmbassyID=$_POST["EmbassyID"];
$VisaTypeID2=$_POST["VisaTypeID2"];
$VisitPurposeID2=$_POST["VisitPurposeID2"];
$IsFirstVisit2=$_POST["IsFirstVisit2"];
$LastVisitDay2=$_POST["LastVisitDay2"];
$LastVisitMonth2=$_POST["LastVisitMonth2"];
$LastVisitYear2=$_POST["LastVisitYear2"];
$LastVisaNumber2=$_POST["LastVisaNumber2"];
$DestinationID2=$_POST["DestinationID2"];
$PortTypeID2=$_POST["PortTypeID2"];
$EntryPortID2=$_POST["EntryPortID2"];
$DeparturePortID2=$_POST["DeparturePortID2"];
$ArrivalMonth2=$_POST["ArrivalMonth2"];
$ArrivalYear2=$_POST["ArrivalYear2"];
$StayDuration2=$_POST["StayDuration2"];
$HostTypeID2=$_POST["HostTypeID2"];
$NIN=$_POST["NIN"];
$PassOrPermitNo2=$_POST["PassOrPermitNo2"];
$HostName2=$_POST["HostName2"];
$HostMobileNo2=$_POST["HostMobileNo2"];
$HostEmail2=$_POST["HostEmail2"];
$HostOffice2=$_POST["HostOffice2"];
$RegistrationNo2=$_POST["RegistrationNo2"];
$Relationship2=$_POST["Relationship2"];
$HostAddress2=$_POST["HostAddress2"];
$AccomodationID2=$_POST["AccomodationID2"];
$ApplicantStayAddress2=$_POST["ApplicantStayAddress2"];

           
   // mysql query to Update data
   $query = "UPDATE `applications` 
   SET `fname`='".$fname."',
`ApplyingCountryID2`='".$ApplyingCountryID2."',
`EmbassyID`='".$EmbassyID."',
`VisaTypeID2`='".$VisaTypeID2."',
`VisitPurposeID2`='".$VisitPurposeID2."',
`IsFirstVisit2`='".$IsFirstVisit2."',
`LastVisitDay2`='".$LastVisitDay2."',
`LastVisitMonth2`='".$LastVisitMonth2."',
`LastVisitYear2`='".$LastVisitYear2."',
`LastVisaNumber2`='".$LastVisaNumber2."',
`DestinationID2`='".$DestinationID2."',
`PortTypeID2`='".$PortTypeID2."',
`EntryPortID2`='".$EntryPortID2."',
`DeparturePortID2`='".$DeparturePortID2."',
`ArrivalMonth2`='".$ArrivalMonth2."',
`ArrivalYear2`='".$ArrivalYear2."',
`StayDuration2`='".$StayDuration2."',
`HostTypeID2`='".$HostTypeID2."',
`NIN`='".$NIN."',
`PassOrPermitNo2`='".$PassOrPermitNo2."',
`HostName2`='".$HostName2."',
`HostMobileNo2`='".$HostMobileNo2."',
`HostEmail2`='".$HostEmail2."',
`HostOffice2`='".$HostOffice2."',
`RegistrationNo2`='".$RegistrationNo2."',
`Relationship2`='".$Relationship2."',
`HostAddress2`='".$HostAddress2."',
`AccomodationID2`='".$AccomodationID2."',
`ApplicantStayAddress2`='".$ApplicantStayAddress2."'






















   `lname`='".$lname."',
   `age`= $age 






   WHERE `applicationid` = $applicationid";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>
