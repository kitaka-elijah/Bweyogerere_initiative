<?php
require('../connection.php');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.



$page = isset($_GET['p'])? $_GET['p']:'';

if($page == 'view'){
   $result =  $mysqli->query("SELECT 
id,
parents_id,
surname,
firstname,
nin,
phone,
gender,
maritalstatus,
occupation,
day,
month,
year,
location,
religion,
next_of_kin_surname,
next_of_kin_firstname,
relationship,
next_of_kin_telephone,
account_number,
bank,
branch,
cdc,
passport_photo,
status  
FROM    parentReg  WHERE  deleted!='1' ");
  while($row = $result->fetch_assoc()){

      ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['parents_id']?></td>
         <td><?php echo $row['surname']?></td>
         <td><?php echo $row['firstname']?></td>
         <td><?php echo $row['nin']?></td>
         <td><?php echo $row['phone']?></td>
         <td><?php echo $row['gender']?></td>
         <td><?php echo $row['maritalstatus']?></td>
         <td><?php echo $row['occupation']?></td>
         <td><?php echo $row['day']?></td>
         <td><?php echo $row['month']?></td>
         <td><?php echo $row['year']?></td>
         <td><?php echo $row['location']?></td>
         <td><?php echo $row['religion']?></td>
         <td><?php echo $row['next_of_kin_surname']?></td>
         <td><?php echo $row['next_of_kin_firstname']?></td>
         <td><?php echo $row['relationship']?></td>
         <td><?php echo $row['next_of_kin_telephone']?></td>
         <td><?php echo $row['account_number']?></td>
         <td><?php echo $row['bank']?></td>
         <td><?php echo $row['branch']?></td>
         <td><?php echo $row['passport_photo']?></td>
         <td><?php echo $row['status']?></td>
        

</tr>
<?php
  }  
    
}else{
    
    


header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);


//$mysqli = new mysqli('localhost', 'user', 'password', 'database');




if ($input['action'] === 'edit') {
    $mysqli->query("

UPDATE parentReg SET 
parents_id='" . $input['parents_id'] . "',
surname='" . $input['surname'] . "',
firstname='" . $input['firstname'] . "',
nin='" . $input['nin'] . "',
phone='" . $input['phone'] . "',
gender='" . $input['gender'] . "',
maritalstatus='" . $input['maritalstatus'] . "',
occupation='" . $input['occupation'] . "',
day='" . $input['day'] . "',
month='" . $input['month'] . "',
year='" . $input['year'] . "',
location='" . $input['location'] . "',
religion='" . $input['religion'] . "',
next_of_kin_surname='" . $input['next_of_kin_surname'] . "',
next_of_kin_firstname='" . $input['next_of_kin_firstname'] . "',
relationship='" . $input['relationship'] . "',
next_of_kin_telephone='" . $input['next_of_kin_telephone'] . "',
account_number='" . $input['account_number'] . "',
bank='" . $input['bank'] . "',
branch='" . $input['branch'] . "',
cdc='" . $input['cdc'] . "',
passport_photo='" . $input['passport_photo'] . "',
status='" . $input['status'] . "'


    WHERE id='" . $input['id'] . "'");

} else if ($input['action'] === 'delete') {
    $mysqli->query("UPDATE parentReg SET deleted=1 WHERE id='" . $input['id'] . "'");
} else if ($input['action'] === 'restore') {
    $mysqli->query("UPDATE parentReg SET deleted=0 WHERE id='" . $input['id'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
    
}

?>
