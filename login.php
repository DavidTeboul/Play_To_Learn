

<?php 
session_start();
$dbServername = "localhost";
$dbUsername = "u815710449_playtolearn";
$dbPassword = "Sce2019";
$dbName="u815710449_playtolearn";
$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
           or die('could not connect to database');
$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
$requete = "SELECT * FROM MyGuests";
$exec_requete = mysqli_query($db,$requete);
$repons = mysqli_fetch_array($exec_requete);
$temp=0;
while($repons = mysqli_fetch_array($exec_requete)){
    if($repons['username']==$username and (password_verify($password,$repons['password'])==1)){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $repons['email'];
        $_SESSION['base']="Child";
         $_SESSION['image']=$repons['image'];
         $_SESSION['last_connection']=$repons['last_connection'];
          $to = 'admin@playtolearn.website';
         $header="MIME-Version: 1.0\r\n";
        $header.='From:"PlayToLearn"<admin@playtolearn.website>'."\n";
        $header.='Content-Type:text/html; charset="utf-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $subject = "New connection";
        $message='
         <html>
         <head>
           <title>New connection</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>
                     
                     <div align="center">Hi,</div>
                     New connection from <b>'.$username.'</b>
                     His last connection was : <b>'.$repons['last_connection'].'</b>
                     See you soon on PlayToLearn <a href="#">playtolearn.website</a> !
                     
                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       This is an automatic mail. 
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';
        mail($to,$subject,$message, $header);
        
        $requete = "SELECT * FROM MyParents";
        $exec_requete = mysqli_query($db,$requete);
        while($repons = mysqli_fetch_array($exec_requete) ){
            if($repons['Child1']==$username or $repons['Child2']==$username or $repons['Child3']==$username or $repons['Child4']==$username or $repons['Child5']==$username){
        $to = $repons['email'];
         $header="MIME-Version: 1.0\r\n";
        $header.='From:"PlayToLearn"<connection@playtolearn.website>'."\n";
        $header.='Content-Type:text/html; charset="utf-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $subject = "New connection";
        $message='
         <html>
         <head>
           <title>New connection</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>
                     
                     <div align="center">Hi,'.$repons['username'].'</div>
                     New connection from <b>'.$username.'</b>
                     His last connection was : <b>'.$repons['last_connection'].'</b>
                     See you soon on PlayToLearn <a href="#">playtolearn.website</a> !
                     
                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       This is an automatic mail. 
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';
          mail($to,$subject,$message, $header);
            }
            
        }
        include('youraccountChild.php');
        exit();
    }
}
$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
$requete = "SELECT * FROM MyParents";
$exec_requete = mysqli_query($db,$requete);
$repons = mysqli_fetch_array($exec_requete);
$temp=0;
while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
    if($repons['username']==$username and (password_verify($password,$repons['password'])==1)){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $repons['email'];
         $_SESSION['Child1']=$repons['Child1'];
         $_SESSION['Child2']=$repons['Child2'];
         $_SESSION['Child3']=$repons['Child3'];
         $_SESSION['Child4']=$repons['Child4'];
         $_SESSION['Child5']=$repons['Child5'];
         $_SESSION['base']="Parent";
        $_SESSION['last_connection']=$repons['last_connection'];
        $to = 'admin@playtolearn.website';
         $header="MIME-Version: 1.0\r\n";
        $header.='From:"PlayToLearn"<admin@playtolearn.website>'."\n";
        $header.='Content-Type:text/html; charset="utf-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $subject = "New connection";
        $message='
         <html>
         <head>
           <title>New connection</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>
                     
                     <div align="center">Hi,</div>
                     New connection from <b>'.$username.'</b>
                     His last connection was : <b>'.$repons['last_connection'].'</b>
                     See you soon on PlayToLearn <a href="#">playtolearn.website</a> !
                     
                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       This is an automatic mail. 
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';
        mail($to,$subject,$message, $header);
        include('ParentPage.php');
        exit();
    }
}

$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
$requete = "SELECT * FROM Admin";
$exec_requete = mysqli_query($db,$requete);
$repons = mysqli_fetch_array($exec_requete);
$temp=0;
while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
    if($repons['username']==$username){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['base']='Admin';
        include('yourAdmin.php');
        exit();
    }
}
$temp=1;
    if($temp==1){
                header("Refresh: 0; url=/Sign-in.html");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>"; 
                } 
            function_alert("Your username or password is not good");
            } 
?>