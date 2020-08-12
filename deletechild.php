<?php session_start() ?>
<?php
$dbServername = "localhost";
$dbUsername = "u815710449_playtolearn";
$dbPassword = "Sce2019";
$dbName="u815710449_playtolearn";
$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
           or die('could not connect to database');
if(isset($_POST["Id"]))
{
$ID=$_POST["Id"];
$requete = "SELECT * FROM MyGuests";
 $exec_requete = mysqli_query($connect,$requete);
 //$repons = mysqli_fetch_array($exec_requete);
 $temp=0;
 while($repons=mysqli_fetch_array($exec_requete) and $temp=1){
      if($repons['Id']==$ID){
          $name=$repons['username'];
          $temp=1;}
 }
 $query = "DELETE FROM MyGuests WHERE Id = '".$_POST["Id"]."'";
 $requete = "SELECT * FROM MyParents";
 $exec_requete = mysqli_query($connect,$requete);
 $repons = mysqli_fetch_array($exec_requete);
 $temp=0;
 $null="";
 while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
     if($repons["Child1"]==$name){
     $sqll="UPDATE MyParents SET Child1='$null' WHERE Child1='$name'";
     $temp=1;
     }
      else if($repons["Child2"]==$name){
     $sqll="UPDATE MyParents SET Child2='$null' WHERE Child2='$name'"; 
     $temp=1;
     }
      else if($repons["Child3"]==$name){
     $sqll="UPDATE MyParents SET Child3='$null' WHERE Child3='$name'"; 
     $temp=1;
     }
      else if($repons['Child4']==$name){
     $sqll="UPDATE MyParents SET Child4='$null' WHERE Child4='$name'"; 
     $temp=1;
     }
      else if($repons["Child5"]==$name){
     $sqll="UPDATE MyParents SET Child5='$null' WHERE Child5='$name'";
     $temp=1;
     }
 }
 if(mysqli_query($connect, $query) and mysqli_query($connect, $sqll)){
         echo 'Data Deleted';
         
     }
}
?>
