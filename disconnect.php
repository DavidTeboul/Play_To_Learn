<?php session_start(); ?>
<?php
$dbServername = "localhost";
            $dbUsername = "u815710449_playtolearn";
            $dbPassword = "Sce2019";
            $dbName="u815710449_playtolearn";
            $db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
                or die('could not connect to database');
date_default_timezone_set('Asie/Jerusalem');
$currentDate = date('Y-m-d H:i:s');
$name=$_SESSION['username'];
if($_SESSION['base']=="Child"){
$sql = "UPDATE MyGuests SET last_connection='$currentDate' WHERE username='$name' ";
}
else if($_SESSION['base']=="Parent"){
$sql = "UPDATE MyParents SET last_connection='$currentDate' WHERE username='$name' ";}
 if(mysqli_query($db,$sql)){
           session_unset();
session_destroy();
header("Refresh: 1; url=/Sign-in.html");
echo "Redirection to your page</i>";
exit();
}
else 
session_destroy();
header("Refresh: 1; url=/Sign-in.html");
echo "Redirection to your page</i>";
exit();
?>