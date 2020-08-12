<?php session_start(); ?>
<?php
$dbServername = "localhost"; //Connect to server
$dbUsername = "u815710449_playtolearn"; // Username Database
$dbPassword = "Sce2019"; // Password Database
$dbName="u815710449_playtolearn"; // Name of table
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
           or die('could not connect to database');
$name = $_POST["username"]; // Collect username
$sex = $_POST["sexe"]; // Collect Sex
$email = $_POST["email"]; // Collect email
$requete = "SELECT * FROM MyGuests";
$exec_requete = mysqli_query($conn,$requete);
$repons = mysqli_fetch_array($exec_requete);
$temp=0;
while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
    if($repons['username']==$name ){
        header('Location:/Sign-up-exist-childuser.html');
        $temp=1;
        exit();
    }
    if($repons['email']==$email ){
        header('Location:/Sign-up-exist-childemail.html');
        $temp=1;
        exit();
    }
    
}
$age = $_POST["age"]; // Collect age
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
$sql = "INSERT INTO MyGuests (username,email,sex,password,pays,age,Adress_IP,Country_IP)
VALUES ('$name','$email','$sex','$password','$country','$age','$ip','$country_ip')";//Add Value to Databse
$Help=$_SESSION['username'];
if($_SESSION['Child1']==NULL){
$sqll = "UPDATE MyParents SET Child1='$name' WHERE username='$Help' ";
    $_SESSION['Child1']=$name;
}
else if($_SESSION['Child2']==NULL){
$sqll = "UPDATE MyParents SET Child2='$name' WHERE username='$Help' ";
    $_SESSION['Child2']=$name;
}
else if($_SESSION['Child3']==NULL){
$sqll = "UPDATE MyParents SET Child3='$name' WHERE username='$Help' ";
    $_SESSION['Child3']=$name;
}
else if($_SESSION['Child4']==NULL){
$sqll = "UPDATE MyParents SET Child4='$name' WHERE username='$Help' ";
    $_SESSION['Child4']=$name;
}
else if($_SESSION['Child5']==NULL){
$sqll = "UPDATE MyParents SET Child5='$name' WHERE username='$Help'";
    $_SESSION['Child5']=$name;
}
else { header("Refresh: 0; url=/ParentPage.php");
                function function_alertt($message) {   
                echo "<script>alert('$message');</script>";
                exit();
                } 
            function_alertt("Your can only add 5 children, Sorry !  ");}
$conn->query($sql);
    if(mysqli_query($conn,$sqll)){
                header("Refresh: 0; url=/ParentPage.php");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>";
                exit();
                } 
            function_alert("Your child is  register ");
            }

?>
