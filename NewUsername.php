<?php 
session_start();
$dbServername = "localhost";
$dbUsername = "u815710449_playtolearn";
$dbPassword = "Sce2019";
$dbName="u815710449_playtolearn";
$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
           or die('could not connect to database');
$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
$name=$_SESSION['email'];
$sql = "UPDATE MyGuests SET username='$username' WHERE email='$name'";
$_SESSION['username']=$username;
if(mysqli_query($db,$sql)){
               header("Refresh: 0; url=/yourChildaccount.php");   
                echo "<script>alert('Password change with success');</script>";
                exit();
                } 
