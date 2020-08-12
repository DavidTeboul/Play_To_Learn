<?php  
//action.php
$dbServername = "localhost";
$dbUsername = "u815710449_playtolearn";
$dbPassword = "Sce2019";
$dbName="u815710449_playtolearn";
$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
           or die('could not connect to database');
$input = filter_input_array(INPUT_POST);

$username = mysqli_real_escape_string($connect, $input["username"]);
$email = mysqli_real_escape_string($connect, $input["email"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE MyGuests 
 SET username = '".$username."', 
 email = '".$last_name."' 
 WHERE Id = '".$input["Id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM MyGuests 
 WHERE Id = '".$input["Id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
