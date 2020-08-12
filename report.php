<?php
$dbServername = "localhost"; //Connect to server
$dbUsername = "u815710449_playtolearn"; // Username Database
$dbPassword = "Sce2019"; // Password Database
$dbName="u815710449_playtolearn"; // Name of table
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName); // Connect to Databse
$name = $_POST["username"]; // Collect username
$report = $_POST["report"]; // Collect Review
$note = $_POST["note"]; 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO MyReport (username,report,note)
VALUES ('$name','$report','$note')";//Add Value to Databse
$conn->query($sql);
header('Location:/ParentPage.php');
?>
