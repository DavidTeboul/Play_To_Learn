<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Your Children</title>
<style>

table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
.button{
        box-shadow: 3px 3px 0px 0px;
         border: 5px #03f302 outset;
        color:white;
         background-color:#03f302;
         padding: 20px 34px;
         display: block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
}
</style>
</head>
<body>
    <style type="text/css">
      body {
        
      background-image:url(image/userparent.jpg);
      background-color:0;
       background-position-X:300px;
        background-size:55em;
       
      }
      </style>
    
    <?php
                if (empty($_SESSION['username']) or $_SESSION['base']!="Parent")
                {
            echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
            echo("<button style=\"margin-left: 540px; width: 190px;
    height: 50px;\" onclick=\"location.href='Sign-in.html'\">Login</button>");
            exit();
            }
            ?>  
    <button onclick="window.location.href = 'ParentPage.php';" class="button">Return</button>
<h1 style="text-align: center;">Your Children</h1>
<table>
<tr>
<th>Username</th>
<th>Email</th>
<th>Note</th>
<th>Last Connection</th>
</tr>
            <?php
            $dbServername = "localhost";
            $dbUsername = "u815710449_playtolearn";
            $dbPassword = "Sce2019";
            $dbName="u815710449_playtolearn";
            $db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
                    or die('could not connect to database');
            $requete = "SELECT * FROM MyGuests";
            $exec_requete = mysqli_query($db,$requete);
            $repons = mysqli_fetch_array($exec_requete);
            while($repons = mysqli_fetch_array($exec_requete)){
                if($_SESSION['Child1'] == $repons["username"]){
                    $user = $_SESSION['username'];
                    echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["email"] . "</td><td>"
                    . $repons["note"]. "</td></tr>";
                }
                if($_SESSION['Child2'] == $repons["username"]){
                    $user = $_SESSION['username'];
                    echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["email"] . "</td><td>"
                    . $repons["note"].  "</td><td>"
                    . $repons["last_connection"]."</td></tr>";
                }
                if($_SESSION['Child3'] == $repons["username"]){
                    $user = $_SESSION['username'];
                   echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["email"] . "</td><td>"
                    . $repons["note"].  "</td><td>"
                    . $repons["last_connection"]."</td></tr>";
                }
                if($_SESSION['Child4'] == $repons["username"]){
                    $user = $_SESSION['username'];
                    echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["email"] . "</td><td>"
                    . $repons["note"].  "</td><td>"
                    . $repons["last_connection"]."</td></tr>";
                }
                if($_SESSION['Child5'] == $repons["username"]){
                    $user = $_SESSION['username'];
                    echo "<tr><td>" . $repons["username"]. "</td><td>" . $repons["email"] . "</td><td>"
                    . $repons["note"].  "</td><td>"
                    . $repons["last_connection"]."</td></tr>";
                }
        }
            $conn->close();
            ?>
            
</table>

</body>
</html>