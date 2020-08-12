<?php session_start(); ?>
<?php
$dbServername = "localhost"; //Connect to server
$dbUsername = "u815710449_playtolearn"; // Username Database
$dbPassword = "Sce2019"; // Password Database
$dbName="u815710449_playtolearn"; // Name of table
$conn =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
           or die('could not connect to database');
$name = $_POST["username"]; // Collect username
$requete = "SELECT * FROM Admin";
$exec_requete = mysqli_query($conn,$requete);
$repons = mysqli_fetch_array($exec_requete);
$temp=0;
while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
    if($repons['username']==$name ){
                header("Refresh: 0; url=/yourAdmin.php");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>"; 
                } 
            function_alert("❗️This username already exist❗️ ");
    }
    
}
$sql = "INSERT INTO Admin (username,password)
VALUES ('$name','$password')";//Add Value to Databse
if(mysqli_query($conn,$sql)){
                header("Refresh: 0; url=/yourAdmin.php");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>"; 
                } 
            function_alert("❗️Your new admin add with success ❗️ ");
            }
else { header("Refresh: 0; url=/yourAdmin.php");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>"; 
                } 
            function_alert("❗️Error❗️ ");
}
?>
