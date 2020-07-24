<?php



function ppinfoexit(){


//load database connection
include("mysqli-connect.php");
// MySQL data
$applicationid=$_POST['applicationid'];
$ApplyingCountryID2=$_POST['ApplyingCountryID2'];
$EmbassyID=$_POST['EmbassyID'];
$IssuedCountryID=$_POST['IssuedCountryID'];
$VisaTypeID2=$_POST['VisaTypeID2'];
$VisitPurposeID2=$_POST['VisitPurposeID2'];
$IsFirstVisit2=$_POST['IsFirstVisit2'];
$LastVisitDay2=$_POST['LastVisitDay2'];
$LastVisitMonth2=$_POST['LastVisitMonth2'];
$LastVisitYear2=$_POST['LastVisitYear2'];
$LastVisaNumber2=$_POST['LastVisaNumber2'];
$DestinationID2=$_POST['DestinationID2'];
$OnwardCountryID2=$_POST['OnwardCountryID2'];
$PortTypeID2=$_POST['PortTypeID2'];
$EntryPortID2=$_POST['EntryPortID2'];
$DeparturePortID2=$_POST['DeparturePortID2'];
$ArrivalMonth2=$_POST['ArrivalMonth2'];
$ArrivalYear2=$_POST['ArrivalYear2'];
$StayDuration2=$_POST['StayDuration2'];
$HostTypeID2=$_POST['HostTypeID2'];
$NIN=$_POST['NIN'];
$PassOrPermitNo2=$_POST['PassOrPermitNo2'];
$HostName2=$_POST['HostName2'];
$HostMobileNo2=$_POST['HostMobileNo2'];
$HostEmail2=$_POST['HostEmail2'];
$HostOffice2=$_POST['HostOffice2'];
$RegistrationNo2=$_POST['RegistrationNo2'];
$Relationship2=$_POST['Relationship2'];
$HostAddress2=$_POST['HostAddress2'];
$AccomodationID2=$_POST['AccomodationID2'];
$ApplicantStayAddress2=$_POST['ApplicantStayAddress2'];


$stmt = $mysqli->prepare("UPDATE applications SET $ApplyingCountryID2=?;
EmbassyID=?;
IssuedCountryID=?;
VisaTypeID2=?;
VisitPurposeID2=?;
$IsFirstVisit2=?;
LastVisitDay2=?;
LastVisitMonth2=?;
LastVisitYear2=?;
LastVisaNumber2=?;
DestinationID2=?;
OnwardCountryID2=?;
PortTypeID2=?;
EntryPortID2=?;
DeparturePortID2=?;
ArrivalMonth2=?;
ArrivalYear2=?;
StayDuration2=?;
HostTypeID2=?;
NIN=?;
PassOrPermitNo2=?;
HostName2=?;
HostMobileNo2=?;
HostEmail2=?;
HostOffice2=?;
RegistrationNo2=?;
Relationship2=?;
HostAddress2=?;
AccomodationID2=?;
ApplicantStayAddress2=?;


 WHERE applicationid=?");
$stmt->bind_param('ssssssssssssssssssssssssssssss',
$ApplyingCountryID2,
$EmbassyID,
$IssuedCountryID,
$VisaTypeID2,
$VisitPurposeID2,
$IsFirstVisit2,
$LastVisitDay2,
$LastVisitMonth2,
$LastVisitYear2,
$LastVisaNumber2,
$DestinationID2,
$OnwardCountryID2,
$PortTypeID2,
$EntryPortID2,
$DeparturePortID2,
$ArrivalMonth2,
$ArrivalYear2,
$StayDuration2,
$HostTypeID2,
$NIN,
$PassOrPermitNo2,
$HostName2,
$HostMobileNo2,
$HostEmail2,
$HostOffice2,
$RegistrationNo2,
$Relationship2,
$HostAddress2,
$AccomodationID2,
$ApplicantStayAddress2,
$applicationid
);
$stmt->execute();
$stmt->close();

}


?>