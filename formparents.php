<?php
$dbServername = "localhost"; //Connect to server
$dbUsername = "u815710449_playtolearn"; // Username Database
$dbPassword = "Sce2019"; // Password Database
$dbName="u815710449_playtolearn"; // Name of table
$conn =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
           or die('could not connect to database');
$name = $_POST["username"]; // Collect username
$email = $_POST["email"]; // Collect email
$requete = "SELECT * FROM MyParents";
$exec_requete = mysqli_query($conn,$requete);
$repons = mysqli_fetch_array($exec_requete);
$temp=0;
while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
    echo $name;
    echo $repons['username'];
    if($repons['username']==$name ){
          header("Refresh: 0; url=/Sign-up-Parents.html");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>"; 
                } 
            function_alert("Username already exist,try with another one ");
        exit();
        }
    if($repons['email']==$email ){
       header("Refresh: 0; url=/Sign-up-Parents.html");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>"; 
                } 
            function_alert("Email already exist,try with another one ");
        exit();
    }
    
}
$country = $_POST["country"];// Collect Country
$password=password_hash($_POST["password"],PASSWORD_DEFAULT); // Collect and Crypted password
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}//Collect Adress IP 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
$country_ip = $details->country; //Collect Country from Adress IP
$sql = "INSERT INTO MyParents (username,password,email,pays,Adress_IP,Country_IP)
VALUES ('$name','$password','$email','$country','$ip','$country_ip')";//Add Value to Databse

$conn->query($sql);
header('Location:/Sign-in.html');
?>
