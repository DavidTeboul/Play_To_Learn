<?php session_start(); ?>
<?php
session_start();
$dbServername = "localhost"; //Connect to server
$dbUsername = "u815710449_playtolearn"; // Username Database
$dbPassword = "Sce2019"; // Password Database
$dbName="u815710449_playtolearn"; // Name of table
$connect = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName); // Connect to Databse
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$connect->query($sql);

?>
